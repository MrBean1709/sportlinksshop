<?php /* Smarty version Smarty-3.1.18, created on 2015-09-17 14:37:10
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/themes/responsive/templates/blocks/product_filters/components/variant_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24946216655fa5f967ac814-48779995%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'b17a300953d819b592e6cdcd46673c16658ffc6c' =>
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/themes/responsive/templates/blocks/product_filters/components/variant_item.tpl',
      1 => 1441256985,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '24946216655fa5f967ac814-48779995',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'runtime' => 0,
    'range' => 0,
    'filter' => 0,
    'controller' => 0,
    'cur_features_hash' => 0,
    'filter_qstring' => 0,
    'filter_query_elm' => 0,
    'href' => 0,
    'config' => 0,
    'allow_ajax' => 0,
    'use_ajax' => 0,
    'ajax_div_ids' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa5f968650f9_46709278',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa5f968650f9_46709278')) {function content_55fa5f968650f9_46709278($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/opt/lampp/htdocs/sportslinkshop/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><li class="ty-product-filters__group">
    <?php if (!$_smarty_tpl->tpl_vars['range']->value['checked']) {?>
        <?php $_smarty_tpl->tpl_vars["filter_query_elm"] = new Smarty_variable(fn_add_range_to_url_hash($_REQUEST['features_hash'],$_smarty_tpl->tpl_vars['range']->value,$_smarty_tpl->tpl_vars['filter']->value['field_type']), null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars["filter_query_elm"] = new Smarty_variable(fn_delete_range_from_url($_REQUEST['features_hash'],$_smarty_tpl->tpl_vars['range']->value,$_smarty_tpl->tpl_vars['filter']->value['field_type']), null, 0);?>
    <?php }?>
    <?php if ($_REQUEST['features_hash']) {?>
        <?php $_smarty_tpl->tpl_vars["cur_features_hash"] = new Smarty_variable("&features_hash=".((string)$_REQUEST['features_hash']), null, 0);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['filter']->value['feature_type']=="E"&&(!$_smarty_tpl->tpl_vars['filter']->value['simple_link']||$_smarty_tpl->tpl_vars['filter']->value['selected_ranges']&&$_smarty_tpl->tpl_vars['controller']->value=="product_features")) {?>
        <?php $_smarty_tpl->tpl_vars["href"] = new Smarty_variable(fn_url("product_features.view?variant_id=".((string)$_smarty_tpl->tpl_vars['range']->value['range_id']).((string)$_smarty_tpl->tpl_vars['cur_features_hash']->value)), null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars["href"] = new Smarty_variable(fn_url(fn_link_attach($_smarty_tpl->tpl_vars['filter_qstring']->value,"features_hash=".((string)$_smarty_tpl->tpl_vars['filter_query_elm']->value))), null, 0);?>
    <?php }?>
    <?php $_smarty_tpl->tpl_vars["use_ajax"] = new Smarty_variable(fn_compare_dispatch($_smarty_tpl->tpl_vars['href']->value,$_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
    <a <?php if (!$_smarty_tpl->tpl_vars['range']->value['disabled']||$_smarty_tpl->tpl_vars['range']->value['checked']) {?>href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['filter']->value['feature_type']!="E") {?>rel="nofollow"<?php }?> class="ty-product-filters__item<?php if ($_smarty_tpl->tpl_vars['range']->value['checked']) {?> checked<?php }?><?php if ($_smarty_tpl->tpl_vars['range']->value['disabled']) {?> disabled<?php } elseif ($_smarty_tpl->tpl_vars['allow_ajax']->value&&$_smarty_tpl->tpl_vars['use_ajax']->value) {?> cm-ajax cm-ajax-full-render cm-history<?php }?>" data-ca-scroll=".cm-pagination-container" data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_div_ids']->value, ENT_QUOTES, 'UTF-8');?>
"><span class="ty-filter-icon"><i class="ty-icon-ok ty-filter-icon__check"></i><i class="ty-icon-cancel ty-filter-icon__delete"></i></span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars(fn_text_placeholders($_smarty_tpl->tpl_vars['range']->value['range_name']), ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php if (!$_smarty_tpl->tpl_vars['range']->value['disabled']) {?><span class="ty-product-filters__count">&nbsp;(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['range']->value['products'], ENT_QUOTES, 'UTF-8');?>
)</span><?php }?></a>
</li>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/product_filters/components/variant_item.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/product_filters/components/variant_item.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><li class="ty-product-filters__group">
    <?php if (!$_smarty_tpl->tpl_vars['range']->value['checked']) {?>
        <?php $_smarty_tpl->tpl_vars["filter_query_elm"] = new Smarty_variable(fn_add_range_to_url_hash($_REQUEST['features_hash'],$_smarty_tpl->tpl_vars['range']->value,$_smarty_tpl->tpl_vars['filter']->value['field_type']), null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars["filter_query_elm"] = new Smarty_variable(fn_delete_range_from_url($_REQUEST['features_hash'],$_smarty_tpl->tpl_vars['range']->value,$_smarty_tpl->tpl_vars['filter']->value['field_type']), null, 0);?>
    <?php }?>
    <?php if ($_REQUEST['features_hash']) {?>
        <?php $_smarty_tpl->tpl_vars["cur_features_hash"] = new Smarty_variable("&features_hash=".((string)$_REQUEST['features_hash']), null, 0);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['filter']->value['feature_type']=="E"&&(!$_smarty_tpl->tpl_vars['filter']->value['simple_link']||$_smarty_tpl->tpl_vars['filter']->value['selected_ranges']&&$_smarty_tpl->tpl_vars['controller']->value=="product_features")) {?>
        <?php $_smarty_tpl->tpl_vars["href"] = new Smarty_variable(fn_url("product_features.view?variant_id=".((string)$_smarty_tpl->tpl_vars['range']->value['range_id']).((string)$_smarty_tpl->tpl_vars['cur_features_hash']->value)), null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars["href"] = new Smarty_variable(fn_url(fn_link_attach($_smarty_tpl->tpl_vars['filter_qstring']->value,"features_hash=".((string)$_smarty_tpl->tpl_vars['filter_query_elm']->value))), null, 0);?>
    <?php }?>
    <?php $_smarty_tpl->tpl_vars["use_ajax"] = new Smarty_variable(fn_compare_dispatch($_smarty_tpl->tpl_vars['href']->value,$_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
    <a <?php if (!$_smarty_tpl->tpl_vars['range']->value['disabled']||$_smarty_tpl->tpl_vars['range']->value['checked']) {?>href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['filter']->value['feature_type']!="E") {?>rel="nofollow"<?php }?> class="ty-product-filters__item<?php if ($_smarty_tpl->tpl_vars['range']->value['checked']) {?> checked<?php }?><?php if ($_smarty_tpl->tpl_vars['range']->value['disabled']) {?> disabled<?php } elseif ($_smarty_tpl->tpl_vars['allow_ajax']->value&&$_smarty_tpl->tpl_vars['use_ajax']->value) {?> cm-ajax cm-ajax-full-render cm-history<?php }?>" data-ca-scroll=".cm-pagination-container" data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_div_ids']->value, ENT_QUOTES, 'UTF-8');?>
"><span class="ty-filter-icon"><i class="ty-icon-ok ty-filter-icon__check"></i><i class="ty-icon-cancel ty-filter-icon__delete"></i></span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars(fn_text_placeholders($_smarty_tpl->tpl_vars['range']->value['range_name']), ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php if (!$_smarty_tpl->tpl_vars['range']->value['disabled']) {?><span class="ty-product-filters__count">&nbsp;(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['range']->value['products'], ENT_QUOTES, 'UTF-8');?>
)</span><?php }?></a>
</li>
<?php }?><?php }} ?>
