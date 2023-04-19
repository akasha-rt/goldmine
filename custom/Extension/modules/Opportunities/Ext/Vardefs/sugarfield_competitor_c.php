<?php
 // created: 2020-08-27 15:10:41
$dictionary['Opportunity']['fields']['competitor_c']['labelValue']='Competitor(s)';
$dictionary['Opportunity']['fields']['competitor_c']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1',
  'searchable' => true,
);
$dictionary['Opportunity']['fields']['competitor_c']['enforced']='';
$dictionary['Opportunity']['fields']['competitor_c']['dependency']='equal($opportunity_type,"Conversion")';

 ?>