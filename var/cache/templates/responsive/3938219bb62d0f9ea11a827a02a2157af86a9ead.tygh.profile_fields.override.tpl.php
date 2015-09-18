<?php /* Smarty version Smarty-3.1.18, created on 2015-07-15 14:58:43
         compiled from "/home/lostus/public_html/sportslinkshop/design/themes/responsive/templates/addons/1clue_related_products_extended/hooks/profiles/profile_fields.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:156881940055a5d2b2d7a220-50279284%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '3938219bb62d0f9ea11a827a02a2157af86a9ead' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/themes/responsive/templates/addons/1clue_related_products_extended/hooks/profiles/profile_fields.override.tpl',
      1 => 1436943507,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '156881940055a5d2b2d7a220-50279284',
  'function' =>
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55a5d2b37a8f62_80403266',
  'variables' =>
  array (
    'runtime' => 0,
    'field' => 0,
    'pref_field_name' => 0,
    'data_id' => 0,
    'id_prefix' => 0,
    'section' => 0,
    'settings' => 0,
    'value' => 0,
    'skip_field' => 0,
    '_class' => 0,
    'data_name' => 0,
    'disabled_param' => 0,
    'states' => 0,
    '_country' => 0,
    '_state' => 0,
    'state' => 0,
    'countries' => 0,
    'code' => 0,
    'country' => 0,
    'k' => 0,
    'v' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a5d2b37a8f62_80403266')) {function content_55a5d2b37a8f62_80403266($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/home/lostus/public_html/sportslinkshop/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/home/lostus/public_html/sportslinkshop/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('select_state','select_country','address_residential','address_commercial','select_state','select_country','address_residential','address_commercial'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="ty-control-group ty-profile-field__item ty-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['pref_field_name']->value!=$_smarty_tpl->tpl_vars['field']->value['description']||$_smarty_tpl->tpl_vars['field']->value['required']=="Y") {?>
        <?php if (strpos($_smarty_tpl->tpl_vars['data_id']->value,"city")!==false) {?>
        <?php } else { ?>
        <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" class="ty-control-group__title cm-profile-field <?php if ($_smarty_tpl->tpl_vars['field']->value['required']=="Y") {?>cm-required<?php }?><?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']=="P") {?> cm-phone<?php }?><?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']=="Z") {?> cm-zipcode<?php }?><?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']=="E") {?> cm-email<?php }?> <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']=="Z") {?><?php if ($_smarty_tpl->tpl_vars['section']->value=="S") {?>cm-location-shipping<?php } else { ?>cm-location-billing<?php }?><?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
</label>
        <?php }?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']=="A") {?>
        <?php $_smarty_tpl->tpl_vars['_country'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['General']['default_country'], null, 0);?>
        <?php $_smarty_tpl->tpl_vars['_state'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['value']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['General']['default_state'] : $tmp), null, 0);?>

        <select <?php if ($_smarty_tpl->tpl_vars['field']->value['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['autocomplete_type'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" class="ty-profile-field__select-state cm-state <?php if ($_smarty_tpl->tpl_vars['section']->value=="S") {?>cm-location-shipping<?php } else { ?>cm-location-billing<?php }?> <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_class']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?>" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {?><?php echo $_smarty_tpl->tpl_vars['disabled_param']->value;?>
<?php }?>>
            <option value="">- <?php echo $_smarty_tpl->__("select_state");?>
 -</option>
            <?php if ($_smarty_tpl->tpl_vars['states']->value&&$_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]) {?>
                <?php  $_smarty_tpl->tpl_vars['state'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['state']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['state']->key => $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->_loop = true;
?>
                    <option <?php if ($_smarty_tpl->tpl_vars['_state']->value==$_smarty_tpl->tpl_vars['state']->value['code']) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['code'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['state'], ENT_QUOTES, 'UTF-8');?>
</option>
                <?php } ?>
            <?php }?>
        </select><input <?php if ($_smarty_tpl->tpl_vars['field']->value['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['autocomplete_type'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> type="text" id="elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
_d" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" size="32" maxlength="64" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_state']->value, ENT_QUOTES, 'UTF-8');?>
" disabled="disabled" class="cm-state <?php if ($_smarty_tpl->tpl_vars['section']->value=="S") {?>cm-location-shipping<?php } else { ?>cm-location-billing<?php }?> ty-input-text hidden <?php if ($_smarty_tpl->tpl_vars['_class']->value) {?>disabled<?php }?>"/>

    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']=="O") {?>
        <?php $_smarty_tpl->tpl_vars["_country"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['value']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['General']['default_country'] : $tmp), null, 0);?>
        <select <?php if ($_smarty_tpl->tpl_vars['field']->value['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['autocomplete_type'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" class="ty-profile-field__select-country cm-country <?php if ($_smarty_tpl->tpl_vars['section']->value=="S") {?>cm-location-shipping<?php } else { ?>cm-location-billing<?php }?> <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_class']->value, ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>cm-skip-avail-switch<?php }?>" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {?><?php echo $_smarty_tpl->tpl_vars['disabled_param']->value;?>
<?php }?>>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"profiles:country_selectbox_items")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"profiles:country_selectbox_items"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <option value="">- <?php echo $_smarty_tpl->__("select_country");?>
 -</option>
            <?php  $_smarty_tpl->tpl_vars["country"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["country"]->_loop = false;
 $_smarty_tpl->tpl_vars["code"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["country"]->key => $_smarty_tpl->tpl_vars["country"]->value) {
$_smarty_tpl->tpl_vars["country"]->_loop = true;
 $_smarty_tpl->tpl_vars["code"]->value = $_smarty_tpl->tpl_vars["country"]->key;
?>
            <option <?php if ($_smarty_tpl->tpl_vars['_country']->value==$_smarty_tpl->tpl_vars['code']->value) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
            <?php } ?>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"profiles:country_selectbox_items"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </select>

    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']=="C") {?>
        <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="N" <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {?><?php echo $_smarty_tpl->tpl_vars['disabled_param']->value;?>
<?php }?> />
        <input type="checkbox" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="Y" <?php if ($_smarty_tpl->tpl_vars['value']->value=="Y") {?>checked="checked"<?php }?> class="checkbox <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_class']->value, ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>cm-skip-avail-switch<?php }?>" <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {?><?php echo $_smarty_tpl->tpl_vars['disabled_param']->value;?>
<?php }?> />

    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']=="T") {?>
        <textarea <?php if ($_smarty_tpl->tpl_vars['field']->value['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['autocomplete_type'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="ty-input-textarea <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_class']->value, ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>cm-skip-avail-switch<?php }?>" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" cols="32" rows="3" <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {?><?php echo $_smarty_tpl->tpl_vars['disabled_param']->value;?>
<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
</textarea>

    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']=="D") {?>
        <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>((string)$_smarty_tpl->tpl_vars['id_prefix']->value)."elm_".((string)$_smarty_tpl->tpl_vars['field']->value['field_id']),'date_name'=>((string)$_smarty_tpl->tpl_vars['data_name']->value)."[".((string)$_smarty_tpl->tpl_vars['data_id']->value)."]",'date_val'=>$_smarty_tpl->tpl_vars['value']->value,'start_year'=>"1902",'end_year'=>"0",'extra'=>$_smarty_tpl->tpl_vars['disabled_param']->value), 0);?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>((string)$_smarty_tpl->tpl_vars['id_prefix']->value)."elm_".((string)$_smarty_tpl->tpl_vars['field']->value['field_id']),'date_name'=>((string)$_smarty_tpl->tpl_vars['data_name']->value)."[".((string)$_smarty_tpl->tpl_vars['data_id']->value)."]",'date_val'=>$_smarty_tpl->tpl_vars['value']->value,'start_year'=>"1902",'end_year'=>"0"), 0);?>

        <?php }?>

    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']=="S") {?>
        <select <?php if ($_smarty_tpl->tpl_vars['field']->value['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['autocomplete_type'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" class="ty-profile-field__select <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_class']->value, ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>cm-skip-avail-switch<?php }?>" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {?><?php echo $_smarty_tpl->tpl_vars['disabled_param']->value;?>
<?php }?>>
            <?php if ($_smarty_tpl->tpl_vars['field']->value['required']!="Y") {?>
            <option value="">--</option>
            <?php }?>
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
            <option <?php if ($_smarty_tpl->tpl_vars['value']->value==$_smarty_tpl->tpl_vars['k']->value) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8');?>
</option>
            <?php } ?>
        </select>

    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']=="R") {?>
        <div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
">
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->index++;
 $_smarty_tpl->tpl_vars['v']->first = $_smarty_tpl->tpl_vars['v']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["rfe"]['first'] = $_smarty_tpl->tpl_vars['v']->first;
?>
            <input class="radio <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_class']->value, ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>cm-skip-avail-switch<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" type="radio" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ((!$_smarty_tpl->tpl_vars['value']->value&&$_smarty_tpl->getVariable('smarty')->value['foreach']['rfe']['first'])||$_smarty_tpl->tpl_vars['value']->value==$_smarty_tpl->tpl_vars['k']->value) {?>checked="checked"<?php }?> <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {?><?php echo $_smarty_tpl->tpl_vars['disabled_param']->value;?>
<?php }?> /><span class="radio"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8');?>
</span>
            <?php } ?>
        </div>

    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']=="N") {?>
        <input class="radio <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_class']->value, ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>cm-skip-avail-switch<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" type="radio" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
_residential" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="residential" <?php if (!$_smarty_tpl->tpl_vars['value']->value||$_smarty_tpl->tpl_vars['value']->value=="residential") {?>checked="checked"<?php }?> <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {?><?php echo $_smarty_tpl->tpl_vars['disabled_param']->value;?>
<?php }?> /><span class="radio"><?php echo $_smarty_tpl->__("address_residential");?>
</span>
        <input class="radio <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_class']->value, ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>cm-skip-avail-switch<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" type="radio" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
_commercial" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="commercial" <?php if ($_smarty_tpl->tpl_vars['value']->value=="commercial") {?>checked="checked"<?php }?> <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {?><?php echo $_smarty_tpl->tpl_vars['disabled_param']->value;?>
<?php }?> /><span class="radio"><?php echo $_smarty_tpl->__("address_commercial");?>
</span>

    <?php } else { ?>
        <?php if (strpos($_smarty_tpl->tpl_vars['data_id']->value,"city")!==false) {?>
        <input style="display:none" <?php if ($_smarty_tpl->tpl_vars['field']->value['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['autocomplete_type'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> type="text" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" size="32" value="Singapore" class="ty-input-text <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_class']->value, ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>cm-skip-avail-switch<?php }?>" <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {?><?php echo $_smarty_tpl->tpl_vars['disabled_param']->value;?>
<?php }?> />
        <?php } else { ?>
        <input <?php if ($_smarty_tpl->tpl_vars['field']->value['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['autocomplete_type'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> type="text" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" size="32" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-input-text <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_class']->value, ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>cm-skip-avail-switch<?php }?>" <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {?><?php echo $_smarty_tpl->tpl_vars['disabled_param']->value;?>
<?php }?> />
        <?php }?>
    <?php }?>

    <?php $_smarty_tpl->tpl_vars["pref_field_name"] = new Smarty_variable($_smarty_tpl->tpl_vars['field']->value['description'], null, 0);?>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/1clue_related_products_extended/hooks/profiles/profile_fields.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/1clue_related_products_extended/hooks/profiles/profile_fields.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><div class="ty-control-group ty-profile-field__item ty-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['pref_field_name']->value!=$_smarty_tpl->tpl_vars['field']->value['description']||$_smarty_tpl->tpl_vars['field']->value['required']=="Y") {?>
        <?php if (strpos($_smarty_tpl->tpl_vars['data_id']->value,"city")!==false) {?>
        <?php } else { ?>
        <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" class="ty-control-group__title cm-profile-field <?php if ($_smarty_tpl->tpl_vars['field']->value['required']=="Y") {?>cm-required<?php }?><?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']=="P") {?> cm-phone<?php }?><?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']=="Z") {?> cm-zipcode<?php }?><?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']=="E") {?> cm-email<?php }?> <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']=="Z") {?><?php if ($_smarty_tpl->tpl_vars['section']->value=="S") {?>cm-location-shipping<?php } else { ?>cm-location-billing<?php }?><?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
</label>
        <?php }?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']=="A") {?>
        <?php $_smarty_tpl->tpl_vars['_country'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['General']['default_country'], null, 0);?>
        <?php $_smarty_tpl->tpl_vars['_state'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['value']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['General']['default_state'] : $tmp), null, 0);?>

        <select <?php if ($_smarty_tpl->tpl_vars['field']->value['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['autocomplete_type'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" class="ty-profile-field__select-state cm-state <?php if ($_smarty_tpl->tpl_vars['section']->value=="S") {?>cm-location-shipping<?php } else { ?>cm-location-billing<?php }?> <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_class']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?>" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {?><?php echo $_smarty_tpl->tpl_vars['disabled_param']->value;?>
<?php }?>>
            <option value="">- <?php echo $_smarty_tpl->__("select_state");?>
 -</option>
            <?php if ($_smarty_tpl->tpl_vars['states']->value&&$_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]) {?>
                <?php  $_smarty_tpl->tpl_vars['state'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['state']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['state']->key => $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->_loop = true;
?>
                    <option <?php if ($_smarty_tpl->tpl_vars['_state']->value==$_smarty_tpl->tpl_vars['state']->value['code']) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['code'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['state'], ENT_QUOTES, 'UTF-8');?>
</option>
                <?php } ?>
            <?php }?>
        </select><input <?php if ($_smarty_tpl->tpl_vars['field']->value['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['autocomplete_type'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> type="text" id="elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
_d" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" size="32" maxlength="64" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_state']->value, ENT_QUOTES, 'UTF-8');?>
" disabled="disabled" class="cm-state <?php if ($_smarty_tpl->tpl_vars['section']->value=="S") {?>cm-location-shipping<?php } else { ?>cm-location-billing<?php }?> ty-input-text hidden <?php if ($_smarty_tpl->tpl_vars['_class']->value) {?>disabled<?php }?>"/>

    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']=="O") {?>
        <?php $_smarty_tpl->tpl_vars["_country"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['value']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['General']['default_country'] : $tmp), null, 0);?>
        <select <?php if ($_smarty_tpl->tpl_vars['field']->value['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['autocomplete_type'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" class="ty-profile-field__select-country cm-country <?php if ($_smarty_tpl->tpl_vars['section']->value=="S") {?>cm-location-shipping<?php } else { ?>cm-location-billing<?php }?> <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_class']->value, ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>cm-skip-avail-switch<?php }?>" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {?><?php echo $_smarty_tpl->tpl_vars['disabled_param']->value;?>
<?php }?>>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"profiles:country_selectbox_items")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"profiles:country_selectbox_items"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <option value="">- <?php echo $_smarty_tpl->__("select_country");?>
 -</option>
            <?php  $_smarty_tpl->tpl_vars["country"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["country"]->_loop = false;
 $_smarty_tpl->tpl_vars["code"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["country"]->key => $_smarty_tpl->tpl_vars["country"]->value) {
$_smarty_tpl->tpl_vars["country"]->_loop = true;
 $_smarty_tpl->tpl_vars["code"]->value = $_smarty_tpl->tpl_vars["country"]->key;
?>
            <option <?php if ($_smarty_tpl->tpl_vars['_country']->value==$_smarty_tpl->tpl_vars['code']->value) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
            <?php } ?>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"profiles:country_selectbox_items"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </select>

    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']=="C") {?>
        <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="N" <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {?><?php echo $_smarty_tpl->tpl_vars['disabled_param']->value;?>
<?php }?> />
        <input type="checkbox" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="Y" <?php if ($_smarty_tpl->tpl_vars['value']->value=="Y") {?>checked="checked"<?php }?> class="checkbox <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_class']->value, ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>cm-skip-avail-switch<?php }?>" <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {?><?php echo $_smarty_tpl->tpl_vars['disabled_param']->value;?>
<?php }?> />

    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']=="T") {?>
        <textarea <?php if ($_smarty_tpl->tpl_vars['field']->value['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['autocomplete_type'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="ty-input-textarea <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_class']->value, ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>cm-skip-avail-switch<?php }?>" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" cols="32" rows="3" <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {?><?php echo $_smarty_tpl->tpl_vars['disabled_param']->value;?>
<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
</textarea>

    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']=="D") {?>
        <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>((string)$_smarty_tpl->tpl_vars['id_prefix']->value)."elm_".((string)$_smarty_tpl->tpl_vars['field']->value['field_id']),'date_name'=>((string)$_smarty_tpl->tpl_vars['data_name']->value)."[".((string)$_smarty_tpl->tpl_vars['data_id']->value)."]",'date_val'=>$_smarty_tpl->tpl_vars['value']->value,'start_year'=>"1902",'end_year'=>"0",'extra'=>$_smarty_tpl->tpl_vars['disabled_param']->value), 0);?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>((string)$_smarty_tpl->tpl_vars['id_prefix']->value)."elm_".((string)$_smarty_tpl->tpl_vars['field']->value['field_id']),'date_name'=>((string)$_smarty_tpl->tpl_vars['data_name']->value)."[".((string)$_smarty_tpl->tpl_vars['data_id']->value)."]",'date_val'=>$_smarty_tpl->tpl_vars['value']->value,'start_year'=>"1902",'end_year'=>"0"), 0);?>

        <?php }?>

    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']=="S") {?>
        <select <?php if ($_smarty_tpl->tpl_vars['field']->value['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['autocomplete_type'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" class="ty-profile-field__select <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_class']->value, ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>cm-skip-avail-switch<?php }?>" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {?><?php echo $_smarty_tpl->tpl_vars['disabled_param']->value;?>
<?php }?>>
            <?php if ($_smarty_tpl->tpl_vars['field']->value['required']!="Y") {?>
            <option value="">--</option>
            <?php }?>
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
            <option <?php if ($_smarty_tpl->tpl_vars['value']->value==$_smarty_tpl->tpl_vars['k']->value) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8');?>
</option>
            <?php } ?>
        </select>

    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']=="R") {?>
        <div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
">
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->index++;
 $_smarty_tpl->tpl_vars['v']->first = $_smarty_tpl->tpl_vars['v']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["rfe"]['first'] = $_smarty_tpl->tpl_vars['v']->first;
?>
            <input class="radio <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_class']->value, ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>cm-skip-avail-switch<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" type="radio" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ((!$_smarty_tpl->tpl_vars['value']->value&&$_smarty_tpl->getVariable('smarty')->value['foreach']['rfe']['first'])||$_smarty_tpl->tpl_vars['value']->value==$_smarty_tpl->tpl_vars['k']->value) {?>checked="checked"<?php }?> <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {?><?php echo $_smarty_tpl->tpl_vars['disabled_param']->value;?>
<?php }?> /><span class="radio"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8');?>
</span>
            <?php } ?>
        </div>

    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']=="N") {?>
        <input class="radio <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_class']->value, ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>cm-skip-avail-switch<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" type="radio" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
_residential" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="residential" <?php if (!$_smarty_tpl->tpl_vars['value']->value||$_smarty_tpl->tpl_vars['value']->value=="residential") {?>checked="checked"<?php }?> <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {?><?php echo $_smarty_tpl->tpl_vars['disabled_param']->value;?>
<?php }?> /><span class="radio"><?php echo $_smarty_tpl->__("address_residential");?>
</span>
        <input class="radio <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_class']->value, ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>cm-skip-avail-switch<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" type="radio" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
_commercial" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="commercial" <?php if ($_smarty_tpl->tpl_vars['value']->value=="commercial") {?>checked="checked"<?php }?> <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {?><?php echo $_smarty_tpl->tpl_vars['disabled_param']->value;?>
<?php }?> /><span class="radio"><?php echo $_smarty_tpl->__("address_commercial");?>
</span>

    <?php } else { ?>
        <?php if (strpos($_smarty_tpl->tpl_vars['data_id']->value,"city")!==false) {?>
        <input style="display:none" <?php if ($_smarty_tpl->tpl_vars['field']->value['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['autocomplete_type'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> type="text" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" size="32" value="Singapore" class="ty-input-text <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_class']->value, ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>cm-skip-avail-switch<?php }?>" <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {?><?php echo $_smarty_tpl->tpl_vars['disabled_param']->value;?>
<?php }?> />
        <?php } else { ?>
        <input <?php if ($_smarty_tpl->tpl_vars['field']->value['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['autocomplete_type'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> type="text" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" size="32" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-input-text <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_class']->value, ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>cm-skip-avail-switch<?php }?>" <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {?><?php echo $_smarty_tpl->tpl_vars['disabled_param']->value;?>
<?php }?> />
        <?php }?>
    <?php }?>

    <?php $_smarty_tpl->tpl_vars["pref_field_name"] = new Smarty_variable($_smarty_tpl->tpl_vars['field']->value['description'], null, 0);?>
</div><?php }?><?php }} ?>
