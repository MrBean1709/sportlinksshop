<?php /* Smarty version Smarty-3.1.18, created on 2015-09-18 11:53:21
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/common/loading_box.tpl" */ ?>
<?php /*%%SmartyHeaderCode:201125897455fa36be20c3d9-49207674%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3bb4ca510bf78d9432ab43adca821e25cd6c895' => 
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/common/loading_box.tpl',
      1 => 1442547482,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '201125897455fa36be20c3d9-49207674',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa36be210df8_62786439',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa36be210df8_62786439')) {function content_55fa36be210df8_62786439($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('loading'));
?>
<div id="ajax_overlay" class="ajax-overlay"></div>
<div id="ajax_loading_box" class="hidden ajax-loading-box">
    <strong><?php echo $_smarty_tpl->__("loading");?>
</strong>
</div>
<?php }} ?>
