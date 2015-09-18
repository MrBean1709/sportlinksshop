<?php /* Smarty version Smarty-3.1.18, created on 2015-09-17 11:47:08
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/addons/discussion/hooks/companies/tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30236751955fa37bceb6ea4-78552351%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '70ffbb99fed0b01902c74fc975d01cc64311fe9f' =>
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/addons/discussion/hooks/companies/tabs_content.post.tpl',
      1 => 1441256894,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '30236751955fa37bceb6ea4-78552351',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'company_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa37bcebdde8_40883975',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa37bcebdde8_40883975')) {function content_55fa37bcebdde8_40883975($_smarty_tpl) {?><?php if (!fn_allowed_for("ULTIMATE")) {?>
	<?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_company_id'=>$_smarty_tpl->tpl_vars['company_data']->value['company_id']), 0);?>

<?php }?><?php }} ?>
