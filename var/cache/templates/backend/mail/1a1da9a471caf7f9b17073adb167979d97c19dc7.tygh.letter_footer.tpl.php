<?php /* Smarty version Smarty-3.1.18, created on 2015-06-13 06:27:10
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/mail/templates/common/letter_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1218648202557b5cbe7baee9-42004378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '1a1da9a471caf7f9b17073adb167979d97c19dc7' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/mail/templates/common/letter_footer.tpl',
      1 => 1418020407,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1218648202557b5cbe7baee9-42004378',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_557b5cbe7c8738_39094416',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557b5cbe7c8738_39094416')) {function content_557b5cbe7c8738_39094416($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('admin_text_letter_footer'));
?>
<p>
    <?php echo $_smarty_tpl->__("admin_text_letter_footer",array("[company_name]"=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_name']));?>

</p>
</body>
</html><?php }} ?>
