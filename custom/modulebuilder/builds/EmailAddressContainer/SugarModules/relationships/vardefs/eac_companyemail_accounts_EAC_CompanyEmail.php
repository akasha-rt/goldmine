<?php
// created: 2021-09-22 14:19:42
$dictionary["EAC_CompanyEmail"]["fields"]["eac_companyemail_accounts"] = array (
  'name' => 'eac_companyemail_accounts',
  'type' => 'link',
  'relationship' => 'eac_companyemail_accounts',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'side' => 'right',
  'vname' => 'LBL_EAC_COMPANYEMAIL_ACCOUNTS_FROM_EAC_COMPANYEMAIL_TITLE',
  'id_name' => 'eac_companyemail_accountsaccounts_ida',
  'link-type' => 'one',
);
$dictionary["EAC_CompanyEmail"]["fields"]["eac_companyemail_accounts_name"] = array (
  'name' => 'eac_companyemail_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_EAC_COMPANYEMAIL_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'eac_companyemail_accountsaccounts_ida',
  'link' => 'eac_companyemail_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["EAC_CompanyEmail"]["fields"]["eac_companyemail_accountsaccounts_ida"] = array (
  'name' => 'eac_companyemail_accountsaccounts_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_EAC_COMPANYEMAIL_ACCOUNTS_FROM_EAC_COMPANYEMAIL_TITLE_ID',
  'id_name' => 'eac_companyemail_accountsaccounts_ida',
  'link' => 'eac_companyemail_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
