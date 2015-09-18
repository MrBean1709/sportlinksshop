<?php /* Smarty version Smarty-3.1.18, created on 2015-09-18 11:53:22
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/addons/help_tutorial/hooks/index/actions.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:107289931155fa36f73a3443-08377860%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e9b5f89b534a8a3719f402760b12491cdfdd0d4' => 
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/addons/help_tutorial/hooks/index/actions.post.tpl',
      1 => 1442547387,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '107289931155fa36f73a3443-08377860',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa36f73b7cd8_00171808',
  'variables' => 
  array (
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa36f73b7cd8_00171808')) {function content_55fa36f73b7cd8_00171808($_smarty_tpl) {?><?php
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
<?php }?>
<?php }} ?>
