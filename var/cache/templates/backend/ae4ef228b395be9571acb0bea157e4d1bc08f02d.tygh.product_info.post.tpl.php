<?php /* Smarty version Smarty-3.1.18, created on 2015-06-13 06:26:28
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/reward_points/hooks/orders/product_info.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1043802219557b5c94e051a3-38535257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'ae4ef228b395be9571acb0bea157e4d1bc08f02d' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/reward_points/hooks/orders/product_info.post.tpl',
      1 => 1418020412,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1043802219557b5c94e051a3-38535257',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'order_info' => 0,
    'oi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_557b5c94e1d213_78082953',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557b5c94e1d213_78082953')) {function content_557b5c94e1d213_78082953($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('price_in_points'));
?>
<!-- Hook Reward points start -->
<?php if ($_smarty_tpl->tpl_vars['order_info']->value['points_info']['price']&&$_smarty_tpl->tpl_vars['oi']->value) {?>
<p><strong><?php echo $_smarty_tpl->__("price_in_points");?>
:</strong> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oi']->value['extra']['points_info']['price'], ENT_QUOTES, 'UTF-8');?>
</p>
<?php }?>
<!-- Hook Reward points end --><?php }} ?>
