<?php /* Smarty version Smarty-3.1.18, created on 2015-06-11 09:39:35
         compiled from "/home/lostus/public_html/sportslinkshop/design/themes/responsive/templates/addons/discussion/blocks/product_tabs/discussion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10980133035578e6d770c009-26074440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '2e6709ff8eef76684aaa20ffb077dd2a52650159' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/themes/responsive/templates/addons/discussion/blocks/product_tabs/discussion.tpl',
      1 => 1418021500,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10980133035578e6d770c009-26074440',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'runtime' => 0,
    'product' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5578e6d77c4dc8_34254555',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5578e6d77c4dc8_34254555')) {function content_5578e6d77c4dc8_34254555($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/home/lostus/public_html/sportslinkshop/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('discussion_title_product','discussion_title_product'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'object_type'=>"P",'title'=>__("discussion_title_product"),'quicklink'=>"disussion_link",'container_id'=>"content_discussion_block"), 0);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/discussion/blocks/product_tabs/discussion.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/discussion/blocks/product_tabs/discussion.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?>

<?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'object_type'=>"P",'title'=>__("discussion_title_product"),'quicklink'=>"disussion_link",'container_id'=>"content_discussion_block"), 0);?>
<?php }?><?php }} ?>
