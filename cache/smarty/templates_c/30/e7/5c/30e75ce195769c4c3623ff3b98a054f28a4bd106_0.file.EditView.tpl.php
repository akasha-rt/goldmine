<?php
/* Smarty version 3.1.45, created on 2023-04-17 14:53:53
  from '/var/www/html/starrettco_0413_12549075/include/SugarFields/Fields/Phone/EditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_643d5d817687a9_50750967',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30e75ce195769c4c3623ff3b98a054f28a4bd106' => 
    array (
      0 => '/var/www/html/starrettco_0413_12549075/include/SugarFields/Fields/Phone/EditView.tpl',
      1 => 1664193966,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643d5d817687a9_50750967 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/starrettco_0413_12549075/include/SugarSmarty/plugins/function.sugarvar.php','function'=>'smarty_function_sugarvar',),1=>array('file'=>'/var/www/html/starrettco_0413_12549075/vendor/smarty/smarty/libs/plugins/modifier.escape.php','function'=>'smarty_modifier_escape',),));
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
<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'idname', 'idname', null);
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (!empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {?>
   <?php $_smarty_tpl->_assignInScope('idname', $_smarty_tpl->tpl_vars['displayParams']->value['idName']);
}?>

{if strlen(<?php echo smarty_function_sugarvar(array('key'=>'value','string'=>true),$_smarty_tpl);?>
) <= 0}
{assign var="value" value=<?php echo smarty_function_sugarvar(array('key'=>'default_value','string'=>true),$_smarty_tpl);?>
 }
{else}
{assign var="value" value=<?php echo smarty_function_sugarvar(array('key'=>'value','string'=>true),$_smarty_tpl);?>
 }
{/if}  

<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
' id='<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
' size='<?php echo (($tmp = @$_smarty_tpl->tpl_vars['displayParams']->value['size'])===null||$tmp==='' ? 30 : $tmp);?>
' <?php if ((isset($_smarty_tpl->tpl_vars['displayParams']->value['maxlength']))) {?>maxlength='<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['maxlength'];?>
'<?php } elseif ((isset($_smarty_tpl->tpl_vars['vardef']->value['len']))) {?>maxlength='<?php echo $_smarty_tpl->tpl_vars['vardef']->value['len'];?>
'<?php }?> value='{$value}' title='<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['vardef']->value['help'], "hexentity");?>
' tabindex='<?php echo $_smarty_tpl->tpl_vars['tabindex']->value;?>
'	<?php if (!empty($_smarty_tpl->tpl_vars['displayParams']->value['accesskey'])) {?> accesskey='<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['accesskey'];?>
' <?php }?>  class="phone" <?php echo $_smarty_tpl->tpl_vars['displayParams']->value['field'];?>
>
<?php }
}
