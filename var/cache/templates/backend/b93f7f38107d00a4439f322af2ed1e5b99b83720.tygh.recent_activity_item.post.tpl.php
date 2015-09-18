<?php /* Smarty version Smarty-3.1.18, created on 2015-06-08 17:17:19
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/news_and_emails/hooks/index/recent_activity_item.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184256139755755d9f226176-12762754%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'b93f7f38107d00a4439f322af2ed1e5b99b83720' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/news_and_emails/hooks/index/recent_activity_item.post.tpl',
      1 => 1418020411,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '184256139755755d9f226176-12762754',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55755d9f25e2a3_02542423',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55755d9f25e2a3_02542423')) {function content_55755d9f25e2a3_02542423($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['item']->value['type']=="news") {?>
    <a href="<?php echo htmlspecialchars(fn_url("news.update?news_id=".((string)$_smarty_tpl->tpl_vars['item']->value['content']['id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['content']['news'], ENT_QUOTES, 'UTF-8');?>
</a><br>
<?php }?><?php }} ?>
