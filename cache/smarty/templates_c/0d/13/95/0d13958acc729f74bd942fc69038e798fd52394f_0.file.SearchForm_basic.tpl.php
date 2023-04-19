<?php
/* Smarty version 3.1.45, created on 2023-04-17 14:53:41
  from '/var/www/html/starrettco_0413_12549075/cache/modules/Users/SearchForm_basic.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_643d5d75741ba6_54002307',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d13958acc729f74bd942fc69038e798fd52394f' => 
    array (
      0 => '/var/www/html/starrettco_0413_12549075/cache/modules/Users/SearchForm_basic.tpl',
      1 => 1681743221,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643d5d75741ba6_54002307 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/starrettco_0413_12549075/vendor/smarty/smarty/libs/plugins/function.counter.php','function'=>'smarty_function_counter',),1=>array('file'=>'/var/www/html/starrettco_0413_12549075/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),2=>array('file'=>'/var/www/html/starrettco_0413_12549075/include/SugarSmarty/plugins/function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),3=>array('file'=>'/var/www/html/starrettco_0413_12549075/include/SugarSmarty/plugins/function.sugar_getimagepath.php','function'=>'smarty_function_sugar_getimagepath',),));
?>

<?php if (!(isset($_smarty_tpl->tpl_vars['templateMeta']->value['maxColumnsBasic']))) {?>
	<?php $_smarty_tpl->_assignInScope('basicMaxColumns', $_smarty_tpl->tpl_vars['templateMeta']->value['maxColumns']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('basicMaxColumns', $_smarty_tpl->tpl_vars['templateMeta']->value['maxColumnsBasic']);
}
echo '<script'; ?>
>
	$(function() {
	var $dialog = $('<div></div>')
		.html(SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TEXT'))
		.dialog({
			autoOpen: false,
			title: SUGAR.language.get('app_strings', 'LBL_HELP'),
			width: 700
		});
		
		$('#filterHelp').click(function() {
		$dialog.dialog('open');
		// prevent the default action, e.g., following a link
	});
	
	});
<?php echo '</script'; ?>
>

<table width="100%" cellspacing="0" cellpadding="0" border="0">
<tr>
      
      
		
		<?php if ($_smarty_tpl->tpl_vars['fields']->value['search_name_basic']['acl'] > 0) {?>
		<?php echo smarty_function_counter(array('assign'=>'index'),$_smarty_tpl);?>

	<?php echo smarty_function_math(array('equation'=>"left % right",'left'=>$_smarty_tpl->tpl_vars['index']->value,'right'=>$_smarty_tpl->tpl_vars['basicMaxColumns']->value,'assign'=>'modVal'),$_smarty_tpl);?>

	<?php if (($_smarty_tpl->tpl_vars['index']->value%$_smarty_tpl->tpl_vars['basicMaxColumns']->value == 1 && $_smarty_tpl->tpl_vars['index']->value != 1)) {?>
		</tr><tr>
	<?php }?>
	
	<td scope="row" nowrap="nowrap" width='1%' >
		
		<label for='search_name_basic' ><?php echo smarty_function_sugar_translate(array('label'=>'LBL_NAME','module'=>'Users'),$_smarty_tpl);?>
</label>
    	</td>

	
	<td  nowrap="nowrap" width='1%'>
			
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['search_name_basic']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['search_name_basic']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['search_name_basic']['value']);
}?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['search_name_basic']['name'];?>
' 
    id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['search_name_basic']['name'];?>
' size='30' 
     
    value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''  tabindex='1'      accesskey='9'  >
   						<?php }?>
		   	</td>
    <?php if (count($_smarty_tpl->tpl_vars['formData']->value) >= $_smarty_tpl->tpl_vars['basicMaxColumns']->value+1) {?>
    </tr>
    <tr>
	<td colspan="<?php echo $_smarty_tpl->tpl_vars['searchTableColumnCount']->value;?>
">
    <?php } else { ?>
	<td class="sumbitButtons">
    <?php }?>
        <input tabindex="2" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SEARCH_BUTTON_TITLE'];?>
" onclick="SUGAR.savedViews.setChooser();" class="button" type="submit" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SEARCH_BUTTON_LABEL'];?>
" id="search_form_submit"/>&nbsp;
	    <input tabindex='2' title='<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLEAR_BUTTON_TITLE'];?>
' onclick='SUGAR.searchForm.clear_form(this.form); return false;' class='button' type='button' name='clear' id='search_form_clear' value='<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLEAR_BUTTON_LABEL'];?>
'/>
        <?php if ($_smarty_tpl->tpl_vars['HAS_ADVANCED_SEARCH']->value) {?>
	    &nbsp;&nbsp;<a id="advanced_search_link" onclick="SUGAR.searchForm.searchFormSelect('<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
|advanced_search','<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
|basic_search')" href="javascript:void(0);" accesskey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_ADV_SEARCH_LNK_KEY'];?>
" ><?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_ADVANCED_SEARCH'];?>
</a>
	    <?php }?>
    </td>
	<td class="helpIcon" width="*"><img alt="Help" border='0' id="filterHelp" src='<?php echo smarty_function_sugar_getimagepath(array('file'=>"help-dashlet.gif"),$_smarty_tpl);?>
'></td>
	</tr>
</table>
<?php echo '<script'; ?>
 language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['search_form_created_by_name_basic']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["created_by_name_basic","created_by_basic"],"required_list":["created_by"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};sqs_objects['search_form_business_center_name_basic']={"form":"search_form","method":"query","modules":["BusinessCenters"],"group":"or","field_list":["name","id"],"populate_list":["business_center_name_basic","business_center_id_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects['search_form_team_name_basic']={"form":"search_form","method":"query","modules":["Teams"],"group":"or","field_list":["name","id"],"populate_list":["team_name_basic","team_id_basic"],"required_list":["team_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""},{"name":"name","op":"like_custom","begin":"(","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects['search_form_reports_to_name_basic']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["reports_to_name_basic","reports_to_id_basic"],"required_list":["reports_to_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};<?php echo '</script'; ?>
><?php }
}