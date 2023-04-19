<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
$manifest = array (
  'id' => 'hint-package',
  'key' => 'hint-package',
  'name' => 'SugarCRM Hint',
  'description' => 'Hint is an add on product from SugarCRM and requires a license. Please contact your SugarCRM account manager or partner to purchase Hint. Hint is a data enrichment add on that provides sales people with enriched data about their leads and contacts.',
  'version' => '5.4.3',
  'author' => 'SugarCRM, Inc.',
  'is_uninstallable' => 'true',
  'uninstall_before_upgrade' => true,
  'remove_tables' => 'false',
  'icon' => '',
  'readme' => '',
  'published_date' => '2021-12-08 18:56:51',
  'type' => 'module',
  'acceptable_sugar_versions' => 
  array (
    'exact_matches' => 
    array (
    ),
    'regex_matches' => 
    array (
      0 => '^9\\.([0-9]+)\\.([0-9]+)',
      1 => '^10\\.([0-9]+)\\.([0-9]+)',
      2 => '^11\\.([0-9]+)\\.([0-9]+)',
    ),
  ),
);
$installdefs = array (
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/src/custom',
      'to' => 'custom',
    ),
    1 => 
    array (
      'from' => '<basepath>/src/modules',
      'to' => 'modules',
    ),
  ),
  'custom_fields' => 
  array (
    0 => 
    array (
      'module' => 'Accounts',
      'name' => 'hint_account_size_c',
      'vname' => 'LBL_HINT_COMPANY_SIZE',
      'label' => 'LBL_HINT_COMPANY_SIZE',
      'type' => 'varchar',
      'len' => 20,
      'comment' => 'Company Size',
    ),
    1 => 
    array (
      'module' => 'Accounts',
      'name' => 'hint_account_industry_c',
      'vname' => 'LBL_HINT_COMPANY_INDUSTRY',
      'label' => 'LBL_HINT_COMPANY_INDUSTRY',
      'type' => 'varchar',
      'len' => 120,
      'comment' => 'Company Industry',
    ),
    2 => 
    array (
      'module' => 'Accounts',
      'name' => 'hint_account_location_c',
      'vname' => 'LBL_HINT_COMPANY_LOCATION',
      'label' => 'LBL_HINT_COMPANY_LOCATION',
      'type' => 'varchar',
      'len' => 120,
      'comment' => 'Company Location',
    ),
    3 => 
    array (
      'module' => 'Accounts',
      'name' => 'hint_account_industry_tags_c',
      'vname' => 'LBL_HINT_COMPANY_INDUSTRY_TAGS',
      'label' => 'LBL_HINT_COMPANY_INDUSTRY_TAGS',
      'type' => 'varchar',
      'len' => 225,
      'comment' => 'industry tags',
    ),
    4 => 
    array (
      'module' => 'Accounts',
      'name' => 'hint_account_founded_year_c',
      'vname' => 'LBL_HINT_COMPANY_FOUNDED_YEAR',
      'label' => 'LBL_HINT_COMPANY_FOUNDED_YEAR',
      'type' => 'varchar',
      'len' => 5,
      'comment' => 'company founded year',
    ),
    5 => 
    array (
      'module' => 'Accounts',
      'name' => 'hint_account_facebook_handle_c',
      'vname' => 'LBL_HINT_COMPANY_FACEBOOK',
      'label' => 'LBL_HINT_COMPANY_FACEBOOK',
      'type' => 'url',
      'len' => 120,
      'comment' => 'company facebook',
    ),
    6 => 
    array (
      'module' => 'Accounts',
      'name' => 'hint_account_logo_c',
      'vname' => 'LBL_HINT_COMPANY_LOGO',
      'label' => 'LBL_HINT_COMPANY_LOGO',
      'type' => 'varchar',
      'len' => 255,
      'comment' => 'company logo',
    ),
    7 => 
    array (
      'module' => 'Accounts',
      'name' => 'hint_account_pic_c',
      'vname' => 'LBL_HINT_COMPANY_PIC',
      'label' => 'LBL_HINT_COMPANY_PIC',
      'type' => 'text',
      'comment' => 'Hint Account logo',
    ),
    8 => 
    array (
      'module' => 'Accounts',
      'name' => 'hint_account_naics_code_lbl_c',
      'vname' => 'LBL_HINT_COMPANY_NAICS_CODE_LABEL',
      'label' => 'LBL_HINT_COMPANY_NAICS_CODE_LABEL',
      'type' => 'varchar',
      'len' => 170,
      'comment' => 'NAICS Code',
    ),
    9 => 
    array (
      'module' => 'Accounts',
      'name' => 'hint_account_fiscal_year_end_c',
      'vname' => 'LBL_HINT_COMPANY_FISCAL_YEAR_END',
      'label' => 'LBL_HINT_COMPANY_FISCAL_YEAR_END',
      'type' => 'varchar',
      'len' => 5,
      'comment' => 'FY End',
    ),
    10 => 
    array (
      'module' => 'Leads',
      'name' => 'hint_account_size_c',
      'vname' => 'LBL_HINT_COMPANY_SIZE',
      'label' => 'LBL_HINT_COMPANY_SIZE',
      'type' => 'varchar',
      'len' => 20,
      'comment' => 'Company Size',
    ),
    11 => 
    array (
      'module' => 'Leads',
      'name' => 'hint_account_industry_c',
      'vname' => 'LBL_HINT_COMPANY_INDUSTRY',
      'label' => 'LBL_HINT_COMPANY_INDUSTRY',
      'type' => 'varchar',
      'len' => 120,
      'comment' => 'Company Industry',
    ),
    12 => 
    array (
      'module' => 'Leads',
      'name' => 'hint_account_location_c',
      'vname' => 'LBL_HINT_COMPANY_LOCATION',
      'label' => 'LBL_HINT_COMPANY_LOCATION',
      'type' => 'varchar',
      'len' => 255,
      'comment' => 'Company Location',
    ),
    13 => 
    array (
      'module' => 'Leads',
      'name' => 'hint_account_description_c',
      'vname' => 'LBL_HINT_COMPANY_DESCRIPTION',
      'label' => 'LBL_HINT_COMPANY_DESCRIPTION',
      'type' => 'varchar',
      'len' => 255,
      'comment' => 'Company Description',
    ),
    14 => 
    array (
      'module' => 'Leads',
      'name' => 'hint_job_2_c',
      'vname' => 'LBL_HINT_JOB_2',
      'label' => 'LBL_HINT_JOB_2',
      'type' => 'varchar',
      'len' => 255,
      'comment' => 'Job 2',
      'pii' => true,
    ),
    15 => 
    array (
      'module' => 'Leads',
      'name' => 'hint_education_c',
      'vname' => 'LBL_HINT_EDUCATION',
      'label' => 'LBL_HINT_EDUCATION',
      'type' => 'varchar',
      'len' => 225,
      'comment' => 'Education',
      'pii' => true,
    ),
    16 => 
    array (
      'module' => 'Leads',
      'name' => 'hint_education_2_c',
      'vname' => 'LBL_HINT_EDUCATION_2',
      'label' => 'LBL_HINT_EDUCATION_2',
      'type' => 'varchar',
      'len' => 225,
      'comment' => 'Education 2',
      'pii' => true,
    ),
    17 => 
    array (
      'module' => 'Leads',
      'name' => 'hint_facebook_c',
      'type' => 'url',
      'vname' => 'LBL_HINT_FACEBOOK',
      'label' => 'LBL_HINT_FACEBOOK',
      'len' => 120,
      'pii' => true,
    ),
    18 => 
    array (
      'module' => 'Leads',
      'name' => 'hint_twitter_c',
      'vname' => 'LBL_HINT_TWITTER',
      'label' => 'LBL_HINT_TWITTER',
      'type' => 'url',
      'len' => 120,
      'pii' => true,
    ),
    19 => 
    array (
      'module' => 'Leads',
      'name' => 'hint_industry_tags_c',
      'vname' => 'LBL_HINT_COMPANY_INDUSTRY_TAGS',
      'label' => 'LBL_HINT_COMPANY_INDUSTRY_TAGS',
      'type' => 'varchar',
      'len' => 225,
      'comment' => 'industry tags',
    ),
    20 => 
    array (
      'module' => 'Leads',
      'name' => 'hint_account_founded_year_c',
      'vname' => 'LBL_HINT_COMPANY_FOUNDED_YEAR',
      'label' => 'LBL_HINT_COMPANY_FOUNDED_YEAR',
      'type' => 'varchar',
      'len' => 5,
      'comment' => 'company founded year',
    ),
    21 => 
    array (
      'module' => 'Leads',
      'name' => 'hint_account_facebook_handle_c',
      'vname' => 'LBL_HINT_COMPANY_FACEBOOK',
      'label' => 'LBL_HINT_COMPANY_FACEBOOK',
      'type' => 'url',
      'len' => 120,
      'comment' => 'company facebook',
    ),
    22 => 
    array (
      'module' => 'Leads',
      'name' => 'hint_account_twitter_handle_c',
      'vname' => 'LBL_HINT_COMPANY_TWITTER',
      'label' => 'LBL_HINT_COMPANY_TWITTER',
      'type' => 'url',
      'len' => 120,
      'comment' => 'company twitter',
    ),
    23 => 
    array (
      'module' => 'Leads',
      'name' => 'hint_account_logo_c',
      'vname' => 'LBL_HINT_COMPANY_LOGO',
      'label' => 'LBL_HINT_COMPANY_LOGO',
      'type' => 'varchar',
      'len' => 255,
      'comment' => 'company logo',
    ),
    24 => 
    array (
      'module' => 'Leads',
      'name' => 'hint_contact_pic_c',
      'vname' => 'LBL_HINT_CONTACT_PIC',
      'label' => 'LBL_HINT_CONTACT_PIC',
      'type' => 'text',
      'comment' => 'Hint Contact logo',
    ),
    25 => 
    array (
      'module' => 'Leads',
      'name' => 'hint_photo_c',
      'vname' => 'LBL_HINT_PHOTO',
      'label' => 'LBL_HINT_PHOTO',
      'type' => 'varchar',
      'len' => 255,
      'comment' => 'person photo',
    ),
    26 => 
    array (
      'module' => 'Leads',
      'name' => 'hint_phone_1_c',
      'vname' => 'LBL_HINT_PHONE_1',
      'label' => 'LBL_HINT_PHONE_1',
      'type' => 'varchar',
      'len' => 15,
      'comment' => 'extra phone field',
      'pii' => true,
    ),
    27 => 
    array (
      'module' => 'Leads',
      'name' => 'hint_phone_2_c',
      'vname' => 'LBL_HINT_PHONE_2',
      'label' => 'LBL_HINT_PHONE_2',
      'type' => 'varchar',
      'len' => 15,
      'comment' => 'extra phone field',
      'pii' => true,
    ),
    28 => 
    array (
      'module' => 'Leads',
      'name' => 'hint_account_naics_code_lbl_c',
      'vname' => 'LBL_HINT_COMPANY_NAICS_CODE_LABEL',
      'label' => 'LBL_HINT_COMPANY_NAICS_CODE_LABEL',
      'type' => 'varchar',
      'len' => 170,
      'comment' => 'NAICS Code',
    ),
    29 => 
    array (
      'module' => 'Leads',
      'name' => 'hint_account_sic_code_label_c',
      'vname' => 'LBL_HINT_COMPANY_SIC_CODE_LABEL',
      'label' => 'LBL_HINT_COMPANY_SIC_CODE_LABEL',
      'type' => 'varchar',
      'len' => 120,
      'comment' => 'SIC Code',
    ),
    30 => 
    array (
      'module' => 'Leads',
      'name' => 'hint_account_fiscal_year_end_c',
      'vname' => 'LBL_HINT_COMPANY_FISCAL_YEAR_END',
      'label' => 'LBL_HINT_COMPANY_FISCAL_YEAR_END',
      'type' => 'varchar',
      'len' => 5,
      'comment' => 'FY End',
    ),
    31 => 
    array (
      'module' => 'Leads',
      'name' => 'hint_account_annual_revenue_c',
      'vname' => 'LBL_HINT_COMPANY_ANNUAL_REVENUE',
      'label' => 'LBL_HINT_COMPANY_ANNUAL_REVENUE',
      'type' => 'varchar',
      'len' => 25,
      'comment' => 'Annual Rev',
    ),
    32 => 
    array (
      'module' => 'Leads',
      'name' => 'hint_account_website_c',
      'vname' => 'LBL_HINT_COMPANY_WEBSITE',
      'label' => 'LBL_HINT_COMPANY_WEBSITE',
      'type' => 'url',
      'len' => 255,
      'comment' => 'company website',
    ),
    33 => 
    array (
      'module' => 'Contacts',
      'name' => 'hint_account_size_c',
      'vname' => 'LBL_HINT_COMPANY_SIZE',
      'label' => 'LBL_HINT_COMPANY_SIZE',
      'type' => 'varchar',
      'len' => 20,
      'comment' => 'Company Size',
    ),
    34 => 
    array (
      'module' => 'Contacts',
      'name' => 'hint_account_industry_c',
      'vname' => 'LBL_HINT_COMPANY_INDUSTRY',
      'label' => 'LBL_HINT_COMPANY_INDUSTRY',
      'type' => 'varchar',
      'len' => 120,
      'comment' => 'Company Industry',
    ),
    35 => 
    array (
      'module' => 'Contacts',
      'name' => 'hint_account_location_c',
      'vname' => 'LBL_HINT_COMPANY_LOCATION',
      'label' => 'LBL_HINT_COMPANY_LOCATION',
      'type' => 'varchar',
      'len' => 255,
      'comment' => 'Company Location',
    ),
    36 => 
    array (
      'module' => 'Contacts',
      'name' => 'hint_account_description_c',
      'vname' => 'LBL_HINT_COMPANY_DESCRIPTION',
      'label' => 'LBL_HINT_COMPANY_DESCRIPTION',
      'type' => 'varchar',
      'len' => 255,
      'comment' => 'Company Description',
    ),
    37 => 
    array (
      'module' => 'Contacts',
      'name' => 'hint_job_2_c',
      'vname' => 'LBL_HINT_JOB_2',
      'label' => 'LBL_HINT_JOB_2',
      'type' => 'varchar',
      'len' => 255,
      'comment' => 'Job 2',
      'pii' => true,
    ),
    38 => 
    array (
      'module' => 'Contacts',
      'name' => 'hint_education_c',
      'vname' => 'LBL_HINT_EDUCATION',
      'label' => 'LBL_HINT_EDUCATION',
      'type' => 'varchar',
      'len' => 225,
      'comment' => 'Education',
      'pii' => true,
    ),
    39 => 
    array (
      'module' => 'Contacts',
      'name' => 'hint_education_2_c',
      'vname' => 'LBL_HINT_EDUCATION_2',
      'label' => 'LBL_HINT_EDUCATION_2',
      'type' => 'varchar',
      'len' => 225,
      'comment' => 'Education 2',
      'pii' => true,
    ),
    40 => 
    array (
      'module' => 'Contacts',
      'name' => 'hint_facebook_c',
      'vname' => 'LBL_HINT_FACEBOOK',
      'label' => 'LBL_HINT_FACEBOOK',
      'type' => 'url',
      'len' => 120,
      'pii' => true,
    ),
    41 => 
    array (
      'module' => 'Contacts',
      'name' => 'hint_twitter_c',
      'vname' => 'LBL_HINT_TWITTER',
      'label' => 'LBL_HINT_TWITTER',
      'type' => 'url',
      'len' => 120,
      'pii' => true,
    ),
    42 => 
    array (
      'module' => 'Contacts',
      'name' => 'hint_industry_tags_c',
      'vname' => 'LBL_HINT_COMPANY_INDUSTRY_TAGS',
      'label' => 'LBL_HINT_COMPANY_INDUSTRY_TAGS',
      'type' => 'varchar',
      'len' => 225,
      'comment' => 'industry tags',
    ),
    43 => 
    array (
      'module' => 'Contacts',
      'name' => 'hint_account_founded_year_c',
      'vname' => 'LBL_HINT_COMPANY_FOUNDED_YEAR',
      'label' => 'LBL_HINT_COMPANY_FOUNDED_YEAR',
      'type' => 'varchar',
      'len' => 5,
      'comment' => 'company founded year',
    ),
    44 => 
    array (
      'module' => 'Contacts',
      'name' => 'hint_account_facebook_handle_c',
      'vname' => 'LBL_HINT_COMPANY_FACEBOOK',
      'label' => 'LBL_HINT_COMPANY_FACEBOOK',
      'type' => 'url',
      'len' => 120,
      'comment' => 'company facebook',
    ),
    45 => 
    array (
      'module' => 'Contacts',
      'name' => 'hint_account_twitter_handle_c',
      'vname' => 'LBL_HINT_COMPANY_TWITTER',
      'label' => 'LBL_HINT_COMPANY_TWITTER',
      'type' => 'url',
      'len' => 120,
      'comment' => 'company twitter',
    ),
    46 => 
    array (
      'module' => 'Contacts',
      'name' => 'hint_account_logo_c',
      'vname' => 'LBL_HINT_COMPANY_LOGO',
      'label' => 'LBL_HINT_COMPANY_LOGO',
      'type' => 'varchar',
      'len' => 255,
      'comment' => 'company logo',
    ),
    47 => 
    array (
      'module' => 'Contacts',
      'name' => 'hint_contact_pic_c',
      'vname' => 'LBL_HINT_CONTACT_PIC',
      'label' => 'LBL_HINT_CONTACT_PIC',
      'type' => 'text',
      'comment' => 'Hint Contact logo',
    ),
    48 => 
    array (
      'module' => 'Contacts',
      'name' => 'hint_photo_c',
      'vname' => 'LBL_HINT_PHOTO',
      'label' => 'LBL_HINT_PHOTO',
      'type' => 'varchar',
      'len' => 255,
      'comment' => 'person photo',
    ),
    49 => 
    array (
      'module' => 'Contacts',
      'name' => 'hint_phone_1_c',
      'vname' => 'LBL_HINT_PHONE_1',
      'label' => 'LBL_HINT_PHONE_1',
      'type' => 'varchar',
      'len' => 15,
      'comment' => 'extra phone field',
      'pii' => true,
    ),
    50 => 
    array (
      'module' => 'Contacts',
      'name' => 'hint_phone_2_c',
      'vname' => 'LBL_HINT_PHONE_2',
      'label' => 'LBL_HINT_PHONE_2',
      'type' => 'varchar',
      'len' => 15,
      'comment' => 'extra phone field',
      'pii' => true,
    ),
    51 => 
    array (
      'module' => 'Contacts',
      'name' => 'hint_account_website_c',
      'vname' => 'LBL_HINT_COMPANY_WEBSITE',
      'label' => 'LBL_HINT_COMPANY_WEBSITE',
      'type' => 'url',
      'len' => 255,
      'comment' => 'company website',
    ),
    52 => 
    array (
      'module' => 'Contacts',
      'name' => 'hint_account_naics_code_lbl_c',
      'vname' => 'LBL_HINT_COMPANY_NAICS_CODE_LABEL',
      'label' => 'LBL_HINT_COMPANY_NAICS_CODE_LABEL',
      'type' => 'varchar',
      'len' => 170,
      'comment' => 'NAICS Code',
    ),
    53 => 
    array (
      'module' => 'Contacts',
      'name' => 'hint_account_sic_code_label_c',
      'vname' => 'LBL_HINT_COMPANY_SIC_CODE_LABEL',
      'label' => 'LBL_HINT_COMPANY_SIC_CODE_LABEL',
      'type' => 'varchar',
      'len' => 120,
      'comment' => 'SIC Code',
    ),
    54 => 
    array (
      'module' => 'Contacts',
      'name' => 'hint_account_fiscal_year_end_c',
      'vname' => 'LBL_HINT_COMPANY_FISCAL_YEAR_END',
      'label' => 'LBL_HINT_COMPANY_FISCAL_YEAR_END',
      'type' => 'varchar',
      'len' => 5,
      'comment' => 'FY End',
    ),
    55 => 
    array (
      'module' => 'Contacts',
      'name' => 'hint_account_annual_revenue_c',
      'vname' => 'LBL_HINT_COMPANY_ANNUAL_REVENUE',
      'label' => 'LBL_HINT_COMPANY_ANNUAL_REVENUE',
      'type' => 'varchar',
      'len' => 25,
      'comment' => 'Annual Rev',
    ),
    56 => 
    array (
      'module' => 'Users',
      'name' => 'previously_licensed_c',
      'vname' => 'LBL_PREVIOUSLY_LICENSED',
      'label' => 'LBL_PREVIOUSLY_LICENSED',
      'type' => 'bool',
      'comment' => 'Previously Licensed',
    ),
  ),
  'pre_execute' => 
  array (
    0 => '<basepath>/hooks/pre_execute.php',
  ),
  'post_execute' => 
  array (
    0 => '<basepath>/hooks/post_execute.php',
  ),
  'pre_uninstall' => 
  array (
    0 => '<basepath>/hooks/pre_uninstall.php',
  ),
  'post_uninstall' => 
  array (
    0 => '<basepath>/hooks/post_uninstall.php',
  ),
  'id' => 'hint-package',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'HintAccountsets',
      'class' => 'HintAccountset',
      'path' => 'modules/HintAccountsets/HintAccountset.php',
      'tab' => false,
    ),
    1 => 
    array (
      'module' => 'HintNewsNotifications',
      'class' => 'HintNewsNotification',
      'path' => 'modules/HintNewsNotifications/HintNewsNotification.php',
      'tab' => false,
    ),
    2 => 
    array (
      'module' => 'HintNotificationTargets',
      'class' => 'HintNotificationTarget',
      'path' => 'modules/HintNotificationTargets/HintNotificationTarget.php',
      'tab' => false,
    ),
    3 => 
    array (
      'module' => 'HintEnrichFieldConfigs',
      'class' => 'HintEnrichFieldConfig',
      'path' => 'modules/HintEnrichFieldConfigs/HintEnrichFieldConfig.php',
      'tab' => false,
    ),
  ),
  'relationships' => 
  array (
    0 => 
    array (
      'meta_data' => '<basepath>/src/metadata/hint-packageMetaData.php',
    ),
  ),
);
