<?php /* Smarty version Smarty-3.1.18, created on 2015-06-13 06:21:49
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/common/previewer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:264088463557b5b7d6ff8f9-13931154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '45e7b8e28d39e6abf1c3f3331a25188e513ceb45' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/common/previewer.tpl',
      1 => 1418020415,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '264088463557b5b7d6ff8f9-13931154',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_557b5b7d70ffe1_51118036',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557b5b7d70ffe1_51118036')) {function content_557b5b7d70ffe1_51118036($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/lostus/public_html/sportslinkshop/app/functions/smarty_plugins/function.script.php';
?><?php echo smarty_function_script(array('src'=>"js/tygh/previewers/".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['default_image_previewer']).".previewer.js"),$_smarty_tpl);?>
<?php }} ?>
