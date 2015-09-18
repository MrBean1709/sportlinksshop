<?php /* Smarty version Smarty-3.1.18, created on 2015-09-18 11:53:31
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/buttons/multiple_buttons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:37850223355fa3847c829e6-02648246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1965413a1f997dfbba3831b00c4c55cb45047ea3' => 
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/buttons/multiple_buttons.tpl',
      1 => 1442547470,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '37850223355fa3847c829e6-02648246',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa3847c9c9c0_77646603',
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
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa3847c9c9c0_77646603')) {function content_55fa3847c9c9c0_77646603($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/opt/lampp/htdocs/sportslinkshop/app/functions/smarty_plugins/function.script.php';
?><?php echo smarty_function_script(array('src'=>"js/tygh/node_cloning.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars["tag_level"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['tag_level']->value)===null||$tmp==='' ? "1" : $tmp), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['only_delete']->value!="Y") {?><?php if (!$_smarty_tpl->tpl_vars['hide_add']->value) {?><?php echo $_smarty_tpl->getSubTemplate ("buttons/add_empty_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_onclick'=>"Tygh."."$"."('#box_' + this.id).cloneNode(".((string)$_smarty_tpl->tpl_vars['tag_level']->value)."); ".((string)$_smarty_tpl->tpl_vars['on_add']->value),'item_id'=>$_smarty_tpl->tpl_vars['item_id']->value), 0);?>
<?php }?><?php if (!$_smarty_tpl->tpl_vars['hide_clone']->value) {?><?php echo $_smarty_tpl->getSubTemplate ("buttons/clone_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_onclick'=>"Tygh."."$"."('#box_' + this.id).cloneNode(".((string)$_smarty_tpl->tpl_vars['tag_level']->value).", true);",'item_id'=>$_smarty_tpl->tpl_vars['item_id']->value), 0);?>
<?php }?><?php }?><?php echo $_smarty_tpl->getSubTemplate ("buttons/remove_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('only_delete'=>$_smarty_tpl->tpl_vars['only_delete']->value,'but_class'=>"cm-delete-row"), 0);?>

<?php }} ?>
