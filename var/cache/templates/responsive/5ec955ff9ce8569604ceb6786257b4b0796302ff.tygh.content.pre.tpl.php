<?php /* Smarty version Smarty-3.1.18, created on 2015-09-17 12:03:42
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/themes/responsive/templates/addons/twigmo/hooks/index/content.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:89502493055fa3b9e742336-82544675%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '5ec955ff9ce8569604ceb6786257b4b0796302ff' =>
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/themes/responsive/templates/addons/twigmo/hooks/index/content.pre.tpl',
      1 => 1441256981,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '89502493055fa3b9e742336-82544675',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'runtime' => 0,
    'state' => 0,
    'config' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa3b9e7bb8b4_31693711',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa3b9e7bb8b4_31693711')) {function content_55fa3b9e7bb8b4_31693711($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/opt/lampp/htdocs/sportslinkshop/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php $_smarty_tpl->tpl_vars["state"] = new Smarty_variable($_SESSION['twg_state'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['addon_images_path'] = new Smarty_variable(fn_twg_get_images_path(), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['state']->value['twg_can_be_used']&&!$_smarty_tpl->tpl_vars['state']->value['mobile_link_closed']) {?>
<div class="mobile-avail-notice">
    <div class="buttons-container">
        <a href="<?php echo htmlspecialchars(fn_link_attach(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"mobile","auto","desktop"),"mobile"), ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->__('twg_visit_our_mobile_store');?>

        </a>

        <?php if ($_smarty_tpl->tpl_vars['state']->value['device']=="android"&&$_smarty_tpl->tpl_vars['state']->value['settings']['url_on_googleplay']) {?>
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['settings']['url_on_googleplay'], ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__('twg_app_for_android');?>
</a>
        <?php } elseif (($_smarty_tpl->tpl_vars['state']->value['device']=="iphone"||$_smarty_tpl->tpl_vars['state']->value['device']=="ipad")&&$_smarty_tpl->tpl_vars['state']->value['settings']['url_on_appstore']) {?>
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['settings']['url_on_appstore'], ENT_QUOTES, 'UTF-8');?>
">
                <?php if ($_smarty_tpl->tpl_vars['state']->value['device']=="iphone") {?>
                    <?php echo $_smarty_tpl->__('twg_app_for_iphone');?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->__('twg_app_for_ipad');?>

                <?php }?>
            </a>
        <?php }?>
        <span id="close_notification_mobile_avail_notice" class="cm-notification-close hand close" title="Close" />&times;</span>
    </div>
</div>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/twigmo/hooks/index/content.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/twigmo/hooks/index/content.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php $_smarty_tpl->tpl_vars["state"] = new Smarty_variable($_SESSION['twg_state'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['addon_images_path'] = new Smarty_variable(fn_twg_get_images_path(), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['state']->value['twg_can_be_used']&&!$_smarty_tpl->tpl_vars['state']->value['mobile_link_closed']) {?>
<div class="mobile-avail-notice">
    <div class="buttons-container">
        <a href="<?php echo htmlspecialchars(fn_link_attach(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"mobile","auto","desktop"),"mobile"), ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->__('twg_visit_our_mobile_store');?>

        </a>

        <?php if ($_smarty_tpl->tpl_vars['state']->value['device']=="android"&&$_smarty_tpl->tpl_vars['state']->value['settings']['url_on_googleplay']) {?>
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['settings']['url_on_googleplay'], ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__('twg_app_for_android');?>
</a>
        <?php } elseif (($_smarty_tpl->tpl_vars['state']->value['device']=="iphone"||$_smarty_tpl->tpl_vars['state']->value['device']=="ipad")&&$_smarty_tpl->tpl_vars['state']->value['settings']['url_on_appstore']) {?>
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['settings']['url_on_appstore'], ENT_QUOTES, 'UTF-8');?>
">
                <?php if ($_smarty_tpl->tpl_vars['state']->value['device']=="iphone") {?>
                    <?php echo $_smarty_tpl->__('twg_app_for_iphone');?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->__('twg_app_for_ipad');?>

                <?php }?>
            </a>
        <?php }?>
        <span id="close_notification_mobile_avail_notice" class="cm-notification-close hand close" title="Close" />&times;</span>
    </div>
</div>
<?php }?><?php }?><?php }} ?>
