<?php /* Smarty version Smarty-3.1.18, created on 2015-06-13 06:25:02
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/reward_points/hooks/profiles/list_extra_links.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:461060320557b5c3e5923a2-58158992%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '4e0df2643a3d8ab6077c1abc35190b7aff2d7d8b' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/reward_points/hooks/profiles/list_extra_links.post.tpl',
      1 => 1418020412,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '461060320557b5c3e5923a2-58158992',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_557b5c3e5b64a5_78076643',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557b5c3e5b64a5_78076643')) {function content_557b5c3e5b64a5_78076643($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('points'));
?>
<?php if ($_smarty_tpl->tpl_vars['user']->value['user_type']=="C") {?>
    <li><a href="<?php echo htmlspecialchars(fn_url("reward_points.userlog?user_id=".((string)$_smarty_tpl->tpl_vars['user']->value['user_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("points");?>
 (<?php if ($_smarty_tpl->tpl_vars['user']->value['points']) {?><?php echo htmlspecialchars(unserialize($_smarty_tpl->tpl_vars['user']->value['points']), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>0<?php }?>)</a></li>
<?php }?><?php }} ?>
