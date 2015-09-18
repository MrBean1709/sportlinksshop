<?php /* Smarty version Smarty-3.1.18, created on 2015-06-13 06:53:00
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/common/colorpicker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:719640151557b62cc79feb3-78301446%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '1072140caf5312a2f108efa3ae9a35dd32364462' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/common/colorpicker.tpl',
      1 => 1418020414,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '719640151557b62cc79feb3-78301446',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'cp_name' => 0,
    'cp_id' => 0,
    'cp_value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_557b62cc7ac289_11527564',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557b62cc7ac289_11527564')) {function content_557b62cc7ac289_11527564($_smarty_tpl) {?><div class="colorpicker">
    <input type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_name']->value, ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_value']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-view="palette" class="cm-colorpicker">
</div><?php }} ?>
