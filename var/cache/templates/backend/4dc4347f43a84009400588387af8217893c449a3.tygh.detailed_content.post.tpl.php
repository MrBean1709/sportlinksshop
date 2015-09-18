<?php /* Smarty version Smarty-3.1.18, created on 2015-06-13 06:20:29
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/discussion/hooks/pages/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1840922907557b5b2d49eab8-39840518%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '4dc4347f43a84009400588387af8217893c449a3' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/discussion/hooks/pages/detailed_content.post.tpl',
      1 => 1418020410,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1840922907557b5b2d49eab8-39840518',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'runtime' => 0,
    'page_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_557b5b2d4c64b5_65890065',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557b5b2d4c64b5_65890065')) {function content_557b5b2d4c64b5_65890065($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('comments_and_reviews','discussion_title_page'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("comments_and_reviews"),'target'=>"#discussion_page_setting"), 0);?>

   <div id="discussion_page_setting" class="in collapse">
   		<fieldset>
   	    	<?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/allow_discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('prefix'=>"page_data",'object_id'=>$_smarty_tpl->tpl_vars['page_data']->value['page_id'],'object_type'=>"A",'title'=>__("discussion_title_page"),'non_editable'=>true), 0);?>

   		</fieldset>
   </div>
<?php }?><?php }} ?>
