<?php
// created: 2021-03-26 19:33:36
$dictionary["IN_Incentives"]["fields"]["in_incentives_producttemplates"] = array (
  'name' => 'in_incentives_producttemplates',
  'type' => 'link',
  'relationship' => 'in_incentives_producttemplates',
  'source' => 'non-db',
  'module' => 'ProductTemplates',
  'bean_name' => 'ProductTemplate',
  'side' => 'right',
  'vname' => 'LBL_IN_INCENTIVES_PRODUCTTEMPLATES_FROM_IN_INCENTIVES_TITLE',
  'id_name' => 'in_incentives_producttemplatesproducttemplates_ida',
  'link-type' => 'one',
);
$dictionary["IN_Incentives"]["fields"]["in_incentives_producttemplates_name"] = array (
  'name' => 'in_incentives_producttemplates_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_IN_INCENTIVES_PRODUCTTEMPLATES_FROM_PRODUCTTEMPLATES_TITLE',
  'save' => true,
  'id_name' => 'in_incentives_producttemplatesproducttemplates_ida',
  'link' => 'in_incentives_producttemplates',
  'table' => 'product_templates',
  'module' => 'ProductTemplates',
  'rname' => 'name',
);
$dictionary["IN_Incentives"]["fields"]["in_incentives_producttemplatesproducttemplates_ida"] = array (
  'name' => 'in_incentives_producttemplatesproducttemplates_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_IN_INCENTIVES_PRODUCTTEMPLATES_FROM_IN_INCENTIVES_TITLE_ID',
  'id_name' => 'in_incentives_producttemplatesproducttemplates_ida',
  'link' => 'in_incentives_producttemplates',
  'table' => 'product_templates',
  'module' => 'ProductTemplates',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
