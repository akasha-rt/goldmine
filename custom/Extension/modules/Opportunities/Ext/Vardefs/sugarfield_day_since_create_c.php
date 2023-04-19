<?php
 // created: 2021-05-28 14:53:43
$dictionary['Opportunity']['fields']['day_since_create_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['day_since_create_c']['labelValue']='Days Since Created';
$dictionary['Opportunity']['fields']['day_since_create_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['day_since_create_c']['calculated']='true';
$dictionary['Opportunity']['fields']['day_since_create_c']['formula']='abs(subtract(daysUntil($date_entered),daysUntil(today())))';
$dictionary['Opportunity']['fields']['day_since_create_c']['enforced']='true';
$dictionary['Opportunity']['fields']['day_since_create_c']['dependency']='';
$dictionary['Opportunity']['fields']['day_since_create_c']['required_formula']='';
$dictionary['Opportunity']['fields']['day_since_create_c']['readonly_formula']='';

 ?>