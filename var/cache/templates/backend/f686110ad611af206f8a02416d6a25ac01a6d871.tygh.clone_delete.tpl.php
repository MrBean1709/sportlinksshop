<?php /* Smarty version Smarty-3.1.18, created on 2015-08-04 04:53:21
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/buttons/clone_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:99767180955bfd4c10e2516-86084819%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'f686110ad611af206f8a02416d6a25ac01a6d871' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/buttons/clone_delete.tpl',
      1 => 1418020414,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '99767180955bfd4c10e2516-86084819',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'href_clone' => 0,
    'no_confirm' => 0,
    'microformats' => 0,
    'href_delete' => 0,
    'delete_target_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55bfd4c118b740_09229617',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55bfd4c118b740_09229617')) {function content_55bfd4c118b740_09229617($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('remove','remove'));
?>
<?php if ($_smarty_tpl->tpl_vars['href_clone']->value) {?>
<a class="clone-item cm-tooltip" title="<?php echo $_smarty_tpl->__("remove");?>
" href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['href_clone']->value), ENT_QUOTES, 'UTF-8');?>
"><i class="icon-remove"></i></a>
<?php }?>
<a class="delete-item cm-tooltip <?php if (!$_smarty_tpl->tpl_vars['no_confirm']->value) {?>cm-confirm<?php }?><?php if ($_smarty_tpl->tpl_vars['microformats']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['microformats']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?>" title="<?php echo $_smarty_tpl->__("remove");?>
" <?php if ($_smarty_tpl->tpl_vars['href_delete']->value) {?>href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['href_delete']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['delete_target_id']->value) {?>data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delete_target_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><i class="icon-remove"></i></a><?php }} ?>
