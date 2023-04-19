<?php
/* Smarty version 3.1.45, created on 2023-04-17 14:53:50
  from '/var/www/html/starrettco_0413_12549075/include/SugarFields/Fields/Image/DetailView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_643d5d7e26a864_58591817',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4d0d1dd0cfc458dba1f1bbc8cbe1218ddc45b01' => 
    array (
      0 => '/var/www/html/starrettco_0413_12549075/include/SugarFields/Fields/Image/DetailView.tpl',
      1 => 1664193966,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643d5d7e26a864_58591817 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/starrettco_0413_12549075/include/SugarSmarty/plugins/function.sugarvar.php','function'=>'smarty_function_sugarvar',),));
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
<input type="hidden" class="sugar_field" id="<?php echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);?>
" value="<?php echo smarty_function_sugarvar(array('key'=>'value','string'=>true),$_smarty_tpl);?>
">
{if isset($displayParams.link)}
<a href='<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['link'];?>
'>
{else}
<a href="javascript:SUGAR.image.lightbox(YAHOO.util.Dom.get('img_<?php echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);?>
').src)">
{/if}
<img
	id="img_<?php echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);?>
" 
	name="img_<?php echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);?>
" 
	<?php if (!empty($_smarty_tpl->tpl_vars['vardef']->value['calculated'])) {?>
	   src='<?php echo smarty_function_sugarvar(array('key'=>'value'),$_smarty_tpl);?>
'
	<?php } else { ?>
	{if empty(<?php echo smarty_function_sugarvar(array('key'=>'value','string'=>true),$_smarty_tpl);?>
)}
	   src='' 	
	{else}
	   src='index.php?entryPoint=download&id=<?php echo smarty_function_sugarvar(array('key'=>'value'),$_smarty_tpl);?>
&type=SugarFieldImage&isTempFile=1'
	{/if}
	<?php }?>
	style='
		{if empty(<?php echo smarty_function_sugarvar(array('key'=>'value','string'=>true),$_smarty_tpl);?>
)}
			display:	none;
		{/if}
		{if "<?php echo $_smarty_tpl->tpl_vars['vardef']->value['border'];?>
" eq ""}
			border: 0; 
		{else}
			border: 1px solid black; 
		{/if}
		{if "<?php echo $_smarty_tpl->tpl_vars['vardef']->value['width'];?>
" eq ""}
			width: auto;
		{else}
			width: <?php echo $_smarty_tpl->tpl_vars['vardef']->value['width'];?>
px;
		{/if}
		{if "<?php echo $_smarty_tpl->tpl_vars['vardef']->value['height'];?>
" eq ""}
			height: auto;
		{else}
			height: <?php echo $_smarty_tpl->tpl_vars['vardef']->value['height'];?>
px;
		{/if}
		'		
>
</a>
<?php }
}
