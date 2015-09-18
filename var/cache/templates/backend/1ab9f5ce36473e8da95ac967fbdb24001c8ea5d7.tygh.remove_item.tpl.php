<?php /* Smarty version Smarty-3.1.18, created on 2015-09-18 11:53:31
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/buttons/remove_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:182220286855fa3847c440e9-07481457%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ab9f5ce36473e8da95ac967fbdb24001c8ea5d7' => 
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/buttons/remove_item.tpl',
      1 => 1442547471,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '182220286855fa3847c440e9-07481457',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa3847c5c7a9_75432218',
  'variables' => 
  array (
    'simple' => 0,
    'only_delete' => 0,
    'item_id' => 0,
    'but_class' => 0,
    'but_onclick' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa3847c5c7a9_75432218')) {function content_55fa3847c5c7a9_75432218($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('remove','remove'));
?>
<?php if (!$_smarty_tpl->tpl_vars['simple']->value) {?>
	<a class="icon-remove cm-opacity cm-tooltip <?php if ($_smarty_tpl->tpl_vars['only_delete']->value=="Y") {?> hidden<?php }?>" name="remove" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("remove");?>
"></a>
<?php }?>
<a name="remove_hidden" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="icon-remove cm-tooltip <?php if (!$_smarty_tpl->tpl_vars['simple']->value&&$_smarty_tpl->tpl_vars['only_delete']->value!="Y") {?> hidden<?php }?><?php if ($_smarty_tpl->tpl_vars['but_class']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_class']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?>" title="<?php echo $_smarty_tpl->__("remove");?>
" <?php if ($_smarty_tpl->tpl_vars['but_onclick']->value) {?> onclick="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>></a>
<?php }} ?>
