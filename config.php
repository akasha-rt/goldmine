<?php
$sugar_config = array (
  'GOOGLEAPIBWKEY' => 'AIzaSyAXubYMnt2_3gK8T9mqVRWZPoxpOwP8edE',
  'GOOGLEAPISRKEY' => 'AIzaSyAXubYMnt2_3gK8T9mqVRWZPoxpOwP8edE',
  'SAML_X509Cert' => '',
  'SAML_loginurl' => '',
  'activity_streams' => 
  array (
    'erasure_job_limit' => 5,
    'erasure_job_delay' => 0,
  ),
  'activity_streams_enabled' => true,
  'addAjaxBannedModules' => 
  array (
    0 => 'Meetings',
    1 => 'Calls',
    2 => 'Bugs',
    3 => 'Cases',
    4 => 'ProspectLists',
    5 => 'Prospects',
    6 => 'Notes',
    7 => 'Opportunities',
    8 => 'Leads',
    9 => 'Accounts',
    10 => 'Contacts',
    11 => 'Tasks',
    12 => 'Tasks',
  ),
  'additional_http_referer' => 
  array (
    0 => 'account-d.docusign.com',
    1 => 'account.docusign.com',
    2 => 'dropbox.com',
    3 => 'api.dropboxapi.com',
  ),
  'additional_js_config' => 
  array (
  ),
  'admin_access_control' => false,
  'admin_export_only' => false,
  'allow_freeze_first_column' => true,
  'allow_sendmail_outbound' => false,
  'allowed_link_schemes' => 
  array (
    0 => 'http',
    1 => 'https',
  ),
  'analytics' => 
  array (
    'enabled' => true,
    'connector' => 'Pendo',
    'id' => '1dd345e9-b638-4bd2-7bfb-147a937d4728',
  ),
  'analytics_portal' => 
  array (
    'enabled' => true,
    'connector' => 'Pendo',
    'id' => '1dd345e9-b638-4bd2-7bfb-147a937d4728',
  ),
  'authenticationClass' => '',
  'aws_connect' => 
  array (
    'allow_list_domains' => 
    array (
      0 => '*.amazonaws.com',
      1 => '*.static.connect.aws',
    ),
    'portal_allow_list_domains' => 
    array (
      0 => 'wss://*.amazonaws.com',
    ),
  ),
  'cache' => 
  array (
    'multi_tenant' => true,
  ),
  'cache_dir' => 'cache/',
  'calculate_response_time' => true,
  'calendar' => 
  array (
    'default_view' => 'week',
    'show_calls_by_default' => true,
    'show_tasks_by_default' => true,
    'editview_width' => 990,
    'editview_height' => 485,
    'day_timestep' => 15,
    'week_timestep' => 30,
    'items_draggable' => true,
    'items_resizable' => true,
    'enable_repeat' => true,
    'max_repeat_count' => 1000,
  ),
  'catalog_enabled' => false,
  'catalog_url' => 'https://appcatalog.service.sugarcrm.com',
  'chartEngine' => 'sucrose',
  'chart_service' => 
  array (
    'max_retries' => 3,
    'service_urls' => 
    array (
      'default' => 'https://chart-service-usw2.service.sugarcrm.com',
      'us-west-2' => 'https://chart-service-usw2.service.sugarcrm.com',
      'ap-southeast-2' => 'https://chart-service-apse2.service.sugarcrm.com',
      'eu-central-1' => 'https://chart-service-euc1.service.sugarcrm.com',
      'ca-central-1' => 'https://chart-service-cac1.service.sugarcrm.com',
      'ap-southeast-1' => 'https://chart-service-apse1.service.sugarcrm.com',
      'eu-west-2' => 'https://chart-service-euw2.service.sugarcrm.com',
    ),
  ),
  'clear_resolved_date' => true,
  'collapse_subpanels' => false,
  'commentlog' => 
  array (
    'maxchars' => 500,
  ),
  'common_ml_dir' => '',
  'create_default_user' => false,
  'cron' => 
  array (
    'max_cron_jobs' => 10,
    'max_cron_runtime' => 1800,
    'min_cron_interval' => 30,
    'enforce_runtime' => false,
  ),
  'currency' => '',
  'currency_create_in_preferred' => false,
  'dashlet_auto_refresh_min' => '30',
  'dashlet_display_row_options' => 
  array (
    0 => '1',
    1 => '3',
    2 => '5',
    3 => '10',
  ),
  'date_formats' => 
  array (
    'Y-m-d' => '2010-12-23',
    'm-d-Y' => '12-23-2010',
    'd-m-Y' => '23-12-2010',
    'Y/m/d' => '2010/12/23',
    'm/d/Y' => '12/23/2010',
    'd/m/Y' => '23/12/2010',
    'Y.m.d' => '2010.12.23',
    'd.m.Y' => '23.12.2010',
    'm.d.Y' => '12.23.2010',
  ),
  'datef' => 'm/d/Y',
  'db_manager' => 'MysqliManager',
  'dbconfig' => 
  array (
    'db_host_instance' => 'SQLEXPRESS',
    'db_type' => 'mysql',
    'db_manager' => 'MysqliManager',
    'db_host_name' => '',
    'db_user_name' => 'root',
    'db_password' => '123',
    'db_name' => 'goldmine_no_data',
  ),
  'dbconfigoption' => 
  array (
    'persistent' => false,
    'autofree' => false,
    'debug' => 0,
    'ssl' => false,
  ),
  'default_action' => 'index',
  'default_background_image' => 'include/images/login-background.png',
  'default_charset' => 'UTF-8',
  'default_currencies' => 
  array (
    'AUD' => 
    array (
      'name' => 'Australian Dollars',
      'iso4217' => 'AUD',
      'symbol' => '$',
    ),
    'BRL' => 
    array (
      'name' => 'Brazilian Reais',
      'iso4217' => 'BRL',
      'symbol' => 'R$',
    ),
    'GBP' => 
    array (
      'name' => 'British Pounds',
      'iso4217' => 'GBP',
      'symbol' => '£',
    ),
    'CAD' => 
    array (
      'name' => 'Canadian Dollars',
      'iso4217' => 'CAD',
      'symbol' => '$',
    ),
    'CNY' => 
    array (
      'name' => 'Chinese Yuan',
      'iso4217' => 'CNY',
      'symbol' => '￥',
    ),
    'EUR' => 
    array (
      'name' => 'Euro',
      'iso4217' => 'EUR',
      'symbol' => '€',
    ),
    'HKD' => 
    array (
      'name' => 'Hong Kong Dollars',
      'iso4217' => 'HKD',
      'symbol' => '$',
    ),
    'INR' => 
    array (
      'name' => 'Indian Rupees',
      'iso4217' => 'INR',
      'symbol' => '₨',
    ),
    'KRW' => 
    array (
      'name' => 'Korean Won',
      'iso4217' => 'KRW',
      'symbol' => '₩',
    ),
    'YEN' => 
    array (
      'name' => 'Japanese Yen',
      'iso4217' => 'JPY',
      'symbol' => '¥',
    ),
    'MXM' => 
    array (
      'name' => 'Mexican Pesos',
      'iso4217' => 'MXM',
      'symbol' => '$',
    ),
    'SGD' => 
    array (
      'name' => 'Singaporean Dollars',
      'iso4217' => 'SGD',
      'symbol' => '$',
    ),
    'CHF' => 
    array (
      'name' => 'Swiss Franc',
      'iso4217' => 'CHF',
      'symbol' => 'SFr.',
    ),
    'THB' => 
    array (
      'name' => 'Thai Baht',
      'iso4217' => 'THB',
      'symbol' => '฿',
    ),
    'USD' => 
    array (
      'name' => 'US Dollars',
      'iso4217' => 'USD',
      'symbol' => '$',
    ),
  ),
  'default_currency_iso4217' => 'USD',
  'default_currency_name' => 'US Dollar',
  'default_currency_show_preferred' => false,
  'default_currency_significant_digits' => '2',
  'default_currency_symbol' => '$',
  'default_date_format' => 'm/d/Y',
  'default_decimal_seperator' => '.',
  'default_email_charset' => 'UTF-8',
  'default_email_client' => 'sugar',
  'default_email_editor' => 'html',
  'default_export_charset' => 'UTF-8',
  'default_language' => 'en_us',
  'default_locale_name_format' => 's f l',
  'default_max_tabs' => '7',
  'default_module' => 'Home',
  'default_module_favicon' => false,
  'default_navigation_paradigm' => 'gm',
  'default_number_grouping_seperator' => ',',
  'default_password' => '',
  'default_permissions' => 
  array (
    'dir_mode' => 1528,
    'file_mode' => 432,
    'user' => '',
    'group' => '',
  ),
  'default_subpanel_links' => false,
  'default_subpanel_tabs' => true,
  'default_swap_last_viewed' => false,
  'default_swap_shortcuts' => false,
  'default_theme' => 'RacerX',
  'default_time_format' => 'h:ia',
  'default_user_is_admin' => false,
  'default_user_name' => '',
  'demoData' => 'no',
  'deny_license_update' => true,
  'developerMode' => false,
  'developer_mode_visible' => false,
  'diagnostic_file_max_lifetime' => 604800,
  'disable_convert_lead' => true,
  'disable_count_query' => true,
  'disable_export' => false,
  'disable_persistent_connections' => 'false',
  'disable_unknown_platforms' => false,
  'disable_user_email_config' => false,
  'disable_uw_upload' => true,
  'display_email_template_variable_chooser' => false,
  'display_inbound_email_buttons' => false,
  'document_merge' => 
  array (
    'max_retries' => 3,
    'service_urls' => 
    array (
      'default' => 'https://document-merge-us-west-2-prod.service.sugarcrm.com',
      'us-west-2' => 'https://document-merge-us-west-2-prod.service.sugarcrm.com',
      'ap-southeast-2' => 'https://document-merge-ap-se-2-prod.service.sugarcrm.com',
      'eu-central-1' => 'https://document-merge-eu-central-1-prod.service.sugarcrm.com',
      'ca-central-1' => 'https://document-merge-ca-central-1-prod.service.sugarcrm.com',
      'ap-southeast-1' => 'https://document-merge-ap-se-1-prod.service.sugarcrm.com',
      'eu-west-2' => 'https://document-merge-eu-west-2-prod.service.sugarcrm.com',
    ),
  ),
  'dump_slow_queries' => false,
  'emailTemplate' => 
  array (
    'CommentLogMention' => 'fcce69f6-d927-11ea-83fc-06bef78d6e58',
  ),
  'email_address_separator' => ',',
  'email_default_client' => 'sugar',
  'email_default_delete_attachments' => false,
  'email_default_editor' => 'html',
  'email_mailer_timelimit' => 2,
  'email_mailer_timeout' => 10,
  'email_xss' => false,
  'enable_action_menu' => true,
  'enable_legacy_dashboards' => true,
  'enable_link_to_drawer' => true,
  'enable_mobile_redirect' => true,
  'error_number_of_cycles' => '10',
  'export_delimiter' => ',',
  'export_excel_compatible' => false,
  'external_cache_disabled' => true,
  'external_cache_disabled_apc' => true,
  'external_cache_disabled_db' => true,
  'external_cache_disabled_memcache' => true,
  'external_cache_disabled_memcached' => true,
  'external_cache_disabled_mongo' => true,
  'external_cache_disabled_redis' => true,
  'external_cache_disabled_smash' => true,
  'external_cache_disabled_wincache' => true,
  'external_cache_disabled_zend' => true,
  'freeze_list_headers' => true,
  'fts_disable_notification' => false,
  'full_text_engine' => 
  array (
    'Elastic' => 
    array (
      'host' => '10.3.2.75',
      'port' => '9279',
    ),
  ),
  'gcs_client' => 
  array (
    'service_url' => 'https://gcs-api-us-west-2-prod.service.sugarcrm.com',
  ),
  'generic_search' => 
  array (
    'modules' => 
    array (
      0 => 'KBContents',
    ),
  ),
  'hide_admin_backup' => true,
  'hide_admin_licensing' => false,
  'hide_full_text_engine_config' => true,
  'hide_history_contacts_emails' => 
  array (
    'Cases' => false,
    'Accounts' => false,
    'Opportunities' => true,
  ),
  'history_max_viewed' => 50,
  'host_name' => 'wsugardev2.w-systems.com',
  'http_referer' => 
  array (
    'list' => 
    array (
      0 => 'dev.ms.sugarcrm.com',
      1 => 'stage.ms.sugarcrm.com',
      2 => 'qa.ms.sugarcrm.com',
      3 => 'prod.ms.sugarcrm.com',
      4 => 'apps.lotuslive.com',
      5 => 'www.sugarcrm.com',
    ),
    'actions' => 
    array (
      0 => 'index',
      1 => 'ListView',
      2 => 'DetailView',
      3 => 'EditView',
      4 => 'Login',
      5 => 'Authenticate',
      6 => 'oauth',
    ),
  ),
  'idm_mode' => 
  array (
    'enabled' => false,
  ),
  'import_max_execution_time' => 3600,
  'import_max_records_per_file' => 100,
  'import_max_records_total_limit' => '',
  'inbound_email_case_subject_macro' => '[CASE:%1]',
  'installer_locked' => true,
  'jobs' => 
  array (
    'min_retry_interval' => 30,
    'max_retries' => 5,
    'timeout' => 3600,
  ),
  'js_custom_version' => 20221215,
  'js_lang_version' => 2220,
  'languages' => 
  array (
    'en_us' => 'English (US)',
    'bg_BG' => 'Български',
    'cs_CZ' => 'Česky',
    'da_DK' => 'Dansk',
    'de_DE' => 'Deutsch',
    'el_EL' => 'Ελληνικά',
    'es_ES' => 'Español',
    'fr_FR' => 'Français',
    'he_IL' => 'עברית',
    'hu_HU' => 'Magyar',
    'it_it' => 'Italiano',
    'lt_LT' => 'Lietuvių',
    'ja_JP' => '日本語',
    'ko_KR' => '한국어',
    'lv_LV' => 'Latviešu',
    'nb_NO' => 'Norsk',
    'nl_NL' => 'Nederlands',
    'pl_PL' => 'Polski',
    'pt_PT' => 'Português',
    'ro_RO' => 'Română',
    'ru_RU' => 'Русский',
    'sv_SE' => 'Svenska',
    'tr_TR' => 'Türkçe',
    'zh_CN' => '简体中文',
    'pt_BR' => 'Português Brasileiro',
    'ca_ES' => 'Català',
    'en_UK' => 'English (UK)',
    'sr_RS' => 'Српски',
    'sk_SK' => 'Slovenčina',
    'sq_AL' => 'Shqip',
    'et_EE' => 'Eesti',
    'es_LA' => 'Español (Latinoamérica)',
    'fi_FI' => 'Suomi',
    'zh_TW' => '繁體中文',
    'ar_SA' => 'العربية',
    'uk_UA' => 'Українська',
    'hr_HR' => 'Hrvatski',
    'th_TH' => 'ไทย',
  ),
  'large_scale_test' => false,
  'lead_conv_activity_opt' => 'move',
  'list_max_entries_per_page' => 20,
  'list_max_entries_per_subpanel' => 10,
  'lock_default_user_name' => false,
  'lock_homepage' => true,
  'lock_subpanels' => false,
  'log_dir' => '.',
  'log_file' => 'sugarcrm.log',
  'log_memory_usage' => false,
  'logger' => 
  array (
    'level' => 'fatal',
    'file' => 
    array (
      'ext' => '.log',
      'name' => 'sugarcrm',
      'dateFormat' => '%c',
      'maxSize' => '10MB',
      'maxLogs' => 1,
      'suffix' => '',
    ),
    'channels' => 
    array (
      'input_validation' => 
      array (
        'level' => 'warning',
      ),
      'rest' => 
      array (
        'level' => 'warning',
      ),
    ),
  ),
  'logger_visible' => false,
  'login_page' => 
  array (
    'marketing_extras_content' => 
    array (
      'url' => 'https://www.sugarcrm.com/product-login-page-service/',
      'static_url' => 'include/MarketingExtras/StaticMarketingContent/static.html',
      'connect_timeout_ms' => 150,
      'timeout_ms' => 300,
    ),
  ),
  'map_key' => 
  array (
    'bing' => 'AuIEmeKGjvNV037yKiYGV0B3cxqNmx6FWnode0Hj8tjQPjK1zJP-7GAESccoCDUA',
  ),
  'marketing_extras_enabled' => true,
  'marketing_extras_url' => 'https://marketing.sugarcrm.com/content',
  'mass_actions' => 
  array (
  ),
  'max_aggregate_email_attachments_bytes' => 10000000,
  'max_dashlets_homepage' => '15',
  'max_record_fetch_size' => 1000,
  'max_record_link_fetch_size' => 5000,
  'max_session_time' => '1',
  'merge_duplicates' => 
  array (
    'merge_relate_fetch_concurrency' => 2,
    'merge_relate_fetch_timeout' => 90000,
    'merge_relate_fetch_limit' => 20,
    'merge_relate_update_concurrency' => 4,
    'merge_relate_update_timeout' => 90000,
    'merge_relate_max_attempt' => 3,
  ),
  'moduleInstaller' => 
  array (
    'packageScan' => true,
    'validExt' => 
    array (
      0 => 'eot',
      1 => 'svg',
      2 => 'tff',
      3 => 'woff',
      4 => 'woff2',
      5 => 'xml',
      6 => 'md',
    ),
  ),
  'mothership' => 
  array (
    'fqdn' => 'prod.ms.sugarcrm.com',
  ),
  'name_formats' => 
  array (
    's f l' => 's f l',
    'f l' => 'f l',
    's l' => 's l',
    'l, s f' => 'l, s f',
    'l, f' => 'l, f',
    's l, f' => 's l, f',
    'l s f' => 'l s f',
    'l f s' => 'l f s',
  ),
  'new_email_addresses_opted_out' => false,
  'noPrivateTeamUpdate' => false,
  'oauth_token_expiry' => 0,
  'oauth_token_life' => 86400,
  'outfitters_licenses' => 
  array (
    'sales_map' => '4cbe4ba65f7c2f8bc53404d620d32721',
    'filter-deployer' => 'f3bac6c50d96d806480579e9ad980ecb ',
    'dashboard-deployer' => '958d369e02d8662e4c6368bd2aec8d40 ',
  ),
  'passwordsetting' => 
  array (
    'minpwdlength' => 6,
    'maxpwdlength' => '',
    'oneupper' => true,
    'onelower' => true,
    'onenumber' => true,
    'onespecial' => '0',
    'SystemGeneratedPasswordON' => '0',
    'generatepasswordtmpl' => 'ead32f15-022c-04a4-58c8-515605122359',
    'lostpasswordtmpl' => 'f2ad9ccc-b7e8-41ff-1120-5156052f70f8',
    'customregex' => '',
    'regexcomment' => '',
    'forgotpasswordON' => true,
    'linkexpiration' => true,
    'linkexpirationtime' => 24,
    'linkexpirationtype' => 60,
    'userexpiration' => '0',
    'userexpirationtime' => '',
    'userexpirationtype' => '1',
    'userexpirationlogin' => '',
    'systexpiration' => 1,
    'systexpirationtime' => 7,
    'systexpirationtype' => '0',
    'systexpirationlogin' => '',
    'lockoutexpiration' => '0',
    'lockoutexpirationtime' => '',
    'lockoutexpirationtype' => '1',
    'lockoutexpirationlogin' => '',
  ),
  'pdf_file_max_lifetime' => 86400,
  'pmse_settings_default' => 
  array (
    'logger_level' => 'critical',
    'error_number_of_cycles' => '10',
    'error_timeout' => '40',
  ),
  'portal' => 
  array (
    'modules' => 
    array (
      0 => 'KBContents',
    ),
  ),
  'portal_view' => 'single_user',
  'portalpasswordsetting' => 
  array (
    'lostpasswordtmpl' => 'f29f5864-bc90-11e9-82c9-a45e60e684a5',
    'resetpasswordtmpl' => '12d9843e-bed9-11e9-8cec-6003089fe26e',
  ),
  'preview_edit' => true,
  'processes_auto_save_interval' => 30000,
  'processes_auto_validate_on_autosave' => true,
  'processes_auto_validate_on_import' => true,
  'product_definition' => 
  array (
    'type' => 'Http',
    'options' => 
    array (
      'base_uri' => 'https://updates.sugarcrm.com/spds/',
      'fallback_version' => '10.0.0',
    ),
  ),
  'push_notification' => 
  array (
    'enabled' => false,
  ),
  'require_accounts' => true,
  'resource_management' => 
  array (
    'special_query_limit' => 50000,
    'special_query_modules' => 
    array (
      0 => 'Reports',
      1 => 'Export',
      2 => 'Import',
      3 => 'Administration',
      4 => 'Sync',
    ),
    'default_limit' => 1000,
  ),
  'roleBasedViews' => true,
  'rss_cache_time' => '10800',
  'save_query' => 'all',
  'search_engine' => 
  array (
    'max_bulk_threshold' => 25,
    'force_async_index' => true,
  ),
  'search_wildcard_char' => '%',
  'search_wildcard_infront' => false,
  'security' => 
  array (
    'private_ips' => 
    array (
      0 => '10.0.0.0|10.255.255.255',
      1 => '172.16.0.0|172.31.255.255',
      2 => '192.168.0.0|192.168.255.255',
      3 => '169.254.0.0|169.254.255.255',
      4 => '127.0.0.0|127.255.255.255',
    ),
  ),
  'session_dir' => '',
  'showDetailData' => true,
  'showThemePicker' => true,
  'show_download_tab' => true,
  'site_url' => 'http://localhost/goldmine/',
  'slow_query_time_msec' => '5000',
  'smtp_mailer_debug' => 0,
  'snip_url' => 'https://ease.sugarcrm.com/',
  'stack_trace_errors' => false,
  'sugar_max_int' => 2147483647,
  'sugar_min_int' => -2147483648,
  'sugar_push' => 
  array (
    'max_retries' => 2,
    'service_urls' => 
    array (
      'default' => 'https://sugarpush.service.sugarcrm.com',
      'us-west-2' => 'https://sugarpush-us-west-2-prod.service.sugarcrm.com',
    ),
  ),
  'sugar_version' => '12.2.0',
  'team_based_acl' => 
  array (
    'enabled' => false,
    'enabled_modules' => 
    array (
    ),
  ),
  'time_formats' => 
  array (
    'H:i' => '23:00',
    'h:ia' => '11:00pm',
    'h:iA' => '11:00PM',
    'h:i a' => '11:00 pm',
    'h:i A' => '11:00 PM',
    'H.i' => '23.00',
    'h.ia' => '11.00pm',
    'h.iA' => '11.00PM',
    'h.i a' => '11.00 pm',
    'h.i A' => '11.00 PM',
  ),
  'timef' => 'H:i',
  'tmp_dir' => 'cache/xml/',
  'tmp_file_max_lifetime' => 86400,
  'tracker_max_display_length' => 30,
  'translation_string_prefix' => false,
  'unique_key' => 'cb795057b149635603a48b09faf540ad',
  'upload_badext' => 
  array (
    0 => 'php',
    1 => 'php3',
    2 => 'php4',
    3 => 'php5',
    4 => 'pl',
    5 => 'cgi',
    6 => 'py',
    7 => 'asp',
    8 => 'cfm',
    9 => 'js',
    10 => 'vbs',
    11 => 'html',
    12 => 'htm',
  ),
  'upload_dir' => 'upload/',
  'upload_maxsize' => 30000000,
  'use_common_ml_dir' => false,
  'use_real_names' => true,
  'use_sprites' => true,
  'vcal_time' => '2',
  'verify_client_ip' => true,
  'wl_list_max_entries_per_page' => 10,
  'wl_list_max_entries_per_subpanel' => 3,
);
