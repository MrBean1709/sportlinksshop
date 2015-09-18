<?php /* Smarty version Smarty-3.1.18, created on 2015-09-17 12:03:42
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/themes/responsive/templates/addons/tags/hooks/profiles/my_account_menu.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22350614155fa3b9ec07349-49243306%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '6dde9d102a30d07fef928644f153ead742e87504' =>
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/themes/responsive/templates/addons/tags/hooks/profiles/my_account_menu.post.tpl',
      1 => 1441256981,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '22350614155fa3b9ec07349-49243306',
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
  'unifunc' => 'content_55fa3b9ec1e015_28585277',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa3b9ec1e015_28585277')) {function content_55fa3b9ec1e015_28585277($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/opt/lampp/htdocs/sportslinkshop/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('my_tags','my_tags'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a" href="<?php echo htmlspecialchars(fn_url("tags.summary"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->__("my_tags");?>
</a></li><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/tags/hooks/profiles/my_account_menu.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/tags/hooks/profiles/my_account_menu.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a" href="<?php echo htmlspecialchars(fn_url("tags.summary"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->__("my_tags");?>
</a></li><?php }?><?php }} ?>
