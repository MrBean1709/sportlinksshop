<?php /* Smarty version Smarty-3.1.18, created on 2015-06-13 06:20:29
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/discussion/hooks/pages/tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:317959112557b5b2d5a6391-69663414%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '34470ad8fa2b860cdeeb3e9aa6cd5957d7c3f683' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/discussion/hooks/pages/tabs_content.post.tpl',
      1 => 1418020410,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '317959112557b5b2d5a6391-69663414',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'page_type' => 0,
    'page_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_557b5b2d5b85f7_47440870',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557b5b2d5b85f7_47440870')) {function content_557b5b2d5b85f7_47440870($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['page_type']->value!=@constant('PAGE_TYPE_LINK')) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_company_id'=>$_smarty_tpl->tpl_vars['page_data']->value['company_id']), 0);?>

<?php }?><?php }} ?>
