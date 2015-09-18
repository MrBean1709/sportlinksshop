<?php /* Smarty version Smarty-3.1.18, created on 2015-09-17 11:44:20
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/views/order_management/components/discounts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:34030118055fa371495a261-22291199%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'a64f26cd9b5f012539e5f61eb67ece7a3bc6bce6' =>
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/views/order_management/components/discounts.tpl',
      1 => 1441256926,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '34030118055fa371495a261-22291199',
  'function' =>
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa37149653c7_50455293',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa37149653c7_50455293')) {function content_55fa37149653c7_50455293($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('discounts','discount_coupon_code'));
?>
<div class="orders-discounts">
	<h4><?php echo $_smarty_tpl->__("discounts");?>
</h4>
	<div class="orders-discount">
	    <label for="coupon_code"><?php echo $_smarty_tpl->__("discount_coupon_code");?>
:</label>
	    <input type="text" name="coupon_code" id="coupon_code" class="input-text-large" size="30" value="" />
	</div>
</div><?php }} ?>
