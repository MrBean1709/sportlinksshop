<?php /* Smarty version Smarty-3.1.18, created on 2015-09-17 16:01:24
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/addons/tags/hooks/profiles/search_form.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:140903187855fa735472c274-72073517%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'f5946c3f0a662f42f13f63ca19051fcff53e4e5f' =>
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/addons/tags/hooks/profiles/search_form.post.tpl',
      1 => 1441256910,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '140903187855fa735472c274-72073517',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa7354737ea1_54200345',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa7354737ea1_54200345')) {function content_55fa7354737ea1_54200345($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('tag'));
?>
<div class="control-group">
    <label class="control-label" for="elm_tag"><?php echo $_smarty_tpl->__("tag");?>
</label>
    <div class="controls">
    <input id="elm_tag" type="text" name="tag" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['tag'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();"/>
    </div>
</div><?php }} ?>
