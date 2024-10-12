<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Welcome to WeMove') }}
        </h2>
    </x-slot> --}}

    <div class="flex flex-col items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-4xl font-extrabold text-accent dark:text-white mb-4">
                Discover Events and Stay Active
            </h2>
            <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                Join our vibrant community, participate in exciting events, and keep moving forward with WeMove.
            </p>
            <div class="mt-6">
                <a href="{{ url('/events') }}" class="inline-block px-8 py-3 bg-accent text-white text-lg font-semibold rounded-md shadow-lg hover:bg-accent-dark transition duration-300">
                    Browse Events
                </a>
            </div>
        </div>

        <div class="mt-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 w-full max-w-6xl">
            <!-- Documentation Card -->
            <a href="https://laravel.com/docs" class="flex flex-col items-start gap-4 p-6 bg-white dark:bg-gray-800 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                <div class="flex items-center space-x-4">
                    <div class="bg-accent text-white p-4 rounded-full">
                        <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v12m6-6H6" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white">Documentation</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-300 mt-2">
                            Explore Laravel's official documentation to enhance your development knowledge.
                        </p>
                    </div>
                </div>
            </a>

            <!-- Laracasts Card -->
            <a href="https://laracasts.com" class="flex flex-col items-start gap-4 p-6 bg-white dark:bg-gray-800 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                <div class="flex items-center space-x-4">
                    <div class="bg-accent text-white p-4 rounded-full">
                        <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white">Laracasts</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-300 mt-2">
                            Watch thousands of Laravel tutorials on Laracasts.
                        </p>
                    </div>
                </div>
            </a>

            <!-- Laravel News Card -->
            <a href="https://laravel-news.com" class="flex flex-col items-start gap-4 p-6 bg-white dark:bg-gray-800 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                <div class="flex items-center space-x-4">
                    <div class="bg-accent text-white p-4 rounded-full">
                        <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white">Laravel News</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-300 mt-2">
                            Stay updated with the latest news and updates from the Laravel community.
                        </p>
                    </div>
                </div>
            </a>

</x-app-layout>
