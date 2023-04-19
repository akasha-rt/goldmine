<?php
// created: 2022-09-30 05:59:31
$dictionary["LSS01_GroupEmails"]["fields"]["accounts_lss01_groupemails_1"] = array (
  'name' => 'accounts_lss01_groupemails_1',
  'type' => 'link',
  'relationship' => 'accounts_lss01_groupemails_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_LSS01_GROUPEMAILS_1_FROM_LSS01_GROUPEMAILS_TITLE',
  'id_name' => 'accounts_lss01_groupemails_1accounts_ida',
  'link-type' => 'one',
);
$dictionary["LSS01_GroupEmails"]["fields"]["accounts_lss01_groupemails_1_name"] = array (
  'name' => 'accounts_lss01_groupemails_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_LSS01_GROUPEMAILS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_lss01_groupemails_1accounts_ida',
  'link' => 'accounts_lss01_groupemails_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["LSS01_GroupEmails"]["fields"]["accounts_lss01_groupemails_1accounts_ida"] = array (
  'name' => 'accounts_lss01_groupemails_1accounts_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_LSS01_GROUPEMAILS_1_FROM_LSS01_GROUPEMAILS_TITLE_ID',
  'id_name' => 'accounts_lss01_groupemails_1accounts_ida',
  'link' => 'accounts_lss01_groupemails_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
