<?php /* Smarty version Smarty-3.1.18, created on 2015-06-08 17:08:53
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/buttons/save.tpl" */ ?>
<?php /*%%SmartyHeaderCode:179018376455755ba502ed90-38683081%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '9add92c118a6793ce648b1704b81810a883f2b84' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/buttons/save.tpl',
      1 => 1418020414,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '179018376455755ba502ed90-38683081',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'but_role' => 0,
    'but_name' => 0,
    'but_meta' => 0,
    'but_onclick' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55755ba505f5a6_62874692',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55755ba505f5a6_62874692')) {function content_55755ba505f5a6_62874692($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('save'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("save"),'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value,'but_name'=>$_smarty_tpl->tpl_vars['but_name']->value,'but_meta'=>$_smarty_tpl->tpl_vars['but_meta']->value,'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'allow_href'=>true), 0);?>
<?php }} ?>
