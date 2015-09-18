<?php /* Smarty version Smarty-3.1.18, created on 2015-06-13 08:02:08
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/buttons/add_close.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1224597960557b730074b7a6-65372320%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'dcc744f4cdcf82ec760e454b23ee627a7fc19ad1' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/buttons/add_close.tpl',
      1 => 1418020414,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1224597960557b730074b7a6-65372320',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'is_js' => 0,
    'but_close_text' => 0,
    'but_close_onclick' => 0,
    'but_text' => 0,
    'but_onclick' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_557b730078ea53_95999570',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557b730078ea53_95999570')) {function content_557b730078ea53_95999570($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('cancel'));
?>
<a class="cm-dialog-closer cm-cancel tool-link btn"><?php echo $_smarty_tpl->__("cancel");?>
</a>
<?php if ($_smarty_tpl->tpl_vars['is_js']->value==true) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"submit",'but_text'=>$_smarty_tpl->tpl_vars['but_close_text']->value,'but_onclick'=>$_smarty_tpl->tpl_vars['but_close_onclick']->value,'but_role'=>"button_main",'but_meta'=>"cm-process-items cm-dialog-closer btn-primary"), 0);?>

    <?php if ($_smarty_tpl->tpl_vars['but_text']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>'','but_text'=>$_smarty_tpl->tpl_vars['but_text']->value,'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_role'=>"submit",'but_meta'=>"cm-process-items btn-primary"), 0);?>

    <?php }?>
<?php } else { ?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"submit",'but_text'=>$_smarty_tpl->tpl_vars['but_close_text']->value,'but_role'=>"button_main",'but_meta'=>"cm-process-items btn-primary"), 0);?>

<?php }?><?php }} ?>
