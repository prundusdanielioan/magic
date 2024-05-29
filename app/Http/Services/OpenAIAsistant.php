<?php

namespace App\Http\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Psr\Http\Message\ResponseInterface;

class OpenAIAsistant
{
    protected $client;
    protected $apiKey;
    /**
     * @var array|array[]
     */
    private array $headers;

    public function __construct()
    {
        $this->client = new Client();
        $this->apiUrl = config('services.openai.threads_url');
        $this->apiKey = config('services.openai.api_key');
        $this->headers = [
            'headers' => [
                'OpenAI-Beta' => 'assistants=v2',
                'Authorization' => 'Bearer ' . $this->apiKey,
            ],
        ];
    }

    public function getRuns($threadId)
    {
        try {
            $response = $this->client->request('GET', "{$this->apiUrl}/{$threadId}/runs", $this->headers);
            return $this->getResponseFor200Code($response);
        } catch (RequestException $e) {
            // Handle error appropriately
            return json_decode($e->getResponse()->getBody()->getContents(), true);
        }
    }

    private function getResponseFor200Code(ResponseInterface $response, $showOnlyLatest = false)
    {
        if ($response->getStatusCode() == 200) {
            return $showOnlyLatest ? json_decode($response->getBody(), true)['data'][0] : json_decode($response->getBody(), true)['data'];
        } else return null;
    }
}
