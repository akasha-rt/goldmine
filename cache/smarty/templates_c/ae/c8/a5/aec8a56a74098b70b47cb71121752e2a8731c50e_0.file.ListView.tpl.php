<?php
/* Smarty version 3.1.45, created on 2023-04-17 14:53:41
  from '/var/www/html/starrettco_0413_12549075/include/SugarFields/Fields/Phone/ListView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_643d5d75b07870_51384806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aec8a56a74098b70b47cb71121752e2a8731c50e' => 
    array (
      0 => '/var/www/html/starrettco_0413_12549075/include/SugarFields/Fields/Phone/ListView.tpl',
      1 => 1664193966,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643d5d75b07870_51384806 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/starrettco_0413_12549075/include/SugarSmarty/plugins/function.sugar_fetch.php','function'=>'smarty_function_sugar_fetch',),1=>array('file'=>'/var/www/html/starrettco_0413_12549075/include/SugarSmarty/plugins/function.sugar_phone.php','function'=>'smarty_function_sugar_phone',),));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'getPhone', 'phone', null);
echo smarty_function_sugar_fetch(array('object'=>$_smarty_tpl->tpl_vars['parentFieldArray']->value,'key'=>$_smarty_tpl->tpl_vars['col']->value),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php echo smarty_function_sugar_phone(array('value'=>$_smarty_tpl->tpl_vars['phone']->value,'usa_format'=>$_smarty_tpl->tpl_vars['usa_format']->value),$_smarty_tpl);
}
}