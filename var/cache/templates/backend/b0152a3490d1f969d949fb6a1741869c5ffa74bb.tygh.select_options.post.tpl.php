<?php /* Smarty version Smarty-3.1.18, created on 2015-09-17 11:44:20
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/addons/reward_points/hooks/products/select_options.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:181515163255fa3714946051-11937328%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'b0152a3490d1f969d949fb6a1741869c5ffa74bb' =>
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/addons/reward_points/hooks/products/select_options.post.tpl',
      1 => 1441256905,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '181515163255fa3714946051-11937328',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'vr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa371494f566_86455162',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa371494f566_86455162')) {function content_55fa371494f566_86455162($_smarty_tpl) {?><?php if (floatval($_smarty_tpl->tpl_vars['vr']->value['point_modifier'])) {?>&nbsp;<?php echo $_smarty_tpl->getSubTemplate ("addons/reward_points/common/point_modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('mod_type'=>$_smarty_tpl->tpl_vars['vr']->value['point_modifier_type'],'mod_value'=>$_smarty_tpl->tpl_vars['vr']->value['point_modifier']), 0);?>
<?php }?><?php }} ?>
