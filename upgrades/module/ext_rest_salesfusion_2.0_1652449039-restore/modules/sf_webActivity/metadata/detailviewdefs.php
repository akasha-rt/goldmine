<?php
$module_name = 'sf_webActivity';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
      'maxColumns' => '2',
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
      'useTabs' => false,
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'organizationname',
            'label' => 'LBL_ORGANIZATIONNAME',
          ),
          1 => 
          array (
            'name' => 'emailaddress',
            'label' => 'LBL_EMAILADDRESS',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'isp',
            'label' => 'LBL_ISP',
          ),
          1 => 
          array (
            'name' => 'duration',
            'label' => 'LBL_DURATION',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'clientip',
            'label' => 'LBL_CLIENTIP',
          ),
          1 => 
          array (
            'name' => 'city',
            'label' => 'LBL_CITY',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'clienthostname',
            'label' => 'LBL_CLIENTHOSTNAME',
          ),
          1 => 
          array (
            'name' => 'areacode',
            'label' => 'LBL_AREACODE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'startdate',
            'label' => 'LBL_STARTDATE',
          ),
          1 => 
          array (
            'name' => 'countrycode',
            'label' => 'LBL_COUNTRYCODE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'enddate',
            'label' => 'LBL_ENDDATE',
          ),
          1 => 
          array (
            'name' => 'countryname',
            'label' => 'LBL_COUNTRYNAME',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'timezone',
            'label' => 'LBL_TIMEZONE',
          ),
          1 => 
          array (
            'name' => 'dma_code',
            'label' => 'LBL_DMA_CODE',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'browserlanguage',
            'label' => 'LBL_BROWSERLANGUAGE',
          ),
          1 => 
          array (
            'name' => 'postalcode',
            'label' => 'LBL_POSTALCODE',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'pixeldepth',
            'label' => 'LBL_PIXELDEPTH',
          ),
          1 => 
          array (
            'name' => 'resolution',
            'label' => 'LBL_RESOLUTION',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'colordepth',
            'label' => 'LBL_COLORDEPTH',
          ),
          1 => 
          array (
            'name' => 'javaenabled',
            'label' => 'LBL_JAVAENABLED',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'operatingsystem',
            'label' => 'LBL_OPERATINGSYSTEM',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'longitude',
            'label' => 'LBL_LONGITUDE',
          ),
          1 => 
          array (
            'name' => 'latitude',
            'label' => 'LBL_LATITUDE',
          ),
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'sf_webactivity_accounts_name',
          ),
          1 => 
          array (
            'name' => 'sf_webactivity_leads_name',
          ),
        ),
        13 => 
        array (
          0 => 
          array (
            'name' => 'sf_webactivity_contacts_name',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'useragent',
            'label' => 'LBL_USERAGENT',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'touchpoint',
            'label' => 'LBL_TOUCHPOINT',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'referrerkeywords',
            'studio' => 'visible',
            'label' => 'LBL_REFERRERKEYWORDS',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'referrerquery',
            'studio' => 'visible',
            'label' => 'LBL_REFERRERQUERY',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'referrerreferrer',
            'studio' => 'visible',
            'label' => 'LBL_REFERRERREFERRER',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'referrerdomain',
            'label' => 'LBL_REFERRERDOMAIN',
          ),
        ),
      ),
    ),
  ),
);
?>
