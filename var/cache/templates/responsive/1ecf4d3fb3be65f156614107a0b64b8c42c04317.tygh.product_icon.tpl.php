<?php /* Smarty version Smarty-3.1.18, created on 2015-09-17 12:03:44
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/themes/responsive/templates/views/products/components/product_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:98549672755fa3ba0dee530-28569093%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '1ecf4d3fb3be65f156614107a0b64b8c42c04317' =>
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/themes/responsive/templates/views/products/components/product_icon.tpl',
      1 => 1441256999,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '98549672755fa3ba0dee530-28569093',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'runtime' => 0,
    'product' => 0,
    'obj_id_prefix' => 0,
    'settings' => 0,
    'show_gallery' => 0,
    'image_pair' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa3ba0e701d2_79877454',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa3ba0e701d2_79877454')) {function content_55fa3ba0e701d2_79877454($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/opt/lampp/htdocs/sportslinkshop/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php $_smarty_tpl->_capture_stack[0][] = array("main_icon", null, null); ob_start(); ?>
    <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
">
        <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('obj_id'=>$_smarty_tpl->tpl_vars['obj_id_prefix']->value,'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height']), 0);?>

    </a>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['product']->value['image_pairs']&&$_smarty_tpl->tpl_vars['show_gallery']->value) {?>
<div class="ty-center-block">
    <div class="ty-thumbs-wrapper owl-carousel cm-image-gallery" data-ca-items-count="1" data-ca-items-responsive="true" id="icons_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php if ($_smarty_tpl->tpl_vars['product']->value['main_pair']) {?>
            <div class="cm-gallery-item cm-item-gallery">
                <?php echo Smarty::$_smarty_vars['capture']['main_icon'];?>

            </div>
        <?php }?>
        <?php  $_smarty_tpl->tpl_vars["image_pair"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["image_pair"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['image_pairs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["image_pair"]->key => $_smarty_tpl->tpl_vars["image_pair"]->value) {
$_smarty_tpl->tpl_vars["image_pair"]->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['image_pair']->value) {?>
                <div class="cm-gallery-item cm-item-gallery">
                    <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
">
                        <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('no_ids'=>true,'images'=>$_smarty_tpl->tpl_vars['image_pair']->value,'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height']), 0);?>

                    </a>
                </div>
            <?php }?>
        <?php } ?>
    </div>
</div>
<?php } else { ?>
    <?php echo Smarty::$_smarty_vars['capture']['main_icon'];?>

<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/products/components/product_icon.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/products/components/product_icon.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php $_smarty_tpl->_capture_stack[0][] = array("main_icon", null, null); ob_start(); ?>
    <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
">
        <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('obj_id'=>$_smarty_tpl->tpl_vars['obj_id_prefix']->value,'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height']), 0);?>

    </a>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['product']->value['image_pairs']&&$_smarty_tpl->tpl_vars['show_gallery']->value) {?>
<div class="ty-center-block">
    <div class="ty-thumbs-wrapper owl-carousel cm-image-gallery" data-ca-items-count="1" data-ca-items-responsive="true" id="icons_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php if ($_smarty_tpl->tpl_vars['product']->value['main_pair']) {?>
            <div class="cm-gallery-item cm-item-gallery">
                <?php echo Smarty::$_smarty_vars['capture']['main_icon'];?>

            </div>
        <?php }?>
        <?php  $_smarty_tpl->tpl_vars["image_pair"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["image_pair"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['image_pairs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["image_pair"]->key => $_smarty_tpl->tpl_vars["image_pair"]->value) {
$_smarty_tpl->tpl_vars["image_pair"]->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['image_pair']->value) {?>
                <div class="cm-gallery-item cm-item-gallery">
                    <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
">
                        <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('no_ids'=>true,'images'=>$_smarty_tpl->tpl_vars['image_pair']->value,'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height']), 0);?>

                    </a>
                </div>
            <?php }?>
        <?php } ?>
    </div>
</div>
<?php } else { ?>
    <?php echo Smarty::$_smarty_vars['capture']['main_icon'];?>

<?php }?><?php }?><?php }} ?>
