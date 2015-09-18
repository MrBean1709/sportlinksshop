<?php /* Smarty version Smarty-3.1.18, created on 2015-09-18 11:53:28
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/views/companies/components/company_name.tpl" */ ?>
<?php /*%%SmartyHeaderCode:33612416955fa370186d452-68340532%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51257010f9eccc0aa55f50d2a3ea462c113c72c5' => 
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/views/companies/components/company_name.tpl',
      1 => 1442547529,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '33612416955fa370186d452-68340532',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa3701881566_86216130',
  'variables' => 
  array (
    'runtime' => 0,
    'object' => 0,
    'simple' => 0,
    '_company_name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa3701881566_86216130')) {function content_55fa3701881566_86216130($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']&&$_smarty_tpl->tpl_vars['object']->value['company_id']) {?>
    <?php if (!$_smarty_tpl->tpl_vars['object']->value['company_name']) {?>
        <?php $_smarty_tpl->tpl_vars['_company_name'] = new Smarty_variable(fn_get_company_name($_smarty_tpl->tpl_vars['object']->value['company_id']), null, 0);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['simple']->value) {?>
        <small class="muted"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['object']->value['company_name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['_company_name']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
</small>
    <?php } else { ?>
        <p class="muted"><small><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['object']->value['company_name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['_company_name']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
</small></p>
    <?php }?>
<?php }?>
<?php }} ?>
