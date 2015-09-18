<?php
/***************************************************************************
* PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
* "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
****************************************************************************/

use Tygh\Registry;
use Tygh\Storage;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($mode == 'view') {
    // Assign attachments files for products
    $product_id = !empty($_REQUEST['product_id']) ? intval($_REQUEST['product_id']) : 0;

    if (!empty($product_id)) {
        $images_product_related = db_get_array(
            "SELECT ?:images_links.*, ?:images.image_path, ?:images.image_x, ?:images.image_y, ?:images.image_id as images_image_id"
            . " FROM ?:addon_related_products"
            . " LEFT JOIN ?:images_links ON ?:addon_related_products.slave_id = ?:images_links.object_id"
            . " LEFT JOIN ?:images ON ?:images_links.detailed_id = ?:images.image_id"
            . " WHERE ?:addon_related_products.master_id = ?s AND ?:images_links.object_type = ?s",
            $product_id, 'product'
        );

        $products_related = array();
        foreach ($images_product_related as $image) {
            $image['detailed'] = $detailed = fn_attach_absolute_image_paths($image, 'detailed');
            $products_related[$image['object_id']][] = $image;

        }

        Registry::get('view')->assign('products_related', $products_related);
    }

}


