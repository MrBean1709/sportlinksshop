<?php /* Smarty version Smarty-3.1.18, created on 2015-06-08 17:08:52
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/views/languages/components/install_languages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25311914155755ba44b0701-49112882%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'd33178c29ddbb7d53c584ff15effc4359f437275' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/views/languages/components/install_languages.tpl',
      1 => 1418020417,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '25311914155755ba44b0701-49112882',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'langs_meta' => 0,
    'runtime' => 0,
    'language' => 0,
    'countries' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55755ba45cf6f7_27704604',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55755ba45cf6f7_27704604')) {function content_55755ba45cf6f7_27704604($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('language_code','name','country','install','no_items'));
?>
<div class="hidden" id="content_available_languages">
    <?php if (count($_smarty_tpl->tpl_vars['langs_meta']->value)>0) {?>

        <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="languages_install_form" class="<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>cm-hide-inputs<?php }?>">
            <input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="selected_section" value="<?php echo htmlspecialchars($_REQUEST['selected_section'], ENT_QUOTES, 'UTF-8');?>
" />

            <table class="table table-middle">
            <thead>
                <tr class="cm-first-sibling">
                    <th><?php echo $_smarty_tpl->__("language_code");?>
</th>
                    <th><?php echo $_smarty_tpl->__("name");?>
</th>
                    <th><?php echo $_smarty_tpl->__("country");?>
</th>
                    <th class="right">&nbsp;</th>
                </tr>
            </thead>

            <tbody>
            <?php  $_smarty_tpl->tpl_vars["language"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["language"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['langs_meta']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["language"]->key => $_smarty_tpl->tpl_vars["language"]->value) {
$_smarty_tpl->tpl_vars["language"]->_loop = true;
?>
                <tr class="cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['language']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
                    <td>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['lang_code'], ENT_QUOTES, 'UTF-8');?>

                    </td>
                    <td>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['name'], ENT_QUOTES, 'UTF-8');?>

                    </td>
                    <td>
                        <i class="flag flag-<?php echo htmlspecialchars(strtolower($_smarty_tpl->tpl_vars['language']->value['country_code']), ENT_QUOTES, 'UTF-8');?>
"></i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['countries']->value[$_smarty_tpl->tpl_vars['language']->value['country_code']], ENT_QUOTES, 'UTF-8');?>

                    </td>
                    <td class="right">
                        <a class="btn lowercase" href="<?php echo htmlspecialchars(fn_url("languages.install?pack=".((string)$_smarty_tpl->tpl_vars['language']->value['lang_code'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("install");?>
</a>
                    </td>

                </tr>
            <?php } ?>
            </tbody>
            </table>

        </form>
    <?php } else { ?>
        <p class="no-items"><?php echo $_smarty_tpl->__("no_items");?>
</p>
    <?php }?>
<!--content_available_languages--></div><?php }} ?>
