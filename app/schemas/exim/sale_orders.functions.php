<?php
/***************************************************************************
*                                                                          *
*   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
*                                                                          *
* This  is  commercial  software,  only  users  who have purchased a valid *
* license  and  accept  to the terms of the  License Agreement can install *
* and use this program.                                                    *
*                                                                          *
****************************************************************************
* PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
* "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
****************************************************************************/

function fn_exim_sale_orders_get_default_value($value){
    return $value !== null ? $value : '';
}

function fn_exim_sale_orders_ignore($value){
    return true;
}


function fn_exim_sale_orders_get_branch_code(){
    if (!empty($_REQUEST['export_options']) && !empty($_REQUEST['export_options']['branch_code'])) {
        $value = $_REQUEST['export_options']['branch_code'];
    }

    return $value ? $value : '';
}

function fn_exim_sale_orders_timestamp_to_date($timestamp)
{
    return date('Ymd', intval($timestamp));
}

function fn_exim_sale_orders_timestamp_to_time($timestamp)
{
    return date('H:i:s', intval($timestamp));
}

function fn_exim_sale_orders_get_docs($order_id, $type)
{
    $data = db_get_field("SELECT doc_id FROM ?:order_docs WHERE order_id = ?i AND type = ?s", $order_id, $type);
    if (!empty($data)) {
        return $data;
    }
}

function fn_exim_sale_orders_set_docs($order_id, $data, $type)
{
    if (!empty($data)) {

        // let's remove doc_id if such document exists. Doc id for this order will be auto incremented.
        $is_exists = db_get_field("SELECT doc_id FROM ?:order_docs WHERE doc_id = ?i AND order_id != ?i", $data, $order_id, $type);
        if ($is_exists) {
            $data = 0;
        }

        $insert = array(
            'order_id' => $order_id,
            'type' => $type,
            'doc_id' => $data
        );

        // user can change the doc_id. We should delete previous records.
        db_query("DELETE FROM ?:order_docs WHERE `order_id` = ?i AND `type` = ?s", $order_id, $type);
        db_query("REPLACE INTO ?:order_docs ?e", $insert);
    }

    return true;
}

function fn_exim_sale_orders_get_number_item($order_id)
{
    return db_get_field("SELECT count(*) FROM ?:order_details WHERE order_id = ?i", $order_id);
}

function fn_exim_sale_orders_get_sequence()
{
    static $num_sequence = 0;

    return 'sl' . str_pad(++$num_sequence, 6, 0, STR_PAD_LEFT);
}

//
// Get order data information
// Parameters:
// @order_id - order ID
// @type - type of information
function fn_exim_sale_orders_get_data($order_id, $type)
{
    $data = db_get_field("SELECT data FROM ?:order_data WHERE order_id = ?i AND type = ?s", $order_id, $type);
    if (!empty($data)) {

        // Payment information
        if ($type == 'P') {
            $data = @unserialize(fn_decrypt_text($data));
        // Coupons, Taxes and Shipping information
        } elseif (strpos('CTL', $type) !== false) {
            $data = @unserialize($data);

            // price tax
            if (!empty($data) && is_array($data) && $type == 'T') {
                $price_tax = 0;
                foreach ($data as $item) {
                    $price_tax += !empty($item['tax_subtotal']) ? floatval($item['tax_subtotal']) : 0;
                    break;
                }

                return $price_tax;
            }
        }

        return fn_exim_json_encode($data);
    }
}

/*
 * Total Sales exclude GST  : Total sales minus % GST
 *
 */
function fn_exim_sale_orders_get_total_sales_exclude_GST ($subtotal, $order_id)
{
    $data = db_get_field("SELECT data FROM ?:order_data WHERE order_id = ?i AND type = ?s", $order_id, 'T');
    if (!empty($data)) {
        $data = @unserialize($data);
        $tax_subtotal_include_price = 0;
        $tax_subtotal_not_include_price = 0;

        if (!empty($data) && is_array($data)) {
            foreach ($data as $tax) {
                if ($tax['price_includes_tax'] == 'N') {
                    $tax_subtotal_not_include_price += !empty($tax['tax_subtotal']) ? floatval($tax['tax_subtotal']) : 0;
                } else {
                    $tax_subtotal_include_price += !empty($tax['tax_subtotal']) ? floatval($tax['tax_subtotal']) : 0;
                }

                // only check first GST
                break;
            }
        }

        return $subtotal - $tax_subtotal_include_price;
    }

    return $subtotal;
}

/*
 * Total Sales inclusive GST  : Total sales plus % GST
 *
 */
function fn_exim_sale_orders_get_total_sales_inclusive_GST ($subtotal, $order_id)
{
    $data = db_get_field("SELECT data FROM ?:order_data WHERE order_id = ?i AND type = ?s", $order_id, 'T');
    if (!empty($data)) {
        $data = @unserialize($data);
        $tax_subtotal_include_price = 0;
        $tax_subtotal_not_include_price = 0;

        if (!empty($data) && is_array($data)) {
            foreach ($data as $tax) {
                if ($tax['price_includes_tax'] == 'N') {
                    $tax_subtotal_not_include_price += !empty($tax['tax_subtotal']) ? floatval($tax['tax_subtotal']) : 0;
                } else {
                    $tax_subtotal_include_price += !empty($tax['tax_subtotal']) ? floatval($tax['tax_subtotal']) : 0;
                }

                // only check first GST
                break;
            }
        }

        return $subtotal + $tax_subtotal_not_include_price;
    }

    return $subtotal;
}

/*
 * Discount GST inclusive : Sales discount with  % GST
 *
 */
function fn_exim_sale_orders_get_discount_include_GST ($discount, $order_id)
{
    if (floatval($discount) == 0) return $discount;

    $data = db_get_field("SELECT data FROM ?:order_data WHERE order_id = ?i AND type = ?s", $order_id, 'T');
    if (!empty($data)) {
        $data = @unserialize($data);
        $rate_tax = 0;

        if (!empty($data) && is_array($data)) {
            foreach ($data as $tax) {
                $rate_tax = $tax['rate_type'] == 'P' ?  $tax['rate_value'] : 0;

                // only check first GST
                break;
            }
        }

        return floatval($discount) + floatval($discount) * floatval($rate_tax) / 100;
    }

    return $discount;
}

/*
 * GST amount :  % GST
 *
 */
function fn_exim_sale_orders_get_amount_GST ($order_id)
{
    $data = db_get_field("SELECT data FROM ?:order_data WHERE order_id = ?i AND type = ?s", $order_id, 'T');
    if (!empty($data)) {
        $data = @unserialize($data);
        $rate_tax = 0;

        if (!empty($data) && is_array($data)) {
            foreach ($data as $tax) {
                $rate_tax = $tax['rate_type'] == 'P' ?  $tax['rate_value'] : 0;

                // only check first GST
                break;
            }
        }

        return $rate_tax;
    }

    return 0;
}
