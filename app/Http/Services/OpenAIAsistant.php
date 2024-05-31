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
    private string $runId;
    private string $message;
    /**
     * @var \Illuminate\Config\Repository|\Illuminate\Contracts\Foundation\Application|\Illuminate\Foundation\Application|mixed
     */
    private string $apiUrl;
    /**
     * @var \Illuminate\Config\Repository|\Illuminate\Contracts\Foundation\Application|\Illuminate\Foundation\Application|mixed
     */
    private string $assistandId;

    public function __construct()
    {
        $this->client = new Client();
        $this->apiUrl = config('services.openai.threads_url');
        $this->apiKey = config('services.openai.api_key');
        $this->assistandId = config('services.openai.assistant_id');
        $this->runId = 'run_FukN3m580QuxymtdCtOyfxJe'; //to be deleted, testing
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

    public function getRun($threadId): string
    {
        try {
            $response = $this->client->request('GET', "{$this->apiUrl}/{$threadId}/runs/{$this->runId}", $this->headers);
            return json_decode($response->getBody(), true)['status'];
        } catch (RequestException $e) {
            return '';
        }
    }

    public function runRuns($threadId)
    {
        try {
            $response = $this->client->request('POST', "{$this->apiUrl}/{$threadId}/runs",
                array_merge($this->headers, ['json' => [
                    'assistant_id' => $this->assistandId,
                ]
                ])
            );
            $info = json_decode($response->getBody(), true);
            $this->runId = $info['id'];

        } catch (RequestException $e) {
            // Handle error appropriately

        }
    }

    public function getMessages($threadId)
    {
        try {
            $response = $this->client->request('GET', "{$this->apiUrl}/{$threadId}/messages", $this->headers);
            return $this->getResponseFor200Code($response);
        } catch (RequestException $e) {
            // Handle error appropriately
            return json_decode($e->getResponse()->getBody()->getContents(), true);
        }
    }

    public function addMessage($threadId, $message)
    {
        try {
            $response = $this->client->request('POST', "{$this->apiUrl}/{$threadId}/messages",
                array_merge($this->headers, ['json' => [
                        'role' => 'user',
                        'content' => $message,
                    ]
                    ]
                )
            );
            return json_decode($response->getBody(), true);
        } catch (RequestException $e) {
            // Handle error appropriately
            return json_decode($e->getResponse()->getBody()->getContents(), true);
        }
    }

    public function addMessageAndWaitForResponse(string $threadId, string $message)
    {
        //add message
        $this->addMessage($threadId, $message);
        //run
        $this->runRuns($threadId);
        //check status
        while (true) {

            if ($this->getRun($threadId) == 'completed') {
                break;
            }
            sleep(1);
        }
        //return response
        return $this->getMessages($threadId)['content'][0]['text']['value'];
    }

    private function getResponseFor200Code(ResponseInterface $response, $showOnlyLatest = true)
    {
        if ($response->getStatusCode() == 200) {
            return $showOnlyLatest ? json_decode($response->getBody(), true)['data'][0] : json_decode($response->getBody(), true)['data'];
        } else return null;
    }
}
