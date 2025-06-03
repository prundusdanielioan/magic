<?php

namespace App\Http\Controllers;

use App\Mail\RezervareTrimisa;
use App\Models\Event;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class FullCalenderController extends Controller
{

    /**
     * @param Request $request
     * @return Application|Factory|View|\Illuminate\Foundation\Application|JsonResponse
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
                    'phone' => $request->phone,
                    'message' => $request->message,
                    'hour' => $request->hour,
                    'start' => $dateTime->format('Y-m-d H:i:s'),
                    'end' => $dateTime->format('Y-m-d H:i:s'),
                ]);
                $event->user_id = Auth::id();
                $event->save();
                $emailData = [
                    'data' => $dateTime->format('Y-m-d'),
                    'telefon' => $request->phone,
                    'mesaj' => $request->message,
                ];
                Mail::to('prundusdanielioan@gmail.com')->send(new RezervareTrimisa($emailData));

                return response()->json($event);

            case 'update':
                $event = Event::find($request->id)->update([
                    'title' => $request->title,
                    'phone' => $request->phone,
                    'message' => $request->message,

                ]);

                return response()->json($event);;

            case 'delete':
                $event = Event::find($request->id)->delete();

                return response()->json($event);
            case 'view':
                $event = Event::find($request->id);

                return response()->json($event);


            default:

                break;
        }
    }
}
