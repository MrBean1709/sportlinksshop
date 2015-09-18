<?php /* Smarty version Smarty-3.1.18, created on 2015-09-18 11:53:22
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/addons/discussion/hooks/orders/tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:107516019355fa370b8dfe91-44297911%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2775f095ce7cc0c064e10432d660fdf2b29ef2da' => 
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/addons/discussion/hooks/orders/tabs_content.post.tpl',
      1 => 1442547361,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '107516019355fa370b8dfe91-44297911',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa370b8e5595_14452053',
  'variables' => 
  array (
    'order_info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa370b8e5595_14452053')) {function content_55fa370b8e5595_14452053($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('user_id'=>$_smarty_tpl->tpl_vars['order_info']->value['user_id'],'object_company_id'=>$_smarty_tpl->tpl_vars['order_info']->value['company_id']), 0);?>

<?php }} ?>
