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
namespace Sugarcrm\Sugarcrm\custom\Hint\Http;

use Psr\Log\LoggerAwareInterface;
use Psr\Log\LoggerAwareTrait;
use SugarApiExceptionError;
use SugarApiExceptionInvalidGrant;
use SugarApiExceptionNotAuthorized;
use SugarApiExceptionNotFound;
use Sugarcrm\Sugarcrm\custom\Hint\Exception\LicenseExpiredApiException;
use Sugarcrm\Sugarcrm\custom\Hint\Exception\NoLicenseApiException;
use Sugarcrm\Sugarcrm\custom\Hint\Logger\Logger as HintLogger;

/**
 * Class Client
 *
 * Data Enrichment API client for Sugar's Hint service.
 */
class Client implements LoggerAwareInterface
{
    use LoggerAwareTrait;

    const DATA_ENRICHMENT_ACTION_AUTH = '/hint/data-enrichment/v2/token';
    const NOTIFICATIONS_SVC_ACTION_CREATE_TOKEN = '/hint/notifications-service/v1/createToken';
    const COMPANY_IDENTITY_SVC_URL = '/hint/data-enrichment/v1/createIdentity';
    const DATA_ENRICHMENT_CONFIG_SVC_URL = '/hint/data-enrichment/v1/config-fields-for-enrich';

    //
    //  Public properties
    //
    public $endpoint;

    //
    //  Public instance methods
    //

    /**
     * Constructor
     *
     * @param string $endpoint Endpoint on which Stage2 service is to be found.
     */
    public function __construct($endpoint)
    {
        $this->endpoint = $endpoint;
        $this->setLogger(new HintLogger());
    }

    /**
     * Proxy to service's authorize endpoint.
     *
     * @return array Response body when successful
     * @throws \SugarApiException
     * @throws \SugarApiExceptionError
     * @throws \SugarApiExceptionInvalidGrant
     * @throws \SugarApiExceptionNotAuthorized
     * @throws \SugarApiExceptionNotFound
     * @throws \Zend_Http_Client_Exception
     */
    public function newToken($body)
    {
        $uri = $this->endpoint . self::DATA_ENRICHMENT_ACTION_AUTH;

        $request = new Request(
            Request::METHOD_POST,
            $uri,
            $this->prepareHeaders(),
            $this->preparePayload($body)
        );

        return $this->processRequest($request);
    }

    public function registerToCompanyIdentity($body)
    {
        $uri = $this->endpoint . self::COMPANY_IDENTITY_SVC_URL;
        $request = new Request(
            Request::METHOD_POST,
            $uri,
            $this->prepareHeaders(),
            $this->preparePayload($body)
        );
        $response = $this->getHttpClient()->sendRequest($request);
        return $response->getCode();
    }

    public function registerToConfigIdentity($accessToken, $body)
    {
        $uri = $this->endpoint . self::DATA_ENRICHMENT_CONFIG_SVC_URL;
        $request = new Request(
            Request::METHOD_POST,
            $uri,
            $this->prepareHeaders([
                'authToken: ' . $accessToken,
            ]),
            $this->preparePayload($body)
        );
        return $this->processRequest($request);
    }

    /**
     * Proxy to notifications service's authorize endpoint.
     *
     * @param $body
     * @return array Response body when successful
     * @throws \SugarApiException
     * @throws \SugarApiExceptionError
     * @throws \SugarApiExceptionInvalidGrant
     * @throws \SugarApiExceptionNotAuthorized
     * @throws \SugarApiExceptionNotFound
     */
    public function createNotificationsServiceToken($body)
    {
        $uri = $this->endpoint . self::NOTIFICATIONS_SVC_ACTION_CREATE_TOKEN;

        $request = new Request(
            Request::METHOD_POST,
            $uri,
            $this->prepareHeaders(),
            $this->preparePayload($body)
        );

        return $this->processRequest($request);
    }

    //
    //  Raw access methods
    //

    /**
     * Invokes the given HTTP request, handles any error code returns, and upon success returns the
     * decoded JSON response body.
     *
     * @param $request
     * @return mixed
     * @throws LicenseExpiredApiException
     * @throws NoLicenseApiException
     * @throws SugarApiException
     * @throws SugarApiExceptionError
     * @throws SugarApiExceptionInvalidGrant
     * @throws SugarApiExceptionNotAuthorized
     * @throws SugarApiExceptionNotFound
     */
    private function processRequest($request) {
        $response = $client = $this->getHttpClient()->sendRequest($request);

        switch ($response->getCode()) {
            case 401:
                throw new SugarApiExceptionInvalidGrant();
            case 402:
                $body = json_decode($response->getBody(), true);
                if (is_null($body) || is_null($body['message'])) {
                    $this->logger->alert('Invalid response from Hint /token endpoint');
                    throw new NoLicenseApiException();
                }

                // In the message we can find the reason for the failure.
                // Consult SubscriptionServiceClient class on Hint backend for details.
                switch ($body['message']) {
                    case 'ExpiredSugarCRMLicense':
                    case 'ExpiredHintLicense':
                        throw new LicenseExpiredApiException();
                    case 'NoHintLicense':
                    default:
                        throw new NoLicenseApiException();
                }
                break;
            case 403:
                throw new SugarApiExceptionNotAuthorized();
            case 404:
                throw new SugarApiExceptionNotFound();
            case 200:
                return json_decode($response->getBody(), true);
            // This is to handle /config-enrich-bean endpoint as it returns 201 status
            case 201:
                return 201;
            default:
                $this->logger->alert('Unexpected HTTP return status code: ' . $response->getCode());
                throw new SugarApiExceptionError();
        }
    }

    private function getHttpClient(): HttpClient
    {
        return new HttpClient();
    }

    /**
     * Prepare request headers
     * @param array $headers additional headers beyond the standard JSON and cache control ones
     * @return array
     */
    private function prepareHeaders(array $headers = []): array
    {
        return array_merge([
            'Accept: application/json',
            'Content-Type: application/json',
            'cache-control: no-cache',
        ], $headers);
    }

    /**
     * Prepare service payload
     * @param array $payload (hashmap)
     * @return string JSON string encoding of payload
     */
    private function preparePayload(array $payload = []): string
    {
        return json_encode($payload, JSON_UNESCAPED_SLASHES);
    }
}
