<?php /* Smarty version Smarty-3.1.18, created on 2015-09-17 12:03:41
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/themes/responsive/templates/addons/banners/hooks/index/styles.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:134585948555fa3b9d975bc7-61988939%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'e36cc848fb9fcb519100db3cd158cc67bcc8f9e3' =>
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/themes/responsive/templates/addons/banners/hooks/index/styles.post.tpl',
      1 => 1441256966,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '134585948555fa3b9d975bc7-61988939',
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
  'unifunc' => 'content_55fa3b9d98f5c9_23918091',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa3b9d98f5c9_23918091')) {function content_55fa3b9d98f5c9_23918091($_smarty_tpl) {?><?php if (!is_callable('smarty_function_style')) include '/opt/lampp/htdocs/sportslinkshop/app/functions/smarty_plugins/function.style.php';
if (!is_callable('smarty_function_set_id')) include '/opt/lampp/htdocs/sportslinkshop/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php echo smarty_function_style(array('src'=>"addons/banners/styles.less"),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/banners/hooks/index/styles.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/banners/hooks/index/styles.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php echo smarty_function_style(array('src'=>"addons/banners/styles.less"),$_smarty_tpl);?>
<?php }?><?php }} ?>
