<?php /* Smarty version Smarty-3.1.18, created on 2015-09-17 15:58:18
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/views/order_management/components/shipping_method.tpl" */ ?>
<?php /*%%SmartyHeaderCode:123299697455fa3714c19953-05225240%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '752a0bc79d9714c2c63da0cba19c0db32400904f' =>
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/views/order_management/components/shipping_method.tpl',
      1 => 1442467794,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '123299697455fa3714c19953-05225240',
  'function' =>
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa3714c4a448_73683202',
  'variables' =>
  array (
    'product_groups' => 0,
    'group' => 0,
    'group_key' => 0,
    'shipping' => 0,
    'cart' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa3714c4a448_73683202')) {function content_55fa3714c4a448_73683202($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/opt/lampp/htdocs/sportslinkshop/app/functions/smarty_plugins/block.hook.php';
?><?php
fn_preload_lang_vars(array('shipping_method','none','text_no_shipping_methods','text_no_shipping_methods'));
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"order_management:shipping_method")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"order_management:shipping_method"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="control-group">
    <div class="control-label">
        <h4 class="subheader"><?php echo $_smarty_tpl->__("shipping_method");?>
</h4>
    </div>
</div>

    <?php if ($_smarty_tpl->tpl_vars['product_groups']->value) {?>
        <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_smarty_tpl->tpl_vars['group_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
 $_smarty_tpl->tpl_vars['group_key']->value = $_smarty_tpl->tpl_vars['group']->key;
?>
            <div class="control-group">
            <label class="control-label"> <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['group']->value['name'])===null||$tmp==='' ? $_smarty_tpl->__("none") : $tmp), ENT_QUOTES, 'UTF-8');?>
</label>
            <?php if ($_smarty_tpl->tpl_vars['group']->value['shippings']&&!$_smarty_tpl->tpl_vars['group']->value['shipping_no_required']) {?>
<!--                <?php echo htmlspecialchars(print_r($_smarty_tpl->tpl_vars['group']->value['shippings']), ENT_QUOTES, 'UTF-8');?>
-->
                <div class="controls">
                    <select name="shipping_ids[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
]"  onchange="Tygh.$.selectShippingMethod(Tygh.$(this).val(), '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
')">
                    <?php  $_smarty_tpl->tpl_vars['shipping'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['shipping']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value['shippings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['shipping']->key => $_smarty_tpl->tpl_vars['shipping']->value) {
$_smarty_tpl->tpl_vars['shipping']->_loop = true;
?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['cart']->value['chosen_shipping'][$_smarty_tpl->tpl_vars['group_key']->value]==$_smarty_tpl->tpl_vars['shipping']->value['shipping_id']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'UTF-8');?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['delivery_time'], ENT_QUOTES, 'UTF-8');?>
) - <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['shipping']->value['rate']), 0);?>
</option>
                    <?php } ?>
                    </select>
                </div>
            <?php } else { ?>
                <?php echo $_smarty_tpl->__("text_no_shipping_methods");?>

                <?php $_smarty_tpl->tpl_vars["is_empty_rates"] = new Smarty_variable("Y", null, 0);?>
            <?php }?>
            </div>
        <?php } ?>
    <?php } else { ?>
        <span class="error-text"><?php echo $_smarty_tpl->__("text_no_shipping_methods");?>
</span>
    <?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"order_management:shipping_method"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
