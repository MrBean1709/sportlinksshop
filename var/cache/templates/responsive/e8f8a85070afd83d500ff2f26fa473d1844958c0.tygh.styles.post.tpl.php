<?php /* Smarty version Smarty-3.1.18, created on 2015-08-28 10:48:12
         compiled from "/home/lostus/public_html/sportslinkshop/design/themes/responsive/templates/addons/tags/hooks/index/styles.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3578499255dfcbec6e5283-31182666%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'e8f8a85070afd83d500ff2f26fa473d1844958c0' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/themes/responsive/templates/addons/tags/hooks/index/styles.post.tpl',
      1 => 1418021507,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3578499255dfcbec6e5283-31182666',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'runtime' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55dfcbec7a3fb5_53735233',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55dfcbec7a3fb5_53735233')) {function content_55dfcbec7a3fb5_53735233($_smarty_tpl) {?><?php if (!is_callable('smarty_function_style')) include '/home/lostus/public_html/sportslinkshop/app/functions/smarty_plugins/function.style.php';
if (!is_callable('smarty_function_set_id')) include '/home/lostus/public_html/sportslinkshop/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php echo smarty_function_style(array('src'=>"addons/tags/styles.less"),$_smarty_tpl);?>

<?php echo smarty_function_style(array('src'=>"addons/tags/responsive.less"),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/tags/hooks/index/styles.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/tags/hooks/index/styles.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php echo smarty_function_style(array('src'=>"addons/tags/styles.less"),$_smarty_tpl);?>

<?php echo smarty_function_style(array('src'=>"addons/tags/responsive.less"),$_smarty_tpl);?>
<?php }?><?php }} ?>
