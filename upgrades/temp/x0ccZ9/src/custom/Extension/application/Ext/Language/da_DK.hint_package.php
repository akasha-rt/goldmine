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
$app_strings['LBL_HINT_COMPANY_SIZE'] = 'Virksomhedsstørrelse';
$app_strings['LBL_HINT_COMPANY_INDUSTRY'] = 'Branche';
$app_strings['LBL_HINT_COMPANY_INDUSTRY_TAGS'] = 'Branchetags';
$app_strings['LBL_HINT_COMPANY_LOCATION'] = 'Virksomhedens beliggenhed';
$app_strings['LBL_HINT_COMPANY_DESCRIPTION'] = 'Beskrivelse af virksomhed';
$app_strings['LBL_HINT_COMPANY_FOUNDED_YEAR'] = 'Stiftelsesår';
$app_strings['LBL_HINT_COMPANY_FACEBOOK'] = 'Virksomhedens Facebook';
$app_strings['LBL_HINT_COMPANY_TWITTER'] = 'Virksomhedens Twitter';
$app_strings['LBL_HINT_COMPANY_LOGO'] = 'Link til virksomhedslogo';
$app_strings['LBL_HINT_COMPANY_PIC'] = 'Virksomhedslogo';
$app_strings['LBL_HINT_CONTACT_PIC'] = 'Kontaktfoto';
$app_strings['LBL_HINT_COMPANY_WEBSITE'] = 'Virksomhedens websted';
$app_strings['LBL_HINT_PHOTO'] = 'Link til foto';
$app_strings['LBL_HINT_JOB_2'] = 'Tidligere stillinger';
$app_strings['LBL_HINT_EDUCATION'] = 'Uddannelse';
$app_strings['LBL_HINT_EDUCATION_2'] = 'Efteruddannelse';
$app_strings['LBL_HINT_TWITTER'] = 'Link til Twitter';
$app_strings['LBL_HINT_FACEBOOK'] = 'Link til Facebook';
$app_strings['LBL_HINT_COMPANY_NAICS_CODE_LABEL'] = 'NAICS-kode';
$app_strings['LBL_HINT_COMPANY_SIC_CODE_LABEL'] = 'SIC-kode';
$app_strings['LBL_HINT_COMPANY_FISCAL_YEAR_END'] = 'Regnskabsårets udgang';
$app_strings['LBL_HINT_COMPANY_ANNUAL_REVENUE'] = 'Årsomsætning';
$app_strings['LBL_HINT_PHONE_1'] = 'Telefon 1';
$app_strings['LBL_HINT_PHONE_2'] = 'Telefon 2';
$app_strings['LBL_HINT_PANEL'] = 'Hint';
$app_strings['LBL_HINT_JOIN_TABLE'] = 'Sammenføj tabel';
$app_strings['LBL_HINT_FULL_NAME'] = 'Fuldt navn';
$app_strings['LBL_HINT_JOB_TITLE'] = 'Stillingsbetegnelse';
$app_strings['LBL_HINT_OFFICE_PHONE'] = 'Kontortelefon';
$app_strings['LBL_HINT_MOBILE_PHONE'] = 'Mobil';
$app_strings['LBL_HINT_OTHER_PHONE'] = 'Anden telefon';
$app_strings['LBL_HINT_WEBSITE'] = 'Websted';
$app_strings['LBL_HINT_MSG_OVERWRITE_ALL'] = 'Vil du overskrive alle eksisterende data for dette register med de nye data fra Hint?';
$app_strings['LBL_HINT_MSG_OVERWRITE_FIELD'] = 'Vil du overskrive den eksisterende {{fieldName}} for dette register med den nye {{fieldName}} fra Hint?';
$app_strings['LBL_HINT_MSG_TOTAL_OVERWRITE'] = 'Alle kontorelaterede data fjernes. Vil du fortsætte?';
$app_strings['LBL_HINT_CONTACTS_AVATAR'] = 'Foto';
$app_strings['LBL_HINT_ACCOUNTSETS'] = 'Tags for Hint-kontosæt';

$app_strings['LBL_HINT_LOADING'] = 'Indlæser ...';
$app_strings['LBL_HINT_UNINSTALL_PROCESSING'] = 'Afinstallerer Hint, vent venligst';
$app_strings['LBL_HINT_VALUE_ERASED'] = ' Værdi slettet ';
$app_strings['LBL_HINT_VALUE_ERASED_TOOLTIP'] = 'Disse oplysninger blev slettet pga. en anmodning om databeskyttelse';

$app_strings['LBL_HINT_UNINSTALL_TITLE'] = 'Vælg en af nedenstående mulighederne for afinstallation:';
$app_strings['LBL_HINT_UNINSTALL_PARTIAL'] = 'Afinstallér kun Hint-pakke';
$app_strings['LBL_HINT_UNINSTALL_FULL'] = 'Afinstallér Hint fuldstændigt';
$app_strings['LBL_HINT_UNINSTALL_PARTIAL_DESCRIPTION'] = 'This option will remove the Hint MLP and disable all active subscriptions to Hint Insights. 
Reinstalling Hint will automatically reactivate subscriptions.';
$app_strings['LBL_HINT_UNINSTALL_FULL_DESCRIPTION'] = 'Denne valgmulighed udfører en fuld afinstallation af Hint, herunder fjernelse af MLP og sletning af alle konfigurations- og abonnementsoplysninger.';
$app_strings['LBL_HINT_UNINSTALL'] = 'Afinstallér';
$app_strings['LBL_HINT_UNINSTALL_HEADER'] = 'Afinstallér Hint';
$app_strings['LBL_HINT_CANCEL'] = 'Annullér';
$app_strings['LBL_HINT_UNINSTALL_WARNING1'] = 'WARNING: Choose this option only if you do not intend to use Hint again in the future. 
Before performing the uninstall, complete a full backup of your Sugar database and put Sugar into maintenance mode. ';
$app_strings['LBL_HINT_UNINSTALL_WARNING2'] = 'Se ';
$app_strings['LBL_HINT_UNINSTALL_WARNING_LINK'] = 'http://www.sugarcrm.com/crm/product_doc.php?module=HintUninstallingHint';
$app_strings['LBL_HINT_UNINSTALL_WARNING3'] = 'vedr. detaljer for afinstalleringsprocessen.';
$app_strings['LBL_HINT_UNINSTALL_WARNING_MESSAGE1'] = 'Vil du kun afinstallere Hint-pakken?';
$app_strings['LBL_HINT_UNINSTALL_WARNING_MESSAGE2'] = 'Vil du afinstallere Hint fuldstændigt?';
$app_strings['LBL_HINT_UNINSTALL_WARNING_MESSAGE2_SUBTEXT'] = '(BEMÆRK: DU KAN IKKE FORTRYDE DENNE HANDLING)';

$app_strings['LBL_HINT_CONFIG_TITLE'] = 'Hint-felter';
$app_strings['LBL_HINT_NO_RESULTS_MSG'] = 'Ingen resultater blev fundet.';
$app_strings['LBL_HINT_CONFIG_BASIC_PREVIEW'] = 'Grundlayout af Hint-panel';
$app_strings['LBL_HINT_CONFIG_TAB_ACCOUNTS'] = 'Konti';
$app_strings['LBL_HINT_CONFIG_TAB_CONTACTS'] = 'Kontakter';
$app_strings['LBL_HINT_CONFIG_TAB_LEADS'] = 'Kundeemner';
$app_strings['LBL_HINT_CONFIG_EXPANDED_PREVIEW'] = 'Udvidet layout af Hint-panel';
$app_strings['LBL_HINT_CONFIG_DIR_PAR1'] = 'Omarrangér felterne ved at trække og slippe dem i sektionerne i Hint-panellayoutet ovenfor.';
$app_strings['LBL_HINT_CONFIG_DIR_PAR2'] = 'Find detaljerede instruktioner og en liste over standardfelter i ';
$app_strings['LBL_HINT_CONFIG_RESTORE_TEXT'] = ' for at gendanne standardindstillinger for ';
$app_strings['LBL_HINT_CONFIG_MODULE_TEXT'] = 'modul.';
$app_strings['LBL_HINT_CONFIG_WARNING_MESSAGE'] = 'Vil du gendanne standardinstillingerne for modulet {{module}}?';
$app_strings['LBL_HINT_CONFIG_RESTORE_BUTTON'] = 'Klik her';
$app_strings['LBL_HINT_CONFIG_NAME'] = 'Guiden Hint-administration.';
$app_strings['LBL_HINT_CONFIG_FIELD_SELECTOR'] = 'Felter';
$app_strings['LBL_HINT_ENRICHED_FIELD_SUBTITLE'] = 'Forbedrede felter';
$app_strings['LBL_HINT_ENRICHED_FIELD_SUBTITLE_NOTE'] = 'Dette afsnit opfører alle Hint-felter og Sugar-felter, der er forbedret af Hint. Hint-felter markeres med en stjerne (*) og kan kun vises på Hint-panelet, hvis de forbedres.';
$app_strings['LBL_HINT_CONFIG_FIELD_NAME'] = 'Feltnavn';
$app_strings['LBL_HINT_CONFIG_ENRICH_FIELD'] = 'Forbedr felt';
$app_strings['LBL_HINT_CONFIG_FIELD_SHOW1'] = 'Vis i Hint';
$app_strings['LBL_HINT_CONFIG_FIELD_SHOW2'] = 'Vis på Hint-panelet';
$app_strings['LBL_HINT_ADDITIONAL_FIELD_SUBTITLE'] = 'Yderligere Sugar-felter';
$app_strings['LBL_HINT_ADDITIONAL_FIELD_SUBTITLE_NOTE'] = 'Afsnittet opfører alle Sugar-felter, der ikke er forbedret af Hint.';
$app_strings['LBL_HINT_RESYNC_NOTIFICATION_TITLE'] = 'Advarsel';
$app_strings['LBL_HINT_RESYNC_NOTIFICATION_DESCRIPTION'] = 'Forsigtig: Du er ved at synkronisere til tjenesten Hint Insights. Alle afventende e-mailoversigtshistorier går tabt, og eksisterende nyheder ryddes fra Insights-dashlet. Meddelelser af alle typer genoptages, når synkroniseringen er fuldført.';

$app_strings['LBL_HINT_ACCOUNT_CHANGE_TITLE'] = 'Foreslåede virksomheder i forbindelse med dit {{_moduleSingular}} opføres herunder. Vælg virksomhedsdata til visning.';
$app_strings['LBL_HINT_NO_ACCOUNT_SELECTED'] = 'Ingen konto er valgt';

$app_strings['LBL_HINT_EMAIL_IMPORT_TITLE'] = 'Der er fundet flere e-mails. Vælg e-mails til import: ';

$app_strings['LBL_HINT_HELP_MESSAGE1'] = 'På grundlag af de indtastede data kunne Hint ikke finde et match i systemet.';
$app_strings['LBL_HINT_HELP_MESSAGE2'] = 'De bedste resultater i Hint kan findes med en persons navn og e-mailadresse.';
$app_strings['LBL_HINT_HELP_MESSAGE3'] = 'De bedste resultater i Hint kan findes med URL\'en til virksomhedens websted.';
$app_strings['LBL_HINT_HELP_DEFAULT_MESSAGE1A'] = "Enter your {{_moduleSingular}}'s company name or website and hint will search for additional data.";
$app_strings['LBL_HINT_HELP_DEFAULT_MESSAGE1B'] = "Enter your {{currentModule}}'s email address and hint will search for additional data.";

$app_strings['LBL_HINT_HISTORY_NONE'] = 'Ingen data tilgængelige til historisk visning';
$app_strings['LBL_HINT_HISTORY_TITLE'] = 'Aktivitetshistorik';

$app_strings['LBL_HINT_PREVIEW_TITLE'] = 'Dataforbedring';
$app_strings['LBL_HINT_PREVIEW_LICENSE_EXPIRED'] = 'Licensen til tjenesten SugarCRM Hint er udløbet. Kontakt din SugarCRM-administrator for at forny din licens.';
$app_strings['LBL_HINT_PREVIEW_QUESTION'] = 'Vil du se, hvad SugarCRM Hint kan gøre for dig og din virksomhed? Kontakt din SugarCRM-administrator for at tilføje Hint.';
$app_strings['LBL_HINT_PREVIEW_NO_ACCOUNT_INFO'] = 'Kontooplysninger ikke fundet';
$app_strings['LBL_HINT_PREVIEW_TOOLTIP_TITLE'] = 'Forbedrede data fundet - klik for at gemme alle forbedrede data i dit register.';
$app_strings['LBL_HINT_PREVIEW_CLICK_TO_SAVE'] = 'Klik for at gemme forbedrede data i dit register.';

$app_strings['LBL_HINT_CONTACTS_TITLE'] = 'Tilknyttede kontakter';
$app_strings['LBL_HINT_CONTACTS_NONE'] = 'Ingen tilknyttede kontakter';

$app_strings['LBL_HINT_NEWS'] = 'Nyheder';
$app_strings['LBL_HINT_GENERAL'] = 'Generelt';
$app_strings['LBL_HINT_ALL_NEWS'] = 'Alle nyheder';
$app_strings['LBL_HINT_FILTER_NEWS'] = 'Filtrér nyheder';
$app_strings['LBL_HINT_FINANCIAL_NEWS'] = 'Økonomi';
$app_strings['LBL_HINT_PERSONNEL_NEWS'] = 'Personale';
$app_strings['LBL_HINT_PRESS_RELEASES'] = 'Pressemeddelelser';
$app_strings['LBL_HINT_OTHER_NEWS'] = 'Andet';
$app_strings['LBL_HINT_NEWS_PLACEHOLDER'] = 'Søg i nyhedsartikler';
$app_strings['LBL_HINT_NEWS_ALERT'] = 'Hint Insights';
$app_strings['LBL_HINT_NEWS_NONE'] = 'Ingen nyheder tilgængelige';
$app_strings['LBL_NEW_NOTIFICATIONS'] = 'Nye meddelelser';
$app_strings['LBL_HINT_DASHLET_ALLOWED1'] = 'You must have a Hint license to view the Hint Insights dashlet.
Ask your administrator about getting a Hint license.';

$app_strings['LBL_HINT_FOR'] = 'Til';
$app_strings['LBL_HINT_WITH'] = 'med';
$app_strings['LBL_HINT_SHOW_ME'] = 'Vis mig: ';
$app_strings['LBL_HINT_NOTIFY_ME_BY'] = 'Giv mig besked pr.: ';

$app_strings['LBL_NOTIFICATIONS_TITLE'] = 'Hint Insights-præferencecenter';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE'] = 'Alternativ tast for præference';
$app_strings['LBL_HINT_PREFERENCES'] = 'Præferencer';
$app_strings['LBL_HINT_MINIMUM_PREFERENCES'] = 'Sletning deaktiveret. Der kræves mindst én præferencesætning';
$app_strings['LBL_HINT_MAXIMUM_PREFERENCES'] = 'Tilføjelse deaktiveret. Maks. antal præferencesætninger nået';

$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_DASHLET'] = 'Inkludér i Hint Insights-dashlet';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_BROWSER'] = 'Pop op som meddelelse på skrivebordet';
$app_strings['LBL_NOTIFICATIONS_KEY_DESCR_BROWSER'] = 'Meddelelser skal aktiveres på alle browsere og alle desktop-computere for at modtage meddelelser konsekvent.';
$app_strings['LBL_NOTIFICATIONS_KEY_DESCR_BROWSER_DISABLED'] = 'Visse browsere, f.eks. Internet Explorer, understøtter ikke meddelelser. Meddelelser kan ikke aktiveres, når der bruges en browser, der ikke understøtter meddelelser.';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_EMAIL'] = 'Send øjeblikkelig besked pr. e-mail for hver meddelelse';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_DAILY'] = 'Send en daglig e-mailoversigt';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_WEEKLY'] = 'Send en ugentlig e-mailoversigt';

$app_strings['LBL_NOTIFICATIONS_ERROR_MESSAGE_FAILEDSYNC'] = 'Præferencer kun ikke gemmes. Kontrollér dit systems forbindelse, og prøv igen.';
$app_strings['LBL_NOTIFICATIONS_ERROR_MESSAGE_MISSING_REQUIRED'] = 'Nogle obligatoriske felter mangler en værdi. Kontrollér dine præferencer, og sørg for, at alle obligatoriske felter er udfyldt.';

$app_strings['LBL_HINT_PUSH_MESSAGES_PERMISSION'] = 'Du er ved at aktivere browsermeddelelser for Hint Insights. Klik på Bekræft for at gå videre. Din browser beder dig så om tilladelse til modtagelse af meddelelser om begivenheder.';
$app_strings['LBL_HINT_PUSH_ERROR'] = 'Pluginet til pushmeddelelser er registreret for {{options.type}} uden dennes afhængigheder. Pluginet fungerer ikke som beregnet. Sørg for at opgive en sti til arbejdsfilen og en metode til at gemme abonnementet på serveren.';

$app_strings['LBL_HINT_CONFIG_ENABLE_NOTIFICATIONS'] = 'Slå Hint-meddelelser til for alle brugere';
$app_strings['LBL_HINT_CONFIG_DISABLE_NOTIFICATIONS'] = 'Slå Hint-meddelelser fra for alle brugere';
