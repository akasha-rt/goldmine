<?php
 // created: 2022-07-27 17:19:56
$dictionary['Contact']['fields']['pgs_score_c']['labelValue']='Precision Stock Score';
$dictionary['Contact']['fields']['pgs_score_c']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1',
  'searchable' => true,
);
$dictionary['Contact']['fields']['pgs_score_c']['enforced']='false';
$dictionary['Contact']['fields']['pgs_score_c']['dependency']='equal($pgs_c,"Yes")';
$dictionary['Contact']['fields']['pgs_score_c']['required_formula']='';
$dictionary['Contact']['fields']['pgs_score_c']['readonly']='1';
$dictionary['Contact']['fields']['pgs_score_c']['readonly_formula']='';

 ?>