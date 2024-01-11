<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home - Bounce Datasport</title>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

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
                            <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Record your players
                                statistic with Ease</h1>
                            <p class="mt-6 text-lg leading-8 text-gray-600">Effortlessly track and analyze basketball
                                statistics with our powerful Bounce Data Sport system.</p>
                            <div class="mt-10 flex items-center justify-center gap-x-6">
                                <a href="#"
                                    class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get
                                    started</a>
                                <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Learn more
                                    <span aria-hidden="true">→</span></a>
                            </div>
                        </div>
                        <div class="mt-16 flow-root sm:mt-24">
                            <div
                                class="-m-2 rounded-xl bg-gray-900/5 p-2 ring-1 ring-inset ring-gray-900/10 lg:-m-4 lg:rounded-2xl lg:p-4">
                                <img src="{{ asset('images/hero/hero-image.png') }}" alt="Bounce Data Sport"
                                    width="2432" height="1442" class="rounded-md shadow-2xl ring-1 ring-gray-900/10">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
                    aria-hidden="true">
                    <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                        style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                    </div>
                </div>
            </div>

            <!-- Logo cloud -->
            <div class="mx-auto max-w-7xl px-6 lg:px-8">

                <div class="mt-16 flex justify-center">
                    <p
                        class="relative rounded-full px-4 py-1.5 text-sm leading-6 text-gray-600 ring-1 ring-inset ring-gray-900/10 hover:ring-gray-900/20">
                        <span class="hidden md:inline">Kigali Titans saves up to $40,000 per year, per player by
                            working
                            with us.</span>
                        <a href="#" class="font-semibold text-indigo-600"><span class="absolute inset-0"
                                aria-hidden="true"></span> Read our case study <span aria-hidden="true">→</span></a>
                    </p>
                </div>
            </div>

            <!-- Feature section -->
            <div class="mx-auto mt-32 max-w-7xl px-6 sm:mt-56 lg:px-8">
                <div class="mx-auto max-w-2xl lg:text-center">
                    <h2 class="text-base font-semibold leading-7 text-indigo-600">Get Everything you need about your
                        player</h2>
                    <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Everything you need to
                        track your player stats</p>
                    <p class="mt-6 text-lg leading-8 text-gray-600">We take care of Everything you need to keep track
                        of your team and players statistics which will help to see what the improvement player needs to
                        be to the next level.</p>
                </div>
                <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
                    <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
                        <div class="relative pl-16">
                            <dt class="text-base font-semibold leading-7 text-gray-900">
                                <div
                                    class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z">
                                        </path>
                                    </svg>
                                </div>
                                Player Stats
                            </dt>
                            <dd class="mt-2 text-base leading-7 text-gray-600">Improve your player skills in no brainer
                                way.</dd>
                        </div>
                        <div class="relative pl-16">
                            <dt class="text-base font-semibold leading-7 text-gray-900">
                                <div
                                    class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z">
                                        </path>
                                    </svg>
                                </div>
                                Team Analytics
                            </dt>
                            <dd class="mt-2 text-base leading-7 text-gray-600">Get all numbers in one place. And it will
                                help you to improve your team.</dd>
                        </div>
                        <div class="relative pl-16">
                            <dt class="text-base font-semibold leading-7 text-gray-900">
                                <div
                                    class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99">
                                        </path>
                                    </svg>
                                </div>
                                Easy to Use
                            </dt>
                            <dd class="mt-2 text-base leading-7 text-gray-600">We make sure it is easy to access your
                                data anywhere at anytime.</dd>
                        </div>
                        <div class="relative pl-16">
                            <dt class="text-base font-semibold leading-7 text-gray-900">
                                <div
                                    class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M7.864 4.243A7.5 7.5 0 0119.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 004.5 10.5a7.464 7.464 0 01-1.15 3.993m1.989 3.559A11.209 11.209 0 008.25 10.5a3.75 3.75 0 117.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 01-3.6 9.75m6.633-4.596a18.666 18.666 0 01-2.485 5.33">
                                        </path>
                                    </svg>
                                </div>
                                Advanced security
                            </dt>
                            <dd class="mt-2 text-base leading-7 text-gray-600">We take care of your data,we don't share
                                it with anyone. We make sure it is safe.</dd>
                        </div>

                    </dl>
                </div>
            </div>

            <!-- Testimonial section -->
            <div class="mx-auto mt-32 max-w-7xl sm:mt-56 sm:px-6 lg:px-8">
                <div
                    class="relative overflow-hidden bg-gray-900 px-6 py-20 shadow-xl sm:rounded-3xl sm:px-10 sm:py-24 md:px-12 lg:px-20">
                    <img class="absolute inset-0 h-full w-full object-cover brightness-150 saturate-0"
                        src="https://images.unsplash.com/photo-1601381718415-a05fb0a261f3?ixid=MXwxMjA3fDB8MHxwcm9maWxlLXBhZ2V8ODl8fHxlbnwwfHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1216&amp;q=80"
                        alt="">
                    <div class="absolute inset-0 bg-gray-900/90 mix-blend-multiply"></div>
                    <div class="absolute -left-80 -top-56 transform-gpu blur-3xl" aria-hidden="true">
                        <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-r from-[#ff4694] to-[#776fff] opacity-[0.45]"
                            style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                        </div>
                    </div>
                    <div class="hidden md:absolute md:bottom-16 md:left-[50rem] md:block md:transform-gpu md:blur-3xl"
                        aria-hidden="true">
                        <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-r from-[#ff4694] to-[#776fff] opacity-25"
                            style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                        </div>
                    </div>
                    <div class="relative mx-auto max-w-2xl lg:mx-0">
                        <img class="h-12 w-auto" src="https://tailwindui.com/img/logos/workcation-logo-white.svg"
                            alt="">
                        <figure>
                            <blockquote class="mt-6 text-lg font-semibold text-white sm:text-xl sm:leading-8">
                                <p>“After we started using {{ config('app.name') }} we saw amazing growth. Our team has
                                    improved in a number of ways,defense,attack,etc.”</p>
                            </blockquote>
                            <figcaption class="mt-6 text-base text-white">
                                <div class="font-semibold">Eugene Ruboneka</div>
                                <div class="mt-1">President of KIGALI TITANS</div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>

            <!-- Pricing section -->
            <div class="py-24 sm:pt-48">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="mx-auto max-w-4xl text-center">
                        <h2 class="text-base font-semibold leading-7 text-indigo-600">Pricing</h2>
                        <p class="mt-2 text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">Pricing plans for
                            teams of&nbsp;all&nbsp;sizes</p>
                    </div>
                    <p class="mx-auto mt-6 max-w-2xl text-center text-lg leading-8 text-gray-600">Distinctio et nulla
                        eum soluta et neque labore quibusdam. Saepe et quasi iusto modi velit ut non voluptas in.
                        Explicabo id ut laborum.</p>
                    <div
                        class="isolate mx-auto mt-16 grid max-w-md grid-cols-1 gap-y-8 sm:mt-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                        <div
                            class="flex flex-col justify-between rounded-3xl bg-white p-8 ring-1 ring-gray-200 xl:p-10 lg:mt-8 lg:rounded-r-none ">
                            <div>
                                <div class="flex items-center justify-between gap-x-4">
                                    <h3 id="tier-freelancer" class="text-lg font-semibold leading-8 text-gray-900">
                                        Freelancer</h3>
                                </div>
                                <p class="mt-4 text-sm leading-6 text-gray-600">The essentials to provide your best
                                    work for clients.</p>
                                <p class="mt-6 flex items-baseline gap-x-1">
                                    <span class="text-4xl font-bold tracking-tight text-gray-900">$24</span>
                                    <span class="text-sm font-semibold leading-6 text-gray-600">/month</span>
                                </p>
                                <ul role="list" class="mt-8 space-y-3 text-sm leading-6 text-gray-600">
                                    <li class="flex gap-x-3">
                                        <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        5 products
                                    </li>
                                    <li class="flex gap-x-3">
                                        <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        Up to 1,000 subscribers
                                    </li>
                                    <li class="flex gap-x-3">
                                        <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        Basic analytics
                                    </li>
                                    <li class="flex gap-x-3">
                                        <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        48-hour support response time
                                    </li>

                                </ul>
                            </div>
                            <a href="#" aria-describedby="tier-freelancer"
                                class="mt-8 block rounded-md py-2 px-3 text-center text-sm font-semibold leading-6 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 text-indigo-600 ring-1 ring-inset ring-indigo-200 hover:ring-indigo-300">Buy
                                plan</a>
                        </div>
                        <div
                            class="flex flex-col justify-between rounded-3xl bg-white p-8 ring-1 ring-gray-200 xl:p-10 lg:z-10 lg:rounded-b-none  ">
                            <div>
                                <div class="flex items-center justify-between gap-x-4">
                                    <h3 id="tier-startup" class="text-lg font-semibold leading-8 text-indigo-600">
                                        Startup</h3>
                                    <p
                                        class="rounded-full bg-indigo-600/10 px-2.5 py-1 text-xs font-semibold leading-5 text-indigo-600">
                                        Most popular</p>
                                </div>
                                <p class="mt-4 text-sm leading-6 text-gray-600">A plan that scales with your rapidly
                                    growing business.</p>
                                <p class="mt-6 flex items-baseline gap-x-1">
                                    <span class="text-4xl font-bold tracking-tight text-gray-900">$32</span>
                                    <span class="text-sm font-semibold leading-6 text-gray-600">/month</span>
                                </p>
                                <ul role="list" class="mt-8 space-y-3 text-sm leading-6 text-gray-600">
                                    <li class="flex gap-x-3">
                                        <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        25 products
                                    </li>
                                    <li class="flex gap-x-3">
                                        <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        Up to 10,000 subscribers
                                    </li>
                                    <li class="flex gap-x-3">
                                        <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        Advanced analytics
                                    </li>
                                    <li class="flex gap-x-3">
                                        <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        24-hour support response time
                                    </li>
                                    <li class="flex gap-x-3">
                                        <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        Marketing automations
                                    </li>

                                </ul>
                            </div>
                            <a href="#" aria-describedby="tier-startup"
                                class="mt-8 block rounded-md py-2 px-3 text-center text-sm font-semibold leading-6 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 bg-indigo-600 text-white shadow-sm hover:bg-indigo-500">Buy
                                plan</a>
                        </div>
                        <div
                            class="flex flex-col justify-between rounded-3xl bg-white p-8 ring-1 ring-gray-200 xl:p-10 lg:mt-8  lg:rounded-l-none">
                            <div>
                                <div class="flex items-center justify-between gap-x-4">
                                    <h3 id="tier-enterprise" class="text-lg font-semibold leading-8 text-gray-900">
                                        Enterprise</h3>
                                </div>
                                <p class="mt-4 text-sm leading-6 text-gray-600">Dedicated support and infrastructure
                                    for your company.</p>
                                <p class="mt-6 flex items-baseline gap-x-1">
                                    <span class="text-4xl font-bold tracking-tight text-gray-900">$48</span>
                                    <span class="text-sm font-semibold leading-6 text-gray-600">/month</span>
                                </p>
                                <ul role="list" class="mt-8 space-y-3 text-sm leading-6 text-gray-600">
                                    <li class="flex gap-x-3">
                                        <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        Unlimited products
                                    </li>
                                    <li class="flex gap-x-3">
                                        <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        Unlimited subscribers
                                    </li>
                                    <li class="flex gap-x-3">
                                        <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        Advanced analytics
                                    </li>
                                    <li class="flex gap-x-3">
                                        <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        1-hour, dedicated support response time
                                    </li>
                                    <li class="flex gap-x-3">
                                        <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        Marketing automations
                                    </li>

                                </ul>
                            </div>
                            <a href="#" aria-describedby="tier-enterprise"
                                class="mt-8 block rounded-md py-2 px-3 text-center text-sm font-semibold leading-6 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 text-indigo-600 ring-1 ring-inset ring-indigo-200 hover:ring-indigo-300">Buy
                                plan</a>
                        </div>

                    </div>
                </div>
            </div>

            <!-- FAQs -->
            <x-faq-component />

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
                    <img class="h-7" src="{{ asset('images/logo/logo-black.png') }}"
                        alt="{{ config('app.name') }}">
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
