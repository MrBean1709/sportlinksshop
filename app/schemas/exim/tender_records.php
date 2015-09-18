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

include_once(Registry::get('config.dir.schemas') . 'exim/tender_records.functions.php');

$schema = array(
    'section' => 'orders',
    'pattern_id' => 'tender_records',
    'name' => 'Tender records',
    'key' => array('order_id'),
    'order' => 4,
    'table' => 'orders',
    'condition' => array(
        'conditions' => array('is_parent_order' => 'N'),
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
            'linked' => false,
            'process_get' => array('fn_exim_tender_records_get_sequence'),
        ),
        'Record Identifier' => array(
            'linked' => false,
            'process_get' => array('fn_exim_tender_records_get_default_value', 'TN'),
        ),
        'Receipt number' => array(
            'db_field' => 'order_id',
            'alt_key' => true,
        ),
        'Tender code' => array(
            'linked' => false,
            'process_get' => array('fn_exim_tender_records_get_default_value', 'PAYPAL'),
        ),
        'Amount' => array(
            'db_field' => 'total'
        ),
        'Ref number' => array(
            'linked' => false,
            'process_get' => array('fn_exim_tender_records_get_default_value', ''),
        ),
        'Expiry date' => array(
            'linked' => false,
            'process_get' => array('fn_exim_tender_records_get_default_value', ''),
        ),
        'Branch' => array(
            'linked' => false,
            'process_get' => array('fn_exim_tender_records_get_branch_code'),
        ),
        'Location Code' => array(
            'linked' => false,
            'process_get' => array('fn_exim_tender_records_get_branch_code'),
        ),
        'Date' => array(
            'db_field' => 'timestamp',
            'process_get' => array('fn_exim_tender_records_timestamp_to_date', '#this'),
        ),
        'Time' => array(
            'db_field' => 'timestamp',
            'process_get' => array('fn_exim_tender_records_timestamp_to_date', '#this'),
        ),
        'EFT Card Type' => array(
            'linked' => false,
            'process_get' => array('fn_exim_tender_records_get_default_value', ''),
        ),
        'EFT Account Type' => array(
            'linked' => false,
            'process_get' => array('fn_exim_tender_records_get_default_value', ''),
        ),
        'EFT Audit Number' => array(
            'linked' => false,
            'process_get' => array('fn_exim_tender_records_get_default_value', ''),
        ),
        'Shift' => array(
            'linked' => false,
            'process_get' => array('fn_exim_tender_records_get_default_value', ''),
        ),
        'Pos/User ID' => array(
            'linked' => false,
            'process_get' => array('fn_exim_tender_records_get_default_value', '0001'),
        ),
        'EFT Settlement Date' => array(
            'linked' => false,
            'process_get' => array('fn_exim_tender_records_get_default_value', ''),
        ),
        'Change records' => array(
            'linked' => false,
            'process_get' => array('fn_exim_tender_records_get_default_value', 'N'),
        ),
        'Foreign currency amount' => array(
            'linked' => false,
            'process_get' => array('fn_exim_tender_records_get_default_value', '0'),
        ),
        'Foreign currency exchange rate' => array(
            'linked' => false,
            'process_get' => array('fn_exim_tender_records_get_default_value', '0'),
        ),
        'Voucher Issue' => array(
            'linked' => false,
            'process_get' => array('fn_exim_tender_records_get_default_value', 'N'),
        ),
        'EFTPOS Cashout Amount' => array(
            'linked' => false,
            'process_get' => array('fn_exim_tender_records_get_default_value', ''),
        ),
        'Tender Line Number' => array(
            'linked' => false,
            'process_get' => array('fn_exim_tender_records_get_default_value', ''),
        )
    ),
);

return $schema;
