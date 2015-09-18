<?php /* Smarty version Smarty-3.1.18, created on 2015-06-13 06:52:23
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/discussion/hooks/companies/tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:614860601557b62a7746db8-60234951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '6394a0f16f502cce22130b7ca038e869fb02fdc9' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/discussion/hooks/companies/tabs_content.post.tpl',
      1 => 1418020410,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '614860601557b62a7746db8-60234951',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'company_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_557b62a7757681_70157935',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557b62a7757681_70157935')) {function content_557b62a7757681_70157935($_smarty_tpl) {?><?php if (!fn_allowed_for("ULTIMATE")) {?>
	<?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_company_id'=>$_smarty_tpl->tpl_vars['company_data']->value['company_id']), 0);?>

<?php }?><?php }} ?>
