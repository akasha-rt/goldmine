<?php
/* Smarty version 3.1.45, created on 2023-04-17 14:53:53
  from '/var/www/html/starrettco_0413_12549075/include/SugarFields/Fields/Password/EditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_643d5d817bfc21_86160496',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e39feb049f45ada65863abbdd56a086bc48c8208' => 
    array (
      0 => '/var/www/html/starrettco_0413_12549075/include/SugarFields/Fields/Password/EditView.tpl',
      1 => 1664193966,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643d5d817bfc21_86160496 (Smarty_Internal_Template $_smarty_tpl) {
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
<input type='password' id='<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];
}?>' 
name='<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];
}?>' 
size='<?php echo (($tmp = @$_smarty_tpl->tpl_vars['displayParams']->value['size'])===null||$tmp==='' ? 30 : $tmp);?>
' value='<?php echo smarty_function_sugarvar(array('key'=>'value'),$_smarty_tpl);?>
' title='<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['vardef']->value['help'], "hexentity");?>
' tabindex='<?php echo $_smarty_tpl->tpl_vars['tabindex']->value;?>
'	<?php if (!empty($_smarty_tpl->tpl_vars['displayParams']->value['accesskey'])) {?> accesskey='<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['accesskey'];?>
' <?php }?> >
<?php }
}
