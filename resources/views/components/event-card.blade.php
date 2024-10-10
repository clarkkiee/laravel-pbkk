<div class="flex flex-col gap-1 bg-neutral shadow-md rounded-lg p-4 m-2 border-2 border-accent hover:border-dark-main hover:scale-[102%] transition-all ease-in-out">
    <h2 class="text-2xl text-accent font-bold">{{ $event->name }}</h2>
    <p class="text-dark-main"><strong>Date:</strong> {{ $event->event_date }}</p>
    <p class="text-dark-main"><strong>Place:</strong> {{ $event->place }}</p>
    <p class="text-dark-main"><strong>Capacity:</strong> {{ $event->capacity }}</p>
    <p class="text-dark-main" class="mt-2">{{ $event->description }}</p>

    <div class="mt-4 bg-dark-main w-max py-2 px-3 text-sm border-2 text-neutral rounded-md hover:opacity-90 ">
        <a href='/event/{{ $event->id }}'' class="">View Details</a>
    </div>
</div>
