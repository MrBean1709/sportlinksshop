<?php /* Smarty version Smarty-3.1.18, created on 2015-09-17 12:04:26
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/mail/templates/common/letter_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:71290308855fa3bcadff440-00754701%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '5914d56d30b2b46631fe1240c1d8eaa7af5eb379' =>
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/mail/templates/common/letter_header.tpl',
      1 => 1441256881,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '71290308855fa3bcadff440-00754701',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'runtime' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa3bcae199c7_99808082',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa3bcae199c7_99808082')) {function content_55fa3bcae199c7_99808082($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/opt/lampp/htdocs/sportslinkshop/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><html>
<head>

<style>

.form-title    {
    background-color: #ffffff;
    color: #141414;
    font-weight: bold;
}

.form-field-caption {
    font-style:italic;
}

.table-row {
    background-color: #f1f3f7;
}

.table-head {
    background-color: #bbbbbb;
}

</style>
</head>
<body><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="common/letter_header.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/letter_header.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><html>
<head>

<style>

.form-title    {
    background-color: #ffffff;
    color: #141414;
    font-weight: bold;
}

.form-field-caption {
    font-style:italic;
}

.table-row {
    background-color: #f1f3f7;
}

.table-head {
    background-color: #bbbbbb;
}

</style>
</head>
<body><?php }?><?php }} ?>
