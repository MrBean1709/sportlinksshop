<?php /* Smarty version Smarty-3.1.18, created on 2015-06-10 18:34:29
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/required_products/hooks/products/tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:838110583557812b537eb78-83742251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '6bd352f668939f3c39f429d968ee5e9652c89d6a' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/required_products/hooks/products/tabs_content.post.tpl',
      1 => 1418020412,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '838110583557812b537eb78-83742251',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'required_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_557812b538ef30_73242439',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557812b538ef30_73242439')) {function content_557812b538ef30_73242439($_smarty_tpl) {?><div class="hidden" id="content_required_products">

<?php echo $_smarty_tpl->getSubTemplate ("pickers/products/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('positions'=>'','input_name'=>"required_products",'data_id'=>"added_products",'item_ids'=>$_smarty_tpl->tpl_vars['required_products']->value,'type'=>"links",'placement'=>"right"), 0);?>


</div><?php }} ?>
