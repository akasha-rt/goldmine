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
$app_strings['LBL_HINT_COMPANY_SIZE'] = 'Selskapsstørrelse';
$app_strings['LBL_HINT_COMPANY_INDUSTRY'] = 'Bransje';
$app_strings['LBL_HINT_COMPANY_INDUSTRY_TAGS'] = 'Bransjeetiketter';
$app_strings['LBL_HINT_COMPANY_LOCATION'] = 'Selskapsplassering';
$app_strings['LBL_HINT_COMPANY_DESCRIPTION'] = 'Selskapsbeskrivelse';
$app_strings['LBL_HINT_COMPANY_FOUNDED_YEAR'] = 'År grunnlagt';
$app_strings['LBL_HINT_COMPANY_FACEBOOK'] = 'Selskap Facebook';
$app_strings['LBL_HINT_COMPANY_TWITTER'] = 'Selskap Twitter';
$app_strings['LBL_HINT_COMPANY_LOGO'] = 'Selskapslogolenke';
$app_strings['LBL_HINT_COMPANY_PIC'] = 'Selskapslogo';
$app_strings['LBL_HINT_CONTACT_PIC'] = 'Kontaktfoto';
$app_strings['LBL_HINT_COMPANY_WEBSITE'] = 'Selskapsnettsted';
$app_strings['LBL_HINT_PHOTO'] = 'Fotolenke';
$app_strings['LBL_HINT_JOB_2'] = 'Forrige jobber';
$app_strings['LBL_HINT_EDUCATION'] = 'Utdanning';
$app_strings['LBL_HINT_EDUCATION_2'] = 'Utdanning tillegg';
$app_strings['LBL_HINT_TWITTER'] = 'Twitter-lenke';
$app_strings['LBL_HINT_FACEBOOK'] = 'Facebook-lenke';
$app_strings['LBL_HINT_COMPANY_NAICS_CODE_LABEL'] = 'NAICS-kode';
$app_strings['LBL_HINT_COMPANY_SIC_CODE_LABEL'] = 'SIC-kode';
$app_strings['LBL_HINT_COMPANY_FISCAL_YEAR_END'] = 'FY slutt';
$app_strings['LBL_HINT_COMPANY_ANNUAL_REVENUE'] = 'Årlig inntekt';
$app_strings['LBL_HINT_PHONE_1'] = 'Telefon 1';
$app_strings['LBL_HINT_PHONE_2'] = 'Telefon 2';
$app_strings['LBL_HINT_PANEL'] = 'Hint';
$app_strings['LBL_HINT_JOIN_TABLE'] = 'Bli med tabell';
$app_strings['LBL_HINT_FULL_NAME'] = 'Fullt navn';
$app_strings['LBL_HINT_JOB_TITLE'] = 'Jobbtittel';
$app_strings['LBL_HINT_OFFICE_PHONE'] = 'Kontortelefon';
$app_strings['LBL_HINT_MOBILE_PHONE'] = 'Mobil';
$app_strings['LBL_HINT_OTHER_PHONE'] = 'Annen telefon';
$app_strings['LBL_HINT_WEBSITE'] = 'Nettsted';
$app_strings['LBL_HINT_MSG_OVERWRITE_ALL'] = 'Vil du overskrive alle eksisterende data for denne oppføringen med de nye dataene i Hint?';
$app_strings['LBL_HINT_MSG_OVERWRITE_FIELD'] = 'Vil du overskrive eksisterende {{fieldName}} for denne oppføringen med ny {{fieldName}} funnet i Hint?';
$app_strings['LBL_HINT_MSG_TOTAL_OVERWRITE'] = 'Alle kontorelaterte data vil bli fjernet. Er du sikker på at du vil fortsette?';
$app_strings['LBL_HINT_CONTACTS_AVATAR'] = 'Bilde';
$app_strings['LBL_HINT_ACCOUNTSETS'] = 'Hint kontosett etiketter';

$app_strings['LBL_HINT_LOADING'] = 'Laster ...';
$app_strings['LBL_HINT_UNINSTALL_PROCESSING'] = 'Avinstallerer Hint';
$app_strings['LBL_HINT_VALUE_ERASED'] = ' Verdi slettet ';
$app_strings['LBL_HINT_VALUE_ERASED_TOOLTIP'] = 'Denne informasjonen ble slettet via datavernforespørsel';

$app_strings['LBL_HINT_UNINSTALL_TITLE'] = 'Velg et av avinstalleringsalternativene nedenfra:';
$app_strings['LBL_HINT_UNINSTALL_PARTIAL'] = 'Avinstaller bare Hint-pakke';
$app_strings['LBL_HINT_UNINSTALL_FULL'] = 'Avinstaller Hint helt';
$app_strings['LBL_HINT_UNINSTALL_PARTIAL_DESCRIPTION'] = 'This option will remove the Hint MLP and disable all active subscriptions to Hint Insights. 
Reinstalling Hint will automatically reactivate subscriptions.';
$app_strings['LBL_HINT_UNINSTALL_FULL_DESCRIPTION'] = 'Dette alternativet vil utføre en full avinstallering av Hint, inkludert fjerning av MLP og sletting av all konfigurasjons- og abonnementsinformasjon.';
$app_strings['LBL_HINT_UNINSTALL'] = 'Avinstaller';
$app_strings['LBL_HINT_UNINSTALL_HEADER'] = 'Avinstaller Hint';
$app_strings['LBL_HINT_CANCEL'] = 'Avbryt';
$app_strings['LBL_HINT_UNINSTALL_WARNING1'] = 'WARNING: Choose this option only if you do not intend to use Hint again in the future. 
Before performing the uninstall, complete a full backup of your Sugar database and put Sugar into maintenance mode. ';
$app_strings['LBL_HINT_UNINSTALL_WARNING2'] = 'Se ';
$app_strings['LBL_HINT_UNINSTALL_WARNING_LINK'] = 'http://www.sugarcrm.com/crm/product_doc.php?module=HintUninstallingHint';
$app_strings['LBL_HINT_UNINSTALL_WARNING3'] = 'for detaljer om avinstallering.';
$app_strings['LBL_HINT_UNINSTALL_WARNING_MESSAGE1'] = 'Er du sikker på at du bare vil avinstallere Hint-pakken?';
$app_strings['LBL_HINT_UNINSTALL_WARNING_MESSAGE2'] = 'Er du sikker på at du vil avinstallere Hint-pakken helt?';
$app_strings['LBL_HINT_UNINSTALL_WARNING_MESSAGE2_SUBTEXT'] = '(MERK: DU KAN IKKE ANGRE DENNE HANDLINGEN)';

$app_strings['LBL_HINT_CONFIG_TITLE'] = 'Hint felt';
$app_strings['LBL_HINT_NO_RESULTS_MSG'] = 'Ingen resultater ble funnet.';
$app_strings['LBL_HINT_CONFIG_BASIC_PREVIEW'] = 'Grunnleggende Hint-panellayout';
$app_strings['LBL_HINT_CONFIG_TAB_ACCOUNTS'] = 'Kontoer';
$app_strings['LBL_HINT_CONFIG_TAB_CONTACTS'] = 'Kontakter';
$app_strings['LBL_HINT_CONFIG_TAB_LEADS'] = 'Kundeemner';
$app_strings['LBL_HINT_CONFIG_EXPANDED_PREVIEW'] = 'Forventet Hint-panellayout';
$app_strings['LBL_HINT_CONFIG_DIR_PAR1'] = 'Omorganiser feltene ved å dra og slippe innenfor hintpanel-oppsettdelene over.';
$app_strings['LBL_HINT_CONFIG_DIR_PAR2'] = 'For detaljerte instruksjoner og en liste over standardfelt, se ';
$app_strings['LBL_HINT_CONFIG_RESTORE_TEXT'] = ' for å gjenopprette standardinnstillinger for ';
$app_strings['LBL_HINT_CONFIG_MODULE_TEXT'] = 'modul.';
$app_strings['LBL_HINT_CONFIG_WARNING_MESSAGE'] = 'Er du sikker på at du vil gjenopprette til standarder for {{module}} -modulen ?';
$app_strings['LBL_HINT_CONFIG_RESTORE_BUTTON'] = 'Klikk her';
$app_strings['LBL_HINT_CONFIG_NAME'] = 'Hint-administrasjonsveiledning.';
$app_strings['LBL_HINT_CONFIG_FIELD_SELECTOR'] = 'Felt';
$app_strings['LBL_HINT_ENRICHED_FIELD_SUBTITLE'] = 'Berikede felt';
$app_strings['LBL_HINT_ENRICHED_FIELD_SUBTITLE_NOTE'] = 'Dette avsnittet lister alle Hint-felt og Sugar-felt som berikes av Hint. Hint-felt er merket med en stjerne (*) og kan bare vises i Hint-panelet hvis de er beriket.';
$app_strings['LBL_HINT_CONFIG_FIELD_NAME'] = 'Feltnavn';
$app_strings['LBL_HINT_CONFIG_ENRICH_FIELD'] = 'Berik felt';
$app_strings['LBL_HINT_CONFIG_FIELD_SHOW1'] = 'Vis i Hint';
$app_strings['LBL_HINT_CONFIG_FIELD_SHOW2'] = 'Vis i Hint-panel';
$app_strings['LBL_HINT_ADDITIONAL_FIELD_SUBTITLE'] = 'Ekstra Sugar-felt';
$app_strings['LBL_HINT_ADDITIONAL_FIELD_SUBTITLE_NOTE'] = 'Dette avsnittet lister alle Sugar-felt som ikke er beriket av Hint.';
$app_strings['LBL_HINT_RESYNC_NOTIFICATION_TITLE'] = 'Advarsel';
$app_strings['LBL_HINT_RESYNC_NOTIFICATION_DESCRIPTION'] = 'Forsiktig: Du er i ferd med å synkronisere med Hint Insights-tjenesten. Ventende e-postsammendragshistorier forsvinner, og eksisterende nyheter vil bli fjernet fra Insights-dashleten. Varsler av alle typer vil gjenopptas etter at synkroniseringen fullføres.';

$app_strings['LBL_HINT_ACCOUNT_CHANGE_TITLE'] = 'Foreslåtte selskaper relatert til din {{_moduleSingular}} er oppført nedenfor. Velg selskapsdata å vise.';
$app_strings['LBL_HINT_NO_ACCOUNT_SELECTED'] = 'Ingen konto er valgt';

$app_strings['LBL_HINT_EMAIL_IMPORT_TITLE'] = 'Flere e-poster funnet, velg e-poster å importere: ';

$app_strings['LBL_HINT_HELP_MESSAGE1'] = 'Basert på angitte data kunne ikke hint finne en match i systemet.';
$app_strings['LBL_HINT_HELP_MESSAGE2'] = 'Beste resultater i hint kan bli funnet med en persons navn og e-postadresse.';
$app_strings['LBL_HINT_HELP_MESSAGE3'] = 'Best resultater i hint kan bli funnet med selskapets nettadresse.';
$app_strings['LBL_HINT_HELP_DEFAULT_MESSAGE1A'] = "Enter your {{_moduleSingular}}'s company name or website and hint will search for additional data.";
$app_strings['LBL_HINT_HELP_DEFAULT_MESSAGE1B'] = "Enter your {{currentModule}}'s email address and hint will search for additional data.";

$app_strings['LBL_HINT_HISTORY_NONE'] = 'Ingen data tilgjengelig for historisk visning';
$app_strings['LBL_HINT_HISTORY_TITLE'] = 'Aktivitetshistorikk';

$app_strings['LBL_HINT_PREVIEW_TITLE'] = 'Databerikelse';
$app_strings['LBL_HINT_PREVIEW_LICENSE_EXPIRED'] = 'Lisensen for din SugarCRM Hint-tjeneste er utløpt. Kontakt din SugarCRM-administrator for å fornye lisensen din.';
$app_strings['LBL_HINT_PREVIEW_QUESTION'] = 'Vil du se hva SugarCRM Hint kan gjøre for deg og selskapet ditt? Kontakt din SugarCRM-administrator for å legge til Hint.';
$app_strings['LBL_HINT_PREVIEW_NO_ACCOUNT_INFO'] = 'Kontoinformasjon ikke funnet';
$app_strings['LBL_HINT_PREVIEW_TOOLTIP_TITLE'] = 'Berikede data funnet - klikk for å lagre alle berikede data til oppføringen din.';
$app_strings['LBL_HINT_PREVIEW_CLICK_TO_SAVE'] = 'Klikk for å lagre berikede data til oppføringen din.';

$app_strings['LBL_HINT_CONTACTS_TITLE'] = 'Relaterte kontakter';
$app_strings['LBL_HINT_CONTACTS_NONE'] = 'Ingen relaterte kontakter';

$app_strings['LBL_HINT_NEWS'] = 'Nyheter';
$app_strings['LBL_HINT_GENERAL'] = 'Generelt';
$app_strings['LBL_HINT_ALL_NEWS'] = 'Alle nyheter';
$app_strings['LBL_HINT_FILTER_NEWS'] = 'Filtrer nyheter';
$app_strings['LBL_HINT_FINANCIAL_NEWS'] = 'Økonomi';
$app_strings['LBL_HINT_PERSONNEL_NEWS'] = 'Personell';
$app_strings['LBL_HINT_PRESS_RELEASES'] = 'Pressemeldinger';
$app_strings['LBL_HINT_OTHER_NEWS'] = 'Annet';
$app_strings['LBL_HINT_NEWS_PLACEHOLDER'] = 'Søk i nyhetsartikler';
$app_strings['LBL_HINT_NEWS_ALERT'] = 'Hint Insights';
$app_strings['LBL_HINT_NEWS_NONE'] = 'Ingen nyheter tilgjengelig';
$app_strings['LBL_NEW_NOTIFICATIONS'] = 'Nye varsler';
$app_strings['LBL_HINT_DASHLET_ALLOWED1'] = 'You must have a Hint license to view the Hint Insights dashlet.
Ask your administrator about getting a Hint license.';

$app_strings['LBL_HINT_FOR'] = 'For';
$app_strings['LBL_HINT_WITH'] = 'med';
$app_strings['LBL_HINT_SHOW_ME'] = 'Vis meg: ';
$app_strings['LBL_HINT_NOTIFY_ME_BY'] = 'Varsle meg på: ';

$app_strings['LBL_NOTIFICATIONS_TITLE'] = 'Hint Insights preferansesenter';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE'] = 'Preferansealternativnøkkel';
$app_strings['LBL_HINT_PREFERENCES'] = 'Preferanser';
$app_strings['LBL_HINT_MINIMUM_PREFERENCES'] = 'Slett deaktivert, minimum en preferanseerklæring kreves';
$app_strings['LBL_HINT_MAXIMUM_PREFERENCES'] = 'Legg til deaktivert, du har nådd maksimum prereferanseerklæringer';

$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_DASHLET'] = 'Inkluder i Hint Insights-dashlet';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_BROWSER'] = 'Pop-up som skrivebordsvarsel';
$app_strings['LBL_NOTIFICATIONS_KEY_DESCR_BROWSER'] = 'Varsler må aktiveres på alle nettlesere og på alle stasjonære Pc-er for å motta varsler regelmessig.';
$app_strings['LBL_NOTIFICATIONS_KEY_DESCR_BROWSER_DISABLED'] = 'Enkelt nettlesere, som Internet Explorer, støtter ikke varsler. Varsler kan ikke aktiveres ved bruk av en nettleser som ikke støtter varsler.';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_EMAIL'] = 'Send øyeblikkelig e-postvarsel for hvert varsel';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_DAILY'] = 'Send en daglig e-postmelding';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_WEEKLY'] = 'Send en ukentlig e-postmelding';

$app_strings['LBL_NOTIFICATIONS_ERROR_MESSAGE_FAILEDSYNC'] = 'Preferanser kunne ikke lagret. Sjekk systemforbindelsen og prøv igjen.';
$app_strings['LBL_NOTIFICATIONS_ERROR_MESSAGE_MISSING_REQUIRED'] = 'Enkelte obligatoriske felt mangler en verdi. Sjekk preferansene dine, og sørg for at alle obligatoriske felt er fylt inn.';

$app_strings['LBL_HINT_PUSH_MESSAGES_PERMISSION'] = 'Du er i ferd med å aktivere nettleservarsler for Hint Insights. Klikk Bekreft for å fortsette. Nettleseren din vil deretter be deg om tillatelse for å tillatelse å motta varsler om hendelser.';
$app_strings['LBL_HINT_PUSH_ERROR'] = 'Pushvarsler-tillegg har blitt registrert for {{options.type}} uten avhengigheter. Tillegget vil ikke fungere som tiltenkt, vær sikker på at du gir en bane til arbeiderfilen og en metode for å lagre abonnementet på serveren.';

$app_strings['LBL_HINT_CONFIG_ENABLE_NOTIFICATIONS'] = 'Slå PÅ Hint-varsler for alle brukere';
$app_strings['LBL_HINT_CONFIG_DISABLE_NOTIFICATIONS'] = 'Slå AV Hint-varsler for alle brukere';
