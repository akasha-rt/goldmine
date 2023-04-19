<?php
// created: 2021-03-26 18:52:01
$dictionary["CC_Coupon_Codes"]["fields"]["cc_coupon_codes_contacts"] = array (
  'name' => 'cc_coupon_codes_contacts',
  'type' => 'link',
  'relationship' => 'cc_coupon_codes_contacts',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'side' => 'right',
  'vname' => 'LBL_CC_COUPON_CODES_CONTACTS_FROM_CC_COUPON_CODES_TITLE',
  'id_name' => 'cc_coupon_codes_contactscontacts_ida',
  'link-type' => 'one',
);
$dictionary["CC_Coupon_Codes"]["fields"]["cc_coupon_codes_contacts_name"] = array (
  'name' => 'cc_coupon_codes_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CC_COUPON_CODES_CONTACTS_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'cc_coupon_codes_contactscontacts_ida',
  'link' => 'cc_coupon_codes_contacts',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'full_name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["CC_Coupon_Codes"]["fields"]["cc_coupon_codes_contactscontacts_ida"] = array (
  'name' => 'cc_coupon_codes_contactscontacts_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CC_COUPON_CODES_CONTACTS_FROM_CC_COUPON_CODES_TITLE_ID',
  'id_name' => 'cc_coupon_codes_contactscontacts_ida',
  'link' => 'cc_coupon_codes_contacts',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
