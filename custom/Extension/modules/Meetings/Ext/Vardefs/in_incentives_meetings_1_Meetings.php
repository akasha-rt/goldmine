<?php
// created: 2021-03-30 18:34:29
$dictionary["Meeting"]["fields"]["in_incentives_meetings_1"] = array (
  'name' => 'in_incentives_meetings_1',
  'type' => 'link',
  'relationship' => 'in_incentives_meetings_1',
  'source' => 'non-db',
  'module' => 'IN_Incentives',
  'bean_name' => 'IN_Incentives',
  'side' => 'right',
  'vname' => 'LBL_IN_INCENTIVES_MEETINGS_1_FROM_MEETINGS_TITLE',
  'id_name' => 'in_incentives_meetings_1in_incentives_ida',
  'link-type' => 'one',
);
$dictionary["Meeting"]["fields"]["in_incentives_meetings_1_name"] = array (
  'name' => 'in_incentives_meetings_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_IN_INCENTIVES_MEETINGS_1_FROM_IN_INCENTIVES_TITLE',
  'save' => true,
  'id_name' => 'in_incentives_meetings_1in_incentives_ida',
  'link' => 'in_incentives_meetings_1',
  'table' => 'in_incentives',
  'module' => 'IN_Incentives',
  'rname' => 'name',
);
$dictionary["Meeting"]["fields"]["in_incentives_meetings_1in_incentives_ida"] = array (
  'name' => 'in_incentives_meetings_1in_incentives_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_IN_INCENTIVES_MEETINGS_1_FROM_MEETINGS_TITLE_ID',
  'id_name' => 'in_incentives_meetings_1in_incentives_ida',
  'link' => 'in_incentives_meetings_1',
  'table' => 'in_incentives',
  'module' => 'IN_Incentives',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
