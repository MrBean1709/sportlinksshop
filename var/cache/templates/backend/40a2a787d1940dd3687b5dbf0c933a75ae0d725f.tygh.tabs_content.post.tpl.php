<?php /* Smarty version Smarty-3.1.18, created on 2015-08-28 10:42:38
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/tags/hooks/products/tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7400589555dfca9e22d882-34984514%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '40a2a787d1940dd3687b5dbf0c933a75ae0d725f' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/tags/hooks/products/tabs_content.post.tpl',
      1 => 1418020414,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7400589555dfca9e22d882-34984514',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'runtime' => 0,
    'addons' => 0,
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55dfca9e2c2909_38703056',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55dfca9e2c2909_38703056')) {function content_55dfca9e2c2909_38703056($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")) {?>
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['tags']['tags_for_products']=="Y") {?>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/tags/views/tags/components/object_tags.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object'=>$_smarty_tpl->tpl_vars['product_data']->value,'input_name'=>"product_data",'allow_save'=>true,'object_type'=>"P",'object_id'=>$_smarty_tpl->tpl_vars['product_data']->value['product_id']), 0);?>

    <?php }?>
<?php }?><?php }} ?>
