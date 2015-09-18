<?php /* Smarty version Smarty-3.1.18, created on 2015-09-17 15:12:13
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/addons/social_buttons/hooks/products/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:163048468655fa67cd74f453-03452873%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '7c98c22ef295c1591e8786c1671aec11391ed441' =>
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/addons/social_buttons/hooks/products/detailed_content.post.tpl',
      1 => 1441256908,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '163048468655fa67cd74f453-03452873',
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
  'unifunc' => 'content_55fa67cd7574c5_91622618',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa67cd7574c5_91622618')) {function content_55fa67cd7574c5_91622618($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['facebook_enable']=="Y") {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/social_buttons/common/facebook_types.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_type'=>"product_data",'object_data'=>$_smarty_tpl->tpl_vars['product_data']->value), 0);?>

<?php }?>
<?php }} ?>
