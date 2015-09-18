<?php /* Smarty version Smarty-3.1.18, created on 2015-09-17 11:43:51
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/addons/news_and_emails/hooks/index/recent_activity_item.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:94995328555fa36f71d0581-24640117%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '9039bb3db9b6d0ac53c3cb2eb6dad19d2da6a644' =>
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/addons/news_and_emails/hooks/index/recent_activity_item.post.tpl',
      1 => 1441256901,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '94995328555fa36f71d0581-24640117',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa36f71dabb0_68135568',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa36f71dabb0_68135568')) {function content_55fa36f71dabb0_68135568($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['item']->value['type']=="news") {?>
    <a href="<?php echo htmlspecialchars(fn_url("news.update?news_id=".((string)$_smarty_tpl->tpl_vars['item']->value['content']['id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['content']['news'], ENT_QUOTES, 'UTF-8');?>
</a><br>
<?php }?><?php }} ?>
