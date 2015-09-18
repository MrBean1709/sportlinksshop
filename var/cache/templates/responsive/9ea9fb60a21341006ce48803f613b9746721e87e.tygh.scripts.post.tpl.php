<?php /* Smarty version Smarty-3.1.18, created on 2015-09-17 12:03:42
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/themes/responsive/templates/addons/tags/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:108458998955fa3b9e5d1d48-16075437%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '9ea9fb60a21341006ce48803f613b9746721e87e' =>
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/themes/responsive/templates/addons/tags/hooks/index/scripts.post.tpl',
      1 => 1441256980,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '108458998955fa3b9e5d1d48-16075437',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'runtime' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa3b9e5eb294_38178876',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa3b9e5eb294_38178876')) {function content_55fa3b9e5eb294_38178876($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/opt/lampp/htdocs/sportslinkshop/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('addons.tags.add_a_tag','addons.tags.add_a_tag'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><script type="text/javascript">
(function(_, $) {
    _.tr({
		addons_tags_add_a_tag: '<?php echo strtr($_smarty_tpl->__("addons.tags.add_a_tag"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
    });
}(Tygh, Tygh.$));
</script><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/tags/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/tags/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><script type="text/javascript">
(function(_, $) {
    _.tr({
		addons_tags_add_a_tag: '<?php echo strtr($_smarty_tpl->__("addons.tags.add_a_tag"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
    });
}(Tygh, Tygh.$));
</script><?php }?><?php }} ?>
