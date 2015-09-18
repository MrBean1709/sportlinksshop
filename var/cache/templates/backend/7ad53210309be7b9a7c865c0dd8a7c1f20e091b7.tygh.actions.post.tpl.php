<?php /* Smarty version Smarty-3.1.18, created on 2015-06-08 16:54:51
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/help_tutorial/hooks/index/actions.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13335537605575585b8c5183-78712880%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '7ad53210309be7b9a7c865c0dd8a7c1f20e091b7' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/help_tutorial/hooks/index/actions.post.tpl',
      1 => 1418020411,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13335537605575585b8c5183-78712880',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5575585b90d8a0_69842031',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5575585b90d8a0_69842031')) {function content_5575585b90d8a0_69842031($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('help_tutorial.need_help','close'));
?>
<?php if (($_smarty_tpl->tpl_vars['runtime']->value['controller']=="block_manager"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage"||$_smarty_tpl->tpl_vars['runtime']->value['controller']=="themes"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage"||$_smarty_tpl->tpl_vars['runtime']->value['controller']=="store_import"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="index")) {?>
<div class="help-tutorial clearfix">
    <span class="help-tutorial-link cm-external-click" id="help_tutorial_link" data-ca-scroll="main_column">
        <span class="help-tutorial-show"><i class="help-tutorial-icon icon-question-sign"></i><?php echo $_smarty_tpl->__("help_tutorial.need_help");?>
</span>
        <span class="help-tutorial-close"><i class="help-tutorial-icon icon-remove"></i><?php echo $_smarty_tpl->__("close");?>
</span>
    </span>
</div>
<?php }?><?php }} ?>
