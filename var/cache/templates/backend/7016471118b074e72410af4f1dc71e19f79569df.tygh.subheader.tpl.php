<?php /* Smarty version Smarty-3.1.18, created on 2015-06-08 16:54:50
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/common/subheader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16426945295575585ae2d301-15884632%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '7016471118b074e72410af4f1dc71e19f79569df' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/common/subheader.tpl',
      1 => 1418020415,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16426945295575585ae2d301-15884632',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'notes' => 0,
    'notes_id' => 0,
    'meta' => 0,
    'target' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5575585ae65d98_93699622',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5575585ae65d98_93699622')) {function content_5575585ae65d98_93699622($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['notes']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/help.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>$_smarty_tpl->tpl_vars['notes']->value,'id'=>$_smarty_tpl->tpl_vars['notes_id']->value), 0);?>

<?php }?>
<h4 class="subheader <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['target']->value) {?> hand<?php }?>" <?php if ($_smarty_tpl->tpl_vars['target']->value) {?>data-toggle="collapse" data-target="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['target']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

    <?php if ($_smarty_tpl->tpl_vars['target']->value) {?><span class="exicon-collapse"></span><?php }?>
</h4><?php }} ?>
