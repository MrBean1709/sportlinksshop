<?php /* Smarty version Smarty-3.1.18, created on 2015-09-18 11:53:19
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/common/styles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:94996084555fa36bcb94b11-29719400%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '401f5bfcfa8df09e7256ccd0e85f9222768d7759' => 
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/common/styles.tpl',
      1 => 1442547494,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '94996084555fa36bcb94b11-29719400',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa36bcbadfe9_32314293',
  'variables' => 
  array (
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa36bcbadfe9_32314293')) {function content_55fa36bcbadfe9_32314293($_smarty_tpl) {?><?php if (!is_callable('smarty_block_styles')) include '/opt/lampp/htdocs/sportslinkshop/app/functions/smarty_plugins/block.styles.php';
if (!is_callable('smarty_function_style')) include '/opt/lampp/htdocs/sportslinkshop/app/functions/smarty_plugins/function.style.php';
if (!is_callable('smarty_block_hook')) include '/opt/lampp/htdocs/sportslinkshop/app/functions/smarty_plugins/block.hook.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('styles', array()); $_block_repeat=true; echo smarty_block_styles(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php echo smarty_function_style(array('src'=>"lib/ui/jqueryui.css"),$_smarty_tpl);?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"index:styles")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"index:styles"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo smarty_function_style(array('src'=>"styles.less"),$_smarty_tpl);?>

        <?php echo smarty_function_style(array('src'=>"glyphs.css"),$_smarty_tpl);?>

        <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor']||$_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']) {?>
        <?php echo smarty_function_style(array('src'=>"design_mode.css"),$_smarty_tpl);?>

        <?php }?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/statuses/components/styles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"index:styles"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_styles(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
