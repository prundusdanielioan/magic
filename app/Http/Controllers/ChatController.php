<?php

namespace App\Http\Controllers;

use AllowDynamicProperties;
use App\Http\Services\OpenAIAsistant;
use Illuminate\Http\Request;

#[AllowDynamicProperties] class ChatController extends Controller
{

    public function __construct()
    {
        $this->threadId = 'thread_Cf2x9PcZnwjI4Mostt8V00UE';
    }

    public function chat(Request $request, OpenAIAsistant $openAIAsistant)
    {
        $message = 'Cand am lucrat la Quest';
        //        return $openAIAsistant->getRuns($this->threadId);
//          return $openAIAsistant->getMessages($this->threadId);
//          return $openAIAsistant->addMessage($this->threadId);
//            return $openAIAsistant->runRuns($this->threadId);
//            return $openAIAsistant->getRun($this->threadId);
        return $openAIAsistant->addMessageAndWaitForResponse($this->threadId, $message);
    }
}
