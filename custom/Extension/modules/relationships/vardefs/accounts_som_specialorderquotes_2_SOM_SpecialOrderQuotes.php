<?php
// created: 2019-07-18 15:36:15
$dictionary["SOM_SpecialOrderQuotes"]["fields"]["accounts_som_specialorderquotes_2"] = array (
  'name' => 'accounts_som_specialorderquotes_2',
  'type' => 'link',
  'relationship' => 'accounts_som_specialorderquotes_2',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_SOM_SPECIALORDERQUOTES_2_FROM_SOM_SPECIALORDERQUOTES_TITLE',
  'id_name' => 'accounts_som_specialorderquotes_2accounts_ida',
  'link-type' => 'one',
);
$dictionary["SOM_SpecialOrderQuotes"]["fields"]["accounts_som_specialorderquotes_2_name"] = array (
  'name' => 'accounts_som_specialorderquotes_2_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_SOM_SPECIALORDERQUOTES_2_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_som_specialorderquotes_2accounts_ida',
  'link' => 'accounts_som_specialorderquotes_2',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["SOM_SpecialOrderQuotes"]["fields"]["accounts_som_specialorderquotes_2accounts_ida"] = array (
  'name' => 'accounts_som_specialorderquotes_2accounts_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_SOM_SPECIALORDERQUOTES_2_FROM_SOM_SPECIALORDERQUOTES_TITLE_ID',
  'id_name' => 'accounts_som_specialorderquotes_2accounts_ida',
  'link' => 'accounts_som_specialorderquotes_2',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
