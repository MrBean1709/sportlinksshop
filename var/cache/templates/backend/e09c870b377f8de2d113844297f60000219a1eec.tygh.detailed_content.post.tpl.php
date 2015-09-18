<?php /* Smarty version Smarty-3.1.18, created on 2015-06-13 06:20:29
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/social_buttons/hooks/pages/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:823702286557b5b2d488397-05278084%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'e09c870b377f8de2d113844297f60000219a1eec' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/social_buttons/hooks/pages/detailed_content.post.tpl',
      1 => 1418020413,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '823702286557b5b2d488397-05278084',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'addons' => 0,
    'page_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_557b5b2d49ba57_86041705',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557b5b2d49ba57_86041705')) {function content_557b5b2d49ba57_86041705($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['facebook_enable']=="Y") {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/social_buttons/common/facebook_types.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_type'=>"page_data",'object_data'=>$_smarty_tpl->tpl_vars['page_data']->value), 0);?>

<?php }?>
<?php }} ?>
