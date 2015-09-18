<?php /* Smarty version Smarty-3.1.18, created on 2015-09-17 15:12:54
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/addons/discussion/hooks/categories/fields_to_edit.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:172410444955fa67f61c1ac9-53602638%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'c79892d2b78387320d3d277a2c0dbfc43c5458a8' =>
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/addons/discussion/hooks/categories/fields_to_edit.post.tpl',
      1 => 1441256894,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '172410444955fa67f61c1ac9-53602638',
  'function' =>
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa67f61c4917_51593215',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa67f61c4917_51593215')) {function content_55fa67f61c4917_51593215($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('discussion_title_category'));
?>
<label for="discussion_type" class="checkbox">
<input type="checkbox" value="discussion_type" id="discussion_type" name="selected_fields[extra][]" checked="checked" class="cm-item-s" />
<?php echo $_smarty_tpl->__("discussion_title_category");?>
</label>
<?php }} ?>
