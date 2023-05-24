<?php

namespace IgorSiqueira\LaravelGPT;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;
use IgorSiqueira\LaravelGPT\Exceptions\ApiException;
use IgorSiqueira\LaravelGPT\Interfaces\ChatClientInterface;


class ApiClient implements ChatClientInterface
{
    private string $apiKey;
    private string $apiEndpoint;
    private ClientInterface $httpClient;

    public function __construct(string $apiKey, string $apiEndpoint, ClientInterface $httpClient)
    {
        $this->apiKey = $apiKey;
        $this->apiEndpoint = $apiEndpoint;
        $this->httpClient = $httpClient;
    }

    public function generateText(string $prompt): string
    {
        try {
            $response = $this->httpClient->post($this->apiEndpoint, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->apiKey,
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    "model"=>"text-davinci-003",
                    "prompt"=>$prompt,
                    "temperature"=> 0,
                ],
            ]);
            $data = json_decode($response->getBody(), true);
            return $data['choices'][0]['text'] ?? '';
        } catch (GuzzleException $e) {
            throw new ApiException($e->getMessage(), $e->getCode(), $e);
        }
    }
}
