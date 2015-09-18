<?php /* Smarty version Smarty-3.1.18, created on 2015-06-13 06:52:20
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/views/companies/components/reason_container.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1983239771557b62a400c8e4-98875446%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'a3da5fe41f1ae254c517ab534078ebeca3a1d58f' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/views/companies/components/reason_container.tpl',
      1 => 1418020416,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1983239771557b62a400c8e4-98875446',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'type' => 0,
    'mandatory_notification' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_557b62a402c484_08507786',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557b62a402c484_08507786')) {function content_557b62a402c484_08507786($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('reason','notify_vendors_by_email'));
?>
<div class="form-horizontal form-edit">
<div class="control-group">
    <label class="control-label"><?php echo $_smarty_tpl->__("reason");?>
</label>
    <div class="controls">
    <textarea class="span9" name="action_reason_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
" id="action_reason_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
" cols="50" rows="4"></textarea>
    </div>
</div>

<div class="cm-toggle-button">
    <div class="control-group notify-customer">
        <div class="controls">
        <label for="action_notification" class="checkbox">
        <input type="hidden" name="action_notification" value="N" />
        <input type="checkbox" name="action_notification" id="action_notification" value="Y" checked="checked" <?php if ($_smarty_tpl->tpl_vars['mandatory_notification']->value) {?>disabled="disabled"<?php }?> />
        <?php echo $_smarty_tpl->__("notify_vendors_by_email");?>
</label>
        </div>
    </div>
</div>
</div><?php }} ?>
