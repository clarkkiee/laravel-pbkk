<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-dark-main leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg relative">
                <!-- Close button -->
                <button onclick="document.getElementById('logged-in-message').style.display='none'" class="absolute top-2 right-2 text-gray-500 hover:text-gray-800">
                    &times;
                </button>

                <div id="logged-in-message" class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-5">
            <div class="flex justify-between space-x-6"> 
                <div class="bg-dark-main shadow-lg rounded-lg overflow-hidden w-1/2">
                    <div class="p-4">
                        <img src="{{ asset('images/create_event.jpg') }}" alt="Create Event" class="h-96 w-full object-cover rounded-md">
                    </div>
                    <div class="p-6 flex justify-center">
                        <a href="/event/create" 
                           class="inline-block text-center w-1/2 px-4 py-2 bg-accent text-white font-bold rounded-md shadow-lg transition transform hover:bg-accent-dark hover:-translate-y-1 focus:ring focus:ring-accent-light">
                            Create Event Now!
                        </a>
                    </div>
                </div>

                <div class="bg-dark-main shadow-lg rounded-lg overflow-hidden w-1/2">
                    <div class="p-4">
                        <img src="{{ asset('images/join_event.jpg') }}" alt="Join Event" class="h-96 w-full object-cover rounded-md">
                    </div>
                    <div class="p-6 flex justify-center">
                        <a href="/event" 
                           class="inline-block text-center w-1/2 px-4 py-2 bg-accent text-white font-bold rounded-md shadow-lg transition transform hover:bg-accent-dark hover:-translate-y-1 focus:ring focus:ring-accent-light">
                            Join Event Now!
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
