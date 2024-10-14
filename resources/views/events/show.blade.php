<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-dark-main leading-tight">
            {{ __('Event Detail') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 p-4 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="text-center">
                        <!-- Event Title -->
                        <h1 class="text-4xl font-bold text-accent mb-6">{{ $event->name }}</h1>
                        
                        <div class="flex gap-12 ">
                            
                            <!-- Event Details -->
                            <div class=" w-1/2 flex flex-col gap-6 text-left">
                                <h2 class="text-3xl mt-4 font-semibold text-dark-main mb-4">{{ __('Event Details') }}</h2>
                                <div>
                                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-300">{{ __('Event Date') }}: </p>
                                    <p class="text-lg">{{ $event->event_date }}</p>
                                </div>
                                <div>
                                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-300">{{ __('Place') }}: </p>
                                    <p class="text-lg">{{ $event->place }}</p>
                                </div>
                                <div>
                                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-300">{{ __('Capacity') }}: </p>
                                    <p class="text-lg">{{ $event->capacity }}</p>
                                </div>
                                <div class="md:col-span-2">
                                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-300">{{ __('Description') }}: </p>
                                    <p class="text-lg">{{ $event->description }}</p>
                                </div>
                            </div>
    
                            <!-- Participant Details -->
                            <div class="flex flex-col w-1/2 mt-4">
                                <h2 class="text-3xl w-full text-left font-semibold text-dark-main mb-4">{{ __('Participants') }}</h2>
                                <div class="p-4 rounded-lg">
                                    @if(count($participantDetails) > 0)
                                        <div class="w-full grid grid-cols-2 gap-2">
                                            @foreach ($participantDetails as $participant)
                                                @if($participant['name'] == Auth::user()->name)
                                                    <p class="flex text-lg bg-neutral py-2 justify-center items-center text-dark-main border-accent border-2 rounded-lg hover:-translate-y-1 transition-all ease-in-out">{{ $participant['name']}} (me)</p>
                                                    @continue
                                                @endif
                                                <p class="flex text-lg min-w-max bg-neutral py-2 justify-center items-center text-dark-main border-accent border-2 rounded-lg hover:-translate-y-1 transition-all ease-in-out">{{ $participant['name']}}</p>

                                                @endforeach
                                        </div>
                                    @else
                                        <p class="text-lg text-gray-600 dark:text-gray-400">{{ __('No participants have registered yet.') }}</p>
                                    @endif
                                </div>
                            </div>

                        </div>
                        
                        <div class="flex mt-10 justify-center gap-4 w-full">
                            <!-- Button Back to Events -->
                                <a href="{{ url('/event') }}" class="w-1/2 bg-dark-main px-3 py-3 border-2 border-dark-main rounded-lg text-md font-bold justify-center text-white hover:-translate-y-1 hover:border-accent transition-all ease-in-out">
                                    {{ __('Back to Events') }}
                                </a>
                            
                            <div class="flex w-1/2">
                                @if($event->participants()->where('user_id', Auth::id())->exists())
                                <form class="flex w-full" action="{{ route('events.leave', $event->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    <button type="submit" class="flex w-full bg-accent px-3 py-3 border-2 border-accent rounded-lg text-md font-bold justify-center text-white hover:-translate-y-1 hover:border-dark-main transition-all ease-in-out">Left Event</button>
                                </form>
                                @else
                                    @if ($event->participants->count() < $event->capacity)
                                        <form class="flex w-full" action="{{ route('events.join', $event->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            <button type="submit" class="flex w-full bg-accent px-3 py-3 border-2 border-accent rounded-lg text-md font-bold justify-center text-white hover:-translate-y-1 hover:border-dark-main transition-all ease-in-out">Join Event</button>
                                        </form>
                                    @else
                                        <button type="submit" class="w-full bg-gray-500 px-3 py-1.5 border-2 border-gray-500 rounded-lg text-sm text-white opacity-50 cursor-not-allowed" disabled>Join Event</button>
                                    @endif
                                @endif
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
