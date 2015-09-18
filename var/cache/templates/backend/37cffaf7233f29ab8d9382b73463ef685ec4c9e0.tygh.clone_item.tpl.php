<?php /* Smarty version Smarty-3.1.18, created on 2015-06-08 17:08:53
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/buttons/clone_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:136998471255755ba50eb7d2-97909492%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '37cffaf7233f29ab8d9382b73463ef685ec4c9e0' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/buttons/clone_item.tpl',
      1 => 1418020414,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '136998471255755ba50eb7d2-97909492',
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
  'unifunc' => 'content_55755ba50f99b7_24078945',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55755ba50f99b7_24078945')) {function content_55755ba50f99b7_24078945($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('clone'));
?>
<a class="exicon-clone cm-tooltip" name="clone" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("clone");?>
" onclick="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'UTF-8');?>
"></a>&nbsp;<?php }} ?>
