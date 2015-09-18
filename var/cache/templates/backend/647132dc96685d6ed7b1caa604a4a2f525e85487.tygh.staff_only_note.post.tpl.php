<?php /* Smarty version Smarty-3.1.18, created on 2015-06-13 06:26:29
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/barcode/hooks/orders/staff_only_note.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:356677256557b5c9507cee7-83372852%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '647132dc96685d6ed7b1caa604a4a2f525e85487' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/barcode/hooks/orders/staff_only_note.post.tpl',
      1 => 1418020409,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '356677256557b5c9507cee7-83372852',
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
  'unifunc' => 'content_557b5c950a8714_39526885',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557b5c950a8714_39526885')) {function content_557b5c950a8714_39526885($_smarty_tpl) {?><div class="center">
    <img src="<?php echo htmlspecialchars(fn_url("image.barcode?id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])."&type=".((string)$_smarty_tpl->tpl_vars['addons']->value['barcode']['type'])."&width=".((string)$_smarty_tpl->tpl_vars['addons']->value['barcode']['width'])."&height=".((string)$_smarty_tpl->tpl_vars['addons']->value['barcode']['height'])."&xres=".((string)$_smarty_tpl->tpl_vars['addons']->value['barcode']['resolution'])."&font=".((string)$_smarty_tpl->tpl_vars['addons']->value['barcode']['text_font'])), ENT_QUOTES, 'UTF-8');?>
" alt="BarCode" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['barcode']['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['barcode']['height'], ENT_QUOTES, 'UTF-8');?>
">
</div><?php }} ?>
