<?php /* Smarty version Smarty-3.1.18, created on 2015-07-17 02:32:18
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/views/sales_reports/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12173942055a7f8b29cccd5-95875064%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'da69090298c802dfa210a2ee84ad5e99fa52eeba' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/views/sales_reports/manage.tpl',
      1 => 1418020420,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12173942055a7f8b29cccd5-95875064',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'reports' => 0,
    'section' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55a7f8b2ab5708_81801273',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a7f8b2ab5708_81801273')) {function content_55a7f8b2ab5708_81801273($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('no_data','add_report','reports'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="reports_list">
<div class="cm-sortable" data-ca-sortable-table="sales_reports" data-ca-sortable-id-name="report_id" id="manage_reports_list">
    <?php if ($_smarty_tpl->tpl_vars['reports']->value) {?>
    <table class="table table-middle table-objects">
    <?php  $_smarty_tpl->tpl_vars['section'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['section']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reports']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['section']->key => $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->_loop = true;
?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/object_group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['section']->value['report_id'],'text'=>$_smarty_tpl->tpl_vars['section']->value['description'],'href'=>"sales_reports.update?report_id=".((string)$_smarty_tpl->tpl_vars['section']->value['report_id']),'href_delete'=>"sales_reports.delete?report_id=".((string)$_smarty_tpl->tpl_vars['section']->value['report_id']),'table'=>"sales_reports",'object_id_name'=>"report_id",'delete_target_id'=>"manage_reports_list",'status'=>$_smarty_tpl->tpl_vars['section']->value['status'],'additional_class'=>"cm-sortable-row cm-sortable-id-".((string)$_smarty_tpl->tpl_vars['section']->value['report_id']),'no_table'=>true,'no_popup'=>true,'is_view_link'=>false,'draggable'=>true), 0);?>

    <?php } ?>
    </table>
    <?php } else { ?>
        <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
    <?php }?>
<!--manage_reports_list--></div>
</form>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tool_href'=>"sales_reports.add",'prefix'=>"top",'title'=>__("add_report"),'hide_tools'=>true), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("reports"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons']), 0);?>
<?php }} ?>
