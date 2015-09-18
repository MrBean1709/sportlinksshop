<?php /* Smarty version Smarty-3.1.18, created on 2015-06-29 17:44:59
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/reward_points/hooks/profiles/update_tools_list.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14188157135591139b6258c8-63254211%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'bc5c6f5d1c47ffb4cabbd74dd7c107092aa83d05' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/reward_points/hooks/profiles/update_tools_list.post.tpl',
      1 => 1418020412,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14188157135591139b6258c8-63254211',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'user_data' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5591139b63ecc7_37276251',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5591139b63ecc7_37276251')) {function content_5591139b63ecc7_37276251($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('view_user_points'));
?>
<?php if ($_smarty_tpl->tpl_vars['user_data']->value['user_type']=="C") {?>
    <li><a class="tool-link" href="<?php echo htmlspecialchars(fn_url("reward_points.userlog?user_id=".((string)$_smarty_tpl->tpl_vars['id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("view_user_points");?>
</a></li>
<?php }?><?php }} ?>
