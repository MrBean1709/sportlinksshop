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

include_once(Registry::get('config.dir.schemas') . 'exim/sale_orders.functions.php');

$schema = array(
    'section' => 'orders',
    'pattern_id' => 'sale_orders',
    'name' => 'Sale header',
    'key' => array('order_id'),
    'order' => 2,
    'table' => 'orders',
    'condition' => array(
        'conditions' => array(
            'is_parent_order' => 'N',
        ),
        'use_company_condition' => true,
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
            'process_get' => array('fn_exim_sale_orders_get_sequence'),
            'db_field' => 'order_id',
            'alt_key' => true,
        ),
        'Record Identifier' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_orders_get_default_value', 'SH'),
        ),
        'Branch Code' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_orders_get_branch_code'),
        ),
        'Location Code' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_orders_get_branch_code'),
        ),
        'Date' => array(
            'db_field' => 'timestamp',
            'process_get' => array('fn_exim_sale_orders_timestamp_to_date', '#this'),
        ),
        'Time' => array(
            'db_field' => 'timestamp',
            'process_get' => array('fn_exim_sale_orders_timestamp_to_time', '#this'),
            'convert_put' => array('fn_exim_sale_orders_ignore', '')
        ),
        'Pos/User ID' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_orders_get_default_value', '0001'),
        ),
        'Receipt number' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_orders_get_default_value', '#key'),
        ),
        'Invoice number' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_orders_get_docs', '#key', 'I'),
        ),
        'Layby number' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_orders_get_default_value', ''),
        ),
        'Customer number' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_orders_get_default_value', ''),
        ),
        'Total Sales exclude GST' => array(
            'db_field' => 'subtotal',
            'process_get' => array('fn_exim_sale_orders_get_total_sales_exclude_GST', '#this', '#key'),
        ),
        'Discount exclude GST' => array(
            'db_field' => 'discount'
        ),
        'Rounding' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_orders_get_default_value', 0),
        ),
        'Cheque fee' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_orders_get_default_value', 0),
        ),
        'Service charges' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_orders_get_default_value', 0),
        ),
        'GST amount' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_orders_get_amount_GST', '#key'),
        ),
        'Sales tax' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_orders_get_default_value', 0),
        ),
        'Number of detail lines' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_orders_get_number_item', '#key'),
        ),
        'Total GST inclusive' => array(
            'db_field' => 'subtotal',
            'process_get' => array('fn_exim_sale_orders_get_total_sales_inclusive_GST', '#this', '#key'),
        ),
        'Charged to account' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_orders_get_default_value', 0),
        ),
        'Charge account payment amount' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_orders_get_default_value', 0),
        ),
        'Layby payment amount' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_orders_get_default_value', 0),
        ),
        'Discount GST inclusive' => array(
            'db_field' => 'discount',
            'process_get' => array('fn_exim_sale_orders_get_discount_include_GST', '#this', '#key'),
        ),
        'Customer order number' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_orders_get_default_value', ''),
        ),
        'Sales tax flag' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_orders_get_default_value', 'T'),
        ),
        'Tax exemption certificate number' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_orders_get_default_value', ''),
        ),
        'Customer club code' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_orders_get_default_value', ''),
        ),
        'Club points awarded this transaction' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_orders_get_default_value', ''),
        ),
        'VIP Customer number' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_orders_get_default_value', ''),
        ),
        'Customer postcode' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_orders_get_default_value', ''),
        ),
        'Customer order number' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_orders_get_default_value', ''),
        ),
        'GST Liability' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_orders_get_default_value', ''),
        ),
        'Optional end of transaction field 1' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_orders_get_default_value', ''),
        ),
        'Optional end of transaction field 2' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_orders_get_default_value', ''),
        ),
        'Staff surname for staff discount' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_orders_get_default_value', ''),
        ),
        'Staff first name for staff discount' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_orders_get_default_value', ''),
        ),
        'Staff/payroll number for staff disc' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_orders_get_default_value', ''),
        ),
        'Fly buys number' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_orders_get_default_value', ''),
        ),
        'Fly buys number replace in host' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_orders_get_default_value', 'N'),
        ),
        'Reward Code' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_orders_get_default_value', ''),
        ),
        'Optional end of transaction field 3' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_orders_get_default_value', ''),
        ),
        'Optional end of transaction field 4' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_orders_get_default_value', ''),
        ),
        'Optional end of transaction field 5' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_orders_get_default_value', ''),
        ),
        'Global tax rate' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_orders_get_amount_GST', '#key'),
        ),
        'Error correct transaction' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_orders_get_default_value', 'N'),
        ),
        'Total trade in value' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_orders_get_default_value', 0),
        ),
        'Tour code' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_orders_get_default_value', ''),
        ),
        'Tour operator commission rate' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_orders_get_default_value', 0),
        ),
        'Nuance Transaction Type' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_orders_get_default_value', 0),
        ),
        'Nuance Sale Type Analysis Code' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_orders_get_default_value', ''),
        ),
        'Sales Person Code' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_orders_get_default_value', '0001'),
        ),
        'Cashier branch' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_orders_get_default_value', ''),
        ),
        'Sales person branch' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_orders_get_default_value', ''),
        ),
        'Sale contains Gift Purchases' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_orders_get_default_value', ''),
        ),
        'External Transaction File' => array(
            'linked' => false,
            'process_get' => array('fn_exim_sale_orders_get_default_value', ''),
        ),
    ),
);

return $schema;
