<?php /* Smarty version Smarty-3.1.18, created on 2015-06-13 06:27:10
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/mail/templates/common/options_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:195932266557b5cbe51d362-55778217%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '161759f9e34e7d6cdb69a0e4ea361341c44ef717' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/mail/templates/common/options_info.tpl',
      1 => 1418020407,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '195932266557b5cbe51d362-55778217',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'product_options' => 0,
    'po' => 0,
    'has_option' => 0,
    'oi' => 0,
    'file' => 0,
    'settings' => 0,
    'skip_modifiers' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_557b5cbe5aa839_84089880',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557b5cbe5aa839_84089880')) {function content_557b5cbe5aa839_84089880($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('options'));
?>
<?php if ($_smarty_tpl->tpl_vars['product_options']->value) {?>
    <?php  $_smarty_tpl->tpl_vars['po'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['po']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['po']->key => $_smarty_tpl->tpl_vars['po']->value) {
$_smarty_tpl->tpl_vars['po']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['po']->value['value']) {?>
            <?php $_smarty_tpl->tpl_vars["has_option"] = new Smarty_variable(true, null, 0);?>
            <?php break 1?>
        <?php }?>
    <?php } ?>

    <?php if ($_smarty_tpl->tpl_vars['has_option']->value) {?>
        <strong><?php echo $_smarty_tpl->__("options");?>
:</strong>&nbsp;
        <?php  $_smarty_tpl->tpl_vars['po'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['po']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['po']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['po']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['po']->key => $_smarty_tpl->tpl_vars['po']->value) {
$_smarty_tpl->tpl_vars['po']->_loop = true;
 $_smarty_tpl->tpl_vars['po']->iteration++;
 $_smarty_tpl->tpl_vars['po']->last = $_smarty_tpl->tpl_vars['po']->iteration === $_smarty_tpl->tpl_vars['po']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['po_opt']['last'] = $_smarty_tpl->tpl_vars['po']->last;
?>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_name'], ENT_QUOTES, 'UTF-8');?>
:&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['variant_name'], ENT_QUOTES, 'UTF-8');?>


            <?php if ($_smarty_tpl->tpl_vars['oi']->value['extra']['custom_files'][$_smarty_tpl->tpl_vars['po']->value['option_id']]) {?>
                <?php  $_smarty_tpl->tpl_vars["file"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["file"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['oi']->value['extra']['custom_files'][$_smarty_tpl->tpl_vars['po']->value['option_id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["file"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["file"]->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars["file"]->key => $_smarty_tpl->tpl_vars["file"]->value) {
$_smarty_tpl->tpl_vars["file"]->_loop = true;
 $_smarty_tpl->tpl_vars["file"]->iteration++;
 $_smarty_tpl->tpl_vars["file"]->last = $_smarty_tpl->tpl_vars["file"]->iteration === $_smarty_tpl->tpl_vars["file"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["po_files"]['last'] = $_smarty_tpl->tpl_vars["file"]->last;
?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['file']->value['name'], ENT_QUOTES, 'UTF-8');?>

                    <?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['po_files']['last']) {?>,&nbsp;<?php }?>
                <?php } ?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['display_options_modifiers']=="Y") {?>
                <?php if (!$_smarty_tpl->tpl_vars['skip_modifiers']->value&&floatval($_smarty_tpl->tpl_vars['po']->value['modifier'])) {?>
                    &nbsp;(<?php echo $_smarty_tpl->getSubTemplate ("common/modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('mod_type'=>$_smarty_tpl->tpl_vars['po']->value['modifier_type'],'mod_value'=>$_smarty_tpl->tpl_vars['po']->value['modifier'],'display_sign'=>true), 0);?>
)
                <?php }?>
            <?php }?>
            <?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['po_opt']['last']) {?>,&nbsp;<?php }?>
        <?php } ?>
    <?php }?>
<?php } else { ?>
    &nbsp;
<?php }?><?php }} ?>
