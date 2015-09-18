<?php /* Smarty version Smarty-3.1.18, created on 2015-06-08 17:04:28
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/views/exim/components/export_csv.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2496064955755a9ce09353-71714562%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '30bcea0a71d42c1141957210a00db80f2767b6a0' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/views/exim/components/export_csv.tpl',
      1 => 1418020417,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2496064955755a9ce09353-71714562',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'fields' => 0,
    'delimiter' => 0,
    'eol' => 0,
    'export_data' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55755a9cedc7f0_70011705',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55755a9cedc7f0_70011705')) {function content_55755a9cedc7f0_70011705($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['fields']->value) {?><?php echo implode($_smarty_tpl->tpl_vars['delimiter']->value,$_smarty_tpl->tpl_vars['fields']->value);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['eol']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?><?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['export_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?><?php echo implode($_smarty_tpl->tpl_vars['delimiter']->value,$_smarty_tpl->tpl_vars['data']->value);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['eol']->value, ENT_QUOTES, 'UTF-8');?>
<?php } ?><?php }} ?>
