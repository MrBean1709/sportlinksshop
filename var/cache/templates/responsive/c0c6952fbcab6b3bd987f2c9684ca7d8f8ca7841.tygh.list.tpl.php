<?php /* Smarty version Smarty-3.1.18, created on 2015-06-20 13:12:11
         compiled from "/home/lostus/public_html/sportslinkshop/design/themes/responsive/templates/views/promotions/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11935112945584f62bb5dcf8-89301816%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'c0c6952fbcab6b3bd987f2c9684ca7d8f8ca7841' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/themes/responsive/templates/views/promotions/list.tpl',
      1 => 1418021496,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11935112945584f62bb5dcf8-89301816',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'runtime' => 0,
    'promotions' => 0,
    'promotion' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5584f62bde9a87_04019628',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5584f62bde9a87_04019628')) {function content_5584f62bde9a87_04019628($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/home/lostus/public_html/sportslinkshop/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/home/lostus/public_html/sportslinkshop/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('text_no_active_promotions','active_promotions','text_no_active_promotions','active_promotions'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="ty-wysiwyg-content">
<?php  $_smarty_tpl->tpl_vars["promotion"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["promotion"]->_loop = false;
 $_smarty_tpl->tpl_vars["promotion_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['promotions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["promotion"]->key => $_smarty_tpl->tpl_vars["promotion"]->value) {
$_smarty_tpl->tpl_vars["promotion"]->_loop = true;
 $_smarty_tpl->tpl_vars["promotion_id"]->value = $_smarty_tpl->tpl_vars["promotion"]->key;
?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"promotions:list_item")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"promotions:list_item"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['promotion']->value['name']), 0);?>

        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['promotion']->value['detailed_description'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['promotion']->value['short_description'] : $tmp);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"promotions:list_item"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }
if (!$_smarty_tpl->tpl_vars["promotion"]->_loop) {
?>
    <p><?php echo $_smarty_tpl->__("text_no_active_promotions");?>
</p>
<?php } ?>
</div>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?><?php echo $_smarty_tpl->__("active_promotions");?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/promotions/list.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/promotions/list.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><div class="ty-wysiwyg-content">
<?php  $_smarty_tpl->tpl_vars["promotion"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["promotion"]->_loop = false;
 $_smarty_tpl->tpl_vars["promotion_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['promotions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["promotion"]->key => $_smarty_tpl->tpl_vars["promotion"]->value) {
$_smarty_tpl->tpl_vars["promotion"]->_loop = true;
 $_smarty_tpl->tpl_vars["promotion_id"]->value = $_smarty_tpl->tpl_vars["promotion"]->key;
?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"promotions:list_item")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"promotions:list_item"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['promotion']->value['name']), 0);?>

        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['promotion']->value['detailed_description'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['promotion']->value['short_description'] : $tmp);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"promotions:list_item"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }
if (!$_smarty_tpl->tpl_vars["promotion"]->_loop) {
?>
    <p><?php echo $_smarty_tpl->__("text_no_active_promotions");?>
</p>
<?php } ?>
</div>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?><?php echo $_smarty_tpl->__("active_promotions");?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php }?><?php }} ?>
