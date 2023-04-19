<?php
 // created: 2022-12-05 18:00:33
$dictionary['Case']['fields']['contact_name_c']['duplicate_merge_dom_value']=0;
$dictionary['Case']['fields']['contact_name_c']['labelValue']='contact name';
$dictionary['Case']['fields']['contact_name_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Case']['fields']['contact_name_c']['calculated']='true';
$dictionary['Case']['fields']['contact_name_c']['formula']='related($case_contact,"name")';
$dictionary['Case']['fields']['contact_name_c']['enforced']='true';
$dictionary['Case']['fields']['contact_name_c']['dependency']='';
$dictionary['Case']['fields']['contact_name_c']['required_formula']='';
$dictionary['Case']['fields']['contact_name_c']['readonly_formula']='';

 ?>