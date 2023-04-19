<?php
/* Smarty version 3.1.45, created on 2023-04-13 12:02:04
  from '/var/www/html/starrettco_0413_12549075/include/SearchForm/tpls/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_6437ef3c2022e4_01068265',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ae3a0f9cc12335c469d348922b7f7809a3c452f' => 
    array (
      0 => '/var/www/html/starrettco_0413_12549075/include/SearchForm/tpls/footer.tpl',
      1 => 1664193966,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6437ef3c2022e4_01068265 (Smarty_Internal_Template $_smarty_tpl) {
?>{*
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
</form>
<?php echo '<script'; ?>
>
function toggleInlineSearch()
{
    var $trigger = $("#tabFormAdvLink");
    if (document.getElementById('inlineSavedSearch').style.display == 'none'){
        document.getElementById('showSSDIV').value = 'yes'		
        document.getElementById('inlineSavedSearch').style.display = '';
        $trigger.attr("title", "{sugar_translate label='LBL_ALT_HIDE_OPTIONS'}")
            .addClass('expanded');
    }else{
        $trigger.attr("title", "{sugar_translate label='LBL_ALT_SHOW_OPTIONS'}")
            .removeClass("expanded");
        document.getElementById('showSSDIV').value = 'no';
        document.getElementById('inlineSavedSearch').style.display = 'none';		
    }
}
<?php echo '</script'; ?>
>
<?php }
}
