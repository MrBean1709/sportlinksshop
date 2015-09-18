<?php /* Smarty version Smarty-3.1.18, created on 2015-09-18 11:53:22
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/views/order_management/components/issuer_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:45628147855fa370ba38d35-07323033%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0090cebcdff69e42d489abc3154b4bf37555f38' => 
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/views/order_management/components/issuer_info.tpl',
      1 => 1442547555,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '45628147855fa370ba38d35-07323033',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa370ba58465_14060150',
  'variables' => 
  array (
    'user_data' => 0,
    'user_full_name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa370ba58465_14060150')) {function content_55fa370ba58465_14060150($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('issuer_info'));
?>

<?php if ($_smarty_tpl->tpl_vars['user_data']->value) {?>
<div class="sidebar-row">
        <h6><?php echo $_smarty_tpl->__("issuer_info");?>
</h6>
        <div class="profile-info">
            <i class="icon-user"></i>

            <p class="strong">
                <?php $_smarty_tpl->tpl_vars['user_full_name'] = new Smarty_variable(trim(((string)$_smarty_tpl->tpl_vars['user_data']->value['firstname'])." ".((string)$_smarty_tpl->tpl_vars['user_data']->value['lastname'])), null, 0);?>
                <?php if ($_smarty_tpl->tpl_vars['user_full_name']->value) {?>
                    <?php if ($_smarty_tpl->tpl_vars['user_data']->value['user_id']) {?>
                        <a href="<?php echo htmlspecialchars(fn_url("profiles.update?user_id=".((string)$_smarty_tpl->tpl_vars['user_data']->value['user_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_full_name']->value, ENT_QUOTES, 'UTF-8');?>
</a>,
                    <?php } elseif ($_smarty_tpl->tpl_vars['user_full_name']->value) {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_full_name']->value, ENT_QUOTES, 'UTF-8');?>
,
                    <?php }?>
                <?php }?>
                <a href="mailto:<?php echo htmlspecialchars(rawurlencode($_smarty_tpl->tpl_vars['user_data']->value['email']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['email'], ENT_QUOTES, 'UTF-8');?>
</a>
            </p>
        </div>
</div>
<hr>
<?php }?>


<?php }} ?>
