<?php
 // created: 2022-07-27 17:14:28
$dictionary['Contact']['fields']['saws_score_c']['labelValue']='SAWS Group Score';
$dictionary['Contact']['fields']['saws_score_c']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1',
  'searchable' => true,
);
$dictionary['Contact']['fields']['saws_score_c']['enforced']='false';
$dictionary['Contact']['fields']['saws_score_c']['dependency']='equal($saws_c,"Yes")';
$dictionary['Contact']['fields']['saws_score_c']['required_formula']='';
$dictionary['Contact']['fields']['saws_score_c']['readonly']='1';
$dictionary['Contact']['fields']['saws_score_c']['readonly_formula']='';

 ?>