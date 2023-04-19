<?php
/* Smarty version 3.1.45, created on 2023-04-17 14:53:41
  from '/var/www/html/starrettco_0413_12549075/include/SugarFields/Fields/Fullname/ListView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_643d5d75ae7268_01853059',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4e292896c6a0a74b714c84c9d1b900d40fcdc9f' => 
    array (
      0 => '/var/www/html/starrettco_0413_12549075/include/SugarFields/Fields/Fullname/ListView.tpl',
      1 => 1664193966,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643d5d75ae7268_01853059 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/starrettco_0413_12549075/include/SugarSmarty/plugins/function.sugar_fetch.php','function'=>'smarty_function_sugar_fetch',),));
?>

<?php echo smarty_function_sugar_fetch(array('object'=>$_smarty_tpl->tpl_vars['parentFieldArray']->value,'key'=>$_smarty_tpl->tpl_vars['col']->value,'escape'=>"html"),$_smarty_tpl);?>

<?php }
}
