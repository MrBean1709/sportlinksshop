<?php /* Smarty version Smarty-3.1.18, created on 2015-09-18 11:53:22
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/addons/help_tutorial/hooks/index/content_top.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:154957277255fa36f73dd911-05356156%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2aff64cfeac108b92732e779fe59a58ab2f39e8' => 
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/addons/help_tutorial/hooks/index/content_top.pre.tpl',
      1 => 1442547388,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '154957277255fa36f73dd911-05356156',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa36f73fcc35_25533818',
  'variables' => 
  array (
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa36f73fcc35_25533818')) {function content_55fa36f73fcc35_25533818($_smarty_tpl) {?><?php if (($_smarty_tpl->tpl_vars['runtime']->value['controller']=="block_manager"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/help_tutorial/components/video.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item'=>"RseUfuFdctg"), 0);?>

<?php } elseif (($_smarty_tpl->tpl_vars['runtime']->value['controller']=="themes"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/help_tutorial/components/video.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item'=>"BVOLfcROTyg"), 0);?>

<?php } elseif (($_smarty_tpl->tpl_vars['runtime']->value['controller']=="store_import"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="index")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/help_tutorial/components/video.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item'=>"cCJOoAZnCqk"), 0);?>

<?php }?>
<?php }} ?>
