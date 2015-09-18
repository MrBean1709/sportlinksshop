<?php /* Smarty version Smarty-3.1.18, created on 2015-09-18 11:53:32
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/views/shippings/components/services/aramex.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6738435855fa384855f062-13635032%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9250918537cc0df3317a95fd10f15e47d4a4c93a' => 
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/views/shippings/components/services/aramex.tpl',
      1 => 1442547648,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6738435855fa384855f062-13635032',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa3848584378_20173218',
  'variables' => 
  array (
    'shipping' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa3848584378_20173218')) {function content_55fa3848584378_20173218($_smarty_tpl) {?><?php
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


</fieldset>
<?php }} ?>
