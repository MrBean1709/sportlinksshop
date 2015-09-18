<?php /* Smarty version Smarty-3.1.18, created on 2015-06-11 22:05:12
         compiled from "/home/lostus/public_html/sportslinkshop/design/themes/responsive/templates/blocks/product_filters/components/product_filter_slider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:107820042555799598d9bb80-27534583%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'f282ba9b596dee4273827e4a04db170f5a0958b1' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/themes/responsive/templates/blocks/product_filters/components/product_filter_slider.tpl',
      1 => 1418021496,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '107820042555799598d9bb80-27534583',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'runtime' => 0,
    'filter' => 0,
    'min' => 0,
    'max' => 0,
    'dynamic' => 0,
    'placeholder' => 0,
    'filter_qstring' => 0,
    'filter_slider_hash' => 0,
    'filter_slider_url' => 0,
    'config' => 0,
    'filter_uid' => 0,
    'collapse' => 0,
    'extra_class' => 0,
    'id' => 0,
    'left' => 0,
    'disable_slider' => 0,
    'right' => 0,
    'secondary_currency' => 0,
    'currencies' => 0,
    'num_25' => 0,
    'num_50' => 0,
    'num_75' => 0,
    '_right' => 0,
    'allow_ajax' => 0,
    'use_ajax' => 0,
    'ajax_div_ids' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_557995991b9368_92026483',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557995991b9368_92026483')) {function content_557995991b9368_92026483($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/home/lostus/public_html/sportslinkshop/app/lib/other/smarty/plugins/function.math.php';
if (!is_callable('smarty_function_set_id')) include '/home/lostus/public_html/sportslinkshop/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php $_smarty_tpl->tpl_vars['placeholder'] = new Smarty_variable("nnn-nnn", null, 0);?>
<?php $_smarty_tpl->tpl_vars['min'] = new Smarty_variable($_smarty_tpl->tpl_vars['filter']->value['range_values']['min'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['max'] = new Smarty_variable($_smarty_tpl->tpl_vars['filter']->value['range_values']['max'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['left'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['filter']->value['range_values']['left'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['min']->value : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['right'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['filter']->value['range_values']['right'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['max']->value : $tmp), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['max']->value-$_smarty_tpl->tpl_vars['min']->value<=$_smarty_tpl->tpl_vars['filter']->value['round_to']) {?>
    <?php $_smarty_tpl->tpl_vars['disable_slider'] = new Smarty_variable(true, null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['max']->value-$_smarty_tpl->tpl_vars['min']->value>=(4*$_smarty_tpl->tpl_vars['filter']->value['round_to'])) {?>
    <?php echo smarty_function_math(array('equation'=>"min + round((max - min) * 0.25 / rto) * rto",'max'=>$_smarty_tpl->tpl_vars['max']->value,'min'=>$_smarty_tpl->tpl_vars['min']->value,'rto'=>$_smarty_tpl->tpl_vars['filter']->value['round_to'],'assign'=>"num_25"),$_smarty_tpl);?>

    <?php echo smarty_function_math(array('equation'=>"min + round((max - min) * 0.50 / rto) * rto",'max'=>$_smarty_tpl->tpl_vars['max']->value,'min'=>$_smarty_tpl->tpl_vars['min']->value,'rto'=>$_smarty_tpl->tpl_vars['filter']->value['round_to'],'assign'=>"num_50"),$_smarty_tpl);?>

    <?php echo smarty_function_math(array('equation'=>"min + round((max - min) * 0.75 / rto) * rto",'max'=>$_smarty_tpl->tpl_vars['max']->value,'min'=>$_smarty_tpl->tpl_vars['min']->value,'rto'=>$_smarty_tpl->tpl_vars['filter']->value['round_to'],'assign'=>"num_75"),$_smarty_tpl);?>

<?php }?>

<?php if (fn_string_not_empty($_smarty_tpl->tpl_vars['filter']->value['range_values']['left'])||fn_string_not_empty($_smarty_tpl->tpl_vars['filter']->value['range_values']['right'])) {?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("has_selected", null, null); ob_start(); ?>Y<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['dynamic']->value) {?>
    <?php $_smarty_tpl->tpl_vars["filter_slider_hash"] = new Smarty_variable(fn_add_range_to_url_hash($_REQUEST['features_hash'],$_smarty_tpl->tpl_vars['placeholder']->value,$_smarty_tpl->tpl_vars['filter']->value['field_type']), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["filter_slider_url"] = new Smarty_variable(fn_url(fn_link_attach($_smarty_tpl->tpl_vars['filter_qstring']->value,"features_hash=".((string)$_smarty_tpl->tpl_vars['filter_slider_hash']->value))), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["use_ajax"] = new Smarty_variable(fn_compare_dispatch($_smarty_tpl->tpl_vars['filter_slider_url']->value,$_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["filter_slider_hash"] = new Smarty_variable(fn_add_range_to_url_hash('',$_smarty_tpl->tpl_vars['placeholder']->value,$_smarty_tpl->tpl_vars['filter']->value['field_type']), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["filter_slider_url"] = new Smarty_variable(fn_url("products.search?features_hash=".((string)$_smarty_tpl->tpl_vars['filter_slider_hash']->value)), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["use_ajax"] = new Smarty_variable(false, null, 0);?>
<?php }?>

<div id="content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-price-slider <?php if ($_smarty_tpl->tpl_vars['collapse']->value) {?>hidden<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra_class']->value, ENT_QUOTES, 'UTF-8');?>
">
    <input type="text" class="ty-price-slider__input-text" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_left" name="left_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['left']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['disable_slider']->value) {?> disabled="disabled"<?php }?> />
    &nbsp;–&nbsp;
    <input type="text" class="ty-price-slider__input-text" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_right" name="right_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['right']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['disable_slider']->value) {?> disabled="disabled"<?php }?> />
    <?php if ($_smarty_tpl->tpl_vars['filter']->value['field_type']=='P') {?>
        &nbsp;<?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]['symbol'];?>

    <?php }?>

    <div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-range-slider cm-range-slider">
        <ul class="ty-range-slider__wrapper">
            <li class="ty-range-slider__item" style="left: 0%;"><span class="ty-range-slider__num"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['min']->value, ENT_QUOTES, 'UTF-8');?>
</span></li>
            <?php if ($_smarty_tpl->tpl_vars['num_25']->value) {?>
                <li class="ty-range-slider__item" style="left: 25%;"><span class="ty-range-slider__num"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num_25']->value, ENT_QUOTES, 'UTF-8');?>
</span></li>
                <li class="ty-range-slider__item" style="left: 50%;"><span class="ty-range-slider__num"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num_50']->value, ENT_QUOTES, 'UTF-8');?>
</span></li>
                <li class="ty-range-slider__item" style="left: 75%;"><span class="ty-range-slider__num"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num_75']->value, ENT_QUOTES, 'UTF-8');?>
</span></li>
            <?php }?>
            <li class="ty-range-slider__item" style="left: 100%;"><span class="ty-range-slider__num"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['max']->value, ENT_QUOTES, 'UTF-8');?>
</span></li>
        </ul>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['right']->value==$_smarty_tpl->tpl_vars['left']->value) {?>
        <?php echo smarty_function_math(array('equation'=>"left + rto",'left'=>$_smarty_tpl->tpl_vars['left']->value,'rto'=>$_smarty_tpl->tpl_vars['filter']->value['round_to'],'assign'=>"_right"),$_smarty_tpl);?>

    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars["_right"] = new Smarty_variable($_smarty_tpl->tpl_vars['right']->value, null, 0);?>
    <?php }?>

    <input type="hidden" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_json" value='{
        "disabled": <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['disable_slider']->value)===null||$tmp==='' ? "false" : $tmp), ENT_QUOTES, 'UTF-8');?>
,
        "min": <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['min']->value, ENT_QUOTES, 'UTF-8');?>
,
        "max": <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['max']->value, ENT_QUOTES, 'UTF-8');?>
,
        "left": <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['left']->value, ENT_QUOTES, 'UTF-8');?>
,
        "right": <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_right']->value, ENT_QUOTES, 'UTF-8');?>
,
        "step": <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['round_to'], ENT_QUOTES, 'UTF-8');?>
,
        "url": "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_slider_url']->value, ENT_QUOTES, 'UTF-8');?>
",
        "type": "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['field_type'], ENT_QUOTES, 'UTF-8');?>
",
        "currency": "<?php echo htmlspecialchars(@constant('CART_SECONDARY_CURRENCY'), ENT_QUOTES, 'UTF-8');?>
",
        "ajax": <?php if ($_smarty_tpl->tpl_vars['allow_ajax']->value&&$_smarty_tpl->tpl_vars['use_ajax']->value) {?>true<?php } else { ?>false<?php }?>,
        "result_ids": "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_div_ids']->value, ENT_QUOTES, 'UTF-8');?>
",
        "scroll": ".cm-pagination-container"
    }' />

</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/product_filters/components/product_filter_slider.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/product_filters/components/product_filter_slider.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php $_smarty_tpl->tpl_vars['placeholder'] = new Smarty_variable("nnn-nnn", null, 0);?>
<?php $_smarty_tpl->tpl_vars['min'] = new Smarty_variable($_smarty_tpl->tpl_vars['filter']->value['range_values']['min'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['max'] = new Smarty_variable($_smarty_tpl->tpl_vars['filter']->value['range_values']['max'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['left'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['filter']->value['range_values']['left'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['min']->value : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['right'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['filter']->value['range_values']['right'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['max']->value : $tmp), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['max']->value-$_smarty_tpl->tpl_vars['min']->value<=$_smarty_tpl->tpl_vars['filter']->value['round_to']) {?>
    <?php $_smarty_tpl->tpl_vars['disable_slider'] = new Smarty_variable(true, null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['max']->value-$_smarty_tpl->tpl_vars['min']->value>=(4*$_smarty_tpl->tpl_vars['filter']->value['round_to'])) {?>
    <?php echo smarty_function_math(array('equation'=>"min + round((max - min) * 0.25 / rto) * rto",'max'=>$_smarty_tpl->tpl_vars['max']->value,'min'=>$_smarty_tpl->tpl_vars['min']->value,'rto'=>$_smarty_tpl->tpl_vars['filter']->value['round_to'],'assign'=>"num_25"),$_smarty_tpl);?>

    <?php echo smarty_function_math(array('equation'=>"min + round((max - min) * 0.50 / rto) * rto",'max'=>$_smarty_tpl->tpl_vars['max']->value,'min'=>$_smarty_tpl->tpl_vars['min']->value,'rto'=>$_smarty_tpl->tpl_vars['filter']->value['round_to'],'assign'=>"num_50"),$_smarty_tpl);?>

    <?php echo smarty_function_math(array('equation'=>"min + round((max - min) * 0.75 / rto) * rto",'max'=>$_smarty_tpl->tpl_vars['max']->value,'min'=>$_smarty_tpl->tpl_vars['min']->value,'rto'=>$_smarty_tpl->tpl_vars['filter']->value['round_to'],'assign'=>"num_75"),$_smarty_tpl);?>

<?php }?>

<?php if (fn_string_not_empty($_smarty_tpl->tpl_vars['filter']->value['range_values']['left'])||fn_string_not_empty($_smarty_tpl->tpl_vars['filter']->value['range_values']['right'])) {?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("has_selected", null, null); ob_start(); ?>Y<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['dynamic']->value) {?>
    <?php $_smarty_tpl->tpl_vars["filter_slider_hash"] = new Smarty_variable(fn_add_range_to_url_hash($_REQUEST['features_hash'],$_smarty_tpl->tpl_vars['placeholder']->value,$_smarty_tpl->tpl_vars['filter']->value['field_type']), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["filter_slider_url"] = new Smarty_variable(fn_url(fn_link_attach($_smarty_tpl->tpl_vars['filter_qstring']->value,"features_hash=".((string)$_smarty_tpl->tpl_vars['filter_slider_hash']->value))), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["use_ajax"] = new Smarty_variable(fn_compare_dispatch($_smarty_tpl->tpl_vars['filter_slider_url']->value,$_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["filter_slider_hash"] = new Smarty_variable(fn_add_range_to_url_hash('',$_smarty_tpl->tpl_vars['placeholder']->value,$_smarty_tpl->tpl_vars['filter']->value['field_type']), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["filter_slider_url"] = new Smarty_variable(fn_url("products.search?features_hash=".((string)$_smarty_tpl->tpl_vars['filter_slider_hash']->value)), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["use_ajax"] = new Smarty_variable(false, null, 0);?>
<?php }?>

<div id="content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-price-slider <?php if ($_smarty_tpl->tpl_vars['collapse']->value) {?>hidden<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra_class']->value, ENT_QUOTES, 'UTF-8');?>
">
    <input type="text" class="ty-price-slider__input-text" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_left" name="left_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['left']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['disable_slider']->value) {?> disabled="disabled"<?php }?> />
    &nbsp;–&nbsp;
    <input type="text" class="ty-price-slider__input-text" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_right" name="right_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['right']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['disable_slider']->value) {?> disabled="disabled"<?php }?> />
    <?php if ($_smarty_tpl->tpl_vars['filter']->value['field_type']=='P') {?>
        &nbsp;<?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]['symbol'];?>

    <?php }?>

    <div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-range-slider cm-range-slider">
        <ul class="ty-range-slider__wrapper">
            <li class="ty-range-slider__item" style="left: 0%;"><span class="ty-range-slider__num"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['min']->value, ENT_QUOTES, 'UTF-8');?>
</span></li>
            <?php if ($_smarty_tpl->tpl_vars['num_25']->value) {?>
                <li class="ty-range-slider__item" style="left: 25%;"><span class="ty-range-slider__num"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num_25']->value, ENT_QUOTES, 'UTF-8');?>
</span></li>
                <li class="ty-range-slider__item" style="left: 50%;"><span class="ty-range-slider__num"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num_50']->value, ENT_QUOTES, 'UTF-8');?>
</span></li>
                <li class="ty-range-slider__item" style="left: 75%;"><span class="ty-range-slider__num"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num_75']->value, ENT_QUOTES, 'UTF-8');?>
</span></li>
            <?php }?>
            <li class="ty-range-slider__item" style="left: 100%;"><span class="ty-range-slider__num"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['max']->value, ENT_QUOTES, 'UTF-8');?>
</span></li>
        </ul>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['right']->value==$_smarty_tpl->tpl_vars['left']->value) {?>
        <?php echo smarty_function_math(array('equation'=>"left + rto",'left'=>$_smarty_tpl->tpl_vars['left']->value,'rto'=>$_smarty_tpl->tpl_vars['filter']->value['round_to'],'assign'=>"_right"),$_smarty_tpl);?>

    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars["_right"] = new Smarty_variable($_smarty_tpl->tpl_vars['right']->value, null, 0);?>
    <?php }?>

    <input type="hidden" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_json" value='{
        "disabled": <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['disable_slider']->value)===null||$tmp==='' ? "false" : $tmp), ENT_QUOTES, 'UTF-8');?>
,
        "min": <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['min']->value, ENT_QUOTES, 'UTF-8');?>
,
        "max": <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['max']->value, ENT_QUOTES, 'UTF-8');?>
,
        "left": <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['left']->value, ENT_QUOTES, 'UTF-8');?>
,
        "right": <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_right']->value, ENT_QUOTES, 'UTF-8');?>
,
        "step": <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['round_to'], ENT_QUOTES, 'UTF-8');?>
,
        "url": "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_slider_url']->value, ENT_QUOTES, 'UTF-8');?>
",
        "type": "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['field_type'], ENT_QUOTES, 'UTF-8');?>
",
        "currency": "<?php echo htmlspecialchars(@constant('CART_SECONDARY_CURRENCY'), ENT_QUOTES, 'UTF-8');?>
",
        "ajax": <?php if ($_smarty_tpl->tpl_vars['allow_ajax']->value&&$_smarty_tpl->tpl_vars['use_ajax']->value) {?>true<?php } else { ?>false<?php }?>,
        "result_ids": "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_div_ids']->value, ENT_QUOTES, 'UTF-8');?>
",
        "scroll": ".cm-pagination-container"
    }' />

</div>
<?php }?><?php }} ?>
