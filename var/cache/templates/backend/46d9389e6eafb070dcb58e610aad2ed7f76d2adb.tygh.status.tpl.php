<?php /* Smarty version Smarty-3.1.18, created on 2015-06-13 06:26:22
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/common/status.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2070941166557b5c8e155429-10593320%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '46d9389e6eafb070dcb58e610aad2ed7f76d2adb' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/common/status.tpl',
      1 => 1418020415,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2070941166557b5c8e155429-10593320',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'order_status_descr' => 0,
    'status_type' => 0,
    'display' => 0,
    'status' => 0,
    'name' => 0,
    'select_id' => 0,
    'columns' => 0,
    '_html_checkboxes' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_557b5c8e1ba436_82614257',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557b5c8e1ba436_82614257')) {function content_557b5c8e1ba436_82614257($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/home/lostus/public_html/sportslinkshop/app/lib/other/smarty/plugins/function.html_options.php';
if (!is_callable('smarty_function_html_checkboxes')) include '/home/lostus/public_html/sportslinkshop/app/lib/other/smarty/plugins/function.html_checkboxes.php';
?><?php if (!$_smarty_tpl->tpl_vars['order_status_descr']->value) {?>
    <?php if (!$_smarty_tpl->tpl_vars['status_type']->value) {?><?php $_smarty_tpl->tpl_vars["status_type"] = new Smarty_variable(@constant('STATUSES_ORDER'), null, 0);?><?php }?>
    <?php $_smarty_tpl->tpl_vars["order_status_descr"] = new Smarty_variable(fn_get_simple_statuses($_smarty_tpl->tpl_vars['status_type']->value), null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['display']->value=="view") {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_status_descr']->value[$_smarty_tpl->tpl_vars['status']->value], ENT_QUOTES, 'UTF-8');?>
<?php } elseif ($_smarty_tpl->tpl_vars['display']->value=="select") {?><?php echo smarty_function_html_options(array('name'=>$_smarty_tpl->tpl_vars['name']->value,'options'=>$_smarty_tpl->tpl_vars['order_status_descr']->value,'selected'=>$_smarty_tpl->tpl_vars['status']->value,'id'=>$_smarty_tpl->tpl_vars['select_id']->value),$_smarty_tpl);?>
<?php } elseif ($_smarty_tpl->tpl_vars['display']->value=="checkboxes") {?><?php echo smarty_function_html_checkboxes(array('name'=>$_smarty_tpl->tpl_vars['name']->value,'options'=>$_smarty_tpl->tpl_vars['order_status_descr']->value,'selected'=>$_smarty_tpl->tpl_vars['status']->value,'columns'=>(($tmp = @$_smarty_tpl->tpl_vars['columns']->value)===null||$tmp==='' ? 4 : $tmp),'assign'=>'_html_checkboxes','labels'=>false),$_smarty_tpl);?>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_html_checkboxes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?><label><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</label><?php } ?><?php }?>
<?php }} ?>
