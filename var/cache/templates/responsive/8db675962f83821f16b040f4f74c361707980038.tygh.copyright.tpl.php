<?php /* Smarty version Smarty-3.1.18, created on 2015-09-17 12:03:45
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/themes/responsive/templates/blocks/static_templates/copyright.tpl" */ ?>
<?php /*%%SmartyHeaderCode:126699489355fa3ba11c6080-38349805%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '8db675962f83821f16b040f4f74c361707980038' =>
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/themes/responsive/templates/blocks/static_templates/copyright.tpl',
      1 => 1441256986,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '126699489355fa3ba11c6080-38349805',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'runtime' => 0,
    'settings' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa3ba11f8e48_95799557',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa3ba11f8e48_95799557')) {function content_55fa3ba11f8e48_95799557($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/opt/lampp/htdocs/sportslinkshop/app/functions/smarty_plugins/modifier.date_format.php';
if (!is_callable('smarty_function_set_id')) include '/opt/lampp/htdocs/sportslinkshop/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>
<p class="bottom-copyright">&copy; <?php if (smarty_modifier_date_format(@constant('TIME'),"%Y")!=$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year'], ENT_QUOTES, 'UTF-8');?>
-<?php }?><?php echo htmlspecialchars(smarty_modifier_date_format(@constant('TIME'),"%Y"), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_name'], ENT_QUOTES, 'UTF-8');?>
.
</p><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/static_templates/copyright.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/static_templates/copyright.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?>
<p class="bottom-copyright">&copy; <?php if (smarty_modifier_date_format(@constant('TIME'),"%Y")!=$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year'], ENT_QUOTES, 'UTF-8');?>
-<?php }?><?php echo htmlspecialchars(smarty_modifier_date_format(@constant('TIME'),"%Y"), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_name'], ENT_QUOTES, 'UTF-8');?>
.
</p><?php }?><?php }} ?>
