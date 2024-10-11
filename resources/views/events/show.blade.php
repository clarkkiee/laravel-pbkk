<h1>

    <p>{{ $event->name }}</p>
    <p>{{ $event->event_date }}</p>
    <p>{{ $event->place }}</p>
    <p>{{ $event->capacity }}</p>

    @foreach ($participantDetails as $participant)
        <p>{{ $participant['name'] }}</p>
    @endforeach
</h1>