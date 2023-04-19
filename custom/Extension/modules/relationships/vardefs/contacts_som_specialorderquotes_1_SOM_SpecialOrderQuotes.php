<?php
// created: 2019-07-29 16:24:19
$dictionary["SOM_SpecialOrderQuotes"]["fields"]["contacts_som_specialorderquotes_1"] = array (
  'name' => 'contacts_som_specialorderquotes_1',
  'type' => 'link',
  'relationship' => 'contacts_som_specialorderquotes_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'side' => 'right',
  'vname' => 'LBL_CONTACTS_SOM_SPECIALORDERQUOTES_1_FROM_SOM_SPECIALORDERQUOTES_TITLE',
  'id_name' => 'contacts_som_specialorderquotes_1contacts_ida',
  'link-type' => 'one',
);
$dictionary["SOM_SpecialOrderQuotes"]["fields"]["contacts_som_specialorderquotes_1_name"] = array (
  'name' => 'contacts_som_specialorderquotes_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_SOM_SPECIALORDERQUOTES_1_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'contacts_som_specialorderquotes_1contacts_ida',
  'link' => 'contacts_som_specialorderquotes_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'full_name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["SOM_SpecialOrderQuotes"]["fields"]["contacts_som_specialorderquotes_1contacts_ida"] = array (
  'name' => 'contacts_som_specialorderquotes_1contacts_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_SOM_SPECIALORDERQUOTES_1_FROM_SOM_SPECIALORDERQUOTES_TITLE_ID',
  'id_name' => 'contacts_som_specialorderquotes_1contacts_ida',
  'link' => 'contacts_som_specialorderquotes_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
