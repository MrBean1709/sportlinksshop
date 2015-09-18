<?php /* Smarty version Smarty-3.1.18, created on 2015-06-13 06:12:45
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/views/payments/processor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:840725450557b595d8ed4b1-50148984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '22cd8822f79d40cd09adf6783c48ae4fa6df6a2c' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/views/payments/processor.tpl',
      1 => 1418020419,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '840725450557b595d8ed4b1-50148984',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'payment_id' => 0,
    'curl_info' => 0,
    'processor_template' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_557b595d9329c0_18794148',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557b595d9329c0_18794148')) {function content_557b595d9329c0_18794148($_smarty_tpl) {?><div id="content_tab_conf_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_id']->value, ENT_QUOTES, 'UTF-8');?>
">

<?php echo $_smarty_tpl->tpl_vars['curl_info']->value;?>


<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['processor_template']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<!--content_tab_conf_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div><?php }} ?>
