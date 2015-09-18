<?php /* Smarty version Smarty-3.1.18, created on 2015-06-13 06:17:12
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/help_tutorial/components/video.tpl" */ ?>
<?php /*%%SmartyHeaderCode:101910023557b5a687ff703-74041575%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '1f12509df87090f9e16c0294346a57cb8da3daab' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/addons/help_tutorial/components/video.tpl',
      1 => 1418020411,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '101910023557b5a687ff703-74041575',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_557b5a68838c47_38293630',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557b5a68838c47_38293630')) {function content_557b5a68838c47_38293630($_smarty_tpl) {?><div class="help-tutorial-wrapper">
    <div class="help-tutorial-content" id="help_tutorial_content">
        <iframe width="640" height="360" src="//www.youtube.com/embed/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value, ENT_QUOTES, 'UTF-8');?>
?wmode=transparent&rel=0" frameborder="0" allowfullscreen></iframe>
    </div>
</div>

<script type="text/javascript">
    (function(_, $) {
        $(function() {
            $('#help_tutorial_link').on('click', function() {
                var self = $(this);
                self.toggleClass('open');
                $('#help_tutorial_content').toggleClass('open');
            });
            if($('#elm_sidebar').length == 0) {
                $('#help_tutorial_link').css('margin-left', 0);
            }
        });
    }(Tygh, Tygh.$));
</script><?php }} ?>
