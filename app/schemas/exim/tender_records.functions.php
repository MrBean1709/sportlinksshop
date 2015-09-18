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

function fn_exim_tender_records_get_default_value($value){
    return $value !== null ? $value : '';
}

function fn_exim_tender_records_get_sequence()
{
    static $num_sequence = 0;

    return 'sl' . str_pad(++$num_sequence, 6, 0, STR_PAD_LEFT);
}

function fn_exim_tender_records_timestamp_to_date($timestamp)
{
    return date('Ymd', intval($timestamp));
}

function fn_exim_tender_records_timestamp_to_time($timestamp)
{
    return date('H:i:s', intval($timestamp));
}

function fn_exim_tender_records_get_branch_code(){
    if (!empty($_REQUEST['export_options']) && !empty($_REQUEST['export_options']['branch_code'])) {
        $value = $_REQUEST['export_options']['branch_code'];
    }

    return $value ? $value : '';
}

/*
 * GST amount : number % GST
 *
 */
function fn_exim_tender_records_get_amount_GST ($order_id)
{
    $data = db_get_field("SELECT data FROM ?:order_data WHERE order_id = ?i AND type = ?s", $order_id, 'T');
    if (!empty($data)) {
        $data = @unserialize($data);
        $rate_tax = 0;

        if (!empty($data) && is_array($data)) {
            foreach ($data as $tax) { // only check first GST
                $rate_tax = $tax['rate_type'] == 'P' ?  $tax['rate_value'] : 0;
                break;
            }
        }

        return $rate_tax;
    }

    return 0;
}
