<?php /* Smarty version Smarty-3.1.18, created on 2015-09-18 11:53:28
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/buttons/save.tpl" */ ?>
<?php /*%%SmartyHeaderCode:99291878655fa3844156ed7-53318518%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75a05b23a21109a434bc0603a85c18a9f5858c42' => 
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/buttons/save.tpl',
      1 => 1442547472,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '99291878655fa3844156ed7-53318518',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa384415ef01_39181594',
  'variables' => 
  array (
    'but_role' => 0,
    'but_name' => 0,
    'but_meta' => 0,
    'but_onclick' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa384415ef01_39181594')) {function content_55fa384415ef01_39181594($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('save'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("save"),'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value,'but_name'=>$_smarty_tpl->tpl_vars['but_name']->value,'but_meta'=>$_smarty_tpl->tpl_vars['but_meta']->value,'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'allow_href'=>true), 0);?>

<?php }} ?>
