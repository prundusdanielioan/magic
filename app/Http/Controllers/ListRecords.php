<?php

namespace App\Http\Controllers;

use App\Models\Event;

class ListRecords extends Controller
{
    public function render()
    {
        $events = Event::orderBy('hour', 'asc')->get();
        return view('list_records', compact('events'));
    }
}
