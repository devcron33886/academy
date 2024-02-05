<div>
    <!-- Header -->
    <header x-data="{ open: false }" @keydown.window.escape="open = false" class="absolute inset-x-0 top-0 z-50">
        <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
            <div class="flex lg:flex-1">
                <a href="/" wire:navigate class="-m-1.5 p-1.5">
                    <span class="sr-only">{{ config('app.name') }}</span>
                    <img class="h-32 w-auto" src="{{ asset('images/logo/logo-white.png') }}?color=white&amp;shade=600"
                        alt="{{ config('app.name') }}'">
                </a>
            </div>
            <div class="flex lg:hidden">
                <button type="button"
                    class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700"
                    @click="open = true">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                    </svg>
                </button>
            </div>
            <div class="hidden lg:flex lg:gap-x-12">


            </div>
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <a href="/admin/login" wire:navigate
                    class="text-sm font-semibold leading-6  rounded-md bg-rose-600 px-3.5 py-2.5  text-white shadow-sm hover:bg-rose-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-rose:outline-indigo-600">Login
                    here <span aria-hidden="true">→</span></a>
            </div>
        </nav>
        <div x-description="Mobile menu, show/hide based on menu open state." class="lg:hidden" x-ref="dialog"
            x-show="open" aria-modal="true">
            <div x-description="Background backdrop, show/hide based on slide-over state." class="fixed inset-0 z-50">
            </div>
            <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10"
                @click.away="open = false">
                <div class="flex items-center justify-between">
                    <a href="{{ route('welcome') }}" wire:navigate class="-m-1.5 p-1.5">
                        <span class="sr-only">Your Company</span>
                        <img class="h-8 w-auto"
                            src="{{ asset('images/logo/logo-black.png') }}?color=black&amp;shade=600" alt="">
                    </a>
                    <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" @click="open = false">
                        <span class="sr-only">Close menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="mt-6 flow-root">
                    <div class="-my-6 divide-y divide-gray-500/10">
                        <div class="space-y-2 py-6">


                        </div>
                        <div class="py-6">
                            <a href="/admin/login" wire:navigate
                                class="text-sm font-semibold leading-6  rounded-md bg-rose-600 px-3.5 py-2.5  text-white shadow-sm hover:bg-rose-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-rose:outline-indigo-600">Login
                                here <span aria-hidden="true">→</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>
