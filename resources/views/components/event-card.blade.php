
<div class="flex flex-col justify-between max-w-sm p-6 bg-white border-2 border-dark-main rounded-lg shadow hover:scale-[102%] duration-300 hover:bg-neutral transition-all ease-in-out">
    <div>
        <a href='/event/{{ $event->id }}'>
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-accent line-clamp-1">{{ $event->name }}</h5>
        </a>
        <p class="mb-1 font-normal text-dark-main"><strong>Date: </strong>{{ $event->event_date }}</p>
        <p class="mb-1 font-normal text-dark-main"><strong>Place: </strong>{{ $event->place }}</p>
        <p class="mb-2 font-normal text-dark-main text-sm "><strong>Capacity: </strong>{{ $event->capacity }}</p>
        <p class="mb-8 font-normal text-dark-main text-ellipsis line-clamp-2">{{ $event->description }}</p>

        <div class="relative mb-2 font-semibold text-red-500 text-md h-1">
            @if ($event->participants->count() == $event->capacity && !$event->participants()->where('user_id', Auth::id())->exists())
                <p>Event is Full</p>
            @elseif ($event->participants->count() == $event->capacity && $event->participants()->where('user_id', Auth::id())->exists())
                <p>The event is full. You are a participant</p>
            @endif
        </div>

    </div>
    <div>
        <a href='/event/{{ $event->id }}' class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-dark-main hover:-translate-y-1 rounded-lg transition-all ease-in-out">
            View Details
            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>

        @if($event->participants()->where('user_id', Auth::id())->exists())
        <form action="{{ route('events.leave', $event->id) }}" method="POST" style="display:inline-block;">
            @csrf
            <button type="submit" class="bg-accent px-3 py-1.5 border-2 border-accent rounded-lg text-sm text-white hover:-translate-y-1 hover:border-dark-main transition-all ease-in-out">Left Event</button>
        </form>
        @else
            @if ($event->participants->count() < $event->capacity)
                <form action="{{ route('events.join', $event->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    <button type="submit" class="bg-accent px-3 py-1.5 border-2 border-accent rounded-lg text-sm text-white hover:-translate-y-1 hover:border-dark-main transition-all ease-in-out">Join Event</button>
                </form>
            @else
                <button type="submit" class="bg-gray-500 px-3 py-1.5 border-2 border-gray-500 rounded-lg text-sm text-white opacity-50 cursor-not-allowed" disabled>Join Event</button>
            @endif
        @endif

        
    </div>
</div>
