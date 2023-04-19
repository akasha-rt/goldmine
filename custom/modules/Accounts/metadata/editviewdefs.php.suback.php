<?php
// created: 2014-03-14 22:08:16
$viewdefs['Accounts']['EditView'] = array (
  'templateMeta' => 
  array (
    'form' => 
    array (
      'buttons' => 
      array (
        0 => 'SAVE',
        1 => 'CANCEL',
      ),
    ),
    'maxColumns' => '2',
    'useTabs' => false,
    'widths' => 
    array (
      0 => 
      array (
        'label' => '10',
        'field' => '30',
      ),
      1 => 
      array (
        'label' => '10',
        'field' => '30',
      ),
    ),
    'includes' => 
    array (
      0 => 
      array (
        'file' => 'modules/Accounts/Account.js',
      ),
    ),
    'tabDefs' => 
    array (
      'LBL_ACCOUNT_INFORMATION' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
      'LBL_ADDRESS_INFORMATION' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
      'LBL_EMAIL_ADDRESSES' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
      'LBL_DESCRIPTION_INFORMATION' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
    ),
  ),
  'panels' => 
  array (
    'lbl_account_information' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'name',
          'displayParams' => 
          array (
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'phone_office',
          'customCode' => '<input id="phone_office" onBlur="fmt(this.value, this.id)" name="phone_office" size="30" maxlength="25" type="text" title="{$fields.phone_office.value}" value="{$fields.phone_office.value}">',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'website',
          'type' => 'link',
        ),
        1 => 
        array (
          'name' => 'phone_fax',
          'customCode' => '<input id="phone_fax" onBlur="fmt(this.value, this.id)" name="phone_fax" size="30" maxlength="25" type="text" title="{$fields.phone_fax.value}" value="{$fields.phone_fax.value}">',
        ),
      ),
      2 => 
      array (
        0 => 'ticker_symbol',
        1 => 
        array (
          'name' => 'phone_alternate',
          'customCode' => '<input id="phone_alternate" onBlur="fmt(this.value, this.id)" name="phone_alternate" size="30" maxlength="25" type="text" title="{$fields.phone_alternate.value}" value="{$fields.phone_alternate.value}">',
        ),
      ),
      3 => 
      array (
        0 => 'parent_name',
        1 => 'employees',
      ),
      4 => 
      array (
        0 => 'ownership',
        1 => 'rating',
      ),
      5 => 
      array (
        0 => 'industry',
        1 => 'sic_code',
      ),
      6 => 
      array (
        0 => 'account_type',
        1 => 'annual_revenue',
      ),
      7 => 
      array (
        0 => 'assigned_user_name',
        1 => 
        array (
          'name' => 'team_name',
          'displayParams' => 
          array (
            'display' => true,
          ),
        ),
      ),
    ),
    'lbl_address_information' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'billing_address_street',
          'hideLabel' => true,
          'type' => 'address',
          'displayParams' => 
          array (
            'key' => 'billing',
            'rows' => 2,
            'cols' => 30,
            'maxlength' => 150,
          ),
        ),
        1 => 
        array (
          'name' => 'shipping_address_street',
          'hideLabel' => true,
          'type' => 'address',
          'displayParams' => 
          array (
            'key' => 'shipping',
            'copy' => 'billing',
            'rows' => 2,
            'cols' => 30,
            'maxlength' => 150,
          ),
        ),
      ),
    ),
    'lbl_email_addresses' => 
    array (
      0 => 
      array (
        0 => 'email1',
      ),
    ),
    'lbl_description_information' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'description',
          'displayParams' => 
          array (
            'cols' => 80,
            'rows' => 6,
          ),
        ),
        1 => 'twitter_id',
      ),
    ),
  ),
);