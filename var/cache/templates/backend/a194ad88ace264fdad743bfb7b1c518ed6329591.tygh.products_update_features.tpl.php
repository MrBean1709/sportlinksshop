<?php /* Smarty version Smarty-3.1.18, created on 2015-09-17 15:12:13
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/views/products/components/products_update_features.tpl" */ ?>
<?php /*%%SmartyHeaderCode:39282011355fa67cd657546-07229642%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'a194ad88ace264fdad743bfb7b1c518ed6329591' =>
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/views/products/components/products_update_features.tpl',
      1 => 1441256934,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '39282011355fa67cd657546-07229642',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa67cd660ad3_07985501',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa67cd660ad3_07985501')) {function content_55fa67cd660ad3_07985501($_smarty_tpl) {?><?php
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
