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

use DocuSign\eSign as DocuSign;
use Sugarcrm\Sugarcrm\DocuSign\DocuSignUtils;

/**
 * ExtAPIDocuSign
 */
class ExtAPIDocuSign extends ExternalAPIBase
{
    public $supportedModules = ['DocuSignEnvelopes'];
    public $authMethod = 'oauth2';
    public $connector = 'ext_eapm_docusign';

    public $useAuth = true;
    public $requireAuth = true;

    protected $client;

    //DocuSign authenticate service
    protected $demoHost = 'https://demo.docusign.net/restapi';
    protected $prodHost = 'https://docusign.net/restapi';

    const APP_STRING_ERROR_PREFIX = 'ERR_DOCUSIGN_API_';
    
    const SCOPES_AUTHORIZE = ['signature'];

    /**
     * Returns the DocuSign client used to call the API
     *
     * @return DocuSignClient|null
     */
    public function getClient() : DocuSignClient
    {
        if ($this->client instanceof DocuSignClient) {
            return $this->client;
        }

        $configuration = new DocuSign\Configuration();

        $env = $this->getEnvironmentFromConfig();
        $oAuth = new DocuSign\Client\Auth\OAuth();

        $host = $this->demoHost;
        if ($env === 'production') {
            $host = $this->prodHost;
        }

        $configuration->setHost($host);
        $oAuth->setBasePath($host);

        $this->client = new DocuSignClient($configuration, $oAuth);

        return $this->client;
    }

    /**
     * Get environmnet from config
     *
     * @return string
     */
    public function getEnvironmentFromConfig() : string
    {
        $env = '';
        $config = DocuSignUtils::getDocuSignOauth2Config();
        if (isset($config['properties']) && isset($config['properties']['environment'])) {
            $env = trim(strtolower($config['properties']['environment']));
        }

        return $env;
    }

    /**
     * Authenticates a user's authorization code with DocuSign servers. On success,
     * returns the token information as well as the ID of the EAPM bean created
     * to store the token information
     *
     * @param string $code the authorization code to authenticate
     * @return array|bool the token and EAPM information if successful; false otherwise
     */
    public function authenticate($code)
    {
        global $current_user;
        // Authenticate the authorization code with DocuSign servers
        $config = DocuSignUtils::getDocuSignOauth2Config();
        $clientId = $config['properties']['integration_key'];
        $clientSecret = $config['properties']['client_secret'];
        $client = $this->getClient();
        $accessTokenInfo = $client->generateAccessToken($clientId, $clientSecret, $code);

        // If we are successful, save the new token data in the database
        if (count($accessTokenInfo) > 0) {
            $accessToken = $accessTokenInfo[0]->getAccessToken();
            if (!empty($accessToken)) {
                $refreshToken = $accessTokenInfo[0]->getRefreshToken();
                $expiresIn = $accessTokenInfo[0]->getExpiresIn();
                
                $eapmBean = $this->getUserEAPM();
                if (!$eapmBean) {
                    $eapmBean = BeanFactory::newBean('EAPM');
                }
                $eapmBean->name = 'DocuSign';
                $eapmBean->assigned_user_id = $current_user->id;
                $eapmBean->application = 'DocuSign';
                $eapmBean->validated = true;
                
                $apiData = [
                    'accessToken' => $accessToken,
                    'refreshToken' => $refreshToken,
                    'expire' => time() + intVal($expiresIn),
                    'accountId' => '',
                    'baseURI' => '',
                ];

                $user = $this->getUser($accessToken);
                if (is_array($user) && isset($user['account_id'])) {
                    $apiData['accountId'] = $user['account_id'];
                    $apiData['baseURI'] = $user['base_uri'] . '/restapi';

                    $this->baseURI = $user['base_uri'];
                } else {
                    $GLOBALS['log']->error(translate('LBL_ERROR_ACCOUNT_ID_NOT_FOUND', 'DocuSignEnvelopes'));
                }
                $eapmBean->api_data = json_encode($apiData);
                $eapmBean->save();
            }
        }
        
        return [
            'eapmId' => $eapmBean->id,
            'access_token' => $accessToken,
            'refresh_token' => $refreshToken,
        ];
    }

    /**
     * Get user EAPM
     *
     * Returns the EAPM bean stored in db for current user
     *
     * @return EAPM|null
     */
    public function getUserEAPM()
    {
        global $current_user;

        $eapmSeed = BeanFactory::newBean('EAPM');
        $query = new SugarQuery();
        $query->from($eapmSeed);
        $query->select('*');
        $query->where()->equals('application', 'DocuSign');
        $query->where()->equals('assigned_user_id', $current_user->id);
        $query->where()->equals('deleted', 0);
        $query->limit(1);

        $results = $query->execute();
        if (empty($results)) {
            return null;
        }
        $row = $results[0];
        $eapm = BeanFactory::newBean('EAPM');
        $eapm->fromArray($row);
        
        return $eapm;
    }

    /**
     * Revokes an access token for the given EAPM bean ID by deleting the bean
     *
     * @param string $eapmId the ID of the EAPM bean to revoke access tokens for
     * @return bool true if successful; false otherwise
     */
    public function revokeToken($eapmId = null)
    {
        try {
            $eapmBean = $this->getEAPMBean($eapmId);
            if (empty($eapmBean->id)) {
                $GLOBALS['log']->error('Could not log out of DocuSign. No EAPM bean found.');
                return false;
            }
            $eapmBean->mark_deleted($eapmBean->id);
            return true;
        } catch (Exception $e) {
            $GLOBALS['log']->error($e->getMessage());
            return false;
        }
    }

    /**
     * Retrieves an access token from the given EAPM bean. If the access token
     * is expired (or close to it), this will automatically refresh it.
     *
     * @param string $eapmId the ID of the EAPM bean storing the access token
     * @return string|bool The access token string if successful; false otherwise
     */
    public function getAccessToken($eapmId = null)
    {
        if (!isset($eapmId)) {
            $eapmBean = $this->getEAPMBean();
        } else {
            $eapmBean = $this->getEAPMBean($eapmId);
        }
        parent::loadEAPM($eapmBean);
        
        if (!empty($eapmBean->id)) {
            $apiData = $this->getApiData($eapmBean);
            if ($apiData) {
                // If the token is expired (or close to it), refresh it
                if (!empty($apiData['refreshToken']) && time() + 30 > $apiData['expire']) {
                    return $this->refreshToken($eapmId);
                } elseif (!empty($apiData['accessToken'])) {
                    return $apiData['accessToken'];
                }
            }
        }
        return false;
    }

    /**
     * Get api data content
     *
     * @param EAPM Sugar Bean
     * @return Array
     */
    public function getApiData($eapmBean)
    {
        if (empty($eapmBean->api_data)) {
            return [];
        }

        $apiDataDecoded = json_decode($eapmBean->api_data, true);
        return is_array($apiDataDecoded) ? $apiDataDecoded : [];
    }

    /**
     * Uses a refresh token to refresh the token stored in the given EAPM bean
     *
     * @param string $eapmId the ID of the EAPM bean to save the refreshed token to
     * @return string|bool The new access token string if successful; false otherwise
     */
    protected function refreshToken($eapmId)
    {
        $eapmBean = $this->getEAPMBean($eapmId);
        if (!empty($eapmBean->id)) {
            $apiData = $this->getApiData($eapmBean);
            if (!empty($apiData['refreshToken'])) {
                $newToken = $this->refreshAccessTokenFromServer($eapmBean);
                if ($newToken instanceof DocuSign\Client\Auth\OAuthToken) {
                    $expiresIn = $newToken->getExpiresIn();
                    $tokenParams = [
                        'accessToken' => $newToken->getAccessToken(),
                        'refreshToken' => $newToken->getRefreshToken(),
                        'accountId' => $apiData['accountId'],
                        'expire' => time() + intVal($expiresIn),
                        'baseURI' => $apiData['baseURI'],
                    ];

                    $eapmBean->api_data = json_encode($tokenParams);
                    $eapmBean->save();

                    return $tokenParams['accessToken'];
                }
            }
        }
        return false;
    }

    /**
     * Calls the DocuSign server to get a new access token using the specified
     * token grant flow. See https://oauth.net/2/grant-types/ for information
     * on grant flow types (each one may or may not be supported by DocuSign)
     *
     * @return DocuSign\Client\Auth\OAuthToken|bool OAuthToken or false
     */
    protected function refreshAccessTokenFromServer($eapmBean)
    {
        try {
            $apiClient = $this->getClient();
            $config = DocuSignUtils::getDocuSignOauth2Config();
            $clientId = $config['properties']['integration_key'];
            $clientSecret = $config['properties']['client_secret'];
            $refreshToken = $this->getApiData($eapmBean)['refreshToken'];
            $refreshTokenRes = $apiClient->refreshAccessToken($clientId, $clientSecret, $refreshToken);
            $refreshTokenReqStatus = $refreshTokenRes[1];
            if ($refreshTokenReqStatus === 200) {
                $oauthToken = $refreshTokenRes[0];

                return $oauthToken;
            }
        } catch (Exception $e) {
            $GLOBALS['log']->error($e->getMessage());
            return false;
        }
    }

    /**
     * Helper function for retrieving the EAPM bean
     *
     * @param string|null $eapmId the ID of the EAPM bean to retrieve
     * @return SugarBean|null the retrieved EAPM bean or null if none found
     */
    protected function getEAPMBean($eapmId = null)
    {
        if (isset($eapmId)) {
            $eapm = BeanFactory::retrieveBean('EAPM', $eapmId, ['encode' => false]);
        }
        $eapm = EAPM::getLoginInfo('DocuSign');

        return $eapm;
    }


    /**
     * Get User details
     *
     * Makes a call to DocuSign to get details about the user account
     *
     * @param string $accessToken
     * @return Array|bool User details, false otherwise
     */
    public function getUser($accessToken)
    {
        try {
            // Query the DocuSign REST API to get the user's information
            $client = $this->getClient();
            $userInfo = $client->getUserInfo($accessToken);
            $accounts = $userInfo[0]->getAccounts();
            $defaultAccount = [];
            foreach ($accounts as $account) {
                if ($account->getIsDefault() === '1') {
                    $defaultAccount = $account;
                }
            }
            return [
                'email' => $userInfo[0]->getEmail(),
                'account_name' => $defaultAccount->getAccountName(),
                'account_id'=> $defaultAccount->getAccountId(),
                'base_uri'=> $defaultAccount->getBaseUri(),
            ];
        } catch (DocuSign\Client\ApiException $e) {
            $body = $e->getResponseBody();
            $GLOBALS['log']->error($body);
            return false;
        } catch (Exception $e) {
            $GLOBALS['log']->error($e->getMessage());
            return false;
        }
        return false;
    }

    /**
     * Returns the completed Document info
     *
     * @return Array
     */
    public function getCompletedDocumentInfo($args)
    {
        $eapmBean = $this->getEAPMBean();
        if (empty($eapmBean)) {
            $GLOBALS['log']->error('DocuSign error: Could not get completed document. No EAPM bean found.');
            return [
                'status' => 'error',
                'message' => 'No external API set',
            ];
        }

        $apiData = $this->getApiData($eapmBean);
        $accountId = $apiData['accountId'];

        $this->setClientHost($apiData);

        $this->setAccessTokenOnDSClient();

        $envelopeApi = new DocuSign\Api\EnvelopesApi($this->getClient());
        
        try {
            $envelope = $envelopeApi->getEnvelope($accountId, $args['envelopeId']);
            
            $docStream = $this->downloadDocumentsStream($args);
            $body = file_get_contents($docStream->getPathname());
        } catch (DocuSign\Client\ApiException $e) {
            $responseObject = $e->getResponseObject();
            $exceptionMessage = $e->getMessage();
            if ($responseObject instanceof DocuSign\Model\ErrorDetails) {
                return [
                    'status' => 'error',
                    'message' => $responseObject->getMessage(),
                ];
            } else {
                return [
                    'status' => 'error',
                    'message' => $exceptionMessage,
                ];
            }
        }

        $docName = $envelope->getEmailSubject();
        $extPos = strrpos($docName, '.');
        if ($extPos !== false) {
            $docName = substr($docName, 0, $extPos);
        }

        $completedDateTime = $envelope->getCompletedDateTime();

        return [
            'documentName' => $docName,
            'body' => $body,
            'completedDateTime' => $completedDateTime,
        ];
    }

    /**
     * Returns the documents of an envelope
     *
     * @return SplFileObject
     */
    public function downloadDocumentsStream($args)
    {
        $eapmBean = $this->getEAPMBean();
        if (empty($eapmBean)) {
            $GLOBALS['log']->error('DocuSign error: Could not download documents. No EAPM bean found.');
            return [
                'status' => 'error',
                'message' => 'No external API set',
            ];
        }

        $apiData = $this->getApiData($eapmBean);
        $accountId = $apiData['accountId'];

        $this->setClientHost($apiData);

        $this->setAccessTokenOnDSClient();

        $envelopeApi = new DocuSign\Api\EnvelopesApi($this->getClient());

        $options = new DocuSign\Api\EnvelopesApi\GetDocumentOptions();
        if (isset($args['certificate'])) {
            $options->setCertificate($args['certificate']);
        }
        $docStream = $envelopeApi->getDocument($accountId, 'combined', $args['envelopeId'], $options);
        
        return $docStream;
    }

    /**
     * Set access token on DocuSign client of this object
     *
     * @param string $eapmId
     * @throws Exception
     */
    public function setAccessTokenOnDSClient()
    {
        $accessToken = $this->getAccessToken();
        if ($accessToken === false) {
            throw new Exception('Could not set access token on DocuSign client');
        }
        $apiConfig = $this->getClient()->getConfig();
        $apiConfig->setAccessToken($accessToken);
    }

    /**
     * Set client host
     *
     * @param array $apiData
     */
    public function setClientHost(array $apiData)
    {
        $docusignClient = $this->getClient();
        $docusignClient->getConfig()->setHost($apiData['baseURI']);
    }
    /**
     * Create new envelope
     *
     * Formats the input from Api to DocuSign Objects and makes the call to create the envelope
     *
     * @param  DocuSign\Api\EnvelopesApi $envelopeApi
     * @param  String $accountId
     * @param  Array $args
     * @return Array Envelope details
     */
    public function createANewEnvelope($args)
    {
        global $sugar_config;
        
        $eapmBean = $this->getEAPMBean();
        if (empty($eapmBean)) {
            $GLOBALS['log']->error('Could not create a new envelope in DS. No EAPM bean found.');
            return [
                'status' => 'error',
                'message' => 'No external API set',
            ];
        }

        $apiData = $this->getApiData($eapmBean);
        $accountId = $apiData['accountId'];

        $this->setClientHost($apiData);

        $this->setAccessTokenOnDSClient();

        $envelopeApi = new DocuSign\Api\EnvelopesApi($this->getClient());

        $this->usesTemplates = $this->isUsingTemplates($args);

        //Set up Document objects to be send to DocuSign
        $documents = [];
        $firstDocumentName = '';
        if (!$this->usesTemplates && isset($args['documents']) && is_array($args['documents'])) {
            $documents = $this->buildDocuments($args, $firstDocumentName);
        }

        if (isset($args['recipients']) && is_array($args['recipients'])) {
            if ($this->usesTemplates) {
                $templateRoles = $this->buildTemplateRoles($args);
            } else {
                $addSignTab = count($documents) > 0;
                $recipients = $this->buildRecipients($args, $addSignTab);
            }
        }

        $moduleInstallerClass = SugarAutoLoader::customClass('ModuleInstaller');
        $sidecarConfig = $moduleInstallerClass::getBaseConfig();

        $restVersion = $sidecarConfig['serverUrl'];

        $authorization = $args['sugarEnvelopeId'];
        $webhookUrl = rtrim($sugar_config['site_url'], '/') . '/' . $restVersion . '/DocuSign/notification/' .
            $authorization;

        // Types of notifications to receive - envelope related only
        $sentEnvelopeEvent = new DocuSign\Model\EnvelopeEvent();
        $sentEnvelopeEvent->setEnvelopeEventStatusCode('sent');
        $deliveredEnvelopeEvent = new DocuSign\Model\EnvelopeEvent();
        $deliveredEnvelopeEvent->setEnvelopeEventStatusCode('delivered');
        $completedEnvelopeEvent = new DocuSign\Model\EnvelopeEvent();
        $completedEnvelopeEvent->setEnvelopeEventStatusCode('completed');
        $declinedEnvelopeEvent = new DocuSign\Model\EnvelopeEvent();
        $declinedEnvelopeEvent->setEnvelopeEventStatusCode('declined');
        $voidedEnvelopeEvent = new DocuSign\Model\EnvelopeEvent();
        $voidedEnvelopeEvent->setEnvelopeEventStatusCode('voided');
        $envelopeEvents = [
            $sentEnvelopeEvent,
            $deliveredEnvelopeEvent,
            $completedEnvelopeEvent,
            $declinedEnvelopeEvent,
            $voidedEnvelopeEvent,
        ];

        $eventNotification = new DocuSign\Model\EventNotification();
        $eventNotification->setUrl($webhookUrl);
        $eventNotification->setLoggingEnabled('false');
        $eventNotification->setRequireAcknowledgment('false');
        $eventNotification->setUseSoapInterface('false');
        $eventNotification->setIncludeCertificateWithSoap('false');
        $eventNotification->setSignMessageWithX509Cert('false');
        $eventNotification->setIncludeDocuments('false');// incoming messages might be too large.
        $eventNotification->setIncludeEnvelopeVoidReason('false');
        $eventNotification->setIncludeTimeZone('false');
        $eventNotification->setIncludeSenderAccountAsCustomField('false');
        $eventNotification->setIncludeDocumentFields('false');
        $eventNotification->setIncludeCertificateOfCompletion('false');
        $eventNotification->setEnvelopeEvents($envelopeEvents);
        $eventNotification->setRecipientEvents([]);

        //Set up the new Envelope Definition with parameters formatted above
        $envelopDefinition = new DocuSign\Model\EnvelopeDefinition();

        $emailSubject = $firstDocumentName;
        if (empty($emailSubject)) {
            $emailSubject = translate('LBL_NEW_ENVELOPE', 'DocuSignEnvelopes');
        }
        $envelopDefinition->setEmailSubject($emailSubject);

        $envelopDefinition->setStatus('created');

        $envelopDefinition->setDocuments($documents);
        $envelopDefinition->setEventNotification($eventNotification);

        if ($this->usesTemplates) {
            $envelopDefinition->setTemplateId($args['templateSelected']['id']);
            if (isset($templateRoles)) {
                $envelopDefinition->setTemplateRoles($templateRoles);
            }
        } else {
            if (isset($recipients)) {
                $envelopDefinition->setRecipients($recipients);
            }
        }

        $this->envelopDefinition = $envelopDefinition;

        //create the new envelope
        $envelop_summary = $envelopeApi->createEnvelope($accountId, $envelopDefinition);

        if (!empty($envelop_summary)) {
            $createdEnvelopeId = $envelop_summary->getEnvelopeId();
        }

        return [
            'id' => $createdEnvelopeId,
            'subject' => $this->envelopDefinition->getEmailSubject(),
        ];
    }

    /**
     * Build documents
     *
     * @param Array $args
     * @param string $firstDocumentName
     * @return Array
     */
    public function buildDocuments(array $args, string &$firstDocumentName) : array
    {
        $documents = [];
        $documentAddedIdx = 1;

        for ($documentIdx = 0; $documentIdx < count($args['documents']); $documentIdx++) {
            $documentId = $args['documents'][$documentIdx];
            $sugarDoc = BeanFactory::retrieveBean('Documents', $documentId);
            if (empty($sugarDoc)) {
                continue;
            }

            if ($firstDocumentName === '') {
                $firstDocumentName = $sugarDoc->document_name;
            }
            $documentRevisionId = $sugarDoc->document_revision_id;
            $documentRevision = BeanFactory::getBean('DocumentRevisions', $documentRevisionId);
            $documentName = $documentRevision->filename;
            $document = new DocuSign\Model\Document();
            $content = $this->getFileContent($documentRevisionId);

            $document->setDocumentBase64(base64_encode($content));
            $document->setName($documentName);
            $document->setDocumentId(strval($documentAddedIdx++));
            $document->setFileExtension($documentRevision->file_ext);

            $documents[] = $document;
        }
        return $documents;
    }

    /**
     * Build recipients object
     *
     * @param Array $args
     * @param bool $addSignTab
     * @return DocuSign\Model\Recipients
     */
    public function buildRecipients(array $args, bool $addSignTab) : DocuSign\Model\Recipients
    {
        $signers = [];
        $carbonCopyRecipients = [];
        $certifiedDeliveryRecipients = [];

        $recipients = new DocuSign\Model\Recipients();

        if (count($args['recipients']) === 0) {
            return $recipients;
        }

        $i = 1;
        $signTagXPosition = 10;
        foreach ($args['recipients'] as $recipientDetails) {
            if ($recipientDetails['type'] === 'signer') {
                $signer = new DocuSign\Model\Signer();
                $signer = $this->setUpRecipientObject($signer, $recipientDetails, $i);
                //add a sign tab on the first document
                if ($addSignTab) {
                    $signTab = new DocuSign\Model\SignHere();
                    $signTab->setDocumentId('1');
                    $signTab->setPageNumber(1);
                    $signTab->setXPosition($signTagXPosition);
                    $signTagXPosition = $signTagXPosition + 100;
                    $signTab->setYPosition(0);
                    $signTabs = [
                        $signTab,
                    ];
                    $tabsToAdd = new DocuSign\Model\Tabs();
                    $tabsToAdd->setSignHereTabs($signTabs);
                    $signer->setTabs($tabsToAdd);
                }
                $signers[] = $signer;
            } elseif ($recipientDetails['type'] === 'carbon_copy') {
                $carbonCopy = new DocuSign\Model\CarbonCopy();
                $carbonCopy = $this->setUpRecipientObject($carbonCopy, $recipientDetails, $i);
                $carbonCopyRecipients[] = $carbonCopy;
            } elseif ($recipientDetails['type'] === 'certified_delivery') {
                $certifiedDelivery = new DocuSign\Model\CarbonCopy();
                $certifiedDelivery = $this->setUpRecipientObject($certifiedDelivery, $recipientDetails, $i);
                $certifiedDeliveryRecipients[] = $certifiedDelivery;
            }
            $i++;
        }

        if (count($signers) > 0) {
            $recipients->setSigners($signers);
        }
        if (count($carbonCopyRecipients) > 0) {
            $recipients->setCarbonCopies($carbonCopyRecipients);
        }
        if (count($certifiedDeliveryRecipients) > 0) {
            $recipients->setCertifiedDeliveries($certifiedDeliveryRecipients);
        }

        return $recipients;
    }

    /**
     * Sets properties on recipient objects
     * @param Object $recipient        An DocuSign recipient model
     * @param Array $recipientDetails  Informations to set up on model
     * @param Integer $i               An Index to use to identify recipients
     * @return Object $recipient      Recipient model from input, with fields set up
     */
    public function setUpRecipientObject($recipient, $recipientDetails, $i)
    {
        $recipient->setEmail($recipientDetails['email']);
        $recipient->setName($recipientDetails['name']);
        $recipient->setRecipientId($i . '');

        return $recipient;
    }

    /**
     * Build template roles
     *
     * @param Array $args
     * @return Array
     */
    public function buildTemplateRoles(array $args) : Array
    {
        $templateRoles = [];

        if (count($args['recipients']) === 0) {
            return $templateRoles;
        }

        foreach ($args['recipients'] as $recipientDetails) {
            $templateRole = $this->setUpTemplateRoleObject($args, $recipientDetails);
            $templateRoles[] = $templateRole;
        }

        return $templateRoles;
    }

    /**
     * Sets properties on template role object
     *
     * @param Array $args              Api arguments
     * @param Array $recipientDetails  Informations to set up on model
     * @return DocuSign\Model\TemplateRole Recipient model from input, with fields set up
     */
    public function setUpTemplateRoleObject(array $args, array $recipientDetails)
    {
        $role = new DocuSign\Model\TemplateRole();
        $role->setEmail($recipientDetails['email']);
        $role->setName($recipientDetails['name']);
        $role->setRoleName($recipientDetails['role']);

        $routingOrder = $this->getRoutingOrderBasedOnRoleName($recipientDetails['role'], $args['templateSelected']);
        if ($routingOrder !== false) {
            $role->setRoutingOrder($routingOrder);
        }

        return $role;
    }

    /**
     * Get routing order based on role name
     *
     * @param string $recipientRole
     * @param Array $templateDetails
     * @return mixed
     */
    public function getRoutingOrderBasedOnRoleName(string $recipientRole, array $templateDetails)
    {
        foreach ($templateDetails['roles'] as $templateRole) {
            if ($templateRole['name'] === $recipientRole) {
                return $templateRole['routing_order'];
            }
        }
        return false;
    }


    /**
     * Returns whether the envelope should use templates and roles
     *
     * @param  Array  $args
     * @return bool
     */
    public function isUsingTemplates($args) : bool
    {
        return array_key_exists('templateSelected', $args) && !empty($args['templateSelected']);
    }

    /**
     * Get file content
     *
     * @param String $docRevId
     * @return String
     */
    public function getFileContent($docRevId)
    {
        $file = new UploadFile();
        $filePath = $file->get_upload_path($docRevId);

        $file->temp_file_location = $filePath;

        return $file->get_file_contents();
    }

    /**
     * Creates a sender view
     *
     * @return DocuSign\Model\ViewUrl|Array
     */
    public function createSenderView($createdEnvelopeId, $returnUrlRequest)
    {
        $eapmBean = $this->getEAPMBean();
        if (empty($eapmBean)) {
            $GLOBALS['log']->error('DocuSign error: Could not create sender view. No EAPM bean found.');
            return [
                'status' => 'error',
                'message' => 'No external API set',
            ];
        }

        $this->setAccessTokenOnDSClient();
        
        $envelopeApi = new DocuSign\Api\EnvelopesApi($this->getClient());

        $apiData = $this->getApiData($eapmBean);
        $accountId = $apiData['accountId'];

        $this->setClientHost($apiData);

        $senderView = $envelopeApi->createSenderView($accountId, $createdEnvelopeId, $returnUrlRequest);
        return $senderView;
    }

    /**
     * Get details of an envelope
     *
     * @return Array
     */
    public function getEnvelope($envelopeId)
    {
        $eapmBean = $this->getEAPMBean();
        if (empty($eapmBean)) {
            $GLOBALS['log']->error('DocuSign error: Could not get envelope details. No EAPM bean found.');
            return [
                'status' => 'error',
                'message' => 'No external API set',
            ];
        }
        $this->setAccessTokenOnDSClient();
        
        $envelopeApi = new DocuSign\Api\EnvelopesApi($this->getClient());

        $apiData = $this->getApiData($eapmBean);
        $accountId = $apiData['accountId'];

        $this->setClientHost($apiData);

        $envelope = $envelopeApi->getEnvelope($accountId, $envelopeId);
        $dsEnvelopeStatus = $envelope->getStatus();
        if ($this->isEnvelopeDeleted($envelope, $accountId)) {
            $dsEnvelopeStatus = 'deleted';
        }

        return [
            'status' => $dsEnvelopeStatus,
        ];
    }

    /**
     * Resend envelope
     *
     * @param DocuSignEnvlope $envelopeBean
     */
    public function resendEnvelope($envelopeBean)
    {
        $this->setAccessTokenOnDSClient();
        $envelopeApi = new DocuSign\Api\EnvelopesApi($this->getClient());

        $apiData = $this->getApiData($this->eapmBean);
        $accountId = $apiData['accountId'];

        $this->setClientHost($apiData);

        $recipients = $envelopeApi->listRecipients($accountId, $envelopeBean->envelope_id);
        $updateOptions = new DocuSign\Api\EnvelopesApi\UpdateRecipientsOptions();
        $updateOptions->setResendEnvelope('true');
        $envelopeApi->updateRecipients($accountId, $envelopeBean->envelope_id, $recipients, $updateOptions);
    }

    /**
     * Get Envelope details
     *
     * @param DocuSignEnvlope $envelopeBean
     * @return array
     */
    public function getEnvelopeDetails($envelopeBean)
    {
        global $timedate;
        $eapmBean = $this->getEAPMBean();
        if (empty($eapmBean)) {
            $GLOBALS['log']->error('DocuSign error: Could not get envelope details. No EAPM bean found.');
            return [
                'status' => 'error',
                'message' => 'No external API set',
            ];
        }

        $this->setAccessTokenOnDSClient();
        $envelopeApi = new DocuSign\Api\EnvelopesApi($this->getClient());

        $apiData = $this->getApiData($eapmBean);
        $accountId = $apiData['accountId'];

        $this->setClientHost($apiData);

        $envelopeDetails = [];
        $inRecycleBin = false;
        $envelopeWasVoided = false;

        try {
            $options = new DocuSign\Api\EnvelopesApi\GetEnvelopeOptions();
            $options->setInclude(null);//do not include any special details
            $envelope = $envelopeApi->getEnvelope($accountId, $envelopeBean->envelope_id, $options);

            $envelopeDetails['name'] = $envelope->getEmailSubject();

            if ($this->isEnvelopeDeleted($envelope, $accountId)) {
                $inRecycleBin = true;
            }
        } catch (DocuSign\Client\ApiException $e) {
            $responseBody = $e->getResponseBody();
            $responseObject = $e->getResponseObject();
            $exceptionCode = $e->getCode();
            $exceptionMessage = $e->getMessage();
            if ($responseObject instanceof DocuSign\Model\ErrorDetails) {
                $res = [
                    'status' => 'error',
                    'message' => $responseObject->getMessage(),
                ];
            } else {
                $res = [
                    'status' => 'error',
                    'message' => $exceptionMessage,
                ];
            }

            if ($exceptionCode === 404) {
                $envelopeWasVoided = true;// envelope is not found anymore
            } else {
                //some other error hapened so we can't go further
                return $res;
            }
        } catch (Exception $e) {
            $exceptionCode = $e->getCode();
            $exceptionMessage = $e->getMessage();

            $res = [
                'status' => 'error',
                'message' => $exceptionMessage,
            ];

            if ($exceptionCode === 404) {
                $envelopeWasVoided = true;// envelope is not found anymore
            } else {
                //some other error hapened so we can't go further and update the envelope
                return $res;
            }
        }

        $lastAudit = new SugarDateTime('now');
        $lastAudit = $timedate->asDb($lastAudit);
        $envelopeDetails['last_audit'] = $lastAudit;

        if ($envelopeWasVoided) {
            $newStatus = 'voided';
        } else {
            $newStatus = $envelope->getStatus();
        }
        if ($newStatus === 'correct') {
            $newStatus = $envelopeBean->status;
        }
        if ($inRecycleBin) {
            $newStatus = 'deleted';
        }
        $envelopeDetails['status'] = $newStatus;

        if ($envelopeDetails['status'] !== 'created') { //created envelopes don't have expiration
            try {
                // not all envelopes which are expired are marked as 'void'
                // that's why we need to manually check for expiration and set our record to 'voided'
                $notification = $envelopeApi->getNotificationSettings($accountId, $envelopeBean->envelope_id);
                $expirations = $notification->getExpirations();
                $expireEnabledOnThisEnvelope = $expirations->getExpireEnabled();
                if ($expireEnabledOnThisEnvelope === 'true') {
                    $expiresAfter = $expirations->getExpireAfter();
                    $expiresAfter = intval($expiresAfter);
                    $createdDateTime = $envelope->getCreatedDateTime();

                    $now = new DateTime();
                    $created = new DateTime($createdDateTime);
                    $interval = new DateInterval("P{$expiresAfter}D");
                    $expires = $created->add($interval);
                    $expired = $expires < $now;

                    if ($expired) {
                        $envelopeDetails['status'] = 'voided';
                    }
                }
            } catch (DocuSign\Client\ApiException $e) {
                $responseBody = $e->getResponseBody();
                $exceptionCode = $e->getCode();
                $exceptionMessage = $e->getMessage();
                if ($exceptionMessage === 'API_LIMIT_EXCEED') {
                    $res = [
                        'status' => 'error',
                        'message' => $exceptionMessage,
                    ];
                } else {
                    if (!empty($responseBody) && !empty($responseBody->message)) {
                        $res = [
                            'status' => 'error',
                            'message' => $responseBody->message,
                        ];
                    } else {
                        $res = [
                            'status' => 'error',
                            'message' => $exceptionMessage,
                        ];
                    }
                }

                return $res;
            } catch (Exception $e) {
                $exceptionMessage = $e->getMessage();
                $res = [
                    'status' => 'error',
                    'message' => $exceptionMessage,
                ];

                return $res;
            } catch (Error $e) {
                $exceptionMessage = $e->getMessage();
                $res = [
                    'status' => 'error',
                    'message' => $exceptionMessage,
                ];

                return $res;
            }
        }

        return $envelopeDetails;
    }

    /**
     * Check if envelope is deleted
     *
     * @param DocuSign\Model\Envelope $envelopeNeedle
     * @param String $accountId
     * @return bool
     */
    public function isEnvelopeDeleted($envelopeNeedle, $accountId)
    {
        $foldersApi = new DocuSign\Api\FoldersApi($this->getClient());

        $listItemsOptions = new DocuSign\Api\FoldersApi\ListItemsOptions();
        $folderItemResponses = $foldersApi->listItems($accountId, 'recyclebin', $listItemsOptions);
        
        $folders = $folderItemResponses->getFolders();
        foreach ($folders as $folder) {
            $folderItems = $folder->getFolderItems();
            if (empty($folderItems)) {
                break;
            }
            foreach ($folderItems as $folderItem) {
                if ($folderItem->getEnvelopeId() === $envelopeNeedle->envelope_id) {
                    return true;
                }
            }
        }

        return false;
    }

    /**
     * List templates in DocuSign
     *
     * @return Array
     */
    public function listTemplates() : array
    {
        global $log;

        $eapmBean = $this->getEAPMBean();
        if (empty($eapmBean)) {
            $GLOBALS['log']->error('DocuSign error: Could not get envelope details. No EAPM bean found.');
            return [
                'status' => 'error',
                'message' => 'No external API set',
            ];
        }

        $this->setAccessTokenOnDSClient();

        $apiData = $this->getApiData($eapmBean);
        $accountId = $apiData['accountId'];

        $this->setClientHost($apiData);

        $res = [];

        try {
            $templateApi = new DocuSign\Api\TemplatesApi($this->getClient());
            $envelopeTemplatesResults = $templateApi->listTemplates($accountId);
            $templateResultsArray = $envelopeTemplatesResults->getEnvelopeTemplates();
            foreach ($templateResultsArray as $templateResult) {
                $templateName = trim($templateResult->getName());
                if ($templateName === '') {
                    continue;
                }
                $res[] = [
                    'id' => $templateResult->getTemplateId(),
                    'name' => $templateName,
                ];
            }
        } catch (DocuSign\Client\ApiException $ex) {
            $message = "Exception: {$ex->getMessage()}";
            $responseBody = $ex->getResponseBody();
            $res = [
                'status' => 'error',
                'message' => $message,
            ];
            $log->error($responseBody);
        } catch (Exception $ex) {
            $message = "Exception: {$ex->getMessage()}";
            $res = [
                'status' => 'error',
                'message' => $message,
            ];

            $log->error($message);
        }

        return $res;
    }

    public function getTemplateDetails(string $templateId) : array
    {
        global $log;

        $eapmBean = $this->getEAPMBean();
        if (empty($eapmBean)) {
            $GLOBALS['log']->error('DocuSign error: Could not get envelope details. No EAPM bean found.');
            return [
                'status' => 'error',
                'message' => 'No external API set',
            ];
        }

        $this->setAccessTokenOnDSClient();

        $apiData = $this->getApiData($eapmBean);
        $accountId = $apiData['accountId'];

        $this->setClientHost($apiData);

        $res = [];

        $roles = [];
        $predefinedRecipients = [];
        $recipientsEntities = [];
        try {
            $templateApi = new DocuSign\Api\TemplatesApi($this->getClient());
            $recipients = $templateApi->listRecipients($accountId, $templateId);

            $signers = $recipients->getSigners();
            $recipientsEntities['Signer'] = $signers;
            $carbon = $recipients->getCarbonCopies();
            $recipientsEntities['Carbon Copy'] = $carbon;
            $certified = $recipients->getCertifiedDeliveries();
            $recipientsEntities['Certified Delivery'] = $certified;
            $agents = $recipients->getAgents();
            $recipientsEntities['Agent'] = $agents;
            $editors = $recipients->getEditors();
            $recipientsEntities['Editor'] = $editors;
            $inPerson = $recipients->getInPersonSigners();
            $recipientsEntities['In Person'] = $inPerson;
            $intermediaries = $recipients->getIntermediaries();
            $recipientsEntities['Intermediar'] = $intermediaries;

            foreach ($recipientsEntities as $recipientType => $recipientEntityObjects) {
                foreach ($recipientEntityObjects as $recipientEntity) {
                    $routingOrder = $recipientEntity->getRoutingOrder();
                    $newRole = [];
                    $newPredefinedRecipient = [];
                    $roleName = $recipientEntity->getRoleName();

                    if ($recipientEntity->getModelName() === 'inPersonSigner') {
                        $recipientName = $recipientEntity->getHostName();
                        $recipientEmail = $recipientEntity->getHostEmail();
                    } else {
                        $recipientName = $recipientEntity->getName();
                        $recipientEmail = $recipientEntity->getEmail();
                    }

                    if (!empty($recipientName) && !empty($recipientEmail)) {
                        $newPredefinedRecipient['name']  = $recipientName;
                        $newPredefinedRecipient['email'] = $recipientEmail;
                        if ($recipientEntity->getModelName() === 'inPersonSigner') {
                            $newPredefinedRecipient['name']  = '(host) ' . $newPredefinedRecipient['name'];
                            $newPredefinedRecipient['email'] = '(host) ' . $newPredefinedRecipient['email'];
                        }
                        $newPredefinedRecipient['role'] = $roleName;
                        $newPredefinedRecipient['type'] = $recipientType;
                        $predefinedRecipients[] = $newPredefinedRecipient;
                    }

                    if (!empty($roleName)) {
                        $newRole['name'] = $recipientEntity->getRoleName();
                        if (!empty($routingOrder)) {
                            $newRole['routing_order'] = $routingOrder;
                        }
                        $roles[] = $newRole;
                    }
                }
            }
        } catch (DocuSign\Client\ApiException $ex) {
            $message = 'Exception: ' . $ex->getMessage();
            $res = [
                'status' => 'error',
                'message' => $message,
            ];
            $log->error($message);
        } catch (Exception $ex) {
            $message = 'Exception: ' . $ex->getMessage();
            $res = [
                'status' => 'error',
                'message' => $message,
            ];

            $log->error($message);
        }

        $res['roles'] = $roles;
        $res['predefined_recipients'] = $predefinedRecipients;

        return $res;
    }
}
