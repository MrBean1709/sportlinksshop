<?php /* Smarty version Smarty-3.1.18, created on 2015-09-18 11:53:23
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/addons/twigmo/hooks/index/global_search.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:152212815155fa36f784b5f1-65403038%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '686d6abf30db77e8ecc145fe284251d9ec979d28' => 
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/addons/twigmo/hooks/index/global_search.post.tpl',
      1 => 1442547453,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '152212815155fa36f784b5f1-65403038',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa36f7854711_88384702',
  'variables' => 
  array (
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa36f7854711_88384702')) {function content_55fa36f7854711_88384702($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('twgadmin_mobile_app'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['twigmo']['admin_connection']['access_id']) {?>

    <div class="twg-mobile-app-link">
        <a href="<?php echo htmlspecialchars(fn_url("twigmo_admin_app.view"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("twgadmin_mobile_app");?>
</a>
    </div>

    <script type="text/javascript">
        (function(_, $) {
            $(document).ready(function() {
                $('div.twg-mobile-app-link').detach().insertBefore('ul.nav.hover-show.nav-pills').show();
            });
        }(Tygh, Tygh.$));
    </script>

<?php }?>
<?php }} ?>
