<?php /* Smarty version Smarty-3.1.18, created on 2015-09-17 15:12:13
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/addons/required_products/hooks/products/tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:98238226155fa67cd981160-66288492%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'f55c561e82bc55654612552773ab4e622ba01bbb' =>
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/addons/required_products/hooks/products/tabs_content.post.tpl',
      1 => 1441256904,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '98238226155fa67cd981160-66288492',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'required_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa67cd988157_28804190',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa67cd988157_28804190')) {function content_55fa67cd988157_28804190($_smarty_tpl) {?><div class="hidden" id="content_required_products">

<?php echo $_smarty_tpl->getSubTemplate ("pickers/products/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('positions'=>'','input_name'=>"required_products",'data_id'=>"added_products",'item_ids'=>$_smarty_tpl->tpl_vars['required_products']->value,'type'=>"links",'placement'=>"right"), 0);?>


</div><?php }} ?>
