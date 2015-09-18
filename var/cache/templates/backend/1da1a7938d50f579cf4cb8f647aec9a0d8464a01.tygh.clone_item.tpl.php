<?php /* Smarty version Smarty-3.1.18, created on 2015-09-18 11:53:31
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/buttons/clone_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:110697379855fa3847cb1ec1-18500277%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1da1a7938d50f579cf4cb8f647aec9a0d8464a01' => 
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/buttons/clone_item.tpl',
      1 => 1442547467,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '110697379855fa3847cb1ec1-18500277',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa3847cb79c7_42305883',
  'variables' => 
  array (
    'item_id' => 0,
    'but_onclick' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa3847cb79c7_42305883')) {function content_55fa3847cb79c7_42305883($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('clone'));
?>
<a class="exicon-clone cm-tooltip" name="clone" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("clone");?>
" onclick="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'UTF-8');?>
"></a>&nbsp;
<?php }} ?>
