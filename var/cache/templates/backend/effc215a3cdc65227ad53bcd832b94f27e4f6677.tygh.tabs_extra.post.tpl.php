<?php /* Smarty version Smarty-3.1.18, created on 2015-09-17 11:47:08
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/addons/discussion/hooks/companies/tabs_extra.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:189251810255fa37bcee0652-58450927%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'effc215a3cdc65227ad53bcd832b94f27e4f6677' =>
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/addons/discussion/hooks/companies/tabs_extra.post.tpl',
      1 => 1441256894,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '189251810255fa37bcee0652-58450927',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'company_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa37bcee7e67_00735356',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa37bcee7e67_00735356')) {function content_55fa37bcee7e67_00735356($_smarty_tpl) {?><?php if (!fn_allowed_for("ULTIMATE")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/new_discussion_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_company_id'=>$_smarty_tpl->tpl_vars['company_data']->value['company_id']), 0);?>

<?php }?><?php }} ?>
