<?php /* Smarty version Smarty-3.1.18, created on 2015-06-13 06:26:29
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/views/order_management/components/issuer_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1191699155557b5c953c1334-43165205%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '92d7f7425627c81987405811864d500de9a7e04d' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/views/order_management/components/issuer_info.tpl',
      1 => 1418020417,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1191699155557b5c953c1334-43165205',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'user_data' => 0,
    'user_full_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_557b5c95407e28_45644291',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557b5c95407e28_45644291')) {function content_557b5c95407e28_45644291($_smarty_tpl) {?><?php
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
