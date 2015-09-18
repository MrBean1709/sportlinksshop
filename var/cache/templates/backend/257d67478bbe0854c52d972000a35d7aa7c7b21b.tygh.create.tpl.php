<?php /* Smarty version Smarty-3.1.18, created on 2015-06-10 18:31:32
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/buttons/create.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17804607155781204a4c644-91217370%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '257d67478bbe0854c52d972000a35d7aa7c7b21b' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/buttons/create.tpl',
      1 => 1418020414,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17804607155781204a4c644-91217370',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'but_text' => 0,
    '_but_text' => 0,
    'but_onclick' => 0,
    'but_href' => 0,
    'but_role' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55781204aaac46_69634818',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55781204aaac46_69634818')) {function content_55781204aaac46_69634818($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('create'));
?>
<?php if ($_smarty_tpl->tpl_vars['but_text']->value) {?>
	<?php $_smarty_tpl->tpl_vars["_but_text"] = new Smarty_variable($_smarty_tpl->tpl_vars['but_text']->value, null, 0);?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars["_but_text"] = new Smarty_variable($_smarty_tpl->__("create"), null, 0);?>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->tpl_vars['_but_text']->value,'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value), 0);?>
<?php }} ?>
