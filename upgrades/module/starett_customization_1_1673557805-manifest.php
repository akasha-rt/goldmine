<?php
$manifest = array (
  'built_in_version' => '11.2.0',
  'acceptable_sugar_flavors' => array('PRO','ENT','ULT'),
  'acceptable_sugar_versions' => array(
      'exact_matches' => array(),
      'regex_matches' => array('(.*?)\\.(.*?)\\.(.*?)$'),
  ),
  'readme' => '',
  'key' => '',
  'author' => 'TI',
  'description' => '',
  'icon' => '',
  'type' => 'module',
  'is_uninstallable' => true,
  'name' => 'starett_customization',
  'published_date' => '2022-10-28 08:32:13',
  'version' => 1,
);

$installdefs = array (
    'id' => 'starett_customization',
    'copy' => array(
        0 => 
        array (
        'from' => '<basepath>/custom/clients/base/api/GetCompanyRelatedData.php',
        'to' => 'custom/clients/base/api/GetCompanyRelatedData.php',
        ),
        1 => 
        array (
        'from' => '<basepath>/custom/clients/base/api/GetProductOptions.php',
        'to' => 'custom/clients/base/api/GetProductOptions.php',
        ),
        2 => 
        array (
        'from' => '<basepath>/custom/clients/base/api/GetProductRealteToPortslUsersAndCategory.php',
        'to' => 'custom/clients/base/api/GetProductRealteToPortslUsersAndCategory.php',
        ),
        3 => 
        array (
        'from' => '<basepath>/custom/clients/base/api/GetQuotePDF.php',
        'to' => 'custom/clients/base/api/GetQuotePDF.php',
        ),
        4 => 
        array (
        'from' => '<basepath>/custom/clients/base/api/GetQuoteRelatedData.php',
        'to' => 'custom/clients/base/api/GetQuoteRelatedData.php',
        ),
        5 => 
        array (
        'from' => '<basepath>/custom/clients/base/api/SaveProductsAndAccessories.php',
        'to' => 'custom/clients/base/api/SaveProductsAndAccessories.php',
        ),
        6 => 
        array (
        'from' => '<basepath>/custom/clients/base/api/SaveProductsAndAccessoriesAsRevision.php',
        'to' => 'custom/clients/base/api/SaveProductsAndAccessoriesAsRevision.php',
        ),
        7 => 
        array (
        'from' => '<basepath>/custom/clients/base/api/PortalTeamUserAPI.php',
        'to' => 'custom/clients/base/api/PortalTeamUserAPI.php',
        ),
        8 => 
        array (
        'from' => '<basepath>/custom/clients/base/api/GetCompanyRelatedProductsAccessoriesData.php',
        'to' => 'custom/clients/base/api/GetCompanyRelatedProductsAccessoriesData.php',
        ),
        9 => 
        array (
        'from' => '<basepath>/custom/clients/base/api/CustomPortalProductsApi.php',
        'to' => 'custom/clients/base/api/CustomPortalProductsApi.php',
        ),
        10 => 
        array (
        'from' => '<basepath>/custom/clients/base/api/CustomCurrentUserApi.php',
        'to' => 'custom/clients/base/api/CustomCurrentUserApi.php',
        ),
        11 => 
        array (
        'from' => '<basepath>/custom/clients/base/api/GetCategoryRelatedProducts.php',
        'to' => 'custom/clients/base/api/GetCategoryRelatedProducts.php',
        ),
        12 => 
        array (
        'from' => '<basepath>/custom/clients/base/fields/option/tba/button-selected.hbs',
        'to' => 'custom/clients/base/fields/option/tba/button-selected.hbs',
        ),
        13 => 
        array (
        'from' => '<basepath>/custom/clients/base/fields/option/tba/label-selected.hbs',
        'to' => 'custom/clients/base/fields/option/tba/label-selected.hbs',
        ),
        14 => 
        array (
        'from' => '<basepath>/custom/clients/base/fields/option/detail.hbs',
        'to' => 'custom/clients/base/fields/option/detail.hbs',
        ),
        15 => 
        array (
        'from' => '<basepath>/custom/clients/base/fields/option/edit.hbs',
        'to' => 'custom/clients/base/fields/option/edit.hbs',
        ),
        16 => 
        array (
        'from' => '<basepath>/custom/clients/base/fields/option/list.hbs',
        'to' => 'custom/clients/base/fields/option/list.hbs',
        ),
        17 => 
        array (
        'from' => '<basepath>/custom/clients/base/fields/option/option.hbs',
        'to' => 'custom/clients/base/fields/option/option.hbs',
        ),
        18 => 
        array (
        'from' => '<basepath>/custom/clients/base/fields/option/option.js',
        'to' => 'custom/clients/base/fields/option/option.js',
        ),
        19 => 
        array (
        'from' => '<basepath>/custom/modules/Products/customLogicHook.php',
        'to' => 'custom/modules/Products/customLogicHook.php',
        ),
        20 => 
        array (
        'from' => '<basepath>/custom/modules/Quotes/clients/base/views/create/create.js',
        'to' => 'custom/modules/Quotes/clients/base/views/create/create.js',
        ),
        21 => 
        array (
        'from' => '<basepath>/custom/modules/Quotes/clients/base/views/product_related_options/product_related_options.js',
        'to' => 'custom/modules/Quotes/clients/base/views/product_related_options/product_related_options.js',
        ),
        22 => 
        array (
        'from' => '<basepath>/custom/modules/Quotes/clients/base/views/product_related_options/product_related_options.hbs',
        'to' => 'custom/modules/Quotes/clients/base/views/product_related_options/product_related_options.hbs',
        ),
        23 => 
        array (
        'from' => '<basepath>/custom/modules/ProductTemplates/clients/base/views/record/record.js',
        'to' => 'custom/modules/ProductTemplates/clients/base/views/record/record.js',
        ),
        24 => 
        array (
        'from' => '<basepath>/custom/clients/base/api/GetQuotePDFtoo.php',
        'to' => 'custom/clients/base/api/GetQuotePDFtoo.php',
        ),
        25 => 
        array (
        'from' => '<basepath>/custom/modules/Products/clients/base/views/quote-data-group-list/quote-data-group-list.php',
        'to' => 'custom/modules/Products/clients/base/views/quote-data-group-list/quote-data-group-list.php',
        ),
        26 => 
        array (
        'from' => '<basepath>/custom/modules/Products/clients/base/views/quote-data-group-list/row.hbs',
        'to' => 'custom/modules/Products/clients/base/views/quote-data-group-list/row.hbs',
        ),
        27 => 
        array (
            'from' => '<basepath>/custom/clients/base/api/UpdateQuoteData.php',
            'to' => 'custom/clients/base/api/UpdateQuoteData.php',
        ),
        28 => 
        array (
            'from' => '<basepath>/custom/Extension/modules/ProductTemplates/Ext/Language/en_us.freight_insurance.php',
            'to' => 'custom/Extension/modules/ProductTemplates/Ext/Language/en_us.freight_insurance.php',
        ),
        29 => 
        array (
            'from' => '<basepath>/custom/Extension/modules/ProductTemplates/Ext/Language/en_us.shipping_cost.php',
            'to' => 'custom/Extension/modules/ProductTemplates/Ext/Language/en_us.shipping_cost.php',
        ),
        30 => 
        array (
            'from' => '<basepath>/custom/Extension/modules/ProductTemplates/Ext/Vardefs/updated_freight_insurance.php',
            'to' => 'custom/Extension/modules/ProductTemplates/Ext/Vardefs/updated_freight_insurance.php',
        ),
        31 => 
        array (
            'from' => '<basepath>/custom/Extension/modules/ProductTemplates/Ext/Vardefs/updated_shippiing_cost.php',
            'to' => 'custom/Extension/modules/ProductTemplates/Ext/Vardefs/updated_shippiing_cost.php',
        ),
        32 => 
        array (
            'from' => '<basepath>/custom/Extension/modules/Quotes/Ext/Vardefs/sugarfield_saved_by_portal_user.php',
            'to' => 'custom/Extension/modules/Quotes/Ext/Vardefs/sugarfield_saved_by_portal_user.php',
        ),
        33 => 
        array (
            'from' => '<basepath>/custom/Extension/modules/Quotes/Ext/Language/en_us.saved_by_portal_user.php',
            'to' => 'custom/Extension/modules/Quotes/Ext/Language/en_us.saved_by_portal_user.php',
        ),

    ),
    'hookdefs' => array(
        	array(
        		'from' => '<basepath>/LogicHooks/product_logic_hook_defintion.php',
        		'to_module' => 'Products',
        	)
        ),
);