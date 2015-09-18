<?php /* Smarty version Smarty-3.1.18, created on 2015-09-17 11:52:57
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/buttons/add_close.tpl" */ ?>
<?php /*%%SmartyHeaderCode:207557781255fa3919b896e2-10117824%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '67cf4875ecbbf9bc8c17e747c49813fd54de98c5' =>
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/buttons/add_close.tpl',
      1 => 1441256913,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '207557781255fa3919b896e2-10117824',
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
  'unifunc' => 'content_55fa3919b9fcf5_78592453',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa3919b9fcf5_78592453')) {function content_55fa3919b9fcf5_78592453($_smarty_tpl) {?><?php
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
