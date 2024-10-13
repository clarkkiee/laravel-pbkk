
<div class="flex flex-col gap-1 justify-between max-w-sm p-6 bg-white border-2 border-dark-main rounded-lg shadow hover:scale-[102%] duration-300 hover:bg-neutral transition-all ease-in-out">
    <div class="flex flex-col gap-2">
        <a href='/event/{{ $event->id }}'>
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-accent line-clamp-1">{{ $event->name }}</h5>
        </a>
        <div class="flex flex-col gap-1">
            <p class="font-normal text-dark-main"><strong>Date: </strong>{{ $event->event_date }}</p>
            <p class="font-normal text-dark-main"><strong>Place: </strong>{{ $event->place }}</p>
            <p class="font-normal text-dark-main text-sm "><strong>Capacity: </strong>{{ $event->capacity }}</p>
            <p class="font-normal text-dark-main text-ellipsis line-clamp-2">{{ $event->description }}</p>
        </div>
    </div>
    <div class="flex flex-col gap-4">
        <div class="flex my-2 font-semibold text-red-500 text-md h-1">
            @if ($event->participants->count() == $event->capacity && !$event->participants()->where('user_id', Auth::id())->exists())
                <p>Event is Full</p>    
            @elseif ($event->participants->count() == $event->capacity && $event->participants()->where('user_id', Auth::id())->exists())
                <p>The event is full. You are a participant</p>
            @endif
        </div>

        
        <a href='/event/{{ $event->id }}/edit' class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-dark-main hover:-translate-y-1 rounded-lg transition-all ease-in-out">
            Edit Event Details
            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
        
    </div>
</div>

