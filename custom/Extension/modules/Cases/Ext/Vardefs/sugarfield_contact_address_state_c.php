<?php
 // created: 2022-12-16 19:35:07
$dictionary['Case']['fields']['contact_address_state_c']['duplicate_merge_dom_value']=0;
$dictionary['Case']['fields']['contact_address_state_c']['labelValue']='Contact Address State';
$dictionary['Case']['fields']['contact_address_state_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Case']['fields']['contact_address_state_c']['group']='contact_address_c';
$dictionary['Case']['fields']['contact_address_state_c']['calculated']='1';
$dictionary['Case']['fields']['contact_address_state_c']['formula']='related($contacts,"primary_address_state")';
$dictionary['Case']['fields']['contact_address_state_c']['enforced']='1';
$dictionary['Case']['fields']['contact_address_state_c']['dependency']='';
$dictionary['Case']['fields']['contact_address_state_c']['required_formula']='';
$dictionary['Case']['fields']['contact_address_state_c']['readonly_formula']='';

 ?>