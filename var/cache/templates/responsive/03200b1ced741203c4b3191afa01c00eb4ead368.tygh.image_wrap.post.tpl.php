<?php /* Smarty version Smarty-3.1.18, created on 2015-09-17 12:03:52
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/themes/responsive/templates/addons/1clue_related_products_extended/hooks/products/image_wrap.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:125785429955fa3ba87ee955-54458371%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '03200b1ced741203c4b3191afa01c00eb4ead368' =>
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/themes/responsive/templates/addons/1clue_related_products_extended/hooks/products/image_wrap.post.tpl',
      1 => 1441256965,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '125785429955fa3ba87ee955-54458371',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'runtime' => 0,
    'products_related' => 0,
    'product' => 0,
    'image_pair' => 0,
    'available_clue_products' => 0,
    'settings' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa3ba8865aa0_37611281',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa3ba8865aa0_37611281')) {function content_55fa3ba8865aa0_37611281($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/opt/lampp/htdocs/sportslinkshop/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/opt/lampp/htdocs/sportslinkshop/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['products_related']->value) {?>
    <p class="title-related-product">Also Available</p>
    <?php $_smarty_tpl->tpl_vars["available_clue_products"] = new Smarty_variable(array(), null, 0);?>
    <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['products_related']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["product"]->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['product']->value) {?>
            <?php  $_smarty_tpl->tpl_vars["image_pair"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["image_pair"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["image_pair"]->key => $_smarty_tpl->tpl_vars["image_pair"]->value) {
$_smarty_tpl->tpl_vars["image_pair"]->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['image_pair']->value['type']=="M") {?>
                    <?php $_smarty_tpl->createLocalArrayVariable('available_clue_products', null, 0);
$_smarty_tpl->tpl_vars['available_clue_products']->value[] = $_smarty_tpl->tpl_vars['image_pair']->value;?>
                <?php }?>
            <?php } ?>
        <?php }?>
    <?php } ?>

    <div id="available_clue_products" class="<?php if (!empty($_smarty_tpl->tpl_vars['available_clue_products']->value)&&count($_smarty_tpl->tpl_vars['available_clue_products']->value)>4) {?>ty-thumbs-wrapper owl-carousel cm-image-gallery<?php }?> clue_related_product_wrapper">
    <?php  $_smarty_tpl->tpl_vars["image_pair"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["image_pair"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['available_clue_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["image_pair"]->key => $_smarty_tpl->tpl_vars["image_pair"]->value) {
$_smarty_tpl->tpl_vars["image_pair"]->_loop = true;
?>
        <div class="cm-gallery-item cm-item-gallery">
            <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['image_pair']->value['object_id'])), ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('no_ids'=>true,'images'=>$_smarty_tpl->tpl_vars['image_pair']->value,'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height']), 0);?>

            </a>
        </div>
    <?php } ?>
    </div>

<style type="text/css">
.title-related-product {
    clear: both;
    font-size: 14px;
    font-weight: bold;
    padding-top: 20px;
    text-align: left;
}
.clue_related_product_wrapper {
    clear: both;
}
.clue_related_product:hover .ty-icon-left-circle, .clue_related_product:hover .ty-icon-right-circle {
    visibility: visible
}
#available_clue_products{
    opacity: 0;
}
</style>

<?php echo smarty_function_script(array('src'=>"js/lib/owlcarousel/owl.carousel.min.js"),$_smarty_tpl);?>

<script type="text/javascript">
(function(_, $) {
    $(document).ready(function() {
        var width_clue_wrapper = $('a[id^=det_img_link_]').width();
        $('.clue_related_product_wrapper').width(width_clue_wrapper);
        $('#available_clue_products').css("opacity", 1);

        <?php if (!empty($_smarty_tpl->tpl_vars['available_clue_products']->value)&&count($_smarty_tpl->tpl_vars['available_clue_products']->value)>4) {?>
            $('#available_clue_products}').owlCarousel({
                items: 4,
                autoPlay : false,
                theme : 'clue_related_product',
                itemsDesktop : [1199,4],
                itemsDesktopSmall : [979,4],
                itemsTablet : [768,4],
                itemsMobile : [479,4],
                navigation : true,
                pagination : false,
                navigationText : ['<i class="icon-left-circle ty-icon-left-circle"></i>', '<i class="icon-right-circle ty-icon-right-circle"></i>']
            });
        <?php } else { ?>
            $('#available_clue_products > div').css( { width : parseInt(width_clue_wrapper / 4), float : 'left'} );
        <?php }?>
    });
}(Tygh, Tygh.$));
</script>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/1clue_related_products_extended/hooks/products/image_wrap.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/1clue_related_products_extended/hooks/products/image_wrap.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['products_related']->value) {?>
    <p class="title-related-product">Also Available</p>
    <?php $_smarty_tpl->tpl_vars["available_clue_products"] = new Smarty_variable(array(), null, 0);?>
    <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['products_related']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["product"]->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['product']->value) {?>
            <?php  $_smarty_tpl->tpl_vars["image_pair"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["image_pair"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["image_pair"]->key => $_smarty_tpl->tpl_vars["image_pair"]->value) {
$_smarty_tpl->tpl_vars["image_pair"]->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['image_pair']->value['type']=="M") {?>
                    <?php $_smarty_tpl->createLocalArrayVariable('available_clue_products', null, 0);
$_smarty_tpl->tpl_vars['available_clue_products']->value[] = $_smarty_tpl->tpl_vars['image_pair']->value;?>
                <?php }?>
            <?php } ?>
        <?php }?>
    <?php } ?>

    <div id="available_clue_products" class="<?php if (!empty($_smarty_tpl->tpl_vars['available_clue_products']->value)&&count($_smarty_tpl->tpl_vars['available_clue_products']->value)>4) {?>ty-thumbs-wrapper owl-carousel cm-image-gallery<?php }?> clue_related_product_wrapper">
    <?php  $_smarty_tpl->tpl_vars["image_pair"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["image_pair"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['available_clue_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["image_pair"]->key => $_smarty_tpl->tpl_vars["image_pair"]->value) {
$_smarty_tpl->tpl_vars["image_pair"]->_loop = true;
?>
        <div class="cm-gallery-item cm-item-gallery">
            <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['image_pair']->value['object_id'])), ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('no_ids'=>true,'images'=>$_smarty_tpl->tpl_vars['image_pair']->value,'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height']), 0);?>

            </a>
        </div>
    <?php } ?>
    </div>

<style type="text/css">
.title-related-product {
    clear: both;
    font-size: 14px;
    font-weight: bold;
    padding-top: 20px;
    text-align: left;
}
.clue_related_product_wrapper {
    clear: both;
}
.clue_related_product:hover .ty-icon-left-circle, .clue_related_product:hover .ty-icon-right-circle {
    visibility: visible
}
#available_clue_products{
    opacity: 0;
}
</style>

<?php echo smarty_function_script(array('src'=>"js/lib/owlcarousel/owl.carousel.min.js"),$_smarty_tpl);?>

<script type="text/javascript">
(function(_, $) {
    $(document).ready(function() {
        var width_clue_wrapper = $('a[id^=det_img_link_]').width();
        $('.clue_related_product_wrapper').width(width_clue_wrapper);
        $('#available_clue_products').css("opacity", 1);

        <?php if (!empty($_smarty_tpl->tpl_vars['available_clue_products']->value)&&count($_smarty_tpl->tpl_vars['available_clue_products']->value)>4) {?>
            $('#available_clue_products}').owlCarousel({
                items: 4,
                autoPlay : false,
                theme : 'clue_related_product',
                itemsDesktop : [1199,4],
                itemsDesktopSmall : [979,4],
                itemsTablet : [768,4],
                itemsMobile : [479,4],
                navigation : true,
                pagination : false,
                navigationText : ['<i class="icon-left-circle ty-icon-left-circle"></i>', '<i class="icon-right-circle ty-icon-right-circle"></i>']
            });
        <?php } else { ?>
            $('#available_clue_products > div').css( { width : parseInt(width_clue_wrapper / 4), float : 'left'} );
        <?php }?>
    });
}(Tygh, Tygh.$));
</script>
<?php }?>
<?php }?><?php }} ?>
