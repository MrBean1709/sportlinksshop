<?php /* Smarty version Smarty-3.1.18, created on 2015-09-17 11:47:08
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/common/sidebox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:89636434655fa37bcf09d06-68004456%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '6ede969f5f4e3a4d31973b9d5d707d070c03339e' =>
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/common/sidebox.tpl',
      1 => 1441256914,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '89636434655fa37bcf09d06-68004456',
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
  'unifunc' => 'content_55fa37bcf124c1_40224969',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa37bcf124c1_40224969')) {function content_55fa37bcf124c1_40224969($_smarty_tpl) {?><?php if (trim($_smarty_tpl->tpl_vars['content']->value)) {?>
    <div class="sidebar-row">
        <h6><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</h6>
        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['content']->value)===null||$tmp==='' ? "&nbsp;" : $tmp);?>

    </div>
    <hr />
<?php }?><?php }} ?>
