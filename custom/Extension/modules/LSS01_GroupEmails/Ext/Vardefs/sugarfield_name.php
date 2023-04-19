<?php
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