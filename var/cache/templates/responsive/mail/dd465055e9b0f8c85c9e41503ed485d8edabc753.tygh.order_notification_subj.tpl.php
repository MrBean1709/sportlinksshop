<?php /* Smarty version Smarty-3.1.18, created on 2015-09-17 12:04:25
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/themes/responsive/mail/templates/orders/order_notification_subj.tpl" */ ?>
<?php /*%%SmartyHeaderCode:208279822055fa3bc9bb3bc6-31654365%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'dd465055e9b0f8c85c9e41503ed485d8edabc753' =>
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/themes/responsive/mail/templates/orders/order_notification_subj.tpl',
      1 => 1441256954,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '208279822055fa3bc9bb3bc6-31654365',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'runtime' => 0,
    'company_data' => 0,
    'order_info' => 0,
    'order_status' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa3bc9c05498_90414361',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa3bc9c05498_90414361')) {function content_55fa3bc9c05498_90414361($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/opt/lampp/htdocs/sportslinkshop/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('order','order'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php echo $_smarty_tpl->tpl_vars['company_data']->value['company_name'];?>
: <?php echo $_smarty_tpl->__("order");?>
 #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_status']->value['email_subj'], ENT_QUOTES, 'UTF-8');?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="orders/order_notification_subj.tpl" id="<?php echo smarty_function_set_id(array('name'=>"orders/order_notification_subj.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php echo $_smarty_tpl->tpl_vars['company_data']->value['company_name'];?>
: <?php echo $_smarty_tpl->__("order");?>
 #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_status']->value['email_subj'], ENT_QUOTES, 'UTF-8');?>
<?php }?><?php }} ?>
