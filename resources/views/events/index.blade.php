<x-app-layout>
    <div class="flex flex-col min-h-screen px-[7%] gap-2">
        <div class="flex justify-between">
            <h1 class="flex text-dark-main font-bold mt-4 mx-2 text-3xl">Events</h1>
            <h1 class="mt-4 mx-2 text-md font-bold text-dark-main underline hover:text-accent"><a href="/event/create">Create Event</a></h1>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
            @foreach ($events as $event)
                <x-event-card :event="$event" />
            @endforeach
        </div>
    </div>
</x-app-layout>