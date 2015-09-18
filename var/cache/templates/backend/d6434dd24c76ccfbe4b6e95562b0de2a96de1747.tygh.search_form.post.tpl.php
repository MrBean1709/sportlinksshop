<?php /* Smarty version Smarty-3.1.18, created on 2015-09-17 11:52:57
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/addons/tags/hooks/products/search_form.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:50916471155fa39196d63c2-04334246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'd6434dd24c76ccfbe4b6e95562b0de2a96de1747' =>
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/addons/tags/hooks/products/search_form.post.tpl',
      1 => 1441256910,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '50916471155fa39196d63c2-04334246',
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
  'unifunc' => 'content_55fa39196e7071_40606077',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa39196e7071_40606077')) {function content_55fa39196e7071_40606077($_smarty_tpl) {?><?php
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
