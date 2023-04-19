<?php
// created: 2023-02-14 15:41:44
$dictionary["Opportunity"]["fields"]["campaigns_opportunities_1"] = array (
  'name' => 'campaigns_opportunities_1',
  'type' => 'link',
  'relationship' => 'campaigns_opportunities_1',
  'source' => 'non-db',
  'module' => 'Campaigns',
  'bean_name' => 'Campaign',
  'vname' => 'LBL_CAMPAIGNS_OPPORTUNITIES_1_FROM_CAMPAIGNS_TITLE',
  'id_name' => 'campaigns_opportunities_1campaigns_ida',
);
$dictionary["Opportunity"]["fields"]["campaigns_opportunities_1_name"] = array (
  'name' => 'campaigns_opportunities_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CAMPAIGNS_OPPORTUNITIES_1_FROM_CAMPAIGNS_TITLE',
  'save' => true,
  'id_name' => 'campaigns_opportunities_1campaigns_ida',
  'link' => 'campaigns_opportunities_1',
  'table' => 'campaigns',
  'module' => 'Campaigns',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["campaigns_opportunities_1campaigns_ida"] = array (
  'name' => 'campaigns_opportunities_1campaigns_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CAMPAIGNS_OPPORTUNITIES_1_FROM_CAMPAIGNS_TITLE_ID',
  'id_name' => 'campaigns_opportunities_1campaigns_ida',
  'link' => 'campaigns_opportunities_1',
  'table' => 'campaigns',
  'module' => 'Campaigns',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
