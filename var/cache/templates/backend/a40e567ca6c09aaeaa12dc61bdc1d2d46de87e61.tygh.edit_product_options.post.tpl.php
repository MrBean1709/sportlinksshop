<?php /* Smarty version Smarty-3.1.18, created on 2015-06-10 18:34:30
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/reward_points/hooks/product_options/edit_product_options.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1182552195557812b6589594-18740624%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'a40e567ca6c09aaeaa12dc61bdc1d2d46de87e61' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/reward_points/hooks/product_options/edit_product_options.post.tpl',
      1 => 1418020412,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1182552195557812b6589594-18740624',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'id' => 0,
    'num' => 0,
    'vr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_557812b65fdf84_03691620',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557812b65fdf84_03691620')) {function content_557812b65fdf84_03691620($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('earned_point_modifier','type','points_lower'));
?>
<div class="control-group">
    <label class="control-label" for="point_modifier_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("earned_point_modifier");?>
&nbsp;/ <?php echo $_smarty_tpl->__("type");?>
:</label>
    <div class="controls">
    	<input type="text" id="point_modifier_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="option_data[variants][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][point_modifier]" value="<?php if (!empty($_smarty_tpl->tpl_vars['vr']->value['point_modifier'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vr']->value['point_modifier'], ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>0.000<?php }?>" size="5" class="input-mini" />&nbsp;/&nbsp;<select name="option_data[variants][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][point_modifier_type]">
    	    <option value="A" <?php if (!empty($_smarty_tpl->tpl_vars['vr']->value['point_modifier_type'])&&$_smarty_tpl->tpl_vars['vr']->value['point_modifier_type']=="A") {?>selected="selected"<?php }?>>(<?php echo $_smarty_tpl->__("points_lower");?>
)</option>
    	    <option value="P" <?php if (!empty($_smarty_tpl->tpl_vars['vr']->value['point_modifier_type'])&&$_smarty_tpl->tpl_vars['vr']->value['point_modifier_type']=="P") {?>selected="selected"<?php }?>>(%)</option>
    	</select>
    </div>
</div><?php }} ?>
