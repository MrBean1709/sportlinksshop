<?php /* Smarty version Smarty-3.1.18, created on 2015-09-17 17:02:38
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/views/sales_reports/components/graph_bar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:59832421755fa81ae1c2608-53499796%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'd19238e1da8214f4b6f09410e2c8570049b19b0b' =>
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/views/sales_reports/components/graph_bar.tpl',
      1 => 1441256937,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '59832421755fa81ae1c2608-53499796',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'value_width' => 0,
    'color' => 0,
    'bar_width' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa81ae275861_57787413',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa81ae275861_57787413')) {function content_55fa81ae275861_57787413($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/opt/lampp/htdocs/sportslinkshop/app/lib/other/smarty/plugins/function.math.php';
?><?php echo smarty_function_math(array('equation'=>"floor(width / 20) + 1",'assign'=>"color",'width'=>$_smarty_tpl->tpl_vars['value_width']->value),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['color']->value>5) {?>
    <?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("5", null, 0);?>
<?php }?>
<div class="progress" <?php if ($_smarty_tpl->tpl_vars['bar_width']->value) {?> style="width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bar_width']->value, ENT_QUOTES, 'UTF-8');?>
;"<?php }?> align="left"><div class="bar" <?php if ($_smarty_tpl->tpl_vars['value_width']->value>0) {?>class="graph-bar-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['color']->value, ENT_QUOTES, 'UTF-8');?>
" style="width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value_width']->value, ENT_QUOTES, 'UTF-8');?>
%;"<?php }?>></div></div><?php }} ?>
