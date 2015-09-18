<?php /* Smarty version Smarty-3.1.18, created on 2015-06-08 16:54:50
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/common/loading_box.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8999957355575585a9486e2-37114247%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'adbb6437888df878808d67791851fdbaea906702' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/common/loading_box.tpl',
      1 => 1418020415,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8999957355575585a9486e2-37114247',
  'function' =>
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5575585a954aa1_65392503',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5575585a954aa1_65392503')) {function content_5575585a954aa1_65392503($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('loading'));
?>
<div id="ajax_overlay" class="ajax-overlay"></div>
<div id="ajax_loading_box" class="hidden ajax-loading-box">
    <strong><?php echo $_smarty_tpl->__("loading");?>
</strong>
</div>
<?php }} ?>
