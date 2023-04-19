<?php
// created: 2021-03-30 18:32:40
$dictionary["Opportunity"]["fields"]["in_incentives_opportunities_1"] = array (
  'name' => 'in_incentives_opportunities_1',
  'type' => 'link',
  'relationship' => 'in_incentives_opportunities_1',
  'source' => 'non-db',
  'module' => 'IN_Incentives',
  'bean_name' => 'IN_Incentives',
  'side' => 'right',
  'vname' => 'LBL_IN_INCENTIVES_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'in_incentives_opportunities_1in_incentives_ida',
  'link-type' => 'one',
);
$dictionary["Opportunity"]["fields"]["in_incentives_opportunities_1_name"] = array (
  'name' => 'in_incentives_opportunities_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_IN_INCENTIVES_OPPORTUNITIES_1_FROM_IN_INCENTIVES_TITLE',
  'save' => true,
  'id_name' => 'in_incentives_opportunities_1in_incentives_ida',
  'link' => 'in_incentives_opportunities_1',
  'table' => 'in_incentives',
  'module' => 'IN_Incentives',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["in_incentives_opportunities_1in_incentives_ida"] = array (
  'name' => 'in_incentives_opportunities_1in_incentives_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_IN_INCENTIVES_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE_ID',
  'id_name' => 'in_incentives_opportunities_1in_incentives_ida',
  'link' => 'in_incentives_opportunities_1',
  'table' => 'in_incentives',
  'module' => 'IN_Incentives',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
