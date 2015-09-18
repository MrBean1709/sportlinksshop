<?php
/***************************************************************************
*                                                                          *
*    Copyright (c) 2004 Simbirsk Technologies Ltd. All rights reserved.    *
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

if (!defined('BOOTSTRAP')) { die('Access denied'); }


function fn_1clue_related_products_delete_product_post(&$product_id)
{
	db_query("DELETE FROM ?:addon_related_products_free WHERE master_id = ?i OR slave_id = ?i", $product_id, $product_id);

	return true;
}

function fn_1clue_related_products_get_products(&$params, &$fields, &$sortings, &$condition, &$join, &$sorting, &$group_by, &$lang_code)
{
	if (!empty($params['related'])) {
		$join .=  " LEFT JOIN ?:addon_related_products_free ON products.product_id = ?:addon_related_products_free.slave_id";
		$condition .= db_quote(" AND ?:addon_related_products_free.master_id = ?i", $params['related']);
	}

	return true;
}

function fn_1clue_related_products_get_product_data_post(&$product, &$auth, &$preview)
{
/*	if (!empty($product['product_id'])) {
		list($related) = fn_get_products(array ('related' => $product['product_id'], 'type' => 'extended', 'page' => (int) $_REQUEST['page'], 'disable_searchanise' => true), Registry::get('settings.Appearance.products_per_page'));

		fn_gather_additional_products_data($related, array('get_icon' => true, 'get_detailed' => true, 'get_options' => true, 'get_discounts' => true, 'get_features' => false));

		$product['related'] = $related;
	}*/
}

?>
