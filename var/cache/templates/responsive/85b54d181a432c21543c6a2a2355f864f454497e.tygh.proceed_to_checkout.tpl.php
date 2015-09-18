<?php /* Smarty version Smarty-3.1.18, created on 2015-09-17 17:18:31
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/themes/responsive/templates/buttons/proceed_to_checkout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:108659995955fa856763d931-30646183%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '85b54d181a432c21543c6a2a2355f864f454497e' =>
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/themes/responsive/templates/buttons/proceed_to_checkout.tpl',
      1 => 1441256988,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '108659995955fa856763d931-30646183',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'runtime' => 0,
    'but_onclick' => 0,
    'but_href' => 0,
    'but_target' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa856765ad34_30721792',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa856765ad34_30721792')) {function content_55fa856765ad34_30721792($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/opt/lampp/htdocs/sportslinkshop/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('proceed_to_checkout','proceed_to_checkout'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("proceed_to_checkout"),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_target'=>$_smarty_tpl->tpl_vars['but_target']->value,'but_role'=>"action",'but_meta'=>"ty-btn__primary"), 0);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="buttons/proceed_to_checkout.tpl" id="<?php echo smarty_function_set_id(array('name'=>"buttons/proceed_to_checkout.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("proceed_to_checkout"),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_target'=>$_smarty_tpl->tpl_vars['but_target']->value,'but_role'=>"action",'but_meta'=>"ty-btn__primary"), 0);?>
<?php }?><?php }} ?>
