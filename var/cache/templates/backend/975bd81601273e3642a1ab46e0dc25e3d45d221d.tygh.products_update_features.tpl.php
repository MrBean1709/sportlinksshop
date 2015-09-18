<?php /* Smarty version Smarty-3.1.18, created on 2015-06-10 18:34:28
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/views/products/components/products_update_features.tpl" */ ?>
<?php /*%%SmartyHeaderCode:895792880557812b462e456-34315031%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '975bd81601273e3642a1ab46e0dc25e3d45d221d' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/views/products/components/products_update_features.tpl',
      1 => 1418020419,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '895792880557812b462e456-34315031',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_557812b4646820_32826470',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557812b4646820_32826470')) {function content_557812b4646820_32826470($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('no_items'));
?>
<div id="content_features" class="hidden">

<?php if ($_smarty_tpl->tpl_vars['product_data']->value['product_features']) {?>
<fieldset>
    <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_assign_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_features'=>$_smarty_tpl->tpl_vars['product_data']->value['product_features']), 0);?>

</fieldset>
<?php } else { ?>
<p class="no-items"><?php echo $_smarty_tpl->__("no_items");?>
</p>
<?php }?>
</div><?php }} ?>
