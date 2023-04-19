<?php
/* Smarty version 3.1.45, created on 2023-04-17 14:53:41
  from '/var/www/html/starrettco_0413_12549075/cache/modules/Users/SearchFormFooter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_643d5d75775e99_65567214',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f831a3148e02da45099d78dd13df2a780cc2a20b' => 
    array (
      0 => '/var/www/html/starrettco_0413_12549075/cache/modules/Users/SearchFormFooter.tpl',
      1 => 1681743221,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643d5d75775e99_65567214 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/starrettco_0413_12549075/include/SugarSmarty/plugins/function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),));
?>

</form>
<?php echo '<script'; ?>
>
function toggleInlineSearch()
{
    var $trigger = $("#tabFormAdvLink");
    if (document.getElementById('inlineSavedSearch').style.display == 'none'){
        document.getElementById('showSSDIV').value = 'yes'		
        document.getElementById('inlineSavedSearch').style.display = '';
        $trigger.attr("title", "<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ALT_HIDE_OPTIONS'),$_smarty_tpl);?>
")
            .addClass('expanded');
    }else{
        $trigger.attr("title", "<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ALT_SHOW_OPTIONS'),$_smarty_tpl);?>
")
            .removeClass("expanded");
        document.getElementById('showSSDIV').value = 'no';
        document.getElementById('inlineSavedSearch').style.display = 'none';		
    }
}
<?php echo '</script'; ?>
>
<?php }
}
