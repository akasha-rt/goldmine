<?php
/* Smarty version 3.1.45, created on 2023-04-17 14:53:50
  from '/var/www/html/starrettco_0413_12549075/include/SugarFields/Fields/Enum/DetailView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_643d5d7e25b8b9_09480080',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c85ccff0278cb20dd58006c215dcc2161febeb6a' => 
    array (
      0 => '/var/www/html/starrettco_0413_12549075/include/SugarFields/Fields/Enum/DetailView.tpl',
      1 => 1664193966,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643d5d7e25b8b9_09480080 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/starrettco_0413_12549075/include/SugarSmarty/plugins/function.sugarvar.php','function'=>'smarty_function_sugarvar',),1=>array('file'=>'/var/www/html/starrettco_0413_12549075/include/SugarSmarty/plugins/function.sugarvar_connector.php','function'=>'smarty_function_sugarvar_connector',),));
?>
{*
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
*}
{* This is here so currency fields, who don't really have dropdown
lists can work. *}
{if is_string(<?php echo smarty_function_sugarvar(array('key'=>'options','string'=>true),$_smarty_tpl);?>
)}
<input type="hidden" class="sugar_field" id="<?php echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);?>
" value="<?php echo smarty_function_sugarvar(array('key'=>'options'),$_smarty_tpl);?>
">
<?php echo smarty_function_sugarvar(array('key'=>'options'),$_smarty_tpl);?>

{else}
<input type="hidden" class="sugar_field" id="<?php echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);?>
" value="<?php echo smarty_function_sugarvar(array('key'=>'value'),$_smarty_tpl);?>
">
    {assign var="field_options" value=<?php echo smarty_function_sugarvar(array('key'=>'options','string'=>"true"),$_smarty_tpl);?>
 }
    {assign var="field_val" value=<?php echo smarty_function_sugarvar(array('key'=>'value','string'=>"true"),$_smarty_tpl);?>
 }
    {$field_options[$field_val]}
{/if}
<?php if (!empty($_smarty_tpl->tpl_vars['displayParams']->value['enableConnectors'])) {
echo smarty_function_sugarvar_connector(array('view'=>'DetailView'),$_smarty_tpl);?>

<?php }
}
}
