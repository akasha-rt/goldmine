<?php
// created: 2021-06-30 14:23:01
$dictionary["Document"]["fields"]["tasks_documents_1"] = array (
  'name' => 'tasks_documents_1',
  'type' => 'link',
  'relationship' => 'tasks_documents_1',
  'source' => 'non-db',
  'module' => 'Tasks',
  'bean_name' => 'Task',
  'side' => 'right',
  'vname' => 'LBL_TASKS_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
  'id_name' => 'tasks_documents_1tasks_ida',
  'link-type' => 'one',
);
$dictionary["Document"]["fields"]["tasks_documents_1_name"] = array (
  'name' => 'tasks_documents_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_TASKS_DOCUMENTS_1_FROM_TASKS_TITLE',
  'save' => true,
  'id_name' => 'tasks_documents_1tasks_ida',
  'link' => 'tasks_documents_1',
  'table' => 'tasks',
  'module' => 'Tasks',
  'rname' => 'name',
);
$dictionary["Document"]["fields"]["tasks_documents_1tasks_ida"] = array (
  'name' => 'tasks_documents_1tasks_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_TASKS_DOCUMENTS_1_FROM_DOCUMENTS_TITLE_ID',
  'id_name' => 'tasks_documents_1tasks_ida',
  'link' => 'tasks_documents_1',
  'table' => 'tasks',
  'module' => 'Tasks',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
