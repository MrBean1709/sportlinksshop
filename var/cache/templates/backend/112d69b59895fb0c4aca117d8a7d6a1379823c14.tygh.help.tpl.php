<?php /* Smarty version Smarty-3.1.18, created on 2015-06-10 18:31:51
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/common/help.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7894930425578121738f771-75069903%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '112d69b59895fb0c4aca117d8a7d6a1379823c14' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/common/help.tpl',
      1 => 1418020414,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7894930425578121738f771-75069903',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'content' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_557812173e6bf4_71894041',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557812173e6bf4_71894041')) {function content_557812173e6bf4_71894041($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('note'));
?>
<?php if ($_smarty_tpl->tpl_vars['content']->value) {?>
<div class="pull-right note-subheader">
    <?php $_smarty_tpl->_capture_stack[0][] = array("notes_picker", null, null); ob_start(); ?>
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('act'=>"notes",'id'=>"content_".((string)$_smarty_tpl->tpl_vars['id']->value)."_notes",'text'=>__("note"),'content'=>Smarty::$_smarty_vars['capture']['notes_picker']), 0);?>

</div>
<?php }?><?php }} ?>
