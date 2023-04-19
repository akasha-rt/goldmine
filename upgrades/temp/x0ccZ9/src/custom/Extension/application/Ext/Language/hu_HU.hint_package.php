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
$app_strings['LBL_HINT_COMPANY_SIZE'] = 'Vállalat mérete';
$app_strings['LBL_HINT_COMPANY_INDUSTRY'] = 'Iparág';
$app_strings['LBL_HINT_COMPANY_INDUSTRY_TAGS'] = 'Iparág címkéi';
$app_strings['LBL_HINT_COMPANY_LOCATION'] = 'Vállalat székhelye';
$app_strings['LBL_HINT_COMPANY_DESCRIPTION'] = 'Vállalat leírása';
$app_strings['LBL_HINT_COMPANY_FOUNDED_YEAR'] = 'Alapítás éve';
$app_strings['LBL_HINT_COMPANY_FACEBOOK'] = 'Vállalati Facebook';
$app_strings['LBL_HINT_COMPANY_TWITTER'] = 'Vállalati Twitter';
$app_strings['LBL_HINT_COMPANY_LOGO'] = 'Vállalat logójának hivatkozása';
$app_strings['LBL_HINT_COMPANY_PIC'] = 'Vállalat logója';
$app_strings['LBL_HINT_CONTACT_PIC'] = 'Kapcsolattartó fényképe';
$app_strings['LBL_HINT_COMPANY_WEBSITE'] = 'Vállalat weboldala';
$app_strings['LBL_HINT_PHOTO'] = 'Fénykép hivatkozása';
$app_strings['LBL_HINT_JOB_2'] = 'Korábbi munkák';
$app_strings['LBL_HINT_EDUCATION'] = 'Képesítések';
$app_strings['LBL_HINT_EDUCATION_2'] = 'További képesítések';
$app_strings['LBL_HINT_TWITTER'] = 'Twitter-hivatkozás';
$app_strings['LBL_HINT_FACEBOOK'] = 'Facebook-hivatkozás';
$app_strings['LBL_HINT_COMPANY_NAICS_CODE_LABEL'] = 'NAICS-kód';
$app_strings['LBL_HINT_COMPANY_SIC_CODE_LABEL'] = 'SIC-kód';
$app_strings['LBL_HINT_COMPANY_FISCAL_YEAR_END'] = 'Pénzügyi év vége';
$app_strings['LBL_HINT_COMPANY_ANNUAL_REVENUE'] = 'Éves árbevétel';
$app_strings['LBL_HINT_PHONE_1'] = '1. telefonszám';
$app_strings['LBL_HINT_PHONE_2'] = '2. telefonszám';
$app_strings['LBL_HINT_PANEL'] = 'Hint';
$app_strings['LBL_HINT_JOIN_TABLE'] = 'Csatlakozás az asztalhoz';
$app_strings['LBL_HINT_FULL_NAME'] = 'Teljes név';
$app_strings['LBL_HINT_JOB_TITLE'] = 'Beosztás';
$app_strings['LBL_HINT_OFFICE_PHONE'] = 'Irodai telefonszám';
$app_strings['LBL_HINT_MOBILE_PHONE'] = 'Mobil';
$app_strings['LBL_HINT_OTHER_PHONE'] = 'Egyéb telefon';
$app_strings['LBL_HINT_WEBSITE'] = 'Weboldal';
$app_strings['LBL_HINT_MSG_OVERWRITE_ALL'] = 'Szeretné felülírni a jelen bejegyzés minden létező adatát az új, Hintben található adatokkal?';
$app_strings['LBL_HINT_MSG_OVERWRITE_FIELD'] = 'Szeretné felülírni a már létező következőt: {{fieldName}} a jelen bejegyzés esetén az új, Hintben található adattal: {{fieldName}}?';
$app_strings['LBL_HINT_MSG_TOTAL_OVERWRITE'] = 'A fiókhoz kapcsolódó minden adat törölve lesz. Biztos benne, hogy folytatni szeretné?';
$app_strings['LBL_HINT_CONTACTS_AVATAR'] = 'Fénykép';
$app_strings['LBL_HINT_ACCOUNTSETS'] = 'Hint fiókkészlet címkék';

$app_strings['LBL_HINT_LOADING'] = 'Betöltés...';
$app_strings['LBL_HINT_UNINSTALL_PROCESSING'] = 'Hint eltávolítása, kérjük, várjon';
$app_strings['LBL_HINT_VALUE_ERASED'] = ' Érték törölve ';
$app_strings['LBL_HINT_VALUE_ERASED_TOOLTIP'] = 'Ezek az adatok adatvédelmi kérelem nyomán törölve lettek';

$app_strings['LBL_HINT_UNINSTALL_TITLE'] = 'Kérjük, válassza ki az egyik eltávolítási lehetőséget az alábbiak közül:';
$app_strings['LBL_HINT_UNINSTALL_PARTIAL'] = 'Csak a Hint-csomag eltávolítása';
$app_strings['LBL_HINT_UNINSTALL_FULL'] = 'A Hint teljes eltávolítása';
$app_strings['LBL_HINT_UNINSTALL_PARTIAL_DESCRIPTION'] = 'This option will remove the Hint MLP and disable all active subscriptions to Hint Insights. 
Reinstalling Hint will automatically reactivate subscriptions.';
$app_strings['LBL_HINT_UNINSTALL_FULL_DESCRIPTION'] = 'Ez a lehetőség teljesen el fogja távolítani a Hintet, beleértve az MPL és minden beállítási és előfizetési adat törlését.';
$app_strings['LBL_HINT_UNINSTALL'] = 'Eltávolítás';
$app_strings['LBL_HINT_UNINSTALL_HEADER'] = 'A Hint eltávolítása';
$app_strings['LBL_HINT_CANCEL'] = 'Mégsem';
$app_strings['LBL_HINT_UNINSTALL_WARNING1'] = 'WARNING: Choose this option only if you do not intend to use Hint again in the future. 
Before performing the uninstall, complete a full backup of your Sugar database and put Sugar into maintenance mode. ';
$app_strings['LBL_HINT_UNINSTALL_WARNING2'] = 'Tekintse meg a(z) ';
$app_strings['LBL_HINT_UNINSTALL_WARNING_LINK'] = 'http://www.sugarcrm.com/crm/product_doc.php?module=HintUninstallingHint';
$app_strings['LBL_HINT_UNINSTALL_WARNING3'] = 'az eltávolítási folyamattal kapcsolatos további részletekért.';
$app_strings['LBL_HINT_UNINSTALL_WARNING_MESSAGE1'] = 'Biztos benne, hogy csak a Hint-csomagot szeretné eltávolítani?';
$app_strings['LBL_HINT_UNINSTALL_WARNING_MESSAGE2'] = 'Biztos benne, hogy teljesen el szeretné távolítani a Hint-csomagot?';
$app_strings['LBL_HINT_UNINSTALL_WARNING_MESSAGE2_SUBTEXT'] = '(MEGJEGYZÉS: EZ A CSELEKVÉS NEM VISSZAVONHATÓ)';

$app_strings['LBL_HINT_CONFIG_TITLE'] = 'Hint mezők';
$app_strings['LBL_HINT_NO_RESULTS_MSG'] = 'Nincsenek találatok.';
$app_strings['LBL_HINT_CONFIG_BASIC_PREVIEW'] = 'Alapértelmezett Hint panelelrendezés';
$app_strings['LBL_HINT_CONFIG_TAB_ACCOUNTS'] = 'Fiókok';
$app_strings['LBL_HINT_CONFIG_TAB_CONTACTS'] = 'Kapcsolatok';
$app_strings['LBL_HINT_CONFIG_TAB_LEADS'] = 'Érdeklődők';
$app_strings['LBL_HINT_CONFIG_EXPANDED_PREVIEW'] = 'Kiterjesztett Hint panelelrendezés';
$app_strings['LBL_HINT_CONFIG_DIR_PAR1'] = 'Rendezze át a mezőket azáltal, hogy a fenti Hint Panelelrendezésen belül a kívánt helyre húzza, majd elengedi őket.';
$app_strings['LBL_HINT_CONFIG_DIR_PAR2'] = 'A részletes információkért és az alapértelmezett mezők listájáért tekintse meg a ';
$app_strings['LBL_HINT_CONFIG_RESTORE_TEXT'] = ' a modul alapértelmezett beállításainak ';
$app_strings['LBL_HINT_CONFIG_MODULE_TEXT'] = 'visszaállítása.';
$app_strings['LBL_HINT_CONFIG_WARNING_MESSAGE'] = 'Biztos benne, hogy szeretné alaphelyzetbe állítani a következő modult: {{module}}?';
$app_strings['LBL_HINT_CONFIG_RESTORE_BUTTON'] = 'Kattintson ide';
$app_strings['LBL_HINT_CONFIG_NAME'] = 'Hint adminisztrációs útmutató.';
$app_strings['LBL_HINT_CONFIG_FIELD_SELECTOR'] = 'Mezők';
$app_strings['LBL_HINT_ENRICHED_FIELD_SUBTITLE'] = 'Kitöltött mezők';
$app_strings['LBL_HINT_ENRICHED_FIELD_SUBTITLE_NOTE'] = 'Ez a szekció listázza az összes Hint mezőt és az összes, a Hint által kitöltött Sugar-mezőt. A Hint-mezők csillaggal (*) vannak jelölve és csak akkor jelennek meg a Hint-panelen, ha ki vannak töltve.';
$app_strings['LBL_HINT_CONFIG_FIELD_NAME'] = 'Mező neve';
$app_strings['LBL_HINT_CONFIG_ENRICH_FIELD'] = 'Mező kitöltése';
$app_strings['LBL_HINT_CONFIG_FIELD_SHOW1'] = 'Megmutatás a Hint-ben';
$app_strings['LBL_HINT_CONFIG_FIELD_SHOW2'] = 'Megmutatás a Hint-panelen';
$app_strings['LBL_HINT_ADDITIONAL_FIELD_SUBTITLE'] = 'További Sugar-mezők';
$app_strings['LBL_HINT_ADDITIONAL_FIELD_SUBTITLE_NOTE'] = 'Ez a szekció megmutatja az összes olyan Sugar-mezőt, amelyet nem töltött ki a Hint.';
$app_strings['LBL_HINT_RESYNC_NOTIFICATION_TITLE'] = 'Figyelmeztetés';
$app_strings['LBL_HINT_RESYNC_NOTIFICATION_DESCRIPTION'] = 'Vigyázat: szinkronizálni készül a Hint Insights szolgáltatással. Minden függőben lévő e-mail történet elveszik, a létezőek pedig törlésre kerülnek az Insights dashlet-jéből. Minden értesítéstípus folytatódni fog a szinkronizációt követően.';

$app_strings['LBL_HINT_ACCOUNT_CHANGE_TITLE'] = 'Az Ön {{_moduleSingular}} moduljához ajánlott vállalatok listája alább található. Válassza ki a megtekinteni kívánt vállalati adatokat.';
$app_strings['LBL_HINT_NO_ACCOUNT_SELECTED'] = 'Nincs fiók kiválasztva';

$app_strings['LBL_HINT_EMAIL_IMPORT_TITLE'] = 'Több e-mailt találtunk, válassza ki az importálni kívánt e-maileket: ';

$app_strings['LBL_HINT_HELP_MESSAGE1'] = 'A megadott adatok alapján a Hint nem talált egyezést a rendszerben.';
$app_strings['LBL_HINT_HELP_MESSAGE2'] = 'A legjobb találatok megtekinthetőek a Hint-ben a személy nevével és e-mail címével.';
$app_strings['LBL_HINT_HELP_MESSAGE3'] = 'A legjobb találhatóak megtalálhatóak a Hintben a vállalat e-mail címével.';
$app_strings['LBL_HINT_HELP_DEFAULT_MESSAGE1A'] = "Enter your {{_moduleSingular}}'s company name or website and hint will search for additional data.";
$app_strings['LBL_HINT_HELP_DEFAULT_MESSAGE1B'] = "Enter your {{currentModule}}'s email address and hint will search for additional data.";

$app_strings['LBL_HINT_HISTORY_NONE'] = 'Nincs elérhető előzményadat';
$app_strings['LBL_HINT_HISTORY_TITLE'] = 'Aktivitási előzmények';

$app_strings['LBL_HINT_PREVIEW_TITLE'] = 'Adatkitöltés';
$app_strings['LBL_HINT_PREVIEW_LICENSE_EXPIRED'] = 'A SugarCRM Hint szolgáltatásához tartozó licence lejárt. Vegye fel a kapcsolatot a SugarCRM adminisztrátorával a licence megújításához.';
$app_strings['LBL_HINT_PREVIEW_QUESTION'] = 'Szeretné megnézni, hogy mit tehet a SugarCRM Hint szolgáltatása Önért és vállalatáért? Vegye fel a kapcsolatot a SugarCRM adminisztrátorával a Hint hozzáadásához.';
$app_strings['LBL_HINT_PREVIEW_NO_ACCOUNT_INFO'] = 'Fiókadatok nem találhatóak';
$app_strings['LBL_HINT_PREVIEW_TOOLTIP_TITLE'] = 'Kitöltött adat található – kattintson ide minden kitöltött adat bejegyzésbe történő elmentéséért.';
$app_strings['LBL_HINT_PREVIEW_CLICK_TO_SAVE'] = 'Kattintson ide, ha el szeretné menteni a kitöltött adatokat a bejegyzésébe.';

$app_strings['LBL_HINT_CONTACTS_TITLE'] = 'Kapcsolódó kapcsolatok';
$app_strings['LBL_HINT_CONTACTS_NONE'] = 'Nincsenek kapcsolódó kapcsolatok';

$app_strings['LBL_HINT_NEWS'] = 'Hírek';
$app_strings['LBL_HINT_GENERAL'] = 'Általános';
$app_strings['LBL_HINT_ALL_NEWS'] = 'Minden hír';
$app_strings['LBL_HINT_FILTER_NEWS'] = 'Hírek szűrése';
$app_strings['LBL_HINT_FINANCIAL_NEWS'] = 'Pénzügyi';
$app_strings['LBL_HINT_PERSONNEL_NEWS'] = 'Személyzeti';
$app_strings['LBL_HINT_PRESS_RELEASES'] = 'Sajtóközlemények';
$app_strings['LBL_HINT_OTHER_NEWS'] = 'Egyéb';
$app_strings['LBL_HINT_NEWS_PLACEHOLDER'] = 'Keresés a hírek között';
$app_strings['LBL_HINT_NEWS_ALERT'] = 'Hint Insights';
$app_strings['LBL_HINT_NEWS_NONE'] = 'Nincsenek elérhető hírek';
$app_strings['LBL_NEW_NOTIFICATIONS'] = 'Új értesítések';
$app_strings['LBL_HINT_DASHLET_ALLOWED1'] = 'You must have a Hint license to view the Hint Insights dashlet.
Ask your administrator about getting a Hint license.';

$app_strings['LBL_HINT_FOR'] = 'Ezért:';
$app_strings['LBL_HINT_WITH'] = 'vele:';
$app_strings['LBL_HINT_SHOW_ME'] = 'Mutasd meg nekem: ';
$app_strings['LBL_HINT_NOTIFY_ME_BY'] = 'Értesíts engem ezen keresztül:';

$app_strings['LBL_NOTIFICATIONS_TITLE'] = 'Hint Insights beállítások központ';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE'] = 'Opcionális kulcsbeállítás';
$app_strings['LBL_HINT_PREFERENCES'] = 'Beállítások';
$app_strings['LBL_HINT_MINIMUM_PREFERENCES'] = 'Inaktívak törlése, legalább egy beállítási nyilatkozat szükséges';
$app_strings['LBL_HINT_MAXIMUM_PREFERENCES'] = 'Hozzáadás inaktív, elérte a maximális beállításnyilatkozatok számát';

$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_DASHLET'] = 'Adja hozzá a Hint Insights dashlethez';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_BROWSER'] = 'Felugró ablak asztali értesítésként';
$app_strings['LBL_NOTIFICATIONS_KEY_DESCR_BROWSER'] = 'Az értesítéseket engedélyezni kell minden böngészőben és minden asztali számítógépen ahhoz, hogy rendszeresen megkapja őket.';
$app_strings['LBL_NOTIFICATIONS_KEY_DESCR_BROWSER_DISABLED'] = 'Néhány böngésző, mint például az Internet Explorer, nem támogatja az értesítéseket. Az értesítéseket nem lehet engedélyezni, ha a böngésző nem támogatja azokat.';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_EMAIL'] = 'Azonnali e-mail-riasztás minden értesítés esetén';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_DAILY'] = 'Napi e-mail összefoglaló küldése';
$app_strings['LBL_NOTIFICATIONS_KEY_TITLE_WEEKLY'] = 'Heti e-mail összefoglaló küldése';

$app_strings['LBL_NOTIFICATIONS_ERROR_MESSAGE_FAILEDSYNC'] = 'A beállításokat nem sikerült elmenteni. Ellenőrizze a rendszere kapcsolatát és próbálja újra.';
$app_strings['LBL_NOTIFICATIONS_ERROR_MESSAGE_MISSING_REQUIRED'] = 'Néhány kötelezően kitöltendő mező nem tartalmaz értéket. Kérjük, ellenőrizze a beállításait és győződjön meg róla, hogy minden kötelező mezőt kitöltött.';

$app_strings['LBL_HINT_PUSH_MESSAGES_PERMISSION'] = 'Engedélyezni fogja a böngészőn keresztül történő értesítéseket a Hint Insights számára. Kattintson a megerősítésre a folytatáshoz. A böngészője ezt követően engedélyt fog kérni Öntől az eseményekkel kapcsolatos értesítések megjelenítésére.';
$app_strings['LBL_HINT_PUSH_ERROR'] = 'A felugró értesítések beépülő modul az előfeltételei nélkül lett regisztrálva a következőhöz: {{options.type}}. A beépülő modul nem fog rendeltetésszerűen működni, ezért győződjön meg róla, hogy biztosít egy útvonalat a munkafájlnak, és egy módszert a feliratkozás szerverre történő mentésének.';

$app_strings['LBL_HINT_CONFIG_ENABLE_NOTIFICATIONS'] = 'A Hint-értesítések BEKAPCSOLÁSA minden felhasználó számára';
$app_strings['LBL_HINT_CONFIG_DISABLE_NOTIFICATIONS'] = 'A Hint-értesítések KIKAPCSOLÁSA minden felhasználó számára';
