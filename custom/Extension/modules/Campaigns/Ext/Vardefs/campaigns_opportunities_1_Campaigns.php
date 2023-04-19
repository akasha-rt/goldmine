<?php
// created: 2023-02-14 15:41:44
$dictionary["Campaign"]["fields"]["campaigns_opportunities_1"] = array (
  'name' => 'campaigns_opportunities_1',
  'type' => 'link',
  'relationship' => 'campaigns_opportunities_1',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_CAMPAIGNS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'campaigns_opportunities_1opportunities_idb',
);
$dictionary["Campaign"]["fields"]["campaigns_opportunities_1_name"] = array (
  'name' => 'campaigns_opportunities_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CAMPAIGNS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'campaigns_opportunities_1opportunities_idb',
  'link' => 'campaigns_opportunities_1',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["Campaign"]["fields"]["campaigns_opportunities_1opportunities_idb"] = array (
  'name' => 'campaigns_opportunities_1opportunities_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CAMPAIGNS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE_ID',
  'id_name' => 'campaigns_opportunities_1opportunities_idb',
  'link' => 'campaigns_opportunities_1',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
