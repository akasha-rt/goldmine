<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/PC_ProductCategoryClone/Ext/Vardefs/sugarfield_name.php

 // created: 2021-03-29 19:58:07
$dictionary['PC_ProductCategoryClone']['fields']['name']['len']='255';
$dictionary['PC_ProductCategoryClone']['fields']['name']['audited']=false;
$dictionary['PC_ProductCategoryClone']['fields']['name']['massupdate']=false;
$dictionary['PC_ProductCategoryClone']['fields']['name']['hidemassupdate']=false;
$dictionary['PC_ProductCategoryClone']['fields']['name']['unified_search']=false;
$dictionary['PC_ProductCategoryClone']['fields']['name']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1.55',
  'searchable' => true,
);
$dictionary['PC_ProductCategoryClone']['fields']['name']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/PC_ProductCategoryClone/Ext/Vardefs/pc_productcategoryclone_in_incentives_1_PC_ProductCategoryClone.php

// created: 2021-03-30 15:29:52
$dictionary["PC_ProductCategoryClone"]["fields"]["pc_productcategoryclone_in_incentives_1"] = array (
  'name' => 'pc_productcategoryclone_in_incentives_1',
  'type' => 'link',
  'relationship' => 'pc_productcategoryclone_in_incentives_1',
  'source' => 'non-db',
  'module' => 'IN_Incentives',
  'bean_name' => 'IN_Incentives',
  'vname' => 'LBL_PC_PRODUCTCATEGORYCLONE_IN_INCENTIVES_1_FROM_PC_PRODUCTCATEGORYCLONE_TITLE',
  'id_name' => 'pc_productcd98ryclone_ida',
  'link-type' => 'many',
  'side' => 'left',
);

?>
<?php
// Merged from custom/Extension/modules/PC_ProductCategoryClone/Ext/Vardefs/pc_productcategoryclone_meetings_1_PC_ProductCategoryClone.php

// created: 2021-03-30 16:00:24
$dictionary["PC_ProductCategoryClone"]["fields"]["pc_productcategoryclone_meetings_1"] = array (
  'name' => 'pc_productcategoryclone_meetings_1',
  'type' => 'link',
  'relationship' => 'pc_productcategoryclone_meetings_1',
  'source' => 'non-db',
  'module' => 'Meetings',
  'bean_name' => 'Meeting',
  'vname' => 'LBL_PC_PRODUCTCATEGORYCLONE_MEETINGS_1_FROM_PC_PRODUCTCATEGORYCLONE_TITLE',
  'id_name' => 'pc_productcategoryclone_meetings_1pc_productcategoryclone_ida',
  'link-type' => 'many',
  'side' => 'left',
);

?>
<?php
// Merged from custom/Extension/modules/PC_ProductCategoryClone/Ext/Vardefs/pc_productcategoryclone_opportunities_1_PC_ProductCategoryClone.php

// created: 2021-03-30 16:23:09
$dictionary["PC_ProductCategoryClone"]["fields"]["pc_productcategoryclone_opportunities_1"] = array (
  'name' => 'pc_productcategoryclone_opportunities_1',
  'type' => 'link',
  'relationship' => 'pc_productcategoryclone_opportunities_1',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_PC_PRODUCTCATEGORYCLONE_OPPORTUNITIES_1_FROM_PC_PRODUCTCATEGORYCLONE_TITLE',
  'id_name' => 'pc_product9b3eryclone_ida',
  'link-type' => 'many',
  'side' => 'left',
);

?>
<?php
// Merged from custom/Extension/modules/PC_ProductCategoryClone/Ext/Vardefs/full_text_search_admin.php

 // created: 2022-05-25 15:54:16
$dictionary['PC_ProductCategoryClone']['full_text_search']=true;

?>
