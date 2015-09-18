<?php /* Smarty version Smarty-3.1.18, created on 2015-09-17 15:12:13
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/addons/discussion/hooks/products/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:150094663955fa67cd774124-56466217%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '9add3658d0219f4758233e39a9a5b39f6d7b7859' =>
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/addons/discussion/hooks/products/detailed_content.post.tpl',
      1 => 1441256895,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '150094663955fa67cd774124-56466217',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'runtime' => 0,
    'product_data' => 0,
    'no_hide_input' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa67cd78a876_03664292',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa67cd78a876_03664292')) {function content_55fa67cd78a876_03664292($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('comments_and_reviews','discussion_title_product'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("comments_and_reviews"),'target'=>"#discussion_product_setting"), 0);?>

    <div id="discussion_product_setting" class="in collapse">
    	<fieldset>
			<?php $_smarty_tpl->tpl_vars['no_hide_input'] = new Smarty_variable(false, null, 0);?>
			<?php if (fn_allowed_for("ULTIMATE")) {?>
				<?php $_smarty_tpl->tpl_vars['no_hide_input'] = new Smarty_variable(true, null, 0);?>
			<?php }?>

			<?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/allow_discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('prefix'=>"product_data",'object_id'=>$_smarty_tpl->tpl_vars['product_data']->value['product_id'],'object_type'=>"P",'title'=>__("discussion_title_product"),'no_hide_input'=>$_smarty_tpl->tpl_vars['no_hide_input']->value), 0);?>

    	</fieldset>
    </div>
<?php }?><?php }} ?>
