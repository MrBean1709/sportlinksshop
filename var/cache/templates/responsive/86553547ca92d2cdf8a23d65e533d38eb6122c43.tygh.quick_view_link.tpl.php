<?php /* Smarty version Smarty-3.1.18, created on 2015-09-17 12:03:44
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/themes/responsive/templates/views/products/components/quick_view_link.tpl" */ ?>
<?php /*%%SmartyHeaderCode:55288629555fa3ba0e87728-40749343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '86553547ca92d2cdf8a23d65e533d38eb6122c43' =>
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/themes/responsive/templates/views/products/components/quick_view_link.tpl',
      1 => 1441256998,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '55288629555fa3ba0e87728-40749343',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'runtime' => 0,
    'config' => 0,
    'product' => 0,
    'current_url' => 0,
    'block' => 0,
    'quick_view_url' => 0,
    'quick_nav_ids' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa3ba0edf556_45525125',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa3ba0edf556_45525125')) {function content_55fa3ba0edf556_45525125($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/opt/lampp/htdocs/sportslinkshop/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('quick_product_viewer','quick_view','quick_product_viewer','quick_view'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="ty-quick-view-button">
    <?php $_smarty_tpl->tpl_vars['current_url'] = new Smarty_variable(urlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['quick_view_url'] = new Smarty_variable("products.quick_view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."&prev_url=".((string)$_smarty_tpl->tpl_vars['current_url']->value), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['block']->value['type']&&$_smarty_tpl->tpl_vars['block']->value['type']!='main') {?>
        <?php $_smarty_tpl->tpl_vars['quick_view_url'] = new Smarty_variable(fn_link_attach($_smarty_tpl->tpl_vars['quick_view_url']->value,"n_plain=Y"), null, 0);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['quick_nav_ids']->value) {?>
        <?php $_smarty_tpl->tpl_vars['quick_nav_ids'] = new Smarty_variable(implode(",",$_smarty_tpl->tpl_vars['quick_nav_ids']->value), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['quick_view_url'] = new Smarty_variable(fn_link_attach($_smarty_tpl->tpl_vars['quick_view_url']->value,"n_items=".((string)$_smarty_tpl->tpl_vars['quick_nav_ids']->value)), null, 0);?>
    <?php }?>
    <a class="ty-btn ty-btn__secondary ty-btn__big cm-dialog-opener cm-dialog-auto-size" data-ca-view-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="product_quick_view" href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['quick_view_url']->value), ENT_QUOTES, 'UTF-8');?>
" data-ca-dialog-title="<?php echo $_smarty_tpl->__("quick_product_viewer");?>
" rel="nofollow"><?php echo $_smarty_tpl->__("quick_view");?>
</a>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/products/components/quick_view_link.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/products/components/quick_view_link.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><div class="ty-quick-view-button">
    <?php $_smarty_tpl->tpl_vars['current_url'] = new Smarty_variable(urlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['quick_view_url'] = new Smarty_variable("products.quick_view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."&prev_url=".((string)$_smarty_tpl->tpl_vars['current_url']->value), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['block']->value['type']&&$_smarty_tpl->tpl_vars['block']->value['type']!='main') {?>
        <?php $_smarty_tpl->tpl_vars['quick_view_url'] = new Smarty_variable(fn_link_attach($_smarty_tpl->tpl_vars['quick_view_url']->value,"n_plain=Y"), null, 0);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['quick_nav_ids']->value) {?>
        <?php $_smarty_tpl->tpl_vars['quick_nav_ids'] = new Smarty_variable(implode(",",$_smarty_tpl->tpl_vars['quick_nav_ids']->value), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['quick_view_url'] = new Smarty_variable(fn_link_attach($_smarty_tpl->tpl_vars['quick_view_url']->value,"n_items=".((string)$_smarty_tpl->tpl_vars['quick_nav_ids']->value)), null, 0);?>
    <?php }?>
    <a class="ty-btn ty-btn__secondary ty-btn__big cm-dialog-opener cm-dialog-auto-size" data-ca-view-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="product_quick_view" href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['quick_view_url']->value), ENT_QUOTES, 'UTF-8');?>
" data-ca-dialog-title="<?php echo $_smarty_tpl->__("quick_product_viewer");?>
" rel="nofollow"><?php echo $_smarty_tpl->__("quick_view");?>
</a>
</div><?php }?><?php }} ?>
