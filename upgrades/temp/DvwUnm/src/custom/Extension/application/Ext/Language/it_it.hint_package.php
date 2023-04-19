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
$app_strings['LBL_HINT_COMPANY_SIZE'] = 'Dimensioni azienda';
$app_strings['LBL_HINT_COMPANY_INDUSTRY'] = 'Industria';
$app_strings['LBL_HINT_COMPANY_INDUSTRY_TAGS'] = 'Etichette industria';
$app_strings['LBL_HINT_COMPANY_LOCATION'] = 'Sede aziendale';
$app_strings['LBL_HINT_COMPANY_DESCRIPTION'] = 'Descrizione azienda';
$app_strings['LBL_HINT_COMPANY_FOUNDED_YEAR'] = 'Anno di fondazione';
$app_strings['LBL_HINT_COMPANY_FACEBOOK'] = 'Facebook azienda';
$app_strings['LBL_HINT_COMPANY_TWITTER'] = 'Twitter azienda';
$app_strings['LBL_HINT_COMPANY_LOGO'] = 'Link logo azienda';
$app_strings['LBL_HINT_COMPANY_PIC'] = 'Logo azienda';
$app_strings['LBL_HINT_CONTACT_PIC'] = 'Foto contatto';
$app_strings['LBL_HINT_COMPANY_WEBSITE'] = 'Sito web azienda';
$app_strings['LBL_HINT_PHOTO'] = 'Link foto';
$app_strings['LBL_HINT_JOB_2'] = 'Lavori precedenti';
$app_strings['LBL_HINT_EDUCATION'] = 'Istruzione';
$app_strings['LBL_HINT_EDUCATION_2'] = 'Istruzione aggiuntiva';
$app_strings['LBL_HINT_TWITTER'] = 'Link Twitter';
$app_strings['LBL_HINT_FACEBOOK'] = 'Link Facebook';
$app_strings['LBL_HINT_COMPANY_NAICS_CODE_LABEL'] = 'Codice NAICS';
$app_strings['LBL_HINT_COMPANY_SIC_CODE_LABEL'] = 'Codice SIC';
$app_strings['LBL_HINT_COMPANY_FISCAL_YEAR_END'] = 'Fine anno fiscale';
$app_strings['LBL_HINT_COMPANY_ANNUAL_REVENUE'] = 'Profitti annuali';
$app_strings['LBL_HINT_PHONE_1'] = 'Telefono 1';
$app_strings['LBL_HINT_PHONE_2'] = 'Telefono 2';
$app_strings['LBL_HINT_PANEL'] = 'Hint';
$app_strings['LBL_HINT_JOIN_TABLE'] = 'Unisci tabella';
$app_strings['LBL_HINT_FULL_NAME'] = 'Nome e cognome';
$app_strings['LBL_HINT_JOB_TITLE'] = 'Titolo di lavoro';
$app_strings['LBL_HINT_OFFICE_PHONE'] = 'Telefono ufficio';
$app_strings['LBL_HINT_MOBILE_PHONE'] = 'Cellulare';
$app_strings['LBL_HINT_OTHER_PHONE'] = 'Altro telefono';
$app_strings['LBL_HINT_WEBSITE'] = 'Sito Web';
$app_strings['LBL_HINT_MSG_OVERWRITE_ALL'] = 'Sovrascrivere tutti i dati esistenti per questo record con i nuovi dati trovati in Hint?';
$app_strings['LBL_HINT_MSG_OVERWRITE_FIELD'] = 'Sovrascrivere il {{fieldName}} esistente per questo record con il nuovo {{fieldName}} trovato in Hint?';
$app_strings['LBL_HINT_MSG_TOTAL_OVERWRITE'] = 'Tutti i dati relativi all\'account verranno rimossi. Continuare?';
$app_strings['LBL_HINT_CONTACTS_AVATAR'] = 'Foto';
$app_strings['LBL_HINT_ACCOUNTSETS'] = 'Etichette accountset Hint';

$app_strings['LBL_HINT_LOADING'] = 'Caricamento in corso ...';
$app_strings['LBL_HINT_UNINSTALL_PROCESSING'] = 'Disinstallazione di Hint in corso, attendere';
$app_strings['LBL_HINT_VALUE_ERASED'] = ' Valore eliminato';
$app_strings['LBL_HINT_VALUE_ERASED_TOOLTIP'] = 'Queste informazioni sono state cancellate tramite richiesta di protezione dei dati';

$app_strings['LBL_HINT_UNINSTALL_TITLE'] = 'Selezionare una delle opzioni di disinstallazione dal basso:';
$app_strings['LBL_HINT_UNINSTALL_PARTIAL'] = 'Disinstalla solo pacchetto Hint';
$app_strings['LBL_HINT_UNINSTALL_FULL'] = 'Disinstalla Hint completamente';
$app_strings['LBL_HINT_UNINSTALL_PARTIAL_DESCRIPTION'] = 'This option will remove the Hint MLP and disable all active subscriptions to Hint Insights. 
Reinstalling Hint will automatically reactivate subscriptions.';
$app_strings['LBL_HINT_UNINSTALL_FULL_DESCRIPTION'] = 'Questa opzione eseguirà una disinstallazione completa di Hint, inclusa la rimozione di MLP e l\'eliminazione di tutte le informazioni di configurazione e abbonamento.';
$app_strings['LBL_HINT_UNINSTALL'] = 'Disinstalla';
$app_strings['LBL_HINT_UNINSTALL_HEADER'] = 'Disinstalla Hint';
$app_strings['LBL_HINT_CANCEL'] = 'Annulla';
$app_strings['LBL_HINT_UNINSTALL_WARNING1'] = 'WARNING: Choose this option only if you do not intend to use Hint again in the future. 
Before performing the uninstall, complete a full backup of your Sugar database and put Sugar into maintenance mode. ';
$app_strings['LBL_HINT_UNINSTALL_WARNING2'] = 'Vedere ';
$app_strings['LBL_HINT_UNINSTALL_WARNING_LINK'] = 'http://www.sugarcrm.com/crm/product_doc.php?module=HintUninstallingHint';
$app_strings['LBL_HINT_UNINSTALL_WARNING3'] = 'per i dettagli sul processo di disinstallazione.';
$app_strings['LBL_HINT_UNINSTALL_WARNING_MESSAGE1'] = 'Disinstallare solo il pacchetto Hint?';
$app_strings['LBL_HINT_UNINSTALL_WARNING_MESSAGE2'] = 'Disinstallare Hint completamente?';
$app_strings['LBL_HINT_UNINSTALL_WARNING_MESSAGE2_SUBTEXT'] = '(NOTA: NON È POSSIBILE ANNULLARE QUESTA AZIONE)';

$app_strings['LBL_HINT_CONFIG_TITLE'] = 'Campi Hint';
$app_strings['LBL_HINT_NO_RESULTS_MSG'] = 'Nessun risultato trovato.';
$app_strings['LBL_HINT_CONFIG_BASIC_PREVIEW'] = 'Layout pannello di base Hint';
$app_strings['LBL_HINT_CONFIG_TAB_ACCOUNTS'] = 'Account';
$app_strings['LBL_HINT_CONFIG_TAB_CONTACTS'] = 'Contatti';
$app_strings['LBL_HINT_CONFIG_TAB_LEADS'] = 'Potenziali clienti';
$app_strings['LBL_HINT_CONFIG_EXPANDED_PREVIEW'] = 'Layout pannello Hint espanso';
$app_strings['LBL_HINT_CONFIG_DIR_PAR1'] = 'Riorganizzare i campi trascinandoli e rilasciandoli all\'interno delle sezioni Layout pannello suggerimenti sopra.';
$app_strings['LBL_HINT_CONFIG_DIR_PAR2'] = 'Per istruzioni dettagliate e un elenco di campi predefiniti, fare riferimento a ';
$app_strings['LBL_HINT_CONFIG_RESTORE_TEXT'] = ' per ripristinare le impostazioni predefinite per il ';
$app_strings['LBL_HINT_CONFIG_MODULE_TEXT'] = 'modulo.';
$app_strings['LBL_HINT_CONFIG_WARNING_MESSAGE'] = 'Ripristinare le impostazioni predefinite per il modulo {{module}}?';
$app_strings['LBL_HINT_CONFIG_RESTORE_BUTTON'] = 'Fare clic qui';
$app_strings['LBL_HINT_CONFIG_NAME'] = 'Guida all\'amministrazione di Hint.';
$app_strings['LBL_HINT_CONFIG_FIELD_SELECTOR'] = 'Campi';
$app_strings['LBL_HINT_ENRICHED_FIELD_SUBTITLE'] = 'Campi arricchiti';
$app_strings['LBL_HINT_ENRICHED_FIELD_SUBTITLE_NOTE'] = 'Questa sezione elenca tutti i campi Hint e i campi Sugar arricchiti da Hint. I campi Hint sono contrassegnati da un asterisco (*) e possono essere visualizzati nel pannello Hint solo se sono arricchiti.';
$app_strings['LBL_HINT_CONFIG_FIELD_NAME'] = 'Nome campo';
$app_strings['LBL_HINT_CONFIG_ENRICH_FIELD'] = 'Campo arricchito';
$app_strings['LBL_HINT_CONFIG_FIELD_SHOW1'] = 'Mostra in Hint';
$app_strings['LBL_HINT_CONFIG_FIELD_SHOW2'] = 'Mostra in pannello Hint';
$app_strings['LBL_HINT_ADDITIONAL_FIELD_SUBTITLE'] = 'Campi Sugar aggiuntivi';
$app_strings['LBL_HINT_ADDITIONAL_FIELD_SUBTITLE_NOTE'] = 'Questa sezione elenca tutti i campi Sugar non arricchiti da Hint.';
$app_strings['LBL_HINT_RESYNC_NOTIFICATION_TITLE'] = 'Avvertenza';
$app_strings['LBL_HINT_RESYNC_NOTIFICATION_DESCRIPTION'] = 'Attenzione: si sta per eseguire la sincronizzazione con il servizio Hint Insights. Eventuali storie riassuntive di posta elettronica in sospeso andranno perse e le notizie esistenti verranno cancellate dal dashboard di Insights. Le notifiche di tutti i tipi riprenderanno al termine della sincronizzazione.';

$app_strings['LBL_HINT_ACCOUNT_CHANGE_TITLE'] = 'Le aziende suggerite relative al {{_moduleSingular}} sono elencate di seguito. Selezionare i dati aziendali da visualizzare.';
$app_strings['LBL_HINT_NO_ACCOUNT_SELECTED'] = 'Nessun account selezionato';

$app_strings['LBL_HINT_EMAIL_IMPORT_TITLE'] = 'Rilevate email multiple, selezionare le email da importare: ';

$app_strings['LBL_HINT_HELP_MESSAGE1'] = 'In base ai dati inseriti, Hint non è stato in grado di trovare una corrispondenza nel sistema.';
$app_strings['LBL_HINT_HELP_MESSAGE2'] = 'I migliori risultati in Hint possono essere trovati con il nome e l\'indirizzo e-mail di una persona.';
$app_strings['LBL_HINT_HELP_MESSAGE3'] = 'I migliori risultati in Hint possono essere trovati con l\'Url del sito Web dell\'azienda.';
$app_strings['LBL_HINT_HELP_DEFAULT_MESSAGE1A'] = "Enter your {{_moduleSingular}}'s company name or website and hint will search for additional data.";
$app_strings['LBL_HINT_HELP_DEFAULT_MESSAGE1B'] = "Enter your {{currentModule}}'s email address and hint will search for additional data.";

$app_strings['LBL_HINT_HISTORY_NONE'] = 'Nessun dato disponibile per la visualizzazione cronologica';
$app_strings['LBL_HINT_HISTORY_TITLE'] = 'Cronologia attività';

$app_strings['LBL_HINT_PREVIEW_TITLE'] = 'Arricchimento dati';
$app_strings['LBL_HINT_PREVIEW_LICENSE_EXPIRED'] = 'La licenza per il tuo servizio SugarCRM Hint è scaduta. Contatta l\'amministratore di SugarCRM per rinnovare la licenza.';
$app_strings['LBL_HINT_PREVIEW_QUESTION'] = 'Desideri vedere cosa può fare SugarCRM Hint per te e la tua azienda? Contatta l\'amministratore di SugarCRM per aggiungere Hint.';
$app_strings['LBL_HINT_PREVIEW_NO_ACCOUNT_INFO'] = 'Informazioni account non trovate';
$app_strings['LBL_HINT_PREVIEW_TOOLTIP_TITLE'] = 'Dati arricchiti trovati: fare clic per salvare tutti i dati arricchiti nel record.';
$app_strings['LBL_HINT_PREVIEW_CLICK_TO_SAVE'] = 'Fare clic per salvare i dati arricchiti nel record.';

$app_strings['LBL_HINT_CONTACTS_TITLE'] = 'Contatti correlati';
$app_strings['LBL_HINT_CONTACTS_NONE'] = 'Nessun contatto correlato';

$app_strings['LBL_HINT_NEWS'] = 'Novità';
$app_strings['LBL_HINT_GENERAL'] = 'Generale';
$app_strings['LBL_HINT_ALL_NEWS'] = 'Tutte le novità';
$app_strings['LBL_HINT_FILTER_NEWS'] = 'Filtra novità';
$app_strings['LBL_HINT_FINANCIAL_NEWS'] = 'Finanziario';
$app_strings['LBL_HINT_PERSONNEL_NEWS'] = 'Personale';
$app_strings['LBL_HINT_PRESS_RELEASES'] = 'Comunicati stampa';
$app_strings['LBL_HINT_OTHER_NEWS'] = 'Altro';
$app_strings['LBL_HINT_NEWS_PLACEHOLDER'] = 'Cerca articoli novità';
$app_strings['LBL_HINT_NEWS_ALERT'] = 'Hint Insights';
$app_strings['LBL_HINT_NEWS_NONE'] = 'Nessuna novità disponibile';
$app_strings['LBL_NEW_NOTIFICATIONS'] = 'Nuove notifiche';
$app_strings['LBL_HINT_DASHLET_ALLOWED1'] = 'You must have a Hint license to view the Hint Insights dashlet.
Ask your administrator about getting a Hint license.';

$app_strings['LBL_HINT_FOR'] = 'Per';
$app_strings['LBL_HINT_WITH'] = 'con';
$app_strings['LBL_HINT_SHOW_ME'] = 'Mostrami: ';
$app_strings['LBL_HINT_NOTIFY_ME_BY'] = 'Inviami notifica entro: ';

$app_strings['LBL_NOTIFICATIONS_TITLE'] = 'Centro preferenze Hint Insights';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE'] = 'Tasto opzione Preferenza';
$app_strings['LBL_HINT_PREFERENCES'] = 'Preferenze';
$app_strings['LBL_HINT_MINIMUM_PREFERENCES'] = 'Elimina disabilitato, è richiesta almeno una dichiarazione di preferenza';
$app_strings['LBL_HINT_MAXIMUM_PREFERENCES'] = 'Aggiungi disabilitato, hai raggiunto il massimo di dichiarazioni di preferenza';

$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_DASHLET'] = 'Includi in dashlet Hint Insights';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_BROWSER'] = 'Pop-up come notifica desktop';
$app_strings['LBL_NOTIFICATIONS_KEY_DESCR_BROWSER'] = 'Le notifiche devono essere abilitate su tutti i browser e su tutti i computer desktop per ricevere le notifiche in modo coerente.';
$app_strings['LBL_NOTIFICATIONS_KEY_DESCR_BROWSER_DISABLED'] = 'Alcuni browser, come Internet Explorer, non supportano le notifiche. Le notifiche non possono essere abilitate quando si utilizza un browser che non supporta le notifiche.';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_EMAIL'] = 'Invia avviso email istantaneo per ciascuna notifica';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_DAILY'] = 'Invia un riepilogo email giornaliero';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_WEEKLY'] = 'Invia un riepilogo email settimanale';

$app_strings['LBL_NOTIFICATIONS_ERROR_MESSAGE_FAILEDSYNC'] = 'Impossibile salvare le preferenze. Controllare la connessione del sistema e riprovare.';
$app_strings['LBL_NOTIFICATIONS_ERROR_MESSAGE_MISSING_REQUIRED'] = 'In alcuni campi obbligatori manca un valore. Controllare le preferenze e assicurarsi che tutti i campi obbligatori siano compilati.';

$app_strings['LBL_HINT_PUSH_MESSAGES_PERMISSION'] = 'Si sta per abilitare le notifiche del browser per Hint Insights. Fare clic su Conferma per procedere. Il browser ti chiederà quindi l\'autorizzazione per consentire la ricezione di eventi di notifica.';
$app_strings['LBL_HINT_PUSH_ERROR'] = 'Il plugin delle notifiche push è stato registrato per {{options.type}} senza le relative dipendenze. Il plugin non funzionerà come previsto, assicurarsi di fornire un percorso al file di lavoro e un metodo per salvare l\'abbonamento sul server.';

$app_strings['LBL_HINT_CONFIG_ENABLE_NOTIFICATIONS'] = 'ATTIVA le notifiche Hint per tutti gli utenti';
$app_strings['LBL_HINT_CONFIG_DISABLE_NOTIFICATIONS'] = 'DISATTIVA le notifiche Hint per tutti gli utenti';
