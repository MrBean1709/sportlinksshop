<?php /* Smarty version Smarty-3.1.18, created on 2015-08-28 10:42:38
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/tags/views/tags/components/object_tags.tpl" */ ?>
<?php /*%%SmartyHeaderCode:53633088155dfca9e2d11b5-88146425%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'f21cca3f71cd1c7eb4e47edc0a8960be6354f3bc' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/tags/views/tags/components/object_tags.tpl',
      1 => 1418020414,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '53633088155dfca9e2d11b5-88146425',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'allow_save' => 0,
    'object_id' => 0,
    'object_type' => 0,
    'input_name' => 0,
    'object' => 0,
    'tag' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55dfca9e36b867_20513028',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55dfca9e36b867_20513028')) {function content_55dfca9e36b867_20513028($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/lostus/public_html/sportslinkshop/app/functions/smarty_plugins/function.script.php';
?><?php
fn_preload_lang_vars(array('my_tags','popular_tags','none'));
?>
<div id="content_tags">

<?php echo smarty_function_script(array('src'=>"js/addons/tags/tags_autocomplete.js"),$_smarty_tpl);?>


    <div class="control-group <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>cm-no-hide-input<?php }?>">
        <label class="control-label"><?php echo $_smarty_tpl->__("my_tags");?>
:</label>
        <div class="controls">
            <ul id="my_tags">
                <input type="hidden" id="object_id" value=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
 />
                <input type="hidden" id="object_type" value=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
 />
                <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[tags][]" value="" />
                <input type="hidden" id="object_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[tags][]" />
                <?php  $_smarty_tpl->tpl_vars["tag"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["tag"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['object']->value['tags']['user']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["tag"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["tag"]->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars["tag"]->key => $_smarty_tpl->tpl_vars["tag"]->value) {
$_smarty_tpl->tpl_vars["tag"]->_loop = true;
 $_smarty_tpl->tpl_vars["tag"]->iteration++;
 $_smarty_tpl->tpl_vars["tag"]->last = $_smarty_tpl->tpl_vars["tag"]->iteration === $_smarty_tpl->tpl_vars["tag"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["tags"]['last'] = $_smarty_tpl->tpl_vars["tag"]->last;
?><li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value['tag'], ENT_QUOTES, 'UTF-8');?>
</li><?php } ?>
            </ul>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("popular_tags");?>
:</label>
        <div class="controls">
            <div class="text-type-value">
                <?php if ($_smarty_tpl->tpl_vars['object']->value['tags']['popular']) {?>
                    <?php  $_smarty_tpl->tpl_vars["tag"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["tag"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['object']->value['tags']['popular']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["tag"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["tag"]->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars["tag"]->key => $_smarty_tpl->tpl_vars["tag"]->value) {
$_smarty_tpl->tpl_vars["tag"]->_loop = true;
 $_smarty_tpl->tpl_vars["tag"]->iteration++;
 $_smarty_tpl->tpl_vars["tag"]->last = $_smarty_tpl->tpl_vars["tag"]->iteration === $_smarty_tpl->tpl_vars["tag"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["tags"]['last'] = $_smarty_tpl->tpl_vars["tag"]->last;
?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value['tag'], ENT_QUOTES, 'UTF-8');?>
(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value['popularity'], ENT_QUOTES, 'UTF-8');?>
) <?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['tags']['last']) {?>,<?php }?>
                    <?php } ?>
                <?php } else { ?>
                    <?php echo $_smarty_tpl->__("none");?>

                <?php }?>
            </div>
        </div>
    </div>

</div>
<?php }} ?>
