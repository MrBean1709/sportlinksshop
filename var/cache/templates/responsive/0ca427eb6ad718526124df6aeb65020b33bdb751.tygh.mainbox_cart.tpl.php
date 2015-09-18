<?php /* Smarty version Smarty-3.1.18, created on 2015-09-17 17:18:31
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/themes/responsive/templates/common/mainbox_cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115643952055fa85679dfba3-55832781%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '0ca427eb6ad718526124df6aeb65020b33bdb751' =>
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/themes/responsive/templates/common/mainbox_cart.tpl',
      1 => 1441256990,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '115643952055fa85679dfba3-55832781',
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
  'unifunc' => 'content_55fa8567a07a63_07013586',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa8567a07a63_07013586')) {function content_55fa8567a07a63_07013586($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/opt/lampp/htdocs/sportslinkshop/app/functions/smarty_plugins/function.set_id.php';
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
