<?php /* Smarty version Smarty-3.1.18, created on 2015-09-17 11:47:00
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/views/companies/components/reason_container.tpl" */ ?>
<?php /*%%SmartyHeaderCode:80789570555fa37b4d45cd5-65094717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '183e6f83ad8ef3b186281fc1795e52189794f751' =>
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/views/companies/components/reason_container.tpl',
      1 => 1441256922,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '80789570555fa37b4d45cd5-65094717',
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
  'unifunc' => 'content_55fa37b4d62988_69132006',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa37b4d62988_69132006')) {function content_55fa37b4d62988_69132006($_smarty_tpl) {?><?php
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
