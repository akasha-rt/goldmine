<?php
/* Smarty version 3.1.45, created on 2023-04-13 12:02:04
  from '/var/www/html/starrettco_0413_12549075/include/SearchForm/tpls/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_6437ef3c1e1a02_91295119',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6218d680849fd8a353e2b858dc036ca97fe87707' => 
    array (
      0 => '/var/www/html/starrettco_0413_12549075/include/SearchForm/tpls/header.tpl',
      1 => 1664193966,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6437ef3c1e1a02_91295119 (Smarty_Internal_Template $_smarty_tpl) {
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
<div class="clear"></div>
<div class='listViewBody'>
<?php echo '<script'; ?>
 type="text/javascript" src="{sugar_getjspath file='include/javascript/popup_parent_helper.js'}"><?php echo '</script'; ?>
>
{$TABS}
<?php if ($_smarty_tpl->tpl_vars['displayView']->value == 'saved_views') {
echo '<script'; ?>
>SUGAR.savedViews.handleForm();<?php echo '</script'; ?>
>
<?php }
echo '<script'; ?>
>
function submitOnEnter(e)
{
    var characterCode = (e && e.which) ? e.which : event.keyCode;

    if (characterCode == 13) {
        document.getElementById('search_form').submit();
        return false;
    } else {
        return true;
    }
}
<?php echo '</script'; ?>
>
<form name='search_form' id='search_form' class='search_form' method='post' action='index.php?module={$module}&action={$action}' onkeydown='submitOnEnter(event);'>
{sugar_csrf_form_token}
<input type='hidden' name='searchFormTab' value='{$displayView}'/>
<input type='hidden' name='module' value='{$module}'/>
<input type='hidden' name='action' value='{$action}'/> 
<input type='hidden' name='query' value='true'/>
{foreach name=tabIteration from=$TAB_ARRAY key=tabkey item=tabData}
<div id='{$module}{$tabData.name}_searchSearchForm' style='{$tabData.displayDiv}' class="edit view search {$tabData.name}">{if $tabData.displayDiv}{else}{$return_txt}{/if}</div>
{/foreach}
<div id='{$module}saved_viewsSearchForm' <?php if ($_smarty_tpl->tpl_vars['displayView']->value != 'saved_views') {?>style='display: none;'<?php }?>>{$saved_views_txt}</div>
<?php }
}