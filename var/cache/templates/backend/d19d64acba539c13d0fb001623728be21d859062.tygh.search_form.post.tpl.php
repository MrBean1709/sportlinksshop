<?php /* Smarty version Smarty-3.1.18, created on 2015-09-17 11:52:57
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/addons/bestsellers/hooks/products/search_form.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:214524950755fa39196ed932-98966219%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'd19d64acba539c13d0fb001623728be21d859062' =>
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/addons/bestsellers/hooks/products/search_form.post.tpl',
      1 => 1441256892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '214524950755fa39196ed932-98966219',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa39196f9e58_38015391',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa39196f9e58_38015391')) {function content_55fa39196f9e58_38015391($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('sales_amount'));
?>
<div class="control-group">
    <label class="control-label" for="sales_amount_from"><?php echo $_smarty_tpl->__("sales_amount");?>
</label>
    <div class="controls">
        <input type="text" name="sales_amount_from" id="sales_amount_from" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['sales_amount_from'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();" class="input-mini" />&nbsp;&ndash;&nbsp;<input type="text" name="sales_amount_to" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['sales_amount_to'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();" class="input-mini" />
    </div>
</div><?php }} ?>
