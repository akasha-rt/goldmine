<?php
/* Smarty version 3.1.45, created on 2023-04-13 11:59:01
  from '/var/www/html/starrettco_0413_12549075/modules/Trackers/tpls/TrackerSettings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_6437ee850f1750_06794079',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '823231d4391a0f28f39322ccad377ce976f731c7' => 
    array (
      0 => '/var/www/html/starrettco_0413_12549075/modules/Trackers/tpls/TrackerSettings.tpl',
      1 => 1664193964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6437ee850f1750_06794079 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/starrettco_0413_12549075/include/SugarSmarty/plugins/function.sugar_csrf_form_token.php','function'=>'smarty_function_sugar_csrf_form_token',),1=>array('file'=>'/var/www/html/starrettco_0413_12549075/include/SugarSmarty/plugins/function.sugar_help.php','function'=>'smarty_function_sugar_help',),));
?>
<form name="TrackerSettings" method="POST">
<?php echo smarty_function_sugar_csrf_form_token(array(),$_smarty_tpl);?>

<input type="hidden" name="action" value="TrackerSettings">
<input type="hidden" name="module" value="Trackers">
<input type="hidden" name="process" value="">

<table width="100%" cellpadding="0" cellspacing="0" border="0" class="actionsContainer">
<tr>
<td scope="row" width="100%" colspan="2">
<input type="button" onclick="document.TrackerSettings.process.value='true'; if(check_form('TrackerSettings')) { document.TrackerSettings.submit(); }" class="button primary" title="<?php echo $_smarty_tpl->tpl_vars['app']->value['LBL_SAVE_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['app']->value['LBL_SAVE_BUTTON_KEY'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['app']->value['LBL_SAVE_BUTTON_LABEL'];?>
">
<input type="button" onclick="parent.SUGAR.App.router.navigate('#Administration', {trigger: true})" class="button" title="<?php echo $_smarty_tpl->tpl_vars['app']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['app']->value['LBL_CANCEL_BUTTON_KEY'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['app']->value['LBL_CANCEL_BUTTON_LABEL'];?>
">
</td>
</tr>
</table>

<table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
<tr>
<td scope="row" width="50%">&nbsp;</td>
<td scope="row" width="50%"><?php echo $_smarty_tpl->tpl_vars['mod']->value['LBL_ENABLE'];?>
</td>
</tr>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['trackerEntries']->value, 'entry', false, 'key', 'trackerEntries', array (
));
$_smarty_tpl->tpl_vars['entry']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->do_else = false;
?>
<tr>
<td scope="row" width="50%"><?php echo $_smarty_tpl->tpl_vars['entry']->value['label'];?>
:&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['entry']->value['helpLabel']),$_smarty_tpl);?>
</td>
<td  width="50%"><input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value="1" <?php if (!$_smarty_tpl->tpl_vars['entry']->value['disabled']) {?>CHECKED<?php }?>>
</tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<tr>
<td scope="row"><?php echo $_smarty_tpl->tpl_vars['mod']->value['LOG_SLOW_QUERIES'];?>
:</td>
<?php if (!empty($_smarty_tpl->tpl_vars['config']->value['dump_slow_queries'])) {?>
	<?php $_smarty_tpl->_assignInScope('dump_slow_queries_checked', 'CHECKED');
} else { ?>
	<?php $_smarty_tpl->_assignInScope('dump_slow_queries_checked', '');
}?>
<td ><input type='hidden' name='dump_slow_queries' value='false'><input name='dump_slow_queries'  type="checkbox" value='true' <?php echo $_smarty_tpl->tpl_vars['dump_slow_queries_checked']->value;?>
></td>
</tr>

<tr>
<td scope="row" width="20%"><?php echo $_smarty_tpl->tpl_vars['mod']->value['LBL_TRACKER_PRUNE_INTERVAL'];?>
</td>
<td><input type='text' id='tracker_prune_interval' name='tracker_prune_interval' size='5' value='<?php echo $_smarty_tpl->tpl_vars['tracker_prune_interval']->value;?>
'></td>
</tr>
<tr>
<td scope="row"><?php echo $_smarty_tpl->tpl_vars['mod']->value['SLOW_QUERY_TIME_MSEC'];?>
: </td>
<td >
<input type='text' size='5' name='slow_query_time_msec' value='<?php echo $_smarty_tpl->tpl_vars['config']->value['slow_query_time_msec'];?>
'>
</td>
</tr>
</table>

<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr>
<td scope="row" width="100%" colspan="2">
<input type="button" onclick="document.TrackerSettings.process.value='true'; if(check_form('TrackerSettings')) { document.TrackerSettings.submit(); }" class="button primary" title="<?php echo $_smarty_tpl->tpl_vars['app']->value['LBL_SAVE_BUTTON_TITLE'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['app']->value['LBL_SAVE_BUTTON_LABEL'];?>
">
<input type="button" onclick="parent.SUGAR.App.router.navigate('#Administration', {trigger: true})" class="button" title="<?php echo $_smarty_tpl->tpl_vars['app']->value['LBL_CANCEL_BUTTON_TITLE'];?>
"  value="<?php echo $_smarty_tpl->tpl_vars['app']->value['LBL_CANCEL_BUTTON_LABEL'];?>
">
</td>
</tr>
</table>
</form>


<?php echo '<script'; ?>
 type="text/javascript">
addToValidate('TrackerSettings', 'tracker_prune_interval', 'int', true, "<?php echo $_smarty_tpl->tpl_vars['mod']->value['LBL_TRACKER_PRUNE_RANGE'];?>
");
addToValidateRange('TrackerSettings', 'tracker_prune_interval', 'range', true, '<?php echo $_smarty_tpl->tpl_vars['mod']->value['LBL_TRACKER_PRUNE_RANGE'];?>
', 1, 180);
addToValidate('TrackerSettings', 'slow_query_time_msec', 'int', true, "<?php echo $_smarty_tpl->tpl_vars['mod']->value['SLOW_QUERY_TIME_MSEC'];?>
");
<?php echo '</script'; ?>
>
<?php }
}
