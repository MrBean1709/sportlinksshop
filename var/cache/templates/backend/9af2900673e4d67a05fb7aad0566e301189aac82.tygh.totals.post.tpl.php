<?php /* Smarty version Smarty-3.1.18, created on 2015-09-17 11:44:20
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/addons/reward_points/hooks/order_management/totals.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4577611455fa3714a9b459-45958736%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '9af2900673e4d67a05fb7aad0566e301189aac82' =>
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/addons/reward_points/hooks/order_management/totals.post.tpl',
      1 => 1441256904,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4577611455fa3714a9b459-45958736',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'cart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa3714ab4886_39946911',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa3714ab4886_39946911')) {function content_55fa3714ab4886_39946911($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('points','points_in_use','points','delete'));
?>
<?php if ($_smarty_tpl->tpl_vars['cart']->value['points_info']['reward']) {?>
    <tr>
        <td><?php echo $_smarty_tpl->__("points");?>
:</td>
        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['points_info']['reward'], ENT_QUOTES, 'UTF-8');?>
</td>
    </tr>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['cart']->value['points_info']['in_use']) {?>
    <tr>
        <td class="nowrap"><?php echo $_smarty_tpl->__("points_in_use");?>
&nbsp;(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['points_info']['in_use']['points'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo $_smarty_tpl->__("points");?>
)&nbsp;<a href="<?php echo htmlspecialchars(fn_url("order_management.delete_points_in_use"), ENT_QUOTES, 'UTF-8');?>
"><i class="icon-trash" title="<?php echo $_smarty_tpl->__("delete");?>
"></i></a>:</td>
        <td><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['cart']->value['points_info']['in_use']['cost']), 0);?>
</td>
    </tr>
<?php }?><?php }} ?>
