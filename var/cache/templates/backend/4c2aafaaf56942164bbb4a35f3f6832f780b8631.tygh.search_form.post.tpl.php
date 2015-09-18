<?php /* Smarty version Smarty-3.1.18, created on 2015-09-17 17:20:27
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/addons/tags/hooks/pages/search_form.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:134691842555fa85db9b6ac2-27627447%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '4c2aafaaf56942164bbb4a35f3f6832f780b8631' =>
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/addons/tags/hooks/pages/search_form.post.tpl',
      1 => 1441256910,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '134691842555fa85db9b6ac2-27627447',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa85db9c07d5_52573763',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa85db9c07d5_52573763')) {function content_55fa85db9c07d5_52573763($_smarty_tpl) {?><?php
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
