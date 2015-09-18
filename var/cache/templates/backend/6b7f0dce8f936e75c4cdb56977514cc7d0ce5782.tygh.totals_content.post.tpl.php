<?php /* Smarty version Smarty-3.1.18, created on 2015-09-18 11:53:21
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/addons/reward_points/hooks/orders/totals_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:49125290755fa370b722e99-70549724%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b7f0dce8f936e75c4cdb56977514cc7d0ce5782' => 
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/addons/reward_points/hooks/orders/totals_content.post.tpl',
      1 => 1442547414,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '49125290755fa370b722e99-70549724',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa370b739010_24760071',
  'variables' => 
  array (
    'order_info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa370b739010_24760071')) {function content_55fa370b739010_24760071($_smarty_tpl) {?><?php
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
<?php }?>
<?php }} ?>
