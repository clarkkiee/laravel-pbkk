<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-dark-main leading-tight">
            {{ __('Event Detail') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="text-center">
                        <!-- Event Title -->
                        <h1 class="text-4xl font-bold text-accent mb-6">{{ $event->name }}</h1>
                        
                        <!-- Event Details -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-left">
                            <div>
                                <p class="text-lg font-semibold text-gray-700 dark:text-gray-300">{{ __('Event Date') }}: </p>
                                <p class="text-xl">{{ $event->event_date }}</p>
                            </div>
                            <div>
                                <p class="text-lg font-semibold text-gray-700 dark:text-gray-300">{{ __('Place') }}: </p>
                                <p class="text-xl">{{ $event->place }}</p>
                            </div>
                            <div>
                                <p class="text-lg font-semibold text-gray-700 dark:text-gray-300">{{ __('Capacity') }}: </p>
                                <p class="text-xl">{{ $event->capacity }}</p>
                            </div>
                            <div class="md:col-span-2">
                                <p class="text-lg font-semibold text-gray-700 dark:text-gray-300">{{ __('Description') }}: </p>
                                <p class="text-xl">{{ $event->description }}</p>
                            </div>
                        </div>

                        <!-- Participant Details -->
                        <div class="mt-8">
                            <h2 class="text-3xl font-semibold text-accent mb-4">{{ __('Participants') }}</h2>
                            <div class="bg-gray-100 dark:bg-gray-900 p-4 rounded-lg shadow-md">
                                @if(count($participantDetails) > 0)
                                    <ul class="list-disc pl-5 space-y-2">
                                        @foreach ($participantDetails as $participant)
                                            <li class="text-lg">{{ $participant['name'] }}</li>
                                        @endforeach
                                    </ul>
                                @else
                                    <p class="text-lg text-gray-600 dark:text-gray-400">{{ __('No participants have registered yet.') }}</p>
                                @endif
                            </div>
                        </div>
                        
                        <!-- Button Back to Events -->
                        <div class="mt-8">
                            <a href="{{ url('/event') }}" class="px-6 py-3 bg-accent text-white font-bold rounded-md shadow-lg transition transform hover:bg-accent-dark hover:-translate-y-1 focus:ring focus:ring-accent-light">
                                {{ __('Back to Events') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
