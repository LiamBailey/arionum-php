<?php

namespace pxgamer\Arionum;

use GuzzleHttp\Client;

/**
 * Class Arionum
 */
class Arionum
{
    /**
     * The request endpoint for API calls.
     */
    public const API_ENDPOINT = '/api.php';
    /**
     * The API status code for a successful response.
     */
    public const API_STATUS_OK = 'ok';
    /**
     * The API status code for a failed response.
     */
    public const API_STATUS_ERROR = 'error';
    /**
     * Default error message when the status is unknown.
     */
    public const ERROR_UNKNOWN_STATUS = 'Unknown status code returned.';

    /**
     * @var string
     */
    private $nodeAddress;
    /**
     * @var Client
     */
    private $client;

    /**
     * @param string $publicKey
     * @return string
     */
    public function getAddress(string $publicKey): string
    {
        return $this->getJson([
                'q'          => 'getAddress',
                'public_key' => $publicKey,
            ]
        );
    }

    /**
     * @return string
     */
    public function getNodeAddress(): string
    {
        return $this->nodeAddress;
    }

    /**
     * @param string $nodeAddress
     */
    public function setNodeAddress(string $nodeAddress): void
    {
        $this->nodeAddress = $nodeAddress;
    }

    /**
     * @return Client
     */
    private function getClient(): Client
    {
        if (!$this->client instanceof Client) {
            $this->client = new Client([
                'base_uri' => $this->nodeAddress,
            ]);
        }

        return $this->client;
    }

    /**
     * @param array $query
     * @return mixed
     * @throws \Exception
     */
    private function getJson(array $query)
    {
        return $this->decodeResponse(
            $this->getClient()
                ->get($this->getNodeAddress().self::API_ENDPOINT, ['query' => $query])
                ->getBody()
                ->getContents()
        );
    }

    /**
     * @param string $json
     * @return mixed
     * @throws \Exception
     */
    private function decodeResponse(string $json)
    {
        $data = \GuzzleHttp\json_decode($json);

        if ($data->status === self::API_STATUS_ERROR) {
            throw new \Exception($data->data);
        }

        if ($data->status === self::API_STATUS_OK) {
            return $data->data;
        }

        throw new \Exception(self::ERROR_UNKNOWN_STATUS);
    }
}