<?php /* Smarty version Smarty-3.1.18, created on 2015-08-28 11:41:45
         compiled from "/home/lostus/public_html/sportslinkshop/design/themes/responsive/templates/addons/tags/views/tags/components/tags.tpl" */ ?>
<?php /*%%SmartyHeaderCode:49635765855dfd8793bdf61-10145811%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'd9ed177d754fd99366805eb747f38bb094ee6066' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/themes/responsive/templates/addons/tags/views/tags/components/tags.tpl',
      1 => 1418021507,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '49635765855dfd8793bdf61-10145811',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'runtime' => 0,
    'auth' => 0,
    'object_id' => 0,
    'object_type' => 0,
    'object' => 0,
    'tag' => 0,
    'config' => 0,
    'return_current_url' => 0,
    'tag_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55dfd87955f8f9_34884900',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55dfd87955f8f9_34884900')) {function content_55dfd87955f8f9_34884900($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/lostus/public_html/sportslinkshop/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/home/lostus/public_html/sportslinkshop/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('my_tags','sign_in_to_enter_tags','popular_tags','none','my_tags','sign_in_to_enter_tags','popular_tags','none'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div id="content_tags_tab">

    <?php echo smarty_function_script(array('src'=>"js/addons/tags/tags_autocomplete.js"),$_smarty_tpl);?>


    <div class="ty-tags-form ty-control-group">
        <label class="ty-tags-label"><?php echo $_smarty_tpl->__("my_tags");?>
</label>
        <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
            <input type="hidden" id="object_id" value=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
 />
            <input type="hidden" id="object_type" value=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
 />
            <ul id="my_tags">
                <?php  $_smarty_tpl->tpl_vars["tag"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["tag"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['object']->value['tags']['user']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["tag"]->key => $_smarty_tpl->tpl_vars["tag"]->value) {
$_smarty_tpl->tpl_vars["tag"]->_loop = true;
?><li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value['tag'], ENT_QUOTES, 'UTF-8');?>
</li><?php } ?>
            </ul>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars["return_current_url"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
            <a class="ty-btn ty-btn__primary" href="<?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller']=="auth"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="login_form") {?><?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['config']->value['current_url']), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo htmlspecialchars(fn_url("auth.login_form?return_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value)), ENT_QUOTES, 'UTF-8');?>
<?php }?>"><?php echo $_smarty_tpl->__("sign_in_to_enter_tags");?>
</a>
        <?php }?>
    </div>

    <div class="ty-control-group">
        <label class="ty-tags-label"><?php echo $_smarty_tpl->__("popular_tags");?>
</label>
        <?php if ($_smarty_tpl->tpl_vars['object']->value['tags']['popular']) {?>
            <ul class="ty-tags-list clearfix">
                <?php  $_smarty_tpl->tpl_vars["tag"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["tag"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['object']->value['tags']['popular']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["tag"]->key => $_smarty_tpl->tpl_vars["tag"]->value) {
$_smarty_tpl->tpl_vars["tag"]->_loop = true;
?>
                <?php $_smarty_tpl->tpl_vars["tag_name"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['tag']->value['tag']), null, 0);?>
                    <li class="ty-tags-list__item">
                        <a class="ty-tags-list__a" href="<?php echo htmlspecialchars(fn_url("tags.view?tag=".((string)$_smarty_tpl->tpl_vars['tag_name']->value)), ENT_QUOTES, 'UTF-8');?>
">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value['tag'], ENT_QUOTES, 'UTF-8');?>

                        </a>
                        <?php $_smarty_tpl->tpl_vars["return_current_url"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
                    </li>
                <?php } ?>
            </ul>
        <?php } else { ?>
            <?php echo $_smarty_tpl->__("none");?>

        <?php }?>
    </div>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/tags/views/tags/components/tags.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/tags/views/tags/components/tags.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><div id="content_tags_tab">

    <?php echo smarty_function_script(array('src'=>"js/addons/tags/tags_autocomplete.js"),$_smarty_tpl);?>


    <div class="ty-tags-form ty-control-group">
        <label class="ty-tags-label"><?php echo $_smarty_tpl->__("my_tags");?>
</label>
        <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
            <input type="hidden" id="object_id" value=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
 />
            <input type="hidden" id="object_type" value=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
 />
            <ul id="my_tags">
                <?php  $_smarty_tpl->tpl_vars["tag"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["tag"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['object']->value['tags']['user']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["tag"]->key => $_smarty_tpl->tpl_vars["tag"]->value) {
$_smarty_tpl->tpl_vars["tag"]->_loop = true;
?><li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value['tag'], ENT_QUOTES, 'UTF-8');?>
</li><?php } ?>
            </ul>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars["return_current_url"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
            <a class="ty-btn ty-btn__primary" href="<?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller']=="auth"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="login_form") {?><?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['config']->value['current_url']), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo htmlspecialchars(fn_url("auth.login_form?return_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value)), ENT_QUOTES, 'UTF-8');?>
<?php }?>"><?php echo $_smarty_tpl->__("sign_in_to_enter_tags");?>
</a>
        <?php }?>
    </div>

    <div class="ty-control-group">
        <label class="ty-tags-label"><?php echo $_smarty_tpl->__("popular_tags");?>
</label>
        <?php if ($_smarty_tpl->tpl_vars['object']->value['tags']['popular']) {?>
            <ul class="ty-tags-list clearfix">
                <?php  $_smarty_tpl->tpl_vars["tag"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["tag"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['object']->value['tags']['popular']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["tag"]->key => $_smarty_tpl->tpl_vars["tag"]->value) {
$_smarty_tpl->tpl_vars["tag"]->_loop = true;
?>
                <?php $_smarty_tpl->tpl_vars["tag_name"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['tag']->value['tag']), null, 0);?>
                    <li class="ty-tags-list__item">
                        <a class="ty-tags-list__a" href="<?php echo htmlspecialchars(fn_url("tags.view?tag=".((string)$_smarty_tpl->tpl_vars['tag_name']->value)), ENT_QUOTES, 'UTF-8');?>
">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value['tag'], ENT_QUOTES, 'UTF-8');?>

                        </a>
                        <?php $_smarty_tpl->tpl_vars["return_current_url"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
                    </li>
                <?php } ?>
            </ul>
        <?php } else { ?>
            <?php echo $_smarty_tpl->__("none");?>

        <?php }?>
    </div>
</div><?php }?><?php }} ?>
