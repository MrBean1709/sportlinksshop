<?php /* Smarty version Smarty-3.1.18, created on 2015-07-03 22:16:43
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/views/promotions/components/bonus.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19692224125596994b3fdeb3-63492835%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'ff3e0944274e164cf78d69f411cdbb9e060b4d19' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/views/promotions/components/bonus.tpl',
      1 => 1418020420,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '19692224125596994b3fdeb3-63492835',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'bonus_data' => 0,
    'item_id' => 0,
    'l' => 0,
    'prefix' => 0,
    'schema' => 0,
    '_items' => 0,
    '_k' => 0,
    'v' => 0,
    'elm_id' => 0,
    'promotion_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5596994b5308d6_49396011',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5596994b5308d6_49396011')) {function content_5596994b5308d6_49396011($_smarty_tpl) {?><?php if (!is_callable('smarty_function_include_ext')) include '/home/lostus/public_html/sportslinkshop/app/functions/smarty_plugins/function.include_ext.php';
?><?php
fn_preload_lang_vars(array('remove','yes','no_data'));
?>
<?php $_smarty_tpl->tpl_vars["l"] = new Smarty_variable("promotion_bonus_".((string)$_smarty_tpl->tpl_vars['bonus_data']->value['bonus']), null, 0);?>

<div class="option clearfix cm-row-item">
    <div class="pull-right">
        <a class="hand icon-trash cm-delete-row cm-tooltip" name="remove" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("remove");?>
"></a>
    </div>
    <label><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['l']->value);?>
:&nbsp;</label>
    <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[bonus]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bonus_data']->value['bonus'], ENT_QUOTES, 'UTF-8');?>
" />

    <?php if ($_smarty_tpl->tpl_vars['schema']->value['bonuses'][$_smarty_tpl->tpl_vars['bonus_data']->value['bonus']]['type']=="input") {?>
    <input class="input-text" type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[value]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bonus_data']->value['value'], ENT_QUOTES, 'UTF-8');?>
" />

    <?php } elseif ($_smarty_tpl->tpl_vars['schema']->value['bonuses'][$_smarty_tpl->tpl_vars['bonus_data']->value['bonus']]['type']=="hidden") {?>
    <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[value]" value="Y" /><?php echo $_smarty_tpl->__("yes");?>


    <?php } elseif ($_smarty_tpl->tpl_vars['schema']->value['bonuses'][$_smarty_tpl->tpl_vars['bonus_data']->value['bonus']]['type']=="checkbox") {?>
    <input class="checkbox" type="checkbox" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[value]" value="Y" <?php if ($_smarty_tpl->tpl_vars['bonus_data']->value['value']=="Y") {?>checked="checked"<?php }?> />

    <?php } elseif ($_smarty_tpl->tpl_vars['schema']->value['bonuses'][$_smarty_tpl->tpl_vars['bonus_data']->value['bonus']]['type']=="select") {?>
    <?php $_smarty_tpl->tpl_vars["_items"] = new Smarty_variable(fn_get_promotion_variants((($tmp = @$_smarty_tpl->tpl_vars['schema']->value['bonuses'][$_smarty_tpl->tpl_vars['bonus_data']->value['bonus']]['variants'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['schema']->value['bonuses'][$_smarty_tpl->tpl_vars['bonus_data']->value['bonus']]['variants_function'] : $tmp)), null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['_items']->value) {?>
    <select name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[value]">
        <?php  $_smarty_tpl->tpl_vars["v"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["v"]->_loop = false;
 $_smarty_tpl->tpl_vars["_k"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["v"]->key => $_smarty_tpl->tpl_vars["v"]->value) {
$_smarty_tpl->tpl_vars["v"]->_loop = true;
 $_smarty_tpl->tpl_vars["_k"]->value = $_smarty_tpl->tpl_vars["v"]->key;
?>
            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_k']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['_k']->value==$_smarty_tpl->tpl_vars['bonus_data']->value['value']) {?>selected="selected"<?php }?>><?php if ($_smarty_tpl->tpl_vars['schema']->value['bonuses'][$_smarty_tpl->tpl_vars['bonus_data']->value['bonus']]['variants_function']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['v']->value);?>
<?php }?></option>
        <?php } ?>
    </select>
    <?php } else { ?>
    <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[value]" value="" />
    <p><?php echo $_smarty_tpl->__("no_data");?>
</p>
    <?php }?>

    <?php } elseif ($_smarty_tpl->tpl_vars['schema']->value['bonuses'][$_smarty_tpl->tpl_vars['bonus_data']->value['bonus']]['type']=="picker") {?>
        <?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['schema']->value['bonuses'][$_smarty_tpl->tpl_vars['bonus_data']->value['bonus']]['picker_props']['picker'],'data_id'=>"objects_".((string)$_smarty_tpl->tpl_vars['elm_id']->value),'input_name'=>((string)$_smarty_tpl->tpl_vars['prefix']->value)."[value]",'item_ids'=>$_smarty_tpl->tpl_vars['bonus_data']->value['value'],'params_array'=>$_smarty_tpl->tpl_vars['schema']->value['bonuses'][$_smarty_tpl->tpl_vars['bonus_data']->value['bonus']]['picker_props']['params'],'owner_company_id'=>$_smarty_tpl->tpl_vars['promotion_data']->value['company_id'],'but_meta'=>'pull-left'),$_smarty_tpl);?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['schema']->value['bonuses'][$_smarty_tpl->tpl_vars['bonus_data']->value['bonus']]['discount_bonuses']) {?>
        <select name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[discount_bonus]">
            <?php  $_smarty_tpl->tpl_vars["v"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["v"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['schema']->value['bonuses'][$_smarty_tpl->tpl_vars['bonus_data']->value['bonus']]['discount_bonuses']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["v"]->key => $_smarty_tpl->tpl_vars["v"]->value) {
$_smarty_tpl->tpl_vars["v"]->_loop = true;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value==$_smarty_tpl->tpl_vars['bonus_data']->value['discount_bonus']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['v']->value);?>
</option>
            <?php } ?>
        </select>

        <input class="input-medium cm-numeric" data-a-dec="." data-a-sep="" data-a-sign="" type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[discount_value]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bonus_data']->value['discount_value'], ENT_QUOTES, 'UTF-8');?>
" />
        <script type="text/javascript">
            $('.cm-numeric').autoNumeric('init');
        </script>
    <?php }?>
</div><?php }} ?>
