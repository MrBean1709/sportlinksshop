<?php /* Smarty version Smarty-3.1.18, created on 2015-06-08 17:08:53
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/buttons/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:165440772355755ba5193d37-79049197%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'd5621b7887f451399a911b0259297c16a467733d' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/buttons/search.tpl',
      1 => 1418020414,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '165440772355755ba5193d37-79049197',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'but_onclick' => 0,
    'but_href' => 0,
    'but_role' => 0,
    'but_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55755ba51a8253_98819021',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55755ba51a8253_98819021')) {function content_55755ba51a8253_98819021($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('search'));
?>

<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("search"),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value,'but_name'=>$_smarty_tpl->tpl_vars['but_name']->value), 0);?>
<?php }} ?>
