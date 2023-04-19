<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/sf_webActivity/Ext/Vardefs/sf_webactivitydetail_sf_webactivity_sf_webActivity.php

// created: 2012-08-28 20:35:15
$dictionary["sf_webActivity"]["fields"]["sf_webactivitydetail_sf_webactivity"] = array (
  'name' => 'sf_webactivitydetail_sf_webactivity',
  'type' => 'link',
  'relationship' => 'sf_webactivitydetail_sf_webactivity',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_SF_WEBACTIVITYDETAIL_SF_WEBACTIVITY_FROM_SF_WEBACTIVITYDETAIL_TITLE',
);

?>
<?php
// Merged from custom/Extension/modules/sf_webActivity/Ext/Vardefs/full_text_search_admin.php

 // created: 2022-05-25 15:54:16
$dictionary['sf_webActivity']['full_text_search']=false;

?>
<?php
// Merged from custom/Extension/modules/sf_webActivity/Ext/Vardefs/sf_webactivity_leads_sf_webActivity.php

 // created: 2022-06-11 03:10:51
$dictionary['sf_webActivity']['fields']['sf_webactivity_leads']['name'] = 'sf_webactivity_leads';
$dictionary['sf_webActivity']['fields']['sf_webactivity_leads']['type'] = 'link';
$dictionary['sf_webActivity']['fields']['sf_webactivity_leads']['relationship'] = 'sf_webactivity_leads';
$dictionary['sf_webActivity']['fields']['sf_webactivity_leads']['source'] = 'non-db';
$dictionary['sf_webActivity']['fields']['sf_webactivity_leads']['vname'] = 'LBL_SF_WEBACTIVITY_LEADS_FROM_LEADS_TITLE';
$dictionary['sf_webActivity']['fields']['sf_webactivity_leads']['id_name'] = 'sf_webactivity_leadsleads_ida';
$dictionary['sf_webActivity']['fields']['sf_webactivity_leads_name']['name'] = 'sf_webactivity_leads_name';
$dictionary['sf_webActivity']['fields']['sf_webactivity_leads_name']['type'] = 'relate';
$dictionary['sf_webActivity']['fields']['sf_webactivity_leads_name']['source'] = 'non-db';
$dictionary['sf_webActivity']['fields']['sf_webactivity_leads_name']['vname'] = 'LBL_SF_WEBACTIVITY_LEADS_FROM_LEADS_TITLE';
$dictionary['sf_webActivity']['fields']['sf_webactivity_leads_name']['save'] = true;
$dictionary['sf_webActivity']['fields']['sf_webactivity_leads_name']['id_name'] = 'sf_webactivity_leadsleads_ida';
$dictionary['sf_webActivity']['fields']['sf_webactivity_leads_name']['link'] = 'sf_webactivity_leads';
$dictionary['sf_webActivity']['fields']['sf_webactivity_leads_name']['table'] = 'leads';
$dictionary['sf_webActivity']['fields']['sf_webactivity_leads_name']['module'] = 'Leads';
$dictionary['sf_webActivity']['fields']['sf_webactivity_leads_name']['rname'] = 'name';
$dictionary['sf_webActivity']['fields']['sf_webactivity_leads_name']['db_concat_fields'][0] = 'first_name';
$dictionary['sf_webActivity']['fields']['sf_webactivity_leads_name']['db_concat_fields'][1] = 'last_name';
$dictionary['sf_webActivity']['fields']['sf_webactivity_leadsleads_ida']['name'] = 'sf_webactivity_leadsleads_ida';
$dictionary['sf_webActivity']['fields']['sf_webactivity_leadsleads_ida']['type'] = 'id';
$dictionary['sf_webActivity']['fields']['sf_webactivity_leadsleads_ida']['relationship'] = 'sf_webactivity_leads';
$dictionary['sf_webActivity']['fields']['sf_webactivity_leadsleads_ida']['source'] = 'non-db';
$dictionary['sf_webActivity']['fields']['sf_webactivity_leadsleads_ida']['reportable'] = false;
$dictionary['sf_webActivity']['fields']['sf_webactivity_leadsleads_ida']['side'] = 'right';
$dictionary['sf_webActivity']['fields']['sf_webactivity_leadsleads_ida']['vname'] = 'LBL_SF_WEBACTIVITY_LEADS_FROM_SF_WEBACTIVITY_TITLE';
$dictionary['sf_webActivity']['fields']['sf_webactivity_leadsleads_ida']['link'] = 'sf_webactivity_leads';
$dictionary['sf_webActivity']['fields']['sf_webactivity_leadsleads_ida']['rname'] = 'id';

?>
<?php
// Merged from custom/Extension/modules/sf_webActivity/Ext/Vardefs/sf_webactivity_accounts_sf_webActivity.php

 // created: 2022-06-11 03:10:51
$dictionary['sf_webActivity']['fields']['sf_webactivity_accounts']['name'] = 'sf_webactivity_accounts';
$dictionary['sf_webActivity']['fields']['sf_webactivity_accounts']['type'] = 'link';
$dictionary['sf_webActivity']['fields']['sf_webactivity_accounts']['relationship'] = 'sf_webactivity_accounts';
$dictionary['sf_webActivity']['fields']['sf_webactivity_accounts']['source'] = 'non-db';
$dictionary['sf_webActivity']['fields']['sf_webactivity_accounts']['vname'] = 'LBL_SF_WEBACTIVITY_ACCOUNTS_FROM_ACCOUNTS_TITLE';
$dictionary['sf_webActivity']['fields']['sf_webactivity_accounts']['id_name'] = 'sf_webactivity_accountsaccounts_ida';
$dictionary['sf_webActivity']['fields']['sf_webactivity_accounts_name']['name'] = 'sf_webactivity_accounts_name';
$dictionary['sf_webActivity']['fields']['sf_webactivity_accounts_name']['type'] = 'relate';
$dictionary['sf_webActivity']['fields']['sf_webactivity_accounts_name']['source'] = 'non-db';
$dictionary['sf_webActivity']['fields']['sf_webactivity_accounts_name']['vname'] = 'LBL_SF_WEBACTIVITY_ACCOUNTS_FROM_ACCOUNTS_TITLE';
$dictionary['sf_webActivity']['fields']['sf_webactivity_accounts_name']['save'] = true;
$dictionary['sf_webActivity']['fields']['sf_webactivity_accounts_name']['id_name'] = 'sf_webactivity_accountsaccounts_ida';
$dictionary['sf_webActivity']['fields']['sf_webactivity_accounts_name']['link'] = 'sf_webactivity_accounts';
$dictionary['sf_webActivity']['fields']['sf_webactivity_accounts_name']['table'] = 'accounts';
$dictionary['sf_webActivity']['fields']['sf_webactivity_accounts_name']['module'] = 'Accounts';
$dictionary['sf_webActivity']['fields']['sf_webactivity_accounts_name']['rname'] = 'name';
$dictionary['sf_webActivity']['fields']['sf_webactivity_accountsaccounts_ida']['name'] = 'sf_webactivity_accountsaccounts_ida';
$dictionary['sf_webActivity']['fields']['sf_webactivity_accountsaccounts_ida']['type'] = 'id';
$dictionary['sf_webActivity']['fields']['sf_webactivity_accountsaccounts_ida']['relationship'] = 'sf_webactivity_accounts';
$dictionary['sf_webActivity']['fields']['sf_webactivity_accountsaccounts_ida']['source'] = 'non-db';
$dictionary['sf_webActivity']['fields']['sf_webactivity_accountsaccounts_ida']['reportable'] = false;
$dictionary['sf_webActivity']['fields']['sf_webactivity_accountsaccounts_ida']['side'] = 'right';
$dictionary['sf_webActivity']['fields']['sf_webactivity_accountsaccounts_ida']['vname'] = 'LBL_SF_WEBACTIVITY_ACCOUNTS_FROM_SF_WEBACTIVITY_TITLE';
$dictionary['sf_webActivity']['fields']['sf_webactivity_accountsaccounts_ida']['link'] = 'sf_webactivity_accounts';
$dictionary['sf_webActivity']['fields']['sf_webactivity_accountsaccounts_ida']['rname'] = 'id';

?>
<?php
// Merged from custom/Extension/modules/sf_webActivity/Ext/Vardefs/sf_webactivity_contacts_sf_webActivity.php

 // created: 2022-06-11 03:10:51
$dictionary['sf_webActivity']['fields']['sf_webactivity_contacts']['name'] = 'sf_webactivity_contacts';
$dictionary['sf_webActivity']['fields']['sf_webactivity_contacts']['type'] = 'link';
$dictionary['sf_webActivity']['fields']['sf_webactivity_contacts']['relationship'] = 'sf_webactivity_contacts';
$dictionary['sf_webActivity']['fields']['sf_webactivity_contacts']['source'] = 'non-db';
$dictionary['sf_webActivity']['fields']['sf_webactivity_contacts']['vname'] = 'LBL_SF_WEBACTIVITY_CONTACTS_FROM_CONTACTS_TITLE';
$dictionary['sf_webActivity']['fields']['sf_webactivity_contacts']['id_name'] = 'sf_webactivity_contactscontacts_ida';
$dictionary['sf_webActivity']['fields']['sf_webactivity_contacts_name']['name'] = 'sf_webactivity_contacts_name';
$dictionary['sf_webActivity']['fields']['sf_webactivity_contacts_name']['type'] = 'relate';
$dictionary['sf_webActivity']['fields']['sf_webactivity_contacts_name']['source'] = 'non-db';
$dictionary['sf_webActivity']['fields']['sf_webactivity_contacts_name']['vname'] = 'LBL_SF_WEBACTIVITY_CONTACTS_FROM_CONTACTS_TITLE';
$dictionary['sf_webActivity']['fields']['sf_webactivity_contacts_name']['save'] = true;
$dictionary['sf_webActivity']['fields']['sf_webactivity_contacts_name']['id_name'] = 'sf_webactivity_contactscontacts_ida';
$dictionary['sf_webActivity']['fields']['sf_webactivity_contacts_name']['link'] = 'sf_webactivity_contacts';
$dictionary['sf_webActivity']['fields']['sf_webactivity_contacts_name']['table'] = 'contacts';
$dictionary['sf_webActivity']['fields']['sf_webactivity_contacts_name']['module'] = 'Contacts';
$dictionary['sf_webActivity']['fields']['sf_webactivity_contacts_name']['rname'] = 'name';
$dictionary['sf_webActivity']['fields']['sf_webactivity_contacts_name']['db_concat_fields'][0] = 'first_name';
$dictionary['sf_webActivity']['fields']['sf_webactivity_contacts_name']['db_concat_fields'][1] = 'last_name';
$dictionary['sf_webActivity']['fields']['sf_webactivity_contactscontacts_ida']['name'] = 'sf_webactivity_contactscontacts_ida';
$dictionary['sf_webActivity']['fields']['sf_webactivity_contactscontacts_ida']['type'] = 'id';
$dictionary['sf_webActivity']['fields']['sf_webactivity_contactscontacts_ida']['relationship'] = 'sf_webactivity_contacts';
$dictionary['sf_webActivity']['fields']['sf_webactivity_contactscontacts_ida']['source'] = 'non-db';
$dictionary['sf_webActivity']['fields']['sf_webactivity_contactscontacts_ida']['reportable'] = false;
$dictionary['sf_webActivity']['fields']['sf_webactivity_contactscontacts_ida']['side'] = 'right';
$dictionary['sf_webActivity']['fields']['sf_webactivity_contactscontacts_ida']['vname'] = 'LBL_SF_WEBACTIVITY_CONTACTS_FROM_SF_WEBACTIVITY_TITLE';
$dictionary['sf_webActivity']['fields']['sf_webactivity_contactscontacts_ida']['link'] = 'sf_webactivity_contacts';
$dictionary['sf_webActivity']['fields']['sf_webactivity_contactscontacts_ida']['rname'] = 'id';

?>
