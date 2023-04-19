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
$app_strings['LBL_HINT_COMPANY_SIZE'] = '公司規模';
$app_strings['LBL_HINT_COMPANY_INDUSTRY'] = '行業';
$app_strings['LBL_HINT_COMPANY_INDUSTRY_TAGS'] = '行業標籤';
$app_strings['LBL_HINT_COMPANY_LOCATION'] = '公司位置';
$app_strings['LBL_HINT_COMPANY_DESCRIPTION'] = '公司描述';
$app_strings['LBL_HINT_COMPANY_FOUNDED_YEAR'] = '建立年份';
$app_strings['LBL_HINT_COMPANY_FACEBOOK'] = '公司 Facebook';
$app_strings['LBL_HINT_COMPANY_TWITTER'] = '公司 Twitter';
$app_strings['LBL_HINT_COMPANY_LOGO'] = '公司 Logo 連結';
$app_strings['LBL_HINT_COMPANY_PIC'] = '公司 Logo';
$app_strings['LBL_HINT_CONTACT_PIC'] = '聯絡人照片';
$app_strings['LBL_HINT_COMPANY_WEBSITE'] = '公司網站';
$app_strings['LBL_HINT_PHOTO'] = '照片連結';
$app_strings['LBL_HINT_JOB_2'] = '工作履歷';
$app_strings['LBL_HINT_EDUCATION'] = '教育';
$app_strings['LBL_HINT_EDUCATION_2'] = '額外教育';
$app_strings['LBL_HINT_TWITTER'] = 'Twitter 連結';
$app_strings['LBL_HINT_FACEBOOK'] = 'Facebook 連結';
$app_strings['LBL_HINT_COMPANY_NAICS_CODE_LABEL'] = 'NAICS 代碼';
$app_strings['LBL_HINT_COMPANY_SIC_CODE_LABEL'] = 'SIC 代碼';
$app_strings['LBL_HINT_COMPANY_FISCAL_YEAR_END'] = '財年結束';
$app_strings['LBL_HINT_COMPANY_ANNUAL_REVENUE'] = '年收入';
$app_strings['LBL_HINT_PHONE_1'] = '電話 1';
$app_strings['LBL_HINT_PHONE_2'] = '電話 2';
$app_strings['LBL_HINT_PANEL'] = 'Hint';
$app_strings['LBL_HINT_JOIN_TABLE'] = '聯接表';
$app_strings['LBL_HINT_FULL_NAME'] = '全名';
$app_strings['LBL_HINT_JOB_TITLE'] = '職稱';
$app_strings['LBL_HINT_OFFICE_PHONE'] = '辦公電話';
$app_strings['LBL_HINT_MOBILE_PHONE'] = '手機';
$app_strings['LBL_HINT_OTHER_PHONE'] = '其他電話';
$app_strings['LBL_HINT_WEBSITE'] = '網站';
$app_strings['LBL_HINT_MSG_OVERWRITE_ALL'] = '是否想要用 Hint 中找到的新數據覆蓋此記錄的所有現有數據？';
$app_strings['LBL_HINT_MSG_OVERWRITE_FIELD'] = '是否想要用 Hint 中找到的新 {{fieldName}} 覆蓋此記錄的現有 {{fieldName}}？';
$app_strings['LBL_HINT_MSG_TOTAL_OVERWRITE'] = '所有帳戶相關數據將被刪除。是否確定要繼續？';
$app_strings['LBL_HINT_CONTACTS_AVATAR'] = '照片';
$app_strings['LBL_HINT_ACCOUNTSETS'] = 'Hint 帳戶集標籤';

$app_strings['LBL_HINT_LOADING'] = '載入中...';
$app_strings['LBL_HINT_UNINSTALL_PROCESSING'] = '卸載 Hint 中，請等待';
$app_strings['LBL_HINT_VALUE_ERASED'] = ' 值已被擦除 ';
$app_strings['LBL_HINT_VALUE_ERASED_TOOLTIP'] = '使訊息已經由數據隱私請求擦除';

$app_strings['LBL_HINT_UNINSTALL_TITLE'] = '請從下面選擇一個卸載選項:';
$app_strings['LBL_HINT_UNINSTALL_PARTIAL'] = '僅卸載 Hint 程式包';
$app_strings['LBL_HINT_UNINSTALL_FULL'] = '完全卸載 Hint';
$app_strings['LBL_HINT_UNINSTALL_PARTIAL_DESCRIPTION'] = 'This option will remove the Hint MLP and disable all active subscriptions to Hint Insights. 
Reinstalling Hint will automatically reactivate subscriptions.';
$app_strings['LBL_HINT_UNINSTALL_FULL_DESCRIPTION'] = '此選項將完全卸載 Hint，包括移除 MLP 以及刪除所有配置和訂閱訊息。';
$app_strings['LBL_HINT_UNINSTALL'] = '卸載';
$app_strings['LBL_HINT_UNINSTALL_HEADER'] = '卸載 Hint';
$app_strings['LBL_HINT_CANCEL'] = '取消';
$app_strings['LBL_HINT_UNINSTALL_WARNING1'] = 'WARNING: Choose this option only if you do not intend to use Hint again in the future. 
Before performing the uninstall, complete a full backup of your Sugar database and put Sugar into maintenance mode. ';
$app_strings['LBL_HINT_UNINSTALL_WARNING2'] = '觀看 ';
$app_strings['LBL_HINT_UNINSTALL_WARNING_LINK'] = 'http://www.sugarcrm.com/crm/product_doc.php?module=HintUninstallingHint';
$app_strings['LBL_HINT_UNINSTALL_WARNING3'] = '有關卸載過程的詳細訊息。';
$app_strings['LBL_HINT_UNINSTALL_WARNING_MESSAGE1'] = '是否確定僅卸載 Hint 程式包？';
$app_strings['LBL_HINT_UNINSTALL_WARNING_MESSAGE2'] = '是否確定完全卸載 Hint？';
$app_strings['LBL_HINT_UNINSTALL_WARNING_MESSAGE2_SUBTEXT'] = '(注意：您無法撤銷此操作)';

$app_strings['LBL_HINT_CONFIG_TITLE'] = 'Hint 字段';
$app_strings['LBL_HINT_NO_RESULTS_MSG'] = '未找到結果。';
$app_strings['LBL_HINT_CONFIG_BASIC_PREVIEW'] = '基本 Hint 面板佈局';
$app_strings['LBL_HINT_CONFIG_TAB_ACCOUNTS'] = '帳戶';
$app_strings['LBL_HINT_CONFIG_TAB_CONTACTS'] = '聯絡人';
$app_strings['LBL_HINT_CONFIG_TAB_LEADS'] = '線索';
$app_strings['LBL_HINT_CONFIG_EXPANDED_PREVIEW'] = '擴展的 Hint 面板佈局';
$app_strings['LBL_HINT_CONFIG_DIR_PAR1'] = '通過在上面的 Hint 面板佈局部分中拖放字段，對其進行重新排列。';
$app_strings['LBL_HINT_CONFIG_DIR_PAR2'] = '如需詳細說明和默認字段列表，請參閱 ';
$app_strings['LBL_HINT_CONFIG_RESTORE_TEXT'] = ' 以便為 ';
$app_strings['LBL_HINT_CONFIG_MODULE_TEXT'] = '恢復默認設置。';
$app_strings['LBL_HINT_CONFIG_WARNING_MESSAGE'] = '是否確定要為 {{module}} 模組恢復默認值？';
$app_strings['LBL_HINT_CONFIG_RESTORE_BUTTON'] = '點擊此處';
$app_strings['LBL_HINT_CONFIG_NAME'] = 'Hint 管理指南。';
$app_strings['LBL_HINT_CONFIG_FIELD_SELECTOR'] = '字段';
$app_strings['LBL_HINT_ENRICHED_FIELD_SUBTITLE'] = '已豐富內容的字段';
$app_strings['LBL_HINT_ENRICHED_FIELD_SUBTITLE_NOTE'] = '此部分列出了所有由 Hint 豐富內容的 Hint 字段和 Sugar 字段。Hint 字段標有星號 (*)，只有在其內容被豐富時才能顯示在 Hint 面板中。';
$app_strings['LBL_HINT_CONFIG_FIELD_NAME'] = '字段名稱';
$app_strings['LBL_HINT_CONFIG_ENRICH_FIELD'] = '豐富字段';
$app_strings['LBL_HINT_CONFIG_FIELD_SHOW1'] = '顯示在 Hint 中';
$app_strings['LBL_HINT_CONFIG_FIELD_SHOW2'] = '顯示在 Hint 面板中';
$app_strings['LBL_HINT_ADDITIONAL_FIELD_SUBTITLE'] = '額外 Sugar 字段';
$app_strings['LBL_HINT_ADDITIONAL_FIELD_SUBTITLE_NOTE'] = '此部分列出所有未由 Hint 豐富內容的 Sugar 字段。';
$app_strings['LBL_HINT_RESYNC_NOTIFICATION_TITLE'] = '警告';
$app_strings['LBL_HINT_RESYNC_NOTIFICATION_DESCRIPTION'] = '警告：您將與 Hint Insights 服務同步。任何待處理的電子郵件摘要故事都將丟失，且現有新聞將從 Insights dashlet 中清除。同步完成後，所有類型的通知將恢復。';

$app_strings['LBL_HINT_ACCOUNT_CHANGE_TITLE'] = '與您的 {{_moduleSingular}} 相關的建議公司列示如下。選擇要顯示的公司數據。';
$app_strings['LBL_HINT_NO_ACCOUNT_SELECTED'] = '沒有選擇帳戶';

$app_strings['LBL_HINT_EMAIL_IMPORT_TITLE'] = '發現多封電子郵件，選擇要導入的電子郵件： ';

$app_strings['LBL_HINT_HELP_MESSAGE1'] = '基於輸入的數據，Hint 無法在系統中找到匹配項。';
$app_strings['LBL_HINT_HELP_MESSAGE2'] = '使用人員姓名和電子郵件地址可在 Hint 中找到最佳結果。';
$app_strings['LBL_HINT_HELP_MESSAGE3'] = '使用公司網站 url 可在 Hint 中找到最佳結果。';
$app_strings['LBL_HINT_HELP_DEFAULT_MESSAGE1A'] = "Enter your {{_moduleSingular}}'s company name or website and hint will search for additional data.";
$app_strings['LBL_HINT_HELP_DEFAULT_MESSAGE1B'] = "Enter your {{currentModule}}'s email address and hint will search for additional data.";

$app_strings['LBL_HINT_HISTORY_NONE'] = '歷史視圖沒有可用數據';
$app_strings['LBL_HINT_HISTORY_TITLE'] = '活動歷史';

$app_strings['LBL_HINT_PREVIEW_TITLE'] = '數據豐富';
$app_strings['LBL_HINT_PREVIEW_LICENSE_EXPIRED'] = '您的 SugarCRM Hint 服務的許可證已過期。請聯系您的 SugarCRM 管理員以續訂您的許可證。';
$app_strings['LBL_HINT_PREVIEW_QUESTION'] = '想要了解 SugarCRM Hint 可為您和您的公司帶來什麽助益？請聯絡您的 SugarCRM 管理員添加 Hint。';
$app_strings['LBL_HINT_PREVIEW_NO_ACCOUNT_INFO'] = '未找到帳戶訊息';
$app_strings['LBL_HINT_PREVIEW_TOOLTIP_TITLE'] = '找到已豐富內容的數據 - 點擊以將所有已豐富內容的數據保存到您的記錄。';
$app_strings['LBL_HINT_PREVIEW_CLICK_TO_SAVE'] = '點擊以將所有已豐富內容的數據保存到您的記錄。';

$app_strings['LBL_HINT_CONTACTS_TITLE'] = '相關聯絡人';
$app_strings['LBL_HINT_CONTACTS_NONE'] = '沒有相關聯絡人';

$app_strings['LBL_HINT_NEWS'] = '新聞';
$app_strings['LBL_HINT_GENERAL'] = '常規';
$app_strings['LBL_HINT_ALL_NEWS'] = '所有新聞';
$app_strings['LBL_HINT_FILTER_NEWS'] = '篩選新聞';
$app_strings['LBL_HINT_FINANCIAL_NEWS'] = '財務';
$app_strings['LBL_HINT_PERSONNEL_NEWS'] = '人事';
$app_strings['LBL_HINT_PRESS_RELEASES'] = '新聞發佈';
$app_strings['LBL_HINT_OTHER_NEWS'] = '其他';
$app_strings['LBL_HINT_NEWS_PLACEHOLDER'] = '搜尋新聞文章';
$app_strings['LBL_HINT_NEWS_ALERT'] = 'Hint Insights';
$app_strings['LBL_HINT_NEWS_NONE'] = '沒有可用新聞';
$app_strings['LBL_NEW_NOTIFICATIONS'] = '心通知';
$app_strings['LBL_HINT_DASHLET_ALLOWED1'] = 'You must have a Hint license to view the Hint Insights dashlet.
Ask your administrator about getting a Hint license.';

$app_strings['LBL_HINT_FOR'] = '對於';
$app_strings['LBL_HINT_WITH'] = '具有';
$app_strings['LBL_HINT_SHOW_ME'] = '向我顯示: ';
$app_strings['LBL_HINT_NOTIFY_ME_BY'] = '使用以下方式通知我: ';

$app_strings['LBL_NOTIFICATIONS_TITLE'] = 'Hint Insights 偏好設置中心';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE'] = '主要偏好設置選項';
$app_strings['LBL_HINT_PREFERENCES'] = '偏好設置';
$app_strings['LBL_HINT_MINIMUM_PREFERENCES'] = '刪除已禁用，需要至少一個偏好聲明';
$app_strings['LBL_HINT_MAXIMUM_PREFERENCES'] = '添加已禁用，您已達到最多的偏好聲明數';

$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_DASHLET'] = '包含在 Hint Insights dashlet 中';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_BROWSER'] = '彈出桌面通知';
$app_strings['LBL_NOTIFICATIONS_KEY_DESCR_BROWSER'] = '必須在所有瀏覽器和所有桌面電腦上啟用通知，以便持續接收通知。';
$app_strings['LBL_NOTIFICATIONS_KEY_DESCR_BROWSER_DISABLED'] = '部分瀏覽器(如 Internet Explorer) 不支援通知。在使用不支援通知的瀏覽器時，將無法啟用通知。';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_EMAIL'] = '為每個通知发送即時電子郵件警報';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_DAILY'] = '發送每日電子郵件摘要';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_WEEKLY'] = '發送每週電子郵件摘要';

$app_strings['LBL_NOTIFICATIONS_ERROR_MESSAGE_FAILEDSYNC'] = '無法保存偏好設置。請檢查您的系統連接，然後重試。';
$app_strings['LBL_NOTIFICATIONS_ERROR_MESSAGE_MISSING_REQUIRED'] = '一些必填字段缺少值。請檢查您的偏好設置，並確保所有必填字段均已填寫。';

$app_strings['LBL_HINT_PUSH_MESSAGES_PERMISSION'] = '您正在為 Hint Insights 啟用瀏覽器通知。點擊“執行”以繼續。之後，您的瀏覽器將請求提供權限以允許接收通知事件。';
$app_strings['LBL_HINT_PUSH_ERROR'] = '已為 {{options.type}} 註冊推送通知插件，但沒有其依賴項。 該插件將無法正常工作，請確保您提供了 worker 文件的路徑以及用於在服務器上保存訂閱的方法。';

$app_strings['LBL_HINT_CONFIG_ENABLE_NOTIFICATIONS'] = '為所有用戶開啟 Hint 通知';
$app_strings['LBL_HINT_CONFIG_DISABLE_NOTIFICATIONS'] = '為所有用戶關閉 Hint 通知';
