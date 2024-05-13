<?php

namespace App\Livewire;

use Livewire\Component;
use Twilio\Exceptions\ConfigurationException;
use Twilio\Rest\Client;

class Whatsapp extends Component
{
    public $title = '';

    public $content = '';

    /**
     * @throws ConfigurationException
     */
    public function save()
    {
        $twilioSid = config('app.twilio_sid');
        $twilioToken = config('app.twilio_auth_token');
        $twilioWhatsAppNumber = config('app.twilio_whatsapp_number');
        $recipientNumber = '+40722562596';
        $this->validate([
            'title' => 'required|min:3',
            'content' => 'required|min:5',
        ]);
        $twilio = new Client($twilioSid, $twilioToken);
        try {
            $message = $twilio->messages->create(
                'whatsapp:+40722562596', // to
                [
                    'from' => 'whatsapp:+14155238886',
                    'body' => "Hello, this is a test message sent from Laravel via WhatsApp!"
                ]
            );
            return response()->json(['message' => 'WhatsApp message sent successfully']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }

    }

    public function render()
    {
        return view('livewire.whatsapp');
    }
}
