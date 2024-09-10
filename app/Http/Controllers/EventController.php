<?php

namespace App\Http\Controllers;

use App\Http\Resources\EventResource;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $event = Event::all();
        return EventResource::collection($event);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'category' => 'required', // L (LKM) atau E (External)
        ]);

        $event = Event::create($validated);
        return new EventResource($event);
    }

    public function update(Request $request, Event $event)
    {
        $validated = $request->validate([
            'name' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'category' => 'required', // L (LKM) atau E (External)
        ]);

        $event->update($validated);
        return new EventResource($event);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Event $event)
    {
        $event->delete();
        return response()->json(['message' => 'Data berhasil dihapus']);
    }
}
