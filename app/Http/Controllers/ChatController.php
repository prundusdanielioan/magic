<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    protected $openAIKey;
    protected $openAIEndpoint;

    public function __construct()
    {
        $this->openAIKey = env('OPENAI_API_KEY');
        $this->openAIEndpoint = 'https://api.openai.com/v1/completions';
    }

    public function chat(Request $request)
    {
        $client = new Client();
        try {
            $response = $client->post('https://api.openai.com/v1/chat/completions', [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Authorization' => 'Bearer ' . $this->openAIKey,
                ],
                'json' => [
                    'model' => 'gpt-4', // Ensure you have access to this model
//                    'model' => 'g-RNNocnT8s-prundus-daniel-info', // Ensure you have access to this model
                    'messages' => [
                        [
                            'role' => 'user',
                            'content' => ' cand am lucrat la Arnia ?'
                        ],
                    ],
                    'max_tokens' => 150,
                    'temperature' => 0.7,
                    'stop' => ['\n']
                ],
            ]);

            // Process the response
            $responseBody = json_decode((string)$response->getBody(), true);
            // Do something with the response
            echo json_encode($responseBody, JSON_PRETTY_PRINT);

        } catch (GuzzleHttp\Exception\ClientException $e) {
            // Handle client exceptions (4xx errors)
            echo 'Client error: ' . $e->getMessage();
        } catch (GuzzleHttp\Exception\ServerException $e) {
            // Handle server exceptions (5xx errors)
            echo 'Server error: ' . $e->getMessage();
        } catch (GuzzleHttp\Exception\RequestException $e) {
            // Handle network errors and other request exceptions
            echo 'Request error: ' . $e->getMessage();
        } catch (Exception $e) {
            // Handle any other exceptions
            echo 'General error: ' . $e->getMessage();
        }
    }
}
