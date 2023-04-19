<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Tasks/Ext/Vardefs/rli_link_workflow.php

$dictionary['Task']['fields']['revenuelineitems']['workflow'] = true;
?>
<?php
// Merged from custom/Extension/modules/Tasks/Ext/Vardefs/sugarfield_gm_accountno_c.php

 // created: 2021-03-21 21:50:21
$dictionary['Task']['fields']['gm_accountno_c']['labelValue']='GM Accountno';
$dictionary['Task']['fields']['gm_accountno_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Task']['fields']['gm_accountno_c']['enforced']='';
$dictionary['Task']['fields']['gm_accountno_c']['dependency']='';
$dictionary['Task']['fields']['gm_accountno_c']['required_formula']='';
$dictionary['Task']['fields']['gm_accountno_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Tasks/Ext/Vardefs/sugarfield_gmrecid_c.php

 // created: 2021-03-21 21:51:00
$dictionary['Task']['fields']['gmrecid_c']['labelValue']='GM RecID';
$dictionary['Task']['fields']['gmrecid_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Task']['fields']['gmrecid_c']['enforced']='';
$dictionary['Task']['fields']['gmrecid_c']['dependency']='';
$dictionary['Task']['fields']['gmrecid_c']['required_formula']='';
$dictionary['Task']['fields']['gmrecid_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Tasks/Ext/Vardefs/tasks_documents_1_Tasks.php

// created: 2021-06-30 14:23:01
$dictionary["Task"]["fields"]["tasks_documents_1"] = array (
  'name' => 'tasks_documents_1',
  'type' => 'link',
  'relationship' => 'tasks_documents_1',
  'source' => 'non-db',
  'module' => 'Documents',
  'bean_name' => 'Document',
  'vname' => 'LBL_TASKS_DOCUMENTS_1_FROM_TASKS_TITLE',
  'id_name' => 'tasks_documents_1tasks_ida',
  'link-type' => 'many',
  'side' => 'left',
);

?>
<?php
// Merged from custom/Extension/modules/Tasks/Ext/Vardefs/full_text_search_admin.php

 // created: 2022-05-25 15:54:16
$dictionary['Task']['full_text_search']=false;

?>
