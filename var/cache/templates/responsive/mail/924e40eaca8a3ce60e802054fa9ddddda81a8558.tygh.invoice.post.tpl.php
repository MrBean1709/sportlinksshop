<?php /* Smarty version Smarty-3.1.18, created on 2015-06-12 10:41:56
         compiled from "/home/lostus/public_html/sportslinkshop/design/themes/responsive/mail/templates/addons/barcode/hooks/orders/invoice.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:461165400557a46f4223cb0-16604173%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '924e40eaca8a3ce60e802054fa9ddddda81a8558' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/themes/responsive/mail/templates/addons/barcode/hooks/orders/invoice.post.tpl',
      1 => 1418021498,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '461165400557a46f4223cb0-16604173',
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
  'unifunc' => 'content_557a46f427ec39_09709846',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557a46f427ec39_09709846')) {function content_557a46f427ec39_09709846($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/home/lostus/public_html/sportslinkshop/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div align="center" style="padding: 50px 0px 30px 0px;"><?php echo $_smarty_tpl->getSubTemplate ("addons/barcode/barcode.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['order_info']->value['order_id']), 0);?>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/barcode/hooks/orders/invoice.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/barcode/hooks/orders/invoice.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><div align="center" style="padding: 50px 0px 30px 0px;"><?php echo $_smarty_tpl->getSubTemplate ("addons/barcode/barcode.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['order_info']->value['order_id']), 0);?>
</div><?php }?><?php }} ?>
