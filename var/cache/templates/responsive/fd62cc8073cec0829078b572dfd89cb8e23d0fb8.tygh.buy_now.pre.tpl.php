<?php /* Smarty version Smarty-3.1.18, created on 2015-06-11 09:39:32
         compiled from "/home/lostus/public_html/sportslinkshop/design/themes/responsive/templates/addons/wishlist/hooks/products/buy_now.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3520938185578e6d47b07a1-10491939%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'fd62cc8073cec0829078b572dfd89cb8e23d0fb8' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/themes/responsive/templates/addons/wishlist/hooks/products/buy_now.pre.tpl',
      1 => 1418021508,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3520938185578e6d47b07a1-10491939',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'runtime' => 0,
    'hide_wishlist_button' => 0,
    'obj_prefix' => 0,
    'product' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5578e6d483f5e9_18738794',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5578e6d483f5e9_18738794')) {function content_5578e6d483f5e9_18738794($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/home/lostus/public_html/sportslinkshop/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if (!$_smarty_tpl->tpl_vars['hide_wishlist_button']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/wishlist/views/wishlist/components/add_to_wishlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"button_wishlist_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_name'=>"dispatch[wishlist.add..".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."]",'but_role'=>"text"), 0);?>

<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/wishlist/hooks/products/buy_now.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/wishlist/hooks/products/buy_now.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if (!$_smarty_tpl->tpl_vars['hide_wishlist_button']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/wishlist/views/wishlist/components/add_to_wishlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"button_wishlist_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_name'=>"dispatch[wishlist.add..".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."]",'but_role'=>"text"), 0);?>

<?php }?><?php }?><?php }} ?>
