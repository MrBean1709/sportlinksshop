<?php /* Smarty version Smarty-3.1.18, created on 2015-06-10 18:31:19
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/bestsellers/hooks/products/search_form.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1181596284557811f76deff8-69035893%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'eaf70c0986080216bef877a96b71af0497496645' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/bestsellers/hooks/products/search_form.post.tpl',
      1 => 1418020409,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1181596284557811f76deff8-69035893',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_557811f7707f29_27715561',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557811f7707f29_27715561')) {function content_557811f7707f29_27715561($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('sales_amount'));
?>
<div class="control-group">
    <label class="control-label" for="sales_amount_from"><?php echo $_smarty_tpl->__("sales_amount");?>
</label>
    <div class="controls">
        <input type="text" name="sales_amount_from" id="sales_amount_from" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['sales_amount_from'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();" class="input-mini" />&nbsp;&ndash;&nbsp;<input type="text" name="sales_amount_to" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['sales_amount_to'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();" class="input-mini" />
    </div>
</div><?php }} ?>
