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

use Tygh\Registry;

include_once(Registry::get('config.dir.schemas') . 'exim/sale_lines.functions.php');

return array(
    'section' => 'orders',
    'pattern_id' => 'sale_lines',
    'name' => 'Sale lines',
    'key' => array('item_id', 'order_id'),
    'order' => 3,
    'table' => 'order_details',
    'references' => array(
        'orders' => array(
            'reference_fields' => array('order_id' => '&order_id'),
            'join_type' => 'LEFT',
            'alt_key' => array('order_id'),
        ),
        'product_prices' => array(
            'reference_fields' => array('product_id' => '&product_id'),
            'join_type' => 'LEFT',
            'alt_key' => array('product_id'),
        ),
    ),
    'condition' => array(
        'conditions' => array('&orders.is_parent_order' => 'N'),
    ),
    'order_by' => 'order_id',
    'range_options' => array(
        'selector_url' => 'orders.manage',
        'object_name' => __('orders'),
    ),
    'options' => array(
        'branch_code' => array(
            'title' => 'branch_code',
            'description' => 'branch_code',
            'type' => 'input',
            'default_value' => '63'
        ),
        'range_date' => array(
            'title' => 'range_date',
            'description' => 'range_date',
            'type' => 'range_date',
            'default_value' => ''
        ),
    ),
    'export_fields' => array(
        'Record sequence' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_lines_get_sequence'),
        ),
        'Record Identifier' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_lines_get_default_value', 'SL'),
        ),
        'Line Number' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_lines_get_default_value', ''),
        ),
        'Branch Code' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_lines_get_branch_code'),
        ),
        'Location Code' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_lines_get_branch_code'),
        ),
        'Date' => array(
            'table' => 'orders',
            'db_field' => 'timestamp',
            'process_get' => array('fn_exim_sale_lines_timestamp_to_date', '#this'),
        ),
        'Time' => array(
            'table' => 'orders',
            'db_field' => 'timestamp',
            'process_get' => array('fn_exim_sale_lines_timestamp_to_time', '#this'),
        ),
        'Pos/User ID' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_lines_get_default_value', '0001'),
        ),
        'Receipt number' => array(
            'db_field' => 'order_id',
            'alt_key' => true,
        ),
        'Invoice number' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_lines_get_default_value', ''),
        ),
        'Customer number' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_lines_get_default_value', ''),
        ),
        'Quantity' => array(
            'db_field' => 'amount',
        ),
        'Quantity multiplier' => array(
            'db_field' => 'amount'
        ),
        'Unit price' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_lines_get_default_value', ''),
        ),
        'Unit cost' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_lines_get_default_value', ''),
        ),
        'Extended amount' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_lines_get_default_value', ''),
        ),
        'PLU/SKU' => array(
            'db_field' => 'product_code'
        ),
        'Discount amount Exclude GST' => array(
            'db_field' => 'extra',
            'process_get' => array('fn_exim_sale_lines_get_discount_exclude_GST', '#this')
        ),
        'Discount percentage Include GST' => array(
            'db_field' => 'order_id',
            'process_get' => array('fn_exim_sale_lines_get_discount_percentage_include_GST', '#key', '#this'),
        ),
        'Discount reason code' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_lines_get_default_value', ''),
        ),
        'Return reason code' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_lines_get_default_value', ''),
        ),
        'GST amount' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_lines_get_default_value', ''),
        ),
        'GST rate' => array(
            'db_field' => 'order_id',
            'process_get' => array('fn_exim_sale_lines_get_amount_GST', '#this'),
        ),
        'Sales tax amount' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_lines_get_default_value', 0),
        ),
        'Sales tax rate' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_lines_get_default_value', 0),
        ),
        'GST flag' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_lines_get_default_value', 'T'),
        ),
        'Sales tax flag' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_lines_get_default_value', 'T'),
        ),
        'Line Status' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_lines_get_default_value', 'T'),
        ),
        'Selling price incl GST' => array(
            'db_field' => 'order_id',
            'process_get' => array('fn_exim_sale_lines_get_selling_price_include_GST', '#key', '#this'),
        ),
        'Extended amount incl GST' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_lines_get_default_value', ''),
        ),
        'Discount amount incl GST' => array(
            'db_field' => 'order_id',
            'process_get' => array('fn_exim_sale_lines_get_discount_include_GST', '#key', '#this'),
        ),
        'Division code' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_lines_get_default_value', ''),
        ),
        'Department code' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_lines_get_default_value', ''),
        ),
        'Class code' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_lines_get_default_value', ''),
        ),
        'Brand code' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_lines_get_default_value', ''),
        ),
        'Category code' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_lines_get_default_value', ''),
        ),
        'Season code' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_lines_get_default_value', ''),
        ),
        'Style code' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_lines_get_default_value', ''),
        ),
        'Colour code' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_lines_get_default_value', ''),
        ),
        'Size Code' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_lines_get_default_value', ''),
        ),
        'Original Line Status' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_lines_get_default_value', ''),
        ),
        'Loyalty card expiry date' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_lines_get_default_value', ''),
        ),
        'Original invoice number' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_lines_get_default_value', ''),
        ),
        'Serial number' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_lines_get_default_value', ''),
        ),
        'Global tax rate' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_lines_get_default_value', ''),
        ),
        'Sales person code' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_lines_get_default_value', '0001'),
        ),
        'Tour code' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_lines_get_default_value', ''),
        ),
        'Tour operator commission rate' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_lines_get_default_value', 0),
        ),
        'Promotion Code' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_lines_get_default_value', ''),
        ),
        'Manual Docket Number' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_lines_get_default_value', ''),
        ),
        'Warranty Duration' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_lines_get_default_value', 0),
        ),
        'Repair Job Number' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_lines_get_default_value', ''),
        ),
        'Original Sale Branch' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_lines_get_default_value', ''),
        ),
        'Model' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_lines_get_default_value', ''),
        ),
        'Service Plan Key' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_lines_get_default_value', ''),
        ),
        'Sale sub-line' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_lines_get_default_value', ''),
        ),
        'Colour' => array(
            'db_field' => 'extra',
            'linked' => true,
            'process_get' => array('fn_exim_sale_lines_get_extra_option_field', '#this', 'Color')
        ),
        'Size' => array(
            'db_field' => 'extra',
            'linked' => true,
            'process_get' => array('fn_exim_sale_lines_get_extra_option_field', '#this', 'Size')
        )
    ),
);
