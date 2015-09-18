<?php /* Smarty version Smarty-3.1.18, created on 2015-06-13 06:20:29
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/form_builder/hooks/pages/tools_list.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:387141910557b5b2d620185-35566135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '521c783e38f31bafc4818fd884a0546af944b83e' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/form_builder/hooks/pages/tools_list.pre.tpl',
      1 => 1418020410,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '387141910557b5b2d620185-35566135',
  'function' =>
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_557b5b2d62b871_81145666',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557b5b2d62b871_81145666')) {function content_557b5b2d62b871_81145666($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('add_form'));
?>
<li><a href="<?php echo htmlspecialchars(fn_url("pages.add?page_type=F&parent_id=".((string)$_smarty_tpl->tpl_vars['id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("add_form");?>
</a></li><?php }} ?>
