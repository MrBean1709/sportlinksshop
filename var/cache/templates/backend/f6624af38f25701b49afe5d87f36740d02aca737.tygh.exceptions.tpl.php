<?php /* Smarty version Smarty-3.1.18, created on 2015-06-13 07:50:07
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/views/product_options/exceptions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:442933863557b702fa9af71-01625723%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'f6624af38f25701b49afe5d87f36740d02aca737' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/views/product_options/exceptions.tpl',
      1 => 1418020419,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '442933863557b702fa9af71-01625723',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'product_id' => 0,
    'exceptions' => 0,
    'i' => 0,
    'k' => 0,
    'product_options' => 0,
    'c' => 0,
    'option' => 0,
    'variant' => 0,
    'product_data' => 0,
    'except_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_557b702fcb0989_57338819',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557b702fcb0989_57338819')) {function content_557b702fcb0989_57338819($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('combination','exception_disabled','exception_disregard','yes','no','exception_disabled','exception_disregard','delete','no_data','combination','no','yes','exception_disregard','exception_disabled','exception_disregard','exception_disabled','forbidden_combinations','allowed_combinations','new_combination','add_combination'));
?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="exceptions_form">
<input type="hidden" name="product_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
" />

<?php if ($_smarty_tpl->tpl_vars['exceptions']->value) {?>
<table class="table table-middle" width="100%">
<thead>
<tr>
    <th class="center" width="1%">
        <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</th>
    <th><?php echo $_smarty_tpl->__("combination");?>
</th>
    <th>&nbsp;</th>
</tr>
</thead>
<?php  $_smarty_tpl->tpl_vars["i"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["i"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['exceptions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["i"]->key => $_smarty_tpl->tpl_vars["i"]->value) {
$_smarty_tpl->tpl_vars["i"]->_loop = true;
?>
<tr>
    <td class="center"><input type="checkbox" name="exception_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['exception_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item" /></td>
    <td width="95%">
        <table>
        <?php  $_smarty_tpl->tpl_vars["c"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["c"]->_loop = false;
 $_smarty_tpl->tpl_vars["k"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['i']->value['combination']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["c"]->key => $_smarty_tpl->tpl_vars["c"]->value) {
$_smarty_tpl->tpl_vars["c"]->_loop = true;
 $_smarty_tpl->tpl_vars["k"]->value = $_smarty_tpl->tpl_vars["c"]->key;
?>
        <?php if (($_smarty_tpl->tpl_vars['product_options']->value[$_smarty_tpl->tpl_vars['k']->value]['option_type']=="S")||($_smarty_tpl->tpl_vars['product_options']->value[$_smarty_tpl->tpl_vars['k']->value]['option_type']=="R")||($_smarty_tpl->tpl_vars['product_options']->value[$_smarty_tpl->tpl_vars['k']->value]['option_type']=="C")) {?>
        <tr class="no-border">
            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_options']->value[$_smarty_tpl->tpl_vars['k']->value]['option_name'], ENT_QUOTES, 'UTF-8');?>
:</td>
            <td><span>
                <?php if ($_smarty_tpl->tpl_vars['product_options']->value[$_smarty_tpl->tpl_vars['k']->value]['option_type']=="C") {?>
                    <?php if (($_smarty_tpl->tpl_vars['c']->value=="-2")) {?>- <?php echo $_smarty_tpl->__("exception_disabled");?>
 -
                    <?php } elseif (($_smarty_tpl->tpl_vars['c']->value=="-1")) {?>- <?php echo $_smarty_tpl->__("exception_disregard");?>
 -
                    <?php } else { ?>[<?php if ($_smarty_tpl->tpl_vars['product_options']->value[$_smarty_tpl->tpl_vars['k']->value]['variants'][$_smarty_tpl->tpl_vars['c']->value]['position']=="1") {?><?php echo $_smarty_tpl->__("yes");?>
<?php } else { ?><?php echo $_smarty_tpl->__("no");?>
<?php }?>]<?php }?>
                <?php } else { ?>
                    <?php if (($_smarty_tpl->tpl_vars['c']->value=="-2")) {?>- <?php echo $_smarty_tpl->__("exception_disabled");?>
 -
                    <?php } elseif (($_smarty_tpl->tpl_vars['c']->value=="-1")) {?>- <?php echo $_smarty_tpl->__("exception_disregard");?>
 -
                    <?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_options']->value[$_smarty_tpl->tpl_vars['k']->value]['variants'][$_smarty_tpl->tpl_vars['c']->value]['variant_name'], ENT_QUOTES, 'UTF-8');?>
<?php }?>
                <?php }?>
                </span>
            </td>
        </tr>
        <?php }?>
        <?php } ?>
        </table>
    </td>
    <td class="nowrap">
        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"cm-confirm",'text'=>__("delete"),'href'=>"product_options.delete_exception?exception_id=".((string)$_smarty_tpl->tpl_vars['i']->value['exception_id'])."&product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value)));?>
</li>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <div class="hidden-tools">
            <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

        </div>
    </td>
</tr>
<?php } ?>
</table>
<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>
</form>

<?php $_smarty_tpl->_capture_stack[0][] = array("tools", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("add_new_picker", null, null); ob_start(); ?>
        <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="new_exception_form">
        <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
" />

        <table class="table table-middle">
        <thead>
        <tr class="cm-first-sibling">
            <th><?php echo $_smarty_tpl->__("combination");?>
</th>
            <th>&nbsp;</th>
        </tr>
        </thead>
        <tr id="box_new_item">
            <td>
                <table>
                <?php  $_smarty_tpl->tpl_vars["option"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["option"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["option"]->key => $_smarty_tpl->tpl_vars["option"]->value) {
$_smarty_tpl->tpl_vars["option"]->_loop = true;
?>
                <tr class="no-border">
                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['option_name'], ENT_QUOTES, 'UTF-8');?>
</td>
                    <td><?php if ($_smarty_tpl->tpl_vars['option']->value['option_type']=="C") {?>
                            <select name="add_options_combination[0][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
]">
                                <?php  $_smarty_tpl->tpl_vars["variant"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["variant"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['option']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["variant"]->key => $_smarty_tpl->tpl_vars["variant"]->value) {
$_smarty_tpl->tpl_vars["variant"]->_loop = true;
?>
                                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['variant']->value['position']==0) {?><?php echo $_smarty_tpl->__("no");?>
<?php } else { ?><?php echo $_smarty_tpl->__("yes");?>
<?php }?></option>
                                <?php } ?>
                                <option value="-1">- <?php echo $_smarty_tpl->__("exception_disregard");?>
 -</option>
                                <option value="-2">- <?php echo $_smarty_tpl->__("exception_disabled");?>
 -</option>
                            </select>
                        <?php } else { ?>
                            <select name="add_options_combination[0][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
]">
                                <?php  $_smarty_tpl->tpl_vars["variant"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["variant"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['option']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["variant"]->key => $_smarty_tpl->tpl_vars["variant"]->value) {
$_smarty_tpl->tpl_vars["variant"]->_loop = true;
?>
                                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant_name'], ENT_QUOTES, 'UTF-8');?>
</option>
                                    <?php } ?>
                                <option value="-1">- <?php echo $_smarty_tpl->__("exception_disregard");?>
 -</option>
                                <option value="-2">- <?php echo $_smarty_tpl->__("exception_disabled");?>
 -</option>
                            </select>
                        <?php }?>
                    </td>
                </tr>
                <?php } ?>
                </table>
            </td>
            <td valign="top"><p><?php echo $_smarty_tpl->getSubTemplate ("buttons/multiple_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item_id'=>"new_item"), 0);?>
</p></td>
        </tr>
        </table>

        <div class="buttons-container">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/create.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[product_options.add_exceptions]",'but_role'=>"button_main"), 0);?>

        </div>

        </form>
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

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['product_data']->value['exceptions_type']=="F") {?>
    <?php $_smarty_tpl->tpl_vars["except_title"] = new Smarty_variable($_smarty_tpl->__("forbidden_combinations"), null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["except_title"] = new Smarty_variable($_smarty_tpl->__("allowed_combinations"), null, 0);?>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <?php if ($_smarty_tpl->tpl_vars['exceptions']->value) {?>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[product_options.m_delete_exceptions]",'form'=>"exceptions_form"));?>
</li>
        <?php }?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"add_new_combination",'text'=>__("new_combination"),'content'=>Smarty::$_smarty_vars['capture']['add_new_picker'],'title'=>__("add_combination"),'act'=>"general",'icon'=>"icon-plus"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['except_title']->value,'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'tools'=>Smarty::$_smarty_vars['capture']['tools'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons']), 0);?>


<?php }} ?>
