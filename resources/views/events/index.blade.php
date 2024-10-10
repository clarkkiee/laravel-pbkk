<x-app-layout>
    <div class="flex flex-col min-h-screen px-[7%] gap-2">
        <h1 class="flex text-dark-main font-bold mt-4 mx-2 text-2xl">Events</h1>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
            @foreach ($events as $event)
                <x-event-card :event="$event" />
            @endforeach
        </div>
    </div>
</x-app-layout>