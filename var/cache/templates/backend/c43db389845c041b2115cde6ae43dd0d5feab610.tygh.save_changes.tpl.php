<?php /* Smarty version Smarty-3.1.18, created on 2015-09-18 11:53:22
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/buttons/save_changes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21868505155fa370bd4af36-75641397%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c43db389845c041b2115cde6ae43dd0d5feab610' => 
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/buttons/save_changes.tpl',
      1 => 1442547473,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '21868505155fa370bd4af36-75641397',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa370bd51296_66566011',
  'variables' => 
  array (
    'but_onclick' => 0,
    'but_href' => 0,
    'but_role' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa370bd51296_66566011')) {function content_55fa370bd51296_66566011($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('save_changes'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("save_changes"),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value), 0);?>

<?php }} ?>
