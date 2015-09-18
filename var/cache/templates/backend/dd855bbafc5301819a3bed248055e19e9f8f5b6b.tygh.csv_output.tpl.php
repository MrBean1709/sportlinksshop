<?php /* Smarty version Smarty-3.1.18, created on 2015-06-08 16:54:51
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/views/exim/components/csv_output.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14704177215575585b497a15-40680357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'dd855bbafc5301819a3bed248055e19e9f8f5b6b' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/views/exim/components/csv_output.tpl',
      1 => 1418020417,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14704177215575585b497a15-40680357',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'value' => 0,
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5575585b4cbe35_65714137',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5575585b4cbe35_65714137')) {function content_5575585b4cbe35_65714137($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('direct_download','screen','server'));
?>
<select name="export_options[output]" id="output">
    <option value="D" <?php if ($_smarty_tpl->tpl_vars['value']->value=="D") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("direct_download");?>
</option>
    <option value="C" <?php if ($_smarty_tpl->tpl_vars['value']->value=="C") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("screen");?>
</option>
    <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']||!empty($_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate'])) {?>
        <option value="S" <?php if ($_smarty_tpl->tpl_vars['value']->value=="S") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("server");?>
</option>
    <?php }?>
</select><?php }} ?>
