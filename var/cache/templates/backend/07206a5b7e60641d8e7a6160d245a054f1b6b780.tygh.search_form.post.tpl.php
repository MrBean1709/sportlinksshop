<?php /* Smarty version Smarty-3.1.18, created on 2015-08-28 10:42:28
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/tags/hooks/products/search_form.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:214291108255dfca94d6d224-88427809%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '07206a5b7e60641d8e7a6160d245a054f1b6b780' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/tags/hooks/products/search_form.post.tpl',
      1 => 1418020413,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '214291108255dfca94d6d224-88427809',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'runtime' => 0,
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55dfca94dea823_00746004',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55dfca94dea823_00746004')) {function content_55dfca94dea823_00746004($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('tag'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")) {?>
<div class="control-group">
    <label class="control-label" for="elm_tag"><?php echo $_smarty_tpl->__("tag");?>
</label>
    <div class="controls">
    <input id="elm_tag" type="text" name="tag" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['tag'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();"/>
    </div>
</div>
<?php }?><?php }} ?>
