<?php /* Smarty version Smarty-3.1.18, created on 2015-06-11 09:42:12
         compiled from "/home/lostus/public_html/sportslinkshop/design/themes/responsive/templates/views/orders/components/payments/cc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17424480085578e774c9b151-91209691%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '5b43dc1266dd9c4e484474b83bc57b18ca70f12a' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/themes/responsive/templates/views/orders/components/payments/cc.tpl',
      1 => 1418021496,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17424480085578e774c9b151-91209691',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'runtime' => 0,
    'card_id' => 0,
    'id_suffix' => 0,
    'images_dir' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5578e774e59d01_12874997',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5578e774e59d01_12874997')) {function content_5578e774e59d01_12874997($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/lostus/public_html/sportslinkshop/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/home/lostus/public_html/sportslinkshop/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('card_number','valid_thru','cardholder_name','cvv2','what_is_cvv2','visa_card_discover','credit_card_info','american_express','american_express_info','error_validator_ccv','card_number','valid_thru','cardholder_name','cvv2','what_is_cvv2','visa_card_discover','credit_card_info','american_express','american_express_info','error_validator_ccv'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php echo smarty_function_script(array('src'=>"js/lib/inputmask/jquery.inputmask.min.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/lib/creditcardvalidator/jquery.creditCardValidator.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['card_id']->value) {?>
    <?php $_smarty_tpl->tpl_vars["id_suffix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['card_id']->value), null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["id_suffix"] = new Smarty_variable('', null, 0);?>
<?php }?>

<div class="clearfix">
    <div class="ty-credit-card">
            <div class="ty-credit-card__control-group ty-control-group">
                <label for="credit_card_number_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-control-group__title cm-cc-number cm-required"><?php echo $_smarty_tpl->__("card_number");?>
</label>
                <input size="35" type="text" id="credit_card_number_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="payment_info[card_number]" value="" class="ty-credit-card__input cm-autocomplete-off" />
                <ul class="ty-cc-icons cm-cc-icons">
                    <li class="ty-cc-icons__item cc-default cm-cc-default"><span class="ty-cc-icons__icon default">&nbsp;</span></li>
                    <li class="ty-cc-icons__item cm-cc-visa"><span class="ty-cc-icons__icon visa">&nbsp;</span></li>
                    <li class="ty-cc-icons__item cm-cc-visa_electron"><span class="ty-cc-icons__icon visa-electron">&nbsp;</span></li>
                    <li class="ty-cc-icons__item cm-cc-mastercard"><span class="ty-cc-icons__icon mastercard">&nbsp;</span></li>
                    <li class="ty-cc-icons__item cm-cc-maestro"><span class="ty-cc-icons__icon maestro">&nbsp;</span></li>
                    <li class="ty-cc-icons__item cm-cc-amex"><span class="ty-cc-icons__icon american-express">&nbsp;</span></li>
                    <li class="ty-cc-icons__item cm-cc-discover"><span class="ty-cc-icons__icon discover">&nbsp;</span></li>
                </ul>
            </div>

            <div class="ty-credit-card__control-group ty-control-group">
                <label for="credit_card_month_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-control-group__title cm-cc-date cm-cc-exp-month cm-required"><?php echo $_smarty_tpl->__("valid_thru");?>
</label>
                <label for="credit_card_year_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-required cm-cc-date cm-cc-exp-year hidden"></label>
                <input type="text" id="credit_card_month_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="payment_info[expiry_month]" value="" size="2" maxlength="2" class="ty-credit-card__input-short " />&nbsp;&nbsp;/&nbsp;&nbsp;<input type="text" id="credit_card_year_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
"  name="payment_info[expiry_year]" value="" size="2" maxlength="2" class="ty-credit-card__input-short" />&nbsp;
            </div>

            <div class="ty-credit-card__control-group ty-control-group">
                <label for="credit_card_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-control-group__title cm-required"><?php echo $_smarty_tpl->__("cardholder_name");?>
</label>
                <input size="35" type="text" id="credit_card_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="payment_info[cardholder_name]" value="" class="cm-cc-name ty-credit-card__input ty-uppercase" />
            </div>
    </div>

    <div class="ty-control-group ty-credit-card__cvv-field cvv-field">
        <label for="credit_card_cvv2_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-control-group__title cm-required cm-integer cm-cc-cvv2 cm-autocomplete-off"><?php echo $_smarty_tpl->__("cvv2");?>
</label>
        <input type="text" id="credit_card_cvv2_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="payment_info[cvv2]" value="" size="4" maxlength="4" class="ty-credit-card__cvv-field-input" />

        <div class="ty-cvv2-about">
            <span class="ty-cvv2-about__title"><?php echo $_smarty_tpl->__("what_is_cvv2");?>
</span>
            <div class="ty-cvv2-about__note">

                <div class="ty-cvv2-about__info mb30 clearfix">
                    <div class="ty-cvv2-about__image">
                        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/visa_cvv.png" alt="" />
                    </div>
                    <div class="ty-cvv2-about__description">
                        <h5 class="ty-cvv2-about__description-title"><?php echo $_smarty_tpl->__("visa_card_discover");?>
</h5>
                        <p><?php echo $_smarty_tpl->__("credit_card_info");?>
</p>
                    </div>
                </div>
                <div class="ty-cvv2-about__info clearfix">
                    <div class="ty-cvv2-about__image">
                        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/express_cvv.png" alt="" />
                    </div>
                    <div class="ty-cvv2-about__description">
                        <h5 class="ty-cvv2-about__description-title"><?php echo $_smarty_tpl->__("american_express");?>
</h5>
                        <p><?php echo $_smarty_tpl->__("american_express_info");?>
</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

(function(_, $) {
    $.ceEvent('on', 'ce.commoninit', function() {
        var icons = $('.cm-cc-icons li');
        var ccNumber = $(".cm-cc-number");
        var ccNumberInput = $("#" + ccNumber.attr("for"));
        var ccCv2 = $(".cm-cc-cvv2");
        var ccCv2Input = $("#" + ccCv2.attr("for"));
        var ccMonth = $(".cm-cc-exp-month");
        var ccMonthInput = $("#" + ccMonth.attr("for"));
        var ccYear = $(".cm-cc-exp-year");
        var ccYearInput = $("#" + ccYear.attr("for"));

        if(_.isTouch === false && jQuery.isEmptyObject(ccNumberInput.data("_inputmask")) == true) {

            ccNumberInput.inputmask("9999 9999 9999 9[99][9]", {
                placeholder: ' '
            });

            $.ceFormValidator('registerValidator', {
                class_name: 'cm-cc-number',
                message: '',
                func: function(id) {
                    return ccNumberInput.inputmask("isComplete");
                }
            });

            ccCv2Input.inputmask("999[9]", {
                placeholder: ''
            });

            $.ceFormValidator('registerValidator', {
                class_name: 'cm-cc-cvv2',
                message: "<?php echo $_smarty_tpl->__("error_validator_ccv");?>
",
                func: function(id) {
                    return ccCv2Input.inputmask("isComplete");
                }
            });

            ccMonthInput.inputmask("99", {
                placeholder: ''
            });

            ccYearInput.inputmask("99", {
                placeholder: ''
            });

            $.ceFormValidator('registerValidator', {
                class_name: 'cm-cc-date',
                message: '',
                func: function(id) {
                    return (ccYearInput.inputmask("isComplete") && ccMonthInput.inputmask("isComplete"));
                }
            });
        }

        ccNumberInput.validateCreditCard(function(result) {
            icons.removeClass('active');
            if (result.card_type) {
                icons.filter('.cm-cc-' + result.card_type.name).addClass('active');
                if (['visa_electron', 'maestro', 'laser'].indexOf(result.card_type.name) != -1) {
                    ccCv2.removeClass("cm-required");
                } else {
                    ccCv2.addClass("cm-required");
                }
            }
        });

    });
})(Tygh, Tygh.$);
</script><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/orders/components/payments/cc.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/orders/components/payments/cc.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php echo smarty_function_script(array('src'=>"js/lib/inputmask/jquery.inputmask.min.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/lib/creditcardvalidator/jquery.creditCardValidator.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['card_id']->value) {?>
    <?php $_smarty_tpl->tpl_vars["id_suffix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['card_id']->value), null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["id_suffix"] = new Smarty_variable('', null, 0);?>
<?php }?>

<div class="clearfix">
    <div class="ty-credit-card">
            <div class="ty-credit-card__control-group ty-control-group">
                <label for="credit_card_number_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-control-group__title cm-cc-number cm-required"><?php echo $_smarty_tpl->__("card_number");?>
</label>
                <input size="35" type="text" id="credit_card_number_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="payment_info[card_number]" value="" class="ty-credit-card__input cm-autocomplete-off" />
                <ul class="ty-cc-icons cm-cc-icons">
                    <li class="ty-cc-icons__item cc-default cm-cc-default"><span class="ty-cc-icons__icon default">&nbsp;</span></li>
                    <li class="ty-cc-icons__item cm-cc-visa"><span class="ty-cc-icons__icon visa">&nbsp;</span></li>
                    <li class="ty-cc-icons__item cm-cc-visa_electron"><span class="ty-cc-icons__icon visa-electron">&nbsp;</span></li>
                    <li class="ty-cc-icons__item cm-cc-mastercard"><span class="ty-cc-icons__icon mastercard">&nbsp;</span></li>
                    <li class="ty-cc-icons__item cm-cc-maestro"><span class="ty-cc-icons__icon maestro">&nbsp;</span></li>
                    <li class="ty-cc-icons__item cm-cc-amex"><span class="ty-cc-icons__icon american-express">&nbsp;</span></li>
                    <li class="ty-cc-icons__item cm-cc-discover"><span class="ty-cc-icons__icon discover">&nbsp;</span></li>
                </ul>
            </div>

            <div class="ty-credit-card__control-group ty-control-group">
                <label for="credit_card_month_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-control-group__title cm-cc-date cm-cc-exp-month cm-required"><?php echo $_smarty_tpl->__("valid_thru");?>
</label>
                <label for="credit_card_year_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-required cm-cc-date cm-cc-exp-year hidden"></label>
                <input type="text" id="credit_card_month_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="payment_info[expiry_month]" value="" size="2" maxlength="2" class="ty-credit-card__input-short " />&nbsp;&nbsp;/&nbsp;&nbsp;<input type="text" id="credit_card_year_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
"  name="payment_info[expiry_year]" value="" size="2" maxlength="2" class="ty-credit-card__input-short" />&nbsp;
            </div>

            <div class="ty-credit-card__control-group ty-control-group">
                <label for="credit_card_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-control-group__title cm-required"><?php echo $_smarty_tpl->__("cardholder_name");?>
</label>
                <input size="35" type="text" id="credit_card_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="payment_info[cardholder_name]" value="" class="cm-cc-name ty-credit-card__input ty-uppercase" />
            </div>
    </div>

    <div class="ty-control-group ty-credit-card__cvv-field cvv-field">
        <label for="credit_card_cvv2_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-control-group__title cm-required cm-integer cm-cc-cvv2 cm-autocomplete-off"><?php echo $_smarty_tpl->__("cvv2");?>
</label>
        <input type="text" id="credit_card_cvv2_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="payment_info[cvv2]" value="" size="4" maxlength="4" class="ty-credit-card__cvv-field-input" />

        <div class="ty-cvv2-about">
            <span class="ty-cvv2-about__title"><?php echo $_smarty_tpl->__("what_is_cvv2");?>
</span>
            <div class="ty-cvv2-about__note">

                <div class="ty-cvv2-about__info mb30 clearfix">
                    <div class="ty-cvv2-about__image">
                        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/visa_cvv.png" alt="" />
                    </div>
                    <div class="ty-cvv2-about__description">
                        <h5 class="ty-cvv2-about__description-title"><?php echo $_smarty_tpl->__("visa_card_discover");?>
</h5>
                        <p><?php echo $_smarty_tpl->__("credit_card_info");?>
</p>
                    </div>
                </div>
                <div class="ty-cvv2-about__info clearfix">
                    <div class="ty-cvv2-about__image">
                        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/express_cvv.png" alt="" />
                    </div>
                    <div class="ty-cvv2-about__description">
                        <h5 class="ty-cvv2-about__description-title"><?php echo $_smarty_tpl->__("american_express");?>
</h5>
                        <p><?php echo $_smarty_tpl->__("american_express_info");?>
</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

(function(_, $) {
    $.ceEvent('on', 'ce.commoninit', function() {
        var icons = $('.cm-cc-icons li');
        var ccNumber = $(".cm-cc-number");
        var ccNumberInput = $("#" + ccNumber.attr("for"));
        var ccCv2 = $(".cm-cc-cvv2");
        var ccCv2Input = $("#" + ccCv2.attr("for"));
        var ccMonth = $(".cm-cc-exp-month");
        var ccMonthInput = $("#" + ccMonth.attr("for"));
        var ccYear = $(".cm-cc-exp-year");
        var ccYearInput = $("#" + ccYear.attr("for"));

        if(_.isTouch === false && jQuery.isEmptyObject(ccNumberInput.data("_inputmask")) == true) {

            ccNumberInput.inputmask("9999 9999 9999 9[99][9]", {
                placeholder: ' '
            });

            $.ceFormValidator('registerValidator', {
                class_name: 'cm-cc-number',
                message: '',
                func: function(id) {
                    return ccNumberInput.inputmask("isComplete");
                }
            });

            ccCv2Input.inputmask("999[9]", {
                placeholder: ''
            });

            $.ceFormValidator('registerValidator', {
                class_name: 'cm-cc-cvv2',
                message: "<?php echo $_smarty_tpl->__("error_validator_ccv");?>
",
                func: function(id) {
                    return ccCv2Input.inputmask("isComplete");
                }
            });

            ccMonthInput.inputmask("99", {
                placeholder: ''
            });

            ccYearInput.inputmask("99", {
                placeholder: ''
            });

            $.ceFormValidator('registerValidator', {
                class_name: 'cm-cc-date',
                message: '',
                func: function(id) {
                    return (ccYearInput.inputmask("isComplete") && ccMonthInput.inputmask("isComplete"));
                }
            });
        }

        ccNumberInput.validateCreditCard(function(result) {
            icons.removeClass('active');
            if (result.card_type) {
                icons.filter('.cm-cc-' + result.card_type.name).addClass('active');
                if (['visa_electron', 'maestro', 'laser'].indexOf(result.card_type.name) != -1) {
                    ccCv2.removeClass("cm-required");
                } else {
                    ccCv2.addClass("cm-required");
                }
            }
        });

    });
})(Tygh, Tygh.$);
</script><?php }?><?php }} ?>
