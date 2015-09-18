<?php /* Smarty version Smarty-3.1.18, created on 2015-06-11 09:39:33
         compiled from "/home/lostus/public_html/sportslinkshop/design/themes/responsive/templates/addons/reward_points/hooks/products/options_modifiers.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10205168645578e6d5819cb5-68587086%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '395760b161b2084350e22421c672a8bfc33d7e4f' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/themes/responsive/templates/addons/reward_points/hooks/products/options_modifiers.post.tpl',
      1 => 1418021504,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10205168645578e6d5819cb5-68587086',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'runtime' => 0,
    'vr' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5578e6d58c77c7_34304046',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5578e6d58c77c7_34304046')) {function content_5578e6d58c77c7_34304046($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/home/lostus/public_html/sportslinkshop/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if (floatval($_smarty_tpl->tpl_vars['vr']->value['point_modifier'])) {?>&nbsp;<?php echo $_smarty_tpl->getSubTemplate ("addons/reward_points/common/point_modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('mod_type'=>$_smarty_tpl->tpl_vars['vr']->value['point_modifier_type'],'mod_value'=>$_smarty_tpl->tpl_vars['vr']->value['point_modifier']), 0);?>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/reward_points/hooks/products/options_modifiers.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/reward_points/hooks/products/options_modifiers.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if (floatval($_smarty_tpl->tpl_vars['vr']->value['point_modifier'])) {?>&nbsp;<?php echo $_smarty_tpl->getSubTemplate ("addons/reward_points/common/point_modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('mod_type'=>$_smarty_tpl->tpl_vars['vr']->value['point_modifier_type'],'mod_value'=>$_smarty_tpl->tpl_vars['vr']->value['point_modifier']), 0);?>
<?php }?><?php }?><?php }} ?>
