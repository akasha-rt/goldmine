<?php
 // created: 2022-12-16 19:33:17
$dictionary['Case']['fields']['contact_address_city_c']['duplicate_merge_dom_value']=0;
$dictionary['Case']['fields']['contact_address_city_c']['labelValue']='Contact Address City';
$dictionary['Case']['fields']['contact_address_city_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Case']['fields']['contact_address_city_c']['group']='contact_address_c';
$dictionary['Case']['fields']['contact_address_city_c']['calculated']='1';
$dictionary['Case']['fields']['contact_address_city_c']['formula']='related($contacts,"primary_address_city")';
$dictionary['Case']['fields']['contact_address_city_c']['enforced']='1';
$dictionary['Case']['fields']['contact_address_city_c']['dependency']='';
$dictionary['Case']['fields']['contact_address_city_c']['required_formula']='';
$dictionary['Case']['fields']['contact_address_city_c']['readonly_formula']='';

 ?>