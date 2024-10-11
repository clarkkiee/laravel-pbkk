{{-- <div class="flex flex-col gap-1 bg-neutral shadow-md rounded-lg p-4 m-2 border-2 border-accent hover:border-dark-main hover:scale-[102%] transition-all ease-in-out">
    <h2 class="text-2xl text-accent font-bold">{{ $event->name }}</h2>
    <p class="text-dark-main"><strong>Date:</strong> {{ $event->event_date }}</p>
    <p class="text-dark-main"><strong>Place:</strong> {{ $event->place }}</p>
    <p class="text-dark-main"><strong>Capacity:</strong> {{ $event->capacity }}</p>
    <p class="text-dark-main" class="mt-2">{{ $event->description }}</p>

    <div class="mt-4 bg-dark-main w-max py-2 px-3 text-sm border-2 text-neutral rounded-md hover:opacity-90 ">
        <a href='/event/{{ $event->id }}'' class="">View Details</a>
    </div>
</div> --}}

<div class="flex flex-col justify-between max-w-sm p-6 my-4 bg-dark-main border-2 border-transparent rounded-lg shadow hover:scale-[102%] hover:border-accent transition-all ease-in-out">
    <div>
        <a href='/event/{{ $event->id }}'>
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-accent line-clamp-1">{{ $event->name }}</h5>
        </a>
        <p class="mb-1 font-normal text-neutral"><strong>Date: </strong>{{ $event->event_date }}</p>
        <p class="mb-1 font-normal text-neutral"><strong>Place: </strong>{{ $event->place }}</p>
        <p class="mb-2 font-normal text-neutral text-sm "><strong>Capacity: </strong>{{ $event->capacity }}</p>
        <p class="mb-8 font-normal text-neutral text-ellipsis line-clamp-2">{{ $event->description }}</p>
    </div>
    <div>
        <a href='/event/{{ $event->id }}' class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-accent hover:opacity-90 rounded-lg  focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            View Details
            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>

    </div>
</div>
