<?php /* Smarty version Smarty-3.1.18, created on 2015-09-17 11:44:20
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/addons/reward_points/hooks/order_management/totals_extra.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11660601755fa371498fea5-05426407%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '53bdee394cd9f4e41ecc7d0f0606fefcdb31ab78' =>
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/addons/reward_points/hooks/order_management/totals_extra.pre.tpl',
      1 => 1441256904,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11660601755fa371498fea5-05426407',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'cart' => 0,
    'user_points' => 0,
    'user_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa37149a6dd2_47787425',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa37149a6dd2_47787425')) {function content_55fa37149a6dd2_47787425($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('points_to_use','available','maximum'));
?>
<?php if ($_smarty_tpl->tpl_vars['cart']->value['points_info']['total_price']&&$_smarty_tpl->tpl_vars['user_points']->value) {?>
<div class="control-group">
    <label for="points_to_use" class="control-label"><?php echo $_smarty_tpl->__("points_to_use");?>
:</label>
    <div class="controls">
        <input type="text" name="points_to_use" id="points_to_use" size="20" value="" />
        <p class="help-block">(<?php echo $_smarty_tpl->__("available");?>
:&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_info']->value['points'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['user_points']->value)===null||$tmp==='' ? "0" : $tmp), ENT_QUOTES, 'UTF-8');?>
&nbsp;/&nbsp;<?php echo $_smarty_tpl->__("maximum");?>
:&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['points_info']['total_price'], ENT_QUOTES, 'UTF-8');?>
)</p>
    </div>
</div>
<?php }?><?php }} ?>
