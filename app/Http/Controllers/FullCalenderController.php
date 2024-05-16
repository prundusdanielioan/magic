<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;

class FullCalenderController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {

            $data = Event::whereDate('start', '>=', $request->start)
                ->whereDate('end', '<=', $request->end)
                ->get(['id', 'title', 'start', 'end']);

            return response()->json($data);
            return view('rezervari', $data);

        }
        return view('rezervari');

    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function ajax(Request $request)
    {

        switch ($request->type) {
            case 'add':
                $dateTime = Carbon::createFromTimestampMs($request->start);
                $dateTime->subtract('1 day');

                $event = Event::create([
                    'title' => $request->title,
                    'start' => $dateTime->format('Y-m-d H:i:s'),
                    'end' => $dateTime->format('Y-m-d H:i:s'),
                ]);
                $response = Http::withBasicAuth('7f10adec', 'D8ivM2bR1Szc4g9l')
                    ->withHeaders([
                        'Content-Type' => 'application/json',
                        'Accept' => 'application/json'
                    ])
                    ->post('https://messages-sandbox.nexmo.com/v1/messages', [
                        'from' => '14157386102',
                        'to' => '40722562596',
                        'message_type' => 'text',
                        'text' => 'Avem o rezervare',
                        'channel' => 'whatsapp'
                    ]);
                return response()->json($event);

            case 'update':
                $event = Event::find($request->id)->update([
                    'title' => $request->title,
                    'start' => $request->start,
                    'end' => $request->end,
                ]);

                return response()->json($event);;

            case 'delete':
                $event = Event::find($request->id)->delete();

                return response()->json($event);

            default:
                # code...
                break;
        }
    }
}
