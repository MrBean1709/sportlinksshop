<?php /* Smarty version Smarty-3.1.18, created on 2015-06-08 17:04:32
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/buttons/save_changes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103718700055755aa0cb3bd8-14401240%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '28c85050f84baedd91232f30e828558b9ffb4f6c' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/buttons/save_changes.tpl',
      1 => 1418020414,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '103718700055755aa0cb3bd8-14401240',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'but_onclick' => 0,
    'but_href' => 0,
    'but_role' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55755aa0d2b439_39661283',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55755aa0d2b439_39661283')) {function content_55755aa0d2b439_39661283($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('save_changes'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("save_changes"),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value), 0);?>
<?php }} ?>
