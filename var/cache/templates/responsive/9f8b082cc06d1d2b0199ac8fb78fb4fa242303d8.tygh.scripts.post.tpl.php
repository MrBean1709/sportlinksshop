<?php /* Smarty version Smarty-3.1.18, created on 2015-09-17 12:03:42
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/themes/responsive/templates/addons/twigmo/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:151493063355fa3b9e6772b9-37846821%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '9f8b082cc06d1d2b0199ac8fb78fb4fa242303d8' =>
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/themes/responsive/templates/addons/twigmo/hooks/index/scripts.post.tpl',
      1 => 1441256981,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '151493063355fa3b9e6772b9-37846821',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'runtime' => 0,
    'state' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa3b9e69c705_57897201',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa3b9e69c705_57897201')) {function content_55fa3b9e69c705_57897201($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/opt/lampp/htdocs/sportslinkshop/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php $_smarty_tpl->tpl_vars["state"] = new Smarty_variable($_SESSION['twg_state'], null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['state']->value['twg_can_be_used']&&!$_smarty_tpl->tpl_vars['state']->value['mobile_link_closed']) {?>
    <script>
    //<![CDATA[

    $(function () {
        $('#close_notification_mobile_avail_notice').bind('click', function (e) {
            $(e.target).parents('div.mobile-avail-notice').hide();
            $.ajax({
                url: '<?php echo fn_url("twigmo.post&close_notice=1");?>
',
                dataType: 'json'
            });
        });
    });

    //]]>
    </script>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/twigmo/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/twigmo/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php $_smarty_tpl->tpl_vars["state"] = new Smarty_variable($_SESSION['twg_state'], null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['state']->value['twg_can_be_used']&&!$_smarty_tpl->tpl_vars['state']->value['mobile_link_closed']) {?>
    <script>
    //<![CDATA[

    $(function () {
        $('#close_notification_mobile_avail_notice').bind('click', function (e) {
            $(e.target).parents('div.mobile-avail-notice').hide();
            $.ajax({
                url: '<?php echo fn_url("twigmo.post&close_notice=1");?>
',
                dataType: 'json'
            });
        });
    });

    //]]>
    </script>
<?php }?>
<?php }?><?php }} ?>
