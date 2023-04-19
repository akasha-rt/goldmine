<?php
 // created: 2022-12-16 20:55:45
$dictionary['Case']['fields']['contact_address_country_c']['duplicate_merge_dom_value']=0;
$dictionary['Case']['fields']['contact_address_country_c']['labelValue']='Contact Address Country';
$dictionary['Case']['fields']['contact_address_country_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Case']['fields']['contact_address_country_c']['group']='contact_address_c';
$dictionary['Case']['fields']['contact_address_country_c']['calculated']='true';
$dictionary['Case']['fields']['contact_address_country_c']['formula']='related($contacts,"primary_address_country")';
$dictionary['Case']['fields']['contact_address_country_c']['enforced']='true';
$dictionary['Case']['fields']['contact_address_country_c']['dependency']='';
$dictionary['Case']['fields']['contact_address_country_c']['required_formula']='';
$dictionary['Case']['fields']['contact_address_country_c']['readonly_formula']='';

 ?>