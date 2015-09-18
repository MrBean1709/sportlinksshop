<?php /* Smarty version Smarty-3.1.18, created on 2015-09-01 13:57:31
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/paypal/views/payments/components/cc_processors/paypal_advanced.tpl" */ ?>
<?php /*%%SmartyHeaderCode:108475048955e53e4b18aa53-34398761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'c92cf737fb4812d4077d92bb79313e724073239d' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/paypal/views/payments/components/cc_processors/paypal_advanced.tpl',
      1 => 1418020412,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '108475048955e53e4b18aa53-34398761',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'processor_params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55e53e4b2ddd07_20513902',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e53e4b2ddd07_20513902')) {function content_55e53e4b2ddd07_20513902($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('merchant_login','api_user','api_partner','api_password','test_live_mode','test','live','payments.paypal_adv_layout','payments.layout_a','payments.layout_b','payments.layout_c','payflowcolor','header_image','button_bgcolor','button_text_color','collapse_bg_color','collapse_text_color','label_text_color'));
?>
<div class="control-group">
    <label class="control-label" for="paypal_adv_merchant_login"><?php echo $_smarty_tpl->__("merchant_login");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][merchant_login]" id="paypal_adv_merchant_login" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['merchant_login'], ENT_QUOTES, 'UTF-8');?>
" class="input-text" size="60" />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="paypal_adv_api_user"><?php echo $_smarty_tpl->__("api_user");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][api_user]" id="paypal_adv_api_user" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['api_user'], ENT_QUOTES, 'UTF-8');?>
" class="input-text" size="60" />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="paypal_adv_api_partner"><?php echo $_smarty_tpl->__("api_partner");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][api_partner]" id="paypal_adv_api_partner" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['api_partner'], ENT_QUOTES, 'UTF-8');?>
" class="input-text" size="60" />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="paypal_adv_api_password"><?php echo $_smarty_tpl->__("api_password");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][api_password]" id="paypal_adv_api_password" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['api_password'], ENT_QUOTES, 'UTF-8');?>
" class="input-text" size="60" />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="paypal_adv_testmode"><?php echo $_smarty_tpl->__("test_live_mode");?>
:</label>
    <div class="controls">
        <select name="payment_data[processor_params][testmode]" id="paypal_adv_testmode">
            <option value="Y" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['testmode']=="Y") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("test");?>
</option>
            <option value="N" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['testmode']=="N") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("live");?>
</option>
        </select>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="paypal_adv_layout"><?php echo $_smarty_tpl->__("payments.paypal_adv_layout");?>
:</label>
    <div class="controls">
        <select name="payment_data[processor_params][layout]" id="paypal_adv_layout">
            <option value="templateA" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['layout']=="templateA") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("payments.layout_a");?>
</option>
            <option value="templateB" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['layout']=="templateB") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("payments.layout_b");?>
</option>
            <option value="minLayout" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['layout']=="minLayout") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("payments.layout_c");?>
</option>
        </select>
    </div>
</div>

<div class="control-group">
    <label class="control-label cm-color" for="paypal_adv_payflowcolor"><?php echo $_smarty_tpl->__("payflowcolor");?>
:</label>
    <div class="controls">
        <?php echo $_smarty_tpl->getSubTemplate ("common/colorpicker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('cp_name'=>"payment_data[processor_params][payflowcolor]",'cp_id'=>"paypal_adv_payflowcolor",'cp_value'=>$_smarty_tpl->tpl_vars['processor_params']->value['payflowcolor']), 0);?>

    </div>
</div>

<div class="control-group">
    <label class="control-label" for="paypal_adv_header_image"><?php echo $_smarty_tpl->__("header_image");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][header_image]" id="paypal_adv_header_image" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['header_image'], ENT_QUOTES, 'UTF-8');?>
" class="input-text"  size="60" maxlength="127" />
    </div>
</div>

<div class="control-group">
    <label class="control-label cm-color" for="paypal_adv_button_bgcolor"><?php echo $_smarty_tpl->__("button_bgcolor");?>
:</label>
    <div class="controls">
        <?php echo $_smarty_tpl->getSubTemplate ("common/colorpicker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('cp_name'=>"payment_data[processor_params][button_bgcolor]",'cp_id'=>"paypal_adv_button_bgcolor",'cp_value'=>$_smarty_tpl->tpl_vars['processor_params']->value['button_bgcolor']), 0);?>

    </div>
</div>

<div class="control-group">
    <label class="control-label cm-color" for="paypal_adv_button_text_color"><?php echo $_smarty_tpl->__("button_text_color");?>
:</label>
    <div class="controls">
        <?php echo $_smarty_tpl->getSubTemplate ("common/colorpicker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('cp_name'=>"payment_data[processor_params][button_text_color]",'cp_id'=>"paypal_adv_button_text_color",'cp_value'=>$_smarty_tpl->tpl_vars['processor_params']->value['button_text_color']), 0);?>

    </div>
</div>

<div class="control-group">
    <label class="control-label cm-color" for="paypal_adv_collapse_bg_color"><?php echo $_smarty_tpl->__("collapse_bg_color");?>
:</label>
    <div class="controls">
        <?php echo $_smarty_tpl->getSubTemplate ("common/colorpicker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('cp_name'=>"payment_data[processor_params][collapse_bg_color]",'cp_id'=>"paypal_adv_collapse_bg_color",'cp_value'=>$_smarty_tpl->tpl_vars['processor_params']->value['collapse_bg_color']), 0);?>

    </div>
</div>

<div class="control-group">
    <label class="control-label cm-color" for="paypal_adv_collapse_text_color"><?php echo $_smarty_tpl->__("collapse_text_color");?>
:</label>
    <div class="controls">
        <?php echo $_smarty_tpl->getSubTemplate ("common/colorpicker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('cp_name'=>"payment_data[processor_params][collapse_text_color]",'cp_id'=>"paypal_adv_collapse_text_color",'cp_value'=>$_smarty_tpl->tpl_vars['processor_params']->value['collapse_text_color']), 0);?>

    </div>
</div>

<div class="control-group">
    <label class="control-label cm-color" for="paypal_adv_label_text_color"><?php echo $_smarty_tpl->__("label_text_color");?>
:</label>
    <div class="controls">
        <?php echo $_smarty_tpl->getSubTemplate ("common/colorpicker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('cp_name'=>"payment_data[processor_params][label_text_color]",'cp_id'=>"paypal_adv_label_text_color",'cp_value'=>$_smarty_tpl->tpl_vars['processor_params']->value['label_text_color']), 0);?>

    </div>
</div>
<?php }} ?>
