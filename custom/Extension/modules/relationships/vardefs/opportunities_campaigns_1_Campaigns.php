<?php
// created: 2023-01-27 20:36:23
$dictionary["Campaign"]["fields"]["opportunities_campaigns_1"] = array (
  'name' => 'opportunities_campaigns_1',
  'type' => 'link',
  'relationship' => 'opportunities_campaigns_1',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'side' => 'right',
  'vname' => 'LBL_OPPORTUNITIES_CAMPAIGNS_1_FROM_CAMPAIGNS_TITLE',
  'id_name' => 'opportunities_campaigns_1opportunities_ida',
  'link-type' => 'one',
);
$dictionary["Campaign"]["fields"]["opportunities_campaigns_1_name"] = array (
  'name' => 'opportunities_campaigns_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_CAMPAIGNS_1_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'opportunities_campaigns_1opportunities_ida',
  'link' => 'opportunities_campaigns_1',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["Campaign"]["fields"]["opportunities_campaigns_1opportunities_ida"] = array (
  'name' => 'opportunities_campaigns_1opportunities_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_CAMPAIGNS_1_FROM_CAMPAIGNS_TITLE_ID',
  'id_name' => 'opportunities_campaigns_1opportunities_ida',
  'link' => 'opportunities_campaigns_1',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
