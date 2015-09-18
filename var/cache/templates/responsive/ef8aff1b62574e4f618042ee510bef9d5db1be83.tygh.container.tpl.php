<?php /* Smarty version Smarty-3.1.18, created on 2015-09-17 12:03:43
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/themes/responsive/templates/views/block_manager/render/container.tpl" */ ?>
<?php /*%%SmartyHeaderCode:35582086555fa3b9f145d07-07942895%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    'ef8aff1b62574e4f618042ee510bef9d5db1be83' =>
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/themes/responsive/templates/views/block_manager/render/container.tpl',
      1 => 1441256992,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '35582086555fa3b9f145d07-07942895',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'layout_data' => 0,
    'container' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa3b9f14cf48_64761094',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa3b9f14cf48_64761094')) {function content_55fa3b9f14cf48_64761094($_smarty_tpl) {?><div class="<?php if ($_smarty_tpl->tpl_vars['layout_data']->value['layout_width']!="fixed") {?>container-fluid <?php } else { ?>container<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value['user_class'], ENT_QUOTES, 'UTF-8');?>
">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div><?php }} ?>
