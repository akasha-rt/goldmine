<?php
 // created: 2022-10-27 19:27:28
$dictionary['Case']['fields']['phone_number_c']['duplicate_merge_dom_value']=0;
$dictionary['Case']['fields']['phone_number_c']['labelValue']='Contact Phone';
$dictionary['Case']['fields']['phone_number_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Case']['fields']['phone_number_c']['calculated']='true';
$dictionary['Case']['fields']['phone_number_c']['formula']='related($case_contact,"phone_work")';
$dictionary['Case']['fields']['phone_number_c']['enforced']='true';
$dictionary['Case']['fields']['phone_number_c']['required_formula']='';
$dictionary['Case']['fields']['phone_number_c']['readonly_formula']='';

 ?>