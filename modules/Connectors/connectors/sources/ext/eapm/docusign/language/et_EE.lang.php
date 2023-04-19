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

use Sugarcrm\Sugarcrm\Entitlements\SubscriptionManager;

global $current_user;

$productCodes = $current_user->getProductCodes();
$productCodes = urlencode(implode(',', $productCodes));

$flavor = isset($GLOBALS['sugar_flavor']) ? $GLOBALS['sugar_flavor'] : '';
$version = isset($GLOBALS['sugar_version']) ? $GLOBALS['sugar_version'] : '';
$language = isset($GLOBALS['current_language']) ? $GLOBALS['current_language'] : '';
$action = isset($GLOBALS['action']) ? $GLOBALS['action'] : '';
$status = getVersionStatus($version);
$key = isset($GLOBALS['key']) ? $GLOBALS['key'] : '';
$module = 'DocuSignAdmin';

$url = "https://www.sugarcrm.com/crm/product_doc.php?edition={$flavor}&version={$version}&lang={$language}&" .
    "products={$productCodes}&help_action={$action}&status={$status}&key={$key}&module={$module}";

$connector_strings = [
    'LBL_LICENSING_INFO' => "DocuSigni konnektori kasutamiseks järgige alltoodud samme.
        <br> - Looge integratsioonivõti.
        <br> - Lubage ümbrike jaoks DocuSign Connect
        (st veebihaak, mida DocuSign Sugari sisenemispunkti tellimiseks kasutab).
        <br> - Seadistage DocuSignis uus rakendus ja veenduge, et sisestaksite ümbersuunamis-URI ja looksite salavõtme.
        Ümbersuunamis-URI peab olema https://SUGAR_URL/oauth-handler/DocuSignOauth2Redirect
        <br> Kui Sugari eksemplaril on IP-piirangud, lisage DocuSigni IP-aadressid lubatute loendisse.",
    'environment' => 'Keskkond',
    'integration_key' => 'Integreerimisvõti',
    'client_secret' => 'Kliendi salavõti',
];
