<?php
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Master Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/master-subscription-agreement
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * among other things: 1) sublicense, resell, rent, lease, redistribute, assign
 * or otherwise transfer Your rights to the Software, and 2) use the Software
 * for timesharing or service bureau purposes such as hosting the Software for
 * commercial gain and/or for the benefit of a third party.  Use of the Software
 * may be subject to applicable fees and any use of the Software without first
 * paying applicable fees is strictly prohibited.  You do not have the right to
 * remove SugarCRM copyrights from the source code or user interface.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *  (i) the "Powered by SugarCRM" logo and
 *  (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * Your Warranty, Limitations of liability and Indemnity are expressly stated
 * in the License.  Please refer to the License for the specific language
 * governing these rights and limitations under the License.  Portions created
 * by SugarCRM are Copyright (C) 2004-2012 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/

$manifest = array (
  'acceptable_sugar_versions' => 
  array (
    'regex_matches' => array(
            '[0123456789]\.[0123456789]+\.\d\w*'
         ),
    ),
  'acceptable_sugar_flavors' => array ( 'CE','PRO','CORP', 'ENT','ULT'),
  'readme' => '',
  'key' => 'sf',
  'author' => 'Sugar Market',
  'description' => 'Sugar Market Connector',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'Sugar Market',
  'published_date' => '2021-12-23 13:40:00',
  'type' => 'module',
  'version' => '2.0',
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'ext_rest_salesfusion',
  'beans' =>
  array (
    0 =>
    array (
      'module' => 'sf_webActivity',
      'class' => 'sf_webActivity',
      'path' => 'modules/sf_webActivity/sf_webActivity.php',
      'tab' => true,
    ),
    1 =>
    array (
      'module' => 'sf_WebActivityDetail',
      'class' => 'sf_WebActivityDetail',
      'path' => 'modules/sf_WebActivityDetail/sf_WebActivityDetail.php',
      'tab' => false,
    ),
    2 =>
    array (
      'module' => 'sf_Dialogs',
      'class' => 'sf_Dialogs',
      'path' => 'modules/sf_Dialogs/sf_Dialogs.php',
      'tab' => false,
    ),
    3 =>
    array (
      'module' => 'sf_EventManagement',
      'class' => 'sf_EventManagement',
      'path' => 'modules/sf_EventManagement/sf_EventManagement.php',
      'tab' => false,
    ),    
  ),
  'connectors' => array (
  array (
    'connector' => '<basepath>/Files/source',
    'name' => '',
  ),
  ),
  'pre_execute' => array( 
  '<basepath>/scripts/pre_install.php',
  ),
  'post_uninstall' => array(
  '<basepath>/scripts/post_uninstall.php',
  ),
  'post_uninstall' => array(
  '<basepath>/scripts/add_focus_dashboard.php',
  ),
  'layoutdefs' =>
  array (
    0 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/sf_webactivity_accounts_Accounts.php',
      'to_module' => 'Accounts',
    ),
    1 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/sf_webactivity_leads_Leads.php',
      'to_module' => 'Leads',
    ),
    2 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/sf_webactivity_contacts_Contacts.php',
      'to_module' => 'Contacts',
    ),
    3 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/sf_webactivitydetail_sf_webactivity_sf_webActivity.php',
      'to_module' => 'sf_webActivity',
    ),
    4 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/sf_dialogs_contacts_Contacts.php',
      'to_module' => 'Contacts',
    ),
    5 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/sf_dialogs_leads_Leads.php',
      'to_module' => 'Leads',
    ),
    6 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/sf_eventmanagement_contacts_Contacts.php',
      'to_module' => 'Contacts',
    ),
    7 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/sf_eventmanagement_leads_Leads.php',
      'to_module' => 'Leads',
    ),
  ),
  'sidecarsubpanelbaselayout' =>
  array (
    0 =>
    array (
      'from' => '<basepath>/SugarModules/clients/base/layouts/subpanels/sf_web_activity_accounts_Accounts.php',
      'to_module' => 'Accounts',
    ),
    1 =>
    array (
      'from' => '<basepath>/SugarModules/clients/base/layouts/subpanels/sf_web_activity_leads_Leads.php',
      'to_module' => 'Leads',
    ),
    2 =>
    array (
      'from' => '<basepath>/SugarModules/clients/base/layouts/subpanels/sf_web_activity_contacts_Contacts.php',
      'to_module' => 'Contacts',
    ),
    3 =>
    array (
      'from' => '<basepath>/SugarModules/clients/base/layouts/subpanels/sf_web_activity_sf_web_activity_detail_sf_Web_Activity.php',
      'to_module' => 'sf_webActivity',
    ),
    4 =>
    array (
      'from' => '<basepath>/SugarModules/clients/base/layouts/subpanels/sf_event_management_contacts_Contacts.php',
      'to_module' => 'Contacts',
    ),
    5 =>
    array (
      'from' => '<basepath>/SugarModules/clients/base/layouts/subpanels/sf_event_management_leads_Leads.php',
      'to_module' => 'Leads',
    ),
    6 =>
    array (
      'from' => '<basepath>/SugarModules/clients/base/layouts/subpanels/sf_dialogs_contacts_Contacts.php',
      'to_module' => 'Contacts',
    ),
    7 =>
    array (
      'from' => '<basepath>/SugarModules/clients/base/layouts/subpanels/sf_dialogs_leads_Leads.php',
      'to_module' => 'Leads',
    ),
  ),
  'relationships' =>
  array (
    0 =>
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/sf_webactivity_accountsMetaData.php',
    ),
    1 =>
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/sf_webactivity_leadsMetaData.php',
    ),
    2 =>
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/sf_webactivity_contactsMetaData.php',
    ),
    3 =>
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/sf_webactivitydetail_sf_webactivityMetaData.php',
    ),
    4 =>
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/sf_dialogs_contactsMetaData.php',
    ),
    5 =>
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/sf_dialogs_leadsMetaData.php',
    ),
    6 =>
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/sf_eventmanagement_contactsMetaData.php',
    ),
    7 =>
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/sf_eventmanagement_leadsMetaData.php',
    ),
  ),
  'image_dir' => '<basepath>/icons',
  'copy' =>
  array (
    0 =>
    array (
      'from' => '<basepath>/SugarModules/modules/sf_webActivity',
      'to' => 'modules/sf_webActivity',
    ),
    1 =>
    array (
      'from' => '<basepath>/SugarModules/modules/sf_WebActivityDetail',
      'to' => 'modules/sf_WebActivityDetail',
    ),
    2 =>
    array (
      'from' => '<basepath>/Extension/modules/Campaigns/Ext/Vardefs/sugarfield_bounced_c.php',
      'to' => 'custom/Extension/modules/Campaigns/Ext/Vardefs/sugarfield_bounced_c.php',
    ),
    3 =>
    array (
      'from' => '<basepath>/Extension/modules/Campaigns/Ext/Vardefs/sugarfield_delivered_c.php',
      'to' => 'custom/Extension/modules/Campaigns/Ext/Vardefs/sugarfield_delivered_c.php',
    ),
    4 =>
    array (
      'from' => '<basepath>/Extension/modules/Campaigns/Ext/Vardefs/sugarfield_forwards_c.php',
      'to' => 'custom/Extension/modules/Campaigns/Ext/Vardefs/sugarfield_forwards_c.php',
    ),
    5 =>
    array (
      'from' => '<basepath>/Extension/modules/Campaigns/Ext/Vardefs/sugarfield_notreported_c.php',
      'to' => 'custom/Extension/modules/Campaigns/Ext/Vardefs/sugarfield_notreported_c.php',
    ),
    6 =>
    array (
      'from' => '<basepath>/Extension/modules/Campaigns/Ext/Vardefs/sugarfield_peoplewhoclicked_c.php',
      'to' => 'custom/Extension/modules/Campaigns/Ext/Vardefs/sugarfield_peoplewhoclicked_c.php',
    ),
    7 =>
    array (
      'from' => '<basepath>/Extension/modules/Campaigns/Ext/Vardefs/sugarfield_peoplewhoopened_c.php',
      'to' => 'custom/Extension/modules/Campaigns/Ext/Vardefs/sugarfield_peoplewhoopened_c.php',
    ),
    8 =>
    array (
      'from' => '<basepath>/Extension/modules/Campaigns/Ext/Vardefs/sugarfield_postdate_c.php',
      'to' => 'custom/Extension/modules/Campaigns/Ext/Vardefs/sugarfield_postdate_c.php',
    ),
    9 =>
    array (
      'from' => '<basepath>/Extension/modules/Campaigns/Ext/Vardefs/sugarfield_sent_c.php',
      'to' => 'custom/Extension/modules/Campaigns/Ext/Vardefs/sugarfield_sent_c.php',
    ),
    10 =>
    array (
      'from' => '<basepath>/Extension/modules/Campaigns/Ext/Vardefs/sugarfield_social_c.php',
      'to' => 'custom/Extension/modules/Campaigns/Ext/Vardefs/sugarfield_social_c.php',
    ),
    11 =>
    array (
      'from' => '<basepath>/Extension/modules/Campaigns/Ext/Vardefs/sugarfield_totalclicks_c.php',
      'to' => 'custom/Extension/modules/Campaigns/Ext/Vardefs/sugarfield_totalclicks_c.php',
    ),
    12 =>
    array (
      'from' => '<basepath>/Extension/modules/Campaigns/Ext/Vardefs/sugarfield_totalopens_c.php',
      'to' => 'custom/Extension/modules/Campaigns/Ext/Vardefs/sugarfield_totalopens_c.php',
    ),
    13 =>
    array (
      'from' => '<basepath>/Extension/modules/Campaigns/Ext/Vardefs/sugarfield_unopened_c.php',
      'to' => 'custom/Extension/modules/Campaigns/Ext/Vardefs/sugarfield_unopened_c.php',
    ),
    14 =>
    array (
      'from' => '<basepath>/Extension/modules/Campaigns/Ext/Vardefs/sugarfield_unsubscribed_c.php',
      'to' => 'custom/Extension/modules/Campaigns/Ext/Vardefs/sugarfield_unsubscribed_c.php',
    ),
	15 =>
    array (
      'from' => '<basepath>/Extension/modules/Prospects/Ext/Vardefs/sugarfield_clicked_c.php',
      'to' => 'custom/Extension/modules/Prospects/Ext/Vardefs/sugarfield_clicked_c.php',
    ),
    16 =>
    array (
      'from' => '<basepath>/Extension/modules/Prospects/Ext/Vardefs/sugarfield_deliverymessage_c.php',
      'to' => 'custom/Extension/modules/Prospects/Ext/Vardefs/sugarfield_deliverymessage_c.php',
    ),
    17 =>
    array (
      'from' => '<basepath>/Extension/modules/Prospects/Ext/Vardefs/sugarfield_deliverystatus_c.php',
      'to' => 'custom/Extension/modules/Prospects/Ext/Vardefs/sugarfield_deliverystatus_c.php',
    ),
    18 =>
    array (
      'from' => '<basepath>/Extension/modules/Prospects/Ext/Vardefs/sugarfield_forms_c.php',
      'to' => 'custom/Extension/modules/Prospects/Ext/Vardefs/sugarfield_forms_c.php',
    ),
    19 =>
    array (
      'from' => '<basepath>/Extension/modules/Prospects/Ext/Vardefs/sugarfield_friendforward_c.php',
      'to' => 'custom/Extension/modules/Prospects/Ext/Vardefs/sugarfield_friendforward_c.php',
    ),
    20 =>
    array (
      'from' => '<basepath>/Extension/modules/Prospects/Ext/Vardefs/sugarfield_opened_c.php',
      'to' => 'custom/Extension/modules/Prospects/Ext/Vardefs/sugarfield_opened_c.php',
    ),
    21 =>
    array (
      'from' => '<basepath>/Extension/modules/Prospects/Ext/Vardefs/sugarfield_unsub_c.php',
      'to' => 'custom/Extension/modules/Prospects/Ext/Vardefs/sugarfield_unsub_c.php',
    ),
    22 =>
    array (
      'from' => '<basepath>/SugarModules/modules/sf_Dialogs',
      'to' => 'modules/sf_Dialogs',
    ),
    23 =>
    array (
      'from' => '<basepath>/SugarModules/modules/sf_EventManagement',
      'to' => 'modules/sf_EventManagement',
    ),
    24 =>
    array (
      'from' => '<basepath>/SugarModules/clients/base/layouts/subpanels/sf_web_activity_accounts_Accounts.php',
      'to' => 'custom/Extension/modules/Accounts/Ext/clients/base/layouts/subpanels/sf_web_activity_accounts_Accounts.php',
    ),
    25 =>
    array (
      'from' => '<basepath>/SugarModules/clients/base/layouts/subpanels/sf_web_activity_contacts_Contacts.php',
      'to' => 'custom/Extension/modules/Contacts/Ext/clients/base/layouts/subpanels/sf_web_activity_contacts_Contacts.php',
    ),
    26 =>
    array (
      'from' => '<basepath>/SugarModules/clients/base/layouts/subpanels/sf_event_management_contacts_Contacts.php',
      'to' => 'custom/Extension/modules/Contacts/Ext/clients/base/layouts/subpanels/sf_event_management_contacts_Contacts.php',
    ),
    27 =>
    array (
      'from' => '<basepath>/SugarModules/clients/base/layouts/subpanels/sf_dialogs_contacts_Contacts.php',
      'to' => 'custom/Extension/modules/Contacts/Ext/clients/base/layouts/subpanels/sf_dialogs_contacts_Contacts.php',
    ),
    28 =>
    array (
      'from' => '<basepath>/SugarModules/clients/base/layouts/subpanels/sf_web_activity_leads_Leads.php',
      'to' => 'custom/Extension/modules/Leads/Ext/clients/base/layouts/subpanels/sf_web_activity_leads_Leads.php',
    ),
    29 =>
    array (
      'from' => '<basepath>/SugarModules/clients/base/layouts/subpanels/sf_event_management_leads_Leads.php',
      'to' => 'custom/Extension/modules/Leads/Ext/clients/base/layouts/subpanels/sf_event_management_leads_Leads.php',
    ),
    30 =>
    array (
      'from' => '<basepath>/SugarModules/clients/base/layouts/subpanels/sf_dialogs_leads_Leads.php',
      'to' => 'custom/Extension/modules/Leads/Ext/clients/base/layouts/subpanels/sf_dialogs_leads_Leads.php',
    ),
    31 =>
    array (
      'from' => '<basepath>/SugarModules/clients/base/layouts/subpanels/sf_web_activity_sf_web_activity_detail_sf_Web_Activity.php',
      'to' => 'custom/Extension/modules/sf_webActivity/Ext/clients/base/layouts/subpanels/sf_web_activity_sf_web_activity_detail_sf_Web_Activity.php',
    ),
    32 =>
    array (
      'from' => '<basepath>/Files/custom/clients/base/api/SalesFusionApi.php',
      'to' => 'custom/clients/base/api/SalesFusionApi.php',
    ),
    33 =>
    array (
      'from' => '<basepath>/Files/custom/clients/base/fields/salesfusion-button',
      'to' => 'custom/clients/base/fields/salesfusion-button',
    ),
    36  =>
    array (
      'from' => '<basepath>/Files/custom/clients/base/views/salesfusion-dash-leadsandcontactslistview',
      'to' => 'custom/clients/base/views/salesfusion-dash-leadsandcontactslistview',
    ),   
    37 =>
    array (
      'from' => '<basepath>/Files/custom/clients/base/fields/img-button',
      'to' => 'custom/clients/base/fields/img-button',
    ),
    38 =>
    array (
      'from' => '<basepath>/Files/custom/clients/base/layouts/sf_drawer',
      'to' => 'custom/clients/base/layouts/sf_drawer',
    ),
    41 =>
    array (
      'from' => '<basepath>/Files/custom/sf/images/favicon.png',
      'to' => 'custom/sf/images/favicon.png',
    ),
    42 =>
    array (
      'from' => '<basepath>/Files/custom/sf/sfCustom.css',
      'to' => 'custom/sf/sfCustom.css',
    ),
    43  =>
    array (
      'from' => '<basepath>/Files/custom/clients/base/views/salesfusion-dash-emails',
      'to' => 'custom/clients/base/views/salesfusion-dash-emails',
    ),
    44  =>
    array (
      'from' => '<basepath>/Files/custom/clients/base/views/salesfusion-dash-webhits',
      'to' => 'custom/clients/base/views/salesfusion-dash-webhits',
    ),
    45  =>
    array (
      'from' => '<basepath>/Files/custom/clients/base/views/salesfusion-dash-landing',
      'to' => 'custom/clients/base/views/salesfusion-dash-landing',
    ),
    46  =>
    array (
      'from' => '<basepath>/Files/custom/Extension/modules/Contacts/Ext/clients/base/views/record/recContactAddButtons.php',
      'to' => 'custom/Extension/modules/Contacts/Ext/clients/base/views/record/recContactAddButtons.php',
    ),
    47  =>
    array (
      'from' => '<basepath>/Files/custom/Extension/modules/Leads/Ext/clients/base/views/record/recLeadsAddButtons.php',
      'to' => 'custom/Extension/modules/Leads/Ext/clients/base/views/record/recLeadsAddButtons.php',
    ),
	48 => 
    array (
      'from' => '<basepath>/SugarModules/modules/Contacts/clients/portal/views/list/list.php',
      'to' => 'custom/modules/Contacts/clients/portal/views/list/list.php',
    ),
    49 => 
    array (
      'from' => '<basepath>/SugarModules/modules/Leads/clients/portal/views/list/list.php',
      'to' => 'custom/modules/Leads/clients/portal/views/list/list.php',
    ),
    50 => 
    array (
      'from' => '<basepath>/SugarModules/modules/Leads/clients/portal/views/record/record.php',
      'to' => 'custom/modules/Leads/clients/portal/views/record/record.php',
    ),
    51 => 
    array (
      'from' => '<basepath>/Extension/modules/Leads/Ext/Vardefs/sf_webactivity_leads_Leads.php',
      'to' => 'custom/Extension/modules/Leads/Ext/Vardefs/sf_webactivity_leads_Leads.php',
    ),
    52 => 
    array (
      'from' => '<basepath>/Extension/modules/Leads/Ext/Vardefs/sugarfield_sf_lastactivity_default_c.php',
      'to' => 'custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_sf_lastactivity_default_c.php',
    ),
    53 => 
    array (
      'from' => '<basepath>/Extension/modules/Leads/Ext/Vardefs/sf_eventmanagement_leads_Leads.php',
      'to' => 'custom/Extension/modules/Leads/Ext/Vardefs/sf_eventmanagement_leads_Leads.php',
    ),
    54 => 
    array (
      'from' => '<basepath>/Extension/modules/Leads/Ext/Vardefs/sf_dialogs_leads_Leads.php',
      'to' => 'custom/Extension/modules/Leads/Ext/Vardefs/sf_dialogs_leads_Leads.php',
    ),
    55 => 
    array (
      'from' => '<basepath>/Extension/modules/Leads/Ext/WirelessLayoutdefs/sf_webactivity_leads_Leads.php',
      'to' => 'custom/Extension/modules/Leads/Ext/WirelessLayoutdefs/sf_webactivity_leads_Leads.php',
    ),
    56 => 
    array (
      'from' => '<basepath>/Extension/modules/Leads/Ext/WirelessLayoutdefs/sf_eventmanagement_leads_Leads.php',
      'to' => 'custom/Extension/modules/Leads/Ext/WirelessLayoutdefs/sf_eventmanagement_leads_Leads.php',
    ),
    57 => 
    array (
      'from' => '<basepath>/Extension/modules/Leads/Ext/WirelessLayoutdefs/sf_dialogs_leads_Leads.php',
      'to' => 'custom/Extension/modules/Leads/Ext/WirelessLayoutdefs/sf_dialogs_leads_Leads.php',
    ),
    58 => 
    array (
      'from' => '<basepath>/Extension/modules/Leads/Ext/Layoutdefs/sf_webactivity_leads_Leads.php',
      'to' => 'custom/Extension/modules/Leads/Ext/Layoutdefs/sf_webactivity_leads_Leads.php',
    ),
    59 => 
    array (
      'from' => '<basepath>/Extension/modules/Leads/Ext/Layoutdefs/sf_eventmanagement_leads_Leads.php',
      'to' => 'custom/Extension/modules/Leads/Ext/Layoutdefs/sf_eventmanagement_leads_Leads.php',
    ),
    60 => 
    array (
      'from' => '<basepath>/Extension/modules/Leads/Ext/Layoutdefs/sf_dialogs_leads_Leads.php',
      'to' => 'custom/Extension/modules/Leads/Ext/Layoutdefs/sf_dialogs_leads_Leads.php',
    ),
    61 => 
    array (
      'from' => '<basepath>/Extension/modules/Leads/Ext/Language/es_ES.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
      'to' => 'custom/Extension/modules/Leads/Ext/Language/es_ES.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
    ),
    62 => 
    array (
      'from' => '<basepath>/Extension/modules/Leads/Ext/Language/it_it.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
      'to' => 'custom/Extension/modules/Leads/Ext/Language/it_it.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
    ),
    63 => 
    array (
      'from' => '<basepath>/Extension/modules/Leads/Ext/Language/ru_RU.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
      'to' => 'custom/Extension/modules/Leads/Ext/Language/ru_RU.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
    ),
    64 => 
    array (
      'from' => '<basepath>/Extension/modules/Leads/Ext/Language/sr_RS.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
      'to' => 'custom/Extension/modules/Leads/Ext/Language/sr_RS.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
    ),
    65 => 
    array (
      'from' => '<basepath>/Extension/modules/Leads/Ext/Language/pt_PT.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
      'to' => 'custom/Extension/modules/Leads/Ext/Language/pt_PT.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
    ),
    66 => 
    array (
      'from' => '<basepath>/Extension/modules/Leads/Ext/Language/fr_FR.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
      'to' => 'custom/Extension/modules/Leads/Ext/Language/fr_FR.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
    ),
    67 => 
    array (
      'from' => '<basepath>/Extension/modules/Leads/Ext/Language/cs_CZ.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
      'to' => 'custom/Extension/modules/Leads/Ext/Language/cs_CZ.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
    ),
    68 => 
    array (
      'from' => '<basepath>/Extension/modules/Leads/Ext/Language/tr_TR.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
      'to' => 'custom/Extension/modules/Leads/Ext/Language/tr_TR.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
    ),
    69 => 
    array (
      'from' => '<basepath>/Extension/modules/Leads/Ext/Language/pt_BR.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
      'to' => 'custom/Extension/modules/Leads/Ext/Language/pt_BR.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
    ),
    70 => 
    array (
      'from' => '<basepath>/Extension/modules/Leads/Ext/Language/en_us.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
      'to' => 'custom/Extension/modules/Leads/Ext/Language/en_us.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
    ),
    71 => 
    array (
      'from' => '<basepath>/Extension/modules/Leads/Ext/Language/ro_RO.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
      'to' => 'custom/Extension/modules/Leads/Ext/Language/ro_RO.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
    ),
    72 => 
    array (
      'from' => '<basepath>/Extension/modules/Leads/Ext/Language/de_DE.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
      'to' => 'custom/Extension/modules/Leads/Ext/Language/de_DE.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
    ),
    73 => 
    array (
      'from' => '<basepath>/Extension/modules/Leads/Ext/Language/lt_LT.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
      'to' => 'custom/Extension/modules/Leads/Ext/Language/lt_LT.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
    ),
    74 => 
    array (
      'from' => '<basepath>/Extension/modules/Leads/Ext/Language/ja_JP.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
      'to' => 'custom/Extension/modules/Leads/Ext/Language/ja_JP.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
    ),
    75 => 
    array (
      'from' => '<basepath>/Extension/modules/Leads/Ext/Language/hu_HU.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
      'to' => 'custom/Extension/modules/Leads/Ext/Language/hu_HU.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
    ),
    76 => 
    array (
      'from' => '<basepath>/Extension/modules/Leads/Ext/Language/sv_SE.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
      'to' => 'custom/Extension/modules/Leads/Ext/Language/sv_SE.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
    ),
    77 => 
    array (
      'from' => '<basepath>/Extension/modules/Leads/Ext/Language/zh_CN.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
      'to' => 'custom/Extension/modules/Leads/Ext/Language/zh_CN.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
    ),
    78 => 
    array (
      'from' => '<basepath>/Extension/modules/Leads/Ext/Language/he_IL.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
      'to' => 'custom/Extension/modules/Leads/Ext/Language/he_IL.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
    ),
    79 => 
    array (
      'from' => '<basepath>/Extension/modules/Leads/Ext/Language/nb_NO.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
      'to' => 'custom/Extension/modules/Leads/Ext/Language/nb_NO.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
    ),
    80 => 
    array (
      'from' => '<basepath>/Extension/modules/Leads/Ext/Language/lv_LV.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
      'to' => 'custom/Extension/modules/Leads/Ext/Language/lv_LV.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
    ),
    81 => 
    array (
      'from' => '<basepath>/Extension/modules/Leads/Ext/Language/nl_NL.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
      'to' => 'custom/Extension/modules/Leads/Ext/Language/nl_NL.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
    ),
    82 => 
    array (
      'from' => '<basepath>/Extension/modules/Leads/Ext/Language/en_UK.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
      'to' => 'custom/Extension/modules/Leads/Ext/Language/en_UK.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
    ),
    83 => 
    array (
      'from' => '<basepath>/Extension/modules/Leads/Ext/Language/bg_BG.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
      'to' => 'custom/Extension/modules/Leads/Ext/Language/bg_BG.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
    ),
    84 => 
    array (
      'from' => '<basepath>/Extension/modules/Leads/Ext/Language/pl_PL.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
      'to' => 'custom/Extension/modules/Leads/Ext/Language/pl_PL.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
    ),
    85 => 
    array (
      'from' => '<basepath>/Extension/modules/Leads/Ext/Language/da_DK.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
      'to' => 'custom/Extension/modules/Leads/Ext/Language/da_DK.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
    ),
    86 => 
    array (
      'from' => '<basepath>/Extension/modules/Leads/Ext/Language/et_EE.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
      'to' => 'custom/Extension/modules/Leads/Ext/Language/et_EE.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
    ),
    87 => 
    array (
      'from' => '<basepath>/Extension/modules/Leads/Ext/Language/en_us.MySQLNewFieldsAdded.lang.php',
      'to' => 'custom/Extension/modules/Leads/Ext/Language/en_us.MySQLNewFieldsAdded.lang.php',
    ),
    88 => 
    array (
      'from' => '<basepath>/Extension/modules/Leads/Ext/Language/ca_ES.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
      'to' => 'custom/Extension/modules/Leads/Ext/Language/ca_ES.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
    ),
    89 => 
    array (
      'from' => '<basepath>/Extension/modules/Leads/Ext/clients/base/layouts/subpanels/sf_web_activity_leads_Leads.php',
      'to' => 'custom/Extension/modules/Leads/Ext/clients/base/layouts/subpanels/sf_web_activity_leads_Leads.php',
    ),
    90 => 
    array (
      'from' => '<basepath>/Extension/modules/Leads/Ext/clients/base/layouts/subpanels/sf_dialogs_leads_Leads.php',
      'to' => 'custom/Extension/modules/Leads/Ext/clients/base/layouts/subpanels/sf_dialogs_leads_Leads.php',
    ),
    91 => 
    array (
      'from' => '<basepath>/Extension/modules/Leads/Ext/clients/base/layouts/subpanels/sf_event_management_leads_Leads.php',
      'to' => 'custom/Extension/modules/Leads/Ext/clients/base/layouts/subpanels/sf_event_management_leads_Leads.php',
    ),
    92 => 
    array (
      'from' => '<basepath>/Extension/modules/Contacts/Ext/Vardefs/sf_webactivity_contacts_Contacts.php',
      'to' => 'custom/Extension/modules/Contacts/Ext/Vardefs/sf_webactivity_contacts_Contacts.php',
    ),
    93 => 
    array (
      'from' => '<basepath>/Extension/modules/Contacts/Ext/Vardefs/sugarfield_sf_lastactivity_default_c.php',
      'to' => 'custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_sf_lastactivity_default_c.php',
    ),
    94 => 
    array (
      'from' => '<basepath>/Extension/modules/Contacts/Ext/Vardefs/sf_eventmanagement_contacts_Contacts.php',
      'to' => 'custom/Extension/modules/Contacts/Ext/Vardefs/sf_eventmanagement_contacts_Contacts.php',
    ),
    95 => 
    array (
      'from' => '<basepath>/Extension/modules/Contacts/Ext/Vardefs/sf_dialogs_contacts_Contacts.php',
      'to' => 'custom/Extension/modules/Contacts/Ext/Vardefs/sf_dialogs_contacts_Contacts.php',
    ),
    96 => 
    array (
      'from' => '<basepath>/Extension/modules/Contacts/Ext/WirelessLayoutdefs/sf_webactivity_contacts_Contacts.php',
      'to' => 'custom/Extension/modules/Contacts/Ext/WirelessLayoutdefs/sf_webactivity_contacts_Contacts.php',
    ),
    97 => 
    array (
      'from' => '<basepath>/Extension/modules/Contacts/Ext/WirelessLayoutdefs/sf_eventmanagement_contacts_Contacts.php',
      'to' => 'custom/Extension/modules/Contacts/Ext/WirelessLayoutdefs/sf_eventmanagement_contacts_Contacts.php',
    ),
    98 => 
    array (
      'from' => '<basepath>/Extension/modules/Contacts/Ext/WirelessLayoutdefs/sf_dialogs_contacts_Contacts.php',
      'to' => 'custom/Extension/modules/Contacts/Ext/WirelessLayoutdefs/sf_dialogs_contacts_Contacts.php',
    ),
    99 => 
    array (
      'from' => '<basepath>/Extension/modules/Contacts/Ext/Layoutdefs/sf_webactivity_contacts_Contacts.php',
      'to' => 'custom/Extension/modules/Contacts/Ext/Layoutdefs/sf_webactivity_contacts_Contacts.php',
    ),
    100 => 
    array (
      'from' => '<basepath>/Extension/modules/Contacts/Ext/Layoutdefs/sf_eventmanagement_contacts_Contacts.php',
      'to' => 'custom/Extension/modules/Contacts/Ext/Layoutdefs/sf_eventmanagement_contacts_Contacts.php',
    ),
    101 => 
    array (
      'from' => '<basepath>/Extension/modules/Contacts/Ext/Layoutdefs/sf_dialogs_contacts_Contacts.php',
      'to' => 'custom/Extension/modules/Contacts/Ext/Layoutdefs/sf_dialogs_contacts_Contacts.php',
    ),
    102 => 
    array (
      'from' => '<basepath>/Extension/modules/Contacts/Ext/Language/es_ES.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
      'to' => 'custom/Extension/modules/Contacts/Ext/Language/es_ES.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
    ),
    103 => 
    array (
      'from' => '<basepath>/Extension/modules/Contacts/Ext/Language/it_it.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
      'to' => 'custom/Extension/modules/Contacts/Ext/Language/it_it.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
    ),
    104 => 
    array (
      'from' => '<basepath>/Extension/modules/Contacts/Ext/Language/ru_RU.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
      'to' => 'custom/Extension/modules/Contacts/Ext/Language/ru_RU.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
    ),
    105 => 
    array (
      'from' => '<basepath>/Extension/modules/Contacts/Ext/Language/sr_RS.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
      'to' => 'custom/Extension/modules/Contacts/Ext/Language/sr_RS.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
    ),
    106 => 
    array (
      'from' => '<basepath>/Extension/modules/Contacts/Ext/Language/pt_PT.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
      'to' => 'custom/Extension/modules/Contacts/Ext/Language/pt_PT.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
    ),
    107 => 
    array (
      'from' => '<basepath>/Extension/modules/Contacts/Ext/Language/fr_FR.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
      'to' => 'custom/Extension/modules/Contacts/Ext/Language/fr_FR.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
    ),
    108 => 
    array (
      'from' => '<basepath>/Extension/modules/Contacts/Ext/Language/cs_CZ.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
      'to' => 'custom/Extension/modules/Contacts/Ext/Language/cs_CZ.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
    ),
    109 => 
    array (
      'from' => '<basepath>/Extension/modules/Contacts/Ext/Language/tr_TR.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
      'to' => 'custom/Extension/modules/Contacts/Ext/Language/tr_TR.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
    ),
    110 => 
    array (
      'from' => '<basepath>/Extension/modules/Contacts/Ext/Language/pt_BR.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
      'to' => 'custom/Extension/modules/Contacts/Ext/Language/pt_BR.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
    ),
    111 => 
    array (
      'from' => '<basepath>/Extension/modules/Contacts/Ext/Language/en_us.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
      'to' => 'custom/Extension/modules/Contacts/Ext/Language/en_us.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
    ),
    112 => 
    array (
      'from' => '<basepath>/Extension/modules/Contacts/Ext/Language/ro_RO.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
      'to' => 'custom/Extension/modules/Contacts/Ext/Language/ro_RO.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
    ),
    113 => 
    array (
      'from' => '<basepath>/Extension/modules/Contacts/Ext/Language/de_DE.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
      'to' => 'custom/Extension/modules/Contacts/Ext/Language/de_DE.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
    ),
    114 => 
    array (
      'from' => '<basepath>/Extension/modules/Contacts/Ext/Language/lt_LT.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
      'to' => 'custom/Extension/modules/Contacts/Ext/Language/lt_LT.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
    ),
    115 => 
    array (
      'from' => '<basepath>/Extension/modules/Contacts/Ext/Language/ja_JP.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
      'to' => 'custom/Extension/modules/Contacts/Ext/Language/ja_JP.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
    ),
    116 => 
    array (
      'from' => '<basepath>/Extension/modules/Contacts/Ext/Language/hu_HU.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
      'to' => 'custom/Extension/modules/Contacts/Ext/Language/hu_HU.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
    ),
    117 => 
    array (
      'from' => '<basepath>/Extension/modules/Contacts/Ext/Language/sv_SE.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
      'to' => 'custom/Extension/modules/Contacts/Ext/Language/sv_SE.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
    ),
    118 => 
    array (
      'from' => '<basepath>/Extension/modules/Contacts/Ext/Language/zh_CN.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
      'to' => 'custom/Extension/modules/Contacts/Ext/Language/zh_CN.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
    ),
    119 => 
    array (
      'from' => '<basepath>/Extension/modules/Contacts/Ext/Language/he_IL.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
      'to' => 'custom/Extension/modules/Contacts/Ext/Language/he_IL.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
    ),
    120 => 
    array (
      'from' => '<basepath>/Extension/modules/Contacts/Ext/Language/nb_NO.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
      'to' => 'custom/Extension/modules/Contacts/Ext/Language/nb_NO.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
    ),
    121 => 
    array (
      'from' => '<basepath>/Extension/modules/Contacts/Ext/Language/lv_LV.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
      'to' => 'custom/Extension/modules/Contacts/Ext/Language/lv_LV.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
    ),
    122 => 
    array (
      'from' => '<basepath>/Extension/modules/Contacts/Ext/Language/nl_NL.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
      'to' => 'custom/Extension/modules/Contacts/Ext/Language/nl_NL.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
    ),
    123 => 
    array (
      'from' => '<basepath>/Extension/modules/Contacts/Ext/Language/en_UK.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
      'to' => 'custom/Extension/modules/Contacts/Ext/Language/en_UK.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
    ),
    124 => 
    array (
      'from' => '<basepath>/Extension/modules/Contacts/Ext/Language/bg_BG.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
      'to' => 'custom/Extension/modules/Contacts/Ext/Language/bg_BG.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
    ),
    125 => 
    array (
      'from' => '<basepath>/Extension/modules/Contacts/Ext/Language/pl_PL.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
      'to' => 'custom/Extension/modules/Contacts/Ext/Language/pl_PL.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
    ),
    126 => 
    array (
      'from' => '<basepath>/Extension/modules/Contacts/Ext/Language/da_DK.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
      'to' => 'custom/Extension/modules/Contacts/Ext/Language/da_DK.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
    ),
    127 => 
    array (
      'from' => '<basepath>/Extension/modules/Contacts/Ext/Language/et_EE.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
      'to' => 'custom/Extension/modules/Contacts/Ext/Language/et_EE.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
    ),
    128 => 
    array (
      'from' => '<basepath>/Extension/modules/Contacts/Ext/Language/en_us.MySQLNewFieldsAdded.lang.php',
      'to' => 'custom/Extension/modules/Contacts/Ext/Language/en_us.MySQLNewFieldsAdded.lang.php',
    ),
    129 => 
    array (
      'from' => '<basepath>/Extension/modules/Contacts/Ext/Language/ca_ES.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
      'to' => 'custom/Extension/modules/Contacts/Ext/Language/ca_ES.ext_rest_salesfusion.php.MySQLNewFieldsAdded.lang.php',
    ),
    130 => 
    array (
      'from' => '<basepath>/Extension/modules/Contacts/Ext/clients/base/layouts/subpanels/sf_web_activity_contacts_Contacts.php',
      'to' => 'custom/Extension/modules/Contacts/Ext/clients/base/layouts/subpanels/sf_web_activity_contacts_Contacts.php',
    ),
    131 => 
    array (
      'from' => '<basepath>/Extension/modules/Contacts/Ext/clients/base/layouts/subpanels/sf_event_management_contacts_Contacts.php',
      'to' => 'custom/Extension/modules/Contacts/Ext/clients/base/layouts/subpanels/sf_event_management_contacts_Contacts.php',
    ),
    132 => 
    array (
      'from' => '<basepath>/Extension/modules/Contacts/Ext/clients/base/layouts/subpanels/sf_dialogs_contacts_Contacts.php',
      'to' => 'custom/Extension/modules/Contacts/Ext/clients/base/layouts/subpanels/sf_dialogs_contacts_Contacts.php',
    ),
	133 => 
    array (
	  'from' => '<basepath>/Files/custom/Extension/application/Ext/Platforms/Salesfusion_Platform.php',
      'to' => 'custom/Extension/application/Ext/Platforms/Salesfusion_Platform.php',    
    ),
	
	134 => array (
      'from' => '<basepath>/Files/custom/salesfusion_button.js',
      'to' => 'custom/salesfusion_button.js',
    ),
	135 => array (
      'from' => '<basepath>/Files/custom/Extension/application/Ext/JSGroupings/salesfusion_button.php',
      'to' => 'custom/Extension/application/Ext/JSGroupings/salesfusion_button.php',
    ),
	136 => array (
      'from' => '<basepath>/Files/custom/clients/base/views/activity-card-content/activity-card-content.php',
      'to' => 'custom/clients/base/views/activity-card-content/activity-card-content.php',
    ),
	137 => array (
      'from' => '<basepath>/Files/custom/clients/base/views/activity-timeline/activity-timeline.js',
      'to' => 'custom/clients/base/views/activity-timeline/activity-timeline.js',
    ),
	138 => array (
      'from' => '<basepath>/Files/custom/modules/Leads/clients/base/views/activity-timeline/activity-timeline.php',
      'to' => 'custom/modules/Leads/clients/base/views/activity-timeline/activity-timeline.php',
    ),
	139 => array (
      'from' => '<basepath>/Files/custom/modules/Contacts/clients/base/views/activity-timeline/activity-timeline.php',
      'to' => 'custom/modules/Contacts/clients/base/views/activity-timeline/activity-timeline.php',
    ),
	140 => array (
      'from' => '<basepath>/Files/custom/modules/Accounts/clients/base/views/activity-timeline/activity-timeline.php',
      'to' => 'custom/modules/Accounts/clients/base/views/activity-timeline/activity-timeline.php',
    ),
	141 => array (
      'from' => '<basepath>/Files/custom/Extension/application/Ext/Language/en_us_custom_lbl.php',
      'to' => 'custom/Extension/application/Ext/Language/en_us_custom_lbl.php',
    ),
	142 => array (
      'from' => '<basepath>/Files/custom/themes/custom.less',
      'to' => 'custom/themes/custom.less',
    ),
  ),
  'language' =>
  array (
    0 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'en_us',
    ),
    1 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'bg_BG',
    ),
    2 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'cs_CZ',
    ),
    3 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'da_DK',
    ),
    4 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'de_DE',
    ),
    5 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'es_ES',
    ),
    6 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'et_EE',
    ),
    7 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'fr_FR',
    ),
    8 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'he_IL',
    ),
    9 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'hu_HU',
    ),
    10 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'it_it',
    ),
    11 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'lt_LT',
    ),
    12 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'ja_JP',
    ),
    13 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'lv_LV',
    ),
    14 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'nb_NO',
    ),
    15 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'nl_NL',
    ),
    16 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'pl_PL',
    ),
    17 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'pt_PT',
    ),
    18 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'ro_RO',
    ),
    19 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'ru_RU',
    ),
    20 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'sv_SE',
    ),
    21 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'tr_TR',
    ),
    22 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'zh_CN',
    ),
    23 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'pt_BR',
    ),
    24 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'ca_ES',
    ),
    25 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'en_UK',
    ),
    26 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'sr_RS',
    ),
    27 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Accounts.php',
      'to_module' => 'Accounts',
      'language' => 'en_us',
    ),
    28 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Accounts.php',
      'to_module' => 'Accounts',
      'language' => 'bg_BG',
    ),
    29 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Accounts.php',
      'to_module' => 'Accounts',
      'language' => 'cs_CZ',
    ),
    30 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Accounts.php',
      'to_module' => 'Accounts',
      'language' => 'da_DK',
    ),
    31 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Accounts.php',
      'to_module' => 'Accounts',
      'language' => 'de_DE',
    ),
    32 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Accounts.php',
      'to_module' => 'Accounts',
      'language' => 'es_ES',
    ),
    33 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Accounts.php',
      'to_module' => 'Accounts',
      'language' => 'et_EE',
    ),
    34 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Accounts.php',
      'to_module' => 'Accounts',
      'language' => 'fr_FR',
    ),
    35 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Accounts.php',
      'to_module' => 'Accounts',
      'language' => 'he_IL',
    ),
    36 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Accounts.php',
      'to_module' => 'Accounts',
      'language' => 'hu_HU',
    ),
    37 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Accounts.php',
      'to_module' => 'Accounts',
      'language' => 'it_it',
    ),
    38 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Accounts.php',
      'to_module' => 'Accounts',
      'language' => 'lt_LT',
    ),
    39 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Accounts.php',
      'to_module' => 'Accounts',
      'language' => 'ja_JP',
    ),
    40 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Accounts.php',
      'to_module' => 'Accounts',
      'language' => 'lv_LV',
    ),
    41 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Accounts.php',
      'to_module' => 'Accounts',
      'language' => 'nb_NO',
    ),
    42 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Accounts.php',
      'to_module' => 'Accounts',
      'language' => 'nl_NL',
    ),
    43 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Accounts.php',
      'to_module' => 'Accounts',
      'language' => 'pl_PL',
    ),
    44 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Accounts.php',
      'to_module' => 'Accounts',
      'language' => 'pt_PT',
    ),
    45 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Accounts.php',
      'to_module' => 'Accounts',
      'language' => 'ro_RO',
    ),
    46 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Accounts.php',
      'to_module' => 'Accounts',
      'language' => 'ru_RU',
    ),
    47 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Accounts.php',
      'to_module' => 'Accounts',
      'language' => 'sv_SE',
    ),
    48 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Accounts.php',
      'to_module' => 'Accounts',
      'language' => 'tr_TR',
    ),
    49 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Accounts.php',
      'to_module' => 'Accounts',
      'language' => 'zh_CN',
    ),
    50 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Accounts.php',
      'to_module' => 'Accounts',
      'language' => 'pt_BR',
    ),
    51 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Accounts.php',
      'to_module' => 'Accounts',
      'language' => 'ca_ES',
    ),
    52 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Accounts.php',
      'to_module' => 'Accounts',
      'language' => 'en_UK',
    ),
    53 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Accounts.php',
      'to_module' => 'Accounts',
      'language' => 'sr_RS',
    ),
    54 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'en_us',
    ),
    55 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'bg_BG',
    ),
    56 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'cs_CZ',
    ),
    57 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'da_DK',
    ),
    58 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'de_DE',
    ),
    59 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'es_ES',
    ),
    60 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'et_EE',
    ),
    61 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'fr_FR',
    ),
    62 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'he_IL',
    ),
    63 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'hu_HU',
    ),
    64 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'it_it',
    ),
    65 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'lt_LT',
    ),
    66 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'ja_JP',
    ),
    67 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'lv_LV',
    ),
    68 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'nb_NO',
    ),
    69 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'nl_NL',
    ),
    70 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'pl_PL',
    ),
    71 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'pt_PT',
    ),
    72 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'ro_RO',
    ),
    73 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'ru_RU',
    ),
    74 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'sv_SE',
    ),
    75 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'tr_TR',
    ),
    76 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'zh_CN',
    ),
    77 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'pt_BR',
    ),
    78 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'ca_ES',
    ),
    79 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'en_UK',
    ),
    80 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'sr_RS',
    ),
    81 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'en_us',
    ),
    82 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'bg_BG',
    ),
    83 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'cs_CZ',
    ),
    84 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'da_DK',
    ),
    85 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'de_DE',
    ),
    86 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'es_ES',
    ),
    87 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'et_EE',
    ),
    88 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'fr_FR',
    ),
    89 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'he_IL',
    ),
    90 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'hu_HU',
    ),
    91 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'it_it',
    ),
    92 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'lt_LT',
    ),
    93 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'ja_JP',
    ),
    94 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'lv_LV',
    ),
    95 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'nb_NO',
    ),
    96 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'nl_NL',
    ),
    97 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'pl_PL',
    ),
    98 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'pt_PT',
    ),
    99 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'ro_RO',
    ),
    100 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'ru_RU',
    ),
    101 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'sv_SE',
    ),
    102 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'tr_TR',
    ),
    103 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'zh_CN',
    ),
    104 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'pt_BR',
    ),
    105 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'ca_ES',
    ),
    106 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'en_UK',
    ),
    107 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'sr_RS',
    ),
    108 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'en_us',
    ),
    109 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'bg_BG',
    ),
    110 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'cs_CZ',
    ),
    111 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'da_DK',
    ),
    112 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'de_DE',
    ),
    113 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'es_ES',
    ),
    114 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'et_EE',
    ),
    115 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'fr_FR',
    ),
    116 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'he_IL',
    ),
    117 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'hu_HU',
    ),
    118 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'it_it',
    ),
    119 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'lt_LT',
    ),
    120 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'ja_JP',
    ),
    121 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'lv_LV',
    ),
    122 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'nb_NO',
    ),
    123 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'nl_NL',
    ),
    124 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'pl_PL',
    ),
    125 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'pt_PT',
    ),
    126 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'ro_RO',
    ),
    127 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'ru_RU',
    ),
    128 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'sv_SE',
    ),
    129 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'tr_TR',
    ),
    130 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'zh_CN',
    ),
    131 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'pt_BR',
    ),
    132 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'ca_ES',
    ),
    133 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'en_UK',
    ),
    134 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'sr_RS',
    ),
    135 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'en_us',
    ),
    136 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'bg_BG',
    ),
    137 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'cs_CZ',
    ),
    138 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'da_DK',
    ),
    139 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'de_DE',
    ),
    140 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'es_ES',
    ),
    141 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'et_EE',
    ),
    142 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'fr_FR',
    ),
    143 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'he_IL',
    ),
    144 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'hu_HU',
    ),
    145 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'it_it',
    ),
    146 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'lt_LT',
    ),
    147 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'ja_JP',
    ),
    148 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'lv_LV',
    ),
    149 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'nb_NO',
    ),
    150 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'nl_NL',
    ),
    151 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'pl_PL',
    ),
    152 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'pt_PT',
    ),
    153 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'ro_RO',
    ),
    154 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'ru_RU',
    ),
    155 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'sv_SE',
    ),
    156 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'tr_TR',
    ),
    157 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'zh_CN',
    ),
    158 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'pt_BR',
    ),
    159 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'ca_ES',
    ),
    160 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'en_UK',
    ),
    161 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'sr_RS',
    ),
    162 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_WebActivityDetail.php',
      'to_module' => 'sf_WebActivityDetail',
      'language' => 'en_us',
    ),
    163 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_WebActivityDetail.php',
      'to_module' => 'sf_WebActivityDetail',
      'language' => 'bg_BG',
    ),
    164 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_WebActivityDetail.php',
      'to_module' => 'sf_WebActivityDetail',
      'language' => 'cs_CZ',
    ),
    165 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_WebActivityDetail.php',
      'to_module' => 'sf_WebActivityDetail',
      'language' => 'da_DK',
    ),
    166 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_WebActivityDetail.php',
      'to_module' => 'sf_WebActivityDetail',
      'language' => 'de_DE',
    ),
    167 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_WebActivityDetail.php',
      'to_module' => 'sf_WebActivityDetail',
      'language' => 'es_ES',
    ),
    168 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_WebActivityDetail.php',
      'to_module' => 'sf_WebActivityDetail',
      'language' => 'et_EE',
    ),
    169 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_WebActivityDetail.php',
      'to_module' => 'sf_WebActivityDetail',
      'language' => 'fr_FR',
    ),
    170 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_WebActivityDetail.php',
      'to_module' => 'sf_WebActivityDetail',
      'language' => 'he_IL',
    ),
    171 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_WebActivityDetail.php',
      'to_module' => 'sf_WebActivityDetail',
      'language' => 'hu_HU',
    ),
    172 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_WebActivityDetail.php',
      'to_module' => 'sf_WebActivityDetail',
      'language' => 'it_it',
    ),
    173 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_WebActivityDetail.php',
      'to_module' => 'sf_WebActivityDetail',
      'language' => 'lt_LT',
    ),
    174 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_WebActivityDetail.php',
      'to_module' => 'sf_WebActivityDetail',
      'language' => 'ja_JP',
    ),
    175 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_WebActivityDetail.php',
      'to_module' => 'sf_WebActivityDetail',
      'language' => 'lv_LV',
    ),
    176 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_WebActivityDetail.php',
      'to_module' => 'sf_WebActivityDetail',
      'language' => 'nb_NO',
    ),
    177 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_WebActivityDetail.php',
      'to_module' => 'sf_WebActivityDetail',
      'language' => 'nl_NL',
    ),
    178 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_WebActivityDetail.php',
      'to_module' => 'sf_WebActivityDetail',
      'language' => 'pl_PL',
    ),
    179 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_WebActivityDetail.php',
      'to_module' => 'sf_WebActivityDetail',
      'language' => 'pt_PT',
    ),
    180 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_WebActivityDetail.php',
      'to_module' => 'sf_WebActivityDetail',
      'language' => 'ro_RO',
    ),
    181 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_WebActivityDetail.php',
      'to_module' => 'sf_WebActivityDetail',
      'language' => 'ru_RU',
    ),
    182 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_WebActivityDetail.php',
      'to_module' => 'sf_WebActivityDetail',
      'language' => 'sv_SE',
    ),
    183 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_WebActivityDetail.php',
      'to_module' => 'sf_WebActivityDetail',
      'language' => 'tr_TR',
    ),
    184 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_WebActivityDetail.php',
      'to_module' => 'sf_WebActivityDetail',
      'language' => 'zh_CN',
    ),
    185 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_WebActivityDetail.php',
      'to_module' => 'sf_WebActivityDetail',
      'language' => 'pt_BR',
    ),
    186 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_WebActivityDetail.php',
      'to_module' => 'sf_WebActivityDetail',
      'language' => 'ca_ES',
    ),
    187 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_WebActivityDetail.php',
      'to_module' => 'sf_WebActivityDetail',
      'language' => 'en_UK',
    ),
    188 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_WebActivityDetail.php',
      'to_module' => 'sf_WebActivityDetail',
      'language' => 'sr_RS',
    ),
    189 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'en_us',
    ),
    190 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'bg_BG',
    ),
    191 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'cs_CZ',
    ),
    192 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'da_DK',
    ),
    193 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'de_DE',
    ),
    194 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'es_ES',
    ),
    195 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'et_EE',
    ),
    196 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'fr_FR',
    ),
    197 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'he_IL',
    ),
    198 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'hu_HU',
    ),
    199 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'it_it',
    ),
    200 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'lt_LT',
    ),
    201 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'ja_JP',
    ),
    202 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'lv_LV',
    ),
    203 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'nb_NO',
    ),
    204 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'nl_NL',
    ),
    205 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'pl_PL',
    ),
    206 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'pt_PT',
    ),
    207 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'ro_RO',
    ),
    208 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'ru_RU',
    ),
    209 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'sv_SE',
    ),
    210 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'tr_TR',
    ),
    211 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'zh_CN',
    ),
    212 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'pt_BR',
    ),
    213 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'ca_ES',
    ),
    214 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'en_UK',
    ),
    215 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_webActivity.php',
      'to_module' => 'sf_webActivity',
      'language' => 'sr_RS',
    ),
    216 =>
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
  217 =>
  array (
      'from' => '<basepath>/SugarModules/modules/Campaigns/language/en_us.lang.php',
      'to_module' => 'Campaigns',
      'language' => 'en_us',
  ),
  218 =>
  array (
    'from' => '<basepath>/SugarModules/modules/Prospects/language/en_us.lang.php',
      'to_module' => 'Prospects',
      'language' => 'en_us',
  ),
   219 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_Dialogs.php',
      'to_module' => 'sf_Dialogs',
      'language' => 'en_us',
    ),
   220 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_Dialogs.php',
      'to_module' => 'sf_Dialogs',
      'language' => 'bg_BG',
    ),
    221 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_Dialogs.php',
      'to_module' => 'sf_Dialogs',
      'language' => 'cs_CZ',
    ),
    222 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_Dialogs.php',
      'to_module' => 'sf_Dialogs',
      'language' => 'da_DK',
    ),
    223 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_Dialogs.php',
      'to_module' => 'sf_Dialogs',
      'language' => 'de_DE',
    ),
    224 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_Dialogs.php',
      'to_module' => 'sf_Dialogs',
      'language' => 'es_ES',
    ),
    225 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_Dialogs.php',
      'to_module' => 'sf_Dialogs',
      'language' => 'et_EE',
    ),
    226 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_Dialogs.php',
      'to_module' => 'sf_Dialogs',
      'language' => 'fr_FR',
    ),
    227 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_Dialogs.php',
      'to_module' => 'sf_Dialogs',
      'language' => 'he_IL',
    ),
    228 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_Dialogs.php',
      'to_module' => 'sf_Dialogs',
      'language' => 'hu_HU',
    ),
    229 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_Dialogs.php',
      'to_module' => 'sf_Dialogs',
      'language' => 'it_it',
    ),
    230 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_Dialogs.php',
      'to_module' => 'sf_Dialogs',
      'language' => 'lt_LT',
    ),
    231 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_Dialogs.php',
      'to_module' => 'sf_Dialogs',
      'language' => 'ja_JP',
    ),
    232 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_Dialogs.php',
      'to_module' => 'sf_Dialogs',
      'language' => 'lv_LV',
    ),
    233 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_Dialogs.php',
      'to_module' => 'sf_Dialogs',
      'language' => 'nb_NO',
    ),
    234 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_Dialogs.php',
      'to_module' => 'sf_Dialogs',
      'language' => 'nl_NL',
    ),
    235 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_Dialogs.php',
      'to_module' => 'sf_Dialogs',
      'language' => 'pl_PL',
    ),
    236 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_Dialogs.php',
      'to_module' => 'sf_Dialogs',
      'language' => 'pt_PT',
    ),
    237 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_Dialogs.php',
      'to_module' => 'sf_Dialogs',
      'language' => 'ro_RO',
    ),
    238 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_Dialogs.php',
      'to_module' => 'sf_Dialogs',
      'language' => 'ru_RU',
    ),
    239 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_Dialogs.php',
      'to_module' => 'sf_Dialogs',
      'language' => 'sv_SE',
    ),
    240 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_Dialogs.php',
      'to_module' => 'sf_Dialogs',
      'language' => 'tr_TR',
    ),
    241 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_Dialogs.php',
      'to_module' => 'sf_Dialogs',
      'language' => 'zh_CN',
    ),
    242 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_Dialogs.php',
      'to_module' => 'sf_Dialogs',
      'language' => 'pt_BR',
    ),
    243 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_Dialogs.php',
      'to_module' => 'sf_Dialogs',
      'language' => 'ca_ES',
    ),
    244 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_Dialogs.php',
      'to_module' => 'sf_Dialogs',
      'language' => 'en_UK',
    ),
    245 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_Dialogs.php',
      'to_module' => 'sf_Dialogs',
      'language' => 'sr_RS',
    ),
    245 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_Dialogs.php',
      'to_module' => 'sf_Dialogs',
      'language' => 'en_us',
    ),
    246 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_Dialogs.php',
      'to_module' => 'sf_Dialogs',
      'language' => 'bg_BG',
    ),
    247 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_Dialogs.php',
      'to_module' => 'sf_Dialogs',
      'language' => 'cs_CZ',
    ),
    248 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_Dialogs.php',
      'to_module' => 'sf_Dialogs',
      'language' => 'da_DK',
    ),
    249 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_Dialogs.php',
      'to_module' => 'sf_Dialogs',
      'language' => 'de_DE',
    ),
    250 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_Dialogs.php',
      'to_module' => 'sf_Dialogs',
      'language' => 'es_ES',
    ),
    251 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_Dialogs.php',
      'to_module' => 'sf_Dialogs',
      'language' => 'et_EE',
    ),
    252 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_Dialogs.php',
      'to_module' => 'sf_Dialogs',
      'language' => 'fr_FR',
    ),
    253 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_Dialogs.php',
      'to_module' => 'sf_Dialogs',
      'language' => 'he_IL',
    ),
    254 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_Dialogs.php',
      'to_module' => 'sf_Dialogs',
      'language' => 'hu_HU',
    ),
    255 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_Dialogs.php',
      'to_module' => 'sf_Dialogs',
      'language' => 'it_it',
    ),
    256 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_Dialogs.php',
      'to_module' => 'sf_Dialogs',
      'language' => 'lt_LT',
    ),
    257 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_Dialogs.php',
      'to_module' => 'sf_Dialogs',
      'language' => 'ja_JP',
    ),
    258 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_Dialogs.php',
      'to_module' => 'sf_Dialogs',
      'language' => 'lv_LV',
    ),
    259 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_Dialogs.php',
      'to_module' => 'sf_Dialogs',
      'language' => 'nb_NO',
    ),
    260 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_Dialogs.php',
      'to_module' => 'sf_Dialogs',
      'language' => 'nl_NL',
    ),
    261 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_Dialogs.php',
      'to_module' => 'sf_Dialogs',
      'language' => 'pl_PL',
    ),
    262 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_Dialogs.php',
      'to_module' => 'sf_Dialogs',
      'language' => 'pt_PT',
    ),
    263 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_Dialogs.php',
      'to_module' => 'sf_Dialogs',
      'language' => 'ro_RO',
    ),
    264 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_Dialogs.php',
      'to_module' => 'sf_Dialogs',
      'language' => 'ru_RU',
    ),
    265 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_Dialogs.php',
      'to_module' => 'sf_Dialogs',
      'language' => 'sv_SE',
    ),
    266 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_Dialogs.php',
      'to_module' => 'sf_Dialogs',
      'language' => 'tr_TR',
    ),
    267 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_Dialogs.php',
      'to_module' => 'sf_Dialogs',
      'language' => 'zh_CN',
    ),
    268 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_Dialogs.php',
      'to_module' => 'sf_Dialogs',
      'language' => 'pt_BR',
    ),
    269 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_Dialogs.php',
      'to_module' => 'sf_Dialogs',
      'language' => 'ca_ES',
    ),
    270 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_Dialogs.php',
      'to_module' => 'sf_Dialogs',
      'language' => 'en_UK',
    ),
    271 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_Dialogs.php',
      'to_module' => 'sf_Dialogs',
      'language' => 'sr_RS',
    ),
  272 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_EventManagement.php',
      'to_module' => 'sf_EventManagement',
      'language' => 'en_us',
    ),
    273 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_EventManagement.php',
      'to_module' => 'sf_EventManagement',
      'language' => 'bg_BG',
    ),
    274 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_EventManagement.php',
      'to_module' => 'sf_EventManagement',
      'language' => 'cs_CZ',
    ),
    275 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_EventManagement.php',
      'to_module' => 'sf_EventManagement',
      'language' => 'da_DK',
    ),
    276 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_EventManagement.php',
      'to_module' => 'sf_EventManagement',
      'language' => 'de_DE',
    ),
    277 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_EventManagement.php',
      'to_module' => 'sf_EventManagement',
      'language' => 'es_ES',
    ),
    278 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_EventManagement.php',
      'to_module' => 'sf_EventManagement',
      'language' => 'et_EE',
    ),
    279 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_EventManagement.php',
      'to_module' => 'sf_EventManagement',
      'language' => 'fr_FR',
    ),
    280 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_EventManagement.php',
      'to_module' => 'sf_EventManagement',
      'language' => 'he_IL',
    ),
    281 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_EventManagement.php',
      'to_module' => 'sf_EventManagement',
      'language' => 'hu_HU',
    ),
    282 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_EventManagement.php',
      'to_module' => 'sf_EventManagement',
      'language' => 'it_it',
    ),
    283 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_EventManagement.php',
      'to_module' => 'sf_EventManagement',
      'language' => 'lt_LT',
    ),
    284 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_EventManagement.php',
      'to_module' => 'sf_EventManagement',
      'language' => 'ja_JP',
    ),
    285 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_EventManagement.php',
      'to_module' => 'sf_EventManagement',
      'language' => 'lv_LV',
    ),
    286 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_EventManagement.php',
      'to_module' => 'sf_EventManagement',
      'language' => 'nb_NO',
    ),
    287 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_EventManagement.php',
      'to_module' => 'sf_EventManagement',
      'language' => 'nl_NL',
    ),
    289 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_EventManagement.php',
      'to_module' => 'sf_EventManagement',
      'language' => 'pl_PL',
    ),
    290 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_EventManagement.php',
      'to_module' => 'sf_EventManagement',
      'language' => 'pt_PT',
    ),
    291 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_EventManagement.php',
      'to_module' => 'sf_EventManagement',
      'language' => 'ro_RO',
    ),
    292 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_EventManagement.php',
      'to_module' => 'sf_EventManagement',
      'language' => 'ru_RU',
    ),
    293 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_EventManagement.php',
      'to_module' => 'sf_EventManagement',
      'language' => 'sv_SE',
    ),
    294 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_EventManagement.php',
      'to_module' => 'sf_EventManagement',
      'language' => 'tr_TR',
    ),
    295 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_EventManagement.php',
      'to_module' => 'sf_EventManagement',
      'language' => 'zh_CN',
    ),
    296 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_EventManagement.php',
      'to_module' => 'sf_EventManagement',
      'language' => 'pt_BR',
    ),
    297 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_EventManagement.php',
      'to_module' => 'sf_EventManagement',
      'language' => 'ca_ES',
    ),
    298 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_EventManagement.php',
      'to_module' => 'sf_EventManagement',
      'language' => 'en_UK',
    ),
    299 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_EventManagement.php',
      'to_module' => 'sf_EventManagement',
      'language' => 'sr_RS',
    ),
  300=>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_EventManagement.php',
      'to_module' => 'sf_EventManagement',
      'language' => 'en_us',
    ),
    301 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_EventManagement.php',
      'to_module' => 'sf_EventManagement',
      'language' => 'bg_BG',
    ),
    302 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_EventManagement.php',
      'to_module' => 'sf_EventManagement',
      'language' => 'cs_CZ',
    ),
    303 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_EventManagement.php',
      'to_module' => 'sf_EventManagement',
      'language' => 'da_DK',
    ),
    304 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_EventManagement.php',
      'to_module' => 'sf_EventManagement',
      'language' => 'de_DE',
    ),
    305 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_EventManagement.php',
      'to_module' => 'sf_EventManagement',
      'language' => 'es_ES',
    ),
    306 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_EventManagement.php',
      'to_module' => 'sf_EventManagement',
      'language' => 'et_EE',
    ),
    307 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_EventManagement.php',
      'to_module' => 'sf_EventManagement',
      'language' => 'fr_FR',
    ),
    308 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_EventManagement.php',
      'to_module' => 'sf_EventManagement',
      'language' => 'he_IL',
    ),
    309 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_EventManagement.php',
      'to_module' => 'sf_EventManagement',
      'language' => 'hu_HU',
    ),
    310 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_EventManagement.php',
      'to_module' => 'sf_EventManagement',
      'language' => 'it_it',
    ),
    311 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_EventManagement.php',
      'to_module' => 'sf_EventManagement',
      'language' => 'lt_LT',
    ),
    312 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_EventManagement.php',
      'to_module' => 'sf_EventManagement',
      'language' => 'ja_JP',
    ),
    313 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_EventManagement.php',
      'to_module' => 'sf_EventManagement',
      'language' => 'lv_LV',
    ),
    314 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_EventManagement.php',
      'to_module' => 'sf_EventManagement',
      'language' => 'nb_NO',
    ),
    315 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_EventManagement.php',
      'to_module' => 'sf_EventManagement',
      'language' => 'nl_NL',
    ),
    316 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_EventManagement.php',
      'to_module' => 'sf_EventManagement',
      'language' => 'pl_PL',
    ),
    317 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_EventManagement.php',
      'to_module' => 'sf_EventManagement',
      'language' => 'pt_PT',
    ),
    318 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_EventManagement.php',
      'to_module' => 'sf_EventManagement',
      'language' => 'ro_RO',
    ),
    319 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_EventManagement.php',
      'to_module' => 'sf_EventManagement',
      'language' => 'ru_RU',
    ),
    320 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_EventManagement.php',
      'to_module' => 'sf_EventManagement',
      'language' => 'sv_SE',
    ),
    321 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_EventManagement.php',
      'to_module' => 'sf_EventManagement',
      'language' => 'tr_TR',
    ),
    322 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_EventManagement.php',
      'to_module' => 'sf_EventManagement',
      'language' => 'zh_CN',
    ),
    323 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_EventManagement.php',
      'to_module' => 'sf_EventManagement',
      'language' => 'pt_BR',
    ),
    324 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_EventManagement.php',
      'to_module' => 'sf_EventManagement',
      'language' => 'ca_ES',
    ),
    325 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_EventManagement.php',
      'to_module' => 'sf_EventManagement',
      'language' => 'en_UK',
    ),
    326 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/language/sf_EventManagement.php',
      'to_module' => 'sf_EventManagement',
      'language' => 'sr_RS',
    ),
    327 =>
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
    328 =>
    array (
      'from' => '<basepath>/SugarModules/modules/Emails/language/en_us.lang.php',
      'to_module' => 'Emails',
      'language' => 'en_us',
    ),
  ),
  'vardefs' =>
  array (
    0 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/sf_webactivity_accounts_sf_webActivity.php',
      'to_module' => 'sf_webActivity',
    ),
    1 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/sf_webactivity_accounts_Accounts.php',
      'to_module' => 'Accounts',
    ),
    2 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/sf_webactivity_leads_sf_webActivity.php',
      'to_module' => 'sf_webActivity',
    ),
    3 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/sf_webactivity_leads_Leads.php',
      'to_module' => 'Leads',
    ),
    4 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/sf_webactivity_contacts_sf_webActivity.php',
      'to_module' => 'sf_webActivity',
    ),
    5 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/sf_webactivity_contacts_Contacts.php',
      'to_module' => 'Contacts',
    ),
    6 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/sf_webactivitydetail_sf_webactivity_sf_WebActivityDetail.php',
      'to_module' => 'sf_WebActivityDetail',
    ),
    7 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/sf_webactivitydetail_sf_webactivity_sf_webActivity.php',
      'to_module' => 'sf_webActivity',
    ),
    8 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/sf_dialogs_contacts_sf_Dialogs.php',
      'to_module' => 'sf_Dialogs',
    ),
    9 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/sf_dialogs_contacts_Contacts.php',
      'to_module' => 'Contacts',
    ),
    10 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/sf_dialogs_leads_sf_Dialogs.php',
      'to_module' => 'sf_Dialogs',
    ),
    11 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/sf_dialogs_leads_Leads.php',
      'to_module' => 'Leads',
    ),
    12 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/sf_eventmanagement_contacts_sf_EventManagement.php',
      'to_module' => 'sf_EventManagement',
    ),
    13 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/sf_eventmanagement_contacts_Contacts.php',
      'to_module' => 'Contacts',
    ),
    14 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/sf_eventmanagement_leads_sf_EventManagement.php',
      'to_module' => 'sf_EventManagement',
    ),
    15 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/sf_eventmanagement_leads_Leads.php',
      'to_module' => 'Leads',
    ),
  ),
 'custom_fields' =>
  array (
    'Campaignsbounced_c' =>
    array (
      'id' => 'Campaignsbounced_c',
      'name' => 'bounced_c',
      'label' => 'LBL_BOUNCED',
      'comments' => '',
      'help' => '',
      'module' => 'Campaigns',
      'type' => 'int',
      'max_size' => '255',
      'require_option' => '0',
      'default_value' => '0',
      'date_modified' => '2012-08-27 20:09:51',
      'deleted' => '0',
      'audited' => '0',
      'mass_update' => '0',
      'duplicate_merge' => '0',
      'reportable' => '1',
      'importable' => 'true',
      'ext1' => '',
      'ext2' => '',
      'ext3' => '',
      'ext4' => '',
    ),
    'Campaignsdelivered_c' =>
    array (
      'id' => 'Campaignsdelivered_c',
      'name' => 'delivered_c',
      'label' => 'LBL_DELIVERED',
      'comments' => '',
      'help' => '',
      'module' => 'Campaigns',
      'type' => 'int',
      'max_size' => '255',
      'require_option' => '0',
      'default_value' => '0',
      'date_modified' => '2012-08-27 20:06:02',
      'deleted' => '0',
      'audited' => '0',
      'mass_update' => '0',
      'duplicate_merge' => '0',
      'reportable' => '1',
      'importable' => 'true',
      'ext1' => '',
      'ext2' => '',
      'ext3' => '',
      'ext4' => '',
    ),
    'Campaignsforwards_c' =>
    array (
      'id' => 'Campaignsforwards_c',
      'name' => 'forwards_c',
      'label' => 'LBL_FORWARDS',
      'comments' => '',
      'help' => '',
      'module' => 'Campaigns',
      'type' => 'int',
      'max_size' => '255',
      'require_option' => '0',
      'default_value' => '',
      'date_modified' => '2012-08-27 20:11:35',
      'deleted' => '0',
      'audited' => '0',
      'mass_update' => '0',
      'duplicate_merge' => '0',
      'reportable' => '1',
      'importable' => 'true',
      'ext1' => '',
      'ext2' => '',
      'ext3' => '',
      'ext4' => '',
    ),
    'Campaignsnotreported_c' =>
    array (
      'id' => 'Campaignsnotreported_c',
      'name' => 'notreported_c',
      'label' => 'LBL_NOTREPORTED',
      'comments' => '',
      'help' => '',
      'module' => 'Campaigns',
      'type' => 'int',
      'max_size' => '255',
      'require_option' => '0',
      'default_value' => '0',
      'date_modified' => '2012-08-27 20:10:50',
      'deleted' => '0',
      'audited' => '0',
      'mass_update' => '0',
      'duplicate_merge' => '0',
      'reportable' => '1',
      'importable' => 'true',
      'ext1' => '',
      'ext2' => '',
      'ext3' => '',
      'ext4' => '',
    ),
    'Campaignspeoplewhoclicked_c' =>
    array (
      'id' => 'Campaignspeoplewhoclicked_c',
      'name' => 'peoplewhoclicked_c',
      'label' => 'LBL_PEOPLEWHOCLICKED',
      'comments' => '',
      'help' => '',
      'module' => 'Campaigns',
      'type' => 'int',
      'max_size' => '255',
      'require_option' => '0',
      'default_value' => '',
      'date_modified' => '2012-08-27 20:08:09',
      'deleted' => '0',
      'audited' => '0',
      'mass_update' => '0',
      'duplicate_merge' => '0',
      'reportable' => '1',
      'importable' => 'true',
      'ext1' => '',
      'ext2' => '',
      'ext3' => '',
      'ext4' => '',
    ),
    'Campaignspeoplewhoopened_c' =>
    array (
      'id' => 'Campaignspeoplewhoopened_c',
      'name' => 'peoplewhoopened_c',
      'label' => 'LBL_PEOPLEWHOOPENED',
      'comments' => '',
      'help' => '',
      'module' => 'Campaigns',
      'type' => 'int',
      'max_size' => '255',
      'require_option' => '0',
      'default_value' => '',
      'date_modified' => '2012-08-27 20:07:39',
      'deleted' => '0',
      'audited' => '0',
      'mass_update' => '0',
      'duplicate_merge' => '0',
      'reportable' => '1',
      'importable' => 'true',
      'ext1' => '',
      'ext2' => '',
      'ext3' => '',
      'ext4' => '',
    ),
    'Campaignspostdate_c' =>
    array (
      'id' => 'Campaignspostdate_c',
      'name' => 'postdate_c',
      'label' => 'LBL_POSTDATE',
      'comments' => '',
      'help' => '',
      'module' => 'Campaigns',
      'type' => 'datetimecombo',
      'max_size' => NULL,
      'require_option' => '0',
      'default_value' => '',
      'date_modified' => '2012-08-27 20:04:49',
      'deleted' => '0',
      'audited' => '0',
      'mass_update' => '0',
      'duplicate_merge' => '0',
      'reportable' => '1',
      'importable' => 'true',
      'ext1' => '',
      'ext2' => '',
      'ext3' => '',
      'ext4' => '',
    ),
    'Campaignssent_c' =>
    array (
      'id' => 'Campaignssent_c',
      'name' => 'sent_c',
      'label' => 'LBL_SENT',
      'comments' => '',
      'help' => '',
      'module' => 'Campaigns',
      'type' => 'int',
      'max_size' => '255',
      'require_option' => '0',
      'default_value' => '0',
      'date_modified' => '2012-08-27 20:05:36',
      'deleted' => '0',
      'audited' => '0',
      'mass_update' => '0',
      'duplicate_merge' => '0',
      'reportable' => '1',
      'importable' => 'true',
      'ext1' => '',
      'ext2' => '',
      'ext3' => '',
      'ext4' => '',
    ),
    'Campaignssocial_c' =>
    array (
      'id' => 'Campaignssocial_c',
      'name' => 'social_c',
      'label' => 'LBL_SOCIAL',
      'comments' => '',
      'help' => '',
      'module' => 'Campaigns',
      'type' => 'int',
      'max_size' => '255',
      'require_option' => '0',
      'default_value' => '0',
      'date_modified' => '2012-08-27 20:11:11',
      'deleted' => '0',
      'audited' => '0',
      'mass_update' => '0',
      'duplicate_merge' => '0',
      'reportable' => '1',
      'importable' => 'true',
      'ext1' => '',
      'ext2' => '',
      'ext3' => '',
      'ext4' => '',
    ),
    'Campaignstotalclicks_c' =>
    array (
      'id' => 'Campaignstotalclicks_c',
      'name' => 'totalclicks_c',
      'label' => 'LBL_TOTALCLICKS',
      'comments' => '',
      'help' => '',
      'module' => 'Campaigns',
      'type' => 'int',
      'max_size' => '255',
      'require_option' => '0',
      'default_value' => '',
      'date_modified' => '2012-08-27 20:07:03',
      'deleted' => '0',
      'audited' => '0',
      'mass_update' => '0',
      'duplicate_merge' => '0',
      'reportable' => '1',
      'importable' => 'true',
      'ext1' => '',
      'ext2' => '',
      'ext3' => '',
      'ext4' => '',
    ),
    'Campaignstotalopens_c' =>
    array (
      'id' => 'Campaignstotalopens_c',
      'name' => 'totalopens_c',
      'label' => 'LBL_TOTALOPENS',
      'comments' => '',
      'help' => '',
      'module' => 'Campaigns',
      'type' => 'int',
      'max_size' => '255',
      'require_option' => '0',
      'default_value' => '',
      'date_modified' => '2012-08-27 20:06:36',
      'deleted' => '0',
      'audited' => '0',
      'mass_update' => '0',
      'duplicate_merge' => '0',
      'reportable' => '1',
      'importable' => 'true',
      'ext1' => '',
      'ext2' => '',
      'ext3' => '',
      'ext4' => '',
    ),
    'Campaignsunopened_c' =>
    array (
      'id' => 'Campaignsunopened_c',
      'name' => 'unopened_c',
      'label' => 'LBL_UNOPENED',
      'comments' => '',
      'help' => '',
      'module' => 'Campaigns',
      'type' => 'int',
      'max_size' => '255',
      'require_option' => '0',
      'default_value' => '0',
      'date_modified' => '2012-08-27 20:09:26',
      'deleted' => '0',
      'audited' => '0',
      'mass_update' => '0',
      'duplicate_merge' => '0',
      'reportable' => '1',
      'importable' => 'true',
      'ext1' => '',
      'ext2' => '',
      'ext3' => '',
      'ext4' => '',
    ),
    'Campaignsunsubscribed_c' =>
    array (
      'id' => 'Campaignsunsubscribed_c',
      'name' => 'unsubscribed_c',
      'label' => 'LBL_UNSUBSCRIBED',
      'comments' => '',
      'help' => '',
      'module' => 'Campaigns',
      'type' => 'int',
      'max_size' => '255',
      'require_option' => '0',
      'default_value' => '0',
      'date_modified' => '2012-08-27 20:10:24',
      'deleted' => '0',
      'audited' => '0',
      'mass_update' => '0',
      'duplicate_merge' => '0',
      'reportable' => '1',
      'importable' => 'true',
      'ext1' => '',
      'ext2' => '',
      'ext3' => '',
      'ext4' => '',
    ),
    'Prospectsclicked_c' =>
    array (
      'id' => 'Prospectsclicked_c',
      'name' => 'clicked_c',
      'label' => 'LBL_CLICKED',
      'comments' => '',
      'help' => '',
      'module' => 'Prospects',
      'type' => 'int',
      'max_size' => '255',
      'require_option' => '0',
      'default_value' => '0',
      'date_modified' => '2012-09-04 14:40:59',
      'deleted' => '0',
      'audited' => '1',
      'mass_update' => '0',
      'duplicate_merge' => '0',
      'reportable' => '1',
      'importable' => 'true',
      'ext1' => '',
      'ext2' => '',
      'ext3' => '',
      'ext4' => '',
    ),
    'Prospectsdeliverymessage_c' =>
    array (
      'id' => 'Prospectsdeliverymessage_c',
      'name' => 'deliverymessage_c',
      'label' => 'LBL_DELIVERYMESSAGE',
      'comments' => '',
      'help' => '',
      'module' => 'Prospects',
      'type' => 'varchar',
      'max_size' => '100',
      'require_option' => '0',
      'default_value' => '',
      'date_modified' => '2012-09-04 14:40:15',
      'deleted' => '0',
      'audited' => '0',
      'mass_update' => '0',
      'duplicate_merge' => '0',
      'reportable' => '1',
      'importable' => 'true',
      'ext1' => '',
      'ext2' => '',
      'ext3' => '',
      'ext4' => '',
    ),
    'Prospectsdeliverystatus_c' =>
    array (
      'id' => 'Prospectsdeliverystatus_c',
      'name' => 'deliverystatus_c',
      'label' => 'LBL_DELIVERYSTATUS',
      'comments' => '',
      'help' => '',
      'module' => 'Prospects',
      'type' => 'int',
      'max_size' => '255',
      'require_option' => '0',
      'default_value' => '',
      'date_modified' => '2012-09-04 14:39:43',
      'deleted' => '0',
      'audited' => '1',
      'mass_update' => '0',
      'duplicate_merge' => '0',
      'reportable' => '1',
      'importable' => 'true',
      'ext1' => '',
      'ext2' => '',
      'ext3' => '',
      'ext4' => '',
    ),
    'Prospectsforms_c' =>
    array (
      'id' => 'Prospectsforms_c',
      'name' => 'forms_c',
      'label' => 'LBL_FORMS',
      'comments' => '',
      'help' => '',
      'module' => 'Prospects',
      'type' => 'int',
      'max_size' => '255',
      'require_option' => '0',
      'default_value' => '',
      'date_modified' => '2012-09-04 14:38:18',
      'deleted' => '0',
      'audited' => '0',
      'mass_update' => '0',
      'duplicate_merge' => '0',
      'reportable' => '1',
      'importable' => 'true',
      'ext1' => '',
      'ext2' => '',
      'ext3' => '',
      'ext4' => '',
    ),
    'Prospectsfriendforward_c' =>
    array (
      'id' => 'Prospectsfriendforward_c',
      'name' => 'friendforward_c',
      'label' => 'LBL_FRIENDFORWARD',
      'comments' => '',
      'help' => '',
      'module' => 'Prospects',
      'type' => 'int',
      'max_size' => '255',
      'require_option' => '0',
      'default_value' => '0',
      'date_modified' => '2012-09-04 14:39:02',
      'deleted' => '0',
      'audited' => '0',
      'mass_update' => '0',
      'duplicate_merge' => '0',
      'reportable' => '1',
      'importable' => 'true',
      'ext1' => '',
      'ext2' => '',
      'ext3' => '',
      'ext4' => '',
    ),
    'Prospectsopened_c' =>
    array (
      'id' => 'Prospectsopened_c',
      'name' => 'opened_c',
      'label' => 'LBL_OPENED',
      'comments' => '',
      'help' => '',
      'module' => 'Prospects',
      'type' => 'int',
      'max_size' => '255',
      'require_option' => '0',
      'default_value' => '0',
      'date_modified' => '2012-09-04 14:41:57',
      'deleted' => '0',
      'audited' => '1',
      'mass_update' => '0',
      'duplicate_merge' => '0',
      'reportable' => '1',
      'importable' => 'true',
      'ext1' => '',
      'ext2' => '',
      'ext3' => '',
      'ext4' => '',
    ),
    'Prospectsunsub_c' =>
    array (
      'id' => 'Prospectsunsub_c',
      'name' => 'unsub_c',
      'label' => 'LBL_UNSUB',
      'comments' => '',
      'help' => '',
      'module' => 'Prospects',
      'type' => 'int',
      'max_size' => '255',
      'require_option' => '0',
      'default_value' => '0',
      'date_modified' => '2012-09-04 14:37:41',
      'deleted' => '0',
      'audited' => '1',
      'mass_update' => '0',
      'duplicate_merge' => '0',
      'reportable' => '1',
      'importable' => 'true',
      'ext1' => '',
      'ext2' => '',
      'ext3' => '',
      'ext4' => '',
    ),
    'Emailssalesfusionemail_c' =>
    array (
      'module' => 'Emails',
      'id' => 'Emailssalesfusionemail_c',
      'name' => 'salesfusionemail_c',
      'vname' => 'LBL_SALESFUSIONEMAIL',
      'type' => 'bool',
      'massupdate' => false,
      'no_default' => false,
      'default_value' => '0',
      'comments' => '',
      'help' => 'Set to true if this email was entered into SugarCRM from Salesfusion',
      'importable' => 'true',
      'duplicate_merge' => 'enabled',
      'duplicate_merge_dom_value' => '1',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'calculated' => false,
    ),
	'Contactssf_lastactivity_default_c' => 
    array (
      'id' => 'Contactssf_lastactivity_default_c',
      'name' => 'sf_lastactivity_default_c',
      'label' => 'LBL_SF_LASTACTIVITY_DEFAULT',
      'comments' => NULL,
      'help' => NULL,
      'module' => 'Contacts',
      'type' => 'datetimecombo',
      'max_size' => NULL,
      'require_option' => '0',
      'default_value' => NULL,
      'date_modified' => '2017-06-20 11:46:42',
      'deleted' => '0',
      'audited' => '0',
      'mass_update' => '1',
      'duplicate_merge' => '1',
      'reportable' => '1',
      'importable' => 'true',
      'ext1' => NULL,
      'ext2' => NULL,
      'ext3' => NULL,
      'ext4' => NULL,
    ),
    'Leadssf_lastactivity_default_c' => 
    array (
      'id' => 'Leadssf_lastactivity_default_c',
      'name' => 'sf_lastactivity_default_c',
      'label' => 'LBL_SF_LASTACTIVITY_DEFAULT',
      'comments' => NULL,
      'help' => NULL,
      'module' => 'Leads',
      'type' => 'datetimecombo',
      'max_size' => NULL,
      'require_option' => '0',
      'default_value' => NULL,
      'date_modified' => '2017-06-20 11:49:19',
      'deleted' => '0',
      'audited' => '0',
      'mass_update' => '1',
      'duplicate_merge' => '1',
      'reportable' => '1',
      'importable' => 'true',
      'ext1' => NULL,
      'ext2' => NULL,
      'ext3' => NULL,
      'ext4' => NULL,
    ),
  ),
  'layoutfields' =>
  array (
    0 =>
    array (
      'additional_fields' =>
      array (
      ),
    ),
    1 =>
    array (
      'additional_fields' =>
      array (
      ),
    ),
    2 =>
    array (
      'additional_fields' =>
      array (
      ),
    ),
    3 =>
    array (
      'additional_fields' =>
      array (
      ),
    ),
  ),
  'wireless_subpanels' =>
  array (
    0 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/wirelesslayoutdefs/sf_webactivity_accounts_Accounts.php',
      'to_module' => 'Accounts',
    ),
    1 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/wirelesslayoutdefs/sf_webactivity_leads_Leads.php',
      'to_module' => 'Leads',
    ),
    2 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/wirelesslayoutdefs/sf_webactivity_contacts_Contacts.php',
      'to_module' => 'Contacts',
    ),
    3 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/wirelesslayoutdefs/sf_webactivitydetail_sf_webactivity_sf_webActivity.php',
      'to_module' => 'sf_webActivity',
    ),
  4 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/wirelesslayoutdefs/sf_dialogs_contacts_Contacts.php',
      'to_module' => 'Contacts',
    ),
    5 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/wirelesslayoutdefs/sf_dialogs_leads_Leads.php',
      'to_module' => 'Leads',
    ),
    6 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/wirelesslayoutdefs/sf_eventmanagement_contacts_Contacts.php',
      'to_module' => 'Contacts',
    ),
    7 =>
    array (
      'from' => '<basepath>/SugarModules/relationships/wirelesslayoutdefs/sf_eventmanagement_leads_Leads.php',
      'to_module' => 'Leads',
    ),
  ),
  'sidecarsubpanelmobilelayout' =>
  array (
    0 =>
    array (
      'from' => '<basepath>/SugarModules/clients/mobile/layouts/subpanels/sf_web_activity_accounts_Accounts.php',
      'to_module' => 'Accounts',
    ),
    1 =>
    array (
      'from' => '<basepath>/SugarModules/clients/mobile/layouts/subpanels/sf_web_activity_leads_Leads.php',
      'to_module' => 'Leads',
    ),
    2 =>
    array (
      'from' => '<basepath>/SugarModules/clients/mobile/layouts/subpanels/sf_web_activity_contacts_Contacts.php',
      'to_module' => 'Contacts',
    ),
    3 =>
    array (
      'from' => '<basepath>/SugarModules/clients/mobile/layouts/subpanels/sf_web_activity_sf_web_activity_detail_sf_Web_Activity.php',
      'to_module' => 'sf_webActivity',
    ),
    4 =>
    array (
      'from' => '<basepath>/SugarModules/clients/mobile/layouts/subpanels/sf_event_management_contacts_Contacts.php',
      'to_module' => 'Contacts',
    ),
    5 =>
    array (
      'from' => '<basepath>/SugarModules/clients/mobile/layouts/subpanels/sf_event_management_leads_Leads.php',
      'to_module' => 'Leads',
    ),
    6 =>
    array (
      'from' => '<basepath>/SugarModules/clients/mobile/layouts/subpanels/sf_dialogs_contacts_Contacts.php',
      'to_module' => 'Contacts',
    ),
    7 =>
    array (
      'from' => '<basepath>/SugarModules/clients/mobile/layouts/subpanels/sf_dialogs_leads_Leads.php',
      'to_module' => 'Leads',
    ),
  ),
);
