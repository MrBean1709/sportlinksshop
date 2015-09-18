<?php /* Smarty version Smarty-3.1.18, created on 2015-06-08 16:54:51
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/common/tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10346151365575585b31aa41-27637129%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '4fefa2894b36b25477eab77eca27ea01ef79fed9' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/common/tooltip.tpl',
      1 => 1418020415,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10346151365575585b31aa41-27637129',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'tooltip' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5575585b330087_91915074',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5575585b330087_91915074')) {function content_5575585b330087_91915074($_smarty_tpl) {?>&nbsp;<?php if ($_smarty_tpl->tpl_vars['tooltip']->value) {?><a class="cm-tooltip<?php if ($_smarty_tpl->tpl_vars['params']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tooltip']->value, ENT_QUOTES, 'UTF-8');?>
"><i class="icon-question-sign"></i></a><?php }?><?php }} ?>
