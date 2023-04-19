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

$mod_strings = array(
    'LBL_MODULE_NAME' => 'Tervisekontroll',
    'LBL_MODULE_NAME_SINGULAR' => 'Tervisekontroll',
    'LBL_MODULE_TITLE' => 'Tervisekontroll',
    'LBL_LOGFILE' => 'Logifail',
    'LBL_BUCKET' => 'Kimp',
    'LBL_FLAG' => 'Lipp',
    'LBL_LOGMETA' => 'Logi meta',
    'LBL_ERROR' => 'Tõrge',

    // Failure handling in SugarBPM upgraders
    'LBL_PA_UNSERIALIZE_DATA_FAILURE' => 'Seeriatesse jaotatud andmete seeriatena esitamist ei saanud tühistada',
    'LBL_PA_UNSERIALIZE_OBJECT_FAILURE' => 'Seeriatesse jaotatud andmete seeriatena esitamist ei saanud tühistada, sest need sisaldavad viiteid objektidele või klassidele',

    'LBL_SCAN_101_LOG' => '%s on stuudio ajalugu',
    'LBL_SCAN_102_LOG' => '%s on laiendid: %s',
    'LBL_SCAN_103_LOG' => '%s on kohandatud vardefid',
    'LBL_SCAN_104_LOG' => '%s on kohandatud layoutdefid',
    'LBL_SCAN_105_LOG' => '%s on kohandatud viewdefid',

    'LBL_SCAN_201_LOG' => '%s ei ole varude moodul',

    'LBL_SCAN_301_LOG' => '%s käivitada kui BWC',
    'LBL_SCAN_302_LOG' => 'Tundmatu faili vaated – %s ei ole moodulikoosturi moodul',
    'LBL_SCAN_303_LOG' => 'Mittetühja vormi fail %s – %s ei ole moodulikoosturi moodul',
    'LBL_SCAN_304_LOG' => 'Tundmatud failid: %s%s – %s ei ole moodulikoosturi moodul',
    'LBL_SCAN_305_LOG' => 'Halvad vardefid – peamine %s, nimi %s moodulis %s',
    'LBL_SCAN_306_LOG' => 'Halvad vardefid – seotud väljal %s moodulis %s on tühi moodul',
    'LBL_SCAN_307_LOG' => 'Halvad vardefid – link %s moodulis %s viitab sobimaule seosele',
    'LBL_SCAN_308_LOG' => 'Vardefi HTML-i funktsioon suvandis %s',
    'LBL_SCAN_309_LOG' => 'Halb md5 %s puhul',
    'LBL_SCAN_310_LOG' => 'Tundmatu fail %s/%s',
    'LBL_SCAN_311_LOG' => 'Vardefi HTML-i funktsioon %s moodulis $module välja %s puhul',
    'LBL_SCAN_312_LOG' => 'Halvad vardefid – nime välja tüüp on sobimatu %s, moodul – %s',
    'LBL_SCAN_313_LOG' => 'Tuvastati laiend dir %s – %s ei ole moodulikoosturi moodul',
    'LBL_SCAN_314_LOG' => "Halvad vardefid – multienum väli %s suvandite loendi %s võtmetega sisaldab sobimatuid märke – {%s} moodulis %s",

    'LBL_SCAN_401_LOG' => 'Leiti tarnija failide lisamine failide puhul, mis on teisaldatud tarnijasse:'. PHP_EOL .'%s',
    'LBL_SCAN_402_LOG' => 'Halb moodul %s – pole loendis beanList ega failisüsteemis',
    'LBL_SCAN_403_LOG' => 'Leiti konkreetsete Sugari failide lisamine järgmise puhul:' . PHP_EOL .'%s',
    'LBL_SCAN_520_LOG' => 'Haak after_ui_frame tuvastati suvandis %s',
    'LBL_SCAN_521_LOG' => 'Haak after_ui_footer tuvastati suvandis %s',
//    'LBL_SCAN_405_LOG' => 'Incompatible Integration - %s %s',
    'LBL_SCAN_406_LOG' => '%s on toetamata kohandatud vaateid. Need kohandatud vaadete failid teisaldatakse täiendamisel kataloogi Keelatud',
    'LBL_SCAN_407_LOG' => '%s on toetamata kohandatud vaateid. Need kohandatud vaadete failid teisaldatakse täiendamisel kataloogi Keelatud',
    'LBL_SCAN_408_LOG' => '%s-s leiti kohandatud loomistegevuse komponente. Need komponendid kopeeritakse ja neid muudetakse loomiskomponendi laiendamiseks, mitte täiendamise ajal',
    'LBL_SCAN_409_LOG' => 'Kehtetud vardefid – "link_file" on iganenud. Lingiklass, mis on täpsustatud atribuudis "link_class", peab olema automaatselt laaditav',
    'LBL_SCAN_519_LOG' => 'Tuvastati laiendi kataloog %s',
    'LBL_SCAN_518_LOG' => 'Leiti kohandatud kood %s suvandis %s, fail %s',
    'LBL_SCAN_410_LOG' => 'Max väljad – leiti rohkem kui %s välja (%s) suvandis %s',
    'LBL_SCAN_522_LOG' => 'Leiti get_subpanel_data koos suvandiga function: väärtus suvandis %s',
    'LBL_SCAN_412_LOG' => 'Halb alampaneeli link %s suvandis %s',
    'LBL_SCAN_413_LOG' => 'Tuvastati tundmatu vidinaklass: %s suvandi %s puhul, moodul %s failis %s',
    'LBL_SCAN_414_LOG' => 'CRYS-36 käsitleb tundmatuid välju, mistõttu siin rohkem kontrolle ei toimu',
    'LBL_SCAN_415_LOG' => 'Halb haagifail suvandis %s: %s',
    'LBL_SCAN_523_LOG' => 'By-ref parameeter haagifaili %s funktsioonis %s',
    'LBL_SCAN_417_LOG' => 'Sobimatu moodul %s',
    'LBL_SCAN_418_LOG' => 'Leiti alampaneel lingiga olematule moodulile: %s failis %s',
    'LBL_SCAN_419_LOG' => 'Halvad vardefid – võti %s, nimi %s moodulis %s',
    'LBL_SCAN_420_LOG' => 'Halvad vardefid – seotud väljal %s moodulis %s on tühi moodul',
    'LBL_SCAN_421_LOG' => 'Halvad vardefid – link %s moodulis %s viitab sobimatule seosele',
    'LBL_SCAN_422_LOG' => 'Moodulil %s on teise mooduli %s määratlus failis %s',
    'LBL_SCAN_525_LOG' => 'Vardefi HTML-i funktsioon suvandis %s',
    'LBL_SCAN_423_LOG' => 'Halvad vardefide alamväljad – %s viitab halvale alamväljale %s. Asub moodulis %s',
    'LBL_SCAN_424_LOG' => 'Leiti tekstisisene HTML suvandis %s real %s',
    'LBL_SCAN_425_LOG' => 'Leiti echo suvandist %s real %s',
    'LBL_SCAN_426_LOG' => 'Leiti print suvandist %s real %s',
    'LBL_SCAN_427_LOG' => 'Leiti die/exit suvandist %s real %s',
    'LBL_SCAN_428_LOG' => 'Leiti print_r suvandist %s real %s',
    'LBL_SCAN_429_LOG' => 'Leiti var_dump suvandist %s real %s',
    'LBL_SCAN_430_LOG' => 'Leiti väljundpuhverdus (%s) suvandist %s real %s',
    'LBL_SCAN_431_LOG' => 'Leiti kohandatud Smarty mall: "%s"',
    'LBL_SCAN_436_LOG' => 'Leiti kohandatud PDFi mall: "%s"',
    'LBL_SCAN_437_LOG' => 'Smarty mall ei ühildu Smarty3 süntaksiga: "%s"',
    'LBL_SCAN_438_LOG' => 'Leiti kohandatud PDFi mall, mida ei saa automaatselt Smarty3 süntaksiks konvertida: "%s"',
    'LBL_SCAN_439_LOG' => 'Mall ei ühildu Smarty3 süntaksiga, vahele jäetud: "%s".',
    'LBL_SCAN_451_LOG' => 'AuthN-kood on kustutatud, kasutage selle asemel koodi \IdMSugarAuthenticate, \IdMSAMLAuthenticate, \IdMLDAPAuthenticate. Failid, mis kasutavad kustatud koodi: ' . PHP_EOL . '%s',
    'LBL_SCAN_524_LOG' => 'Vardefi HTML-i funktsioon %s moodulis %s välja %s puhul',
    'LBL_SCAN_432_LOG' => 'Halvad vardefid – nime välja tüüp on sobimatu %s, moodul – %s',
    'LBL_SCAN_526_LOG' => "Halvad vardefid – multienum väli %s suvandite loendi %s võtmetega sisaldab sobimatuid märke – %s moodulis %s",
    'LBL_SCAN_527_LOG' => "Tabeli nimi oas %s ei ühti tabeli atribuudiga suvandis %s/vardefs.php",
    'LBL_SCAN_528_LOG' => 'Väljal %s moodulis %s on vale suvandi display_default väärtus',
    'LBL_SCAN_529_LOG' => '%s: %s failis %s real %s',
    'LBL_SCAN_530_LOG' => 'Puuduv kohandatud fail: %s',
    'LBL_SCAN_531_LOG' => 'Iganenud andmebaasi draiver: %s',
    'LBL_SCAN_532_LOG' => 'A class in %s calls its stock parent&#39;s constructor as %s::%s()',
    'LBL_SCAN_533_LOG' => 'A class in %s calls its custom parent&#39;s constructor as %s::%s()',
    'LBL_SCAN_534_LOG' => 'Toetuseta andmebaasi draiver: %s',
    'LBL_SCAN_535_LOG' => 'Unsupported method call: %s() in %s on line %s',
    'LBL_SCAN_536_LOG' => 'Unsupported property access: $%s in %s on line %s',
    'LBL_SCAN_433_LOG' => 'Leiti kohandatud Elastic Searchi failid %s',
    'LBL_SCAN_434_LOG' => 'Leiti massiivi funktsioonide kasutamine suvandis $_SESSION failides: %s',
    'LBL_SCAN_435_LOG' => 'Klass SugarSession eemaldati API-st, kasutage selle asemel rada Sugarcrm\Sugarcrm\Session\SessionStorage. Iganenud koodiga failid: ' . PHP_EOL . '%s',
    'LBL_SCAN_550_LOG' => 'Use of removed Sidecar app.date APIs in %s',
    'LBL_SCAN_551_LOG' => 'Use of removed Sidecar Bean APIs in %s',
    'LBL_SCAN_560_LOG' => 'custom/modules/Quotes/quotes.js võib sisaldada kohandamisi, mis ei ühildu uute pakkumustega.',
    'LBL_SCAN_561_LOG' => 'custom/modules/Quotes/EditView.js võib sisaldada kohandamisi, mis ei ühildu uute pakkumustega.',
    'LBL_SCAN_562_LOG' => 'Use of removed Sidecar app.view.invokeParent method in %s',
    'LBL_SCAN_570_LOG' => 'Meilide olek ja tüüp on kehtetud: olek=%s, tüüp=%s',
    'LBL_SCAN_571_LOG' => 'Aegunud faili on kohandatud: %s',
    'LBL_SCAN_572_LOG' => 'Kohandatud failil on nimekonflikt: %s',
    'LBL_SCAN_573_LOG' => 'Kohandatud spikrifailil on nimekonflikt: %s',
    'LBL_SCAN_574_LOG' => 'Alampaneelil Meilid on kohandatud kategooria: %s',
    'LBL_SCAN_575_LOG' => 'Suvandi Meilid alampaneeli Kontaktid tuleb muuta, et kasutada kontaktide arhiivitud meilide alampaneeli: %s',
    'LBL_SCAN_576_LOG' => 'Suvandis &#39;%s&#39; tuvastati rüüde kohandused. Rüü lõpptulemus ei pruugi toimida eeldatud viisil, kontrollige oma rüü kohandusi.',
    'LBL_SCAN_580_LOG' => 'Removed jQuery function(s) detected in: `%s`.',
    'LBL_SCAN_585_LOG' => 'Leitud keelatud laused `%s`: %s',
    'LBL_SCAN_586_LOG' => 'FontAwesome on alates 11.2 aegunud ning seda ei toetata 12.0 versiooni puhul. FontAwesome&#39;i kasutamine tuvastati järgmisel juhul: %s',

    'LBL_SCAN_501_LOG' => 'Puuduv fail: %s',
    'LBL_SCAN_502_LOG' => 'md5 lahknevus %s puhul, eeldatud %s',
    'LBL_SCAN_503_LOG' => 'Kohandatud moodul on sama nimega kui uus Sugar7 moodul: %s',
    'LBL_SCAN_504_LOG' => 'Moodulist %s puudub välja tüüp: %s',
    'LBL_SCAN_505_LOG' => 'Tüübi muutumine suvandis %s välja %s puhul: alates %s kuni %s',
    'LBL_SCAN_506_LOG' => '$this kasutamine suvandis %s',
    'LBL_SCAN_507_LOG' => 'Halvad vardefide alamväljad – %s viitab halvale alamväljale %s. Asub moodulis %s',
    'LBL_SCAN_508_LOG' => 'Leiti tekstisisene HTML suvandis %s real %s',
    'LBL_SCAN_509_LOG' => 'Leiti echo suvandist %s real %s',
    'LBL_SCAN_510_LOG' => 'Leiti print suvandist %s real %s',
    'LBL_SCAN_511_LOG' => 'Leiti die/exit suvandist %s real %s',
    'LBL_SCAN_512_LOG' => 'Leiti print_r suvandist %s real %s',
    'LBL_SCAN_513_LOG' => 'Leiti var_dump suvandist %s real %s',
    'LBL_SCAN_514_LOG' => 'Leiti väljundpuhverdus (%s) suvandist %s real %s',
    'LBL_SCAN_515_LOG' => 'Skripti tõrge: %s',
    'LBL_SCAN_516_LOG' => 'Varem eemaldatud failid leiti viidatuna: %s',
    'LBL_SCAN_517_LOG' => 'Ühildumatu integratsioon – %s %s',
    'LBL_SCAN_540_LOG' => 'Ühildumatu integratsiooni andmete lähtestamine – %s %s',
    'LBL_SCAN_541_LOG' => 'Kehtetu SugarBPM-i serialiseerimine – %s kehtetu serialiseerimine tabeli %s veerus %s:  %s.',
    'LBL_SCAN_542_LOG' => 'Kehtetu SugarBPM-i väljakasutus – %s kehtetu väljakasutus kohas %s.',
    'LBL_SCAN_545_LOG' => 'SugarBPM-i osaliselt lukustatud väljagrupp – väli %4$s lukustatud rühmas %s valikus Protsessi määratlus %s mooduli %s jaoks.',
    'LBL_SCAN_546_LOG' => 'Custom Knowledge Base TinyMCE config',
    'LBL_SCAN_547_LOG' => 'Eemaldatud `resetLoadFlag` signatuuri kasutamine %s',
    'LBL_SCAN_548_LOG' => 'Ebasoovitatava `initButtons` meetodi kasutamine %s',
    'LBL_SCAN_549_LOG' => 'Eemaldatud `getField` signatuuri kasutamine %s',
    'LBL_SCAN_552_LOG' => 'Use of removed Underscore APIs in %s',
    'LBL_SCAN_553_LOG' => 'Use of removed Sidecar Bean APIs in %s',
    'LBL_SCAN_554_LOG' => 'Sidecar controller %s extends from removed Sidecar controller',

    'LBL_SCAN_901_LOG' => 'Eksemplar on juba Sugar 7 täiendatud',
    'LBL_SCAN_903_LOG' => 'Täiendaja versiooni ei toetata. Installige asjakohane SugarUpgradeWizardPrereq pakett',
    'LBL_SCAN_904_LOG' => 'Leiti NULL väärtust stringides moduleList. Fail: %s, moodulid: %s',
    'LBL_SCAN_999_LOG' => 'Tundmatu tõrge, võtke ühendust toega',

    'LBL_SCAN_101_TITLE' => '%s on stuudio ajalugu',
    'LBL_SCAN_102_TITLE' => '%s on laiendid: %s',
    'LBL_SCAN_103_TITLE' => '%s on kohandatud vardefid',
    'LBL_SCAN_104_TITLE' => '%s on kohandatud layoutdefid',
    'LBL_SCAN_105_TITLE' => '%s on kohandatud viewdefid',

    'LBL_SCAN_201_TITLE' => '%s ei ole varude moodul',

    'LBL_SCAN_301_TITLE' => '%s käivitada kui BWC',
    'LBL_SCAN_302_TITLE' => 'Tundmatu faili vaated – %s ei ole moodulikoosturi moodul',
    'LBL_SCAN_303_TITLE' => 'Mittetühja vormi fail %s – %s ei ole moodulikoosturi moodul',
    'LBL_SCAN_304_TITLE' => 'Tundmatud failid: %s%s – %s ei ole moodulikoosturi moodul',
    'LBL_SCAN_305_TITLE' => 'Halvad vardefid – võti %s, nimi %s moodulis %s',
    'LBL_SCAN_306_TITLE' => 'Halvad vardefid – seotud väljal %s moodulis %s on tühi moodul',
    'LBL_SCAN_307_TITLE' => 'Halvad vardefid – link %s moodulis %s viitab sobimatule seosele',
    'LBL_SCAN_308_TITLE' => 'Vardefi HTML-i funktsioon suvandis %s',
    'LBL_SCAN_309_TITLE' => 'Halb md5 %s puhul',
    'LBL_SCAN_310_TITLE' => 'Tundmatu fail %s/%s',
    'LBL_SCAN_311_TITLE' => 'Vardefi HTML-i funktsioon %s moodulis $module välja %s puhul',
    'LBL_SCAN_312_TITLE' => 'Halvad vardefid – nime välja tüüp on sobimatu %s, moodul – %s',
    'LBL_SCAN_313_TITLE' => 'Tuvastati laiend dir %s – %s ei ole moodulikoosturi moodul',

    'LBL_SCAN_401_TITLE' => 'Leiti tarnija failide lisamine failide puhul, mis on teisaldatud tarnijasse:'. PHP_EOL .'%s',
    'LBL_SCAN_402_TITLE' => 'Halb moodul %s – pole loendis beanList ega failisüsteemis',
    'LBL_SCAN_403_TITLE' => 'Leiti konkreetsete Sugari failide lisamine järgmise puhul:' . PHP_EOL .'%s',
    'LBL_SCAN_520_TITLE' => 'Haak after_ui_frame tuvastati suvandis %s',
    'LBL_SCAN_521_TITLE' => 'Haak after_ui_footer tuvastati suvandis %s',
//    'LBL_SCAN_405_TITLE' => 'Incompatible Integration - %s %s',
    'LBL_SCAN_406_TITLE' => '%s on toetamata kohandatud vaateid. Need kohandatud vaadete failid teisaldatakse täiendamisel kataloogi Keelatud',
    'LBL_SCAN_407_TITLE' => '%s on toetamata kohandatud vaateid. Need kohandatud vaadete failid teisaldatakse täiendamisel kataloogi Keelatud',
    'LBL_SCAN_408_TITLE' => 'Leiti kohandatud loomistegevuse komponente, mida enam ei toetata.',
    'LBL_SCAN_409_TITLE' => 'Kehtetud vardefid – moodulil %s on välja %s jaoks kehtetud vardefid.',
    'LBL_SCAN_519_TITLE' => 'Tuvastati laiendi kataloog %s',
    'LBL_SCAN_518_TITLE' => 'Leiti kohandatud kood %s suvandis %s, fail %s',
    'LBL_SCAN_410_TITLE' => 'Max väljad – leiti rohkem kui %s välja (%s) suvandis %s',
    'LBL_SCAN_522_TITLE' => 'Leiti get_subpanel_data koos suvandiga function: väärtus suvandis %s',
    'LBL_SCAN_412_TITLE' => 'Halb alampaneeli link %s suvandis %s',
    'LBL_SCAN_413_TITLE' => 'Tuvastati tundmatu vidinaklass: %s suvandi %s puhul, moodul %s failis %s',
    'LBL_SCAN_414_TITLE' => 'CRYS-36 käsitleb tundmatuid välju, mistõttu siin rohkem kontrolle ei toimu',
    'LBL_SCAN_415_TITLE' => 'Halb haagifail suvandis %s: %s',
    'LBL_SCAN_523_TITLE' => 'By-ref parameeter haagifaili %s funktsioonis %s',
    'LBL_SCAN_417_TITLE' => 'Sobimatu moodul %s',
    'LBL_SCAN_418_TITLE' => 'Leiti alampaneel lingiga olematule moodulile: %s failis %s',
    'LBL_SCAN_419_TITLE' => 'Halvad vardefid – võti %s, nimi %s moodulis %s',
    'LBL_SCAN_420_TITLE' => 'Halvad vardefid – seotud väljal %s moodulis %s on tühi moodul',
    'LBL_SCAN_421_TITLE' => 'Halvad vardefid – link %s moodulis %s viitab sobimatule seosele',
    'LBL_SCAN_422_TITLE' => 'Moodulil %s on teise mooduli määratlus',
    'LBL_SCAN_525_TITLE' => 'Vardefi HTML-i funktsioon suvandis %s',
    'LBL_SCAN_423_TITLE' => 'Halvad vardefide alamväljad – %s viitab halvale alamväljale %s. Asub moodulis %s',
    'LBL_SCAN_424_TITLE' => 'Leiti tekstisisene HTML suvandis %s real %s',
    'LBL_SCAN_425_TITLE' => 'Leiti echo suvandist %s real %s',
    'LBL_SCAN_426_TITLE' => 'Leiti print suvandist %s real %s',
    'LBL_SCAN_427_TITLE' => 'Leiti die/exit suvandist %s real %s',
    'LBL_SCAN_428_TITLE' => 'Leiti print_r suvandist %s real %s',
    'LBL_SCAN_429_TITLE' => 'Leiti var_dump suvandist %s real %s',
    'LBL_SCAN_430_TITLE' => 'Leiti väljundpuhverdus (%s) suvandist %s real %s',
    'LBL_SCAN_431_TITLE' => 'Leiti kohandatud Smarty mall: "%s"',
    'LBL_SCAN_436_TITLE' => 'Leiti kohandatud PDFi mall: "%s"',
    'LBL_SCAN_437_TITLE' => 'Smarty mall ei ühildu Smarty3 süntaksiga: "%s"',
    'LBL_SCAN_438_TITLE' => 'Leiti kohandatud PDFi mall, mida ei saa automaatselt Smarty3 süntaksiks konvertida: "%s"',
    'LBL_SCAN_439_TITLE' => 'Mall ei ühildu Smarty3 süntaksiga, vahele jäetud: "%s"',
    'LBL_SCAN_451_TITLE' => 'AuthN-kood on kustutatud, kasutage selle asemel koodi \IdMSugarAuthenticate, \IdMSAMLAuthenticate, \IdMLDAPAuthenticate. Failid, mis kasutavad kustatud koodi: ' . PHP_EOL . '%s',
    'LBL_SCAN_524_TITLE' => 'Vardefi HTML-i funktsioon %s moodulis %s välja %s puhul',
    'LBL_SCAN_432_TITLE' => 'Halvad vardefid – nime välja tüüp on sobimatu %s, moodul – %s',
    'LBL_SCAN_433_TITLE' => 'Leiti kohandatud Elastic Searchi failid %s',
    'LBL_SCAN_434_TITLE' => 'Leiti massiivi funktsioonide kasutamine suvandis $_SESSION failides: %s',
    'LBL_SCAN_435_TITLE' => 'Leiti eemaldatud klassi SugarSession kasutamine',
    'LBL_SCAN_550_TITLE' => 'Use of removed Sidecar app.date APIs in %s',
    'LBL_SCAN_551_TITLE' => 'Use of removed Sidecar Bean APIs in %s',

    'LBL_SCAN_501_TITLE' => 'Puuduv fail: %s',
    'LBL_SCAN_502_TITLE' => 'md5 lahknevus %s puhul, eeldatud %s',
    'LBL_SCAN_503_TITLE' => 'Kohandatud moodul on sama nimega kui uus Sugar7 moodul: %s',
    'LBL_SCAN_504_TITLE' => 'Moodulist %s puudub välja tüüp: %s',
    'LBL_SCAN_505_TITLE' => 'Tüübi muutumine suvandis %s välja %s puhul: alates %s kuni %s',
    'LBL_SCAN_506_TITLE' => '$this kasutamine suvandis %s',
    'LBL_SCAN_507_TITLE' => 'Halvad vardefide alamväljad – %s viitab halvale alamväljale %s moodulis %s. Asub moodulis %s',
    'LBL_SCAN_508_TITLE' => 'Leiti tekstisisene HTML suvandis %s real %s',
    'LBL_SCAN_509_TITLE' => 'Leiti echo suvandist %s real %s',
    'LBL_SCAN_510_TITLE' => 'Leiti print suvandist %s real %s',
    'LBL_SCAN_511_TITLE' => 'Leiti die/exit suvandist %s real %s',
    'LBL_SCAN_512_TITLE' => 'Leiti print_r suvandist %s real %s',
    'LBL_SCAN_513_TITLE' => 'Leiti var_dump suvandist %s real %s',
    'LBL_SCAN_514_TITLE' => 'Leiti väljundpuhverdus (%s) suvandist %s real %s',
    'LBL_SCAN_515_TITLE' => 'Skripti tõrge: %s',
    'LBL_SCAN_517_TITLE' => 'Ühildumatu integratsioon – %s %s',
    'LBL_SCAN_526_TITLE' => "Halvad vardefid – multienum väli %s suvandite loendi %s võtmetega sisaldab sobimatuid märke – %s moodulis %s",
    'LBL_SCAN_528_TITLE' => 'Väljal %s moodulis %s on vale suvandi display_default väärtus',
    'LBL_SCAN_529_TITLE' => '%s: %s failis %s real %s',
    'LBL_SCAN_530_TITLE' => 'Puuduv kohandatud fail: %s',
    'LBL_SCAN_531_TITLE' => 'Iganenud andmebaasi draiver: %s',
    'LBL_SCAN_532_TITLE' => 'Stock parent PHP4 constructor call in %s',
    'LBL_SCAN_533_TITLE' => 'Custom parent PHP4 constructor call in %s',
    'LBL_SCAN_534_TITLE' => 'Toetuseta andmebaasi draiver: %s',
    'LBL_SCAN_535_TITLE' => 'Unsupported method call: %s()',
    'LBL_SCAN_536_TITLE' => 'Unsupported property access: $%s',
    'LBL_SCAN_540_TITLE' => 'Ühildumatu integratsiooni andmete lähtestamine – %s %s',
    'LBL_SCAN_541_TITLE' => 'Kehtetu SugarBPM-i serialiseerimine – %s kehtetu serialiseerimine tabeli %s veerus %s: %s',
    'LBL_SCAN_542_TITLE' => 'Kehtetu SugarBPM-i väljakasutus – %s kehtetu väljakasutus kohas %s.',
    'LBL_SCAN_545_TITLE' => 'SugarBPM-i osaliselt lukustatud väljagrupp – %3$s moodul: rühm %s on osaliselt lukustatud valikus Protsessi määratlus %s.',
    'LBL_SCAN_546_TITLE' => 'Custom Knowledge Base TinyMCE config',
    'LBL_SCAN_547_TITLE' => 'Eemaldatud `resetLoadFlag` signatuuri kasutamine %s',
    'LBL_SCAN_548_TITLE' => 'Ebasoovitatava `initButtons` meetodi kasutamine %s',
    'LBL_SCAN_549_TITLE' => 'Eemaldatud `getField` signatuuri kasutamine %s',
    'LBL_SCAN_552_TITLE' => 'Use of removed Underscore APIs in %s',
    'LBL_SCAN_553_TITLE' => 'Use of removed Sidecar Bean APIs in %s',
    'LBL_SCAN_554_TITLE' => 'Sidecar controller %s extends from removed Sidecar controller',
    'LBL_SCAN_570_TITLE' => 'Meilidest on leitud ootamatuid väärtusi',
    'LBL_SCAN_571_TITLE' => 'Kohandatud fail sisaldab aegunud koodi',
    'LBL_SCAN_572_TITLE' => 'Kohandatud failiga on nimekonflikt',
    'LBL_SCAN_573_TITLE' => 'Kohandatud spikrifailiga on nimekonflikt',
    'LBL_SCAN_574_TITLE' => 'Alampaneelil Meilid on tehtud kohandusi',
    'LBL_SCAN_575_TITLE' => 'Suvandi Meilid alampaneelil Kontaktid on tehtud kohandusi',
    'LBL_SCAN_576_TITLE' => 'Tuvastati rüü kohandused',
    'LBL_SCAN_580_TITLE' => 'Removed jQuery function(s) detected',
    'LBL_SCAN_585_TITLE' => 'Leitud keelatud laused',
    'LBL_SCAN_586_TITLE' => 'Tuvastati FontAwesome&#39;i aegununa kasutamine',

    'LBL_SCAN_901_TITLE' => 'Eksemplar on juba Sugar 7 täiendatud',
    'LBL_SCAN_903_TITLE' => 'Upgraderi versioon pole toetatud',
    'LBL_SCAN_904_TITLE' => 'Leiti NULL väärtust stringides moduleList',
    'LBL_SCAN_999_TITLE' => 'Tundmatu tõrge, võtke ühendust toega',

    'LBL_SCAN_101_DESCR' => 'Teie eksemplaris tuvastati Studio kohandused. Me ei eelda nende kohanduste puhul probleeme ja teie kohandused saab täiendada versioonile Sugar7.',
    'LBL_SCAN_102_DESCR' => 'Teie eksemplaris tuvastati Studio kohandused. Me ei eelda nende kohanduste puhul probleeme ja teie kohandused saab täiendada versioonile Sugar7.',
    'LBL_SCAN_103_DESCR' => 'Teie eksemplaris tuvastati Studio kohandused. Me ei eelda nende kohanduste puhul probleeme ja teie kohandused saab täiendada versioonile Sugar7.',
    'LBL_SCAN_104_DESCR' => 'Teie eksemplaris tuvastati Studio kohandused. Me ei eelda nende kohanduste puhul probleeme ja teie kohandused saab täiendada versioonile Sugar7.',
    'LBL_SCAN_105_DESCR' => 'Teie eksemplaris tuvastati Studio kohandused. Me ei eelda nende kohanduste puhul probleeme ja teie kohandused saab täiendada versioonile Sugar7.',

    'LBL_SCAN_201_DESCR' => 'Teie eksemplaris tuvastati Studio kohandused. Me ei eelda nende kohanduste puhul probleeme ja teie kohandused saab täiendada versioonile Sugar7.',

    'LBL_SCAN_301_DESCR' => 'Tuvastati konkreetsed kohandused ja neid ei viidud Sugar7-sse. See moodul (%s) on endiselt saadaval, kuid käivitatakse Sugar7 režiimil Tagasiühilduvus.',
    'LBL_SCAN_302_DESCR' => 'Tuvastati tundmatud faili vaated ja neid ei viidud Sugar7-sse. See moodul (%s) on endiselt saadaval, kuid käivitatakse Sugar7 režiimil Tagasiühilduvus. ',
    'LBL_SCAN_303_DESCR' => 'Tuvastati mittetühja vormi vaated ja neid ei viidud Sugar7-sse. See moodul (%s) on endiselt saadaval, kuid käivitatakse Sugar7 režiimil Tagasiühilduvus. ',
    'LBL_SCAN_304_DESCR' => 'Tuvastati tundmatud failid (%s%s) ja neid ei viidud Sugar7-sse. See moodul (%s) on endiselt saadaval, kuid käivitatakse Sugar7 režiimil Tagasiühilduvus. ',
    'LBL_SCAN_305_DESCR' => 'Tuvastati halvad vardefid (%s: %s) moodulis %s ja neid ei viidud Sugar7-sse. See kohandus on endiselt saadaval, kuid käivitatakse Sugar7 režiimil Tagasiühilduvus. ',
    'LBL_SCAN_306_DESCR' => 'Tuvastati halvad vardefid ja neid ei viidud Sugar7-sse. Seotud väljal (%s) moodulis %s on tühi moodul ). See kohandus on endiselt saadaval, kuid käivitatakse Sugar7 režiimil Tagasiühilduvus. ',
    'LBL_SCAN_307_DESCR' => 'Tuvastati halvad vardefid ja neid ei viidud Sugar7-sse. Link (%s) moodulis %s viitab sobimatule seosele. See kohandus on endiselt saadaval, kuid käivitatakse Sugar7 režiimil Tagasiühilduvus. ',
    'LBL_SCAN_308_DESCR' => 'Tuvastati konkreetsed kohandused ja neid ei viidud Sugar7-sse. See moodul (%s) on endiselt saadaval, kuid käivitatakse Sugar7 režiimil Tagasiühilduvus. ',
    'LBL_SCAN_309_DESCR' => 'Md5 räsi %s puhul ei ühti kastivälise failiga. Seda faili võib olla muudetud ja seda ei täiendata versioonile Sugar7',
    'LBL_SCAN_310_DESCR' => 'Tuvastati tundmatud vaate failid (%s) ja neid ei viidud Sugar7-sse. See moodul (%s) on endiselt saadaval, kuid käivitatakse Sugar7 režiimil Tagasiühilduvus.',
    'LBL_SCAN_311_DESCR' => 'Tuvastati konkreetsed kohandused ja neid ei viidud Sugar7-sse. See moodul (%s) on endiselt saadaval, kuid käivitatakse Sugar7 režiimil Tagasiühilduvus. ',
    'LBL_SCAN_312_DESCR' => 'Tuvastati halvad vardefid ja neid ei viidud Sugar7-sse. Halvad vardefid: nime välja tüüp on sobimatu %s mooduli %s puhul. See kohandus on endiselt saadaval, kuid käivitatakse Sugar7 režiimil Tagasiühilduvus. ',
    'LBL_SCAN_313_DESCR' => 'Tuvastati laiendite kataloog – %s pole moodulikoosturi moodul. See moodul on endiselt saadaval, kuid ainult režiimil Tagasiühilduvus.',

    'LBL_SCAN_401_DESCR' => 'Kohandatud fail sisaldab tarnija kataloog teisaldatud faili.  Oleme üritanud võtta kasutusele parandusmeetmed ja täiendavaid meetmeid pole vaja. ',
    'LBL_SCAN_402_DESCR' => 'Halb moodul %s – pole loendis beanList ega failisüsteemis',
    'LBL_SCAN_403_DESCR' => 'Mõne Sugari faili asukoht on Sugar 7-s muutunud. Peame nende lisatud teid parandama.',
    'LBL_SCAN_520_DESCR' => 'Seda haaki enam Sugar 7-s ei toetata',
    'LBL_SCAN_521_DESCR' => 'Seda haaki enam Sugar 7-s ei toetata',
//    'LBL_SCAN_405_DESCR' => 'Package detected which has been blacklisted as not supported in Sugar 7',
    'LBL_SCAN_406_DESCR' => 'Stock Sugari moodulis on toetamata kohandatud vaateid suvandis custom/modules/%s/views. Need kohandatud vaadete failid teisaldatakse täiendamisel kataloogi Keelatud',
    'LBL_SCAN_407_DESCR' => 'Stock Sugari moodulis on toetamata kohandatud vaateid suvandis modules/%s/views. Need kohandatud vaadete failid teisaldatakse täiendamisel kataloogi Keelatud',
    'LBL_SCAN_408_DESCR' => '%s-s leiti kohandatud loomistegevuse komponente. Need komponendid kopeeritakse ja neid muudetakse loomiskomponendi laiendamiseks, mitte täiendamise ajal',
    'LBL_SCAN_409_DESCR' => 'Vardefites olev atribuut "link_file" on iganenud. Lingiklass peab olema automaatselt laaditav',
    'LBL_SCAN_519_DESCR' => 'Stock Sugari moodulil on üks laienditest, mida me täiendamisel, näiteks kohandatud marsruutimise, juurdepääsu juhtimise, Javascripti jms puhul ei toeta.',
    'LBL_SCAN_518_DESCR' => 'Vardefid sisaldavad kasutaja customCode määratlusi, mida me teisendada ei oska',
    'LBL_SCAN_410_DESCR' => 'Vaates on liiga palju välju',
    'LBL_SCAN_522_DESCR' => 'Alampaneeli andmed võtab funktsioon, meie selle täiendamist veel ei toeta.',
    'LBL_SCAN_412_DESCR' => 'Alampaneel viitab lingile, mida pole olemas või mis pole õigesti määratletud',
    'LBL_SCAN_413_DESCR' => 'Väli viitab vidina klassi nimele, millel pole ühtivat vidina klassi faili',
    'LBL_SCAN_414_DESCR' => 'CRYS-36 käsitleb tundmatuid välju, mistõttu siin rohkem kontrolle ei toimu',
    'LBL_SCAN_415_DESCR' => 'Haak viitab olematule faili',
    'LBL_SCAN_523_DESCR' => 'Vana haagifail kasutab by-reference parameetri vahelejätmist, mis võib põhjustada tõrketeadete kuvamise (ja seega ajada segi ÜLEJÄÄNU)',
    'LBL_SCAN_417_DESCR' => 'Tuvastati mooduli vood või iFrame&#39;id, mida ei tohiks enam olemas olla',
    'LBL_SCAN_418_DESCR' => 'Alampaneel viitab olematule moodulile',
    'LBL_SCAN_419_DESCR' => 'Vardef võti ei ühti vardefi nimega',
    'LBL_SCAN_420_DESCR' => 'Vardef sisaldab seotud välju, mis viitavad seosele, mida ei saa õigesti laadida',
    'LBL_SCAN_421_DESCR' => 'Vardef sisaldab lingi välja, mida ei saa õigesti laadida',
    'LBL_SCAN_422_DESCR' => 'Moodulil %s on teise mooduli %s määratlus failis %s',
    'LBL_SCAN_525_DESCR' => 'Vardef määratleb loetelu, mis on HTML-funktsiooni tulemus, mida Sugar7 ei toeta',
    'LBL_SCAN_423_DESCR' => 'Vardefi määratleakse alamvälju sisaldavate liitväljadena ja ühte neist alamväljadest pole tegelikult olemas',
    'LBL_SCAN_424_DESCR' => 'Fail sisaldab tekstisisest HTML-i',
    'LBL_SCAN_425_DESCR' => 'Kood sisaldab seda väljundit tekitavat funktsiooni',
    'LBL_SCAN_426_DESCR' => 'Kood sisaldab seda väljundit tekitavat funktsiooni',
    'LBL_SCAN_427_DESCR' => 'Kood sisaldab seda väljundit tekitavat funktsiooni',
    'LBL_SCAN_428_DESCR' => 'Kood sisaldab seda väljundit tekitavat funktsiooni. Pange tähele, et print_r(..., true) on lubatud.',
    'LBL_SCAN_429_DESCR' => 'Kood sisaldab seda väljundit tekitavat funktsiooni',
    'LBL_SCAN_430_DESCR' => 'Kood sisaldab seda väljundit tekitavat funktsiooni',
    'LBL_SCAN_431_DESCR' => 'See konverditakse Smarty3 süntaksile vastama',
    'LBL_SCAN_436_DESCR' => 'See konverditakse Smarty3 süntaksile vastama',
    'LBL_SCAN_437_DESCR' => 'Vorminguga .tpl failis on süntaks, mida ei saa konvertida Smarty3 süntaksile vastavaks. Palun parandage see käsitsi, et üksust värskendada.',
    'LBL_SCAN_438_DESCR' => 'Kohandatud PDFi malli ei saa konvertida Smarty3 süntaksile vastavaks. Palun parandage see käsitsi, et üksust värskendada.',
    'LBL_SCAN_439_DESCR' => 'Vorminguga .tpl failis on süntaks, mida ei saa konvertida Smarty3 süntaksile vastavaks. See jäeti vahele. Kui tegemist on kehtiva Smarty malliga, parandage see käsitsi.',
    'LBL_SCAN_451_DESCR' => 'AuthN-kood on kustutatud, kasutage selle asemel koodi \IdMSugarAuthenticate, \IdMSAMLAuthenticate, \IdMLDAPAuthenticate',
    'LBL_SCAN_524_DESCR' => 'Välja määratletakse HTML-i tekitava funktsioonina ja seda ei saa automaatselt teisendada (oskame teisendada mõnda varude välja, nagu e-kirju ja valuutat)',
    'LBL_SCAN_432_DESCR' => 'Nime välja tüüp on muu kui nime, täisnime, varchari või ID tüüp',
    'LBL_SCAN_433_DESCR' => 'Leiti kohandatud Elastic Searchi failid %s',
    'LBL_SCAN_434_DESCR' => 'Leiti massiivi funktsioonide kasutamine suvandis $_SESSION failides: %s',
    'LBL_SCAN_550_DESCR' => 'Use of removed Sidecar app.date APIs in %s, this code will be migrated by upgrade scripts',
    'LBL_SCAN_551_DESCR' => 'Use of removed Sidecar Bean APIs in %s, this code will be migrated by upgrade scripts',

    'LBL_SCAN_501_DESCR' => 'Eksemplaris pole ühte põhifaili',
    'LBL_SCAN_502_DESCR' => 'Ühte tuumfaili on selles installis muudetud',
    'LBL_SCAN_503_DESCR' => 'Kohandatud moodul on sama nimega kui üks uus Sugari moodul',
    'LBL_SCAN_504_DESCR' => 'Vardefi välja määratlusel puudub tüüp',
    'LBL_SCAN_505_DESCR' => 'Mittebloobi välja tüüp muudetakse bloobi välja tüübiks. See pole lubatud, kuna bloobi tüüpe ei saa indekseerida ja sellest indekseeritavast väljast võivad sõltuda filtrid.',
    'LBL_SCAN_506_DESCR' => '$this kasutatakse metaandmete failis. Kuna metaandmete fail on Sugar7 laaditud teistsugusesse konteksti, see nurjuks.',
    'LBL_SCAN_507_DESCR' => 'Vardefi määratleakse alamvälju sisaldavate liitväljadena ja ühte neist alamväljadest pole tegelikult olemas',
    'LBL_SCAN_508_DESCR' => 'Fail sisaldab tekstisisest HTML-i',
    'LBL_SCAN_509_DESCR' => 'Kood sisaldab seda väljundit tekitavat funktsiooni',
    'LBL_SCAN_510_DESCR' => 'Kood sisaldab seda väljundit tekitavat funktsiooni',
    'LBL_SCAN_511_DESCR' => 'Kood sisaldab seda väljundit tekitavat funktsiooni',
    'LBL_SCAN_512_DESCR' => 'Kood sisaldab seda väljundit tekitavat funktsiooni. Pange tähele, et print_r(..., true) on lubatud.',
    'LBL_SCAN_513_DESCR' => 'Kood sisaldab seda väljundit tekitavat funktsiooni',
    'LBL_SCAN_514_DESCR' => 'Kood sisaldab seda väljundit tekitavat funktsiooni',
    'LBL_SCAN_515_DESCR' => 'Skripti kontrollimine nurjus, mis tähendab, et instaScannerMeta.phpnce sisaldab tõenäoliselt halba PHP-koodi, mida skript proovis laadida.',
    'LBL_SCAN_517_DESCR' => 'Tuvastati pakett, mis on Sugar 7-s mittetoetatuna blokeeritud üksuste nimekirja kantud',
    'LBL_SCAN_526_DESCR' => "See loend sisaldab artikli nime väärtusi, mis takistavad täiendust.",
    'LBL_SCAN_528_DESCR' => 'Väli Kuupäev/kuupäev ja kellaaeg/kellaaeg on sobimatu display_default väärtusega, nagu -puudub-',
    'LBL_SCAN_529_DESCR' => 'Interpretaator võib vallandada PHP tõrked vale php-süntaksi või mõne käitusaja koodiprobleemi tuvastamisel.',
    'LBL_SCAN_530_DESCR' => 'Üks kohandatud fail pole eksemplaris saadaval, kuid seda kasutab kohandatud kood.',
    'LBL_SCAN_531_DESCR' => 'Andmebaas %s on kehtetu. Kaaluge selle asemel valiku %s kasutamist.',
    'LBL_SCAN_532_DESCR' => 'A class declared in %s calls its stock parent&#39;s constructor as %s::%s()',
    'LBL_SCAN_533_DESCR' => 'A class declared in %s calls its custom parent&#39;s constructor as %s::%s()',
    'LBL_SCAN_534_DESCR' => 'Andmebaasi %s ei toetata enam. Kaaluge selle asemel valiku %s kasutamist.',
    'LBL_SCAN_535_DESCR' => 'A call to unsupported method %s() found in %s on line %d',
    'LBL_SCAN_536_DESCR' => 'Access to an unsupported property $%s found in %s on line %d',
    'LBL_SCAN_540_DESCR' => 'Tuvastati pakett, mis on Sugar 7-s mittetoetatuna blokeeritud üksuste nimekirja kantud. Need paketid tuleb desinstallida JA kustutada enne täiendamist. Pange tähele, et nende pakettide desinstallimine eemaldab paketi loodud tabelid ja andmed ja paketi moodulite kasutuse.',
    'LBL_SCAN_541_DESCR' => 'Teie protsessihalduse tabelites leiti andmeid, mida ei saa jadaks ega muul viisil teisendada',
    'LBL_SCAN_542_DESCR' => 'Teie protsessihalduse ärireeglites ja/või tegevustes leiti kehtetuid välju. Et täiendamine oleks võimalik, tuleb need väljad ärireeglitest ja/või tegevustest eemaldada.',
    'LBL_SCAN_545_DESCR' => 'Grupiväli on valikus Protsessi määratlus osaliselt lukustatud. Neid välju peab uuendamise jätkamiseks valikus Protsessi määratlus avama.',
    'LBL_SCAN_546_DESCR' => 'Cannot migrate custom TinyMCE config in Knowledge Base module. '
        . 'The "tinyConfig" parameter in %s file will be emptied. '
        . 'If you have any TinyMCE customizations there you should save them before upgrade '
        . 'and add after upgrade manually.',
    'LBL_SCAN_547_DESCR' => 'Eemaldatud `resetLoadFlag` signatuuri kasutamine %s',
    'LBL_SCAN_548_DESCR' => 'Ebasoovitatava `initButtons` meetodi kasutamine %s',
    'LBL_SCAN_549_DESCR' => 'Eemaldatud `getField` signatuuri kasutamine %s',
    'LBL_SCAN_552_DESCR' => 'Use of removed Underscore APIs in %s',
    'LBL_SCAN_553_DESCR' => 'Use of removed Sidecar Bean APIs in %s',
    'LBL_SCAN_554_DESCR' => 'Sidecar controller %s extends from removed Sidecar controller',

    'LBL_SCAN_901_DESCR' => 'Eksemplar on juba Sugar 7 täiendatud',
    'LBL_SCAN_903_DESCR' => 'Täiendaja versiooni ei toetata. Installige asjakohane SugarUpgradeWizardPrereq pakett',
    'LBL_SCAN_904_DESCR' => 'Fail: %s, moodulid: %s',
    'LBL_SCAN_999_DESCR' => 'Tundmatu tõrge, võtke ühendust toega',

    'LBL_SCAN_577_TITLE' => 'Ühildumatu andmebaasikogum',
    'LBL_SCAN_577_LOG' => "Põimimine %s ei ühildu märgistikuga %s",
    'LBL_SCAN_577_DESCR' => "Valige asukoha sätetes muu põimimisviis või eemaldage vaikimisi põimimise rakendamiseks konfiguratsioon dbconfigoption.collation.",

    'LBL_SCAN_578_TITLE' => 'Ajutist andmebaasitabelit ei ole saa eemaldada: %s',
    'LBL_SCAN_578_LOG' => 'Ajutist andmebaasitabelit ei ole saa eemaldada: %s',
    'LBL_SCAN_578_DESCR' => 'Märgistiku teisendamise kontrollimiseks loodud ajutise tabeli kustutamine ebaõnnestus versiooni täiendamise ajal ja see tuleb käsitsi kustutada',

    'LBL_SCAN_579_TITLE' => 'Märgistikku/põimimist ei ole võimalik teisendada: (%s) tabelis: %s',
    'LBL_SCAN_579_LOG' => 'Märgistikku/põimimist ei ole võimalik teisendada: (%s) tabelis: %s',
);
