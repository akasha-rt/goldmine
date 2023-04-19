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
$app_strings['LBL_HINT_COMPANY_SIZE'] = 'Veličina tvrtke';
$app_strings['LBL_HINT_COMPANY_INDUSTRY'] = 'Industrija';
$app_strings['LBL_HINT_COMPANY_INDUSTRY_TAGS'] = 'Industrijske oznake';
$app_strings['LBL_HINT_COMPANY_LOCATION'] = 'Lokacija tvrtke';
$app_strings['LBL_HINT_COMPANY_DESCRIPTION'] = 'Opis tvrtke';
$app_strings['LBL_HINT_COMPANY_FOUNDED_YEAR'] = 'Godina osnutka';
$app_strings['LBL_HINT_COMPANY_FACEBOOK'] = 'Facebook stranica tvrtke';
$app_strings['LBL_HINT_COMPANY_TWITTER'] = 'Twitter tvrtke';
$app_strings['LBL_HINT_COMPANY_LOGO'] = 'Poveznica na logotip tvrtke';
$app_strings['LBL_HINT_COMPANY_PIC'] = 'Logotip tvrtke';
$app_strings['LBL_HINT_CONTACT_PIC'] = 'Fotografija tvrtke';
$app_strings['LBL_HINT_COMPANY_WEBSITE'] = 'Mrežna stranica tvrtke';
$app_strings['LBL_HINT_PHOTO'] = 'Poveznica fotografije';
$app_strings['LBL_HINT_JOB_2'] = 'Prethodna radna mjesta';
$app_strings['LBL_HINT_EDUCATION'] = 'Obrazovanje';
$app_strings['LBL_HINT_EDUCATION_2'] = 'Dodatno obrazovanje';
$app_strings['LBL_HINT_TWITTER'] = 'Poveznica na Twitter';
$app_strings['LBL_HINT_FACEBOOK'] = 'Poveznica na Facebook';
$app_strings['LBL_HINT_COMPANY_NAICS_CODE_LABEL'] = 'Kod NAICS';
$app_strings['LBL_HINT_COMPANY_SIC_CODE_LABEL'] = 'NKD šifra djelatnosti';
$app_strings['LBL_HINT_COMPANY_FISCAL_YEAR_END'] = 'Kraj fiskalne godine';
$app_strings['LBL_HINT_COMPANY_ANNUAL_REVENUE'] = 'Godišnji prihod';
$app_strings['LBL_HINT_PHONE_1'] = 'Telefon 1';
$app_strings['LBL_HINT_PHONE_2'] = 'Telefon 2';
$app_strings['LBL_HINT_PANEL'] = 'Savjet';
$app_strings['LBL_HINT_JOIN_TABLE'] = 'Pridruži se stolu';
$app_strings['LBL_HINT_FULL_NAME'] = 'Ime i prezime';
$app_strings['LBL_HINT_JOB_TITLE'] = 'Naziv radnog mjesta';
$app_strings['LBL_HINT_OFFICE_PHONE'] = 'Uredski telefon';
$app_strings['LBL_HINT_MOBILE_PHONE'] = 'Mobilni telefon';
$app_strings['LBL_HINT_OTHER_PHONE'] = 'Drugi telefon';
$app_strings['LBL_HINT_WEBSITE'] = 'Mrežna stranica';
$app_strings['LBL_HINT_MSG_OVERWRITE_ALL'] = 'Želite li zamijeniti postojeće podatke o ovom zapisu novim podacima iz usluge Hint?';
$app_strings['LBL_HINT_MSG_OVERWRITE_FIELD'] = 'Želite li zamijeniti postojeće polje {{fieldName}} za ovaj zapis novim poljem {{fieldName}} iz usluge Hint?';
$app_strings['LBL_HINT_MSG_TOTAL_OVERWRITE'] = 'Uklonit će se svi podaci povezani s računom, jeste li sigurni da želite nastaviti?';
$app_strings['LBL_HINT_CONTACTS_AVATAR'] = 'Fotografija';
$app_strings['LBL_HINT_ACCOUNTSETS'] = 'Oznake skupova računa usluge Hint';

$app_strings['LBL_HINT_LOADING'] = 'Učitavanje...';
$app_strings['LBL_HINT_UNINSTALL_PROCESSING'] = 'Deinstalacija usluge Hint u tijeku, molimo pričekajte';
$app_strings['LBL_HINT_VALUE_ERASED'] = ' Vrijednost izbrisana ';
$app_strings['LBL_HINT_VALUE_ERASED_TOOLTIP'] = 'Ova je informacija izbrisana na temelju zahtjeva za privatnost podataka';

$app_strings['LBL_HINT_UNINSTALL_TITLE'] = 'U nastavku odaberite jednu od opcija za deinstalaciju:';
$app_strings['LBL_HINT_UNINSTALL_PARTIAL'] = 'Deinstaliraj samo paket usluge Hint';
$app_strings['LBL_HINT_UNINSTALL_FULL'] = 'Potpuno deinstaliraj Hint';
$app_strings['LBL_HINT_UNINSTALL_PARTIAL_DESCRIPTION'] = 'This option will remove the Hint MLP and disable all active subscriptions to Hint Insights. 
Reinstalling Hint will automatically reactivate subscriptions.';
$app_strings['LBL_HINT_UNINSTALL_FULL_DESCRIPTION'] = 'Ovom će se opcijom potpuno deinstalirati Hint, što uključuje uklanjanje MLP-a i brisanje svih podataka o konfiguraciji i pretplatama.';
$app_strings['LBL_HINT_UNINSTALL'] = 'Deinstaliraj';
$app_strings['LBL_HINT_UNINSTALL_HEADER'] = 'Deinstaliraj Hint';
$app_strings['LBL_HINT_CANCEL'] = 'Odustani';
$app_strings['LBL_HINT_UNINSTALL_WARNING1'] = 'WARNING: Choose this option only if you do not intend to use Hint again in the future. 
Before performing the uninstall, complete a full backup of your Sugar database and put Sugar into maintenance mode. ';
$app_strings['LBL_HINT_UNINSTALL_WARNING2'] = 'Pogledajte ';
$app_strings['LBL_HINT_UNINSTALL_WARNING_LINK'] = 'http://www.sugarcrm.com/crm/product_doc.php?module=HintUninstallingHint';
$app_strings['LBL_HINT_UNINSTALL_WARNING3'] = 'za pojedinosti o postupku deinstalacije.';
$app_strings['LBL_HINT_UNINSTALL_WARNING_MESSAGE1'] = 'Jeste li sigurni da želite deinstalirati samo paket usluge Hint?';
$app_strings['LBL_HINT_UNINSTALL_WARNING_MESSAGE2'] = 'Jeste li sigurni da želite potpuno deinstalirati Hint?';
$app_strings['LBL_HINT_UNINSTALL_WARNING_MESSAGE2_SUBTEXT'] = '(NAPOMENA: OVU RADNJU NIJE MOGUĆE PONIŠTITI)';

$app_strings['LBL_HINT_CONFIG_TITLE'] = 'Polja sa savjetima';
$app_strings['LBL_HINT_NO_RESULTS_MSG'] = 'Nisu pronađeni rezultati.';
$app_strings['LBL_HINT_CONFIG_BASIC_PREVIEW'] = 'Osnovni izgled ploče usluge Hint';
$app_strings['LBL_HINT_CONFIG_TAB_ACCOUNTS'] = 'Računi';
$app_strings['LBL_HINT_CONFIG_TAB_CONTACTS'] = 'Kontakti';
$app_strings['LBL_HINT_CONFIG_TAB_LEADS'] = 'Potencijalni klijenti';
$app_strings['LBL_HINT_CONFIG_EXPANDED_PREVIEW'] = 'Prošireni izgled ploče usluge Hint';
$app_strings['LBL_HINT_CONFIG_DIR_PAR1'] = 'Promijenite raspored polja tako da ih povučete i ispustite iznad u odjeljcima izgleda ploče usluge Hint.';
$app_strings['LBL_HINT_CONFIG_DIR_PAR2'] = 'Za detaljne upute i popis zadanih polja pogledajte ';
$app_strings['LBL_HINT_CONFIG_RESTORE_TEXT'] = ' za vraćanje zadanih postavki za ';
$app_strings['LBL_HINT_CONFIG_MODULE_TEXT'] = 'modul.';
$app_strings['LBL_HINT_CONFIG_WARNING_MESSAGE'] = 'Jeste li sigurni da želite vratiti zadane postavke za modul {{module}}?';
$app_strings['LBL_HINT_CONFIG_RESTORE_BUTTON'] = 'Kliknite ovdje';
$app_strings['LBL_HINT_CONFIG_NAME'] = 'Vodič za administraciju usluge Hint.';
$app_strings['LBL_HINT_CONFIG_FIELD_SELECTOR'] = 'Polja';
$app_strings['LBL_HINT_ENRICHED_FIELD_SUBTITLE'] = 'Dopunjena polja';
$app_strings['LBL_HINT_ENRICHED_FIELD_SUBTITLE_NOTE'] = 'U ovom se odjeljku nalaze sva polja usluge Hint i Sugar koja su dopunjena uslugom Hint. Polja usluge Hint označena su zvjezdicom (*) i moguće ih je prikazati na ploči usluge Hint samo ako su dopunjena.';
$app_strings['LBL_HINT_CONFIG_FIELD_NAME'] = 'Naziv polja';
$app_strings['LBL_HINT_CONFIG_ENRICH_FIELD'] = 'Dopuni polje';
$app_strings['LBL_HINT_CONFIG_FIELD_SHOW1'] = 'Prikaži u usluzi Hint';
$app_strings['LBL_HINT_CONFIG_FIELD_SHOW2'] = 'Prikaži na ploči usluge Hint';
$app_strings['LBL_HINT_ADDITIONAL_FIELD_SUBTITLE'] = 'Dodatna polja usluge Sugar';
$app_strings['LBL_HINT_ADDITIONAL_FIELD_SUBTITLE_NOTE'] = 'U ovom se odjeljku nalaze sva polja usluge Sugar koja nisu dopunjena uslugom Hint.';
$app_strings['LBL_HINT_RESYNC_NOTIFICATION_TITLE'] = 'Upozorenje';
$app_strings['LBL_HINT_RESYNC_NOTIFICATION_DESCRIPTION'] = 'Pažnja: namjeravate provesti sinkronizaciju s uslugom Hint Insights. Svi sažeci e-pošte koji se šalju bit će izgubljeni, a postojeće vijesti očistit će se iz prozora usluge Insights. Nakon završetka sinkronizacije nastavit ćete primati sve vrste obavijesti.';

$app_strings['LBL_HINT_ACCOUNT_CHANGE_TITLE'] = 'Predložene tvrtke povezane s vašim modulom {{_moduleSingular}} navedene su u nastavku. Odaberite podatke tvrtke kako biste ih prikazali.';
$app_strings['LBL_HINT_NO_ACCOUNT_SELECTED'] = 'Nema odabranih računa';

$app_strings['LBL_HINT_EMAIL_IMPORT_TITLE'] = 'Pronađeno je više poruka e-pošte, odaberite e-poštu za uvoz: ';

$app_strings['LBL_HINT_HELP_MESSAGE1'] = 'Na temelju unesenih podataka Hint nije mogao pronaći podudaranje u sustavu.';
$app_strings['LBL_HINT_HELP_MESSAGE2'] = 'Najbolji rezultati u usluzi Hint pronalaze se s pomoću imena osobe i adrese e-pošte.';
$app_strings['LBL_HINT_HELP_MESSAGE3'] = 'Najbolji rezultati u usluzi Hint pronalaze se s pomoću URL-a mrežne stranice tvrtke.';
$app_strings['LBL_HINT_HELP_DEFAULT_MESSAGE1A'] = "Enter your {{_moduleSingular}}'s company name or website and hint will search for additional data.";
$app_strings['LBL_HINT_HELP_DEFAULT_MESSAGE1B'] = "Enter your {{currentModule}}'s email address and hint will search for additional data.";

$app_strings['LBL_HINT_HISTORY_NONE'] = 'Nema dostupnih podataka za povijesni pregled';
$app_strings['LBL_HINT_HISTORY_TITLE'] = 'Povijest aktivnosti';

$app_strings['LBL_HINT_PREVIEW_TITLE'] = 'Nadopuna podataka';
$app_strings['LBL_HINT_PREVIEW_LICENSE_EXPIRED'] = 'Istekla je vaša licenca za uslugu SugarCRM Hint. Za obnovu licence obratite se administratoru usluge SugarCRM.';
$app_strings['LBL_HINT_PREVIEW_QUESTION'] = 'Želite provjeriti što SugarCRM Hint može učiniti za vas i vašu tvrtku? Obratite se administratoru usluge SugarCRM za dodavanje usluge Hint.';
$app_strings['LBL_HINT_PREVIEW_NO_ACCOUNT_INFO'] = 'Nisu pronađene informacije o računu';
$app_strings['LBL_HINT_PREVIEW_TOOLTIP_TITLE'] = 'Pronađeni nadopunjeni podaci – kliknite kako biste spremili sve nadopunjene podatke u svoj zapis.';
$app_strings['LBL_HINT_PREVIEW_CLICK_TO_SAVE'] = 'Kliknite kako biste spremili nadopunjene podatke u svoj zapis.';

$app_strings['LBL_HINT_CONTACTS_TITLE'] = 'Povezani kontakti';
$app_strings['LBL_HINT_CONTACTS_NONE'] = 'Nema povezanih kontakata';

$app_strings['LBL_HINT_NEWS'] = 'Vijesti';
$app_strings['LBL_HINT_GENERAL'] = 'Općenito';
$app_strings['LBL_HINT_ALL_NEWS'] = 'Sve vijesti';
$app_strings['LBL_HINT_FILTER_NEWS'] = 'Filtriraj vijesti';
$app_strings['LBL_HINT_FINANCIAL_NEWS'] = 'Financije';
$app_strings['LBL_HINT_PERSONNEL_NEWS'] = 'Osoblje';
$app_strings['LBL_HINT_PRESS_RELEASES'] = 'Priopćenja za javnost';
$app_strings['LBL_HINT_OTHER_NEWS'] = 'Ostalo';
$app_strings['LBL_HINT_NEWS_PLACEHOLDER'] = 'Pretraži vijesti';
$app_strings['LBL_HINT_NEWS_ALERT'] = 'Hint Insights';
$app_strings['LBL_HINT_NEWS_NONE'] = 'Nema dostupnih vijesti';
$app_strings['LBL_NEW_NOTIFICATIONS'] = 'Nove obavijesti';
$app_strings['LBL_HINT_DASHLET_ALLOWED1'] = 'You must have a Hint license to view the Hint Insights dashlet.
Ask your administrator about getting a Hint license.';

$app_strings['LBL_HINT_FOR'] = 'Za';
$app_strings['LBL_HINT_WITH'] = 's/sa';
$app_strings['LBL_HINT_SHOW_ME'] = 'Prikaži: ';
$app_strings['LBL_HINT_NOTIFY_ME_BY'] = 'Obavijesti me: ';

$app_strings['LBL_NOTIFICATIONS_TITLE'] = 'Centar za postavke u usluzi Hint Insights';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE'] = 'Tipka za opciju postavke';
$app_strings['LBL_HINT_PREFERENCES'] = 'Postavke';
$app_strings['LBL_HINT_MINIMUM_PREFERENCES'] = 'Izbriši onemogućeno, potrebna je najmanje jedna naredba za postavku';
$app_strings['LBL_HINT_MAXIMUM_PREFERENCES'] = 'Dodaj onemogućeno, dosegnuli ste maksimalni broj naredbi za postavke';

$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_DASHLET'] = 'Uključi u prozor usluge Hint Insights';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_BROWSER'] = 'Pošalji skočnu obavijest na radnoj površini';
$app_strings['LBL_NOTIFICATIONS_KEY_DESCR_BROWSER'] = 'Za trajno primanje obavijesti potrebno je omogućiti obavijesti u svim preglednicima i na svim stolnim računalima.';
$app_strings['LBL_NOTIFICATIONS_KEY_DESCR_BROWSER_DISABLED'] = 'U nekim preglednicima, kao što je Internet Explorer, obavijesti nisu podržane. Obavijesti se ne mogu omogućiti u pregledniku u kojem obavijesti nisu podržane.';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_EMAIL'] = 'Šalji trenutna upozorenja e-poštom za svaku obavijest';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_DAILY'] = 'Šalji dnevni sažetak e-poštom';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_WEEKLY'] = 'Šalji tjedni sažetak e-poštom';

$app_strings['LBL_NOTIFICATIONS_ERROR_MESSAGE_FAILEDSYNC'] = 'Nije moguće spremiti postavke. Provjerite vezu sustava i pokušajte ponovno.';
$app_strings['LBL_NOTIFICATIONS_ERROR_MESSAGE_MISSING_REQUIRED'] = 'U nekim potrebnim poljima nedostaju vrijednosti. Provjerite svoje postavke i pobrinite se da ispunite sva potrebna polja.';

$app_strings['LBL_HINT_PUSH_MESSAGES_PERMISSION'] = 'Namjeravate omogućiti obavijesti u pregledniku za uslugu Hint Insights. Za nastavak kliknite na Potvrdi. Preglednik će vas zatim tražiti dozvolu za primanje obavijesti.';
$app_strings['LBL_HINT_PUSH_ERROR'] = 'Dodatak za proslijeđene obavijesti registriran je za {{options.type}} bez svojih zavisnih stavki. Dodatak neće raditi kako je namijenjen. Pobrinite se da omogućite putanju do radne datoteke i način spremanja pretplate na poslužitelju.';

$app_strings['LBL_HINT_CONFIG_ENABLE_NOTIFICATIONS'] = 'Uključite obavijesti usluge Hint za sve korisnike';
$app_strings['LBL_HINT_CONFIG_DISABLE_NOTIFICATIONS'] = 'Isključite obavijesti usluge Hint za sve korisnike';
