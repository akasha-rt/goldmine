<?php
 // created: 2020-06-16 14:56:30
$dictionary['SOM_SpecialOrderQuotes']['fields']['reason_c']['labelValue']='Reason Lost';
$dictionary['SOM_SpecialOrderQuotes']['fields']['reason_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['SOM_SpecialOrderQuotes']['fields']['reason_c']['enforced']='';
$dictionary['SOM_SpecialOrderQuotes']['fields']['reason_c']['dependency']='equal($special_order_stage_c,"Closed Lost")';

 ?>