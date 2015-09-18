<?php /* Smarty version Smarty-3.1.18, created on 2015-06-10 18:34:28
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/social_buttons/hooks/products/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:936525617557812b48a43b5-91212403%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '303846428fa1e17ef2e11f9036509ee1ce0d6c95' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/social_buttons/hooks/products/detailed_content.post.tpl',
      1 => 1418020413,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '936525617557812b48a43b5-91212403',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'addons' => 0,
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_557812b48d88b8_64034609',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557812b48d88b8_64034609')) {function content_557812b48d88b8_64034609($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['facebook_enable']=="Y") {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/social_buttons/common/facebook_types.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_type'=>"product_data",'object_data'=>$_smarty_tpl->tpl_vars['product_data']->value), 0);?>

<?php }?>
<?php }} ?>
