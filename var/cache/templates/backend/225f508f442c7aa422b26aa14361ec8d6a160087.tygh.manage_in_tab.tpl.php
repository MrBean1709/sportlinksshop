<?php /* Smarty version Smarty-3.1.18, created on 2015-06-10 18:34:32
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/views/block_manager/manage_in_tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:845193618557812b87c3e08-93543910%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '225f508f442c7aa422b26aa14361ec8d6a160087' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/views/block_manager/manage_in_tab.tpl',
      1 => 1418020416,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '845193618557812b87c3e08-93543910',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'layouts' => 0,
    'config' => 0,
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_557812b8839d67_95617595',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557812b8839d67_95617595')) {function content_557812b8839d67_95617595($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('switch_layout'));
?>
<div id="content_blocks">
    <?php if (count($_smarty_tpl->tpl_vars['layouts']->value)>1) {?>
    <div class="form-horizontal form-edit">
        <div class="control-group">
            <label class="control-label"><?php echo $_smarty_tpl->__("switch_layout");?>
</label>
            <div class="controls">
                <?php echo $_smarty_tpl->getSubTemplate ("common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('style'=>"graphic",'link_tpl'=>fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"s_layout="),'items'=>$_smarty_tpl->tpl_vars['layouts']->value,'selected_id'=>$_smarty_tpl->tpl_vars['runtime']->value['layout']['layout_id'],'key_name'=>"name",'display_icons'=>false,'target_id'=>"content_blocks"), 0);?>

            </div>
        </div>
    </div>
    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/block_manager/manage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div><?php }} ?>
