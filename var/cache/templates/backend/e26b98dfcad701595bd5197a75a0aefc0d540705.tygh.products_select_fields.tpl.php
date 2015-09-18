<?php /* Smarty version Smarty-3.1.18, created on 2015-09-17 15:12:10
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/views/products/components/products_select_fields.tpl" */ ?>
<?php /*%%SmartyHeaderCode:71774896055fa67cac80b45-28119365%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'e26b98dfcad701595bd5197a75a0aefc0d540705' =>
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/views/products/components/products_select_fields.tpl',
      1 => 1441256934,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '71774896055fa67cac80b45-28119365',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'selected_fields' => 0,
    'columns' => 0,
    'rows' => 0,
    'splitted_selected_fields' => 0,
    'sfs' => 0,
    'sf' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa67cace4a40_03688749',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa67cace4a40_03688749')) {function content_55fa67cace4a40_03688749($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/opt/lampp/htdocs/sportslinkshop/app/lib/other/smarty/plugins/function.math.php';
if (!is_callable('smarty_modifier_sort_by')) include '/opt/lampp/htdocs/sportslinkshop/app/functions/smarty_plugins/modifier.sort_by.php';
if (!is_callable('smarty_function_split')) include '/opt/lampp/htdocs/sportslinkshop/app/functions/smarty_plugins/function.split.php';
?><input type="hidden" name="selected_fields[object]" value="product" />
<?php echo smarty_function_math(array('equation'=>"ceil(n/c)",'assign'=>"rows",'n'=>count($_smarty_tpl->tpl_vars['selected_fields']->value),'c'=>(($tmp = @$_smarty_tpl->tpl_vars['columns']->value)===null||$tmp==='' ? "5" : $tmp)),$_smarty_tpl);?>


<?php echo smarty_function_split(array('data'=>smarty_modifier_sort_by($_smarty_tpl->tpl_vars['selected_fields']->value,"text"),'size'=>$_smarty_tpl->tpl_vars['rows']->value,'assign'=>"splitted_selected_fields",'vertical_delimition'=>false,'size_is_horizontal'=>true),$_smarty_tpl);?>


<table cellpadding="10" width="100%">
<tr valign="top">
    <?php  $_smarty_tpl->tpl_vars["sfs"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["sfs"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['splitted_selected_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["sfs"]->key => $_smarty_tpl->tpl_vars["sfs"]->value) {
$_smarty_tpl->tpl_vars["sfs"]->_loop = true;
?>
        <td>
        <ul class="unstyled">
            <?php  $_smarty_tpl->tpl_vars["sf"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["sf"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sfs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["sf"]->key => $_smarty_tpl->tpl_vars["sf"]->value) {
$_smarty_tpl->tpl_vars["sf"]->_loop = true;
?>
                <li>
                    <?php if ($_smarty_tpl->tpl_vars['sf']->value) {?>
                        <?php if ($_smarty_tpl->tpl_vars['sf']->value['disabled']=="Y") {?><input type="hidden" value="Y" name="selected_fields<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sf']->value['name'], ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
                        <label class="checkbox" for="elm_<?php echo htmlspecialchars(md5($_smarty_tpl->tpl_vars['sf']->value['name']), ENT_QUOTES, 'UTF-8');?>
"><input type="checkbox" value="Y" name="selected_fields<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sf']->value['name'], ENT_QUOTES, 'UTF-8');?>
" id="elm_<?php echo htmlspecialchars(md5($_smarty_tpl->tpl_vars['sf']->value['name']), ENT_QUOTES, 'UTF-8');?>
" checked="checked" <?php if ($_smarty_tpl->tpl_vars['sf']->value['disabled']=="Y") {?>disabled="disabled"<?php }?> class="cm-item-s" />
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sf']->value['text'], ENT_QUOTES, 'UTF-8');?>
</label>
                    <?php }?>
                </li>
            <?php } ?>
        </ul>
        </td>
    <?php } ?>
</tr></table>
<p>
<?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('check_target'=>"s",'style'=>"links"), 0);?>

</p><?php }} ?>
