<?php
// created: 2019-06-18 16:23:52
$dictionary["SOM_SpecialOrderQuotes"]["fields"]["accounts_som_specialorderquotes_1"] = array (
  'name' => 'accounts_som_specialorderquotes_1',
  'type' => 'link',
  'relationship' => 'accounts_som_specialorderquotes_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_SOM_SPECIALORDERQUOTES_1_FROM_SOM_SPECIALORDERQUOTES_TITLE',
  'id_name' => 'accounts_som_specialorderquotes_1accounts_ida',
  'link-type' => 'one',
);
$dictionary["SOM_SpecialOrderQuotes"]["fields"]["accounts_som_specialorderquotes_1_name"] = array (
  'name' => 'accounts_som_specialorderquotes_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_SOM_SPECIALORDERQUOTES_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_som_specialorderquotes_1accounts_ida',
  'link' => 'accounts_som_specialorderquotes_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["SOM_SpecialOrderQuotes"]["fields"]["accounts_som_specialorderquotes_1accounts_ida"] = array (
  'name' => 'accounts_som_specialorderquotes_1accounts_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_SOM_SPECIALORDERQUOTES_1_FROM_SOM_SPECIALORDERQUOTES_TITLE_ID',
  'id_name' => 'accounts_som_specialorderquotes_1accounts_ida',
  'link' => 'accounts_som_specialorderquotes_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
