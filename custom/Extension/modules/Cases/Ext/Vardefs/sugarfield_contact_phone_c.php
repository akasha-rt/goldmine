<?php
 // created: 2022-11-08 14:38:14
$dictionary['Case']['fields']['contact_phone_c']['duplicate_merge_dom_value']=0;
$dictionary['Case']['fields']['contact_phone_c']['labelValue']='Contact Phone';
$dictionary['Case']['fields']['contact_phone_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Case']['fields']['contact_phone_c']['calculated']='true';
$dictionary['Case']['fields']['contact_phone_c']['formula']='related($contacts,"phone_work")';
$dictionary['Case']['fields']['contact_phone_c']['enforced']='true';
$dictionary['Case']['fields']['contact_phone_c']['dependency']='';
$dictionary['Case']['fields']['contact_phone_c']['required_formula']='';
$dictionary['Case']['fields']['contact_phone_c']['readonly_formula']='';

 ?>