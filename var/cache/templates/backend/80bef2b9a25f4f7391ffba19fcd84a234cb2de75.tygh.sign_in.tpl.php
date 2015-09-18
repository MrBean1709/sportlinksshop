<?php /* Smarty version Smarty-3.1.18, created on 2015-09-17 11:42:54
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/buttons/sign_in.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26811441055fa36be2b7e46-53832750%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '80bef2b9a25f4f7391ffba19fcd84a234cb2de75' =>
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/buttons/sign_in.tpl',
      1 => 1441256912,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '26811441055fa36be2b7e46-53832750',
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
  'unifunc' => 'content_55fa36be2c17e6_56520577',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa36be2c17e6_56520577')) {function content_55fa36be2c17e6_56520577($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('sign_in'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("sign_in"),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_arrow'=>"on",'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value), 0);?>
<?php }} ?>
