<x-app-layout>
    <div class="flex flex-col min-h-screen px-[7%] gap-2">
        <div class="flex justify-between items-center my-4">
            <h1 class="flex text-dark-main font-bold mt-4 mx-2 text-3xl">Events</h1>
            <h1 class="mt-4 mx-2 text-lg font-bold text-dark-main underline hover:-translate-y-1 hover:text-accent transition-all ease-in-out"><a href="/event/create">Create Event</a></h1>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mx-auto">
            @foreach ($events as $event)
                <x-event-card :event="$event" />
            @endforeach

            @if(session('success'))
                <x-push-notification message="{{ session('success') }}" />
            </div>
            @endif

            @if(session('error'))
                <x-push-notification message="{{ session('error') }}" />
            @endif
        </div>
    </div>
</x-app-layout>

<script src="{{ asset('js/app.js') }}"></script>
@stack('scripts')