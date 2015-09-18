<?php /* Smarty version Smarty-3.1.18, created on 2015-06-10 18:34:30
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/views/profiles/components/profiles_scripts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1308555286557812b6d86b07-46800213%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '14af7dc0d5cdd0cf51023353db95260fd931d719' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/views/profiles/components/profiles_scripts.tpl',
      1 => 1418020420,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1308555286557812b6d86b07-46800213',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'settings' => 0,
    'states' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_557812b6d9f808_68771565',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557812b6d9f808_68771565')) {function content_557812b6d9f808_68771565($_smarty_tpl) {?><script type="text/javascript">
(function(_, $) {

    /* Do not put this code to document.ready, because it should be
       initialized first
    */
    $.ceRebuildStates('init', {
        default_country: '<?php echo htmlspecialchars(strtr($_smarty_tpl->tpl_vars['settings']->value['General']['default_country'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
',
        states: <?php echo json_encode($_smarty_tpl->tpl_vars['states']->value);?>

    });



    $.ceFormValidator('setZipcode', {
        US: {
            regexp: /^(\d{5})(-\d{4})?$/,
            format: '01342 (01342-5678)'
        },
        CA: {
            regexp: /^(\w{3} ?\w{3})$/,
            format: 'K1A OB1 (K1AOB1)'
        },
        RU: {
            regexp: /^(\d{6})?$/,
            format: '123456'
        }
    });


}(Tygh, Tygh.$));
</script>
<?php }} ?>
