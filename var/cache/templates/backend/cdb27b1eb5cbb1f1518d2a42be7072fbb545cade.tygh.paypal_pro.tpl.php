<?php /* Smarty version Smarty-3.1.18, created on 2015-06-13 06:13:16
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/paypal/views/payments/components/cc_processors/paypal_pro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:239223932557b597c2675d8-08039384%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'cdb27b1eb5cbb1f1518d2a42be7072fbb545cade' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/paypal/views/payments/components/cc_processors/paypal_pro.tpl',
      1 => 1418020412,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '239223932557b597c2675d8-08039384',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'processor_params' => 0,
    'payment_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_557b597c492247_05705258',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557b597c492247_05705258')) {function content_557b597c492247_05705258($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('username','password','paypal_authentication_method','certificate','signature','certificate_filename','signature','currency','currency_code_cad','currency_code_eur','currency_code_gbp','currency_code_usd','currency_code_jpy','currency_code_rur','currency_code_aud','currency_code_nzd','currency_code_chf','currency_code_sgd','currency_code_sek','currency_code_dkk','currency_code_pln','currency_code_nok','currency_code_huf','currency_code_czk','test_live_mode','test','live','order_prefix','3d_secure','use_cardinal','dont_use_cardinal','merchant_id','processor_id','transaction_password','transaction_url','read_more_3d_secure'));
?>
<div class="control-group">
    <label class="control-label" for="username"><?php echo $_smarty_tpl->__("username");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][username]" id="username" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['username'], ENT_QUOTES, 'UTF-8');?>
" >
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="password"><?php echo $_smarty_tpl->__("password");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][password]" id="password" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['password'], ENT_QUOTES, 'UTF-8');?>
" >
    </div>
</div>

<div class="control-group">
    <label class="control-label"><?php echo $_smarty_tpl->__("paypal_authentication_method");?>
:</label>
    <div class="controls">
        <label class="radio inline" for="elm_payment_auth_method_cert">
            <input id="elm_payment_auth_method_cert" type="radio" value="cert" name="payment_data[processor_params][authentication_method]" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['authentication_method']=="cert"||!$_smarty_tpl->tpl_vars['processor_params']->value['authentication_method']) {?> checked="checked"<?php }?>>
            <?php echo $_smarty_tpl->__("certificate");?>

        </label>
        <label class="radio inline" for="elm_payment_auth_method_signature">
            <input id="elm_payment_auth_method_signature" type="radio" value="signature" name="payment_data[processor_params][authentication_method]" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['authentication_method']=="signature") {?> checked="checked"<?php }?>>
            <?php echo $_smarty_tpl->__("signature");?>

        </label>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="certificate_filename"><?php echo $_smarty_tpl->__("certificate_filename");?>
:</label>
    <div class="controls" id="certificate_file">
        <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['certificate_filename']) {?>
            <div class="text-type-value pull-left">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['certificate_filename'], ENT_QUOTES, 'UTF-8');?>

                <a href="<?php echo htmlspecialchars(fn_url(('payments.delete_certificate?payment_id=').($_smarty_tpl->tpl_vars['payment_id']->value)), ENT_QUOTES, 'UTF-8');?>
" class="cm-ajax" data-ca-target-id="certificate_file">
                    <i class="icon-remove-sign cm-tooltip hand" title="<?php echo $_smarty_tpl->__('remove');?>
"></i>
                </a>
            </div>
        <?php }?>

        <div <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['certificate_filename']) {?>class="clear"<?php }?>><?php echo $_smarty_tpl->getSubTemplate ("common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('var_name'=>"payment_certificate[]"), 0);?>
</div>
    <!--certificate_file--></div>
</div>

<div class="control-group">
    <label class="control-label" for="api_signature"><?php echo $_smarty_tpl->__("signature");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][signature]" id="api_signature" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['signature'], ENT_QUOTES, 'UTF-8');?>
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

<h3><?php echo $_smarty_tpl->__("3d_secure");?>
</h3>

<div class="select-field">
    <input type="hidden" value="" name="payment_data[processor_params][use_cardinal]">
    <input id="use_cardinal" class="hidden" type="checkbox" value="Y" name="payment_data[processor_params][use_cardinal]" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['use_cardinal']=="Y") {?> checked="checked"<?php }?> onclick="Tygh.$('#use_cardinal_block').toggle();"/>

    <p id="on_use_cardinal_sw"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['use_cardinal']=="Y") {?> class="hidden"<?php }?>>
    <a class="cm-combination dashed" onclick="Tygh.$('#use_cardinal').click();"><?php echo $_smarty_tpl->__("use_cardinal");?>
</a><br>
    </p>

    <p id="off_use_cardinal_sw"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['use_cardinal']!="Y") {?> class="hidden"<?php }?>>
    <a class="cm-combination dashed" onclick="Tygh.$('#use_cardinal').click();"><?php echo $_smarty_tpl->__("dont_use_cardinal");?>
</a><br>
    </p>
</div>

<div id="use_cardinal_block"<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['use_cardinal']!="Y") {?> class="hidden"<?php }?>>
<div class="control-group">
    <label class="control-label" for="merchant_id"><?php echo $_smarty_tpl->__("merchant_id");?>
:</label>
        <div class="controls">
            <input type="text" name="payment_data[processor_params][merchant_id]" id="merchant_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['merchant_id'], ENT_QUOTES, 'UTF-8');?>
" >
        </div>
</div>

<div class="control-group">
    <label class="control-label" for="processor_id"><?php echo $_smarty_tpl->__("processor_id");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][processor_id]" id="processor_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['processor_id'], ENT_QUOTES, 'UTF-8');?>
" >
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="transaction_password"><?php echo $_smarty_tpl->__("transaction_password");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][transaction_password]" id="transaction_password" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['transaction_password'], ENT_QUOTES, 'UTF-8');?>
" >
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="transaction_url"><?php echo $_smarty_tpl->__("transaction_url");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][transaction_url]" id="transaction_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['transaction_url'], ENT_QUOTES, 'UTF-8');?>
" >
    </div>
</div>
</div>

<p class="description"><a href="https://www.paypal-business.co.uk/3Dsecure.asp" target="_blank"><?php echo $_smarty_tpl->__("read_more_3d_secure");?>
</a></p>
<?php }} ?>
