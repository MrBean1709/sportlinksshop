<?php /* Smarty version Smarty-3.1.18, created on 2015-09-17 15:12:13
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/addons/bestsellers/hooks/products/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:128475825655fa67cd759f53-35613042%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '7a881149520980ebbf9375c284641aebb3699216' =>
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/addons/bestsellers/hooks/products/detailed_content.post.tpl',
      1 => 1441256892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '128475825655fa67cd759f53-35613042',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa67cd76ab56_62872934',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa67cd76ab56_62872934')) {function content_55fa67cd76ab56_62872934($_smarty_tpl) {?><?php
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
