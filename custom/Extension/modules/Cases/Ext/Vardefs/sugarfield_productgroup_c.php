<?php
 // created: 2022-11-14 21:31:04
$dictionary['Case']['fields']['productgroup_c']['duplicate_merge_dom_value']=0;
$dictionary['Case']['fields']['productgroup_c']['labelValue']='Product Group';
$dictionary['Case']['fields']['productgroup_c']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1',
  'searchable' => true,
);
$dictionary['Case']['fields']['productgroup_c']['calculated']='true';
$dictionary['Case']['fields']['productgroup_c']['formula']='related($case_contact,"product_group_c")';
$dictionary['Case']['fields']['productgroup_c']['enforced']='true';
$dictionary['Case']['fields']['productgroup_c']['dependency']='';
$dictionary['Case']['fields']['productgroup_c']['required_formula']='';
$dictionary['Case']['fields']['productgroup_c']['readonly_formula']='';

 ?>