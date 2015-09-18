<?php /* Smarty version Smarty-3.1.18, created on 2015-06-08 16:53:51
         compiled from "/home/lostus/public_html/sportslinkshop/design/themes/responsive/templates/views/block_manager/render/container.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4755610995575581f2bf205-33687817%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'ff0d79698d764d25986591eb70209e30eedd453f' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/themes/responsive/templates/views/block_manager/render/container.tpl',
      1 => 1418021496,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4755610995575581f2bf205-33687817',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'layout_data' => 0,
    'container' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5575581f2d4d95_66968642',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5575581f2d4d95_66968642')) {function content_5575581f2d4d95_66968642($_smarty_tpl) {?><div class="<?php if ($_smarty_tpl->tpl_vars['layout_data']->value['layout_width']!="fixed") {?>container-fluid <?php } else { ?>container<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value['user_class'], ENT_QUOTES, 'UTF-8');?>
">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div><?php }} ?>
