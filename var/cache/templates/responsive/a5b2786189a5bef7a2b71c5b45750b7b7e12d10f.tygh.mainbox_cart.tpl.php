<?php /* Smarty version Smarty-3.1.18, created on 2015-06-13 07:55:03
         compiled from "/home/lostus/public_html/sportslinkshop/design/themes/responsive/templates/common/mainbox_cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1805933186557b7157ae71a1-08370254%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'a5b2786189a5bef7a2b71c5b45750b7b7e12d10f' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/themes/responsive/templates/common/mainbox_cart.tpl',
      1 => 1418021496,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1805933186557b7157ae71a1-08370254',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'runtime' => 0,
    'mainbox_id' => 0,
    'content' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_557b7157b85c53_30637566',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557b7157b85c53_30637566')) {function content_557b7157b85c53_30637566($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/home/lostus/public_html/sportslinkshop/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div>
    <div class="ty-mainbox-cart__body" <?php if ($_smarty_tpl->tpl_vars['mainbox_id']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mainbox_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
<?php if ($_smarty_tpl->tpl_vars['mainbox_id']->value) {?><!--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mainbox_id']->value, ENT_QUOTES, 'UTF-8');?>
--><?php }?></div>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="common/mainbox_cart.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/mainbox_cart.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><div>
    <div class="ty-mainbox-cart__body" <?php if ($_smarty_tpl->tpl_vars['mainbox_id']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mainbox_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
<?php if ($_smarty_tpl->tpl_vars['mainbox_id']->value) {?><!--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mainbox_id']->value, ENT_QUOTES, 'UTF-8');?>
--><?php }?></div>
</div><?php }?><?php }} ?>
