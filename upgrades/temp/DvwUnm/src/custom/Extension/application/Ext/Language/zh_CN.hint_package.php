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
$app_strings['LBL_HINT_COMPANY_SIZE'] = '公司规模';
$app_strings['LBL_HINT_COMPANY_INDUSTRY'] = '行业';
$app_strings['LBL_HINT_COMPANY_INDUSTRY_TAGS'] = '行业标签';
$app_strings['LBL_HINT_COMPANY_LOCATION'] = '公司位置';
$app_strings['LBL_HINT_COMPANY_DESCRIPTION'] = '公司描述';
$app_strings['LBL_HINT_COMPANY_FOUNDED_YEAR'] = '建立年份';
$app_strings['LBL_HINT_COMPANY_FACEBOOK'] = '公司 Facebook';
$app_strings['LBL_HINT_COMPANY_TWITTER'] = '公司 Twitter';
$app_strings['LBL_HINT_COMPANY_LOGO'] = '公司徽标链接';
$app_strings['LBL_HINT_COMPANY_PIC'] = '公司徽标';
$app_strings['LBL_HINT_CONTACT_PIC'] = '联系人照片';
$app_strings['LBL_HINT_COMPANY_WEBSITE'] = '公司网站';
$app_strings['LBL_HINT_PHOTO'] = '照片链接';
$app_strings['LBL_HINT_JOB_2'] = '工作履历';
$app_strings['LBL_HINT_EDUCATION'] = '教育';
$app_strings['LBL_HINT_EDUCATION_2'] = '额外教育';
$app_strings['LBL_HINT_TWITTER'] = 'Twitter 链接';
$app_strings['LBL_HINT_FACEBOOK'] = 'Facebook 链接';
$app_strings['LBL_HINT_COMPANY_NAICS_CODE_LABEL'] = 'NAICS 代码';
$app_strings['LBL_HINT_COMPANY_SIC_CODE_LABEL'] = 'SIC 代码';
$app_strings['LBL_HINT_COMPANY_FISCAL_YEAR_END'] = '财年结束';
$app_strings['LBL_HINT_COMPANY_ANNUAL_REVENUE'] = '年收入';
$app_strings['LBL_HINT_PHONE_1'] = '电话 1';
$app_strings['LBL_HINT_PHONE_2'] = '电话 2';
$app_strings['LBL_HINT_PANEL'] = 'Hint';
$app_strings['LBL_HINT_JOIN_TABLE'] = '联接表';
$app_strings['LBL_HINT_FULL_NAME'] = '全名';
$app_strings['LBL_HINT_JOB_TITLE'] = '职称';
$app_strings['LBL_HINT_OFFICE_PHONE'] = '办公电话';
$app_strings['LBL_HINT_MOBILE_PHONE'] = '手机';
$app_strings['LBL_HINT_OTHER_PHONE'] = '其他电话';
$app_strings['LBL_HINT_WEBSITE'] = '网站';
$app_strings['LBL_HINT_MSG_OVERWRITE_ALL'] = '是否想要用 Hint 中找到的新数据覆盖此记录的所有现有数据？';
$app_strings['LBL_HINT_MSG_OVERWRITE_FIELD'] = '是否想要用 Hint 中找到的新 {{fieldName}} 覆盖此记录的现有 {{fieldName}}？';
$app_strings['LBL_HINT_MSG_TOTAL_OVERWRITE'] = '所有账户相关数据将被删除。是否确定要继续？';
$app_strings['LBL_HINT_CONTACTS_AVATAR'] = '照片';
$app_strings['LBL_HINT_ACCOUNTSETS'] = 'Hint 账户集标签';

$app_strings['LBL_HINT_LOADING'] = '正在加载 ...';
$app_strings['LBL_HINT_UNINSTALL_PROCESSING'] = '正在卸载 Hint，请稍候';
$app_strings['LBL_HINT_VALUE_ERASED'] = ' 值已被擦除 ';
$app_strings['LBL_HINT_VALUE_ERASED_TOOLTIP'] = '此信息已经由数据隐私请求擦除';

$app_strings['LBL_HINT_UNINSTALL_TITLE'] = '请从下面选择一个卸载选项：';
$app_strings['LBL_HINT_UNINSTALL_PARTIAL'] = '仅卸载 Hint 程序包';
$app_strings['LBL_HINT_UNINSTALL_FULL'] = '完全卸载 Hint';
$app_strings['LBL_HINT_UNINSTALL_PARTIAL_DESCRIPTION'] = 'This option will remove the Hint MLP and disable all active subscriptions to Hint Insights. 
Reinstalling Hint will automatically reactivate subscriptions.';
$app_strings['LBL_HINT_UNINSTALL_FULL_DESCRIPTION'] = '此选项将完全卸载 Hint，包括移除 MLP 以及删除所有配置和订阅信息。';
$app_strings['LBL_HINT_UNINSTALL'] = '卸载';
$app_strings['LBL_HINT_UNINSTALL_HEADER'] = '卸载 Hint';
$app_strings['LBL_HINT_CANCEL'] = '取消';
$app_strings['LBL_HINT_UNINSTALL_WARNING1'] = 'WARNING: Choose this option only if you do not intend to use Hint again in the future. 
Before performing the uninstall, complete a full backup of your Sugar database and put Sugar into maintenance mode. ';
$app_strings['LBL_HINT_UNINSTALL_WARNING2'] = '请参阅 ';
$app_strings['LBL_HINT_UNINSTALL_WARNING_LINK'] = 'http://www.sugarcrm.com/crm/product_doc.php?module=HintUninstallingHint';
$app_strings['LBL_HINT_UNINSTALL_WARNING3'] = '以了解有关卸载过程的详细信息。';
$app_strings['LBL_HINT_UNINSTALL_WARNING_MESSAGE1'] = '是否确定仅卸载 Hint 程序包？';
$app_strings['LBL_HINT_UNINSTALL_WARNING_MESSAGE2'] = '是否确定完全卸载 Hint？';
$app_strings['LBL_HINT_UNINSTALL_WARNING_MESSAGE2_SUBTEXT'] = '（注意：您无法撤销此操作）';

$app_strings['LBL_HINT_CONFIG_TITLE'] = 'Hint 字段';
$app_strings['LBL_HINT_NO_RESULTS_MSG'] = '未找到结果。';
$app_strings['LBL_HINT_CONFIG_BASIC_PREVIEW'] = '基本 Hint 面板布局';
$app_strings['LBL_HINT_CONFIG_TAB_ACCOUNTS'] = '账户';
$app_strings['LBL_HINT_CONFIG_TAB_CONTACTS'] = '联系人';
$app_strings['LBL_HINT_CONFIG_TAB_LEADS'] = '线索';
$app_strings['LBL_HINT_CONFIG_EXPANDED_PREVIEW'] = '扩展的 Hint 面板布局';
$app_strings['LBL_HINT_CONFIG_DIR_PAR1'] = '通过在上面的 Hint 面板布局部分中拖放字段，对其进行重新排列。';
$app_strings['LBL_HINT_CONFIG_DIR_PAR2'] = '如需详细说明和默认字段列表，请参阅 ';
$app_strings['LBL_HINT_CONFIG_RESTORE_TEXT'] = ' 以便为 ';
$app_strings['LBL_HINT_CONFIG_MODULE_TEXT'] = '模块恢复默认设置。';
$app_strings['LBL_HINT_CONFIG_WARNING_MESSAGE'] = '是否确定要为 {{module}} 模块恢复默认值？';
$app_strings['LBL_HINT_CONFIG_RESTORE_BUTTON'] = '点击此处';
$app_strings['LBL_HINT_CONFIG_NAME'] = 'Hint 管理指南。';
$app_strings['LBL_HINT_CONFIG_FIELD_SELECTOR'] = '字段';
$app_strings['LBL_HINT_ENRICHED_FIELD_SUBTITLE'] = '已丰富内容的字段';
$app_strings['LBL_HINT_ENRICHED_FIELD_SUBTITLE_NOTE'] = '此部分列出了所有由 Hint 丰富内容的 Hint 字段和 Sugar 字段。Hint 字段标有星号 (*)，只有在其内容被丰富时才能显示在 Hint 面板中。';
$app_strings['LBL_HINT_CONFIG_FIELD_NAME'] = '字段名称';
$app_strings['LBL_HINT_CONFIG_ENRICH_FIELD'] = '丰富字段';
$app_strings['LBL_HINT_CONFIG_FIELD_SHOW1'] = '显示在 Hint 中';
$app_strings['LBL_HINT_CONFIG_FIELD_SHOW2'] = '显示在 Hint 面板中';
$app_strings['LBL_HINT_ADDITIONAL_FIELD_SUBTITLE'] = '额外 Sugar 字段';
$app_strings['LBL_HINT_ADDITIONAL_FIELD_SUBTITLE_NOTE'] = '此部分列出所有未由 Hint 丰富内容的 Sugar 字段。';
$app_strings['LBL_HINT_RESYNC_NOTIFICATION_TITLE'] = '警告';
$app_strings['LBL_HINT_RESYNC_NOTIFICATION_DESCRIPTION'] = '警告：您将与 Hint Insights 服务同步。任何待处理的电子邮件摘要故事都将丢失，且现有新闻将从 Insights dashlet 中清除。同步完成后，所有类型的通知将恢复。';

$app_strings['LBL_HINT_ACCOUNT_CHANGE_TITLE'] = '与您的 {{_moduleSingular}} 相关的建议公司列示如下。选择要显示的公司数据。';
$app_strings['LBL_HINT_NO_ACCOUNT_SELECTED'] = '没有选择账户';

$app_strings['LBL_HINT_EMAIL_IMPORT_TITLE'] = '发现多封电子邮件，选择要导入的电子邮件：';

$app_strings['LBL_HINT_HELP_MESSAGE1'] = '基于输入的数据，Hint 无法在系统中找到匹配项。';
$app_strings['LBL_HINT_HELP_MESSAGE2'] = '使用人员姓名和电子邮件地址可在 Hint 中找到最佳结果。';
$app_strings['LBL_HINT_HELP_MESSAGE3'] = '使用公司网站 url 可在 Hint 中找到最佳结果。';
$app_strings['LBL_HINT_HELP_DEFAULT_MESSAGE1A'] = "Enter your {{_moduleSingular}}'s company name or website and hint will search for additional data.";
$app_strings['LBL_HINT_HELP_DEFAULT_MESSAGE1B'] = "Enter your {{currentModule}}'s email address and hint will search for additional data.";

$app_strings['LBL_HINT_HISTORY_NONE'] = '历史视图没有可用数据';
$app_strings['LBL_HINT_HISTORY_TITLE'] = '活动历史';

$app_strings['LBL_HINT_PREVIEW_TITLE'] = '数据丰富';
$app_strings['LBL_HINT_PREVIEW_LICENSE_EXPIRED'] = '您的 SugarCRM Hint 服务的许可证已过期。请联系您的 SugarCRM 管理员以续订您的许可证。';
$app_strings['LBL_HINT_PREVIEW_QUESTION'] = '想要了解 SugarCRM Hint 可为您和您的公司带来什么助益？请联络您的 SugarCRM 管理员添加 Hint。';
$app_strings['LBL_HINT_PREVIEW_NO_ACCOUNT_INFO'] = '未找到账户信息';
$app_strings['LBL_HINT_PREVIEW_TOOLTIP_TITLE'] = '找到已丰富内容的数据 - 点击以将所有已丰富内容的数据保存到您的记录。';
$app_strings['LBL_HINT_PREVIEW_CLICK_TO_SAVE'] = '点击以将所有已丰富内容的数据保存到您的记录。';

$app_strings['LBL_HINT_CONTACTS_TITLE'] = '相关联系人';
$app_strings['LBL_HINT_CONTACTS_NONE'] = '没有相关联系人';

$app_strings['LBL_HINT_NEWS'] = '新闻';
$app_strings['LBL_HINT_GENERAL'] = '常规';
$app_strings['LBL_HINT_ALL_NEWS'] = '所有新闻';
$app_strings['LBL_HINT_FILTER_NEWS'] = '筛选新闻';
$app_strings['LBL_HINT_FINANCIAL_NEWS'] = '财务';
$app_strings['LBL_HINT_PERSONNEL_NEWS'] = '人事';
$app_strings['LBL_HINT_PRESS_RELEASES'] = '新闻发布';
$app_strings['LBL_HINT_OTHER_NEWS'] = '其他';
$app_strings['LBL_HINT_NEWS_PLACEHOLDER'] = '搜索新闻文章';
$app_strings['LBL_HINT_NEWS_ALERT'] = 'Hint Insights';
$app_strings['LBL_HINT_NEWS_NONE'] = '没有可用新闻';
$app_strings['LBL_NEW_NOTIFICATIONS'] = '新通知';
$app_strings['LBL_HINT_DASHLET_ALLOWED1'] = 'You must have a Hint license to view the Hint Insights dashlet.
Ask your administrator about getting a Hint license.';

$app_strings['LBL_HINT_FOR'] = '对于';
$app_strings['LBL_HINT_WITH'] = '具有';
$app_strings['LBL_HINT_SHOW_ME'] = '想我显示：';
$app_strings['LBL_HINT_NOTIFY_ME_BY'] = '使用以下方式通知我：';

$app_strings['LBL_NOTIFICATIONS_TITLE'] = 'Hint Insights 偏好设置中心';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE'] = '主要偏好设置选项';
$app_strings['LBL_HINT_PREFERENCES'] = '偏好设置';
$app_strings['LBL_HINT_MINIMUM_PREFERENCES'] = '删除已禁用，需要至少一个偏好声明';
$app_strings['LBL_HINT_MAXIMUM_PREFERENCES'] = '添加已禁用，您已达到最多的偏好声明数';

$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_DASHLET'] = '包含在 Hint Insights dashlet 中';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_BROWSER'] = '弹出为桌面通知';
$app_strings['LBL_NOTIFICATIONS_KEY_DESCR_BROWSER'] = '必须在所有浏览器和所有台式电脑上启用通知，以便持续接收通知。';
$app_strings['LBL_NOTIFICATIONS_KEY_DESCR_BROWSER_DISABLED'] = '部分浏览器（如 Internet Explorer）不支持通知。在使用不支持通知的浏览器时，将无法启用通知。';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_EMAIL'] = '为每个通知发送即时电子邮件警报';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_DAILY'] = '发送每日电子邮件摘要';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_WEEKLY'] = '发送每周电子邮件摘要';

$app_strings['LBL_NOTIFICATIONS_ERROR_MESSAGE_FAILEDSYNC'] = '无法保存偏好设置。请检查您的系统连接，然后重试。';
$app_strings['LBL_NOTIFICATIONS_ERROR_MESSAGE_MISSING_REQUIRED'] = '一些必填字段缺少值。请检查您的偏好设置，并确保所有必填字段均已填写。';

$app_strings['LBL_HINT_PUSH_MESSAGES_PERMISSION'] = '您正在为 Hint Insights 启用浏览器通知。点击“执行”以继续。之后，您的浏览器将请求提供权限以允许接收通知事件。';
$app_strings['LBL_HINT_PUSH_ERROR'] = '已为 {{options.type}} 注册推送通知插件，但没有其依赖项。 该插件将无法正常工作，请确保您提供了 worker 文件的路径以及用于在服务器上保存订阅的方法。';

$app_strings['LBL_HINT_CONFIG_ENABLE_NOTIFICATIONS'] = '为所有用户开启 Hint 通知';
$app_strings['LBL_HINT_CONFIG_DISABLE_NOTIFICATIONS'] = '为所有用户关闭 Hint 通知';
