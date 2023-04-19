<?php
/* Smarty version 3.1.45, created on 2023-04-13 12:02:04
  from '/var/www/html/starrettco_0413_12549075/modules/SavedSearch/SavedSearchSelects.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_6437ef3c11c691_13258599',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd05dd16668d8a494e8c9a89345f87d028c51feb5' => 
    array (
      0 => '/var/www/html/starrettco_0413_12549075/modules/SavedSearch/SavedSearchSelects.tpl',
      1 => 1664193964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6437ef3c11c691_13258599 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['SAVED_SEARCHES_OPTIONS']->value != null) {?>
<select style="width: auto !important; min-width: 150px;" name='saved_search_select' id='saved_search_select' onChange='SUGAR.savedViews.shortcut_select(this, "<?php echo $_smarty_tpl->tpl_vars['SEARCH_MODULE']->value;?>
");'>
	<?php echo $_smarty_tpl->tpl_vars['SAVED_SEARCHES_OPTIONS']->value;?>

</select>
<?php echo '<script'; ?>
>
	//if the function exists, call the function that will populate the searchform
	//labels based on the value of the saved search dropdown
	if(typeof(fillInLabels)=='function'){
		fillInLabels();
	}
<?php echo '</script'; ?>
>
<?php }?>

<?php }
}
