<?php
/* Smarty version 3.1.45, created on 2023-04-13 12:02:04
  from '/var/www/html/starrettco_0413_12549075/include/SugarFields/Fields/Base/ListView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_6437ef3c34d593_20053332',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2830df92354a2ec78ba3b784c13ec17d631af94' => 
    array (
      0 => '/var/www/html/starrettco_0413_12549075/include/SugarFields/Fields/Base/ListView.tpl',
      1 => 1664193966,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6437ef3c34d593_20053332 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/starrettco_0413_12549075/include/SugarSmarty/plugins/function.sugar_fetch.php','function'=>'smarty_function_sugar_fetch',),));
?>

<?php echo smarty_function_sugar_fetch(array('object'=>$_smarty_tpl->tpl_vars['parentFieldArray']->value,'key'=>$_smarty_tpl->tpl_vars['col']->value),$_smarty_tpl);?>

<?php }
}
