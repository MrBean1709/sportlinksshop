<?php /* Smarty version Smarty-3.1.18, created on 2015-06-13 06:24:38
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/hybrid_auth/views/hybrid_auth/provider_keys.tpl" */ ?>
<?php /*%%SmartyHeaderCode:465876369557b5c261398f8-85312557%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '394c1e93dbbff4d99fe403d350966818bf2fc952' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/hybrid_auth/views/hybrid_auth/provider_keys.tpl',
      1 => 1418020411,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '465876369557b5c261398f8-85312557',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'id' => 0,
    'provider' => 0,
    'providers_schema' => 0,
    'key_id' => 0,
    'key' => 0,
    'provider_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_557b5c261755f7_75188054',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557b5c261755f7_75188054')) {function content_557b5c261755f7_75188054($_smarty_tpl) {?><div id="content_keys_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php  $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["key"]->_loop = false;
 $_smarty_tpl->tpl_vars["key_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['providers_schema']->value[$_smarty_tpl->tpl_vars['provider']->value]['keys']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["key"]->key => $_smarty_tpl->tpl_vars["key"]->value) {
$_smarty_tpl->tpl_vars["key"]->_loop = true;
 $_smarty_tpl->tpl_vars["key_id"]->value = $_smarty_tpl->tpl_vars["key"]->key;
?>
        <div class="control-group">
            <label for="section_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label<?php if ($_smarty_tpl->tpl_vars['key']->value['required']) {?> cm-required<?php }?>"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['key']->value['label']);?>
:</label>
            <div class="controls">
                <input type="text" name="provider_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value['db_field'], ENT_QUOTES, 'UTF-8');?>
]" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_data']->value[$_smarty_tpl->tpl_vars['key']->value['db_field']], ENT_QUOTES, 'UTF-8');?>
" id="section_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
            </div>
        </div>
    <?php } ?>
<!--content_keys_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div><?php }} ?>
