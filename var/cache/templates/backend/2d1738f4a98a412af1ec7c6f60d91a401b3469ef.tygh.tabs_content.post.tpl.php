<?php /* Smarty version Smarty-3.1.18, created on 2015-06-10 18:34:28
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/1clue_related_products/hooks/products/tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:884448778557812b4a77aa1-49724681%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '2d1738f4a98a412af1ec7c6f60d91a401b3469ef' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/1clue_related_products/hooks/products/tabs_content.post.tpl',
      1 => 1433457424,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '884448778557812b4a77aa1-49724681',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'related' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_557812b4aa0c11_43232730',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557812b4aa0c11_43232730')) {function content_557812b4aa0c11_43232730($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('text_notice_related_products'));
?>
<div class="hidden" id="content_related_products">

<p><?php echo $_smarty_tpl->__("text_notice_related_products");?>
</p>

<?php echo $_smarty_tpl->getSubTemplate ("pickers/products/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('positions'=>'','input_name'=>"related",'data_id'=>"added_products",'item_ids'=>$_smarty_tpl->tpl_vars['related']->value,'type'=>"links"), 0);?>


</div><?php }} ?>
