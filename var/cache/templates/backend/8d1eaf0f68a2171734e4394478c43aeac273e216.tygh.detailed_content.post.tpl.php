<?php /* Smarty version Smarty-3.1.18, created on 2015-06-10 18:34:28
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/bestsellers/hooks/products/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:216407875557812b48db602-86017165%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '8d1eaf0f68a2171734e4394478c43aeac273e216' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/bestsellers/hooks/products/detailed_content.post.tpl',
      1 => 1418020409,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '216407875557812b48db602-86017165',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_557812b4927c98_74129329',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557812b4927c98_74129329')) {function content_557812b4927c98_74129329($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('bestselling','sales_amount'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("bestselling"),'target'=>"#acc_bestsellers"), 0);?>

<div id="acc_bestsellers" class="collapse in">
    <div class="control-group">
        <label class="control-label" for="sales_amount"><?php echo $_smarty_tpl->__("sales_amount");?>
</label>
        <div class="controls">
        <input type="text" id="sales_amount" name="product_data[sales_amount]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['product_data']->value['sales_amount'])===null||$tmp==='' ? "0" : $tmp), ENT_QUOTES, 'UTF-8');?>
" class="input-large" size="10" />
        </div>
    </div>
</div><?php }} ?>
