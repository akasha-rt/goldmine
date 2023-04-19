<?php
 // created: 2022-11-08 14:33:57
$dictionary['Case']['fields']['contact_address_street_c']['duplicate_merge_dom_value']=0;
$dictionary['Case']['fields']['contact_address_street_c']['labelValue']='Contact Address Street';
$dictionary['Case']['fields']['contact_address_street_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Case']['fields']['contact_address_street_c']['group']='contact_address_c';
$dictionary['Case']['fields']['contact_address_street_c']['calculated']='true';
$dictionary['Case']['fields']['contact_address_street_c']['formula']='related($contacts,"primary_address_street")';
$dictionary['Case']['fields']['contact_address_street_c']['enforced']='true';
$dictionary['Case']['fields']['contact_address_street_c']['dependency']='';
$dictionary['Case']['fields']['contact_address_street_c']['required_formula']='';
$dictionary['Case']['fields']['contact_address_street_c']['readonly_formula']='';

 ?>