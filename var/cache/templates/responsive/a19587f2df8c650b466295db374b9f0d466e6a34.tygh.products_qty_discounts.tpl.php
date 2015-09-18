<?php /* Smarty version Smarty-3.1.18, created on 2015-08-28 14:49:53
         compiled from "/home/lostus/public_html/sportslinkshop/design/themes/responsive/templates/views/products/components/products_qty_discounts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:81290282755e00491d6bab4-99353952%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'a19587f2df8c650b466295db374b9f0d466e6a34' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/themes/responsive/templates/views/products/components/products_qty_discounts.tpl',
      1 => 1418021496,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '81290282755e00491d6bab4-99353952',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'runtime' => 0,
    'product' => 0,
    'price' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55e00491e5c2b6_24302628',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e00491e5c2b6_24302628')) {function content_55e00491e5c2b6_24302628($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/home/lostus/public_html/sportslinkshop/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('text_qty_discounts','quantity','price','text_qty_discounts','quantity','price'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="ty-qty-discount">
    <div class="ty-qty-discount__label"><?php echo $_smarty_tpl->__("text_qty_discounts");?>
:</div>
    <table class="ty-table ty-qty-discount__table">
        <thead>
            <tr>
                <th class="ty-qty-discount__td"><?php echo $_smarty_tpl->__("quantity");?>
</th>
                <?php  $_smarty_tpl->tpl_vars["price"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["price"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['prices']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["price"]->key => $_smarty_tpl->tpl_vars["price"]->value) {
$_smarty_tpl->tpl_vars["price"]->_loop = true;
?>
                    <th class="ty-qty-discount__td ty-center"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['price']->value['lower_limit'], ENT_QUOTES, 'UTF-8');?>
+</th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="ty-qty-discount__td"><?php echo $_smarty_tpl->__("price");?>
</td>
                <?php  $_smarty_tpl->tpl_vars["price"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["price"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['prices']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["price"]->key => $_smarty_tpl->tpl_vars["price"]->value) {
$_smarty_tpl->tpl_vars["price"]->_loop = true;
?>
                    <td class="ty-qty-discount__td ty-center"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['price']->value['price']), 0);?>
</td>
                <?php } ?>
            </tr>
        </tbody>
    </table>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/products/components/products_qty_discounts.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/products/components/products_qty_discounts.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><div class="ty-qty-discount">
    <div class="ty-qty-discount__label"><?php echo $_smarty_tpl->__("text_qty_discounts");?>
:</div>
    <table class="ty-table ty-qty-discount__table">
        <thead>
            <tr>
                <th class="ty-qty-discount__td"><?php echo $_smarty_tpl->__("quantity");?>
</th>
                <?php  $_smarty_tpl->tpl_vars["price"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["price"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['prices']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["price"]->key => $_smarty_tpl->tpl_vars["price"]->value) {
$_smarty_tpl->tpl_vars["price"]->_loop = true;
?>
                    <th class="ty-qty-discount__td ty-center"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['price']->value['lower_limit'], ENT_QUOTES, 'UTF-8');?>
+</th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="ty-qty-discount__td"><?php echo $_smarty_tpl->__("price");?>
</td>
                <?php  $_smarty_tpl->tpl_vars["price"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["price"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['prices']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["price"]->key => $_smarty_tpl->tpl_vars["price"]->value) {
$_smarty_tpl->tpl_vars["price"]->_loop = true;
?>
                    <td class="ty-qty-discount__td ty-center"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['price']->value['price']), 0);?>
</td>
                <?php } ?>
            </tr>
        </tbody>
    </table>
</div><?php }?><?php }} ?>
