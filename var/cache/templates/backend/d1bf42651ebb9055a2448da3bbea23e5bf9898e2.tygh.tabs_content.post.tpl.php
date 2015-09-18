<?php /* Smarty version Smarty-3.1.18, created on 2015-09-17 15:12:13
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/addons/discussion/hooks/products/tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129000358555fa67cd96e1f1-48845159%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'd1bf42651ebb9055a2448da3bbea23e5bf9898e2' =>
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/addons/discussion/hooks/products/tabs_content.post.tpl',
      1 => 1441256895,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '129000358555fa67cd96e1f1-48845159',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'runtime' => 0,
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa67cd9778e9_54329346',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa67cd9778e9_54329346')) {function content_55fa67cd9778e9_54329346($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")) {?>
<?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_company_id'=>$_smarty_tpl->tpl_vars['product_data']->value['company_id']), 0);?>

<?php }?>
<?php }} ?>
