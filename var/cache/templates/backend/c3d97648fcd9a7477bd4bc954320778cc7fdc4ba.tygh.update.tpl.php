<?php /* Smarty version Smarty-3.1.18, created on 2015-06-13 06:20:28
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/views/pages/update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:767836766557b5b2cea2e56-42836423%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'c3d97648fcd9a7477bd4bc954320778cc7fdc4ba' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/views/pages/update.tpl',
      1 => 1418020418,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '767836766557b5b2cea2e56-42836423',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'page_data' => 0,
    'allow_save' => 0,
    'selected_section' => 0,
    'id' => 0,
    'page_type' => 0,
    'come_from' => 0,
    'zero_company_id_name_lang_var' => 0,
    'disable_company_picker' => 0,
    'settings' => 0,
    'page_type_data' => 0,
    'runtime' => 0,
    'auth' => 0,
    'view_uri' => 0,
    'show_save_btn' => 0,
    'hide_first_button' => 0,
    'hide_second_button' => 0,
    'pages_tree' => 0,
    '_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_557b5b2d2c7fa9_16953795',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557b5b2d2c7fa9_16953795')) {function content_557b5b2d2c7fa9_16953795($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/home/lostus/public_html/sportslinkshop/app/functions/smarty_plugins/block.hook.php';
?><?php
fn_preload_lang_vars(array('information','name','description','show_page_in_popup','seo_meta_data','page_title','ttc_page_title','meta_description','meta_keywords','availability','usergroups','creation_date','use_avail_period','avail_from','avail_till','preview','add_page','add_link','clone_this_page','delete_this_page','pages'));
?>
<?php if ($_smarty_tpl->tpl_vars['page_data']->value['page_id']) {?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable($_smarty_tpl->tpl_vars['page_data']->value['page_id'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(0, null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars["allow_save"] = new Smarty_variable(true, null, 0);?>
<?php if (fn_allowed_for("ULTIMATE")) {?>
    <?php $_smarty_tpl->tpl_vars["allow_save"] = new Smarty_variable(fn_allow_save_object($_smarty_tpl->tpl_vars['page_data']->value,"pages"), null, 0);?>
<?php }?>
<?php $_smarty_tpl->tpl_vars['show_save_btn'] = new Smarty_variable($_smarty_tpl->tpl_vars['allow_save']->value, null, 2);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['show_save_btn'] = clone $_smarty_tpl->tpl_vars['show_save_btn']; $_ptr = $_ptr->parent; }?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="page_update_form" class="form-horizontal form-edit  <?php if (!$_smarty_tpl->tpl_vars['allow_save']->value) {?>cm-hide-inputs<?php }?>">

<div id="update_page_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_data']->value['page_id'], ENT_QUOTES, 'UTF-8');?>
">
    <input type="hidden" class="cm-no-hide-input" id="selected_section" name="selected_section" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selected_section']->value, ENT_QUOTES, 'UTF-8');?>
"/>
    <input type="hidden" class="cm-no-hide-input" id="page_id" name="page_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
    <input type="hidden" class="cm-no-hide-input" name="page_data[page_type]" id="page_type" size="55" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_type']->value, ENT_QUOTES, 'UTF-8');?>
"/>
    <input type="hidden" class="cm-no-hide-input" name="come_from" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['come_from']->value, ENT_QUOTES, 'UTF-8');?>
" />
    <input type="hidden" class="cm-no-hide-input" name="result_ids" value="update_page_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_data']->value['page_id'], ENT_QUOTES, 'UTF-8');?>
"/>

    <div id="content_basic">

    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("information"),'target'=>"#pages_information_setting"), 0);?>

    <div id="pages_information_setting" class="in collapse">
    <fieldset>
        <?php echo $_smarty_tpl->getSubTemplate ("views/pages/components/parent_page_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        <div class="control-group">
            <label for="elm_page_name" class="control-label cm-required"><?php echo $_smarty_tpl->__("name");?>
:</label>
            <div class="controls">
                <input type="text" name="page_data[page]" id="elm_page_name" size="55" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_data']->value['page'], ENT_QUOTES, 'UTF-8');?>
" class="input-large" />
            </div>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['page_data']->value['parent_id']!=0&&$_smarty_tpl->tpl_vars['page_data']->value['page_id']!=0) {?>
            <?php $_smarty_tpl->tpl_vars["disable_company_picker"] = new Smarty_variable(true, null, 0);?>
        <?php }?>
        <?php if (fn_allowed_for("MULTIVENDOR")) {?>
            <?php $_smarty_tpl->tpl_vars["zero_company_id_name_lang_var"] = new Smarty_variable("none", null, 0);?>
        <?php }?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"page_data[company_id]",'id'=>"elm_page_data_company_id",'zero_company_id_name_lang_var'=>$_smarty_tpl->tpl_vars['zero_company_id_name_lang_var']->value,'selected'=>$_smarty_tpl->tpl_vars['page_data']->value['company_id'],'reload_form'=>true,'disable_company_picker'=>$_smarty_tpl->tpl_vars['disable_company_picker']->value), 0);?>


        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"pages:detailed_description")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"pages:detailed_description"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


        <?php if ($_smarty_tpl->tpl_vars['page_type']->value!=@constant('PAGE_TYPE_LINK')) {?>
        <div class="control-group">
            <label class="control-label" for="elm_page_descr"><?php echo $_smarty_tpl->__("description");?>
:</label>
            <div class="controls">
                <textarea id="elm_page_descr" name="page_data[description]" cols="55" rows="8" class="cm-wysiwyg input-large"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_data']->value['description'], ENT_QUOTES, 'UTF-8');?>
</textarea>
            </div>
        </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['page_type']->value==@constant('PAGE_TYPE_LINK')) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("views/pages/components/pages_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php }?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"pages:detailed_description"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        <?php echo $_smarty_tpl->getSubTemplate ("common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"page_data[status]",'id'=>"elm_page_status",'obj'=>$_smarty_tpl->tpl_vars['page_data']->value,'hidden'=>true), 0);?>


        <?php if ($_smarty_tpl->tpl_vars['page_type']->value!=@constant('PAGE_TYPE_LINK')) {?>
        <div class="control-group">
            <label class="control-label" for="elm_page_show_in_popup"><?php echo $_smarty_tpl->__("show_page_in_popup");?>
:</label>
            <div class="controls">
                <input type="hidden" name="page_data[show_in_popup]" value="N" />
                <span class="checkbox">
                    <input type="checkbox" name="page_data[show_in_popup]" id="elm_page_show_in_popup" <?php if ($_smarty_tpl->tpl_vars['page_data']->value['show_in_popup']=="Y") {?>checked="checked"<?php }?> value="Y">
                </span>
            </div>
        </div>
        <?php }?>

    </fieldset>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['page_type']->value!=@constant('PAGE_TYPE_LINK')) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("seo_meta_data"),'target'=>"#pages_seo_meta_data_setting"), 0);?>

    <div id="pages_seo_meta_data_setting" class="in collapse">
        <fieldset>

            <div class="control-group">
                <label class="control-label" for="elm_page_title"><?php echo $_smarty_tpl->__("page_title");?>
<?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>__("ttc_page_title")), 0);?>
:</label>
                <div class="controls">
                    <input type="text" name="page_data[page_title]" id="elm_page_title" size="55" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_data']->value['page_title'], ENT_QUOTES, 'UTF-8');?>
" class="input-large" />
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="elm_page_meta_descr"><?php echo $_smarty_tpl->__("meta_description");?>
:</label>
                <div class="controls">
                    <textarea name="page_data[meta_description]" id="elm_page_meta_descr" cols="55" rows="2" class="input-large"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_data']->value['meta_description'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="elm_page_meta_keywords"><?php echo $_smarty_tpl->__("meta_keywords");?>
:</label>
                <div class="controls">
                    <textarea name="page_data[meta_keywords]" id="elm_page_meta_keywords" cols="55" rows="2" class="input-large"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_data']->value['meta_keywords'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                </div>
            </div>

        </fieldset>
    </div>
    <?php }?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("availability"),'target'=>"#pages_availability_setting"), 0);?>


  <div id="pages_availability_setting" class="in collapse">
      <fieldset>
          <?php if (!fn_allowed_for("ULTIMATE:FREE")) {?>
              <div class="control-group">
                  <label class="control-label"><?php echo $_smarty_tpl->__("usergroups");?>
:</label>
                      <div class="controls">
                          <?php echo $_smarty_tpl->getSubTemplate ("common/select_usergroups.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"ug_id",'name'=>"page_data[usergroup_ids]",'usergroups'=>fn_get_usergroups("C",@constant('DESCR_SL')),'usergroup_ids'=>$_smarty_tpl->tpl_vars['page_data']->value['usergroup_ids'],'input_extra'=>'','list_mode'=>false), 0);?>

                      </div>
              </div>
          <?php }?>
          <div class="control-group">
              <label class="control-label" for="elm_page_date"><?php echo $_smarty_tpl->__("creation_date");?>
:</label>
              <div class="controls">
                  <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"elm_page_date",'date_name'=>"page_data[timestamp]",'date_val'=>(($tmp = @$_smarty_tpl->tpl_vars['page_data']->value['timestamp'])===null||$tmp==='' ? @constant('TIME') : $tmp),'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']), 0);?>

              </div>
          </div>

          <?php echo $_smarty_tpl->getSubTemplate ("views/localizations/components/select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('data_name'=>"page_data[localization]",'data_from'=>$_smarty_tpl->tpl_vars['page_data']->value['localization']), 0);?>


          <div class="control-group">
              <label class="control-label" for="elm_page_use_avail_period"><?php echo $_smarty_tpl->__("use_avail_period");?>
:</label>
              <div class="controls">
                  <input type="hidden" name="page_data[use_avail_period]" value="N">
                    <span class="checkbox">
                        <input type="checkbox" name="page_data[use_avail_period]" id="elm_page_use_avail_period" <?php if ($_smarty_tpl->tpl_vars['page_data']->value['use_avail_period']=="Y") {?>checked="checked"<?php }?> value="Y"  onclick="fn_activate_calendar(this);">
                    </span>
              </div>
          </div>

          <?php $_smarty_tpl->_capture_stack[0][] = array("calendar_disable", null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['page_data']->value['use_avail_period']!="Y") {?>disabled="disabled"<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

          <div class="control-group">
              <label class="control-label" for="elm_page_avail_from"><?php echo $_smarty_tpl->__("avail_from");?>
:</label>
              <div class="controls">
                  <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"elm_page_avail_from",'date_name'=>"page_data[avail_from_timestamp]",'date_val'=>(($tmp = @$_smarty_tpl->tpl_vars['page_data']->value['avail_from_timestamp'])===null||$tmp==='' ? @constant('TIME') : $tmp),'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year'],'extra'=>Smarty::$_smarty_vars['capture']['calendar_disable']), 0);?>

              </div>
          </div>

          <div class="control-group">
              <label class="control-label" for="elm_page_avail_till"><?php echo $_smarty_tpl->__("avail_till");?>
:</label>
              <div class="controls">
                  <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"elm_page_avail_till",'date_name'=>"page_data[avail_till_timestamp]",'date_val'=>(($tmp = @$_smarty_tpl->tpl_vars['page_data']->value['avail_till_timestamp'])===null||$tmp==='' ? @constant('TIME') : $tmp),'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year'],'extra'=>Smarty::$_smarty_vars['capture']['calendar_disable']), 0);?>

              </div>
          </div>
    </fieldset>
  </div>

            <script language="javascript">
                function fn_activate_calendar(el)
                {
                    Tygh.$('#elm_page_avail_from').prop('disabled', !el.checked);
                    Tygh.$('#elm_page_avail_till').prop('disabled', !el.checked);
                }
            </script>


    </div>

    <div id="content_addons">
        <?php if ($_smarty_tpl->tpl_vars['page_type']->value!=@constant('PAGE_TYPE_LINK')) {?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"pages:detailed_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"pages:detailed_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"pages:detailed_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php }?>
    </div>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"pages:tabs_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"pages:tabs_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"pages:tabs_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
    <?php $_smarty_tpl->tpl_vars["_title"] = new Smarty_variable($_smarty_tpl->__($_smarty_tpl->tpl_vars['page_type_data']->value['new_name']), null, 0);?>
<?php } else { ?>
    <?php ob_start();?><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['page_type_data']->value['edit_name']);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["_title"] = new Smarty_variable($_tmp1.": ".((string)$_smarty_tpl->tpl_vars['page_data']->value['page']), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["select_languages"] = new Smarty_variable(true, null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['page_type']->value!=@constant('PAGE_TYPE_LINK')) {?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("preview", null, null); ob_start(); ?>
            <?php if (!fn_allowed_for("ULTIMATE")||$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
                <?php $_smarty_tpl->tpl_vars['view_uri'] = new Smarty_variable(fn_get_preview_url("pages.view?page_id=".((string)$_smarty_tpl->tpl_vars['id']->value),$_smarty_tpl->tpl_vars['page_data']->value,$_smarty_tpl->tpl_vars['auth']->value['user_id']), null, 0);?>
                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'target'=>"_blank",'text'=>__("preview"),'href'=>$_smarty_tpl->tpl_vars['view_uri']->value));?>
</li>
            <?php }?>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php }?>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"pages:tools_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"pages:tools_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("add_page"),'href'=>"pages.add?page_type=T&parent_id=".((string)$_smarty_tpl->tpl_vars['id']->value)));?>
</li>
                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("add_link"),'href'=>"pages.add?page_type=L&parent_id=".((string)$_smarty_tpl->tpl_vars['id']->value)));?>
</li>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"pages:tools_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <li class="divider"></li>
            <?php echo Smarty::$_smarty_vars['capture']['preview'];?>

            <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("clone_this_page"),'href'=>"pages.clone?page_id=".((string)$_smarty_tpl->tpl_vars['id']->value)));?>
</li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>
                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>__("delete_this_page"),'class'=>"cm-confirm",'href'=>"pages.delete?page_id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&come_from=".((string)$_smarty_tpl->tpl_vars['come_from']->value)));?>
</li>
            <?php }?>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php }?>
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>


    <?php if (!$_smarty_tpl->tpl_vars['show_save_btn']->value) {?>
        <?php $_smarty_tpl->tpl_vars["hide_first_button"] = new Smarty_variable(true, null, 0);?>
        <?php $_smarty_tpl->tpl_vars["hide_second_button"] = new Smarty_variable(true, null, 0);?>
    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[pages.update]",'hide_first_button'=>$_smarty_tpl->tpl_vars['hide_first_button']->value,'hide_second_button'=>$_smarty_tpl->tpl_vars['hide_second_button']->value,'but_target_form'=>"page_update_form",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<!--update_page_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_data']->value['page_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
</form>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"pages:tabs_extra")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"pages:tabs_extra"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"pages:tabs_extra"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox'],'track'=>true), 0);?>


<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
<?php if ($_smarty_tpl->tpl_vars['pages_tree']->value) {?>
    <div class="sidebar-row">
        <h6><?php echo $_smarty_tpl->__("pages");?>
</h6>
        <div class="nested-tree">
            <?php echo $_smarty_tpl->getSubTemplate ("views/pages/components/pages_links_tree.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('show_all'=>false,'pages_tree'=>$_smarty_tpl->tpl_vars['pages_tree']->value), 0);?>

        </div>
    </div>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['_title']->value,'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar'],'sidebar_position'=>"left",'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons']), 0);?>

<?php }} ?>
