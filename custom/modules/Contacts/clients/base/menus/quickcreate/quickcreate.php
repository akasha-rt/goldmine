<?php
// created: 2022-12-15 14:28:48
$viewdefs['Contacts']['base']['menu']['quickcreate'] = array (
  'layout' => 'create',
  'label' => 'LNK_NEW_CONTACT',
  'visible' => true,
  'order' => 3,
  'icon' => 'sicon-plus',
  'related' => 
  array (
    0 => 
    array (
      'module' => 'Accounts',
      'link' => 'contacts',
    ),
    1 => 
    array (
      'module' => 'Opportunities',
      'link' => 'contacts',
    ),
  ),
);