<?php /* Smarty version Smarty-3.1.18, created on 2015-06-08 16:54:51
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/views/exim/components/csv_delimiters.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13097560455575585b457353-82802878%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'ddfb0d1777c441f535b11ea33e3c32baf39a9dd9' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/views/exim/components/csv_delimiters.tpl',
      1 => 1418020417,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13097560455575585b457353-82802878',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'name' => 0,
    'id' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5575585b48d089_98090160',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5575585b48d089_98090160')) {function content_5575585b48d089_98090160($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('semicolon','comma','tab'));
?>
<select name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
<option value="S" <?php if ($_smarty_tpl->tpl_vars['value']->value=="S") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("semicolon");?>
</option>
<option value="C" <?php if ($_smarty_tpl->tpl_vars['value']->value=="C") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("comma");?>
</option>
<option value="T" <?php if ($_smarty_tpl->tpl_vars['value']->value=="T") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("tab");?>
</option>
</select><?php }} ?>
