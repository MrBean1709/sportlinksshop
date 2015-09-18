<?php /* Smarty version Smarty-3.1.18, created on 2015-07-03 05:55:08
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/1clue_related_products_extended/hooks/products/tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20627947425595b33ca947a5-84068889%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'ae0d866229bac8376e23c4cdd1bb06dd59423899' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/1clue_related_products_extended/hooks/products/tabs_content.post.tpl',
      1 => 1435873755,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20627947425595b33ca947a5-84068889',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'addons' => 0,
    'related' => 0,
    'product_data' => 0,
    'tags' => 0,
    'data_id' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5595b33cb37195_11401257',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5595b33cb37195_11401257')) {function content_5595b33cb37195_11401257($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/lostus/public_html/sportslinkshop/app/functions/smarty_plugins/modifier.truncate.php';
?><div class="hidden" id="content_related_products">

<?php if ($_smarty_tpl->tpl_vars['addons']->value['1clue_related_products_extended']['related_filling']=='manual') {?>
	<?php echo $_smarty_tpl->getSubTemplate ("pickers/products/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('positions'=>'','input_name'=>"related",'data_id'=>"added_products",'item_ids'=>$_smarty_tpl->tpl_vars['related']->value,'type'=>"links"), 0);?>


<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars['tags'] = new Smarty_variable(implode(",",$_smarty_tpl->tpl_vars['product_data']->value['1c_tags']), null, 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__('product_tags')), 0);?>

	<input type="text" name="product_data[1c_tags]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tags']->value, ENT_QUOTES, 'UTF-8');?>
" class="input-text-long" />

	<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__('tag_related')), 0);?>

	<?php if ($_smarty_tpl->tpl_vars['related']->value) {?>
	<table cellpadding="0" cellspacing="0" border="0" width="100%" class="table">
	<tr>
		<th width="70%"><?php echo $_smarty_tpl->__('name');?>
</th>
		<th><?php echo $_smarty_tpl->__('1c_tags');?>
</th>
	</tr>
	<tbody id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
">
	<?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['related']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
	<tr>
		<td><a href="<?php echo htmlspecialchars(fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
" class="strong"><?php echo htmlspecialchars(htmlspecialchars_decode(fn_get_product_name($_smarty_tpl->tpl_vars['product']->value['product_id']), ENT_QUOTES), ENT_QUOTES, 'UTF-8');?>
</td>
		<td><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['tags'],80), ENT_QUOTES, 'UTF-8');?>
</td>
	</tr>
	<?php } ?>
	</tbody>
	</table>
	<?php } else { ?>
	<?php echo $_smarty_tpl->__('no_related_found');?>

	<?php }?>
<?php }?>
</div>
<?php }} ?>
