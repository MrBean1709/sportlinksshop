<?php /* Smarty version Smarty-3.1.18, created on 2015-09-18 11:53:22
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/addons/discussion/hooks/orders/customer_info.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:142723417055fa370b8863a5-45810066%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8283e52540380e548208f6df46e597d7abd84641' => 
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/addons/discussion/hooks/orders/customer_info.post.tpl',
      1 => 1442547361,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '142723417055fa370b8863a5-45810066',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa370b8b63c7_67841680',
  'variables' => 
  array (
    'runtime' => 0,
    'order_info' => 0,
    'discussion' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa370b8b63c7_67841680')) {function content_55fa370b8b63c7_67841680($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('discussion','discussion_title_order','disabled','enabled','enabled','disabled'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")||$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']) {?>

<?php $_smarty_tpl->tpl_vars["discussion"] = new Smarty_variable(fn_get_discussion($_smarty_tpl->tpl_vars['order_info']->value['order_id'],"O"), null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("discussion")), 0);?>


<div class="control-group">
    <label class="control-label"><?php echo $_smarty_tpl->__("discussion_title_order");?>
</label>
    <div class="controls">
        <?php if (fn_check_view_permissions("discussion.add")) {?>
	    <input type="hidden" name="discussion[object_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
" />
	    <input type="hidden" name="discussion[object_type]" value="O" />
	    <select name="discussion[type]">
	        <option <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']=="D") {?>selected="selected"<?php }?> value="D"><?php echo $_smarty_tpl->__("disabled");?>
</option>
	        <option <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']=="C") {?>selected="selected"<?php }?> value="C"><?php echo $_smarty_tpl->__("enabled");?>
</option>
	    </select>
        <?php } else { ?>
            <span class="shift-input"><?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']=="C") {?><?php echo $_smarty_tpl->__("enabled");?>
<?php } else { ?><?php echo $_smarty_tpl->__("disabled");?>
<?php }?></span>
        <?php }?>
    </div>
</div>
<?php }?>
<?php }} ?>
