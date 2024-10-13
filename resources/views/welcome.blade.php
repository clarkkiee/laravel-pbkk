<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Welcome to WeMove') }}
        </h2>
    </x-slot> --}}

    <div class="relative flex flex-col items-center justify-center py-12 px-4 sm:px-6 lg:px-8 min-h-screen"
        style="background-image: url('/images/homepage.jpg'); background-size: cover; background-position: center;">
        
        <!-- Overlay for better contrast -->
        <div class="absolute inset-0 bg-black opacity-50"></div>
        
        <!-- Content on top of the background -->
        <div class="relative z-10 text-center">
            <h2 class="text-4xl font-extrabold text-white mb-4">
                Discover Events and Stay Active
            </h2>
            <p class="text-lg text-gray-200 max-w-2xl mx-auto">
                Join our vibrant community, participate in exciting events, and keep moving forward with WeMove.
            </p>
            <div class="mt-6">
                <a href="{{ url('/event') }}" class="inline-block px-8 py-3 bg-accent text-white text-lg font-semibold rounded-md shadow-lg hover:bg-accent-dark transition duration-300">
                    Browse Events
                </a>
            </div>
        </div>

        <div class="relative z-10 mt-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 w-full max-w-6xl">
           {{-- Event Card --}}
        </div>
    </div>
</x-app-layout>
