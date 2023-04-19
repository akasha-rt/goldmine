<?php
/* Smarty version 3.1.45, created on 2023-04-17 14:53:41
  from '/var/www/html/starrettco_0413_12549075/include/SugarFields/Fields/Bool/ListView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_643d5d75b1cce0_29692078',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c17d20e21e3681dae7a20ff4ae23629c38f2b39' => 
    array (
      0 => '/var/www/html/starrettco_0413_12549075/include/SugarFields/Fields/Bool/ListView.tpl',
      1 => 1664193966,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643d5d75b1cce0_29692078 (Smarty_Internal_Template $_smarty_tpl) {
if (strval($_smarty_tpl->tpl_vars['parentFieldArray']->value[$_smarty_tpl->tpl_vars['col']->value]) == "1" || strval($_smarty_tpl->tpl_vars['parentFieldArray']->value[$_smarty_tpl->tpl_vars['col']->value]) == "yes" || strval($_smarty_tpl->tpl_vars['parentFieldArray']->value[$_smarty_tpl->tpl_vars['col']->value]) == "on") {
$_smarty_tpl->_assignInScope('checked', "CHECKED");
} else {
$_smarty_tpl->_assignInScope('checked', '');
}?>
<input type="checkbox" class="checkbox" disabled="true" <?php echo $_smarty_tpl->tpl_vars['checked']->value;?>
>
<?php }
}
