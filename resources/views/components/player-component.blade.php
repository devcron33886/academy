<!-- Players section -->
<div class="relative -z-10 mt-32 px-6 lg:px-8">
    <div class="absolute inset-x-0 top-1/2 -z-10 flex -translate-y-1/2 transform-gpu justify-center overflow-hidden blur-3xl sm:bottom-0 sm:right-[calc(50%-6rem)] sm:top-auto sm:translate-y-0 sm:transform-gpu sm:justify-end"
        aria-hidden="true">
        <div class="aspect-[1108/632] w-[69.25rem] flex-none bg-gradient-to-r from-[#ff80b5] to-[#9089fc] opacity-25"
            style="clip-path: polygon(73.6% 48.6%, 91.7% 88.5%, 100% 53.9%, 97.4% 18.1%, 92.5% 15.4%, 75.7% 36.3%, 55.3% 52.8%, 46.5% 50.9%, 45% 37.4%, 50.3% 13.1%, 21.3% 36.2%, 0.1% 0.1%, 5.4% 49.1%, 21.4% 36.4%, 58.9% 100%, 73.6% 48.6%)">
        </div>
    </div>
    <!-- Card Blog -->
    <div class="max-w-7xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Grid -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Card -->
            @foreach ($players as $player)
                <div
                    class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                    <div class="h-52 flex flex-col justify-center items-center">
                        <img src="storage/{{ $player->image }}" class="w-auto h-28">
                    </div>
                    <div class="p-4 md:p-6">
                        <span class="block mb-1 text-xs font-semibold uppercase text-blue-600 dark:text-blue-500">
                            {{ $player->team->name }}
                        </span>
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-300 dark:hover:text-white">
                            {{ $player->name }}
                        </h3>
                        <p class="mt-3 text-gray-500">
                            {!! $player->bio !!}
                        </p>
                    </div>
                    <div
                        class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200 dark:border-gray-700 dark:divide-gray-700">
                        <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                            href="#">
                            {{ $player->position }}
                        </a>
                        <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-ee-xl bg-rose-400 text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                            href="#">
                            View
                        </a>
                    </div>
                </div>
                <!-- End Card -->
            @endforeach


        </div>
        <!-- End Grid -->
    </div>
    <!-- End Card Blog -->
</div>
