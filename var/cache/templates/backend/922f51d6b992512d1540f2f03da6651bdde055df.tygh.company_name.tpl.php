<?php /* Smarty version Smarty-3.1.18, created on 2015-06-10 18:31:18
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/views/companies/components/company_name.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1072969577557811f6136a34-24272453%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '922f51d6b992512d1540f2f03da6651bdde055df' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/views/companies/components/company_name.tpl',
      1 => 1418020416,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1072969577557811f6136a34-24272453',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'runtime' => 0,
    'object' => 0,
    'simple' => 0,
    '_company_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_557811f61781a3_31395508',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557811f61781a3_31395508')) {function content_557811f61781a3_31395508($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']&&$_smarty_tpl->tpl_vars['object']->value['company_id']) {?>
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
<?php }?><?php }} ?>
