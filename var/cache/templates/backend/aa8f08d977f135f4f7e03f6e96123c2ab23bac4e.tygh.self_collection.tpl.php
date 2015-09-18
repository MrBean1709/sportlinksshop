<?php /* Smarty version Smarty-3.1.18, created on 2015-09-17 13:00:12
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/views/shippings/components/services/self_collection.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3984084155fa48dcf0cce2-17261982%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'aa8f08d977f135f4f7e03f6e96123c2ab23bac4e' =>
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/views/shippings/components/services/self_collection.tpl',
      1 => 1441256939,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3984084155fa48dcf0cce2-17261982',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'shipping' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa48dd03f962_64411548',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa48dd03f962_64411548')) {function content_55fa48dd03f962_64411548($_smarty_tpl) {?><fieldset>

<div class="control-group">
    <label class="control-label" for="outlet_name">Outlet Name:</label>
    <div class="controls">
    <input id="outlet_name" type="text" name="shipping_data[service_params][outlet_name]" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['service_params']['outlet_name'], ENT_QUOTES, 'UTF-8');?>
" class="input-text" />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="location">Location:</label>
    <div class="controls">
    <input id="location" type="text" name="shipping_data[service_params][location]" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['service_params']['location'], ENT_QUOTES, 'UTF-8');?>
" class="input-text" />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="address">Address:</label>
    <div class="controls">
    <input id="address" type="text" name="shipping_data[service_params][address]" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['service_params']['address'], ENT_QUOTES, 'UTF-8');?>
" class="input-text" />
    </div>
</div>

</fieldset><?php }} ?>
