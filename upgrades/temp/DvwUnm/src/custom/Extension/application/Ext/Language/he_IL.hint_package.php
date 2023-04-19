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
$app_strings['LBL_HINT_COMPANY_SIZE'] = 'גודל חברה';
$app_strings['LBL_HINT_COMPANY_INDUSTRY'] = 'ענף';
$app_strings['LBL_HINT_COMPANY_INDUSTRY_TAGS'] = 'תגיות ענף';
$app_strings['LBL_HINT_COMPANY_LOCATION'] = 'מיקום חברה';
$app_strings['LBL_HINT_COMPANY_DESCRIPTION'] = 'תיאור חברה';
$app_strings['LBL_HINT_COMPANY_FOUNDED_YEAR'] = 'שנת הקמה';
$app_strings['LBL_HINT_COMPANY_FACEBOOK'] = 'דף ה-Facebook של החברה';
$app_strings['LBL_HINT_COMPANY_TWITTER'] = 'חשבון Twitter של החברה';
$app_strings['LBL_HINT_COMPANY_LOGO'] = 'קישור לסמל החברה';
$app_strings['LBL_HINT_COMPANY_PIC'] = 'סמל החברה';
$app_strings['LBL_HINT_CONTACT_PIC'] = 'תמונת איש קשר';
$app_strings['LBL_HINT_COMPANY_WEBSITE'] = 'אתר האינטרנט של החברה';
$app_strings['LBL_HINT_PHOTO'] = 'קישור לתמונה';
$app_strings['LBL_HINT_JOB_2'] = 'עבודות קודמות';
$app_strings['LBL_HINT_EDUCATION'] = 'השכלה';
$app_strings['LBL_HINT_EDUCATION_2'] = 'הרחבת השכלה';
$app_strings['LBL_HINT_TWITTER'] = 'קישור ל-Twitter';
$app_strings['LBL_HINT_FACEBOOK'] = 'קישור ל-Facebook';
$app_strings['LBL_HINT_COMPANY_NAICS_CODE_LABEL'] = 'קוד NAICS';
$app_strings['LBL_HINT_COMPANY_SIC_CODE_LABEL'] = 'קוד SIC';
$app_strings['LBL_HINT_COMPANY_FISCAL_YEAR_END'] = 'סוף שנת כספים';
$app_strings['LBL_HINT_COMPANY_ANNUAL_REVENUE'] = 'הכנסה שנתית';
$app_strings['LBL_HINT_PHONE_1'] = 'טלפון 1';
$app_strings['LBL_HINT_PHONE_2'] = 'טלפון 2';
$app_strings['LBL_HINT_PANEL'] = 'רמז';
$app_strings['LBL_HINT_JOIN_TABLE'] = 'איחוד טבלאות';
$app_strings['LBL_HINT_FULL_NAME'] = 'שם מלא';
$app_strings['LBL_HINT_JOB_TITLE'] = 'תפקיד';
$app_strings['LBL_HINT_OFFICE_PHONE'] = 'טלפון בעבודה';
$app_strings['LBL_HINT_MOBILE_PHONE'] = 'לנייד';
$app_strings['LBL_HINT_OTHER_PHONE'] = 'טלפון נוסף';
$app_strings['LBL_HINT_WEBSITE'] = 'אתר';
$app_strings['LBL_HINT_MSG_OVERWRITE_ALL'] = 'האם ברצונך להחליף את כל הנתונים הקיימים עבור רשומה זו בנתונים החדשים שנמצאו ב-Hint?';
$app_strings['LBL_HINT_MSG_OVERWRITE_FIELD'] = 'האם ברצונך להחליף את {{fieldName}} הקיים עבור רשומה זו ב{{fieldName}} החדש שנמצא ב-Hint?';
$app_strings['LBL_HINT_MSG_TOTAL_OVERWRITE'] = 'כל הנתונים הקשורים לחשבון יימחקו. להמשיך?';
$app_strings['LBL_HINT_CONTACTS_AVATAR'] = 'תמונה';
$app_strings['LBL_HINT_ACCOUNTSETS'] = 'תגי קבוצות חשבונות ב-Hint';

$app_strings['LBL_HINT_LOADING'] = 'טוען...';
$app_strings['LBL_HINT_UNINSTALL_PROCESSING'] = 'הסרת ההתקנה של Hint מתבצעת, נא להמתין';
$app_strings['LBL_HINT_VALUE_ERASED'] = ' הערך נמחק ';
$app_strings['LBL_HINT_VALUE_ERASED_TOOLTIP'] = 'מידע זה נמחק באמצעות בקשת פרטיות נתונים';

$app_strings['LBL_HINT_UNINSTALL_TITLE'] = 'יש לבחור אחת מהאפשרויות הבאות להסרת התקנה:';
$app_strings['LBL_HINT_UNINSTALL_PARTIAL'] = 'הסרת ההתקנה של חבילת Hint בלבד';
$app_strings['LBL_HINT_UNINSTALL_FULL'] = 'הסרת ההתקנה של שירות Hint כולו';
$app_strings['LBL_HINT_UNINSTALL_PARTIAL_DESCRIPTION'] = 'This option will remove the Hint MLP and disable all active subscriptions to Hint Insights. 
Reinstalling Hint will automatically reactivate subscriptions.';
$app_strings['LBL_HINT_UNINSTALL_FULL_DESCRIPTION'] = 'אפשרות זו תבצע הסרת התקנה מלאה של Hint, כולל הסרת ה-MLP ומחיקה של כל נתוני התצורה והמינויים.';
$app_strings['LBL_HINT_UNINSTALL'] = 'הסר התקנה';
$app_strings['LBL_HINT_UNINSTALL_HEADER'] = 'הסר את התקנת Hint';
$app_strings['LBL_HINT_CANCEL'] = 'ביטול';
$app_strings['LBL_HINT_UNINSTALL_WARNING1'] = 'WARNING: Choose this option only if you do not intend to use Hint again in the future. 
Before performing the uninstall, complete a full backup of your Sugar database and put Sugar into maintenance mode. ';
$app_strings['LBL_HINT_UNINSTALL_WARNING2'] = 'ראה ';
$app_strings['LBL_HINT_UNINSTALL_WARNING_LINK'] = 'http://www.sugarcrm.com/crm/product_doc.php?module=HintUninstallingHint';
$app_strings['LBL_HINT_UNINSTALL_WARNING3'] = 'לקבלת הפרטים המלאים לגבי תהליך הסרת ההתקנה.';
$app_strings['LBL_HINT_UNINSTALL_WARNING_MESSAGE1'] = 'בטוח שברצונך להסיר את ההתקנה של חבילת Hint בלבד?';
$app_strings['LBL_HINT_UNINSTALL_WARNING_MESSAGE2'] = 'בטוח שברצונך להסיר את ההתקנה של שירות Hint במלואו?';
$app_strings['LBL_HINT_UNINSTALL_WARNING_MESSAGE2_SUBTEXT'] = '(לתשומת לבך, פעולה זו אינה הפיכה)';

$app_strings['LBL_HINT_CONFIG_TITLE'] = 'שדות Hint';
$app_strings['LBL_HINT_NO_RESULTS_MSG'] = 'לא נמצאו תוצאות.';
$app_strings['LBL_HINT_CONFIG_BASIC_PREVIEW'] = 'פריסת חלונית בסיסית ב-Hint';
$app_strings['LBL_HINT_CONFIG_TAB_ACCOUNTS'] = 'חשבונות';
$app_strings['LBL_HINT_CONFIG_TAB_CONTACTS'] = 'אנשי קשר';
$app_strings['LBL_HINT_CONFIG_TAB_LEADS'] = 'לידים';
$app_strings['LBL_HINT_CONFIG_EXPANDED_PREVIEW'] = 'פריסת חלונית מורחבת ב-Hint';
$app_strings['LBL_HINT_CONFIG_DIR_PAR1'] = 'שנה את סדר השדות על-ידי גרירה ושחרור בתוך מקטעי פריסת חלונית Hint מעל.';
$app_strings['LBL_HINT_CONFIG_DIR_PAR2'] = 'לקבלת הנחיות מפורטות ורשימה של שדות ברירת המחדל, ראה ';
$app_strings['LBL_HINT_CONFIG_RESTORE_TEXT'] = ' לשחזור הגדרות ברירת המחדל עבור המודול ';
$app_strings['LBL_HINT_CONFIG_MODULE_TEXT'] = '.';
$app_strings['LBL_HINT_CONFIG_WARNING_MESSAGE'] = 'בטוח שברצונך לשחזר את ההגדרות לברירת המחדל עבור המודול {{module}}?';
$app_strings['LBL_HINT_CONFIG_RESTORE_BUTTON'] = 'לחץ כאן';
$app_strings['LBL_HINT_CONFIG_NAME'] = 'המדריך לניהול Hint.';
$app_strings['LBL_HINT_CONFIG_FIELD_SELECTOR'] = 'שדות';
$app_strings['LBL_HINT_ENRICHED_FIELD_SUBTITLE'] = 'שדות מועשרים';
$app_strings['LBL_HINT_ENRICHED_FIELD_SUBTITLE_NOTE'] = 'במקטע זה מפורטים כל השדות של Hint ושדות Sugar המועשרים על-ידי Hint. שדות Hint מסומנים בכוכבית (*) ויכולים להופיע בחלונית של Hint רק אם הם מועשרים.';
$app_strings['LBL_HINT_CONFIG_FIELD_NAME'] = 'שם שדה';
$app_strings['LBL_HINT_CONFIG_ENRICH_FIELD'] = 'העשר שדה';
$app_strings['LBL_HINT_CONFIG_FIELD_SHOW1'] = 'הצג ב-Hint';
$app_strings['LBL_HINT_CONFIG_FIELD_SHOW2'] = 'הצג בחלונית Hint';
$app_strings['LBL_HINT_ADDITIONAL_FIELD_SUBTITLE'] = 'שדות Sugar נוספים';
$app_strings['LBL_HINT_ADDITIONAL_FIELD_SUBTITLE_NOTE'] = 'מקטע זה מפרט את כל שדות Sugar שאינם מועשרים על-ידי Hint.';
$app_strings['LBL_HINT_RESYNC_NOTIFICATION_TITLE'] = 'אזהרה';
$app_strings['LBL_HINT_RESYNC_NOTIFICATION_DESCRIPTION'] = 'שים לב: אתה עומד להסתנכרן עם שירות Hint Insights. כל הכתבות הממתינות בתקצירי דוא"ל יאבדו וחדשות קיימות יימחקו מחלונית Insights. כל סוגי ההודעות יחזרו לפעול לאחר השלמת הסנכרון.';

$app_strings['LBL_HINT_ACCOUNT_CHANGE_TITLE'] = 'להלן רשימה של הצעות לחברות הקשורות ל-{{_moduleSingular}} שלך. בחר נתוני חברה להצגה.';
$app_strings['LBL_HINT_NO_ACCOUNT_SELECTED'] = 'לא נבחר חשבון';

$app_strings['LBL_HINT_EMAIL_IMPORT_TITLE'] = 'נמצאו מספר כתובות דוא"ל. בחר את אלה שברצונך לייבא: ';

$app_strings['LBL_HINT_HELP_MESSAGE1'] = 'לא היתה ל-Hint אפשרות למצוא התאמה במערכת על סמך הנתונים שהזנת.';
$app_strings['LBL_HINT_HELP_MESSAGE2'] = 'כדי להגיע לתוצאות הטובות ביותר ב-Hint, מומלץ להזין את השם ואת כתובת הדוא"ל של האדם המדובר.';
$app_strings['LBL_HINT_HELP_MESSAGE3'] = 'כדי להגיע לתוצאות הטובות ביותר ב-Hint, מומלץ להזין את כתובת ה-URL של אתר האינטרנט של החברה.';
$app_strings['LBL_HINT_HELP_DEFAULT_MESSAGE1A'] = "Enter your {{_moduleSingular}}'s company name or website and hint will search for additional data.";
$app_strings['LBL_HINT_HELP_DEFAULT_MESSAGE1B'] = "Enter your {{currentModule}}'s email address and hint will search for additional data.";

$app_strings['LBL_HINT_HISTORY_NONE'] = 'אין נתונים זמינים עבור תצוגה היסטורית';
$app_strings['LBL_HINT_HISTORY_TITLE'] = 'היסטוריית פעילויות';

$app_strings['LBL_HINT_PREVIEW_TITLE'] = 'העשרת נתונים';
$app_strings['LBL_HINT_PREVIEW_LICENSE_EXPIRED'] = 'הרישיון עבור שירות SugarCRM Hint שלך פג. פנה אל מנהל המערכת שלך ב-SugarCRM כדי שיחדש את הרישיון.';
$app_strings['LBL_HINT_PREVIEW_QUESTION'] = 'רוצה ללמוד אילו יתרונות יש ל-SugarCRM Hint עבורך ועבור החברה? פנה אל מנהל המערכת שלך ב-SugarCRM ובקש ממנו שיוסיף את Hint.';
$app_strings['LBL_HINT_PREVIEW_NO_ACCOUNT_INFO'] = 'פרטי החשבון לא נמצאו';
$app_strings['LBL_HINT_PREVIEW_TOOLTIP_TITLE'] = 'נמצאו נתונים מועשרים. לחץ כדי לשמור ברשומה את כל הנתונים המועשרים.';
$app_strings['LBL_HINT_PREVIEW_CLICK_TO_SAVE'] = 'לחץ כדי לשמור ברשומה את הנתונים המועשרים.';

$app_strings['LBL_HINT_CONTACTS_TITLE'] = 'אנשי קשר קשורים';
$app_strings['LBL_HINT_CONTACTS_NONE'] = 'אין אנשי קשר קשורים';

$app_strings['LBL_HINT_NEWS'] = 'חדשות';
$app_strings['LBL_HINT_GENERAL'] = 'כללי';
$app_strings['LBL_HINT_ALL_NEWS'] = 'כל החדשות';
$app_strings['LBL_HINT_FILTER_NEWS'] = 'סינון חדשות';
$app_strings['LBL_HINT_FINANCIAL_NEWS'] = 'פיננסים';
$app_strings['LBL_HINT_PERSONNEL_NEWS'] = 'צוות';
$app_strings['LBL_HINT_PRESS_RELEASES'] = 'הודעות לעיתונות';
$app_strings['LBL_HINT_OTHER_NEWS'] = 'אחר';
$app_strings['LBL_HINT_NEWS_PLACEHOLDER'] = 'חיפוש מאמרי חדשות';
$app_strings['LBL_HINT_NEWS_ALERT'] = 'Hint Insights';
$app_strings['LBL_HINT_NEWS_NONE'] = 'אין חדשות זמינות';
$app_strings['LBL_NEW_NOTIFICATIONS'] = 'הודעות חדשות';
$app_strings['LBL_HINT_DASHLET_ALLOWED1'] = 'You must have a Hint license to view the Hint Insights dashlet.
Ask your administrator about getting a Hint license.';

$app_strings['LBL_HINT_FOR'] = 'עבור';
$app_strings['LBL_HINT_WITH'] = 'ב';
$app_strings['LBL_HINT_SHOW_ME'] = 'הראה לי: ';
$app_strings['LBL_HINT_NOTIFY_ME_BY'] = 'נא להודיע לי ב: ';

$app_strings['LBL_NOTIFICATIONS_TITLE'] = 'מרכז העדפות Hint Insights';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE'] = 'מקש Option לקביעת העדפות';
$app_strings['LBL_HINT_PREFERENCES'] = 'העדפות';
$app_strings['LBL_HINT_MINIMUM_PREFERENCES'] = 'המחיקה מושבתת, חובה לציין לפחות העדפה אחת';
$app_strings['LBL_HINT_MAXIMUM_PREFERENCES'] = 'ההוספה מושבתת, הגעת למרב ההגדרות של העדפות';

$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_DASHLET'] = 'כלול בחלונית Hint Insights';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_BROWSER'] = 'רכיב קופץ כהודעה בשולחן העבודה';
$app_strings['LBL_NOTIFICATIONS_KEY_DESCR_BROWSER'] = 'כדי לקבל הודעות באופן רציף, יש להפעיל את תכונת ההודעות בכל הדפדפנים והמחשבים השולחניים.';
$app_strings['LBL_NOTIFICATIONS_KEY_DESCR_BROWSER_DISABLED'] = 'חלק מהדפדפנים, כגון Internet Explorer, אינם תומכים בהודעות. לא ניתן להפעיל את תכונת ההודעות כשמשתמשים בדפדפן שאינו תומך בה.';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_EMAIL'] = 'שלח התראת דוא"ל מיידית עבור כל הודעה';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_DAILY'] = 'שלח תקציר דוא"ל יומי';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_WEEKLY'] = 'שלח תקציר דוא"ל שבועי';

$app_strings['LBL_NOTIFICATIONS_ERROR_MESSAGE_FAILEDSYNC'] = 'לא ניתן היה לשמור את ההעדפות. בדוק את החיבור למערכת ונסה שוב.';
$app_strings['LBL_NOTIFICATIONS_ERROR_MESSAGE_MISSING_REQUIRED'] = 'בחלק משדות החובה חסר ערך. בדוק את ההעדפות וודא שכל שדות החובה אוכלסו.';

$app_strings['LBL_HINT_PUSH_MESSAGES_PERMISSION'] = 'אתה עומד להפעיל הודעות דפדפן עבור Hint Insights. כדי להמשיך, לחץ על \'אישור\'. לאחר מכן תוצג בדפדפן הודעה עם בקשה לאישור קבלת אירועי הודעות.';
$app_strings['LBL_HINT_PUSH_ERROR'] = 'התוסף של הודעות בדחיפה נרשם עבור {{options.type}} ללא יחסי התלות שלו. התוסף לא יפעל כצפוי. עליך לספק נתיב אל הקובץ של רכיב העובד ופעולת שירות לשמירת המינוי בשרת.';

$app_strings['LBL_HINT_CONFIG_ENABLE_NOTIFICATIONS'] = 'הפעל הודעות Hint עבור כל המשתמשים';
$app_strings['LBL_HINT_CONFIG_DISABLE_NOTIFICATIONS'] = 'השבת הודעות Hint עבור כל המשתמשים';
