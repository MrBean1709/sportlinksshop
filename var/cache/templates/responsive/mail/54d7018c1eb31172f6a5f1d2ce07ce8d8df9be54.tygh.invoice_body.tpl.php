<?php /* Smarty version Smarty-3.1.18, created on 2015-06-12 10:41:55
         compiled from "/home/lostus/public_html/sportslinkshop/design/themes/responsive/mail/templates/addons/reward_points/orders/invoice_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1567324599557a46f3c92816-92745290%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '54d7018c1eb31172f6a5f1d2ce07ce8d8df9be54' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/themes/responsive/mail/templates/addons/reward_points/orders/invoice_body.tpl',
      1 => 1418021504,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1567324599557a46f3c92816-92745290',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'runtime' => 0,
    'order_info' => 0,
    'oi' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_557a46f3cf3ca9_68665480',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557a46f3cf3ca9_68665480')) {function content_557a46f3cf3ca9_68665480($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/home/lostus/public_html/sportslinkshop/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('price_in_points','price_in_points'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['order_info']->value['points_info']['price']) {?>
    <p><?php echo $_smarty_tpl->__("price_in_points");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oi']->value['extra']['points_info']['price'], ENT_QUOTES, 'UTF-8');?>
</p>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/reward_points/orders/invoice_body.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/reward_points/orders/invoice_body.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?>

<?php if ($_smarty_tpl->tpl_vars['order_info']->value['points_info']['price']) {?>
    <p><?php echo $_smarty_tpl->__("price_in_points");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oi']->value['extra']['points_info']['price'], ENT_QUOTES, 'UTF-8');?>
</p>
<?php }?><?php }?><?php }} ?>
