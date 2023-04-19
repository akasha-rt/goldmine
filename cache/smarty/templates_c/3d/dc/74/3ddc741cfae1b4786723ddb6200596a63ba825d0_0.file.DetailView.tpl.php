<?php
/* Smarty version 3.1.45, created on 2023-04-17 14:53:50
  from '/var/www/html/starrettco_0413_12549075/include/SugarFields/Fields/Relate/DetailView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_643d5d7e297293_70323244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ddc741cfae1b4786723ddb6200596a63ba825d0' => 
    array (
      0 => '/var/www/html/starrettco_0413_12549075/include/SugarFields/Fields/Relate/DetailView.tpl',
      1 => 1664193966,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643d5d7e297293_70323244 (Smarty_Internal_Template $_smarty_tpl) {
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
<?php if (!$_smarty_tpl->tpl_vars['nolink']->value && !empty($_smarty_tpl->tpl_vars['vardef']->value['id_name'])) {?> 
{if !empty(<?php echo smarty_function_sugarvar(array('memberName'=>'vardef.id_name','key'=>'value','string'=>'true'),$_smarty_tpl);?>
)}
{capture assign="detail_url"}index.php?module=<?php echo $_smarty_tpl->tpl_vars['vardef']->value['module'];?>
&action=DetailView&record=<?php echo smarty_function_sugarvar(array('memberName'=>'vardef.id_name','key'=>'value'),$_smarty_tpl);?>
{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<?php }?>
<span id="<?php echo $_smarty_tpl->tpl_vars['vardef']->value['id_name'];?>
" class="sugar_field" data-id-value="<?php echo smarty_function_sugarvar(array('memberName'=>'vardef.id_name','key'=>'value'),$_smarty_tpl);?>
"><?php echo smarty_function_sugarvar(array('key'=>'value'),$_smarty_tpl);?>
</span>
<?php if (!$_smarty_tpl->tpl_vars['nolink']->value && !empty($_smarty_tpl->tpl_vars['vardef']->value['id_name'])) {?>
{if !empty(<?php echo smarty_function_sugarvar(array('memberName'=>'vardef.id_name','key'=>'value','string'=>'true'),$_smarty_tpl);?>
)}</a>{/if}
<?php }
if (!empty($_smarty_tpl->tpl_vars['displayParams']->value['enableConnectors']) && !empty($_smarty_tpl->tpl_vars['vardef']->value['id_name'])) {?>
{if !empty(<?php echo smarty_function_sugarvar(array('memberName'=>'vardef.id_name','key'=>'value','string'=>'true'),$_smarty_tpl);?>
)}
<?php echo smarty_function_sugarvar_connector(array('view'=>'DetailView'),$_smarty_tpl);?>
 
{/if}
<?php }
}
}
