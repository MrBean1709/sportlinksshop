<?php /* Smarty version Smarty-3.1.18, created on 2015-06-13 08:04:25
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/discussion/hooks/categories/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1694653817557b7389c7ad42-52078823%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'c2fdc79ef15cdfe08f1968331ebd8b7df1e7bd5f' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/discussion/hooks/categories/detailed_content.post.tpl',
      1 => 1418020410,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1694653817557b7389c7ad42-52078823',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'runtime' => 0,
    'category_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_557b7389cb84c7_99922815',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557b7389cb84c7_99922815')) {function content_557b7389cb84c7_99922815($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('comments_and_reviews','discussion_title_category'));
?>
<?php if (($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE"))||fn_allowed_for("MULTIVENDOR")) {?>
<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("comments_and_reviews"),'target'=>"#discussion_category_setting"), 0);?>

<fieldset>
	<div id="discussion_category_setting" class="in collapse">
		<?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/allow_discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('prefix'=>"category_data",'object_id'=>$_smarty_tpl->tpl_vars['category_data']->value['category_id'],'object_type'=>"C",'title'=>__("discussion_title_category")), 0);?>

	</div>
</fieldset>
<?php }?><?php }} ?>
