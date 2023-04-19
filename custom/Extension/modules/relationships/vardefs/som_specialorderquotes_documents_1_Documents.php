<?php
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
