<?php /* Smarty version Smarty-3.1.18, created on 2015-06-13 06:53:08
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/discussion/hooks/categories/fields_to_edit.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1801859040557b62d4baf4a1-10524572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'c3fe947655857c194bb18c1b1ca1efe5298661e5' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/discussion/hooks/categories/fields_to_edit.post.tpl',
      1 => 1418020410,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1801859040557b62d4baf4a1-10524572',
  'function' =>
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_557b62d4bb5df0_25057583',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557b62d4bb5df0_25057583')) {function content_557b62d4bb5df0_25057583($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('discussion_title_category'));
?>
<label for="discussion_type" class="checkbox">
<input type="checkbox" value="discussion_type" id="discussion_type" name="selected_fields[extra][]" checked="checked" class="cm-item-s" />
<?php echo $_smarty_tpl->__("discussion_title_category");?>
</label>
<?php }} ?>
