<?php /* Smarty version Smarty-3.1.18, created on 2015-07-10 14:53:14
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/views/shippings/components/test.tpl" */ ?>
<?php /*%%SmartyHeaderCode:752700555559f6bda62a1f0-25430209%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'b96a12395f38288c039214e0c806512fbd28e8ea' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/views/shippings/components/test.tpl',
      1 => 1432263934,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '752700555559f6bda62a1f0-25430209',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'test_data' => 0,
    'service' => 0,
    'settings' => 0,
    'weight' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_559f6bda762110_05737038',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559f6bda762110_05737038')) {function content_559f6bda762110_05737038($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('origination','destination','address','city','country','state','zip_postal_code','shipping_service','weight','cost','delivery_time','error'));
?>
<div id="elm_shipping_test"><div><?php if ($_smarty_tpl->tpl_vars['test_data']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['test_data']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?> test123456789</div>
<?php if ($_smarty_tpl->tpl_vars['service']->value) {?>
<table width="100%" class="table">
<thead>
<tr>
    <th>&nbsp;</th>
    <th><?php echo $_smarty_tpl->__("origination");?>
 </th>
    <th>&nbsp;&nbsp;&nbsp;</th>
    <th><?php echo $_smarty_tpl->__("destination");?>
 </th>
</tr>
</thead>

<tbody>
<tr class="table-row">
    <td><span><?php echo $_smarty_tpl->__("address");?>
:</span>&nbsp;</td>
    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_address'], ENT_QUOTES, 'UTF-8');?>
 </td>
    <td>&nbsp;&nbsp;&nbsp;</td>
    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['General']['default_address'], ENT_QUOTES, 'UTF-8');?>
 </td>
</tr>
<tr>
    <td><span><?php echo $_smarty_tpl->__("city");?>
:</span>&nbsp;</td>
    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_city'], ENT_QUOTES, 'UTF-8');?>
</td>
    <td>&nbsp;&nbsp;&nbsp;</td>
    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['General']['default_city'], ENT_QUOTES, 'UTF-8');?>
 </td>
</tr>
<tr class="table-row">
    <td><span><?php echo $_smarty_tpl->__("country");?>
:</span>&nbsp;</td>
    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_country'], ENT_QUOTES, 'UTF-8');?>
</td>
    <td>&nbsp;&nbsp;&nbsp;</td>
    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['General']['default_country'], ENT_QUOTES, 'UTF-8');?>
 </td>
</tr>
<tr>
    <td><span><?php echo $_smarty_tpl->__("state");?>
:</span>&nbsp;</td>
    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_state'], ENT_QUOTES, 'UTF-8');?>
</td>
    <td>&nbsp;&nbsp;&nbsp;</td>
    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['General']['default_state'], ENT_QUOTES, 'UTF-8');?>
 </td>
</tr>
<tr class="table-row">
    <td><span><?php echo $_smarty_tpl->__("zip_postal_code");?>
:</span>&nbsp;</td>
    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_zipcode'], ENT_QUOTES, 'UTF-8');?>
</td>
    <td>&nbsp;&nbsp;&nbsp;</td>
    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['General']['default_zipcode'], ENT_QUOTES, 'UTF-8');?>
 </td>
</tr>
</tbody>
</table>

<table width="100%" class="table-middle">
<tbody>
<tr>
    <td width="15%"><strong><?php echo $_smarty_tpl->__("shipping_service");?>
:</strong></td>
    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['service']->value, ENT_QUOTES, 'UTF-8');?>
</td>
</tr>
<tr>
    <td><strong><?php echo $_smarty_tpl->__("weight");?>
:</strong></td>
    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['weight']->value, ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['General']['weight_symbol'], ENT_QUOTES, 'UTF-8');?>
</td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['data']->value['price']) {?>
    <tr>
        <td><strong><?php echo $_smarty_tpl->__("cost");?>
:</strong></td>
        <td><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['data']->value['price']), 0);?>
</td>
    </tr>
    <?php if (trim($_smarty_tpl->tpl_vars['data']->value['delivery_time'])) {?>
        <tr>
            <td><strong><?php echo $_smarty_tpl->__("delivery_time");?>
:</strong></td>
            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['delivery_time'], ENT_QUOTES, 'UTF-8');?>
</td>
        </tr>
    <?php }?>
<?php } else { ?>
    <tr>
        <td width="150px"><strong><?php echo $_smarty_tpl->__("error");?>
:</strong></td>
        <td width="300px"><span><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['data']->value['error'])===null||$tmp==='' ? "n/a" : $tmp), ENT_QUOTES, 'UTF-8');?>
</span></td>
    </tr>
<?php }?>
</tbody>
</table>
<?php }?>
<!--elm_shipping_test--></div>
<?php }} ?>
