<x-app-layout>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>


    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-accent">Edit Event Details</h2>
            <form method="POST" action="{{ route('events.update', $event->id) }}">
                @csrf
                @method('PUT')
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Event Name</label>
                        <input value="{{ old('name', $event->name) }}" type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Define your event name" required="">
                    </div>

                    <div class="w-full">
                        <label for="event_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Event Date</label>
                        <div class="max-w-sm flex justify-center items-center bg-gray-50 border border-gray-300 rounded-lg">
                            <svg class="flex w-6 h-6 m-2 mx-4 text-accent dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                            </svg>
                            <input value="{{ old('event_date', $event->event_date) }}" datepicker name="event_date" id="event_date" datepicker-format="yyyy-mm-dd" type="text" class="border-none rounded-r-lg text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full ps-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                          </div>
                    </div>
                    
                    <div class="w-full">
                        <label for="capacity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Capacity</label>
                        <input value="{{ old('capacity', $event->capacity) }}" type="number" name="capacity" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="e.g 20" required="">
                    </div>
                    
                    <div class="sm:col-span-2">
                        <label for="place" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Place</label>
                        <input value="{{ old('place', $event->place) }}" type="text" name="place" id="place" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Specify where your activities take place" required="">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <textarea id="description" name="description" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Add additional information about your event">{{ old('description', $event->description) }}</textarea>
                    </div>
                </div>
                <button type="submit" class="mt-4 w-full inline-flex items-center py-2 text-sm font-medium text-center justify-center bg-accent text-white border-2 border-dark-main hover:scale-105 transition-all ease-in-out bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                    Update
                </button>
            </form>
            <form method="POST" action="{{ route('events.destroy', $event->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="my-2 w-full inline-flex items-center px-5 py-2 justify-center text-sm font-medium text-center bg-red-500 text-white border-2 border-dark-main hover:scale-105 transition-all ease-in-out rounded-lg focus:ring-4 focus:ring-red-200 dark:focus:ring-red-900 hover:bg-red-700")">
                    Delete
                </button>
            </form>
        </div>
      </section>
</x-app-layout>