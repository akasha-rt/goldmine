<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/LSS01_GroupEmails/Ext/Vardefs/accounts_lss01_groupemails_1_LSS01_GroupEmails.php

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

?>
<?php
// Merged from custom/Extension/modules/LSS01_GroupEmails/Ext/Vardefs/sugarfield_group_email_type_c.php

 // created: 2022-09-30 06:03:31
$dictionary['LSS01_GroupEmails']['fields']['group_email_type_c']['labelValue']='Group Email Type';
$dictionary['LSS01_GroupEmails']['fields']['group_email_type_c']['dependency']='';
$dictionary['LSS01_GroupEmails']['fields']['group_email_type_c']['required_formula']='';
$dictionary['LSS01_GroupEmails']['fields']['group_email_type_c']['readonly_formula']='';
$dictionary['LSS01_GroupEmails']['fields']['group_email_type_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/LSS01_GroupEmails/Ext/Vardefs/sugarfield_email_address_c.php

 // created: 2022-09-30 06:04:08
$dictionary['LSS01_GroupEmails']['fields']['email_address_c']['labelValue']='Email Address';
$dictionary['LSS01_GroupEmails']['fields']['email_address_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['LSS01_GroupEmails']['fields']['email_address_c']['enforced']='';
$dictionary['LSS01_GroupEmails']['fields']['email_address_c']['dependency']='';
$dictionary['LSS01_GroupEmails']['fields']['email_address_c']['required_formula']='';
$dictionary['LSS01_GroupEmails']['fields']['email_address_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/LSS01_GroupEmails/Ext/Vardefs/sugarfield_name.php

 // created: 2022-09-30 06:05:09
$dictionary['LSS01_GroupEmails']['fields']['name']['len']='255';
$dictionary['LSS01_GroupEmails']['fields']['name']['audited']=false;
$dictionary['LSS01_GroupEmails']['fields']['name']['massupdate']=false;
$dictionary['LSS01_GroupEmails']['fields']['name']['hidemassupdate']=false;
$dictionary['LSS01_GroupEmails']['fields']['name']['importable']='false';
$dictionary['LSS01_GroupEmails']['fields']['name']['duplicate_merge']='disabled';
$dictionary['LSS01_GroupEmails']['fields']['name']['duplicate_merge_dom_value']=0;
$dictionary['LSS01_GroupEmails']['fields']['name']['merge_filter']='disabled';
$dictionary['LSS01_GroupEmails']['fields']['name']['unified_search']=false;
$dictionary['LSS01_GroupEmails']['fields']['name']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1.55',
  'searchable' => true,
);
$dictionary['LSS01_GroupEmails']['fields']['name']['calculated']='true';
$dictionary['LSS01_GroupEmails']['fields']['name']['formula']='concat(related($accounts_lss01_groupemails_1,"name")," - ",$group_email_type_c)';
$dictionary['LSS01_GroupEmails']['fields']['name']['enforced']=true;

 
?>
