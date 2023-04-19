<?php
 // created: 2022-12-16 20:57:53
$dictionary['Case']['fields']['contact_company_c']['duplicate_merge_dom_value']=0;
$dictionary['Case']['fields']['contact_company_c']['labelValue']='Contact Company';
$dictionary['Case']['fields']['contact_company_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Case']['fields']['contact_company_c']['calculated']='true';
$dictionary['Case']['fields']['contact_company_c']['formula']='related($contacts,"contact_company_c")';
$dictionary['Case']['fields']['contact_company_c']['enforced']='true';
$dictionary['Case']['fields']['contact_company_c']['dependency']='';
$dictionary['Case']['fields']['contact_company_c']['required_formula']='';
$dictionary['Case']['fields']['contact_company_c']['readonly_formula']='';

 ?>