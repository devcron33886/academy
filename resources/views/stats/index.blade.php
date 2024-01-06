<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Statistics - Bounce Datasport</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Inter:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 font-sans">

    <div>
        <livewire:welcome.navigation />

        <main class="isolate">
            <!-- Hero section -->
            <div class="relative pt-14">
                <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
                    aria-hidden="true">
                    <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                        style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                    </div>
                </div>
                <div class="py-24 sm:py-32">
                    <div class="mx-auto max-w-7xl px-6 lg:px-8">
                        <div class="mx-auto max-w-2xl text-center">
                            <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-6xl">Players
                                statistic</h1>


                        </div>

                    </div>
                </div>

            </div>

            <x-player-component />





            <!-- CTA section -->
            <div class="relative -z-10 mt-32 px-6 lg:px-8">
                <div class="absolute inset-x-0 top-1/2 -z-10 flex -translate-y-1/2 transform-gpu justify-center overflow-hidden blur-3xl sm:bottom-0 sm:right-[calc(50%-6rem)] sm:top-auto sm:translate-y-0 sm:transform-gpu sm:justify-end"
                    aria-hidden="true">
                    <div class="aspect-[1108/632] w-[69.25rem] flex-none bg-gradient-to-r from-[#ff80b5] to-[#9089fc] opacity-25"
                        style="clip-path: polygon(73.6% 48.6%, 91.7% 88.5%, 100% 53.9%, 97.4% 18.1%, 92.5% 15.4%, 75.7% 36.3%, 55.3% 52.8%, 46.5% 50.9%, 45% 37.4%, 50.3% 13.1%, 21.3% 36.2%, 0.1% 0.1%, 5.4% 49.1%, 21.4% 36.4%, 58.9% 100%, 73.6% 48.6%)">
                    </div>
                </div>
                <div class="mx-auto max-w-2xl text-center">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Boost your
                        productivity.<br>Start using our app today.</h2>
                    <p class="mx-auto mt-6 max-w-xl text-lg leading-8 text-gray-600">Incididunt sint fugiat pariatur
                        cupidatat consectetur sit cillum anim id veniam aliqua proident excepteur commodo do ea.</p>
                    <div class="mt-10 flex items-center justify-center gap-x-6">
                        <a href="#"
                            class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get
                            started</a>
                        <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Learn more <span
                                aria-hidden="true">→</span></a>
                    </div>
                </div>
                <div class="absolute left-1/2 right-0 top-full -z-10 hidden -translate-y-1/2 transform-gpu overflow-hidden blur-3xl sm:block"
                    aria-hidden="true">
                    <div class="aspect-[1155/678] w-[72.1875rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30"
                        style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                    </div>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <div class="mx-auto mt-32 max-w-7xl px-6 lg:px-8">
            <footer aria-labelledby="footer-heading"
                class="relative border-t border-gray-900/10 py-24 sm:mt-56 sm:py-32">
                <h2 id="footer-heading" class="sr-only">Footer</h2>
                <div class="xl:grid xl:grid-cols-3 xl:gap-8">
                    <img class="h-7" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&amp;shade=600"
                        alt="Company name">
                    <div class="mt-16 grid grid-cols-2 gap-8 xl:col-span-2 xl:mt-0">
                        <div class="md:grid md:grid-cols-2 md:gap-8">
                            <div>
                                <h3 class="text-sm font-semibold leading-6 text-gray-900">Solutions</h3>
                                <ul role="list" class="mt-6 space-y-4">
                                    <li>
                                        <a href="#"
                                            class="text-sm leading-6 text-gray-600 hover:text-gray-900">Hosting</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-sm leading-6 text-gray-600 hover:text-gray-900">Data
                                            Services</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-sm leading-6 text-gray-600 hover:text-gray-900">Uptime
                                            Monitoring</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-sm leading-6 text-gray-600 hover:text-gray-900">Enterprise
                                            Services</a>
                                    </li>

                                </ul>
                            </div>
                            <div class="mt-10 md:mt-0">
                                <h3 class="text-sm font-semibold leading-6 text-gray-900">Support</h3>
                                <ul role="list" class="mt-6 space-y-4">
                                    <li>
                                        <a href="#"
                                            class="text-sm leading-6 text-gray-600 hover:text-gray-900">Pricing</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-sm leading-6 text-gray-600 hover:text-gray-900">Documentation</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-sm leading-6 text-gray-600 hover:text-gray-900">Guides</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-sm leading-6 text-gray-600 hover:text-gray-900">API
                                            Reference</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="md:grid md:grid-cols-2 md:gap-8">
                            <div>
                                <h3 class="text-sm font-semibold leading-6 text-gray-900">Company</h3>
                                <ul role="list" class="mt-6 space-y-4">
                                    <li>
                                        <a href="#"
                                            class="text-sm leading-6 text-gray-600 hover:text-gray-900">About</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-sm leading-6 text-gray-600 hover:text-gray-900">Blog</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-sm leading-6 text-gray-600 hover:text-gray-900">Jobs</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-sm leading-6 text-gray-600 hover:text-gray-900">Press</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-sm leading-6 text-gray-600 hover:text-gray-900">Partners</a>
                                    </li>

                                </ul>
                            </div>
                            <div class="mt-10 md:mt-0">
                                <h3 class="text-sm font-semibold leading-6 text-gray-900">Legal</h3>
                                <ul role="list" class="mt-6 space-y-4">
                                    <li>
                                        <a href="#"
                                            class="text-sm leading-6 text-gray-600 hover:text-gray-900">Claim</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-sm leading-6 text-gray-600 hover:text-gray-900">Privacy</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-sm leading-6 text-gray-600 hover:text-gray-900">Terms</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>

</html>
