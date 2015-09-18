<?php /* Smarty version Smarty-3.1.18, created on 2015-06-13 06:27:10
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/mail/templates/addons/barcode/hooks/orders/invoice.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:169728885557b5cbe78b6e6-63287740%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'd6c7a5a2bfa55b317c880feeaf9190fb109d20f7' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/mail/templates/addons/barcode/hooks/orders/invoice.post.tpl',
      1 => 1418020406,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '169728885557b5cbe78b6e6-63287740',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'order_info' => 0,
    'addons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_557b5cbe7b6eb0_73261932',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557b5cbe7b6eb0_73261932')) {function content_557b5cbe7b6eb0_73261932($_smarty_tpl) {?><div class="center" style="text-align:center">
    <img src="<?php echo htmlspecialchars(fn_url("image.barcode?id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])."&type=".((string)$_smarty_tpl->tpl_vars['addons']->value['barcode']['type'])."&width=".((string)$_smarty_tpl->tpl_vars['addons']->value['barcode']['width'])."&height=".((string)$_smarty_tpl->tpl_vars['addons']->value['barcode']['height'])."&xres=".((string)$_smarty_tpl->tpl_vars['addons']->value['barcode']['resolution'])."&font=".((string)$_smarty_tpl->tpl_vars['addons']->value['barcode']['text_font'])), ENT_QUOTES, 'UTF-8');?>
" alt="BarCode" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['barcode']['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['barcode']['height'], ENT_QUOTES, 'UTF-8');?>
">
</div><?php }} ?>
