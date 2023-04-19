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
$app_strings['LBL_HINT_COMPANY_SIZE'] = 'Mărimea companiei';
$app_strings['LBL_HINT_COMPANY_INDUSTRY'] = 'Industrie';
$app_strings['LBL_HINT_COMPANY_INDUSTRY_TAGS'] = 'Etichete industrie';
$app_strings['LBL_HINT_COMPANY_LOCATION'] = 'Locația companiei';
$app_strings['LBL_HINT_COMPANY_DESCRIPTION'] = 'Descrierea companiei';
$app_strings['LBL_HINT_COMPANY_FOUNDED_YEAR'] = 'Anul înființării';
$app_strings['LBL_HINT_COMPANY_FACEBOOK'] = 'Facebook companie';
$app_strings['LBL_HINT_COMPANY_TWITTER'] = 'Twitter companie';
$app_strings['LBL_HINT_COMPANY_LOGO'] = 'Link siglă companie';
$app_strings['LBL_HINT_COMPANY_PIC'] = 'Siglă companie';
$app_strings['LBL_HINT_CONTACT_PIC'] = 'Fotografie persoană de contact';
$app_strings['LBL_HINT_COMPANY_WEBSITE'] = 'Site web companie';
$app_strings['LBL_HINT_PHOTO'] = 'Link fotografie';
$app_strings['LBL_HINT_JOB_2'] = 'Locuri de muncă anterioare';
$app_strings['LBL_HINT_EDUCATION'] = 'Educație';
$app_strings['LBL_HINT_EDUCATION_2'] = 'Educație suplimentară';
$app_strings['LBL_HINT_TWITTER'] = 'Link Twitter';
$app_strings['LBL_HINT_FACEBOOK'] = 'Link Facebook';
$app_strings['LBL_HINT_COMPANY_NAICS_CODE_LABEL'] = 'Cod NAICS';
$app_strings['LBL_HINT_COMPANY_SIC_CODE_LABEL'] = 'Cod SIC';
$app_strings['LBL_HINT_COMPANY_FISCAL_YEAR_END'] = 'Sfârșitul anului fiscal';
$app_strings['LBL_HINT_COMPANY_ANNUAL_REVENUE'] = 'Venit anual';
$app_strings['LBL_HINT_PHONE_1'] = 'Telefon 1';
$app_strings['LBL_HINT_PHONE_2'] = 'Telefon 2';
$app_strings['LBL_HINT_PANEL'] = 'Hint';
$app_strings['LBL_HINT_JOIN_TABLE'] = 'Tabel de unire';
$app_strings['LBL_HINT_FULL_NAME'] = 'Nume complet';
$app_strings['LBL_HINT_JOB_TITLE'] = 'Funcție';
$app_strings['LBL_HINT_OFFICE_PHONE'] = 'Telefon birou';
$app_strings['LBL_HINT_MOBILE_PHONE'] = 'Mobil';
$app_strings['LBL_HINT_OTHER_PHONE'] = 'Alt telefon';
$app_strings['LBL_HINT_WEBSITE'] = 'Site web';
$app_strings['LBL_HINT_MSG_OVERWRITE_ALL'] = 'Doriți să suprascrieți toate datele existente pentru această înregistrare cu noile date găsite în Hint?';
$app_strings['LBL_HINT_MSG_OVERWRITE_FIELD'] = 'Doriți să suprascrieți câmpul {{fieldName}} existent pentru această înregistrare cu noul câmp {{fieldName}} găsit în Hint?';
$app_strings['LBL_HINT_MSG_TOTAL_OVERWRITE'] = 'Toate datele legate de cont vor fi eliminate. Sunteți sigur că doriți să continuați?';
$app_strings['LBL_HINT_CONTACTS_AVATAR'] = 'Fotografie';
$app_strings['LBL_HINT_ACCOUNTSETS'] = 'Etichete seturi de conturi Hint';

$app_strings['LBL_HINT_LOADING'] = 'Se încarcă ...';
$app_strings['LBL_HINT_UNINSTALL_PROCESSING'] = 'Dezinstalare Hint, vă rugăm așteptați';
$app_strings['LBL_HINT_VALUE_ERASED'] = ' Valoare ștearsă ';
$app_strings['LBL_HINT_VALUE_ERASED_TOOLTIP'] = 'Aceste informații au fost șterse prin cererea de confidențialitate a datelor';

$app_strings['LBL_HINT_UNINSTALL_TITLE'] = 'Selectați una dintre opțiunile de dezinstalare de mai jos:';
$app_strings['LBL_HINT_UNINSTALL_PARTIAL'] = 'Dezinstalați numai pachetul Hint';
$app_strings['LBL_HINT_UNINSTALL_FULL'] = 'Dezinstalați Hint complet';
$app_strings['LBL_HINT_UNINSTALL_PARTIAL_DESCRIPTION'] = 'This option will remove the Hint MLP and disable all active subscriptions to Hint Insights. 
Reinstalling Hint will automatically reactivate subscriptions.';
$app_strings['LBL_HINT_UNINSTALL_FULL_DESCRIPTION'] = 'Această opțiune va efectua o dezinstalare completă a Hint, inclusiv eliminarea MLP și ștergerea tuturor informațiilor de configurare și abonament.';
$app_strings['LBL_HINT_UNINSTALL'] = 'Dezinstalare';
$app_strings['LBL_HINT_UNINSTALL_HEADER'] = 'Dezinstalare Hint';
$app_strings['LBL_HINT_CANCEL'] = 'Anulare';
$app_strings['LBL_HINT_UNINSTALL_WARNING1'] = 'WARNING: Choose this option only if you do not intend to use Hint again in the future. 
Before performing the uninstall, complete a full backup of your Sugar database and put Sugar into maintenance mode. ';
$app_strings['LBL_HINT_UNINSTALL_WARNING2'] = 'Consultați ';
$app_strings['LBL_HINT_UNINSTALL_WARNING_LINK'] = 'http://www.sugarcrm.com/crm/product_doc.php?module=HintUninstallingHint';
$app_strings['LBL_HINT_UNINSTALL_WARNING3'] = 'pentru detalii despre procesul de dezinstalare.';
$app_strings['LBL_HINT_UNINSTALL_WARNING_MESSAGE1'] = 'Sigur doriți să dezinstalați doar pachetul Hint?';
$app_strings['LBL_HINT_UNINSTALL_WARNING_MESSAGE2'] = 'Sigur doriți să dezinstalați Hint complet?';
$app_strings['LBL_HINT_UNINSTALL_WARNING_MESSAGE2_SUBTEXT'] = '(NOTĂ: NU PUTEȚI ANULA ACEASTĂ ACȚIUNE)';

$app_strings['LBL_HINT_CONFIG_TITLE'] = 'Câmpuri Hint';
$app_strings['LBL_HINT_NO_RESULTS_MSG'] = 'Nu s-au găsit rezultate.';
$app_strings['LBL_HINT_CONFIG_BASIC_PREVIEW'] = 'Aspect panou Hint de bază';
$app_strings['LBL_HINT_CONFIG_TAB_ACCOUNTS'] = 'Conturi';
$app_strings['LBL_HINT_CONFIG_TAB_CONTACTS'] = 'Contacte';
$app_strings['LBL_HINT_CONFIG_TAB_LEADS'] = 'Clienți potențiali';
$app_strings['LBL_HINT_CONFIG_EXPANDED_PREVIEW'] = 'Aspect panou Hint extins';
$app_strings['LBL_HINT_CONFIG_DIR_PAR1'] = 'Rearanjați câmpurile prin glisare și fixare în secțiunile Aspect panou Hint de mai sus.';
$app_strings['LBL_HINT_CONFIG_DIR_PAR2'] = 'Pentru instrucțiuni detaliate și o listă de câmpuri implicite, consultați ';
$app_strings['LBL_HINT_CONFIG_RESTORE_TEXT'] = ' pentru a restabili setările implicite pentru ';
$app_strings['LBL_HINT_CONFIG_MODULE_TEXT'] = 'modul.';
$app_strings['LBL_HINT_CONFIG_WARNING_MESSAGE'] = 'Sunteți sigur că doriți să reveniți la setările implicite pentru modulul {{module}}?';
$app_strings['LBL_HINT_CONFIG_RESTORE_BUTTON'] = 'Faceți clic aici';
$app_strings['LBL_HINT_CONFIG_NAME'] = 'Ghid de administrare Hint.';
$app_strings['LBL_HINT_CONFIG_FIELD_SELECTOR'] = 'Câmpuri';
$app_strings['LBL_HINT_ENRICHED_FIELD_SUBTITLE'] = 'Câmpuri îmbogățite';
$app_strings['LBL_HINT_ENRICHED_FIELD_SUBTITLE_NOTE'] = 'Această secțiune listează toate câmpurile Hint și câmpurile Sugar care sunt îmbogățite de Hint. Câmpurile Hint sunt marcate cu un asterisc (*) și pot fi afișate în panoul Hint numai dacă sunt îmbogățite.';
$app_strings['LBL_HINT_CONFIG_FIELD_NAME'] = 'Nume câmp';
$app_strings['LBL_HINT_CONFIG_ENRICH_FIELD'] = 'Îmbogățire câmp';
$app_strings['LBL_HINT_CONFIG_FIELD_SHOW1'] = 'Afișare în Hint';
$app_strings['LBL_HINT_CONFIG_FIELD_SHOW2'] = 'Afișare în panoul Hint';
$app_strings['LBL_HINT_ADDITIONAL_FIELD_SUBTITLE'] = 'Câmpuri Sugar suplimentare';
$app_strings['LBL_HINT_ADDITIONAL_FIELD_SUBTITLE_NOTE'] = 'Această secțiune listează toate câmpurile Sugar care nu sunt îmbogățite de Hint.';
$app_strings['LBL_HINT_RESYNC_NOTIFICATION_TITLE'] = 'Avertisment';
$app_strings['LBL_HINT_RESYNC_NOTIFICATION_DESCRIPTION'] = 'Atenție: Sunteți pe cale să vă sincronizați cu serviciul Hint Insights. Toate articole rezumate prin e-mail în așteptare se vor pierde, iar știrile existente vor fi șterse din tabloul de bord Insights. Notificările de toate tipurile vor fi reluate după finalizarea sincronizării.';

$app_strings['LBL_HINT_ACCOUNT_CHANGE_TITLE'] = 'Companiile sugerate legate de {{_moduleSingular}} sunt listate mai jos. Selectați datele companiilor de afișat.';
$app_strings['LBL_HINT_NO_ACCOUNT_SELECTED'] = 'Nu este selectat niciun cont';

$app_strings['LBL_HINT_EMAIL_IMPORT_TITLE'] = 'Au fost găsite mai multe e-mailuri, selectați e-mailurile de importat: ';

$app_strings['LBL_HINT_HELP_MESSAGE1'] = 'Pe baza datelor introduse, Hint nu a reușit să găsească o potrivire în sistem.';
$app_strings['LBL_HINT_HELP_MESSAGE2'] = 'Cele mai bune rezultate din Hint pot fi găsite cu numele și adresa de e-mail a unei persoane.';
$app_strings['LBL_HINT_HELP_MESSAGE3'] = 'Cele mai bune rezultate din Hint pot fi găsite cu adresa URL a site-ului web al companiei.';
$app_strings['LBL_HINT_HELP_DEFAULT_MESSAGE1A'] = "Enter your {{_moduleSingular}}'s company name or website and hint will search for additional data.";
$app_strings['LBL_HINT_HELP_DEFAULT_MESSAGE1B'] = "Enter your {{currentModule}}'s email address and hint will search for additional data.";

$app_strings['LBL_HINT_HISTORY_NONE'] = 'Nu există date disponibile pentru vizualizarea istorică';
$app_strings['LBL_HINT_HISTORY_TITLE'] = 'Istoricul activităților';

$app_strings['LBL_HINT_PREVIEW_TITLE'] = 'Îmbogățirea datelor';
$app_strings['LBL_HINT_PREVIEW_LICENSE_EXPIRED'] = 'Licența pentru serviciul dvs. SugarCRM Hint a expirat. Contactați administratorul SugarCRM pentru a vă reînnoi licența.';
$app_strings['LBL_HINT_PREVIEW_QUESTION'] = 'Doriți să vedeți ce poate face SugarCRM Hint pentru dvs. și compania dvs.? Contactați administratorul SugarCRM pentru a adăuga Hint.';
$app_strings['LBL_HINT_PREVIEW_NO_ACCOUNT_INFO'] = 'Informațiile contului nu au fost găsite';
$app_strings['LBL_HINT_PREVIEW_TOOLTIP_TITLE'] = 'Au fost găsite date îmbogățite - faceți clic pentru a salva toate datele îmbogățite în înregistrarea dvs.';
$app_strings['LBL_HINT_PREVIEW_CLICK_TO_SAVE'] = 'Faceți clic pentru a salva datele îmbogățite în înregistrarea dvs.';

$app_strings['LBL_HINT_CONTACTS_TITLE'] = 'Contacte corelate';
$app_strings['LBL_HINT_CONTACTS_NONE'] = 'Contacte necorelate';

$app_strings['LBL_HINT_NEWS'] = 'Știri';
$app_strings['LBL_HINT_GENERAL'] = 'Generalități';
$app_strings['LBL_HINT_ALL_NEWS'] = 'Toate știrile';
$app_strings['LBL_HINT_FILTER_NEWS'] = 'Filtrați știrile';
$app_strings['LBL_HINT_FINANCIAL_NEWS'] = 'Financiare';
$app_strings['LBL_HINT_PERSONNEL_NEWS'] = 'Personal';
$app_strings['LBL_HINT_PRESS_RELEASES'] = 'Comunicate de presă';
$app_strings['LBL_HINT_OTHER_NEWS'] = 'Altele';
$app_strings['LBL_HINT_NEWS_PLACEHOLDER'] = 'Căutați articolele de știri';
$app_strings['LBL_HINT_NEWS_ALERT'] = 'Hint Insights';
$app_strings['LBL_HINT_NEWS_NONE'] = 'Nu există știri disponibile';
$app_strings['LBL_NEW_NOTIFICATIONS'] = 'Notificări noi';
$app_strings['LBL_HINT_DASHLET_ALLOWED1'] = 'You must have a Hint license to view the Hint Insights dashlet.
Ask your administrator about getting a Hint license.';

$app_strings['LBL_HINT_FOR'] = 'Pentru';
$app_strings['LBL_HINT_WITH'] = 'cu';
$app_strings['LBL_HINT_SHOW_ME'] = 'Arată-mi: ';
$app_strings['LBL_HINT_NOTIFY_ME_BY'] = 'Doresc notificare prin: ';

$app_strings['LBL_NOTIFICATIONS_TITLE'] = 'Centru de preferință Hint Insights';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE'] = 'Tastă opțiune de preferință';
$app_strings['LBL_HINT_PREFERENCES'] = 'Preferințe';
$app_strings['LBL_HINT_MINIMUM_PREFERENCES'] = 'Ștergere dezactivată, este necesară cel puțin o declarație de preferință';
$app_strings['LBL_HINT_MAXIMUM_PREFERENCES'] = 'Adăugare dezactivată, ați atins maximum de declarații de preferință';

$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_DASHLET'] = 'Includeți în tabloul de bord Hint Insights';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_BROWSER'] = 'Avertizare pop-up ca notificare desktop';
$app_strings['LBL_NOTIFICATIONS_KEY_DESCR_BROWSER'] = 'Notificările trebuie activate pe toate browserele și pe toate computerele de birou pentru a primi în mod constant notificări.';
$app_strings['LBL_NOTIFICATIONS_KEY_DESCR_BROWSER_DISABLED'] = 'Unele browsere, cum ar fi Internet Explorer, nu acceptă notificări. Notificările nu pot fi activate atunci când se utilizează un browser care nu acceptă notificări.';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_EMAIL'] = 'Trimiteți alertă prin e-mail instantanee pentru fiecare notificare';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_DAILY'] = 'Trimiteți un rezumat zilnic prin e-mail';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_WEEKLY'] = 'Trimiteți un rezumat săptămânal prin e-mail';

$app_strings['LBL_NOTIFICATIONS_ERROR_MESSAGE_FAILEDSYNC'] = 'Preferințele nu au putut fi salvate. Verificați conexiunea la sistem și încercați din nou.';
$app_strings['LBL_NOTIFICATIONS_ERROR_MESSAGE_MISSING_REQUIRED'] = 'Lipsește o valoare din unele câmpuri obligatorii. Verificați preferințele dvs. și asigurați-vă că toate câmpurile obligatorii sunt completate.';

$app_strings['LBL_HINT_PUSH_MESSAGES_PERMISSION'] = 'Sunteți pe cale să activați notificările browserului pentru Hint Insights. Faceți clic pe Confirmare pentru a continua. Browserul dvs. vă va cere apoi permisiunea pentru primirea evenimentelor de notificare.';
$app_strings['LBL_HINT_PUSH_ERROR'] = 'Pluginul de Notificări push a fost înregistrat pentru {{options.type}} fără dependențele sale. Pluginul nu va funcționa așa cum s-a intenționat. Asigurați-vă că furnizați o cale către fișierul de lucru și o metodă pentru salvarea abonamentului pe server.';

$app_strings['LBL_HINT_CONFIG_ENABLE_NOTIFICATIONS'] = 'Porniți notificările Hint pentru toți utilizatorii';
$app_strings['LBL_HINT_CONFIG_DISABLE_NOTIFICATIONS'] = 'Opriți notificările Hint pentru toți utilizatorii';
