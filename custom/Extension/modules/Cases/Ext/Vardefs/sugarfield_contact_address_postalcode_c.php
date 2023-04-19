<?php
 // created: 2022-11-08 14:59:15
$dictionary['Case']['fields']['contact_address_postalcode_c']['duplicate_merge_dom_value']=0;
$dictionary['Case']['fields']['contact_address_postalcode_c']['labelValue']='Contact Address PostalCode';
$dictionary['Case']['fields']['contact_address_postalcode_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Case']['fields']['contact_address_postalcode_c']['group']='contact_address_c';
$dictionary['Case']['fields']['contact_address_postalcode_c']['calculated']='true';
$dictionary['Case']['fields']['contact_address_postalcode_c']['formula']='related($case_contact,"primary_address_postalcode")';
$dictionary['Case']['fields']['contact_address_postalcode_c']['enforced']='true';
$dictionary['Case']['fields']['contact_address_postalcode_c']['dependency']='';
$dictionary['Case']['fields']['contact_address_postalcode_c']['required_formula']='';
$dictionary['Case']['fields']['contact_address_postalcode_c']['readonly_formula']='';

 ?>