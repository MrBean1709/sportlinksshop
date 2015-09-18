<?php /* Smarty version Smarty-3.1.18, created on 2015-06-13 06:27:09
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/mail/templates/orders/order_notification_subj.tpl" */ ?>
<?php /*%%SmartyHeaderCode:776130513557b5cbdb9bdd9-88006890%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '25c6cd78e474a9fb8ab99169cd7049b2f0cf226a' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/mail/templates/orders/order_notification_subj.tpl',
      1 => 1418020407,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '776130513557b5cbdb9bdd9-88006890',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'company_data' => 0,
    'order_info' => 0,
    'order_status' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_557b5cbdbdeb81_27757900',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557b5cbdbdeb81_27757900')) {function content_557b5cbdbdeb81_27757900($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('order'));
?>
<?php echo $_smarty_tpl->tpl_vars['company_data']->value['company_name'];?>
: <?php echo $_smarty_tpl->__("order");?>
 #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_status']->value['email_subj'], ENT_QUOTES, 'UTF-8');?>
<?php }} ?>
