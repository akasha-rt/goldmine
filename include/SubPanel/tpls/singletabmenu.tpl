{*

/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2014 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/




*}


<script type="text/javascript">
SUGAR.util.doWhen("typeof get_module_name != 'undefined'", function()
{ldelim}
	SUGAR.subpanelUtils.currentSubpanelGroup = '{$startSubPanel}';

	SUGAR.subpanelUtils.subpanelMoreTab = '{$moreTab}';

	SUGAR.subpanelUtils.subpanelMaxSubtabs = '{$maxSubtabs}';

	SUGAR.subpanelUtils.subpanelHtml = new Array();

	SUGAR.subpanelUtils.loadedGroups = Array();
	SUGAR.subpanelUtils.loadedGroups.push('{$startSubPanel}');

	SUGAR.subpanelUtils.subpanelSubTabs = new Array();
	SUGAR.subpanelUtils.subpanelGroups = new Array();
{foreach from=$othertabs item=tab}
{assign var='notFirst' value='0'}
	SUGAR.subpanelUtils.subpanelGroups['{$tab.key}'] = [{foreach from=$tab.tabs item=subtab}{if $notFirst != 0}, {else}{assign var='notFirst' value='1'}{/if}'{$subtab.key}'{/foreach}{foreach from=$otherMoreSubMenu[$tab.key].tabs item=subtab}, '{$subtab.key}'{/foreach}];
{/foreach}

{assign var='notFirst' value='0'}
	SUGAR.subpanelUtils.subpanelTitles = {$subpanelTitlesJSON};

	SUGAR.subpanelUtils.tabCookieName = get_module_name() + '_sp_tab';

	SUGAR.subpanelUtils.showLinks = {$showLinks};

	SUGAR.subpanelUtils.requestUrl = 'index.php?to_pdf=1&module=MySettings&action=LoadTabSubpanels&loadModule={$smarty.request.module}&record={$smarty.request.record}&subpanels=';
{rdelim});
</script>


{if !empty($sugartabs)}
<ul id="groupTabs" class="subpanelTablist">
{foreach from=$sugartabs item=tab}
	<li id="{$tab.label}_sp_tab">
		<a class="{$tab.type}" href="javascript:SUGAR.subpanelUtils.loadSubpanelGroup('{$tab.label}');">{$tab.label}</a>
	</li>
{/foreach}
{if !empty($moreMenu)}
	<li>
		<div id='MorePanelHandle' onmouseover='SUGAR.subpanelUtils.menu.tbspButtonMouseOver(this.id,"","",0);'>
			{sugar_getimage name="blank" ext=".gif" width="16" height="16" alt=$app_strings.LBL_MORE other_attributes='border="0" '}
		</div>
	</li>
{/if}
</ul>
{* Table closed in SubPanelTiles.php, line 295 *}
<table width="100%" cellspacing="0" cellpadding="0" border="0" class="subpanelTabForm">
	<tr>
		<td>
{/if}

{if $showLinks == 'true'}
<table cellpadding="0" cellspacing="0" width='100%'>
	<tr height="20">
		<td class="subpanelSubTabBar" colspan="100" id="subpanelSubTabs">
			<table border="0" cellpadding="0" cellspacing="0" height="20" width="100%" class="subTabs">
				<tbody>
				<tr>
{foreach from=$subtabs item=tab}
{if !empty($notFirst) && ($notFirst != 0) && ($notFirst != 1)}
					<td width='1'> | </td>
{else}
{assign var='notFirst' value='2'}
{/if}
					<td nowrap="nowrap">
						<a href='#{$tab.key}' class='subTabLink'>{$tab.label}</a>
					</td>
{/foreach}
{if !empty($otherMoreSubMenu[$moreSubMenuName].tabs)}
					<td nowrap="nowrap"> | &nbsp;<span class="subTabMore" id="MoreSub{$moreSubMenuName}PanelHandle" style="margin-left:2px; cursor: pointer; cursor: hand;" align="absmiddle" onmouseover="SUGAR.subpanelUtils.menu.tbspButtonMouseOver(this.id,'','',0);">&gt;&gt;</span></td>
{/if}
					<td width='100%'>&nbsp;</td>
				</tr>
				</tbody>
			</table>
		</td>
	</tr>
</table>
{/if}

{if !empty($moreMenu)}
<div id="MorePanelMenu" class="menu">
{foreach from=$moreMenu item=tab}
	<a href="javascript:SUGAR.subpanelUtils.loadSubpanelGroupFromMore('{$tab.label}');" class="menuItem" id="{$tab.label}_sp_mm" parentid="MorePanelMenu" onmouseover="hiliteItem(this,'yes'); closeSubMenus(this);" onmouseout="unhiliteItem(this);">{$tab.label}</a>
{/foreach}
</div>
{/if}

{foreach from=$otherMoreSubMenu item=group}
{if !empty($group.tabs)}
<div id="MoreSub{$group.key}PanelMenu" class="menu">
{foreach from=$group.tabs item=subtab}
	<a href="#{$subtab.key}" class="menuItem" parentid="MoreSub{$group.key}PanelMenu" onmouseover="hiliteItem(this,'yes'); closeSubMenus(this);" onmouseout="unhiliteItem(this);">{$subtab.label}</a>
{/foreach}
</div>
{/if}
{/foreach}


