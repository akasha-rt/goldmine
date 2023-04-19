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
$app_strings['LBL_HINT_COMPANY_SIZE'] = 'Företagsstorlek';
$app_strings['LBL_HINT_COMPANY_INDUSTRY'] = 'Bransch';
$app_strings['LBL_HINT_COMPANY_INDUSTRY_TAGS'] = 'Branschtaggar';
$app_strings['LBL_HINT_COMPANY_LOCATION'] = 'Företagets plats';
$app_strings['LBL_HINT_COMPANY_DESCRIPTION'] = 'Beskrivning av företag';
$app_strings['LBL_HINT_COMPANY_FOUNDED_YEAR'] = 'Grundat år';
$app_strings['LBL_HINT_COMPANY_FACEBOOK'] = 'Företagets Facebook';
$app_strings['LBL_HINT_COMPANY_TWITTER'] = 'Företagets Twitter';
$app_strings['LBL_HINT_COMPANY_LOGO'] = 'Företagets lokgotyplänk';
$app_strings['LBL_HINT_COMPANY_PIC'] = 'Företagslogga';
$app_strings['LBL_HINT_CONTACT_PIC'] = 'Kontaktfoto';
$app_strings['LBL_HINT_COMPANY_WEBSITE'] = 'Företagswebbplats';
$app_strings['LBL_HINT_PHOTO'] = 'Fotolänk';
$app_strings['LBL_HINT_JOB_2'] = 'Tidigare jobb';
$app_strings['LBL_HINT_EDUCATION'] = 'Utbildning';
$app_strings['LBL_HINT_EDUCATION_2'] = 'Ytterligare utbildningar';
$app_strings['LBL_HINT_TWITTER'] = 'Twitterlänk';
$app_strings['LBL_HINT_FACEBOOK'] = 'Facebooklänk';
$app_strings['LBL_HINT_COMPANY_NAICS_CODE_LABEL'] = 'NAICS-kod';
$app_strings['LBL_HINT_COMPANY_SIC_CODE_LABEL'] = 'SIC-kod';
$app_strings['LBL_HINT_COMPANY_FISCAL_YEAR_END'] = 'FY-slut';
$app_strings['LBL_HINT_COMPANY_ANNUAL_REVENUE'] = 'Årlig förtjänst';
$app_strings['LBL_HINT_PHONE_1'] = 'Telefon 1';
$app_strings['LBL_HINT_PHONE_2'] = 'Telefon 2';
$app_strings['LBL_HINT_PANEL'] = 'Hint';
$app_strings['LBL_HINT_JOIN_TABLE'] = 'Sammanfoga tabell';
$app_strings['LBL_HINT_FULL_NAME'] = 'Fullständigt namn';
$app_strings['LBL_HINT_JOB_TITLE'] = 'Jobbtitel';
$app_strings['LBL_HINT_OFFICE_PHONE'] = 'Kontorstelefon';
$app_strings['LBL_HINT_MOBILE_PHONE'] = 'Mobil';
$app_strings['LBL_HINT_OTHER_PHONE'] = 'Annan telefon';
$app_strings['LBL_HINT_WEBSITE'] = 'Webbplats';
$app_strings['LBL_HINT_MSG_OVERWRITE_ALL'] = 'Vill du skriva över alla befintliga data för denna post med nya data som hittats i Hint?';
$app_strings['LBL_HINT_MSG_OVERWRITE_FIELD'] = 'Vill du skriva över befintligt {{fieldName}} för denna post med nytt {{fieldName}} som hittats i Hint?';
$app_strings['LBL_HINT_MSG_TOTAL_OVERWRITE'] = 'Alla kontorelaterade data kommer att tas bort, är du säker på att du vill fortsätta?';
$app_strings['LBL_HINT_CONTACTS_AVATAR'] = 'Foto';
$app_strings['LBL_HINT_ACCOUNTSETS'] = 'Kontouppsättningstaggar för Hint';

$app_strings['LBL_HINT_LOADING'] = 'Laddar...';
$app_strings['LBL_HINT_UNINSTALL_PROCESSING'] = 'Avinstallerar Hint, vänta';
$app_strings['LBL_HINT_VALUE_ERASED'] = ' Värde raderat ';
$app_strings['LBL_HINT_VALUE_ERASED_TOOLTIP'] = 'Denna information raderades via datasekretessförfrågan';

$app_strings['LBL_HINT_UNINSTALL_TITLE'] = 'Välj ett av avinstallationsalternativen nedan:';
$app_strings['LBL_HINT_UNINSTALL_PARTIAL'] = 'Avinstallera endast Hint-paketet';
$app_strings['LBL_HINT_UNINSTALL_FULL'] = 'Avinstallera Hint fullständigt';
$app_strings['LBL_HINT_UNINSTALL_PARTIAL_DESCRIPTION'] = 'This option will remove the Hint MLP and disable all active subscriptions to Hint Insights. 
Reinstalling Hint will automatically reactivate subscriptions.';
$app_strings['LBL_HINT_UNINSTALL_FULL_DESCRIPTION'] = 'Detta alternativ kommer att genomföra en fullständig avinstallation av Hint, inklusive borttagning av MLP och radering av all konfigurations- och prenumerationsinformation.';
$app_strings['LBL_HINT_UNINSTALL'] = 'Avinstallera';
$app_strings['LBL_HINT_UNINSTALL_HEADER'] = 'Avinstallera Hint';
$app_strings['LBL_HINT_CANCEL'] = 'Avbryt';
$app_strings['LBL_HINT_UNINSTALL_WARNING1'] = 'WARNING: Choose this option only if you do not intend to use Hint again in the future. 
Before performing the uninstall, complete a full backup of your Sugar database and put Sugar into maintenance mode. ';
$app_strings['LBL_HINT_UNINSTALL_WARNING2'] = 'Se ';
$app_strings['LBL_HINT_UNINSTALL_WARNING_LINK'] = 'http://www.sugarcrm.com/crm/product_doc.php?module=HintUninstallingHint';
$app_strings['LBL_HINT_UNINSTALL_WARNING3'] = 'för information om avinstalleringsprocessen.';
$app_strings['LBL_HINT_UNINSTALL_WARNING_MESSAGE1'] = 'Är du säker på att du bara vill avinstallera Hint-paketet?';
$app_strings['LBL_HINT_UNINSTALL_WARNING_MESSAGE2'] = 'Är du säker på att du bara vill Hint fullständigt?';
$app_strings['LBL_HINT_UNINSTALL_WARNING_MESSAGE2_SUBTEXT'] = '(OBS: DU KAN INTE ÅNGRA DENNA ÅTGÄRD)';

$app_strings['LBL_HINT_CONFIG_TITLE'] = 'Hint-fält';
$app_strings['LBL_HINT_NO_RESULTS_MSG'] = 'Inga resultat hittades.';
$app_strings['LBL_HINT_CONFIG_BASIC_PREVIEW'] = 'Grundläggande layout för Hint-panelen';
$app_strings['LBL_HINT_CONFIG_TAB_ACCOUNTS'] = 'Konton';
$app_strings['LBL_HINT_CONFIG_TAB_CONTACTS'] = 'Kontakter';
$app_strings['LBL_HINT_CONFIG_TAB_LEADS'] = 'Möjliga kunder';
$app_strings['LBL_HINT_CONFIG_EXPANDED_PREVIEW'] = 'Layout för utökad Hint-panel';
$app_strings['LBL_HINT_CONFIG_DIR_PAR1'] = 'Arrangera om fälten genom att dra och släppa inom sektionerna för Layout för Hint-panel ovan.';
$app_strings['LBL_HINT_CONFIG_DIR_PAR2'] = 'För detaljerad anvisning och en lista över standardfält, se ';
$app_strings['LBL_HINT_CONFIG_RESTORE_TEXT'] = ' för att återställa standardinställningarna för ';
$app_strings['LBL_HINT_CONFIG_MODULE_TEXT'] = 'modul.';
$app_strings['LBL_HINT_CONFIG_WARNING_MESSAGE'] = 'Är du säker på att du vill återställa tillbaka till standardinställningarna för modulen {{module}}?';
$app_strings['LBL_HINT_CONFIG_RESTORE_BUTTON'] = 'Klicka här';
$app_strings['LBL_HINT_CONFIG_NAME'] = 'Administrationsguide för Hint.';
$app_strings['LBL_HINT_CONFIG_FIELD_SELECTOR'] = 'Fält';
$app_strings['LBL_HINT_ENRICHED_FIELD_SUBTITLE'] = 'Utökade fält';
$app_strings['LBL_HINT_ENRICHED_FIELD_SUBTITLE_NOTE'] = 'Detta avsnitt listar alla Hint-fält och Sugar-fält som utökas av Hint. Hint-fält markeras med en asterisk (*) och kan bara visas i Hint-panelen om de är utökade.';
$app_strings['LBL_HINT_CONFIG_FIELD_NAME'] = 'Fältnamn';
$app_strings['LBL_HINT_CONFIG_ENRICH_FIELD'] = 'Utöka fält';
$app_strings['LBL_HINT_CONFIG_FIELD_SHOW1'] = 'Visa i Hint';
$app_strings['LBL_HINT_CONFIG_FIELD_SHOW2'] = 'Visa i Hint-panel';
$app_strings['LBL_HINT_ADDITIONAL_FIELD_SUBTITLE'] = 'Extra Sugar-fält';
$app_strings['LBL_HINT_ADDITIONAL_FIELD_SUBTITLE_NOTE'] = 'Detta avsnitt listar alla Sugar-fält som inte har utökats av Hint.';
$app_strings['LBL_HINT_RESYNC_NOTIFICATION_TITLE'] = 'Varning';
$app_strings['LBL_HINT_RESYNC_NOTIFICATION_DESCRIPTION'] = 'Var försiktig: Du håller på att synkronisera med tjänsten Hint Insights. Alla pågående e-postsammanfattningar kommer att gå förlorade och befintliga nyheter kommer att rensas från Insights dashlet. Alla typer av aviseringar återupptas efter att synkroniseringen har slutförts.';

$app_strings['LBL_HINT_ACCOUNT_CHANGE_TITLE'] = 'Föreslagna företag som hör samman med er {{_moduleSingular}} listas nedan. Välj vilka företagsdata som ska visas.';
$app_strings['LBL_HINT_NO_ACCOUNT_SELECTED'] = 'Inget konto har valts';

$app_strings['LBL_HINT_EMAIL_IMPORT_TITLE'] = 'Flera e-postmeddelanden hittades, välj vilka som ska importeras: ';

$app_strings['LBL_HINT_HELP_MESSAGE1'] = 'Baserat på angivna data kunde inte Tips hitta någon träff i systemet.';
$app_strings['LBL_HINT_HELP_MESSAGE2'] = 'Ni får bäst resultat i Tips med en persons namn och e-postadress.';
$app_strings['LBL_HINT_HELP_MESSAGE3'] = 'Ni får bäst resultat i Tips med företagets webbplats-URL.';
$app_strings['LBL_HINT_HELP_DEFAULT_MESSAGE1A'] = "Enter your {{_moduleSingular}}'s company name or website and hint will search for additional data.";
$app_strings['LBL_HINT_HELP_DEFAULT_MESSAGE1B'] = "Enter your {{currentModule}}'s email address and hint will search for additional data.";

$app_strings['LBL_HINT_HISTORY_NONE'] = 'Inga data tillgängliga för historikvy';
$app_strings['LBL_HINT_HISTORY_TITLE'] = 'Aktivitetshistorik';

$app_strings['LBL_HINT_PREVIEW_TITLE'] = 'Datautökning';
$app_strings['LBL_HINT_PREVIEW_LICENSE_EXPIRED'] = 'Licensen för tjänsten SugarCRM Hint har löpt ut. Kontakta din SugarCRM-administratör för att förnya din licens.';
$app_strings['LBL_HINT_PREVIEW_QUESTION'] = 'Vill du se vad SugarCRM Hint kan göra för dig och ditt företag? Kontakta din SugarCRM-administratör för att lägga till Hint.';
$app_strings['LBL_HINT_PREVIEW_NO_ACCOUNT_INFO'] = 'Kontoinformationen hittades inte';
$app_strings['LBL_HINT_PREVIEW_TOOLTIP_TITLE'] = 'Utökade data hittades - klicka för att spara alla utökade data till din post.';
$app_strings['LBL_HINT_PREVIEW_CLICK_TO_SAVE'] = 'Klicka för att spara utökade data till din post.';

$app_strings['LBL_HINT_CONTACTS_TITLE'] = 'Relaterade kontakter';
$app_strings['LBL_HINT_CONTACTS_NONE'] = 'Inga relaterade kontakter';

$app_strings['LBL_HINT_NEWS'] = 'Nyheter';
$app_strings['LBL_HINT_GENERAL'] = 'Allmänt';
$app_strings['LBL_HINT_ALL_NEWS'] = 'Alla nyheter';
$app_strings['LBL_HINT_FILTER_NEWS'] = 'Filtrera nyheter';
$app_strings['LBL_HINT_FINANCIAL_NEWS'] = 'Ekonomi';
$app_strings['LBL_HINT_PERSONNEL_NEWS'] = 'Personal';
$app_strings['LBL_HINT_PRESS_RELEASES'] = 'Pressutskick';
$app_strings['LBL_HINT_OTHER_NEWS'] = 'Annat';
$app_strings['LBL_HINT_NEWS_PLACEHOLDER'] = 'Sök nyhetsartiklar';
$app_strings['LBL_HINT_NEWS_ALERT'] = 'Hint Insights';
$app_strings['LBL_HINT_NEWS_NONE'] = 'Inga nyheter finns tillgängliga';
$app_strings['LBL_NEW_NOTIFICATIONS'] = 'Nya aviseringar';
$app_strings['LBL_HINT_DASHLET_ALLOWED1'] = 'You must have a Hint license to view the Hint Insights dashlet.
Ask your administrator about getting a Hint license.';

$app_strings['LBL_HINT_FOR'] = 'För';
$app_strings['LBL_HINT_WITH'] = 'med';
$app_strings['LBL_HINT_SHOW_ME'] = 'Visa mig: ';
$app_strings['LBL_HINT_NOTIFY_ME_BY'] = 'Avisera mig genom: ';

$app_strings['LBL_NOTIFICATIONS_TITLE'] = 'Inställningscenter för Hint Insights';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE'] = 'Nyckel för inställningsalternativ';
$app_strings['LBL_HINT_PREFERENCES'] = 'Inställningar';
$app_strings['LBL_HINT_MINIMUM_PREFERENCES'] = 'Radera inaktiverade, minst en inställning krävs';
$app_strings['LBL_HINT_MAXIMUM_PREFERENCES'] = 'Lägg till inaktiverade, du har nått maximalt antal inställningsutsagor';

$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_DASHLET'] = 'Inkludera i Hint Insights dashlet';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_BROWSER'] = 'Popup-meddelande som skrivbordavisering';
$app_strings['LBL_NOTIFICATIONS_KEY_DESCR_BROWSER'] = 'Aviseringar måste vara aktiverade på alla webblälsare och alla stationära datorer för att konsekvent ta emot aviseringar.';
$app_strings['LBL_NOTIFICATIONS_KEY_DESCR_BROWSER_DISABLED'] = 'Vissa webbläsare, som Internet Explorer, har inte stöd för aviseringar. Aviseringar kan inte aktiveras när du använder en webbläsare som inte har stöd för aviseringar.';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_EMAIL'] = 'Skicka omedelbar e-postvarning för varje avisering';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_DAILY'] = 'Skicka en daglig e-postsammanfattning';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_WEEKLY'] = 'Skicka en veckovis e-postsammanfattning';

$app_strings['LBL_NOTIFICATIONS_ERROR_MESSAGE_FAILEDSYNC'] = 'Inställningar gick inte att spara. Kontrollera din systemanslutning och försök igen.';
$app_strings['LBL_NOTIFICATIONS_ERROR_MESSAGE_MISSING_REQUIRED'] = 'Vissa fält saknar ett värde. Kontrollera dina inställningar och se till att alla nödvändiga fält är ifyllda.';

$app_strings['LBL_HINT_PUSH_MESSAGES_PERMISSION'] = 'Du håller på att aktivera webbläsaraviseringar för Hint Insights. Klicka på Bekräfta för att gå vidare. Din webbläsare kommer då att be om tillstånd för att tillåta att aviseringshändelser tas emot.';
$app_strings['LBL_HINT_PUSH_ERROR'] = 'Pluginprogrammet Push Notifications har registrerats för {{options.type}} utan dess beroenden. Pluginprogrammet kommer inte att fungera som avsett, vänligen se till att du tillhandahåller en sökväg till arbetsfilen och en metod för att spara prenumerationen på servern.';

$app_strings['LBL_HINT_CONFIG_ENABLE_NOTIFICATIONS'] = 'Sätt Hint-aviseringar som PÅ för alla användare';
$app_strings['LBL_HINT_CONFIG_DISABLE_NOTIFICATIONS'] = 'Sätt Hint-aviseringar som AV för alla användare';
