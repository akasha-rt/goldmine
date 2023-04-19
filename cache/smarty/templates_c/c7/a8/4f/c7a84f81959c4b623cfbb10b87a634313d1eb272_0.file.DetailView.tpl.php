<?php
/* Smarty version 3.1.45, created on 2023-04-17 14:53:53
  from '/var/www/html/starrettco_0413_12549075/include/SugarFields/Fields/Datetime/DetailView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_643d5d817defe9_13508902',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7a84f81959c4b623cfbb10b87a634313d1eb272' => 
    array (
      0 => '/var/www/html/starrettco_0413_12549075/include/SugarFields/Fields/Datetime/DetailView.tpl',
      1 => 1664193966,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643d5d817defe9_13508902 (Smarty_Internal_Template $_smarty_tpl) {
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
{*
    check to see if 'date_formatted_value' has been added to the vardefs, and use it if it has, otherwise use the normal sugarvar function
*}

{if strlen(<?php echo smarty_function_sugarvar(array('key'=>'value','string'=>true),$_smarty_tpl);?>
) <= 0}
    {assign var="value" value=<?php echo smarty_function_sugarvar(array('key'=>'default_value','string'=>true),$_smarty_tpl);?>
 }
{else}
    {assign var="value" value=<?php echo smarty_function_sugarvar(array('key'=>'value','string'=>true),$_smarty_tpl);?>
 }
{/if}



<span class="sugar_field" id="<?php echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);?>
">{$value}</span>
<?php if (!empty($_smarty_tpl->tpl_vars['vardef']->value['group']) && $_smarty_tpl->tpl_vars['vardef']->value['group'] == 'created_by_name') {?>
    {$APP.LBL_BY} {$fields.created_by_name.value}
<?php } elseif (!empty($_smarty_tpl->tpl_vars['vardef']->value['group']) && $_smarty_tpl->tpl_vars['vardef']->value['group'] == 'modified_by_name') {?>
    {$APP.LBL_BY} {$fields.modified_by_name.value}
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['displayParams']->value['enableConnectors'])) {?>
{if !empty($value)}
<?php echo smarty_function_sugarvar_connector(array('view'=>'DetailView'),$_smarty_tpl);?>

{/if}
<?php }
}
}
