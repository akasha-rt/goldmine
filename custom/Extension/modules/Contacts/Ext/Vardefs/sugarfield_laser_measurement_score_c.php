<?php
 // created: 2022-07-27 17:29:48
$dictionary['Contact']['fields']['laser_measurement_score_c']['labelValue']='Laser Measurement Score';
$dictionary['Contact']['fields']['laser_measurement_score_c']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1',
  'searchable' => true,
);
$dictionary['Contact']['fields']['laser_measurement_score_c']['enforced']='false';
$dictionary['Contact']['fields']['laser_measurement_score_c']['dependency']='equal($laser_measurement_c,"Yes")';
$dictionary['Contact']['fields']['laser_measurement_score_c']['required_formula']='';
$dictionary['Contact']['fields']['laser_measurement_score_c']['readonly']='1';
$dictionary['Contact']['fields']['laser_measurement_score_c']['readonly_formula']='';

 ?>