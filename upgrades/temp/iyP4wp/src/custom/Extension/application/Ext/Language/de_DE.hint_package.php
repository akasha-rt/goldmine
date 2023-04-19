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
$app_strings['LBL_HINT_COMPANY_SIZE'] = 'Unternehmensgröße';
$app_strings['LBL_HINT_COMPANY_INDUSTRY'] = 'Branche';
$app_strings['LBL_HINT_COMPANY_INDUSTRY_TAGS'] = 'Branchen-Tags';
$app_strings['LBL_HINT_COMPANY_LOCATION'] = 'Unternehmensstandort';
$app_strings['LBL_HINT_COMPANY_DESCRIPTION'] = 'Unternehmensbeschreibung';
$app_strings['LBL_HINT_COMPANY_FOUNDED_YEAR'] = 'Gründungsjahr';
$app_strings['LBL_HINT_COMPANY_FACEBOOK'] = 'Facebook-Seite des Unternehmens';
$app_strings['LBL_HINT_COMPANY_TWITTER'] = 'Twitter-Seite des Unternehmens';
$app_strings['LBL_HINT_COMPANY_LOGO'] = 'Link zum Unternehmenslogo';
$app_strings['LBL_HINT_COMPANY_PIC'] = 'Unternehmenslogo';
$app_strings['LBL_HINT_CONTACT_PIC'] = 'Kontaktfoto';
$app_strings['LBL_HINT_COMPANY_WEBSITE'] = 'Website des Unternehmens';
$app_strings['LBL_HINT_PHOTO'] = 'Foto-Link';
$app_strings['LBL_HINT_JOB_2'] = 'Vorherige Jobs';
$app_strings['LBL_HINT_EDUCATION'] = 'Ausbildung';
$app_strings['LBL_HINT_EDUCATION_2'] = 'Zusatzausbildung';
$app_strings['LBL_HINT_TWITTER'] = 'Twitter-Link';
$app_strings['LBL_HINT_FACEBOOK'] = 'Facebook-Link';
$app_strings['LBL_HINT_COMPANY_NAICS_CODE_LABEL'] = 'NAICS-Code';
$app_strings['LBL_HINT_COMPANY_SIC_CODE_LABEL'] = 'SIC-Code';
$app_strings['LBL_HINT_COMPANY_FISCAL_YEAR_END'] = 'Ende des Geschäftsjahres';
$app_strings['LBL_HINT_COMPANY_ANNUAL_REVENUE'] = 'Jahresumsatz';
$app_strings['LBL_HINT_PHONE_1'] = 'Telefonnummer 1';
$app_strings['LBL_HINT_PHONE_2'] = 'Telefonnummer 2';
$app_strings['LBL_HINT_PANEL'] = 'Hint';
$app_strings['LBL_HINT_JOIN_TABLE'] = 'Tabelle zusammenführen';
$app_strings['LBL_HINT_FULL_NAME'] = 'Vollständiger Name';
$app_strings['LBL_HINT_JOB_TITLE'] = 'Jobtitel';
$app_strings['LBL_HINT_OFFICE_PHONE'] = 'Bürotelefonnummer';
$app_strings['LBL_HINT_MOBILE_PHONE'] = 'Mobiltelefonnummer';
$app_strings['LBL_HINT_OTHER_PHONE'] = 'Sonstige Telefonnummer';
$app_strings['LBL_HINT_WEBSITE'] = 'Website';
$app_strings['LBL_HINT_MSG_OVERWRITE_ALL'] = 'Möchten Sie alle für diesen Datensatz vorhandenen Daten mit den neuen Daten aus Hint überschreiben?';
$app_strings['LBL_HINT_MSG_OVERWRITE_FIELD'] = 'Möchten Sie das vorhandene Feld „{{fieldName}}“ für diesen Datensatz mit einem neuen, in Hint gefundenen {{fieldName}}-Feld überschreiben?';
$app_strings['LBL_HINT_MSG_TOTAL_OVERWRITE'] = 'Alle kontobezogenen Daten werden entfernt. Möchten Sie wirklich fortfahren?';
$app_strings['LBL_HINT_CONTACTS_AVATAR'] = 'Foto';
$app_strings['LBL_HINT_ACCOUNTSETS'] = 'Hint-Kontensatz-Tags';

$app_strings['LBL_HINT_LOADING'] = 'Wird geladen...';
$app_strings['LBL_HINT_UNINSTALL_PROCESSING'] = 'Deinstallation von Hint, bitte warten';
$app_strings['LBL_HINT_VALUE_ERASED'] = ' Wert gelöscht ';
$app_strings['LBL_HINT_VALUE_ERASED_TOOLTIP'] = 'Diese Informationen wurden über eine Datenschutzanfrage gelöscht.';

$app_strings['LBL_HINT_UNINSTALL_TITLE'] = 'Wählen Sie eine der unteren Deinstallationsoptionen aus:';
$app_strings['LBL_HINT_UNINSTALL_PARTIAL'] = 'Nur Hint-Paket deinstallieren';
$app_strings['LBL_HINT_UNINSTALL_FULL'] = 'Hint vollständig deinstallieren';
$app_strings['LBL_HINT_UNINSTALL_PARTIAL_DESCRIPTION'] = 'This option will remove the Hint MLP and disable all active subscriptions to Hint Insights. 
Reinstalling Hint will automatically reactivate subscriptions.';
$app_strings['LBL_HINT_UNINSTALL_FULL_DESCRIPTION'] = 'Diese Option führt eine vollständige Deinstallation von Hint aus, einschließlich dem Entfernen des MLP und dem Löschen aller Konfigurations- und Abonnement-Informationen.';
$app_strings['LBL_HINT_UNINSTALL'] = 'Deinstallieren';
$app_strings['LBL_HINT_UNINSTALL_HEADER'] = 'Hint deinstallieren';
$app_strings['LBL_HINT_CANCEL'] = 'Abbrechen';
$app_strings['LBL_HINT_UNINSTALL_WARNING1'] = 'WARNING: Choose this option only if you do not intend to use Hint again in the future. 
Before performing the uninstall, complete a full backup of your Sugar database and put Sugar into maintenance mode. ';
$app_strings['LBL_HINT_UNINSTALL_WARNING2'] = 'Siehe ';
$app_strings['LBL_HINT_UNINSTALL_WARNING_LINK'] = 'http://www.sugarcrm.com/crm/product_doc.php?module=HintUninstallingHint';
$app_strings['LBL_HINT_UNINSTALL_WARNING3'] = 'für Details zum Deinstallationsvorgang.';
$app_strings['LBL_HINT_UNINSTALL_WARNING_MESSAGE1'] = 'Möchten Sie wirklich nur das Hint-Paket deinstallieren?';
$app_strings['LBL_HINT_UNINSTALL_WARNING_MESSAGE2'] = 'Möchten Sie Hint wirklich vollständig deinstallieren?';
$app_strings['LBL_HINT_UNINSTALL_WARNING_MESSAGE2_SUBTEXT'] = '(HINWEIS: DIESE AKTION KANN NICHT RÜCKGÄNGIG GEMACHT WERDEN.)';

$app_strings['LBL_HINT_CONFIG_TITLE'] = 'Hint-Felder';
$app_strings['LBL_HINT_NO_RESULTS_MSG'] = 'Keine Ergebnisse gefunden.';
$app_strings['LBL_HINT_CONFIG_BASIC_PREVIEW'] = 'Grundlegendes Layout des Hint-Fensters';
$app_strings['LBL_HINT_CONFIG_TAB_ACCOUNTS'] = 'Konten';
$app_strings['LBL_HINT_CONFIG_TAB_CONTACTS'] = 'Kontakte';
$app_strings['LBL_HINT_CONFIG_TAB_LEADS'] = 'Leads';
$app_strings['LBL_HINT_CONFIG_EXPANDED_PREVIEW'] = 'Erweitertes Layout des Hint-Fensters';
$app_strings['LBL_HINT_CONFIG_DIR_PAR1'] = 'Ordnen Sie die Felder neu an, indem Sie sie innerhalb der obigen Layout-Abschnitte des Hint-Fensters mit der Maus ziehen und ablegen.';
$app_strings['LBL_HINT_CONFIG_DIR_PAR2'] = 'Detaillierte Anweisungen und eine Liste der Standardfelder finden Sie ';
$app_strings['LBL_HINT_CONFIG_RESTORE_TEXT'] = ', um Standardeinstellungen für das ';
$app_strings['LBL_HINT_CONFIG_MODULE_TEXT'] = 'Modul wiederherzustellen.';
$app_strings['LBL_HINT_CONFIG_WARNING_MESSAGE'] = 'Möchten Sie die Standardwerte für das {{module}}-Modul wirklich wiederherstellen?';
$app_strings['LBL_HINT_CONFIG_RESTORE_BUTTON'] = 'Klicken Sie hier';
$app_strings['LBL_HINT_CONFIG_NAME'] = 'Hint-Administrationshandbuch';
$app_strings['LBL_HINT_CONFIG_FIELD_SELECTOR'] = 'Felder';
$app_strings['LBL_HINT_ENRICHED_FIELD_SUBTITLE'] = 'Ergänzte Felder';
$app_strings['LBL_HINT_ENRICHED_FIELD_SUBTITLE_NOTE'] = 'Dieser Abschnitt enthält eine Liste aller Hint-Felder und Sugar-Felder, die durch Hint ergänzt wurden. Hint-Felder sind mit einem Sternchen (*) markiert und können nur im Hint-Fenster angezeigt werden, falls Sie ergänzt sind.';
$app_strings['LBL_HINT_CONFIG_FIELD_NAME'] = 'Feldname';
$app_strings['LBL_HINT_CONFIG_ENRICH_FIELD'] = 'Feld ergänzen';
$app_strings['LBL_HINT_CONFIG_FIELD_SHOW1'] = 'In Hint anzeigen';
$app_strings['LBL_HINT_CONFIG_FIELD_SHOW2'] = 'In Hint-Fenster anzeigen';
$app_strings['LBL_HINT_ADDITIONAL_FIELD_SUBTITLE'] = 'Zusätzliche Sugar-Felder';
$app_strings['LBL_HINT_ADDITIONAL_FIELD_SUBTITLE_NOTE'] = 'Dieser Abschnitt enthält eine Liste aller Sugar-Felder, die nicht durch Hint ergänzt sind.';
$app_strings['LBL_HINT_RESYNC_NOTIFICATION_TITLE'] = 'Warnung';
$app_strings['LBL_HINT_RESYNC_NOTIFICATION_DESCRIPTION'] = 'Achtung: Sie sind dabei, mit dem Hint Insights Service zu synchronisieren. Ausstehende E-Mail-Digest-Storys gehen verloren, und vorhandene Neuigkeiten werden aus dem Insights-Dashlet gelöscht. Benachrichtigungen aller Typen werden nach Abschluss der Synchronisierung fortgesetzt.';

$app_strings['LBL_HINT_ACCOUNT_CHANGE_TITLE'] = 'Vorschlagene Unternehmen in Bezug auf Ihr {{_moduleSingular}} sind unten aufgelistet. Wählen Sie anzuzeigende Unternehmensdaten aus.';
$app_strings['LBL_HINT_NO_ACCOUNT_SELECTED'] = 'Kein Konto ausgewählt';

$app_strings['LBL_HINT_EMAIL_IMPORT_TITLE'] = 'Mehrere E-Mails gefunden. Wählen Sie die zu importierenden E-Mail aus:';

$app_strings['LBL_HINT_HELP_MESSAGE1'] = 'Basierend auf den eingegebenen Daten konnte Hint keine Übereinstimmung im System finden.';
$app_strings['LBL_HINT_HELP_MESSAGE2'] = 'Beste Ergebnisse erhalten Sie in Hint mit dem Namen und der E-Mail-Adresse einer Person.';
$app_strings['LBL_HINT_HELP_MESSAGE3'] = 'Beste Ergebnisse erhalten Sie in Hint mit der Website-URL eines Unternehmens.';
$app_strings['LBL_HINT_HELP_DEFAULT_MESSAGE1A'] = "Enter your {{_moduleSingular}}'s company name or website and hint will search for additional data.";
$app_strings['LBL_HINT_HELP_DEFAULT_MESSAGE1B'] = "Enter your {{currentModule}}'s email address and hint will search for additional data.";

$app_strings['LBL_HINT_HISTORY_NONE'] = 'Keine Daten für historische Ansicht verfügbar';
$app_strings['LBL_HINT_HISTORY_TITLE'] = 'Aktivitätsverlauf';

$app_strings['LBL_HINT_PREVIEW_TITLE'] = 'Datenergänzung';
$app_strings['LBL_HINT_PREVIEW_LICENSE_EXPIRED'] = 'Die Lizenz für Ihren SugarCRM Hint-Server ist abgelaufen. Kontaktieren Sie Ihre SugerCRM-Admin, um Ihre Lizenz zu erneuern.';
$app_strings['LBL_HINT_PREVIEW_QUESTION'] = 'Möchten Sie erfahren, was SugarCRM für Sie und Ihr Unternehmen tun kann? Kontaktieren Sie Ihren SugarCRM-Admin, um Hint hinzuzufügen.';
$app_strings['LBL_HINT_PREVIEW_NO_ACCOUNT_INFO'] = 'Kontoinformationen nicht gefunden';
$app_strings['LBL_HINT_PREVIEW_TOOLTIP_TITLE'] = 'Ergänzte Daten gefunden. Klicken Sie, um alle ergänzten Daten in Ihrem Datensatz zu speichern.';
$app_strings['LBL_HINT_PREVIEW_CLICK_TO_SAVE'] = 'Klicken Sie, um ergänzte Daten in Ihrem Datensatz zu speichern.';

$app_strings['LBL_HINT_CONTACTS_TITLE'] = 'Verknüpfte Kontakte';
$app_strings['LBL_HINT_CONTACTS_NONE'] = 'Keine verknüpften Kontakte';

$app_strings['LBL_HINT_NEWS'] = 'Neuigkeiten';
$app_strings['LBL_HINT_GENERAL'] = 'Allgemein';
$app_strings['LBL_HINT_ALL_NEWS'] = 'Alle Neuigkeiten';
$app_strings['LBL_HINT_FILTER_NEWS'] = 'Neuigkeiten filtern';
$app_strings['LBL_HINT_FINANCIAL_NEWS'] = 'Finanzen';
$app_strings['LBL_HINT_PERSONNEL_NEWS'] = 'Personal';
$app_strings['LBL_HINT_PRESS_RELEASES'] = 'Pressemitteilungen';
$app_strings['LBL_HINT_OTHER_NEWS'] = 'Sonstige';
$app_strings['LBL_HINT_NEWS_PLACEHOLDER'] = 'Artikel durchsuchen';
$app_strings['LBL_HINT_NEWS_ALERT'] = 'Hint Insights';
$app_strings['LBL_HINT_NEWS_NONE'] = 'Keine Neuigkeiten verfügbar';
$app_strings['LBL_NEW_NOTIFICATIONS'] = 'Neue Benachrichtigungen';
$app_strings['LBL_HINT_DASHLET_ALLOWED1'] = 'You must have a Hint license to view the Hint Insights dashlet.
Ask your administrator about getting a Hint license.';

$app_strings['LBL_HINT_FOR'] = 'Für';
$app_strings['LBL_HINT_WITH'] = 'mit';
$app_strings['LBL_HINT_SHOW_ME'] = 'Mir anzeigen:';
$app_strings['LBL_HINT_NOTIFY_ME_BY'] = 'Mich benachrichtigen per:';

$app_strings['LBL_NOTIFICATIONS_TITLE'] = 'Hint Insights-Einstellungszentrum';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE'] = 'Einstellungsoptionsschlüssel';
$app_strings['LBL_HINT_PREFERENCES'] = 'Einstellungen';
$app_strings['LBL_HINT_MINIMUM_PREFERENCES'] = 'Löschen deaktiviert; mindestens eine Einstellungsangabe erforderlich';
$app_strings['LBL_HINT_MAXIMUM_PREFERENCES'] = 'Hinzufügen deaktiviert; Sie haben die maximale Einstellungsangaben erreicht.';

$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_DASHLET'] = 'In Hint Insight-Dashlet aufnehmen';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_BROWSER'] = 'Pop-up als Desktop-Benachrichtigung';
$app_strings['LBL_NOTIFICATIONS_KEY_DESCR_BROWSER'] = 'Benachrichtigungen müssen in allen Browsern und auf allen Desktop-Computern aktiviert sein, damit Sie durchgängig Benachrichtigungen erhalten.';
$app_strings['LBL_NOTIFICATIONS_KEY_DESCR_BROWSER_DISABLED'] = 'Einige Browser wie Internet Explorer unterstützen keine Benachrichtigungen. Benachrichtigungen können aktiviert werden, wenn Sie einen Browser nutzen, der dies unterstützt.';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_EMAIL'] = 'Sofortige Alarm-E-Mail für jede Benachrichtigung senden';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_DAILY'] = 'Täglichen E-Mail-Digest senden';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_WEEKLY'] = 'Wöchentlichen E-Mail-Digest senden';

$app_strings['LBL_NOTIFICATIONS_ERROR_MESSAGE_FAILEDSYNC'] = 'Einstellungen konnten nicht gespeichert werden. Überprüfen Sie die Systemverbindung und versuchen Sie es erneut.';
$app_strings['LBL_NOTIFICATIONS_ERROR_MESSAGE_MISSING_REQUIRED'] = 'Einige erforderliche Felder enthalten keinen Wert. Überprüfen Sie Ihre Einstellungen und stellen Sie sicher, dass alle erforderlichen Felder ausgefüllt sind.';

$app_strings['LBL_HINT_PUSH_MESSAGES_PERMISSION'] = 'Sie sind dabei, Browser-Benachrichtigungen für Hint Insights zu aktivieren. Klicken Sie zum Fortfahren auf „Bestätigen“. Ihr Browser fordert Sie daraufhin auf, die Berechtigung zum Empfangen von Benachrichtigungsereignissen zu erteilen.';
$app_strings['LBL_HINT_PUSH_ERROR'] = 'Das Plug-In für Push-Benachrichtigungen wurde für {{options.type}} ohne Abhängigkeiten registriert. Das Plug-In funktioniert dadurch nicht wie vorgesehen. Vergewissern Sie sich, dass Sie einen Pfad zur Arbeiterdatei und eine Methode zum Speichern des Abonnements auf dem Server angeben.';

$app_strings['LBL_HINT_CONFIG_ENABLE_NOTIFICATIONS'] = 'Hint-Benachrichtigungen für alle Benutzer AKTIVIEREN';
$app_strings['LBL_HINT_CONFIG_DISABLE_NOTIFICATIONS'] = 'Hint-Benachrichtigungen für alle Benutzer DEAKTIVIEREN';
