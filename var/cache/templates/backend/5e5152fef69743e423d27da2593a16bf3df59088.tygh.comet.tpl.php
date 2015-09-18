<?php /* Smarty version Smarty-3.1.18, created on 2015-09-18 11:53:23
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/common/comet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145678340555fa36be444723-02016450%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e5152fef69743e423d27da2593a16bf3df59088' => 
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/common/comet.tpl',
      1 => 1442547479,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '145678340555fa36be444723-02016450',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa36be449462_30923324',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa36be449462_30923324')) {function content_55fa36be449462_30923324($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('processing'));
?>
<a id="comet_container_controller" data-backdrop="static" data-keyboard="false" href="#comet_control" data-toggle="modal" class="hide"></a>

<div class="modal hide fade" id="comet_control" tabindex="-1" role="dialog" aria-labelledby="comet_title" aria-hidden="true">
    <div class="modal-header">
        <h3 id="comet_title"><?php echo $_smarty_tpl->__("processing");?>
</h3>
    </div>
    <div class="modal-body">
        <p></p>
        <div class="progress progress-striped active">
            
            <div class="bar" style="width: 0%;"></div>
        </div>
    </div>
</div>
<?php }} ?>
