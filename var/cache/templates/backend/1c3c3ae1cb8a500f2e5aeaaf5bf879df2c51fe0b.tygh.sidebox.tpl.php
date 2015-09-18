<?php /* Smarty version Smarty-3.1.18, created on 2015-06-08 16:54:51
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/common/sidebox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11245105535575585b96db43-59263181%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '1c3c3ae1cb8a500f2e5aeaaf5bf879df2c51fe0b' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/common/sidebox.tpl',
      1 => 1418020415,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11245105535575585b96db43-59263181',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'content' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5575585b9899f8_07141440',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5575585b9899f8_07141440')) {function content_5575585b9899f8_07141440($_smarty_tpl) {?><?php if (trim($_smarty_tpl->tpl_vars['content']->value)) {?>
    <div class="sidebar-row">
        <h6><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</h6>
        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['content']->value)===null||$tmp==='' ? "&nbsp;" : $tmp);?>

    </div>
    <hr />
<?php }?><?php }} ?>
