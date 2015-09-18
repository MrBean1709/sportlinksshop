<?php /* Smarty version Smarty-3.1.18, created on 2015-09-18 11:53:22
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/addons/barcode/hooks/orders/staff_only_note.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13925883055fa370b781188-70536372%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92d1e58c8772eeba71a84a0bd09aeded4312426b' => 
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/addons/barcode/hooks/orders/staff_only_note.post.tpl',
      1 => 1442547348,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13925883055fa370b781188-70536372',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa370b7a2db8_97774121',
  'variables' => 
  array (
    'order_info' => 0,
    'addons' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa370b7a2db8_97774121')) {function content_55fa370b7a2db8_97774121($_smarty_tpl) {?><div class="center">
    <img src="<?php echo htmlspecialchars(fn_url("image.barcode?id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])."&type=".((string)$_smarty_tpl->tpl_vars['addons']->value['barcode']['type'])."&width=".((string)$_smarty_tpl->tpl_vars['addons']->value['barcode']['width'])."&height=".((string)$_smarty_tpl->tpl_vars['addons']->value['barcode']['height'])."&xres=".((string)$_smarty_tpl->tpl_vars['addons']->value['barcode']['resolution'])."&font=".((string)$_smarty_tpl->tpl_vars['addons']->value['barcode']['text_font'])), ENT_QUOTES, 'UTF-8');?>
" alt="BarCode" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['barcode']['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['barcode']['height'], ENT_QUOTES, 'UTF-8');?>
">
</div>
<?php }} ?>
