<?php /* Smarty version Smarty-3.1.18, created on 2015-06-10 18:34:30
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/common/section.tpl" */ ?>
<?php /*%%SmartyHeaderCode:447370260557812b6b92d20-81493985%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '3dec57a5d59f70ce10f3f7a253097696102126ca' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/common/section.tpl',
      1 => 1418020415,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '447370260557812b6b92d20-81493985',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'rnd' => 0,
    'section_content' => 0,
    'section_state' => 0,
    'config' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_557812b6bbf6f2_94132279',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557812b6bbf6f2_94132279')) {function content_557812b6bbf6f2_94132279($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/home/lostus/public_html/sportslinkshop/app/lib/other/smarty/plugins/function.math.php';
?><?php
fn_preload_lang_vars(array('close'));
?>
<?php echo smarty_function_math(array('equation'=>"rand()",'assign'=>"rnd"),$_smarty_tpl);?>

<div class="clear" id="ds_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rnd']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="section-border">
        <?php echo $_smarty_tpl->tpl_vars['section_content']->value;?>

        <?php if ($_smarty_tpl->tpl_vars['section_state']->value) {?>
            <p align="right">
                <a href="<?php echo htmlspecialchars(fn_url(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"close_section=".((string)$_smarty_tpl->tpl_vars['key']->value))), ENT_QUOTES, 'UTF-8');?>
" class="underlined"><?php echo $_smarty_tpl->__("close");?>
</a>
            </p>
        <?php }?>
    </div>
</div><?php }} ?>
