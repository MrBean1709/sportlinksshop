<?php /* Smarty version Smarty-3.1.18, created on 2015-06-08 17:08:53
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/buttons/multiple_buttons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:83588348255755ba5069ae9-42656649%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'a4287cb2416ddc2178b6c07c3ce982c969893b0c' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/buttons/multiple_buttons.tpl',
      1 => 1418020414,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '83588348255755ba5069ae9-42656649',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'tag_level' => 0,
    'only_delete' => 0,
    'hide_add' => 0,
    'on_add' => 0,
    'item_id' => 0,
    'hide_clone' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55755ba50bde42_66899784',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55755ba50bde42_66899784')) {function content_55755ba50bde42_66899784($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/lostus/public_html/sportslinkshop/app/functions/smarty_plugins/function.script.php';
?><?php echo smarty_function_script(array('src'=>"js/tygh/node_cloning.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars["tag_level"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['tag_level']->value)===null||$tmp==='' ? "1" : $tmp), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['only_delete']->value!="Y") {?><?php if (!$_smarty_tpl->tpl_vars['hide_add']->value) {?><?php echo $_smarty_tpl->getSubTemplate ("buttons/add_empty_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_onclick'=>"Tygh."."$"."('#box_' + this.id).cloneNode(".((string)$_smarty_tpl->tpl_vars['tag_level']->value)."); ".((string)$_smarty_tpl->tpl_vars['on_add']->value),'item_id'=>$_smarty_tpl->tpl_vars['item_id']->value), 0);?>
<?php }?><?php if (!$_smarty_tpl->tpl_vars['hide_clone']->value) {?><?php echo $_smarty_tpl->getSubTemplate ("buttons/clone_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_onclick'=>"Tygh."."$"."('#box_' + this.id).cloneNode(".((string)$_smarty_tpl->tpl_vars['tag_level']->value).", true);",'item_id'=>$_smarty_tpl->tpl_vars['item_id']->value), 0);?>
<?php }?><?php }?><?php echo $_smarty_tpl->getSubTemplate ("buttons/remove_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('only_delete'=>$_smarty_tpl->tpl_vars['only_delete']->value,'but_class'=>"cm-delete-row"), 0);?>
<?php }} ?>
