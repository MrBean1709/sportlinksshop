<?php /* Smarty version Smarty-3.1.18, created on 2015-09-17 12:03:45
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/themes/responsive/templates/views/block_manager/render/location.tpl" */ ?>
<?php /*%%SmartyHeaderCode:47619617955fa3ba1289241-98223583%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'c212ff4d15dc6952da32e52412dba78b9ae6ab80' =>
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/themes/responsive/templates/views/block_manager/render/location.tpl',
      1 => 1441256992,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '47619617955fa3ba1289241-98223583',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'containers' => 0,
    'show_entry_page' => 0,
    'ldelim' => 0,
    'rdelim' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa3ba12b11b4_30774385',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa3ba12b11b4_30774385')) {function content_55fa3ba12b11b4_30774385($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('choose_your_country'));
?>

<?php if ($_smarty_tpl->tpl_vars['containers']->value['top_panel']) {?>
<div class="tygh-top-panel clearfix">
    <?php echo $_smarty_tpl->tpl_vars['containers']->value['top_panel'];?>

</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['containers']->value['header']) {?>
<div class="tygh-header clearfix">
    <?php echo $_smarty_tpl->tpl_vars['containers']->value['header'];?>

</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['containers']->value['content']) {?>
<div class="tygh-content clearfix">
    <?php echo $_smarty_tpl->tpl_vars['containers']->value['content'];?>

</div>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['containers']->value['footer']) {?>
<div class="tygh-footer clearfix" id="tygh_footer">
    <?php echo $_smarty_tpl->tpl_vars['containers']->value['footer'];?>

</div>
<?php }?>

<?php if (fn_allowed_for("ULTIMATE")) {?>

    <?php if ($_smarty_tpl->tpl_vars['show_entry_page']->value) {?>
        <div id="entry_page"></div>
            <script type="text/javascript">
                $('#entry_page').ceDialog('open', <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
href: fn_url('companies.entry_page'), resizable: false, title: '<?php echo $_smarty_tpl->__("choose_your_country");?>
', width: 325, height: 420, dialogClass: 'entry-page'<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);
            </script>
    <?php }?>
<?php }?>

<?php if (fn_check_meta_redirect($_REQUEST['meta_redirect_url'])) {?>
    <meta http-equiv="refresh" content="1;url=<?php echo htmlspecialchars(fn_url(fn_check_meta_redirect($_REQUEST['meta_redirect_url'])), ENT_QUOTES, 'UTF-8');?>
" />
<?php }?><?php }} ?>
