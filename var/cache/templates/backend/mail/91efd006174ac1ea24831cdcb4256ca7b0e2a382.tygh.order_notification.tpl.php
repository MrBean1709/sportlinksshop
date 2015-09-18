<?php /* Smarty version Smarty-3.1.18, created on 2015-06-13 06:27:09
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/mail/templates/orders/order_notification.tpl" */ ?>
<?php /*%%SmartyHeaderCode:782245794557b5cbdbf6bc1-63164122%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '91efd006174ac1ea24831cdcb4256ca7b0e2a382' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/mail/templates/orders/order_notification.tpl',
      1 => 1418020407,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '782245794557b5cbdbf6bc1-63164122',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'order_info' => 0,
    'order_status' => 0,
    'status_settings' => 0,
    'order_header' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_557b5cbdc45ee7_52942012',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557b5cbdc45ee7_52942012')) {function content_557b5cbdc45ee7_52942012($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('dear','invoice','credit_memo','order_details'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("common/letter_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->__("dear");?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
,<br /><br />

<?php echo $_smarty_tpl->tpl_vars['order_status']->value['email_header'];?>
<br /><br />

<?php $_smarty_tpl->tpl_vars["order_header"] = new Smarty_variable($_smarty_tpl->__("invoice"), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['status_settings']->value['appearance_type']=="C"&&$_smarty_tpl->tpl_vars['order_info']->value['doc_ids'][$_smarty_tpl->tpl_vars['status_settings']->value['appearance_type']]) {?>
    <?php $_smarty_tpl->tpl_vars["order_header"] = new Smarty_variable($_smarty_tpl->__("credit_memo"), null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['status_settings']->value['appearance_type']=="O") {?>
    <?php $_smarty_tpl->tpl_vars["order_header"] = new Smarty_variable($_smarty_tpl->__("order_details"), null, 0);?>
<?php }?>

<b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_header']->value, ENT_QUOTES, 'UTF-8');?>
:</b><br />

<?php echo $_smarty_tpl->getSubTemplate ("orders/invoice.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("common/letter_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
