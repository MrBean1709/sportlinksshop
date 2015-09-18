<?php /* Smarty version Smarty-3.1.18, created on 2015-07-03 22:18:11
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/wishlist/hooks/cart/items_list.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1937202132559699a3eeefb3-45876859%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '2b3d12e118b88d8d874f7dfc6bfdb7d546c35614' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/wishlist/hooks/cart/items_list.post.tpl',
      1 => 1418020414,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1937202132559699a3eeefb3-45876859',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'customer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_559699a3f127e2_71147838',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559699a3f127e2_71147838')) {function content_559699a3f127e2_71147838($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('product_s'));
?>
<td><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['customer']->value['wishlist_products'])===null||$tmp==='' ? "0" : $tmp), ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->__("product_s");?>
</td><?php }} ?>
