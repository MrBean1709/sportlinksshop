<?php /* Smarty version Smarty-3.1.18, created on 2015-06-19 18:34:03
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/views/sales_reports/components/sales_reports_search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16117623595583f01be74261-82832788%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'cc6edea616132ebb0b9b8deca86c77fe02b4ed0e' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/views/sales_reports/components/sales_reports_search_form.tpl',
      1 => 1418020420,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16117623595583f01be74261-82832788',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'report' => 0,
    'period' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5583f01bea7621_67971488',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5583f01bea7621_67971488')) {function content_5583f01bea7621_67971488($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('search'));
?>
<div class="sidebar-row">
<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="report_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['report']->value['report_id'], ENT_QUOTES, 'UTF-8');?>
">
<h6><?php echo $_smarty_tpl->__("search");?>
</h6>
    <?php $_smarty_tpl->_capture_stack[0][] = array("simple_search", null, null); ob_start(); ?>
        <input type="hidden" name="report_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['report']->value['report_id'], ENT_QUOTES, 'UTF-8');?>
">
        <input type="hidden" name="selected_section" value="">
        <?php echo $_smarty_tpl->getSubTemplate ("common/period_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('period'=>$_smarty_tpl->tpl_vars['period']->value,'display'=>"form"), 0);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/advanced_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('no_adv_link'=>true,'simple_search'=>Smarty::$_smarty_vars['capture']['simple_search'],'not_saved'=>true,'dispatch'=>"sales_reports.set_report_view"), 0);?>

</form>
</div><?php }} ?>
