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

function fn_1clue_related_products_extended_get_products(&$params, &$fields, &$sortings, &$condition, &$join, &$sorting, &$group_by)
{
	if (!empty($params['related'])) {

		if ($params['random'] == 'Y') {
			$fields[] = 'RAND() as related';
			$sortings['related'] = 'related';
		}
		$join .=  " LEFT JOIN ?:addon_related_products ON products.product_id = ?:addon_related_products.slave_id";
		$condition .= db_quote(" AND ?:addon_related_products.master_id = ?i", $params['related']);
	}

	return true;
}

function fn_1clue_related_products_extended_get_product_data_post(&$product, &$auth)
{
	if (empty($product['product_id'])) {
		return false;
	}

	$product['1c_tags'] = db_get_fields("SELECT tag FROM ?:addon_related_products_tags WHERE product_id=?i", $product['product_id']);
	//fn_print_r($product['1c_tags']);
}

function fn_1clue_related_products_extended_smarty_function_block_output_pre_cache(&$_block_data, &$smarty, &$use_cache, &$update_handlers, &$update_params_condition)
{
	if ($_block_data['properties']['fillings'] == 'related' && $_block_data['properties']['random'] == 'Y') {
		$use_cache = false;
	}

	return true;
}

function fn_1clue_related_products_extended_get_additional_product_data(&$product, &$auth, &$get_options, &$params)
{
	$product['1c_tags'] = db_get_fields("SELECT tag FROM ?:addon_related_products_tags WHERE product_id=?i", $product['product_id']);

	return true;
}

function fn_get_1c_tags($product_id = 0, $string = false)
{
	if (empty($product_id)) {
		return false;
	}

	$tags = db_get_fields("SELECT tag FROM ?:addon_related_products_tags WHERE product_id=?i", $product_id);

	return ($string !== false) ? implode(", ", $tags) : $tags;
}

function fn_update_1c_tags($product_id, $tags = '')
{

	if (empty($product_id)) {
		return false;
	}

	// Clear old tags
	db_query("DELETE FROM ?:addon_related_products_tags WHERE product_id=?i", $product_id);

	// Break if there are no tags
	if (empty($tags)) {
		return true;
	}
	// Add new tags
	$_tags = explode(",", trim($tags));
	if(!empty($_tags)) {
		foreach($_tags as $v) {
			if (!empty($v)) {
				$_data = array(
						'product_id' => $product_id,
						'tag' => trim($v)
					);
				db_query("REPLACE INTO ?:addon_related_products_tags ?e", $_data);
			}
		}
	}

	return true;
}

function fn_set_related($product_id, $products, $link_type)
{
	//fn_print_r($product_id, $products, $link_type);
	if ($link_type == 'cross_linked') {
		$products[] = $product_id;
		$products = array_unique($products);
		$_entry = array();
		foreach ($products as $_entry['master_id']) {
			foreach ($products as $_entry['slave_id']) {
				if (empty($_entry['slave_id']) || ($_entry['slave_id'] == $_entry['master_id'])) {
					continue;
				}
				db_query('REPLACE INTO ?:addon_related_products ?e', $_entry);
			}
		}

	} elseif ($link_type == 'bi_directional') {
		$_entry = array (
			'master_id' => $_REQUEST['product_id']
		);

		foreach ($products as $_entry['slave_id']) {
			if (empty($_entry['slave_id']) || ($_entry['slave_id'] == $_entry['master_id'])) {
				continue;
			}
			db_query('INSERT INTO ?:addon_related_products ?e', $_entry);
			db_query('INSERT INTO ?:addon_related_products ?e', array('master_id' => $_entry['slave_id'], 'slave_id' => $_entry['master_id']));
		}

	} elseif ($link_type == 'no_links') {
		$_entry = array (
			'master_id' => $_REQUEST['product_id']
		);

		foreach ($products as $_entry['slave_id']) {
			if (empty($_entry['slave_id']) || ($_entry['slave_id'] == $_entry['master_id'])) {
				continue;
			}
			db_query('INSERT INTO ?:addon_related_products ?e', $_entry);
		}
	}

	return true;
}

function fn_set_1c_tags($product_id = 0, $tags)
{
	if (empty($product_id)) {
		return false;
	}

	fn_update_1c_tags($product_id, $tags);
	if (Registry::get('addons.1clue_related_products_extended.related_filling') == 'tags') {
		$_tags = fn_get_1c_tags($product_id);
		if (!empty($_tags)) {
			foreach ($_tags as $tag) {
				$tag_analogues = db_get_fields("SELECT product_id FROM ?:addon_related_products_tags WHERE tag=?s", $tag);
				fn_set_related($product_id, $tag_analogues, 'cross_linked');
			}
		}
	}
	return true;
}
?>
