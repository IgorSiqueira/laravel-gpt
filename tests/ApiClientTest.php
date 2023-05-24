<?php

namespace IgorSiqueira\LaravelGPT\Tests;

use IgorSiqueira\LaravelGPT\ApiClient;
use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;


class ApiClientTest extends TestCase
{
    protected function loadEnvFile(string $file): void
    {
        if (!file_exists($file)) {
            throw new \RuntimeException("File not found: $file");
        }
        $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line) {
            [$name, $value] = explode('=', $line, 2);
            putenv("$name=$value");
        }
    }

    public function testGenerateText()
    {
        $envFile = dirname(__DIR__) . '/test.env';
        $this->loadEnvFile($envFile);
        
        // Crie uma instância do ApiClient com as configurações necessárias para o teste
        $apiKey = getenv('API_KEY');
        $apiEndpoint = getenv('API_ENDPOINT');

        $httpClient = new Client(); // Ou qualquer outra implementação do GuzzleHttp\ClientInterface que você preferir

        $apiClient = new ApiClient($apiKey, $apiEndpoint, $httpClient);

        // Chame o método generateText com o prompt desejado
        $prompt = 'Olá, GPT!';
        $response = $apiClient->generateText($prompt);

        // Verifique se a resposta é válida ou faça outras asserções conforme necessário
        $this->assertNotEmpty($response);
    }
}
