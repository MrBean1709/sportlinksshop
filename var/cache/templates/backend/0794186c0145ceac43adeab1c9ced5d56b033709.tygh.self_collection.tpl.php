<?php /* Smarty version Smarty-3.1.18, created on 2015-07-14 10:20:42
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/views/shippings/components/services/self_collection.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25565380155a471fa46a0e6-34393572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '0794186c0145ceac43adeab1c9ced5d56b033709' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/views/shippings/components/services/self_collection.tpl',
      1 => 1436761575,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '25565380155a471fa46a0e6-34393572',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'shipping' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55a471fa544b57_19790092',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a471fa544b57_19790092')) {function content_55a471fa544b57_19790092($_smarty_tpl) {?><fieldset>

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
