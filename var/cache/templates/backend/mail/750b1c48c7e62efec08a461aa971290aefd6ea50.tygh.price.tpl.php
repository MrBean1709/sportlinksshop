<?php /* Smarty version Smarty-3.1.18, created on 2015-06-13 06:27:10
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/mail/templates/common/price.tpl" */ ?>
<?php /*%%SmartyHeaderCode:273717556557b5cbe5af314-50716187%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '750b1c48c7e62efec08a461aa971290aefd6ea50' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/mail/templates/common/price.tpl',
      1 => 1418020407,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '273717556557b5cbe5af314-50716187',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'settings' => 0,
    'value' => 0,
    'primary_currency' => 0,
    'currencies' => 0,
    'span_id' => 0,
    'class' => 0,
    'secondary_currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_557b5cbe5fa4f3_94005063',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557b5cbe5fa4f3_94005063')) {function content_557b5cbe5fa4f3_94005063($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_format_price')) include '/home/lostus/public_html/sportslinkshop/app/functions/smarty_plugins/modifier.format_price.php';
?><?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['alternative_currency']=="use_selected_and_alternative") {?><?php echo smarty_modifier_format_price($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value],$_smarty_tpl->tpl_vars['span_id']->value,$_smarty_tpl->tpl_vars['class']->value);?>
<?php if ($_smarty_tpl->tpl_vars['secondary_currency']->value!=$_smarty_tpl->tpl_vars['primary_currency']->value) {?>&nbsp;(<?php echo smarty_modifier_format_price($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value],$_smarty_tpl->tpl_vars['span_id']->value,$_smarty_tpl->tpl_vars['class']->value,true);?>
)<?php }?><?php } else { ?><?php echo smarty_modifier_format_price($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value],$_smarty_tpl->tpl_vars['span_id']->value,$_smarty_tpl->tpl_vars['class']->value,true);?>
<?php }?><?php }} ?>
