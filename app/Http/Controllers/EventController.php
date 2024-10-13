<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();
        return view('events.index', compact('events'));
        // return $events;

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'event_date' => 'required|date',
            'place' => 'required',
            'capacity' => 'required|integer|min:1',
            'description' => 'nullable',
        ]);

        $event = new Event();
        $event->name = $validatedData['name'];
        $event->event_date = $validatedData['event_date'];
        $event->place = $validatedData['place'];
        $event->capacity = $validatedData['capacity'];
        $event->description = $validatedData['description'];
        $event->creator_id = Auth::id();
        $event->save();

        $event->participants()->attach(Auth::id(), ['joined_at' => now()]);

        return redirect()->route('events.index')->with('success', 'Event berhasil dibuat!');
    }

    public function show($id)
    {
        $event = Event::find($id);
        if ($event) {
            $participants = $event->participants()->withPivot('user_id')->get();
            $participantDetails = [];
            foreach ($participants as $participant) {
                $user = User::find($participant->pivot->user_id);
                $participantDetails[] = [
                    'id' => $user->id,
                    'name' => $user->name,
                ];
            }
            return view('events.show', compact('event', 'participantDetails'));
        } else {
            return redirect()->route('events.index')->with('error', 'Event not found');
        }
    }

    public function join ($eventId) {
        $event = Event::findOrFail($eventId);

        if($event->participants()->where('user_id', Auth::id())->exists()) {
            return redirect()->back()->with('error', 'You are already registered as a participant in this event');
        }

        if($event->participants()->count() >= $event->capacity) {
            return redirect()->back()->with('error', 'The quota of participants for this event is already full');
        }

        $event->participants()->attach(Auth::id(), ['joined_at' => now()]);
        return redirect()->back()->with('error', 'Successfully joined this event');
    }

    public function leave ($eventId) {
        $event = Event::findOrFail($eventId);
        if($event->participants()->where('user_id', Auth::id())->exists()) {
            $event->participants()->detach(Auth::id());
            return redirect()->back()->with('success', 'Successfully left this event');
        }
        
        return redirect()->back()->with('error', 'You are not registered as a participant in this event');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
