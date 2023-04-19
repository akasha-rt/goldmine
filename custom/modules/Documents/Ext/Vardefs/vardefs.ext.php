<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Documents/Ext/Vardefs/som_specialorderquotes_documents_1_Documents.php

// created: 2019-06-18 16:22:02
$dictionary["Document"]["fields"]["som_specialorderquotes_documents_1"] = array (
  'name' => 'som_specialorderquotes_documents_1',
  'type' => 'link',
  'relationship' => 'som_specialorderquotes_documents_1',
  'source' => 'non-db',
  'module' => 'SOM_SpecialOrderQuotes',
  'bean_name' => 'SOM_SpecialOrderQuotes',
  'side' => 'right',
  'vname' => 'LBL_SOM_SPECIALORDERQUOTES_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
  'id_name' => 'som_specialorderquotes_documents_1som_specialorderquotes_ida',
  'link-type' => 'one',
);
$dictionary["Document"]["fields"]["som_specialorderquotes_documents_1_name"] = array (
  'name' => 'som_specialorderquotes_documents_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SOM_SPECIALORDERQUOTES_DOCUMENTS_1_FROM_SOM_SPECIALORDERQUOTES_TITLE',
  'save' => true,
  'id_name' => 'som_specialorderquotes_documents_1som_specialorderquotes_ida',
  'link' => 'som_specialorderquotes_documents_1',
  'table' => 'som_specialorderquotes',
  'module' => 'SOM_SpecialOrderQuotes',
  'rname' => 'name',
);
$dictionary["Document"]["fields"]["som_specialorderquotes_documents_1som_specialorderquotes_ida"] = array (
  'name' => 'som_specialorderquotes_documents_1som_specialorderquotes_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_SOM_SPECIALORDERQUOTES_DOCUMENTS_1_FROM_DOCUMENTS_TITLE_ID',
  'id_name' => 'som_specialorderquotes_documents_1som_specialorderquotes_ida',
  'link' => 'som_specialorderquotes_documents_1',
  'table' => 'som_specialorderquotes',
  'module' => 'SOM_SpecialOrderQuotes',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
<?php
// Merged from custom/Extension/modules/Documents/Ext/Vardefs/rli_link_workflow.php

$dictionary['Document']['fields']['revenuelineitems']['workflow'] = true;
?>
<?php
// Merged from custom/Extension/modules/Documents/Ext/Vardefs/tasks_documents_1_Documents.php

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

?>
<?php
// Merged from custom/Extension/modules/Documents/Ext/Vardefs/full_text_search_admin.php

 // created: 2022-05-25 15:54:16
$dictionary['Document']['full_text_search']=true;

?>
