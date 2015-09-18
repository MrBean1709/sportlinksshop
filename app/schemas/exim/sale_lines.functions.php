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


function fn_exim_sale_lines_get_default_value($value){
    return $value !== null ? $value : '';
}


function fn_exim_sale_lines_get_sequence()
{
    static $num_sequence = 0;

    return 'sl' . str_pad(++$num_sequence, 6, 0, STR_PAD_LEFT);
}

function fn_exim_sale_lines_get_branch_code(){
    if (!empty($_REQUEST['export_options']) && !empty($_REQUEST['export_options']['branch_code'])) {
        $value = $_REQUEST['export_options']['branch_code'];
    }

    return $value ? $value : '';
}

function fn_exim_sale_lines_get_extra_option_field($data, $field)
{
    if (!empty($data)) {
        $data = @unserialize($data);
        if (!empty($data['product_options_value']) && is_array($data['product_options_value'])) {
            foreach ($data['product_options_value'] as $option) {
                if ($option['option_name'] == $field) {
                    return $option['variant_name'];
                }
            }
        }
    }

    return '';
}


function fn_exim_sale_lines_get_amount_GST ($order_id)
{
    $data = db_get_field("SELECT data FROM ?:order_data WHERE order_id = ?i AND type = ?s", $order_id, 'T');
    if (!empty($data)) {
        $data = @unserialize($data);
        $rate_tax = 0;

        if (!empty($data) && is_array($data)) {
            foreach ($data as $tax) {
                $rate_tax = $tax['rate_type'] == 'P' ?  $tax['rate_value'] : 0;

                if ($tax['price_includes_tax'] == Y) {
                    $rate_tax = -floatval($rate_tax);
                } else {
                    $rate_tax = floatval($rate_tax);
                }

                // only check first GST
                break;
            }
        }

        return $rate_tax;
    }

    return 0;
}


function fn_exim_sale_lines_get_discount_exclude_GST($data)
{
    if (!empty($data)) {
        $data = @unserialize($data);

        if (!empty($data['discount'])) {
            return $data['discount'];
        }
    }

    return 0;
}

function fn_exim_sale_lines_get_discount_include_GST($item_id, $order_id)
{
    $data = db_get_array("SELECT * FROM ?:order_details WHERE item_id = ?i AND order_id = ?i", $item_id, $order_id);

    if (!empty($data)) {
        $rate_tax = 0;
        $discount = 0;

        foreach ($data as $item) {
            $rate_tax = fn_exim_sale_lines_get_amount_GST($order_id);

            $extra = @unserialize($item['extra']);
            $discount = !empty($extra['discount']) ? $extra['discount'] : 0;
            break;
        }

        return floatval($discount) * (1 + floatval($rate_tax) / 100);
    }

    return 0;
}

function fn_exim_sale_lines_get_discount_percentage_include_GST($item_id, $order_id)
{
    $data = db_get_array("SELECT * FROM ?:order_details WHERE item_id = ?i AND order_id = ?i", $item_id, $order_id);

    if (!empty($data)) {
        $rate_tax = 0;
        $base_price = 0;
        $discount_gst = 0;
        $discount = 0;

        foreach ($data as $item) {
            $rate_tax = fn_exim_sale_lines_get_amount_GST($order_id);

            $extra = @unserialize($item['extra']);
            $base_price = !empty($extra['base_price']) ? $extra['base_price'] : 0;
            $discount = !empty($extra['discount']) ? $extra['discount'] : 0;
            break;
        }

        $discount_gst = floatval($discount) * (1 + floatval($rate_tax) / 100);
        $discount_percent = floatval(($discount_gst / $base_price) * 100);
        return number_format($discount_percent, 2);
    }


    return 0;
}


function fn_exim_sale_lines_get_selling_price_include_GST($item_id, $order_id)
{
    $data = db_get_array("SELECT * FROM ?:order_details WHERE item_id = ?i AND order_id = ?i", $item_id, $order_id);

    if (!empty($data)) {
        $rate_tax = 0;
        $price = 0;

        foreach ($data as $item) {
            $rate_tax = fn_exim_sale_lines_get_amount_GST($order_id);
            $extra = @unserialize($item['extra']);
            $price = $item['price'];
            break;
        }

        $rate_tax = floatval($rate_tax);
        $price = floatval($price);
        return  $rate_tax > 0 ? ( $price * (1 + $rate_tax/ 100) ) : $price;
    }

    return 0;
}

function fn_exim_sale_lines_timestamp_to_date($timestamp)
{
    return date('Ymd', intval($timestamp));
}

function fn_exim_sale_lines_timestamp_to_time($timestamp)
{
    return date('H:i:s', intval($timestamp));
}
