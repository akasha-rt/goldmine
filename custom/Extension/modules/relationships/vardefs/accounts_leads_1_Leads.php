<?php
// created: 2019-01-03 16:09:05
$dictionary["Lead"]["fields"]["accounts_leads_1"] = array (
  'name' => 'accounts_leads_1',
  'type' => 'link',
  'relationship' => 'accounts_leads_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_LEADS_1_FROM_LEADS_TITLE',
  'id_name' => 'accounts_leads_1accounts_ida',
  'link-type' => 'one',
);
$dictionary["Lead"]["fields"]["accounts_leads_1_name"] = array (
  'name' => 'accounts_leads_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_LEADS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_leads_1accounts_ida',
  'link' => 'accounts_leads_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["Lead"]["fields"]["accounts_leads_1accounts_ida"] = array (
  'name' => 'accounts_leads_1accounts_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_LEADS_1_FROM_LEADS_TITLE_ID',
  'id_name' => 'accounts_leads_1accounts_ida',
  'link' => 'accounts_leads_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
