<?php
 // created: 2022-12-16 20:50:25
$dictionary['Case']['fields']['contact_email_address_c']['duplicate_merge_dom_value']=0;
$dictionary['Case']['fields']['contact_email_address_c']['labelValue']='Contact Email Address';
$dictionary['Case']['fields']['contact_email_address_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Case']['fields']['contact_email_address_c']['calculated']='1';
$dictionary['Case']['fields']['contact_email_address_c']['formula']='related($contacts,"email1")';
$dictionary['Case']['fields']['contact_email_address_c']['enforced']='1';
$dictionary['Case']['fields']['contact_email_address_c']['dependency']='';
$dictionary['Case']['fields']['contact_email_address_c']['required_formula']='';
$dictionary['Case']['fields']['contact_email_address_c']['readonly_formula']='';

 ?>