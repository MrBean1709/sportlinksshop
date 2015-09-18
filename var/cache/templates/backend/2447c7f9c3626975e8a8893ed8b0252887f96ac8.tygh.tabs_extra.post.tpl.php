<?php /* Smarty version Smarty-3.1.18, created on 2015-09-17 15:12:13
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/addons/attachments/hooks/products/tabs_extra.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:48952887155fa67cda5d163-38004908%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '2447c7f9c3626975e8a8893ed8b0252887f96ac8' =>
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/addons/attachments/hooks/products/tabs_extra.post.tpl',
      1 => 1441256892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '48952887155fa67cda5d163-38004908',
  'function' =>
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa67cda62a31_13707806',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa67cda62a31_13707806')) {function content_55fa67cda62a31_13707806($_smarty_tpl) {?><div id="content_attachments" class="cm-hide-save-button hidden">

<?php echo $_smarty_tpl->getSubTemplate ("addons/attachments/views/attachments/manage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_id'=>$_REQUEST['product_id'],'object_type'=>"product"), 0);?>


<!--content_attachments--></div><?php }} ?>
