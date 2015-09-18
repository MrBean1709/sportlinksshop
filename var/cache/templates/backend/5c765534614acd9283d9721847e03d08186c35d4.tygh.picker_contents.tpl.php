<?php /* Smarty version Smarty-3.1.18, created on 2015-09-17 16:13:13
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/pickers/orders/picker_contents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:113868310055fa76191f7c09-17725060%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '5c765534614acd9283d9721847e03d08186c35d4' =>
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/pickers/orders/picker_contents.tpl',
      1 => 1441256917,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '113868310055fa76191f7c09-17725060',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'orders' => 0,
    'o' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa76192a9863_29297703',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa76192a9863_29297703')) {function content_55fa76192a9863_29297703($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/opt/lampp/htdocs/sportslinkshop/app/functions/smarty_plugins/modifier.date_format.php';
?><?php
fn_preload_lang_vars(array('text_items_added','id','status','customer','date','total','no_data','add_orders','add_orders_and_close'));
?>
<?php if (!$_REQUEST['extra']) {?>
<script type="text/javascript">
(function(_, $) {
    _.tr('text_items_added', '<?php echo strtr($_smarty_tpl->__("text_items_added"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');

    $.ceEvent('on', 'ce.formpost_add_orders', function(frm, elm) {
        var max_displayed_qty = <?php echo htmlspecialchars((($tmp = @$_REQUEST['max_displayed_qty'])===null||$tmp==='' ? "0" : $tmp), ENT_QUOTES, 'UTF-8');?>
;
        var details_url = '<?php echo htmlspecialchars(fn_url("orders.manage?order_id="), ENT_QUOTES, 'UTF-8');?>
';
        var orders = {};

        if ($('input.cm-item:checked', frm).length > 0) {
            $('input.cm-item:checked', frm).each( function() {
                var id = $(this).val();
                var item = $(this).parent().parent();
                orders[id] = {
                    status: item.find('td.cm-order-status').text(),
                    customer: item.find('td.cm-order-customer').text(),
                    timestamp: item.find('td.cm-order-timestamp').text(),
                    total: item.find('td.cm-order-total').text()
                };
            });


            $.cePicker('add_js_item', frm.data('caResultId'), orders, 'o', {
                '{order_id}': '%id',
                '{status}': '%item.status',
                '{customer}': '%item.customer',
                '{timestamp}': '%item.timestamp',
                '{total}': '%item.total'
            });


            $.cePicker('check_items_qty', frm.data('caResultId'), details_url, max_displayed_qty);

            $.ceNotification('show', {
                type: 'N',
                title: _.tr('notice'),
                message: _.tr('text_items_added'),
                message_state: 'I'
            });
        }

        return false;
    });
}(Tygh, Tygh.$));
</script>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("views/orders/components/orders_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"orders.picker",'extra'=>"<input type=\"hidden\" name=\"result_ids\" value=\"pagination_".((string)$_REQUEST['data_id'])."\"><input type=\"hidden\" name=\"data_id\" value=\"".((string)$_REQUEST['data_id'])."\"><input type=\"hidden\" name=\"extra\" value=\"".((string)$_REQUEST['extra'])."\" />",'form_meta'=>"cm-ajax",'in_popup'=>true), 0);?>


<form action="<?php echo htmlspecialchars(fn_url($_REQUEST['extra']), ENT_QUOTES, 'UTF-8');?>
" data-ca-result-id="<?php echo htmlspecialchars($_REQUEST['data_id'], ENT_QUOTES, 'UTF-8');?>
" method="post" name="add_orders">

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true,'div_id'=>"pagination_".((string)$_REQUEST['data_id'])), 0);?>


<?php if ($_smarty_tpl->tpl_vars['orders']->value) {?>
<table width="100%" class="table">
<tr>
    <th class="center" width="1%">
        <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>"mrg-check"), 0);?>
</th>
    <th width="10%"><?php echo $_smarty_tpl->__("id");?>
</th>
    <th width="15%"><?php echo $_smarty_tpl->__("status");?>
</th>
    <th width="25%"><?php echo $_smarty_tpl->__("customer");?>
</th>
    <th width="25%"><?php echo $_smarty_tpl->__("date");?>
</th>
    <th width="24%" class="right"><?php echo $_smarty_tpl->__("total");?>
</th>
</tr>
<?php  $_smarty_tpl->tpl_vars["o"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["o"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["o"]->key => $_smarty_tpl->tpl_vars["o"]->value) {
$_smarty_tpl->tpl_vars["o"]->_loop = true;
?>
<tr>
    <td class="center" width="1%">
        <input type="checkbox" name="add_parameter[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
" class="checkbox mrg-check cm-item" /></td>
    <td>
        <span>#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
</span></td>
    <td class="cm-order-status"><input type="hidden" name="origin_statuses[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['status'], ENT_QUOTES, 'UTF-8');?>
" /><?php echo $_smarty_tpl->getSubTemplate ("common/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('status'=>$_smarty_tpl->tpl_vars['o']->value['status'],'display'=>"view",'name'=>"order_statuses[".((string)$_smarty_tpl->tpl_vars['o']->value['order_id'])."]"), 0);?>
</td>
    <td class="cm-order-customer"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
</td>
    <td class="cm-order-timestamp">
        <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['o']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</td>
    <td class="right cm-order-total">
        <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['o']->value['total']), 0);?>
</td>
</tr>
<?php } ?>
</table>
<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('div_id'=>"pagination_".((string)$_REQUEST['data_id'])), 0);?>


<div class="buttons-container">
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/add_close.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("add_orders"),'but_close_text'=>__("add_orders_and_close"),'is_js'=>fn_is_empty($_REQUEST['extra'])), 0);?>

</div>

</form>
<?php }} ?>
