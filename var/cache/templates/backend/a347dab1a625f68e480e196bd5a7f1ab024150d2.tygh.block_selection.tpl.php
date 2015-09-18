<?php /* Smarty version Smarty-3.1.18, created on 2015-06-22 17:45:18
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/views/block_manager/block_selection.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14928659565587d92e3dcdb4-52461860%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'a347dab1a625f68e480e196bd5a7f1ab024150d2' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/views/block_manager/block_selection.tpl',
      1 => 1418020416,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14928659565587d92e3dcdb4-52461860',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'grid_id' => 0,
    'extra_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5587d92e486a56_66988619',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5587d92e486a56_66988619')) {function content_5587d92e486a56_66988619($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/lostus/public_html/sportslinkshop/app/functions/smarty_plugins/function.script.php';
?><?php
fn_preload_lang_vars(array('manage_existing_block','use_existing_block','create_new_block'));
?>

<?php echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>


<div class="tabs cm-j-tabs">
    <ul class="nav nav-tabs">
        <li id="user_existing_blocks_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid_id']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js active"><a><?php if ($_REQUEST['manage']&&$_REQUEST['manage']=="Y") {?><?php echo $_smarty_tpl->__("manage_existing_block");?>
<?php } else { ?><?php echo $_smarty_tpl->__("use_existing_block");?>
<?php }?></a></li>
        <li id="create_new_blocks_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid_id']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js"><a><?php echo $_smarty_tpl->__("create_new_block");?>
</a></li>
    </ul>
</div>

<div class="cm-tabs-content tabs_content_blocks" id="tabs_content_blocks_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid_id']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div id="content_create_new_blocks_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid_id']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php echo $_smarty_tpl->getSubTemplate ("views/block_manager/components/new_blocks_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('manage'=>(($tmp = @$_REQUEST['manage'])===null||$tmp==='' ? '' : $tmp)), 0);?>

    <!--content_create_new_blocks--></div>

    <div id="content_user_existing_blocks_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid_id']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php echo $_smarty_tpl->getSubTemplate ("views/block_manager/components/existing_blocks_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('manage'=>(($tmp = @$_REQUEST['manage'])===null||$tmp==='' ? '' : $tmp)), 0);?>

    <!--content_user_existing_blocks--></div>
</div><?php }} ?>
