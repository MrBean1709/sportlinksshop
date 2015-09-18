<?php /* Smarty version Smarty-3.1.18, created on 2015-09-18 11:53:31
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/common/tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158070289955fa37bccd3035-62340271%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63d379440c39227110a420217e7cb10db4edb984' => 
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/common/tooltip.tpl',
      1 => 1442547497,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '158070289955fa37bccd3035-62340271',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa37bccdb571_25799300',
  'variables' => 
  array (
    'tooltip' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa37bccdb571_25799300')) {function content_55fa37bccdb571_25799300($_smarty_tpl) {?>&nbsp;<?php if ($_smarty_tpl->tpl_vars['tooltip']->value) {?><a class="cm-tooltip<?php if ($_smarty_tpl->tpl_vars['params']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tooltip']->value, ENT_QUOTES, 'UTF-8');?>
"><i class="icon-question-sign"></i></a><?php }?>
<?php }} ?>
