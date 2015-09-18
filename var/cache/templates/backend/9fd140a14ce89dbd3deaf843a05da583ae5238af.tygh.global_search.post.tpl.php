<?php /* Smarty version Smarty-3.1.18, created on 2015-06-08 16:54:52
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/twigmo/hooks/index/global_search.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14989595865575585c0e3286-84893163%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '9fd140a14ce89dbd3deaf843a05da583ae5238af' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/twigmo/hooks/index/global_search.post.tpl',
      1 => 1418020414,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14989595865575585c0e3286-84893163',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5575585c1120a2_63631937',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5575585c1120a2_63631937')) {function content_5575585c1120a2_63631937($_smarty_tpl) {?><?php
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

<?php }?><?php }} ?>
