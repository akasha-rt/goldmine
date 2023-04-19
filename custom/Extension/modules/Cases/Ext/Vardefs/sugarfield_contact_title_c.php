<?php
 // created: 2022-11-08 14:39:28
$dictionary['Case']['fields']['contact_title_c']['duplicate_merge_dom_value']=0;
$dictionary['Case']['fields']['contact_title_c']['labelValue']='Contact Title';
$dictionary['Case']['fields']['contact_title_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Case']['fields']['contact_title_c']['calculated']='true';
$dictionary['Case']['fields']['contact_title_c']['formula']='related($contacts,"title")';
$dictionary['Case']['fields']['contact_title_c']['enforced']='true';
$dictionary['Case']['fields']['contact_title_c']['dependency']='';
$dictionary['Case']['fields']['contact_title_c']['required_formula']='';
$dictionary['Case']['fields']['contact_title_c']['readonly_formula']='';

 ?>