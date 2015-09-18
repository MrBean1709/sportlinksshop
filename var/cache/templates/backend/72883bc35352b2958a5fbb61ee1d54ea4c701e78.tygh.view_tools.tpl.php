<?php /* Smarty version Smarty-3.1.18, created on 2015-09-18 11:53:22
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/common/view_tools.tpl" */ ?>
<?php /*%%SmartyHeaderCode:83198029255fa370bcf7958-32610872%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72883bc35352b2958a5fbb61ee1d54ea4c701e78' => 
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/common/view_tools.tpl',
      1 => 1442547497,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '83198029255fa370bcf7958-32610872',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa370bd1eb90_62312046',
  'variables' => 
  array (
    'view_tools' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa370bd1eb90_62312046')) {function content_55fa370bd1eb90_62312046($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('prev_page','next'));
?>
<div class="btn-group prev-next">
    <a class="btn cm-tooltip <?php if (!$_smarty_tpl->tpl_vars['view_tools']->value['prev_id']) {?>disabled<?php }?>" <?php if ($_smarty_tpl->tpl_vars['view_tools']->value['prev_id']) {?>href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['url']->value).((string)$_smarty_tpl->tpl_vars['view_tools']->value['prev_id'])), ENT_QUOTES, 'UTF-8');?>
" title="<?php if ($_smarty_tpl->tpl_vars['view_tools']->value['links_label']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['view_tools']->value['links_label'], ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['view_tools']->value['show_item_id']) {?> #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['view_tools']->value['prev_id'], ENT_QUOTES, 'UTF-8');?>
<?php }?><?php } else { ?><?php echo $_smarty_tpl->__("prev_page");?>
<?php }?>"<?php }?>><i class="icon-chevron-left"></i></a>
    <a class="btn cm-tooltip <?php if (!$_smarty_tpl->tpl_vars['view_tools']->value['next_id']) {?>disabled<?php }?>" <?php if ($_smarty_tpl->tpl_vars['view_tools']->value['next_id']) {?>href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['url']->value).((string)$_smarty_tpl->tpl_vars['view_tools']->value['next_id'])), ENT_QUOTES, 'UTF-8');?>
" title="<?php if ($_smarty_tpl->tpl_vars['view_tools']->value['links_label']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['view_tools']->value['links_label'], ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['view_tools']->value['show_item_id']) {?> #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['view_tools']->value['next_id'], ENT_QUOTES, 'UTF-8');?>
<?php }?><?php } else { ?><?php echo $_smarty_tpl->__("next");?>
<?php }?>"<?php }?>> <i class="icon-chevron-right"></i> </a>
</div>
<?php }} ?>
