<?php /* Smarty version Smarty-3.1.18, created on 2015-08-25 16:38:16
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/pickers/users/picker_contents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:171504423455dc29784ec442-18861767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '11b2345a3b88cf31f9e7836f88d468454b831ae1' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/pickers/users/picker_contents.tpl',
      1 => 1418020415,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '171504423455dc29784ec442-18861767',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'users' => 0,
    'settings' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55dc29787c1e62_97519421',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55dc29787c1e62_97519421')) {function content_55dc29787c1e62_97519421($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/lostus/public_html/sportslinkshop/app/functions/smarty_plugins/modifier.date_format.php';
if (!is_callable('smarty_block_hook')) include '/home/lostus/public_html/sportslinkshop/app/functions/smarty_plugins/block.hook.php';
?><?php
fn_preload_lang_vars(array('text_items_added','id','username','email','person_name','registered','type','active','administrator','vendor_administrator','customer','affiliate','disable','active','no_data','choose','add_users_and_close','add_users'));
?>
<?php if (!$_REQUEST['extra']) {?>
<script type="text/javascript">
(function(_, $) {
    _.tr('text_items_added', '<?php echo strtr($_smarty_tpl->__("text_items_added"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');

    $.ceEvent('on', 'ce.formpost_add_users_form', function(frm, elm) {
        var users = {};

        if ($('input.cm-item:checked', frm).length > 0) {

            $('input.cm-item:checked', frm).each( function() {
                var id = $(this).val();
                var item = $(this).parent().siblings();
                users[id] = {
                    email: item.find('.user-email').text(),
                    user_name: item.find('.user-name').text()
                };
            });


            $.cePicker('add_js_item', frm.data('caResultId'), users, 'u', {
                '{user_id}': '%id',
                '{email}': '%item.email',
                '{user_name}': '%item.user_name'
            });


            $.ceNotification('show', {
                type: 'N',
                title: _.tr('notice'),
                message: _.tr('text_items_added'),
                message_state: 'I'
            });
        }

        return false;
    });
}(Tygh, Tygh.$));
</script>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/users_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"profiles.picker",'extra'=>"<input type=\"hidden\" name=\"result_ids\" value=\"pagination_".((string)$_REQUEST['data_id'])."\">",'put_request_vars'=>true,'form_meta'=>"cm-ajax",'in_popup'=>true), 0);?>


<form action="<?php echo htmlspecialchars(fn_url($_REQUEST['extra']), ENT_QUOTES, 'UTF-8');?>
" method="post" data-ca-result-id="<?php echo htmlspecialchars($_REQUEST['data_id'], ENT_QUOTES, 'UTF-8');?>
" name="add_users_form">

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true,'div_id'=>"pagination_".((string)$_REQUEST['data_id'])), 0);?>


<?php if ($_smarty_tpl->tpl_vars['users']->value) {?>
<table width="100%" class="table table-middle">
<thead>
<tr>
    <th width="1%" class="center">
        <?php if ($_REQUEST['display']=="checkbox") {?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</th>
        <?php }?>
    <th><?php echo $_smarty_tpl->__("id");?>
</th>
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['use_email_as_login']!="Y") {?>
    <th><?php echo $_smarty_tpl->__("username");?>
</th>
    <?php }?>
    <th><?php echo $_smarty_tpl->__("email");?>
</th>
    <th><?php echo $_smarty_tpl->__("person_name");?>
</th>
    <th><?php echo $_smarty_tpl->__("registered");?>
</th>
    <th><?php echo $_smarty_tpl->__("type");?>
</th>
    <th class="right"><?php echo $_smarty_tpl->__("active");?>
</th>
</tr>
</thead>
<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
<tr>
    <td class="left">
        <?php if ($_REQUEST['display']=="checkbox") {?>
        <input type="checkbox" name="add_users[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item" />
        <?php } elseif ($_REQUEST['display']=="radio") {?>
        <input type="radio" name="selected_user_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
" />
        <?php }?>
    </td>
    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
</td>
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['use_email_as_login']!="Y") {?>
    <td><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['user_login'], ENT_QUOTES, 'UTF-8');?>
</span></td>
    <?php }?>
    <td><span class="user-email"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['email'], ENT_QUOTES, 'UTF-8');?>
</span></td>
    <td><span class="user-name"><?php if ($_smarty_tpl->tpl_vars['user']->value['firstname']||$_smarty_tpl->tpl_vars['user']->value['lastname']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>-<?php }?></span></td>
    <td><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['user']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</td>
    <td><?php if ($_smarty_tpl->tpl_vars['user']->value['user_type']=="A") {?><?php echo $_smarty_tpl->__("administrator");?>
<?php } elseif ($_smarty_tpl->tpl_vars['user']->value['user_type']=="V") {?><?php echo $_smarty_tpl->__("vendor_administrator");?>
<?php } elseif ($_smarty_tpl->tpl_vars['user']->value['user_type']=="C") {?><?php echo $_smarty_tpl->__("customer");?>
<?php } elseif ($_smarty_tpl->tpl_vars['user']->value['user_type']=="P") {?><?php echo $_smarty_tpl->__("affiliate");?>
<?php }?></td>
    <td class="right"><?php if ($_smarty_tpl->tpl_vars['user']->value['status']=="D") {?><?php echo $_smarty_tpl->__("disable");?>
<?php } else { ?><?php echo $_smarty_tpl->__("active");?>
<?php }?></td>
</tr>
<?php } ?>
</table>
<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('div_id'=>"pagination_".((string)$_REQUEST['data_id'])), 0);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"profiles:picker_opts")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"profiles:picker_opts"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"profiles:picker_opts"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="buttons-container">
    <?php if ($_REQUEST['display']=="radio") {?>
        <?php $_smarty_tpl->tpl_vars["but_close_text"] = new Smarty_variable($_smarty_tpl->__("choose"), null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars["but_close_text"] = new Smarty_variable($_smarty_tpl->__("add_users_and_close"), null, 0);?>
        <?php $_smarty_tpl->tpl_vars["but_text"] = new Smarty_variable($_smarty_tpl->__("add_users"), null, 0);?>
    <?php }?>

    <?php echo $_smarty_tpl->getSubTemplate ("buttons/add_close.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('is_js'=>fn_is_empty($_REQUEST['extra'])), 0);?>

</div>

</form>
<?php }} ?>
