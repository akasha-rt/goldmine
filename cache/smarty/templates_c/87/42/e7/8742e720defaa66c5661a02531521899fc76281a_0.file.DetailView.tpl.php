<?php
/* Smarty version 3.1.45, created on 2023-04-17 14:53:50
  from '/var/www/html/starrettco_0413_12549075/include/SugarFields/Fields/Fullname/DetailView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_643d5d7e245028_37052047',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8742e720defaa66c5661a02531521899fc76281a' => 
    array (
      0 => '/var/www/html/starrettco_0413_12549075/include/SugarFields/Fields/Fullname/DetailView.tpl',
      1 => 1664193966,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643d5d7e245028_37052047 (Smarty_Internal_Template $_smarty_tpl) {
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
{if strlen(<?php echo smarty_function_sugarvar(array('key'=>'value','string'=>true),$_smarty_tpl);?>
) <= 0}
{assign var="value" value=<?php echo smarty_function_sugarvar(array('key'=>'default_value','string'=>true),$_smarty_tpl);?>
 }
{else}
{assign var="value" value=<?php echo smarty_function_sugarvar(array('key'=>'value','string'=>true),$_smarty_tpl);?>
 }
{/if}
<span id='<?php echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);?>
'><?php echo smarty_function_sugarvar(array('key'=>'value'),$_smarty_tpl);?>
</span>
&nbsp;&nbsp;
<span class="id-ff">
    <a id="btn_vCardButton" title="{$APP.LBL_VCARD}" href="#">{sugar_getimage alt=$app_strings.LBL_ID_FF_VCARD name="id-ff-vcard" ext=".png"}</a>
</span>
<?php if (!empty($_smarty_tpl->tpl_vars['displayParams']->value['enableConnectors'])) {?>
{if !empty($value)}
<?php echo smarty_function_sugarvar_connector(array('view'=>'DetailView'),$_smarty_tpl);?>

{/if}
<?php }?>

<?php echo '<script'; ?>
 type="text/javascript">
    $("#btn_vCardButton").click(function(e){
        window.location.assign('index.php?module={$module}&action=vCard&record={$fields.id.value}&to_pdf=true');

        if (e.preventDefault) {
            e.preventDefault();
        }
    });
<?php echo '</script'; ?>
>
<?php }
}
