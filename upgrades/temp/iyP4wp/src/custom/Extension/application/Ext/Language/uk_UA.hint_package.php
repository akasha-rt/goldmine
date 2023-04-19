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
$app_strings['LBL_HINT_COMPANY_SIZE'] = 'Розмір компанії';
$app_strings['LBL_HINT_COMPANY_INDUSTRY'] = 'Галузь';
$app_strings['LBL_HINT_COMPANY_INDUSTRY_TAGS'] = 'Галузеві теги';
$app_strings['LBL_HINT_COMPANY_LOCATION'] = 'Місцезнаходження компанії';
$app_strings['LBL_HINT_COMPANY_DESCRIPTION'] = 'Опис компанії';
$app_strings['LBL_HINT_COMPANY_FOUNDED_YEAR'] = 'Рік заснування';
$app_strings['LBL_HINT_COMPANY_FACEBOOK'] = 'Профіль компанії у Facebook';
$app_strings['LBL_HINT_COMPANY_TWITTER'] = 'Профіль компанії у Twitter';
$app_strings['LBL_HINT_COMPANY_LOGO'] = 'Посилання на логотип компанії';
$app_strings['LBL_HINT_COMPANY_PIC'] = 'Логотип компанії';
$app_strings['LBL_HINT_CONTACT_PIC'] = 'Фото контакту';
$app_strings['LBL_HINT_COMPANY_WEBSITE'] = 'Веб-сторінка контакту';
$app_strings['LBL_HINT_PHOTO'] = 'Посилання на фото';
$app_strings['LBL_HINT_JOB_2'] = 'Попередні місця роботи';
$app_strings['LBL_HINT_EDUCATION'] = 'Освіта';
$app_strings['LBL_HINT_EDUCATION_2'] = 'Додаткова освіта';
$app_strings['LBL_HINT_TWITTER'] = 'Посилання на Twitter';
$app_strings['LBL_HINT_FACEBOOK'] = 'Посилання на Facebook';
$app_strings['LBL_HINT_COMPANY_NAICS_CODE_LABEL'] = 'Код NAICS';
$app_strings['LBL_HINT_COMPANY_SIC_CODE_LABEL'] = 'Код SIC';
$app_strings['LBL_HINT_COMPANY_FISCAL_YEAR_END'] = 'Кінець фінансового року';
$app_strings['LBL_HINT_COMPANY_ANNUAL_REVENUE'] = 'Річний дохід';
$app_strings['LBL_HINT_PHONE_1'] = 'Телефон 1';
$app_strings['LBL_HINT_PHONE_2'] = 'Телефон 2';
$app_strings['LBL_HINT_PANEL'] = 'Hint';
$app_strings['LBL_HINT_JOIN_TABLE'] = 'Долучити таблицю';
$app_strings['LBL_HINT_FULL_NAME'] = 'Повне ім’я';
$app_strings['LBL_HINT_JOB_TITLE'] = 'Посада';
$app_strings['LBL_HINT_OFFICE_PHONE'] = 'Робочий телефон';
$app_strings['LBL_HINT_MOBILE_PHONE'] = 'Мобільний';
$app_strings['LBL_HINT_OTHER_PHONE'] = 'Інший телефон';
$app_strings['LBL_HINT_WEBSITE'] = 'Веб-сторінка';
$app_strings['LBL_HINT_MSG_OVERWRITE_ALL'] = 'Перезаписати всі наявні дані в цьому записі та замінити їх новими даними, знайденими в Hint?';
$app_strings['LBL_HINT_MSG_OVERWRITE_FIELD'] = 'Перезаписати наявну {{fieldName}} в цьому записі та замінити її новою {{fieldName}}, знайденою в Hint?';
$app_strings['LBL_HINT_MSG_TOTAL_OVERWRITE'] = 'Усі дані, пов’язані з обліковим записом, буде видалено. Справді продовжити?';
$app_strings['LBL_HINT_CONTACTS_AVATAR'] = 'Фото';
$app_strings['LBL_HINT_ACCOUNTSETS'] = 'Теги груп облікових записів Hint';

$app_strings['LBL_HINT_LOADING'] = 'Завантаження ...';
$app_strings['LBL_HINT_UNINSTALL_PROCESSING'] = 'Видалення Hint, зачекайте';
$app_strings['LBL_HINT_VALUE_ERASED'] = ' Значення видалено ';
$app_strings['LBL_HINT_VALUE_ERASED_TOOLTIP'] = 'Цю інформацію видалено на прохання, пов’язане з конфіденційністю даних';

$app_strings['LBL_HINT_UNINSTALL_TITLE'] = 'Виберіть один із варіантів видалення нижче:';
$app_strings['LBL_HINT_UNINSTALL_PARTIAL'] = 'Видалити лише пакет Hint';
$app_strings['LBL_HINT_UNINSTALL_FULL'] = 'Видалити Hint повністю';
$app_strings['LBL_HINT_UNINSTALL_PARTIAL_DESCRIPTION'] = 'This option will remove the Hint MLP and disable all active subscriptions to Hint Insights. 
Reinstalling Hint will automatically reactivate subscriptions.';
$app_strings['LBL_HINT_UNINSTALL_FULL_DESCRIPTION'] = 'Якщо вибрати цей варіант, Hint буде повністю видалено, зокрема буде видалено MLP та всі відомості про конфігурацію й підписки.';
$app_strings['LBL_HINT_UNINSTALL'] = 'Видалити';
$app_strings['LBL_HINT_UNINSTALL_HEADER'] = 'Видалити Hint';
$app_strings['LBL_HINT_CANCEL'] = 'Скасувати';
$app_strings['LBL_HINT_UNINSTALL_WARNING1'] = 'WARNING: Choose this option only if you do not intend to use Hint again in the future. 
Before performing the uninstall, complete a full backup of your Sugar database and put Sugar into maintenance mode. ';
$app_strings['LBL_HINT_UNINSTALL_WARNING2'] = 'Див. ';
$app_strings['LBL_HINT_UNINSTALL_WARNING_LINK'] = 'http://www.sugarcrm.com/crm/product_doc.php?module=HintUninstallingHint';
$app_strings['LBL_HINT_UNINSTALL_WARNING3'] = ', щоб дізнатися докладніше про процес видалення.';
$app_strings['LBL_HINT_UNINSTALL_WARNING_MESSAGE1'] = 'Справді видалити лише пакет Hint?';
$app_strings['LBL_HINT_UNINSTALL_WARNING_MESSAGE2'] = 'Справді повністю видалити Hint?';
$app_strings['LBL_HINT_UNINSTALL_WARNING_MESSAGE2_SUBTEXT'] = '(ПРИМІТКА. ВИ НЕ МОЖЕТЕ СКАСУВАТИ ЦЮ ДІЮ)';

$app_strings['LBL_HINT_CONFIG_TITLE'] = 'Поля Hint';
$app_strings['LBL_HINT_NO_RESULTS_MSG'] = 'Результатів не знайдено.';
$app_strings['LBL_HINT_CONFIG_BASIC_PREVIEW'] = 'Базова схема панелі Hint';
$app_strings['LBL_HINT_CONFIG_TAB_ACCOUNTS'] = 'Облікові записи';
$app_strings['LBL_HINT_CONFIG_TAB_CONTACTS'] = 'Контакти';
$app_strings['LBL_HINT_CONFIG_TAB_LEADS'] = 'Потенційні контакти';
$app_strings['LBL_HINT_CONFIG_EXPANDED_PREVIEW'] = 'Схема розгорнутої панелі Hint';
$app_strings['LBL_HINT_CONFIG_DIR_PAR1'] = 'Упорядкуйте поля шляхом їх перетягування між розділами схеми панелі Panel Hint.';
$app_strings['LBL_HINT_CONFIG_DIR_PAR2'] = 'Докладніші інструкції та список стандартних полів див. у ';
$app_strings['LBL_HINT_CONFIG_RESTORE_TEXT'] = ' щоб відновити стандартні налаштування для ';
$app_strings['LBL_HINT_CONFIG_MODULE_TEXT'] = 'модуля.';
$app_strings['LBL_HINT_CONFIG_WARNING_MESSAGE'] = 'Справді відновити стандартні налаштування для модуля {{module}}?';
$app_strings['LBL_HINT_CONFIG_RESTORE_BUTTON'] = 'Натисніть тут';
$app_strings['LBL_HINT_CONFIG_NAME'] = 'Посібник з адміністрування Hint.';
$app_strings['LBL_HINT_CONFIG_FIELD_SELECTOR'] = 'Поля';
$app_strings['LBL_HINT_ENRICHED_FIELD_SUBTITLE'] = 'Доповнені поля';
$app_strings['LBL_HINT_ENRICHED_FIELD_SUBTITLE_NOTE'] = 'У цьому розділі перелічено всі поля Hint та Sugar, наповнення яких виконується за допомогою Hint. Поля Hint позначені зірочкою (*) і після оптимізації можуть відображатися лише в панелі Hint.';
$app_strings['LBL_HINT_CONFIG_FIELD_NAME'] = 'Назва поля';
$app_strings['LBL_HINT_CONFIG_ENRICH_FIELD'] = 'Заповнити поле';
$app_strings['LBL_HINT_CONFIG_FIELD_SHOW1'] = 'Показати в Hint';
$app_strings['LBL_HINT_CONFIG_FIELD_SHOW2'] = 'Показати на панелі Hint';
$app_strings['LBL_HINT_ADDITIONAL_FIELD_SUBTITLE'] = 'Додаткові поля Sugar';
$app_strings['LBL_HINT_ADDITIONAL_FIELD_SUBTITLE_NOTE'] = 'У цьому розділі перелічено всі поля Sugar, які не було заповнено за допомогою Hint.';
$app_strings['LBL_HINT_RESYNC_NOTIFICATION_TITLE'] = 'Попередження';
$app_strings['LBL_HINT_RESYNC_NOTIFICATION_DESCRIPTION'] = 'Увага! Ви маєте намір виконати синхронізацію з аналітичною службою Hint. Усі електронні листи, які очікують відправлення, буде втрачено, а наявні новини – видалено з розділу Insights. Після завершення синхронізації сповіщення усіх видів поновляться.';

$app_strings['LBL_HINT_ACCOUNT_CHANGE_TITLE'] = 'Нижче перелічено ймовірні компанії, пов’язані з вашим {{_moduleSingular}}. Виберіть дані компанії для відображення.';
$app_strings['LBL_HINT_NO_ACCOUNT_SELECTED'] = 'Не вибрано жодного облікового запису';

$app_strings['LBL_HINT_EMAIL_IMPORT_TITLE'] = 'Знайдено кілька електронних листів, виберіть листи для імпорту: ';

$app_strings['LBL_HINT_HELP_MESSAGE1'] = 'На основі введених даних службі Hint не вдалося знайти збіг у системі.';
$app_strings['LBL_HINT_HELP_MESSAGE2'] = 'Найкращі результати в Hint можна отримати при введенні імені та адреси електронної пошти особи.';
$app_strings['LBL_HINT_HELP_MESSAGE3'] = 'Найкращі результати в Hint можна отримати при введенні url-адреси веб-сторінки компанії.';
$app_strings['LBL_HINT_HELP_DEFAULT_MESSAGE1A'] = "Enter your {{_moduleSingular}}'s company name or website and hint will search for additional data.";
$app_strings['LBL_HINT_HELP_DEFAULT_MESSAGE1B'] = "Enter your {{currentModule}}'s email address and hint will search for additional data.";

$app_strings['LBL_HINT_HISTORY_NONE'] = 'Немає даних для перегляду історії';
$app_strings['LBL_HINT_HISTORY_TITLE'] = 'Історія дій';

$app_strings['LBL_HINT_PREVIEW_TITLE'] = 'Заповнення даних';
$app_strings['LBL_HINT_PREVIEW_LICENSE_EXPIRED'] = 'Термін дії ліцензії на користування службою SugarCRM Hint закінчився. Зверніться до свого адміністратора SugarCRM, щоб поновити її.';
$app_strings['LBL_HINT_PREVIEW_QUESTION'] = 'Хочете дізнатися, чим служба SugarCRM Hint може бути корисною для вас і вашої компанії? Зверніться до свого адміністратора SugarCRM, щоб додати Hint.';
$app_strings['LBL_HINT_PREVIEW_NO_ACCOUNT_INFO'] = 'Відомості контрагента не знайдено';
$app_strings['LBL_HINT_PREVIEW_TOOLTIP_TITLE'] = 'Виявлено доповнені дані. Натисніть, щоб зберегти всі доповнені дані у своєму записі.';
$app_strings['LBL_HINT_PREVIEW_CLICK_TO_SAVE'] = 'Натисніть, щоб зберегти доповнені дані у своєму записі.';

$app_strings['LBL_HINT_CONTACTS_TITLE'] = 'Пов’язані контакти';
$app_strings['LBL_HINT_CONTACTS_NONE'] = 'Немає пов’язаних контактів';

$app_strings['LBL_HINT_NEWS'] = 'Новини';
$app_strings['LBL_HINT_GENERAL'] = 'Загальні';
$app_strings['LBL_HINT_ALL_NEWS'] = 'Усі новини';
$app_strings['LBL_HINT_FILTER_NEWS'] = 'Фільтрувати новини';
$app_strings['LBL_HINT_FINANCIAL_NEWS'] = 'Фінанси';
$app_strings['LBL_HINT_PERSONNEL_NEWS'] = 'Персонал';
$app_strings['LBL_HINT_PRESS_RELEASES'] = 'Прес-релізи';
$app_strings['LBL_HINT_OTHER_NEWS'] = 'Інше';
$app_strings['LBL_HINT_NEWS_PLACEHOLDER'] = 'Шукати статті з новинами';
$app_strings['LBL_HINT_NEWS_ALERT'] = 'Аналітика Hint';
$app_strings['LBL_HINT_NEWS_NONE'] = 'Новин немає';
$app_strings['LBL_NEW_NOTIFICATIONS'] = 'Нові сповіщення';
$app_strings['LBL_HINT_DASHLET_ALLOWED1'] = 'You must have a Hint license to view the Hint Insights dashlet.
Ask your administrator about getting a Hint license.';

$app_strings['LBL_HINT_FOR'] = 'Для';
$app_strings['LBL_HINT_WITH'] = 'з';
$app_strings['LBL_HINT_SHOW_ME'] = 'Показати: ';
$app_strings['LBL_HINT_NOTIFY_ME_BY'] = 'Сповістити мене через: ';

$app_strings['LBL_NOTIFICATIONS_TITLE'] = 'Центр управління вподобаннями Hint Insights';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE'] = 'Клавіша вибору вподобань';
$app_strings['LBL_HINT_PREFERENCES'] = 'Вподобання';
$app_strings['LBL_HINT_MINIMUM_PREFERENCES'] = 'Видалення вимкнено, потрібна щонайменше одна заява про вподобання';
$app_strings['LBL_HINT_MAXIMUM_PREFERENCES'] = 'Додавання вимкнено; досягнуто максимальної кількості заяв про вподобання';

$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_DASHLET'] = 'Включити в Hint Insights';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_BROWSER'] = 'Спливне сповіщення на робочому столі';
$app_strings['LBL_NOTIFICATIONS_KEY_DESCR_BROWSER'] = 'Щоб регулярно отримувати сповіщення, їх слід увімкнути в усіх браузерах та на всіх настільних комп’ютерах.';
$app_strings['LBL_NOTIFICATIONS_KEY_DESCR_BROWSER_DISABLED'] = 'Деякі браузери на кшталт Internet Explorer не підтримують сповіщень. Якщо браузер не підтримує сповіщень, ввімкнути їх неможливо.';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_EMAIL'] = 'Надсилати миттєве повідомлення на електронну пошту про кожне сповіщення';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_DAILY'] = 'Надсилати щоденний дайджест електронною поштою';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_WEEKLY'] = 'Надсилати щотижневий дайджест електронною поштою';

$app_strings['LBL_NOTIFICATIONS_ERROR_MESSAGE_FAILEDSYNC'] = 'Не вдалося зберегти вподобання. Перевірте підключення до системи та спробуйте ще раз.';
$app_strings['LBL_NOTIFICATIONS_ERROR_MESSAGE_MISSING_REQUIRED'] = 'Заповнено не всі обов’язкові поля. Перевірте вподобання та переконайтеся, що заповнено всі обов’язкові поля.';

$app_strings['LBL_HINT_PUSH_MESSAGES_PERMISSION'] = 'Ви збираєтеся ввімкнути сповіщення в браузері для Hint Insights. Щоб продовжити, натисніть «Підтвердити». Після цього браузер видасть запит на дозвіл на отримання сповіщень.';
$app_strings['LBL_HINT_PUSH_ERROR'] = 'Плагін Push-сповіщень зареєстровано для {{options.type}} без залежних об’єктів. Розширення не працюватиме належним чином. Упевніться, що ви вказали шлях до робочого файлу і спосіб збереження підписки на сервері.';

$app_strings['LBL_HINT_CONFIG_ENABLE_NOTIFICATIONS'] = 'Увімкнути сповіщення Hint для всіх користувачів';
$app_strings['LBL_HINT_CONFIG_DISABLE_NOTIFICATIONS'] = 'Вимкнути сповіщення Hint для всіх користувачів';
