<?php /* Smarty version Smarty-3.1.18, created on 2015-06-13 06:26:29
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/discussion/hooks/orders/tabs_extra.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:708335538557b5c953829a2-85567675%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'c92e22fb5dc7a32cb792b36aafa9b9a669b98cbd' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/discussion/hooks/orders/tabs_extra.post.tpl',
      1 => 1418020410,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '708335538557b5c953829a2-85567675',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'order_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_557b5c9538ed70_70476643',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557b5c9538ed70_70476643')) {function content_557b5c9538ed70_70476643($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/new_discussion_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('user_id'=>$_smarty_tpl->tpl_vars['order_info']->value['user_id'],'object_company_id'=>$_smarty_tpl->tpl_vars['order_info']->value['company_id']), 0);?>

<?php }} ?>
