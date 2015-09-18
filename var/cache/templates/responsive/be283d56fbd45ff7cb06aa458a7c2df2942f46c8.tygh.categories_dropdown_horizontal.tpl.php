<?php /* Smarty version Smarty-3.1.18, created on 2015-06-08 16:53:51
         compiled from "/home/lostus/public_html/sportslinkshop/design/themes/responsive/templates/blocks/categories/categories_dropdown_horizontal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17218368015575581fc99f02-78776536%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'be283d56fbd45ff7cb06aa458a7c2df2942f46c8' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/themes/responsive/templates/blocks/categories/categories_dropdown_horizontal.tpl',
      1 => 1418021496,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17218368015575581fc99f02-78776536',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'runtime' => 0,
    'items' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5575581fcfcc44_48617776',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5575581fcfcc44_48617776')) {function content_5575581fcfcc44_48617776($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/home/lostus/public_html/sportslinkshop/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php echo $_smarty_tpl->getSubTemplate ("blocks/topmenu_dropdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>$_smarty_tpl->tpl_vars['items']->value,'name'=>"category",'childs'=>"subcategories"), 0);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/categories/categories_dropdown_horizontal.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/categories/categories_dropdown_horizontal.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?>

<?php echo $_smarty_tpl->getSubTemplate ("blocks/topmenu_dropdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>$_smarty_tpl->tpl_vars['items']->value,'name'=>"category",'childs'=>"subcategories"), 0);?>
<?php }?><?php }} ?>
