<?php /* Smarty version Smarty-3.1.18, created on 2015-09-17 12:16:28
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/mail/templates/orders/print_invoice.tpl" */ ?>
<?php /*%%SmartyHeaderCode:175137501755fa3e9d00f816-06811959%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '84ce7ffba2382efd8a8233f317351687b0f5fe9c' =>
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/mail/templates/orders/print_invoice.tpl',
      1 => 1441256882,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '175137501755fa3e9d00f816-06811959',
  'function' =>
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa3e9d03c3b0_77018813',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa3e9d03c3b0_77018813')) {function content_55fa3e9d03c3b0_77018813($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<style type="text/css" media="print">
.main-table {
    background-color: #ffffff !important;
}
</style>
<style type="text/css" media="screen,print">
body,p,div,td {
    color: #000000;
    font: 12px Arial;
}
body {
    padding: 0;
    margin: 0;
}
a, a:link, a:visited, a:hover, a:active {
    color: #000000;
    text-decoration: underline;
}
a:hover {
    text-decoration: none;
}
</style>

</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate ("common/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("orders/invoice.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</body>
</html><?php }} ?>
