<?php /* Smarty version Smarty-3.1.18, created on 2015-06-08 17:08:53
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/buttons/add_empty_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114547269355755ba50c1198-28599257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'd250ab39809d99d765a5c0a7b9f479421a0bdf7e' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/buttons/add_empty_item.tpl',
      1 => 1418020414,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '114547269355755ba50c1198-28599257',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'item_id' => 0,
    'but_onclick' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55755ba50e38b3_37097620',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55755ba50e38b3_37097620')) {function content_55755ba50e38b3_37097620($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('add'));
?>
<a class="icon-plus cm-tooltip" name="add" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("add");?>
" onclick="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'UTF-8');?>
"></a>&nbsp;<?php }} ?>
