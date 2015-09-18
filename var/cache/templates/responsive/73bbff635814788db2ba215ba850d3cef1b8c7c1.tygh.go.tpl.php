<?php /* Smarty version Smarty-3.1.18, created on 2015-09-17 12:03:42
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/themes/responsive/templates/buttons/go.tpl" */ ?>
<?php /*%%SmartyHeaderCode:206060204955fa3b9ec73498-14586155%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '73bbff635814788db2ba215ba850d3cef1b8c7c1' =>
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/themes/responsive/templates/buttons/go.tpl',
      1 => 1441256988,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '206060204955fa3b9ec73498-14586155',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'runtime' => 0,
    'alt' => 0,
    'but_text' => 0,
    'but_name' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa3b9ec8d9f8_83589339',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa3b9ec8d9f8_83589339')) {function content_55fa3b9ec8d9f8_83589339($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/opt/lampp/htdocs/sportslinkshop/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><button title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['alt']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-btn-go" type="submit"><i class="ty-btn-go__icon ty-icon-right-dir"></i><?php if ($_smarty_tpl->tpl_vars['but_text']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_text']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?></button>
<input type="hidden" name="dispatch" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_name']->value, ENT_QUOTES, 'UTF-8');?>
" /><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="buttons/go.tpl" id="<?php echo smarty_function_set_id(array('name'=>"buttons/go.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><button title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['alt']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-btn-go" type="submit"><i class="ty-btn-go__icon ty-icon-right-dir"></i><?php if ($_smarty_tpl->tpl_vars['but_text']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_text']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?></button>
<input type="hidden" name="dispatch" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_name']->value, ENT_QUOTES, 'UTF-8');?>
" /><?php }?><?php }} ?>
