<?php

namespace App\Http\Controllers;

use App\Http\Services\OpenAIAsistant;
use Illuminate\Http\Request;

class ChatController extends Controller
{

    public function __construct()
    {
        $this->threadId = 'thread_Cf2x9PcZnwjI4Mostt8V00UE';
    }

    public function chat(Request $request, OpenAIAsistant $openAIAsistant)
    {
        $message = $request->input('message');
        return response()->json([
            'message' => $openAIAsistant->addMessageAndWaitForResponse($this->threadId, $message),
            'status' => 'success',
            'timestamp' => now()->toDateTimeString(),
        ]);
    }
}
