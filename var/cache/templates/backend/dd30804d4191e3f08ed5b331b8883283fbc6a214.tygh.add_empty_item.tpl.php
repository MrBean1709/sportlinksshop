<?php /* Smarty version Smarty-3.1.18, created on 2015-09-18 11:53:31
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/buttons/add_empty_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:53654601655fa3847ca01e3-11727021%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd30804d4191e3f08ed5b331b8883283fbc6a214' => 
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/buttons/add_empty_item.tpl',
      1 => 1442547465,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '53654601655fa3847ca01e3-11727021',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa3847ca9ab5_67441951',
  'variables' => 
  array (
    'item_id' => 0,
    'but_onclick' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa3847ca9ab5_67441951')) {function content_55fa3847ca9ab5_67441951($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('add'));
?>
<a class="icon-plus cm-tooltip" name="add" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("add");?>
" onclick="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'UTF-8');?>
"></a>&nbsp;
<?php }} ?>
