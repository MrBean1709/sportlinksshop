<?php /* Smarty version Smarty-3.1.18, created on 2015-09-17 17:18:31
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/themes/responsive/templates/addons/reward_points/hooks/checkout/payment_extra.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32594190055fa8567d72158-33535533%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '6349598968cefd4c9093391fb96bc6594587e217' =>
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/themes/responsive/templates/addons/reward_points/hooks/checkout/payment_extra.post.tpl',
      1 => 1441256976,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '32594190055fa8567d72158-33535533',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'runtime' => 0,
    'cart_products' => 0,
    'cart' => 0,
    'user_info' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa8567d9cae6_45387460',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa8567d9cae6_45387460')) {function content_55fa8567d9cae6_45387460($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/opt/lampp/htdocs/sportslinkshop/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode']=="checkout"&&$_smarty_tpl->tpl_vars['cart_products']->value&&$_smarty_tpl->tpl_vars['cart']->value['points_info']['total_price']&&$_smarty_tpl->tpl_vars['user_info']->value['points']>0) {?>
<div class="ty-right">
    <?php echo $_smarty_tpl->getSubTemplate ("addons/reward_points/hooks/checkout/payment_options.post.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/reward_points/hooks/checkout/payment_extra.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/reward_points/hooks/checkout/payment_extra.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode']=="checkout"&&$_smarty_tpl->tpl_vars['cart_products']->value&&$_smarty_tpl->tpl_vars['cart']->value['points_info']['total_price']&&$_smarty_tpl->tpl_vars['user_info']->value['points']>0) {?>
<div class="ty-right">
    <?php echo $_smarty_tpl->getSubTemplate ("addons/reward_points/hooks/checkout/payment_options.post.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
<?php }?>
<?php }?><?php }} ?>
