<?php
/***************************************************************************
*                                                                          *
*    Copyright (c) 2009 Simbirsk Technologies Ltd. All rights reserved.    *
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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	//
	// Update required products
	//

	if ($mode == 'update') {

		if (!empty($_REQUEST['product_id'])) {
			if (Registry::get('addons.1clue_related_products_extended.related_filling') == 'tags') {
				fn_update_1c_tags($_REQUEST['product_id'], $_REQUEST['product_data']['1c_tags']);
				db_query('DELETE FROM ?:addon_related_products WHERE master_id = ?i OR slave_id= ?i', $_REQUEST['product_id'], $_REQUEST['product_id']);

				$tags = fn_get_1c_tags($_REQUEST['product_id']);
				if (!empty($tags)) {
					foreach ($tags as $tag) {
						$tag_related = db_get_fields("SELECT product_id FROM ?:addon_related_products_tags WHERE tag=?s", $tag);
						fn_set_related($_REQUEST['product_id'], $tag_related, 'cross_linked');
					}
				}

			} else {
				$remove_slave = ((Registry::get('addons.1clue_related_products_extended.link_type') == 'no_links') ? '0' : $_REQUEST['product_id']);
				db_query('DELETE FROM ?:addon_related_products WHERE master_id = ?i OR slave_id= ?i', $_REQUEST['product_id'], $remove_slave);

				if (!empty($_REQUEST['related'])) {
					$related = explode(',', $_REQUEST['related']);
					fn_set_related($_REQUEST['product_id'], $related, Registry::get('addons.1clue_related_products_extended.link_type'));
				}
			}
		}
	}
}

if ($mode == 'update') {
	$product_id = empty($_REQUEST['product_id']) ? 0 : intval($_REQUEST['product_id']);

	Registry::set('navigation.tabs.related_products', array (
		'title' => __('related_products'),
		'js' => true
	));

	if (Registry::get('addons.1clue_related_products_extended.related_filling') == 'tags') {
		$related = db_get_array('SELECT slave_id as product_id, GROUP_CONCAT(tag) as tags FROM ?:addon_related_products an INNER JOIN ?:addon_related_products_tags tags ON an.slave_id=tags.product_id WHERE master_id = ?i GROUP BY product_id', $product_id);
	} else {
		$related = db_get_fields('SELECT slave_id FROM ?:addon_related_products WHERE master_id = ?i', $product_id);
	}

	Registry::get('view')->assign('related', $related);
}
?>
