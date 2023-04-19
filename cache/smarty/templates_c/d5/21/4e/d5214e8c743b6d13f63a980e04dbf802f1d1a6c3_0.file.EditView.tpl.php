<?php
/* Smarty version 3.1.45, created on 2023-04-17 14:53:53
  from '/var/www/html/starrettco_0413_12549075/include/SugarFields/Fields/Datetime/EditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_643d5d817d42c0_90254580',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5214e8c743b6d13f63a980e04dbf802f1d1a6c3' => 
    array (
      0 => '/var/www/html/starrettco_0413_12549075/include/SugarFields/Fields/Datetime/EditView.tpl',
      1 => 1664193966,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643d5d817d42c0_90254580 (Smarty_Internal_Template $_smarty_tpl) {
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
<span class="dateTime">
{assign var=date_value value=<?php echo smarty_function_sugarvar(array('key'=>'value','string'=>true),$_smarty_tpl);?>
 }
<input class="date_input" autocomplete="off" type="text" name="<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
" value="{$date_value}" title='<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['vardef']->value['help'], "hexentity");?>
' <?php echo $_smarty_tpl->tpl_vars['displayParams']->value['field'];?>
 tabindex='<?php echo $_smarty_tpl->tpl_vars['tabindex']->value;?>
' <?php if (!empty($_smarty_tpl->tpl_vars['displayParams']->value['accesskey'])) {?> accesskey='<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['accesskey'];?>
' <?php }?>   size="11" maxlength="10" >
<?php if (!$_smarty_tpl->tpl_vars['displayParams']->value['hiddeCalendar']) {?>
{capture assign="other_attributes"}alt="{$APP.LBL_ENTER_DATE}" style="position:relative; top:6px" border="0" id="<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_trigger"{/capture}
{sugar_getimage name="jscalendar" ext=".gif" other_attributes="$other_attributes"}
<?php }
if ($_smarty_tpl->tpl_vars['displayParams']->value['showFormats']) {?>
&nbsp;(<span class="dateFormat">{$USER_DATEFORMAT}</span>)
<?php }?>
</span>
<?php if (!$_smarty_tpl->tpl_vars['displayParams']->value['hiddeCalendar']) {
echo '<script'; ?>
 type="text/javascript">
Calendar.setup ({ldelim}
inputField : "<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
",
ifFormat : "{$CALENDAR_FORMAT}",
daFormat : "{$CALENDAR_FORMAT}",
button : "<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_trigger",
singleClick : true,
dateStr : "{$date_value}",
startWeekday: {$CALENDAR_FDOW|default:'0'},
step : 1,
weekNumbers:false
{rdelim}
);
<?php echo '</script'; ?>
>
<?php }
}
}
