<?php /* Smarty version Smarty-3.1.18, created on 2015-06-11 23:54:11
         compiled from "/home/lostus/public_html/sportslinkshop/design/themes/responsive/templates/views/product_features/view_all.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19633187455579af23ef7bc4-62882683%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'c4221930e8eeb1d82adbf116dd2f053e02f0c2f3' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/themes/responsive/templates/views/product_features/view_all.tpl',
      1 => 1418021496,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '19633187455579af23ef7bc4-62882683',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'runtime' => 0,
    'view_all_filter' => 0,
    'filter_qstring' => 0,
    'splitted_filter' => 0,
    'group' => 0,
    'ranges' => 0,
    'index' => 0,
    'params' => 0,
    'range' => 0,
    '_features_hash' => 0,
    'cur_features_hash' => 0,
    'href' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5579af2416c2e1_54516815',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5579af2416c2e1_54516815')) {function content_5579af2416c2e1_54516815($_smarty_tpl) {?><?php if (!is_callable('smarty_function_split')) include '/home/lostus/public_html/sportslinkshop/app/functions/smarty_plugins/function.split.php';
if (!is_callable('smarty_function_set_id')) include '/home/lostus/public_html/sportslinkshop/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['view_all_filter']->value) {?>
<?php $_smarty_tpl->tpl_vars["filter_qstring"] = new Smarty_variable(fn_url($_REQUEST['q']), null, 0);?>
<?php $_smarty_tpl->tpl_vars["filter_qstring"] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['filter_qstring']->value,"result_ids","filter_id","features_hash"), null, 0);?>
<?php echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['view_all_filter']->value,'size'=>"4",'assign'=>"splitted_filter",'preverse_keys'=>true),$_smarty_tpl);?>

<div class="ty-features-all">
<?php  $_smarty_tpl->tpl_vars["group"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["group"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['splitted_filter']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["group"]->key => $_smarty_tpl->tpl_vars["group"]->value) {
$_smarty_tpl->tpl_vars["group"]->_loop = true;
?>
    <?php  $_smarty_tpl->tpl_vars["ranges"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["ranges"]->_loop = false;
 $_smarty_tpl->tpl_vars["index"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['group']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["ranges"]->key => $_smarty_tpl->tpl_vars["ranges"]->value) {
$_smarty_tpl->tpl_vars["ranges"]->_loop = true;
 $_smarty_tpl->tpl_vars["index"]->value = $_smarty_tpl->tpl_vars["ranges"]->key;
?>
    <div class="ty-features-all__group ty-column6"><?php if ($_smarty_tpl->tpl_vars['ranges']->value) {?><?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['index']->value), 0);?>
<ul class="ty-features-all__list"><?php  $_smarty_tpl->tpl_vars["range"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["range"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ranges']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["range"]->key => $_smarty_tpl->tpl_vars["range"]->value) {
$_smarty_tpl->tpl_vars["range"]->_loop = true;
?><?php $_smarty_tpl->tpl_vars["_features_hash"] = new Smarty_variable(fn_add_range_to_url_hash($_smarty_tpl->tpl_vars['params']->value['features_hash'],$_smarty_tpl->tpl_vars['range']->value), null, 0);?><?php $_smarty_tpl->tpl_vars['href'] = new Smarty_variable(fn_link_attach($_smarty_tpl->tpl_vars['filter_qstring']->value,"features_hash=".((string)$_smarty_tpl->tpl_vars['_features_hash']->value)), null, 0);?><li class="ty-features-all__list-item"><a href="<?php if ($_smarty_tpl->tpl_vars['range']->value['feature_type']=="E") {?><?php echo htmlspecialchars(fn_url("product_features.view?variant_id=".((string)$_smarty_tpl->tpl_vars['range']->value['range_id']).((string)$_smarty_tpl->tpl_vars['cur_features_hash']->value)), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['href']->value), ENT_QUOTES, 'UTF-8');?>
<?php }?>" class="ty-features-all__list-a"><?php echo htmlspecialchars(fn_text_placeholders($_smarty_tpl->tpl_vars['range']->value['range_name']), ENT_QUOTES, 'UTF-8');?>
</a></li><?php } ?></ul><?php } else { ?>&nbsp;<?php }?></div><?php } ?><?php } ?></div><?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/product_features/view_all.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/product_features/view_all.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['view_all_filter']->value) {?><?php $_smarty_tpl->tpl_vars["filter_qstring"] = new Smarty_variable(fn_url($_REQUEST['q']), null, 0);?><?php $_smarty_tpl->tpl_vars["filter_qstring"] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['filter_qstring']->value,"result_ids","filter_id","features_hash"), null, 0);?><?php echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['view_all_filter']->value,'size'=>"4",'assign'=>"splitted_filter",'preverse_keys'=>true),$_smarty_tpl);?>
<div class="ty-features-all"><?php  $_smarty_tpl->tpl_vars["group"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["group"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['splitted_filter']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["group"]->key => $_smarty_tpl->tpl_vars["group"]->value) {
$_smarty_tpl->tpl_vars["group"]->_loop = true;
?><?php  $_smarty_tpl->tpl_vars["ranges"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["ranges"]->_loop = false;
 $_smarty_tpl->tpl_vars["index"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['group']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["ranges"]->key => $_smarty_tpl->tpl_vars["ranges"]->value) {
$_smarty_tpl->tpl_vars["ranges"]->_loop = true;
 $_smarty_tpl->tpl_vars["index"]->value = $_smarty_tpl->tpl_vars["ranges"]->key;
?><div class="ty-features-all__group ty-column6"><?php if ($_smarty_tpl->tpl_vars['ranges']->value) {?><?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['index']->value), 0);?>
<ul class="ty-features-all__list"><?php  $_smarty_tpl->tpl_vars["range"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["range"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ranges']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["range"]->key => $_smarty_tpl->tpl_vars["range"]->value) {
$_smarty_tpl->tpl_vars["range"]->_loop = true;
?><?php $_smarty_tpl->tpl_vars["_features_hash"] = new Smarty_variable(fn_add_range_to_url_hash($_smarty_tpl->tpl_vars['params']->value['features_hash'],$_smarty_tpl->tpl_vars['range']->value), null, 0);?><?php $_smarty_tpl->tpl_vars['href'] = new Smarty_variable(fn_link_attach($_smarty_tpl->tpl_vars['filter_qstring']->value,"features_hash=".((string)$_smarty_tpl->tpl_vars['_features_hash']->value)), null, 0);?><li class="ty-features-all__list-item"><a href="<?php if ($_smarty_tpl->tpl_vars['range']->value['feature_type']=="E") {?><?php echo htmlspecialchars(fn_url("product_features.view?variant_id=".((string)$_smarty_tpl->tpl_vars['range']->value['range_id']).((string)$_smarty_tpl->tpl_vars['cur_features_hash']->value)), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['href']->value), ENT_QUOTES, 'UTF-8');?>
<?php }?>" class="ty-features-all__list-a"><?php echo htmlspecialchars(fn_text_placeholders($_smarty_tpl->tpl_vars['range']->value['range_name']), ENT_QUOTES, 'UTF-8');?>
</a></li><?php } ?></ul><?php } else { ?>&nbsp;<?php }?></div><?php } ?><?php } ?></div><?php }?><?php }?><?php }} ?>
