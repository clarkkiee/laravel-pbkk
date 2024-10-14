<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-dark-main leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg relative">
                <button onclick="document.getElementById('logged-in-message').style.display='none'" class="absolute top-2 right-2 text-gray-500 hover:text-gray-800">
                    &times;
                </button>

                <div id="logged-in-message" class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>  
        

        <div class="flex flex-col gap-8 max-w-7xl mx-auto sm:px-6 lg:px-8 py-5 px-[7%]">
                
                <div class="flex gap-4 flex-col lg:flex-row">
                    
                    <div class="flex flex-col bg-dark-main shadow-lg rounded-lg overflow-hidden md:w-1/2 h-max">
                        <img src="{{ asset('images/create_event.jpg') }}" alt="Join Event" class="h-64 w-full object-cover rounded-md">
                        <div class="p-6 flex justify-center">
                            <a href="/event/create" 
                               class="inline-block text-center w-1/2 px-4 py-2 bg-accent text-white font-bold rounded-md shadow-lg transition transform hover:bg-accent-dark hover:-translate-y-1 focus:ring focus:ring-accent-light">
                               Create Event Now!
                            </a>
                        </div>
                    </div>

                    <div class="flex flex-col bg-dark-main shadow-lg rounded-lg overflow-hidden md:w-1/2 h-max">
                        <img src="{{ asset('images/join_event.jpg') }}" alt="Join Event" class="h-64 w-full object-cover rounded-md">
                        <div class="p-6 flex justify-center">
                            <a href="/event" 
                               class="inline-block text-center w-1/2 px-4 py-2 bg-accent text-white font-bold rounded-md shadow-lg transition transform hover:bg-accent-dark hover:-translate-y-1 focus:ring focus:ring-accent-light">
                                Join Event Now!
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="flex flex-col">

                    <h1 class="text-2xl my-4 font-bold text-dark-main">Your Own Events</h1>

                    @if ($createdEvents->isEmpty())
                        <p class="text-dark-main">You have not created any events yet.</p>
                    @else
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mx-auto">
                            @foreach ($createdEvents as $event)
                                <x-event-card-creator :event="$event" />
                            @endforeach
                        </div>
                    @endif
                </div>

                <div class="flex flex-col">

                    <h1 class="text-2xl my-4 font-bold text-dark-main">Events Participated</h1>

                    @if ($participatedEvents->isEmpty())
                        <p class="text-dark-main">You have not joined any events.</p>
                    @else
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mx-auto">
                            @foreach ($participatedEvents as $event)
                                <x-event-card :event="$event" />
                            @endforeach
                        </div>
                    @endif
                </div>

            </div>

            @if(session('success'))
                <x-push-notification message="{{ session('success') }}" />
            @endif

            @if(session('error'))
                <x-push-notification message="{{ session('error') }}" />
            @endif
    </div>
</x-app-layout>

<script src="{{ asset('js/app.js') }}"></script>
@stack('scripts')