<?php /* Smarty version Smarty-3.1.18, created on 2015-09-18 11:53:21
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/common/subheader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:122293914855fa370b51d888-34994963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f2d145c6224c0db438dc591a5c5749775d0f128' => 
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/common/subheader.tpl',
      1 => 1442547494,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '122293914855fa370b51d888-34994963',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa370b52bf95_96951351',
  'variables' => 
  array (
    'notes' => 0,
    'notes_id' => 0,
    'meta' => 0,
    'target' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa370b52bf95_96951351')) {function content_55fa370b52bf95_96951351($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['notes']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/help.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>$_smarty_tpl->tpl_vars['notes']->value,'id'=>$_smarty_tpl->tpl_vars['notes_id']->value), 0);?>

<?php }?>
<h4 class="subheader <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['target']->value) {?> hand<?php }?>" <?php if ($_smarty_tpl->tpl_vars['target']->value) {?>data-toggle="collapse" data-target="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['target']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

    <?php if ($_smarty_tpl->tpl_vars['target']->value) {?><span class="exicon-collapse"></span><?php }?>
</h4>
<?php }} ?>
