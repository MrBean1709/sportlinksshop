<?php /* Smarty version Smarty-3.1.18, created on 2015-09-18 11:53:21
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/addons/reward_points/hooks/orders/product_info.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:196763662155fa370b630027-58521572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbc60b8a6c49d93a6c64fb9961c39414e3e1da56' => 
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/addons/reward_points/hooks/orders/product_info.post.tpl',
      1 => 1442547414,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '196763662155fa370b630027-58521572',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa370b6398c3_57710607',
  'variables' => 
  array (
    'order_info' => 0,
    'oi' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa370b6398c3_57710607')) {function content_55fa370b6398c3_57710607($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('price_in_points'));
?>
<!-- Hook Reward points start -->
<?php if ($_smarty_tpl->tpl_vars['order_info']->value['points_info']['price']&&$_smarty_tpl->tpl_vars['oi']->value) {?>
<p><strong><?php echo $_smarty_tpl->__("price_in_points");?>
:</strong> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oi']->value['extra']['points_info']['price'], ENT_QUOTES, 'UTF-8');?>
</p>
<?php }?>
<!-- Hook Reward points end -->
<?php }} ?>
