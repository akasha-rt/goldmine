<?php
$module_name = 'sf_webActivity';
$viewdefs[$module_name] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'record' => 
      array (
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'panel_header',
            'label' => 'LBL_RECORD_HEADER',
            'header' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'picture',
                'type' => 'avatar',
                'width' => 32,
                'height' => 32,
				'size' => 'small',
                'dismiss_label' => true,
                'readonly' => true,
              ),
              1 => 'name',
              2 => 
              array (
                'name' => 'favorite',
                'label' => 'LBL_FAVORITE',
                'type' => 'favorite',
                'readonly' => true,
                'dismiss_label' => true,
              ),
              3 => 
              array (
                'name' => 'follow',
                'label' => 'LBL_FOLLOW',
                'type' => 'follow',
                'readonly' => true,
                'dismiss_label' => true,
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'panel_body',
            'label' => 'LBL_RECORD_BODY',
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'fields' => 
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
              2 => 
              array (
                'name' => 'isp',
                'label' => 'LBL_ISP',
              ),
              3 => 
              array (
                'name' => 'duration',
                'label' => 'LBL_DURATION',
              ),
              4 => 
              array (
                'name' => 'clientip',
                'label' => 'LBL_CLIENTIP',
              ),
              5 => 
              array (
                'name' => 'city',
                'label' => 'LBL_CITY',
              ),
              6 => 
              array (
                'name' => 'clienthostname',
                'label' => 'LBL_CLIENTHOSTNAME',
              ),
              7 => 
              array (
                'name' => 'areacode',
                'label' => 'LBL_AREACODE',
              ),
              8 => 
              array (
                'name' => 'startdate',
                'label' => 'LBL_STARTDATE',
              ),
              9 => 
              array (
                'name' => 'countryname',
                'label' => 'LBL_COUNTRYNAME',
              ),
              10 => 
              array (
                'name' => 'enddate',
                'label' => 'LBL_ENDDATE',
              ),
              11 => 
              array (
                'name' => 'countrycode',
                'label' => 'LBL_COUNTRYCODE',
              ),
              12 => 
              array (
                'name' => 'timezone',
                'label' => 'LBL_TIMEZONE',
              ),
              13 => 
              array (
                'name' => 'dma_code',
                'label' => 'LBL_DMA_CODE',
              ),
              14 => 
              array (
                'name' => 'browserlanguage',
                'label' => 'LBL_BROWSERLANGUAGE',
              ),
              15 => 
              array (
                'name' => 'postalcode',
                'label' => 'LBL_POSTALCODE',
              ),
              16 => 
              array (
                'name' => 'pixeldepth',
                'label' => 'LBL_PIXELDEPTH',
              ),
              17 => 
              array (
                'name' => 'resolution',
                'label' => 'LBL_RESOLUTION',
              ),
              18 => 
              array (
                'name' => 'colordepth',
                'label' => 'LBL_COLORDEPTH',
              ),
              19 => 
              array (
                'name' => 'javaenabled',
                'label' => 'LBL_JAVAENABLED',
              ),
              20 => 
              array (
                'name' => 'operatingsystem',
                'label' => 'LBL_OPERATINGSYSTEM',
                'span' => 6,
              ),
              21 => 
              array (
                'span' => 6,
              ),
              22 => 
              array (
                'name' => 'longitude',
                'label' => 'LBL_LONGITUDE',
              ),
              23 => 
              array (
                'name' => 'lattitude',
                'label' => 'LBL_LATITUDE',
              ),
              24 => 
              array (
                'name' => 'sf_webactivity_accounts_name',
              ),
              25 => 
              array (
                'name' => 'sf_webactivity_leads_name',
              ),
              26 => 
              array (
                'name' => 'sf_webactivity_contacts_name',
                'span' => 12,
              ),
            ),
          ),
        ),
        'templateMeta' => 
        array (
          'useTabs' => false,
          'tabDefs' => 
          array (
            'LBL_RECORD_BODY' => 
            array (
              'newTab' => false,
              'panelDefault' => 'expanded',
            ),
          ),
        ),
      ),
    ),
  ),
);
