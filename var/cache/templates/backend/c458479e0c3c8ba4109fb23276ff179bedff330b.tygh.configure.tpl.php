<?php /* Smarty version Smarty-3.1.18, created on 2015-06-13 06:16:06
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/views/shippings/configure.tpl" */ ?>
<?php /*%%SmartyHeaderCode:197695041557b5a26ad6e15-09643613%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'c458479e0c3c8ba4109fb23276ff179bedff330b' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/views/shippings/configure.tpl',
      1 => 1418020421,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '197695041557b5a26ad6e15-09643613',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'service_template' => 0,
    'addons_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_557b5a26b2f3f8_27416331',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557b5a26b2f3f8_27416331')) {function content_557b5a26b2f3f8_27416331($_smarty_tpl) {?><div id="content_configure">
<?php if ($_smarty_tpl->tpl_vars['service_template']->value) {?>
	<?php if ($_smarty_tpl->tpl_vars['addons_path']->value[$_smarty_tpl->tpl_vars['service_template']->value]) {?>
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['addons_path']->value[$_smarty_tpl->tpl_vars['service_template']->value])."/".((string)$_smarty_tpl->tpl_vars['service_template']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php } else { ?>
		<?php echo $_smarty_tpl->getSubTemplate ("views/shippings/components/services/".((string)$_smarty_tpl->tpl_vars['service_template']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php }?>
<?php }?>

<!--content_configure--></div><?php }} ?>
