<?php /* Smarty version Smarty-3.1.18, created on 2015-06-08 17:08:53
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/views/languages/components/langvars_search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162153556455755ba5161fd1-92354011%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'f3e5db69b71c226f382f520a7354e0b27f39c219' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/views/languages/components/langvars_search_form.tpl',
      1 => 1418020417,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '162153556455755ba5161fd1-92354011',
  'function' =>
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55755ba5189ee0_75429713',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55755ba5189ee0_75429713')) {function content_55755ba5189ee0_75429713($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('search','search_for_pattern'));
?>
<div class="sidebar-row">
<h6><?php echo $_smarty_tpl->__("search");?>
</h6>
<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="langvars_search_form" method="get">

<div class="sidebar-field">
	<label><?php echo $_smarty_tpl->__("search_for_pattern");?>
</label>
	<input type="text" name="q" size="20" value="<?php echo htmlspecialchars($_REQUEST['q'], ENT_QUOTES, 'UTF-8');?>
" class="search-input-text" />
</div>

<?php echo $_smarty_tpl->getSubTemplate ("buttons/search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[languages.translations]"), 0);?>

</form>

</div><?php }} ?>
