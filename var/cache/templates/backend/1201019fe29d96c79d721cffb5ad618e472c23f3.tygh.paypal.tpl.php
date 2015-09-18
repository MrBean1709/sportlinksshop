<?php /* Smarty version Smarty-3.1.18, created on 2015-06-13 06:12:45
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/paypal/views/payments/components/cc_processors/paypal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:581970793557b595d936914-75636851%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '1201019fe29d96c79d721cffb5ad618e472c23f3' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/paypal/views/payments/components/cc_processors/paypal.tpl',
      1 => 1418020412,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '581970793557b595d936914-75636851',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'processor_params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_557b595dac7362_38591748',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557b595dac7362_38591748')) {function content_557b595dac7362_38591748($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('account','paypal_item_name','currency','currency_code_cad','currency_code_eur','currency_code_gbp','currency_code_usd','currency_code_jpy','currency_code_rur','currency_code_aud','currency_code_nzd','currency_code_chf','currency_code_hkd','currency_code_sgd','currency_code_sek','currency_code_dkk','currency_code_pln','currency_code_nok','currency_code_huf','currency_code_czk','currency_code_ils','currency_code_mxn','currency_code_brl','currency_code_myr','currency_code_php','currency_code_twd','currency_code_thb','currency_code_try','test_live_mode','test','live','order_prefix'));
?>
<div class="control-group">
    <label class="control-label" for="account"><?php echo $_smarty_tpl->__("account");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][account]" id="account" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['account'], ENT_QUOTES, 'UTF-8');?>
" >
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="item_name"><?php echo $_smarty_tpl->__("paypal_item_name");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][item_name]" id="item_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['item_name'], ENT_QUOTES, 'UTF-8');?>
" >
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="currency"><?php echo $_smarty_tpl->__("currency");?>
:</label>
    <div class="controls">
        <select name="payment_data[processor_params][currency]" id="currency">
            <option value="CAD" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="CAD") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_cad");?>
</option>
            <option value="EUR" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="EUR") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_eur");?>
</option>
            <option value="GBP" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="GBP") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_gbp");?>
</option>
            <option value="USD" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="USD") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_usd");?>
</option>
            <option value="JPY" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="JPY") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_jpy");?>
</option>
            <option value="RUB" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="RUB") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_rur");?>
</option>
            <option value="AUD" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="AUD") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_aud");?>
</option>
            <option value="NZD" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="NZD") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_nzd");?>
</option>
            <option value="CHF" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="CHF") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_chf");?>
</option>
            <option value="HKD" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="HKD") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_hkd");?>
</option>
            <option value="SGD" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="SGD") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_sgd");?>
</option>
            <option value="SEK" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="SEK") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_sek");?>
</option>
            <option value="DKK" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="DKK") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_dkk");?>
</option>
            <option value="PLN" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="PLN") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_pln");?>
</option>
            <option value="NOK" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="NOK") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_nok");?>
</option>
            <option value="HUF" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="HUF") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_huf");?>
</option>
            <option value="CZK" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="CZK") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_czk");?>
</option>
            <option value="ILS" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="ILS") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_ils");?>
</option>
            <option value="MXN" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="MXN") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_mxn");?>
</option>
            <option value="BRL" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="BRL") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_brl");?>
</option>
            <option value="MYR" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="MYR") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_myr");?>
</option>
            <option value="PHP" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="PHP") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_php");?>
</option>
            <option value="TWD" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="TWD") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_twd");?>
</option>
            <option value="THB" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="THB") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_thb");?>
</option>
            <option value="TRY" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="TRY") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_try");?>
</option>
        </select>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="mode"><?php echo $_smarty_tpl->__("test_live_mode");?>
:</label>
    <div class="controls">
        <select name="payment_data[processor_params][mode]" id="mode">
            <option value="test" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['mode']=="test") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("test");?>
</option>
            <option value="live" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['mode']=="live") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("live");?>
</option>
        </select>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="order_prefix"><?php echo $_smarty_tpl->__("order_prefix");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][order_prefix]" id="order_prefix" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['order_prefix'], ENT_QUOTES, 'UTF-8');?>
" >
    </div>
</div>
<?php }} ?>
