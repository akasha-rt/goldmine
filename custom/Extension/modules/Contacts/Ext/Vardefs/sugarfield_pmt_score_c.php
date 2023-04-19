<?php
 // created: 2022-07-27 17:12:23
$dictionary['Contact']['fields']['pmt_score_c']['labelValue']='PMT Group Score';
$dictionary['Contact']['fields']['pmt_score_c']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1',
  'searchable' => true,
);
$dictionary['Contact']['fields']['pmt_score_c']['enforced']='false';
$dictionary['Contact']['fields']['pmt_score_c']['dependency']='equal($pmt_c,"Yes")';
$dictionary['Contact']['fields']['pmt_score_c']['required_formula']='';
$dictionary['Contact']['fields']['pmt_score_c']['readonly']='1';
$dictionary['Contact']['fields']['pmt_score_c']['readonly_formula']='';

 ?>