<?php /* Smarty version Smarty-3.1.18, created on 2015-06-13 06:16:06
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/views/shippings/components/services/aramex.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1634420815557b5a26b33a03-66213057%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '9cba7ba484f9d1c084650f50154577ab34c9dd4f' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/views/shippings/components/services/aramex.tpl',
      1 => 1426064959,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1634420815557b5a26b33a03-66213057',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'shipping' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_557b5a26b926f1_62282626',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557b5a26b926f1_62282626')) {function content_557b5a26b926f1_62282626($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('username','password','aramex_account_number','aramex_account_pin','aramex_account_entity','aramex_account_country_code','version'));
?>
<fieldset>

<div class="control-group">
    <label class="control-label" for="username"><?php echo $_smarty_tpl->__("username");?>
:</label>
    <div class="controls">
    <input id="username" type="text" name="shipping_data[service_params][username]" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['service_params']['username'], ENT_QUOTES, 'UTF-8');?>
" class="input-text" />
    </div>
</div>
<div class="control-group">
    <label class="control-label" for="username"><?php echo $_smarty_tpl->__("password");?>
:</label>
    <div class="controls">
    <input id="username" type="text" name="shipping_data[service_params][password]" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['service_params']['password'], ENT_QUOTES, 'UTF-8');?>
" class="input-text" />
    </div>
</div>


<div class="control-group">
    <label class="control-label" for="username"><?php echo $_smarty_tpl->__("aramex_account_number");?>
:</label>
    <div class="controls">
    <input id="username" type="text" name="shipping_data[service_params][account_number]" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['service_params']['account_number'], ENT_QUOTES, 'UTF-8');?>
" class="input-text" />
    </div>
</div>
<div class="control-group">
    <label class="control-label" for="username"><?php echo $_smarty_tpl->__("aramex_account_pin");?>
:</label>
    <div class="controls">
    <input id="username" type="text" name="shipping_data[service_params][account_pin]" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['service_params']['account_pin'], ENT_QUOTES, 'UTF-8');?>
" class="input-text" />
    </div>
</div>
<div class="control-group">
    <label class="control-label" for="username"><?php echo $_smarty_tpl->__("aramex_account_entity");?>
:</label>
    <div class="controls">
    <input id="username" type="text" name="shipping_data[service_params][account_entity]" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['service_params']['account_entity'], ENT_QUOTES, 'UTF-8');?>
" class="input-text" />
    </div>
</div>
<div class="control-group">
    <label class="control-label" for="username"><?php echo $_smarty_tpl->__("aramex_account_country_code");?>
:</label>
    <div class="controls">
    <input id="username" type="text" name="shipping_data[service_params][account_country_code]" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['service_params']['account_country_code'], ENT_QUOTES, 'UTF-8');?>
" class="input-text" />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="username"><?php echo $_smarty_tpl->__("version");?>
:</label>
    <div class="controls">
    <input id="username" type="text" name="shipping_data[service_params][version]" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['service_params']['version'], ENT_QUOTES, 'UTF-8');?>
" class="input-text" />
    </div>
</div>


</fieldset><?php }} ?>
