<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
/**
 * App Config
 */
$app_list_strings['moduleList']['HintAccountsets'] = 'HintAccountsets';
$app_list_strings['moduleList']['HintNotificationTargets'] = 'HintNotificationTargets';
$app_list_strings['moduleList']['HintNewsNotifications'] = 'HintNewsNotifications';
$app_list_strings['moduleList']['HintEnrichFieldConfigs'] = 'HintEnrichFieldConfigs';

/**
 * Select2 field values
 */
$app_list_strings['stage2_preferences_type'] = [
    'owner' => 'My Accounts',
    'favorites' => 'Favorite Accounts',
    'tags' => 'Accounts tagged'
];

$app_list_strings['stage2_preferences_category'] = [
    'All' => 'All News',
    'General' => 'General',
    'Finance' => 'Financial',
    'People' => 'Personnel',
    'Press Releases' => 'Press Releases',
    'Other' => 'Other'
];

/**
 * Standard Translations
 */
$app_strings['LBL_HINT_COMPANY_SIZE'] = 'Company Size';
$app_strings['LBL_HINT_COMPANY_INDUSTRY'] = 'Industry';
$app_strings['LBL_HINT_COMPANY_INDUSTRY_TAGS'] = 'Industry Tags';
$app_strings['LBL_HINT_COMPANY_LOCATION'] = 'Company Location';
$app_strings['LBL_HINT_COMPANY_DESCRIPTION'] = 'Company Description';
$app_strings['LBL_HINT_COMPANY_FOUNDED_YEAR'] = 'Year Founded';
$app_strings['LBL_HINT_COMPANY_FACEBOOK'] = 'Company Facebook';
$app_strings['LBL_HINT_COMPANY_TWITTER'] = 'Company Twitter';
$app_strings['LBL_HINT_COMPANY_LOGO'] = 'Company Logo Link';
$app_strings['LBL_HINT_COMPANY_PIC'] = 'Company Logo';
$app_strings['LBL_HINT_CONTACT_PIC'] = 'Contact Photo';
$app_strings['LBL_HINT_COMPANY_WEBSITE'] = 'Company Website';
$app_strings['LBL_HINT_PHOTO'] = 'Photo Link';
$app_strings['LBL_HINT_JOB_2'] = 'Previous Jobs';
$app_strings['LBL_HINT_EDUCATION'] = 'Education';
$app_strings['LBL_HINT_EDUCATION_2'] = 'Education Additional';
$app_strings['LBL_HINT_TWITTER'] = 'Twitter Link';
$app_strings['LBL_HINT_FACEBOOK'] = 'Facebook Link';
$app_strings['LBL_HINT_COMPANY_NAICS_CODE_LABEL'] = 'NAICS Code';
$app_strings['LBL_HINT_COMPANY_SIC_CODE_LABEL'] = 'SIC Code';
$app_strings['LBL_HINT_COMPANY_FISCAL_YEAR_END'] = 'FY End';
$app_strings['LBL_HINT_COMPANY_ANNUAL_REVENUE'] = 'Annual Revenue';
$app_strings['LBL_HINT_PHONE_1'] = 'Phone 1';
$app_strings['LBL_HINT_PHONE_2'] = 'Phone 2';
$app_strings['LBL_HINT_PANEL'] = 'Hint';
$app_strings['LBL_HINT_JOIN_TABLE'] = 'Join table';
$app_strings['LBL_HINT_FULL_NAME'] = 'Full Name';
$app_strings['LBL_HINT_JOB_TITLE'] = 'Job Title';
$app_strings['LBL_HINT_OFFICE_PHONE'] = 'Office Phone';
$app_strings['LBL_HINT_MOBILE_PHONE'] = 'Mobile';
$app_strings['LBL_HINT_OTHER_PHONE'] = 'Other Phone';
$app_strings['LBL_HINT_WEBSITE'] = 'Website';
$app_strings['LBL_HINT_MSG_OVERWRITE_ALL'] = 'Would you like to overwrite all the existing data for this record with the new data found in Hint?';
$app_strings['LBL_HINT_MSG_OVERWRITE_FIELD'] = 'Would you like to overwrite the existing {{fieldName}} for this record with new {{fieldName}} found in Hint?';
$app_strings['LBL_HINT_MSG_TOTAL_OVERWRITE'] = 'All account related data will be removed, Are you sure you want to continue ?';
$app_strings['LBL_HINT_CONTACTS_AVATAR'] = 'Photo';
$app_strings['LBL_HINT_ACCOUNTSETS'] = 'Hint Accountsets Tags';

$app_strings['LBL_HINT_LOADING'] = 'Loading ...';
$app_strings['LBL_HINT_UNINSTALL_PROCESSING'] = 'Uninstalling Hint, please wait';
$app_strings['LBL_HINT_VALUE_ERASED'] = ' Value Erased ';
$app_strings['LBL_HINT_VALUE_ERASED_TOOLTIP'] = 'This information was erased via a data privacy request';

$app_strings['LBL_HINT_UNINSTALL_TITLE'] = 'Please select one of the uninstall options from below:';
$app_strings['LBL_HINT_UNINSTALL_PARTIAL'] = 'Uninstall Hint package only';
$app_strings['LBL_HINT_UNINSTALL_FULL'] = 'Uninstall Hint completely';
$app_strings['LBL_HINT_UNINSTALL_PARTIAL_DESCRIPTION'] = 'This option will remove the Hint MLP and disable all active subscriptions to Hint Insights. 
Reinstalling Hint will automatically reactivate subscriptions.';
$app_strings['LBL_HINT_UNINSTALL_FULL_DESCRIPTION'] = 'This option will perform a full uninstall of Hint, including removal of the MLP and deletion of all configuration and subscription information.';
$app_strings['LBL_HINT_UNINSTALL'] = 'Uninstall';
$app_strings['LBL_HINT_UNINSTALL_HEADER'] = 'Uninstall Hint';
$app_strings['LBL_HINT_CANCEL'] = 'Cancel';
$app_strings['LBL_HINT_UNINSTALL_WARNING1'] = 'WARNING: Choose this option only if you do not intend to use Hint again in the future. 
Before performing the uninstall, complete a full backup of your Sugar database and put Sugar into maintenance mode. ';
$app_strings['LBL_HINT_UNINSTALL_WARNING2'] = 'See the ';
$app_strings['LBL_HINT_UNINSTALL_WARNING_LINK'] = 'http://www.sugarcrm.com/crm/product_doc.php?module=HintUninstallingHint';
$app_strings['LBL_HINT_UNINSTALL_WARNING3'] = 'for details on the uninstall process.';
$app_strings['LBL_HINT_UNINSTALL_WARNING_MESSAGE1'] = 'Are you sure you want to uninstall the Hint package only?';
$app_strings['LBL_HINT_UNINSTALL_WARNING_MESSAGE2'] = 'Are you sure you want to uninstall the Hint completely?';
$app_strings['LBL_HINT_UNINSTALL_WARNING_MESSAGE2_SUBTEXT'] = '(NOTE: YOU CANNOT UNDO THIS ACTION)';

$app_strings['LBL_HINT_CONFIG_TITLE'] = 'Hint Fields';
$app_strings['LBL_HINT_NO_RESULTS_MSG'] = 'No results were found.';
$app_strings['LBL_HINT_CONFIG_BASIC_PREVIEW'] = 'Basic Hint Panel Layout';
$app_strings['LBL_HINT_CONFIG_TAB_ACCOUNTS'] = 'Accounts';
$app_strings['LBL_HINT_CONFIG_TAB_CONTACTS'] = 'Contacts';
$app_strings['LBL_HINT_CONFIG_TAB_LEADS'] = 'Leads';
$app_strings['LBL_HINT_CONFIG_EXPANDED_PREVIEW'] = 'Expanded Hint Panel Layout';
$app_strings['LBL_HINT_CONFIG_DIR_PAR1'] = 'Rearrange the fields by dragging and dropping within the Hint Panel Layout sections above.';
$app_strings['LBL_HINT_CONFIG_DIR_PAR2'] = 'For detailed instructions and a list of default fields, refer to the ';
$app_strings['LBL_HINT_CONFIG_RESTORE_TEXT'] = ' to restore default settings for the ';
$app_strings['LBL_HINT_CONFIG_MODULE_TEXT'] = 'module.';
$app_strings['LBL_HINT_CONFIG_WARNING_MESSAGE'] = 'Are you sure you want to restore back to the defaults for the {{module}} module ?';
$app_strings['LBL_HINT_CONFIG_RESTORE_BUTTON'] = 'Click Here';
$app_strings['LBL_HINT_CONFIG_NAME'] = 'Hint Administration Guide.';
$app_strings['LBL_HINT_CONFIG_FIELD_SELECTOR'] = 'Fields';
$app_strings['LBL_HINT_ENRICHED_FIELD_SUBTITLE'] = 'Enriched Fields';
$app_strings['LBL_HINT_ENRICHED_FIELD_SUBTITLE_NOTE'] = 'This section lists all Hint fields and Sugar fields that are enriched by Hint. Hint fields are marked with an asterisk (*) and can only be shown in the Hint panel if they are enriched.';
$app_strings['LBL_HINT_CONFIG_FIELD_NAME'] = 'Field Name';
$app_strings['LBL_HINT_CONFIG_ENRICH_FIELD'] = 'Enrich Field';
$app_strings['LBL_HINT_CONFIG_FIELD_SHOW1'] = 'Show in Hint';
$app_strings['LBL_HINT_CONFIG_FIELD_SHOW2'] = 'Show in Hint Panel';
$app_strings['LBL_HINT_ADDITIONAL_FIELD_SUBTITLE'] = 'Additional Sugar Fields';
$app_strings['LBL_HINT_ADDITIONAL_FIELD_SUBTITLE_NOTE'] = 'This section lists all Sugar fields that are not enriched by Hint.';
$app_strings['LBL_HINT_RESYNC_NOTIFICATION_TITLE'] = 'Warning';
$app_strings['LBL_HINT_RESYNC_NOTIFICATION_DESCRIPTION'] = 'Caution: You are about to sync with the Hint Insights service. Any pending email digest stories will be lost, and existing news will be cleared from the Insights dashlet. Notifications of all types will resume after the sync completes.';

$app_strings['LBL_HINT_ACCOUNT_CHANGE_TITLE'] = 'Suggested companies related to your {{_moduleSingular}} are listed below. Select company data to display.';
$app_strings['LBL_HINT_NO_ACCOUNT_SELECTED'] = 'No account has been selected';

$app_strings['LBL_HINT_EMAIL_IMPORT_TITLE'] = 'Multiple emails found, select emails to import: ';

$app_strings['LBL_HINT_HELP_MESSAGE1'] = 'Based on the data entered, hint was not able to find a match in the system.';
$app_strings['LBL_HINT_HELP_MESSAGE2'] = 'Best results in hint can be found with a person\'s name and email address.';
$app_strings['LBL_HINT_HELP_MESSAGE3'] = 'Best results in hint can be found with the company website url.';
$app_strings['LBL_HINT_HELP_DEFAULT_MESSAGE1A'] = "Enter your {{_moduleSingular}}'s company name or website and hint will search for additional data.";
$app_strings['LBL_HINT_HELP_DEFAULT_MESSAGE1B'] = "Enter your {{currentModule}}'s email address and hint will search for additional data.";

$app_strings['LBL_HINT_HISTORY_NONE'] = 'No data available for historical view';
$app_strings['LBL_HINT_HISTORY_TITLE'] = 'Activity History';

$app_strings['LBL_HINT_PREVIEW_TITLE'] = 'Data enrichment';
$app_strings['LBL_HINT_PREVIEW_LICENSE_EXPIRED'] = 'The licence for your SugarCRM Hint service has expired. Contact your SugarCRM admin to renew your licence.';
$app_strings['LBL_HINT_PREVIEW_QUESTION'] = 'Want to see what SugarCRM Hint can do for you and your company? Contact your SugarCRM admin to add Hint.';
$app_strings['LBL_HINT_PREVIEW_NO_ACCOUNT_INFO'] = 'Account information not found';
$app_strings['LBL_HINT_PREVIEW_TOOLTIP_TITLE'] = 'Enriched data found - click to save all enriched data to your record.';
$app_strings['LBL_HINT_PREVIEW_CLICK_TO_SAVE'] = 'Click to save enriched data to your record.';

$app_strings['LBL_HINT_CONTACTS_TITLE'] = 'Related Contacts';
$app_strings['LBL_HINT_CONTACTS_NONE'] = 'No related contacts';

$app_strings['LBL_HINT_NEWS'] = 'News';
$app_strings['LBL_HINT_GENERAL'] = 'General';
$app_strings['LBL_HINT_ALL_NEWS'] = 'All News';
$app_strings['LBL_HINT_FILTER_NEWS'] = 'Filter News';
$app_strings['LBL_HINT_FINANCIAL_NEWS'] = 'Financial';
$app_strings['LBL_HINT_PERSONNEL_NEWS'] = 'Personnel';
$app_strings['LBL_HINT_PRESS_RELEASES'] = 'Press Releases';
$app_strings['LBL_HINT_OTHER_NEWS'] = 'Other';
$app_strings['LBL_HINT_NEWS_PLACEHOLDER'] = 'Search news articles';
$app_strings['LBL_HINT_NEWS_ALERT'] = 'Hint Insights';
$app_strings['LBL_HINT_NEWS_NONE'] = 'No news available';
$app_strings['LBL_NEW_NOTIFICATIONS'] = 'New notifications';
$app_strings['LBL_HINT_DASHLET_ALLOWED1'] = 'You must have a Hint license to view the Hint Insights dashlet.
Ask your administrator about getting a Hint license.';

$app_strings['LBL_HINT_FOR'] = 'For';
$app_strings['LBL_HINT_WITH'] = 'with';
$app_strings['LBL_HINT_SHOW_ME'] = 'Show me: ';
$app_strings['LBL_HINT_NOTIFY_ME_BY'] = 'Notify me by: ';

$app_strings['LBL_NOTIFICATIONS_TITLE'] = 'Hint Insights Preference Center';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE'] = 'Preference Option Key';
$app_strings['LBL_HINT_PREFERENCES'] = 'Preferences';
$app_strings['LBL_HINT_MINIMUM_PREFERENCES'] = 'Delete disabled, minimum of one preference statement required';
$app_strings['LBL_HINT_MAXIMUM_PREFERENCES'] = 'Add disabled, you have reached maximum of preference statements';

$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_DASHLET'] = 'Include in Hint Insights dashlet';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_BROWSER'] = 'Pop-up as desktop notification';
$app_strings['LBL_NOTIFICATIONS_KEY_DESCR_BROWSER'] = 'Notifications must be enabled on all browsers and on all desktop computers to consistently receive notifications.';
$app_strings['LBL_NOTIFICATIONS_KEY_DESCR_BROWSER_DISABLED'] = 'Some browsers, like Internet Explorer, do not support notifications. Notifications cannot be enabled when using a browser that does not support notifications.';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_EMAIL'] = 'Send instant email alert for each notification';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_DAILY'] = 'Send a daily email digest';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_WEEKLY'] = 'Send a weekly email digest';

$app_strings['LBL_NOTIFICATIONS_ERROR_MESSAGE_FAILEDSYNC'] = 'Preferences could not be saved. Check your system connection and try again.';
$app_strings['LBL_NOTIFICATIONS_ERROR_MESSAGE_MISSING_REQUIRED'] = 'Some required fields are missing a value. Please check your preferences and ensure that all required fields are filled in.';

$app_strings['LBL_HINT_PUSH_MESSAGES_PERMISSION'] = 'You are about to enable browser notifications for Hint Insights. Click Confirm to proceed. Your browser will then ask you for permission to allow receiving notification events.';
$app_strings['LBL_HINT_PUSH_ERROR'] = 'Push Notifications plugin has been registered for {{options.type}} without its dependencies. The plugin will not work as intended, please be sure that you provide a path to the worker file and a method for saving the subscription on the server.';

$app_strings['LBL_HINT_CONFIG_ENABLE_NOTIFICATIONS'] = 'Turn ON Hint notifications for all users';
$app_strings['LBL_HINT_CONFIG_DISABLE_NOTIFICATIONS'] = 'Turn OFF Hint notifications for all users';

$app_strings['LBL_HINT_SOFT_DISABLE_NOTIFICATIONS_FAILURE'] = 'WARNING: Failed to disable notifications during uninstallation of Sugar Hint. To disable notifications, install Hint 5.4.0 or higher and perform a complete uninstall using the Hint Uninstaller found in the Administration section of Sugar.';
