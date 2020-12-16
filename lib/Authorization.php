<?php

namespace DocPlanner\Client;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;

class Authorization
{
    /**
     * @var string
     */
    private $authUrl;

    /**
     * @var ClientInterface
     */
    private $client;

    public function __construct($authUrl, ClientInterface $client = null)
    {
        $this->authUrl = $authUrl;
        $this->client = $client ?: new Client();
    }

    /**
     * @param string $clientId
     * @param string $clientSecret
     *
     * @return string
     * @throws ApiException
     */
    public function getAccessToken($clientId, $clientSecret)
    {
        $authForm = [
            'grant_type' => 'client_credentials',
            'scope' => 'integration',
            'client_id' => $clientId,
            'client_secret' => $clientSecret
        ];

        foreach ($authForm as $formParamName => $formParamValue) {
            $multipartContents[] = [
                'name' => $formParamName,
                'contents' => $formParamValue
            ];
        }
        $authBody = new MultipartStream($multipartContents);

        $authRequest = new Request(
            'POST',
            $this->authUrl,
            [],
            $authBody
        );

        try {
            $authResponse = $this->client->send($authRequest);
        } catch (Exception $e) {
            throw new ApiException($e->getMessage(), $e->getCode());
        }
        $content = json_decode($authResponse->getBody()->getContents(), true);

        return $content['access_token'];
    }
}
