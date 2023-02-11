<?php

namespace Codemaxbr\Vindi\Resources;

use GuzzleHttp\Client;

class Resource
{
    private $endpoint = 'https://api.vindi.com.br/api/v1/';
    private $version = 'v1';
    private $client;

    public function __construct()
    {
        $enviroment = env('VINDI_ENV');
        if ($enviroment == 'sandbox') {
            $this->endpoint = 'https://sandbox-app.vindi.com.br/api/v1/';
        }

        $this->client = new Client([
            'base_uri' => $this->getEndpoint(),
            'auth' => [env('VINDI_API_KEY'), '', 'BASIC'],
            'headers' => [
                'Content-Type' => 'application/json',
                'User-Agent' => 'Integração Vindi;'
            ],
            'timeout' => 60,
            'execptions' => false
        ]);
    }

    private function getEndpoint()
    {
        return $this->endpoint;
    }

    public function getRequest($uri, $options = [])
    {
        return $this->request('GET', $uri, $options);
    }

    public function postRequest($uri, $options = [])
    {
        return $this->request('POST', $uri, $options);
    }

    public function putRequest($uri, $options = [])
    {
        return $this->request('PUT', $uri, $options);
    }

    public function deleteRequest($uri, $options = [])
    {
        return $this->request('DELETE', $uri, $options);
    }

    private function request($method, $uri, $options = [])
    {
        $request = $this->client->request($method, $uri, $options);
        return $this->response($request);
    }

    private function response($response)
    {
        return json_decode(json_encode(array_merge([
            'status' => $response->getStatusCode(),
            'headers' => $response->getHeaders()
        ], json_decode($response->getBody()->getContents(), true))));
    }
}