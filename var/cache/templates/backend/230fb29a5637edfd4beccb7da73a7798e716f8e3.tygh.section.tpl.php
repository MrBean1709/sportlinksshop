<?php /* Smarty version Smarty-3.1.18, created on 2015-09-17 15:12:14
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/common/section.tpl" */ ?>
<?php /*%%SmartyHeaderCode:33700868755fa67ce3acfb1-16194172%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '230fb29a5637edfd4beccb7da73a7798e716f8e3' =>
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/common/section.tpl',
      1 => 1441256915,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '33700868755fa67ce3acfb1-16194172',
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
  'unifunc' => 'content_55fa67ce3c6a49_71294166',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa67ce3c6a49_71294166')) {function content_55fa67ce3c6a49_71294166($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/opt/lampp/htdocs/sportslinkshop/app/lib/other/smarty/plugins/function.math.php';
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
