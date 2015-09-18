<?php /* Smarty version Smarty-3.1.18, created on 2015-06-13 06:23:15
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/twigmo/hooks/block_manager/settings.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:260809883557b5bd3e8d1f6-66531497%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '328a902ed2c1e73cdd13d6a5628d3e1b32cea16d' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/twigmo/hooks/block_manager/settings.post.tpl',
      1 => 1418020414,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '260809883557b5bd3e8d1f6-66531497',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'is_twigmo_location' => 0,
    'html_id' => 0,
    'block' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_557b5bd3eae185_93535025',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557b5bd3eae185_93535025')) {function content_557b5bd3eae185_93535025($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['is_twigmo_location']->value) {?>
    <div class="control-group cm-no-hide-input">
        <label class="control-label" for="block_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
_hide_header"><?php echo $_smarty_tpl->__('twgadmin_hide_header');?>
:</label>
        <div class="controls">
            <input type="hidden" name="block_data[properties][hide_header]" value="N">
            <input type="checkbox" class="checkbox" name="block_data[properties][hide_header]" value="Y" id="block_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
_hide_header" <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['hide_header']&&$_smarty_tpl->tpl_vars['block']->value['properties']['hide_header']=="Y") {?>checked="checked"<?php }?> >
        </div>
    </div>
<?php }?><?php }} ?>
