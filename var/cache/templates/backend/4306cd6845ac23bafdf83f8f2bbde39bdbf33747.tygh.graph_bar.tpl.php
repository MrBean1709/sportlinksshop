<?php /* Smarty version Smarty-3.1.18, created on 2015-06-19 18:34:05
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/views/sales_reports/components/graph_bar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:281314265583f01dd41104-36269752%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '4306cd6845ac23bafdf83f8f2bbde39bdbf33747' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/views/sales_reports/components/graph_bar.tpl',
      1 => 1418020420,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '281314265583f01dd41104-36269752',
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
  'unifunc' => 'content_5583f01ddb61c7_85476202',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5583f01ddb61c7_85476202')) {function content_5583f01ddb61c7_85476202($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/home/lostus/public_html/sportslinkshop/app/lib/other/smarty/plugins/function.math.php';
?><?php echo smarty_function_math(array('equation'=>"floor(width / 20) + 1",'assign'=>"color",'width'=>$_smarty_tpl->tpl_vars['value_width']->value),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['color']->value>5) {?>
    <?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("5", null, 0);?>
<?php }?>
<div class="progress" <?php if ($_smarty_tpl->tpl_vars['bar_width']->value) {?> style="width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bar_width']->value, ENT_QUOTES, 'UTF-8');?>
;"<?php }?> align="left"><div class="bar" <?php if ($_smarty_tpl->tpl_vars['value_width']->value>0) {?>class="graph-bar-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['color']->value, ENT_QUOTES, 'UTF-8');?>
" style="width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value_width']->value, ENT_QUOTES, 'UTF-8');?>
%;"<?php }?>></div></div><?php }} ?>
