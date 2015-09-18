<?php /* Smarty version Smarty-3.1.18, created on 2015-09-18 11:53:32
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/views/shippings/configure.tpl" */ ?>
<?php /*%%SmartyHeaderCode:195692605455fa3848535ab8-79627227%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cd8de504da9e9d4a8eb667bfecfc0483c5018a4' => 
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/views/shippings/configure.tpl',
      1 => 1442547653,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '195692605455fa3848535ab8-79627227',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa384855c940_70301392',
  'variables' => 
  array (
    'service_template' => 0,
    'addons_path' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa384855c940_70301392')) {function content_55fa384855c940_70301392($_smarty_tpl) {?><div id="content_configure">
<?php if ($_smarty_tpl->tpl_vars['service_template']->value) {?>
	<?php if ($_smarty_tpl->tpl_vars['addons_path']->value[$_smarty_tpl->tpl_vars['service_template']->value]) {?>
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['addons_path']->value[$_smarty_tpl->tpl_vars['service_template']->value])."/".((string)$_smarty_tpl->tpl_vars['service_template']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php } else { ?>
		<?php echo $_smarty_tpl->getSubTemplate ("views/shippings/components/services/".((string)$_smarty_tpl->tpl_vars['service_template']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php }?>
<?php }?>

<!--content_configure--></div>
<?php }} ?>
