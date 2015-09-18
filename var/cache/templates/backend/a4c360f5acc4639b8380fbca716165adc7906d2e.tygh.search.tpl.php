<?php /* Smarty version Smarty-3.1.18, created on 2015-09-17 11:44:01
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/buttons/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:165532984355fa37016bc150-63659659%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'a4c360f5acc4639b8380fbca716165adc7906d2e' =>
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/buttons/search.tpl',
      1 => 1441256912,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '165532984355fa37016bc150-63659659',
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
  'unifunc' => 'content_55fa37016c3e54_08272172',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa37016c3e54_08272172')) {function content_55fa37016c3e54_08272172($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('search'));
?>

<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("search"),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value,'but_name'=>$_smarty_tpl->tpl_vars['but_name']->value), 0);?>
<?php }} ?>
