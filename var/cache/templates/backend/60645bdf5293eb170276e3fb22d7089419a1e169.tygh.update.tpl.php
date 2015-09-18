<?php /* Smarty version Smarty-3.1.18, created on 2015-07-17 02:34:59
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/views/sales_reports/update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:128060065255a7f953ec3f94-49038980%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '60645bdf5293eb170276e3fb22d7089419a1e169' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/views/sales_reports/update.tpl',
      1 => 1418020420,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '128060065255a7f953ec3f94-49038980',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'report' => 0,
    'report_id' => 0,
    'table' => 0,
    'report_elements' => 0,
    'element' => 0,
    'element_name' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55a7f95417d4b5_43756003',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a7f95417d4b5_43756003')) {function content_55a7f95417d4b5_43756003($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/home/lostus/public_html/sportslinkshop/app/functions/smarty_plugins/block.hook.php';
?><?php
fn_preload_lang_vars(array('name','position_short','name','type','value_to_display','table','graphic','bar','graphic','pie_3d','edit','no_data','add_chart','editing_report','new_report'));
?>
<?php if ($_smarty_tpl->tpl_vars['report']->value) {?>
    <?php $_smarty_tpl->tpl_vars["report_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['report']->value['report_id'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["report_id"] = new Smarty_variable(0, null, 0);?>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>
<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="statistics_form" class=" form-horizontal">
<input type="hidden" name="report_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['report_id']->value, ENT_QUOTES, 'UTF-8');?>
">
<input type="hidden" name="selected_section" value="<?php echo htmlspecialchars((($tmp = @$_REQUEST['selected_section'])===null||$tmp==='' ? "general" : $tmp), ENT_QUOTES, 'UTF-8');?>
">

<div id="content_general">

    <div class="control-group">
        <label for="description" class="cm-required control-label"><?php echo $_smarty_tpl->__("name");?>
:</label>
        <div class="controls">
            <input type="text" name="report_data[description]" id="description" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['report']->value['description'], ENT_QUOTES, 'UTF-8');?>
" size="70">
        </div>
    </div>

    <?php echo $_smarty_tpl->getSubTemplate ("common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"report_data[status]",'id'=>"report",'obj'=>$_smarty_tpl->tpl_vars['report']->value), 0);?>

</div>

<?php if ($_smarty_tpl->tpl_vars['report']->value) {?>
<div id="content_tables">
    <?php if ($_smarty_tpl->tpl_vars['report']->value['tables']) {?>
    <table class="table table-middle">
    <thead>
        <tr>
            <th class="center" width="1%"><?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</th>
            <th width="4%"><?php echo $_smarty_tpl->__("position_short");?>
</th>
            <th width="55%"><?php echo $_smarty_tpl->__("name");?>
</th>
            <th width="10%"><?php echo $_smarty_tpl->__("type");?>
</th>
            <th width="20%"><?php echo $_smarty_tpl->__("value_to_display");?>
</th>
            <th width="10%">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
    <?php  $_smarty_tpl->tpl_vars['table'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['table']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['report']->value['tables']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['table']->key => $_smarty_tpl->tpl_vars['table']->value) {
$_smarty_tpl->tpl_vars['table']->_loop = true;
?>
    <tr>
        <td class="center">
            <input type="hidden" name="report_data[tables][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table']->value['table_id'], ENT_QUOTES, 'UTF-8');?>
][table_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table']->value['table_id'], ENT_QUOTES, 'UTF-8');?>
">
            <input type="checkbox" name="del[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table']->value['table_id'], ENT_QUOTES, 'UTF-8');?>
]" id="delete_checkbox" value="Y" class="cm-item">
        </td>
        <td><input type="text" name="report_data[tables][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table']->value['table_id'], ENT_QUOTES, 'UTF-8');?>
][position]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table']->value['position'], ENT_QUOTES, 'UTF-8');?>
" size="3" class="input-micro input-hidden"></td>
        <td><a href="<?php echo htmlspecialchars(fn_url("sales_reports.update_table?report_id=".((string)$_smarty_tpl->tpl_vars['report_id']->value)."&table_id=".((string)$_smarty_tpl->tpl_vars['table']->value['table_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table']->value['description'], ENT_QUOTES, 'UTF-8');?>
</a></td>
        <td>
            <select name="report_data[tables][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table']->value['table_id'], ENT_QUOTES, 'UTF-8');?>
][type]">
                <option value="T"><?php echo $_smarty_tpl->__("table");?>
</option>
                <option value="B" <?php if ($_smarty_tpl->tpl_vars['table']->value['type']=="B") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("graphic");?>
 [<?php echo $_smarty_tpl->__("bar");?>
] </option>
                <option value="P" <?php if ($_smarty_tpl->tpl_vars['table']->value['type']=="P") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("graphic");?>
 [<?php echo $_smarty_tpl->__("pie_3d");?>
] </option>
            </select>
        </td>
        <td>
        <select name="report_data[tables][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table']->value['table_id'], ENT_QUOTES, 'UTF-8');?>
][display]">
            <?php  $_smarty_tpl->tpl_vars['element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['element']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['report_elements']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['element']->key => $_smarty_tpl->tpl_vars['element']->value) {
$_smarty_tpl->tpl_vars['element']->_loop = true;
?>
            <?php $_smarty_tpl->tpl_vars["element_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['element']->value['element_id'], null, 0);?>
            <?php $_smarty_tpl->tpl_vars["element_name"] = new Smarty_variable("reports_parameter_".((string)$_smarty_tpl->tpl_vars['element_id']->value), null, 0);?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['code'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['table']->value['display']==$_smarty_tpl->tpl_vars['element']->value['code']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['element_name']->value);?>
</option>
            <?php } ?>
        </select></td>
        <td class="nowrap right">
            <div class="hidden-tools">
                <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"sales_reports:update_tools_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"sales_reports:update_tools_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("edit"),'href'=>"sales_reports.update_table?report_id=".((string)$_smarty_tpl->tpl_vars['report_id']->value)."&table_id=".((string)$_smarty_tpl->tpl_vars['table']->value['table_id'])));?>
</li>
                        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete",'href'=>"sales_reports.delete_table?table_id=".((string)$_smarty_tpl->tpl_vars['table']->value['table_id'])."&report_id=".((string)$_smarty_tpl->tpl_vars['report']->value['report_id'])));?>
</li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"sales_reports:update_tools_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

            </div>
        </td>
    </tr>
    <?php } ?>
    </tbody>
    </table>
    <?php } else { ?>
        <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
    <?php }?>
</div>
<?php }?>
</form>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox'],'active_tab'=>$_REQUEST['selected_section'],'track'=>true), 0);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['report_id']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tool_href'=>"sales_reports.update_table?report_id=".((string)$_smarty_tpl->tpl_vars['report_id']->value),'prefix'=>"bottom",'hide_tools'=>true,'title'=>__("add_chart")), 0);?>

    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <?php if ($_smarty_tpl->tpl_vars['report']->value['tables']) {?>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[sales_reports.m_delete_tables]",'form'=>"statistics_form"));?>
</li>
        <?php }?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list'],'class'=>"cm-tab-tools",'id'=>"tools_tables"));?>

    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[sales_reports.update]",'but_role'=>"submit-link",'but_target_form'=>"statistics_form",'save'=>$_smarty_tpl->tpl_vars['report_id']->value), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['report_id']->value) {?>
    <?php ob_start();?><?php echo $_smarty_tpl->__("editing_report");?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["title"] = new Smarty_variable($_tmp1.": ".((string)$_smarty_tpl->tpl_vars['report']->value['description']), null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["title"] = new Smarty_variable($_smarty_tpl->__("new_report"), null, 0);?>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['title']->value,'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons']), 0);?>

<?php }} ?>
