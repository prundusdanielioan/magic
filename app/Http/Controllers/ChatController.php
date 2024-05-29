<?php

namespace App\Http\Controllers;

use AllowDynamicProperties;
use App\Http\Services\OpenAIAsistant;
use Illuminate\Http\Request;

#[AllowDynamicProperties] class ChatController extends Controller
{
    protected $openAIKey;

    public function __construct()
    {
        $this->threadId = 'thread_Cf2x9PcZnwjI4Mostt8V00UE';
    }

    public function chat(Request $request, OpenAIAsistant $openAIAsistant)
    {
        return $openAIAsistant->getRuns($this->threadId);

    }
}
