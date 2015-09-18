<?php /* Smarty version Smarty-3.1.18, created on 2015-09-17 11:44:20
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/views/order_management/components/status.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11164222555fa3714ade609-71312446%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '5908f1ca20b7cc7bedbdd3dd9c373e0a7f3d0747' =>
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/views/order_management/components/status.tpl',
      1 => 1441256925,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11164222555fa3714ade609-71312446',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'order_statuses' => 0,
    'cart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa3714aeadc3_17229550',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa3714aeadc3_17229550')) {function content_55fa3714aeadc3_17229550($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/opt/lampp/htdocs/sportslinkshop/app/functions/smarty_plugins/block.hook.php';
?><?php
fn_preload_lang_vars(array('status'));
?>
<div class="control-group">
	<div class="control-label"><h4 class="subheader"><?php echo $_smarty_tpl->__("status");?>
</h4></div>
	<div class="controls">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"order_management:order_status")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"order_management:order_status"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		  <?php echo $_smarty_tpl->getSubTemplate ("common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('style'=>"field",'items'=>$_smarty_tpl->tpl_vars['order_statuses']->value,'select_container_name'=>"order_status",'selected_key'=>(($tmp = @$_smarty_tpl->tpl_vars['cart']->value['order_status'])===null||$tmp==='' ? "O" : $tmp)), 0);?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"order_management:order_status"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	</div>
</div><?php }} ?>
