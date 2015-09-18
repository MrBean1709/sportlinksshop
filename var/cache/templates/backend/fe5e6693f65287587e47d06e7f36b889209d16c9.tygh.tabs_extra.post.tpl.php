<?php /* Smarty version Smarty-3.1.18, created on 2015-06-13 08:04:25
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/discussion/hooks/categories/tabs_extra.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:622467735557b7389efd7c0-83695057%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'fe5e6693f65287587e47d06e7f36b889209d16c9' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/discussion/hooks/categories/tabs_extra.post.tpl',
      1 => 1418020410,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '622467735557b7389efd7c0-83695057',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_557b7389f27a37_78751492',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557b7389f27a37_78751492')) {function content_557b7389f27a37_78751492($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||!fn_allowed_for("ULTIMATE")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/new_discussion_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_company_id'=>0), 0);?>

<?php }?><?php }} ?>
