<?php /* Smarty version Smarty-3.1.18, created on 2015-06-13 06:55:28
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/reward_points/hooks/products/global_update.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1510112272557b6360757205-38226870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '39c69fca4add93167af36c72d38c0cd9956bfd75' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/reward_points/hooks/products/global_update.post.tpl',
      1 => 1418020412,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1510112272557b6360757205-38226870',
  'function' =>
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_557b6360769071_54544703',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557b6360769071_54544703')) {function content_557b6360769071_54544703($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('price_in_points','points_lower'));
?>
<div class="control-group">
    <label for="gu_points" class="control-label"><?php echo $_smarty_tpl->__("price_in_points");?>
:</label>
    <div class="controls">
    	<input type="text" id="gu_points" name="update_data[price_in_points]" size="6" value="">
    	<select name="update_data[price_in_points_type]">
    	    <option value="A" ><?php echo $_smarty_tpl->__("points_lower");?>
</option>
    	    <option value="P" >%</option>
    	</select>
    </div>
</div><?php }} ?>
