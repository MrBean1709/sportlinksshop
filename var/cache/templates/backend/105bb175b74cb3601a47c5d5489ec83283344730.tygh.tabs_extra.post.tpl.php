<?php /* Smarty version Smarty-3.1.18, created on 2015-06-10 18:34:29
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/attachments/hooks/products/tabs_extra.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2059621850557812b54c60b7-79469340%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '105bb175b74cb3601a47c5d5489ec83283344730' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/attachments/hooks/products/tabs_extra.post.tpl',
      1 => 1418020409,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2059621850557812b54c60b7-79469340',
  'function' =>
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_557812b54e2ff8_55405196',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557812b54e2ff8_55405196')) {function content_557812b54e2ff8_55405196($_smarty_tpl) {?><div id="content_attachments" class="cm-hide-save-button hidden">

<?php echo $_smarty_tpl->getSubTemplate ("addons/attachments/views/attachments/manage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_id'=>$_REQUEST['product_id'],'object_type'=>"product"), 0);?>


<!--content_attachments--></div><?php }} ?>
