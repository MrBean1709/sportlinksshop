<?php /* Smarty version Smarty-3.1.18, created on 2015-06-12 10:41:56
         compiled from "/home/lostus/public_html/sportslinkshop/design/themes/responsive/mail/templates/addons/reward_points/hooks/orders/totals.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:58365868557a46f4135514-66066068%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '046920f772e6f833f103793df081849e60cb314b' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/themes/responsive/mail/templates/addons/reward_points/hooks/orders/totals.post.tpl',
      1 => 1418021504,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '58365868557a46f4135514-66066068',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'runtime' => 0,
    'order_info' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_557a46f41cb7c8_68085945',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557a46f41cb7c8_68085945')) {function content_557a46f41cb7c8_68085945($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/home/lostus/public_html/sportslinkshop/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('reward_points','points_in_use','points_lower','reward_points','points_in_use','points_lower'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['order_info']->value['points_info']['reward']) {?>
    <tr>
        <td style="text-align: right; white-space: nowrap; font-size: 12px; font-family: Arial;"><b><?php echo $_smarty_tpl->__("reward_points");?>
:&nbsp;</b></td>
        <td style="text-align: right; white-space: nowrap; font-size: 12px; font-family: Arial;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['points_info']['reward'], ENT_QUOTES, 'UTF-8');?>
</td>
    </tr>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['order_info']->value['points_info']['in_use']) {?>
    <tr>
        <td style="text-align: right; white-space: nowrap; font-size: 12px; font-family: Arial;"><b><?php echo $_smarty_tpl->__("points_in_use");?>
</b>&nbsp;(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['points_info']['in_use']['points'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo $_smarty_tpl->__("points_lower");?>
)<b>:</b>&nbsp;</td>
        <td style="text-align: right; white-space: nowrap; font-size: 12px; font-family: Arial;"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['order_info']->value['points_info']['in_use']['cost']), 0);?>
</td>
    </tr>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/reward_points/hooks/orders/totals.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/reward_points/hooks/orders/totals.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['order_info']->value['points_info']['reward']) {?>
    <tr>
        <td style="text-align: right; white-space: nowrap; font-size: 12px; font-family: Arial;"><b><?php echo $_smarty_tpl->__("reward_points");?>
:&nbsp;</b></td>
        <td style="text-align: right; white-space: nowrap; font-size: 12px; font-family: Arial;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['points_info']['reward'], ENT_QUOTES, 'UTF-8');?>
</td>
    </tr>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['order_info']->value['points_info']['in_use']) {?>
    <tr>
        <td style="text-align: right; white-space: nowrap; font-size: 12px; font-family: Arial;"><b><?php echo $_smarty_tpl->__("points_in_use");?>
</b>&nbsp;(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['points_info']['in_use']['points'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo $_smarty_tpl->__("points_lower");?>
)<b>:</b>&nbsp;</td>
        <td style="text-align: right; white-space: nowrap; font-size: 12px; font-family: Arial;"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['order_info']->value['points_info']['in_use']['cost']), 0);?>
</td>
    </tr>
<?php }?><?php }?><?php }} ?>
