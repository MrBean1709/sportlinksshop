<?php /* Smarty version Smarty-3.1.18, created on 2015-06-13 06:26:28
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/reward_points/hooks/orders/totals_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2111080551557b5c94f2bd62-49249241%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '6f4ab146c5ecf6601aef7bcbcf59d5fb5df33b05' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/reward_points/hooks/orders/totals_content.post.tpl',
      1 => 1418020412,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2111080551557b5c94f2bd62-49249241',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'order_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_557b5c9501f904_26054136',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557b5c9501f904_26054136')) {function content_557b5c9501f904_26054136($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('points','points_lower','points_in_use','points_lower'));
?>
<?php if ($_smarty_tpl->tpl_vars['order_info']->value['points_info']['reward']) {?>
    <tr>
        <td><?php echo $_smarty_tpl->__("points");?>
:</td>
        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['points_info']['reward'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo $_smarty_tpl->__("points_lower");?>
</td>
    </tr>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['order_info']->value['points_info']['in_use']) {?>
    <tr>
        <td><?php echo $_smarty_tpl->__("points_in_use");?>
&nbsp;(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['points_info']['in_use']['points'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo $_smarty_tpl->__("points_lower");?>
):</td>
        <td><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['order_info']->value['points_info']['in_use']['cost']), 0);?>
</td>
    </tr>
<?php }?><?php }} ?>
