<?php /* Smarty version Smarty-3.1.18, created on 2015-09-17 11:44:19
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/views/profiles/components/profiles_scripts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:202167798255fa371400aac4-24512329%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '509570e5ef384113439c343ec163c29e02bb836d' =>
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/views/profiles/components/profiles_scripts.tpl',
      1 => 1441256935,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '202167798255fa371400aac4-24512329',
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
  'unifunc' => 'content_55fa3714012736_76360596',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa3714012736_76360596')) {function content_55fa3714012736_76360596($_smarty_tpl) {?><script type="text/javascript">
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
