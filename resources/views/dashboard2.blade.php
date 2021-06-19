<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @livewireStyles
    @bukStyles
    <style>
        [x-cloak] { display: none !important; }
    </style>
    <!-- Box icon  -->
    <link rel="stylesheet" href="{{asset('jakarta/dist/libs/boxicons/css/boxicons.min.css')}}" />
    <!-- Tailwind css  -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @laravelPWA
</head>

<body class="bg-gray-100">

    <!-- Navbar -->
    <div class="fixed z-50 w-full">
        <nav class="bg-white border-b border-gray-300">
            <div
                class="flex flex-wrap items-center justify-between max-w-screen-xl mx-auto">
                <div class="flex items-center py-3 mx-2 md:py-0">
                    <div class="flex items-center">
                        <button class="mx-3 md:hidden">
                            <i class="text-2xl bx bx-menu"></i>
                        </button>
                        <a href="#" class="pr-6 text-xl font-bold">Jakarta<span
                                class="font-normal text-gray-500">LTE</span></a>
                    </div>
                    <ul class="hidden text-sm font-normal md:flex">
                        <li
                            class="py-4 mx-3 font-medium text-green-500 border-b-2 border-green-500">
                            <a href="#" class="inline-flex items-center">
                                <i class="mr-1 bx bx-home"></i>
                                Home
                            </a>
                        </li>
                        <x-dropdown class="relative inline-block py-4 mx-3 text-left text-gray-600 hover:text-gray-900">
                            <x-slot name="trigger">
                                <a href="#" class="inline-flex items-center text-sm text-gray-600 dropdown-toggle"
                                    data-dropdown="dropdownMenuDashboard">
                                    <i class="mr-1 bx bx-pie-chart-alt"></i>
                                    <span>Dashboard</span>
                                    <i class="ml-1 bx bx-chevron-down"></i>
                                </a>
                            </x-slot>

                            <div class="absolute right-0 z-50 w-48 mt-2 origin-top-right rounded-md shadow-lg">
                                <div class="py-1 bg-white rounded-md shadow-xs">
                                    <div class="py-1 bg-white rounded-md shadow-xs">
                                        <div class="py-1">
                                            <a href="./../index.html"
                                                class="block px-3 py-2 text-sm leading-5 text-gray-600 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Dashboard
                                                v1</a>
                                            <a href="#"
                                                class="block px-3 py-2 text-sm leading-5 text-gray-600 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Dashboard
                                                v2</a>
                                            <a href="#"
                                                class="block px-3 py-2 text-sm leading-5 text-gray-600 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Dashboard
                                                v3</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </x-dropdown>

                        <li
                            class="relative inline-block py-4 mx-3 text-left text-gray-600 hover:text-gray-900">
                            <a
                                href="#"
                                class="inline-flex items-center dropdown-toggle"
                                data-dropdown="uiComponentMenu">
                                <i class="mr-1 bx bx-outline"></i>
                                <span>UI Component</span>
                                <i class="ml-1 bx bx-chevron-down"></i>
                            </a>

                            <div
                                class="absolute right-0 z-10 hidden w-40 mt-3 origin-top-right rounded-md shadow-lg"
                                id="uiComponentMenu">
                                <div
                                    class="bg-white rounded-md shadow-xs"
                                    role="menu"
                                    aria-orientation="vertical"
                                    aria-labelledby="options-menu">
                                    <div class="py-1">
                                        <a
                                            href="./form.html"
                                            class="block px-3 py-2 text-sm leading-5 text-gray-600 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Form</a>
                                        <a
                                            href="./card.html"
                                            class="block px-3 py-2 text-sm leading-5 text-gray-600 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Card</a>
                                        <a
                                            href="#"
                                            class="block px-3 py-2 text-sm leading-5 text-gray-600 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Chart</a>
                                        <a
                                            href="./button.html"
                                            class="block px-3 py-2 text-sm leading-5 text-gray-600 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Buttons</a>
                                        <a
                                            href="#"
                                            class="block px-3 py-2 text-sm leading-5 text-gray-600 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Dropdown</a>
                                        <a
                                            href="#"
                                            class="block px-3 py-2 text-sm leading-5 text-gray-600 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Navbar</a>
                                        <a
                                            href="#"
                                            class="block px-3 py-2 text-sm leading-5 text-gray-600 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Maps</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li
                            class="relative inline-block py-4 mx-3 text-left text-gray-600 hover:text-gray-900">
                            <a
                                href="#"
                                class="inline-flex items-center dropdown-toggle"
                                data-dropdown="pagesNav">
                                <i class="mr-1 bx bx-book"></i>
                                <span>Pages</span>
                                <i class="ml-1 bx bx-chevron-down"></i>
                            </a>

                            <div
                                class="absolute right-0 z-10 hidden w-40 mt-3 origin-top-right rounded-md shadow-lg"
                                id="pagesNav">
                                <div
                                    class="bg-white rounded-md shadow-xs"
                                    role="menu"
                                    aria-orientation="vertical"
                                    aria-labelledby="options-menu">
                                    <div class="py-1">
                                        <a
                                            href="#"
                                            class="block px-3 py-2 text-sm leading-5 text-gray-600 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Login</a>
                                        <a
                                            href="#"
                                            class="block px-3 py-2 text-sm leading-5 text-gray-600 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Register</a>
                                        <a
                                            href="#"
                                            class="block px-3 py-2 text-sm leading-5 text-gray-600 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">User
                                            Profile</a>
                                        <a
                                            href="#"
                                            class="block px-3 py-2 text-sm leading-5 text-gray-600 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">User
                                            Settings</a>
                                        <a
                                            href="#"
                                            class="block px-3 py-2 text-sm leading-5 text-gray-600 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Blog</a>
                                        <a
                                            href="#"
                                            class="block px-3 py-2 text-sm leading-5 text-gray-600 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Timeline</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li
                            class="relative inline-block py-4 mx-3 text-left text-gray-600 hover:text-gray-900">
                            <a
                                href="#"
                                class="inline-flex items-center dropdown-toggle"
                                data-dropdown="layoutNav"><i class="mr-1 bx bx-dock-right"></i>
                                <span> Layout</span>
                                <i class="ml-1 bx bx-chevron-down"></i></a>

                            <div
                                class="absolute right-0 z-10 hidden w-40 mt-3 origin-top-right rounded-md shadow-lg"
                                id="layoutNav">
                                <div
                                    class="bg-white rounded-md shadow-xs"
                                    role="menu"
                                    aria-orientation="vertical"
                                    aria-labelledby="options-menu">
                                    <div class="py-1">
                                        <a
                                            href="#"
                                            class="block px-3 py-2 text-sm leading-5 text-gray-600 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Vertical</a>
                                        <a
                                            href="#"
                                            class="block px-3 py-2 text-sm leading-5 text-gray-600 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Vertical
                                            fluid</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="flex items-center">
                    <button class="relative mx-2 mt-1">
                        <i class="text-xl text-gray-600 bx bx-bell"></i>
                        <span
                            aria-hidden="true"
                            class="absolute top-0 right-0 inline-block w-3 h-3 transform translate-x-1 -translate-y-1 bg-red-600 border-2 border-white rounded-full dark:border-gray-800"></span>
                    </button>
                    <x-dropdown class="relative ml-3">
                        <x-slot name="trigger">
                            <button
                                class="flex text-sm transition duration-150 ease-in-out border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300"
                                id="user-menu" aria-label="User menu" aria-haspopup="true">
                                <x-avatar search="driesvints" provider="github" class="w-8 h-8 rounded-full" />
                            </button>
                        </x-slot>

                        <div class="absolute right-0 w-48 mt-2 origin-top-right rounded-md shadow-lg">
                            <div class="py-1 bg-white rounded-md shadow-xs">
                                <a href="#"
                                    class="block px-4 py-2 text-sm leading-5 text-gray-700 transition duration-150 ease-in-out hover:bg-gray-100 focus:outline-none focus:bg-gray-100">
                                    Your Profile
                                </a>
                                <a href="{{ route('dashboard') }}"
                                    class="block px-4 py-2 text-sm leading-5 text-gray-700 transition duration-150 ease-in-out hover:bg-gray-100 focus:outline-none focus:bg-gray-100">
                                    Settings
                                </a>
                                <x-logout
                                    class="block w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 transition duration-150 ease-in-out hover:bg-gray-100 focus:outline-none focus:bg-gray-100" />
                            </div>
                        </div>
                    </x-dropdown>
                </div>
            </div>
        </nav>
    </div>
    <!-- End navbar -->

    <!-- Wrapper -->
    <div class="max-w-screen-xl pt-20 mx-auto">
        <!-- Title -->
        <div class="items-center justify-between mx-2 mt-4 md:flex">
            <div class="">
                <h3 class="text-sm text-gray-600">
                    <a href="" class="text-green-600">
                        <i class="mr-1 bx bx-home"></i>

                        Home
                    </a>
                    / Dashboard v1
                </h3>

                <div>
                    <h1 class="mt-1 text-2xl font-medium">Performance Product</h1>
                </div>
            </div>

            <div class="pt-4 md:pt-0">
                <button
                    class="inline-flex items-center px-4 py-2 mx-1 text-sm text-white transition duration-150 ease-in-out bg-green-500 border border-transparent rounded hover:bg-green-400 focus:outline-none focus:border-green-500 focus:shadow-outline-green active:bg-green-500">
                    <i class="mr-2 text-base text-white bx bx-world"></i>
                    Publish
                </button>
                <button
                    class="inline-flex items-center px-4 py-2 mx-1 text-sm transition duration-150 ease-in-out bg-white border rounded hover:bg-gray-100 focus:outline-none focus:shadow-outline-white active:bg-white">
                    <i class="mr-2 text-base text-gray-700 bx bx-plus"></i>
                    Create
                </button>
            </div>
        </div>
        <!-- End title -->

        <!-- Content -->
        <div class="w-full mt-3">
            <!-- Content chart 1 -->
            <div class="flex flex-wrap mb-2">
                <div class="w-full lg:w-1/4 md:w-1/2">
                    <div
                        class="flex flex-col h-40 mx-2 my-2 bg-white border rounded-md shadow">
                        <div class="flex-auto px-4 py-3 pb-0">
                            <div class="flex justify-between">
                                <div class="text-sm text-gray-600">Total Revenue</div>
                                <div class="relative inline-block text-sm text-left">
                                    <a
                                        href=""
                                        class="inline-flex items-center text-gray-600 dropdown-toggle"
                                        data-dropdown="totalRevenueDropdown">
                                        <span>Last 30 days </span>
                                        <i
                                            class="inline-flex items-center ml-1 bx bx-chevron-down"></i>
                                    </a>

                                    <div
                                        class="absolute right-0 z-10 hidden w-48 mt-1 origin-top-right rounded-md shadow-lg"
                                        id="totalRevenueDropdown">
                                        <div
                                            class="bg-white rounded-md shadow-xs"
                                            role="menu"
                                            aria-orientation="vertical"
                                            aria-labelledby="options-menu">
                                            <div class="py-1">
                                                <a
                                                    href="#"
                                                    class="block px-3 py-1 leading-5 text-gray-600 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Today</a>

                                                <a
                                                    href="#"
                                                    class="block px-3 py-1 leading-5 text-gray-600 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Last
                                                    7 days</a>

                                                <a
                                                    href="#"
                                                    class="block px-3 py-1 leading-5 text-gray-600 bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Last
                                                    30 days</a>

                                                <a
                                                    href="#"
                                                    class="block px-3 py-1 leading-5 text-gray-600 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Last
                                                    60 days</a>

                                                <a
                                                    href="#"
                                                    class="block px-3 py-1 leading-5 text-gray-600 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Last
                                                    1 Year</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="inline text-3xl font-medium text-gray-700">
                                    $2,820
                                </div>
                                <span class="text-sm text-green-500">+4.61% <i class="bx bx-up-arrow-alt"></i></span>
                            </div>
                        </div>
                        <div id="chart-sparkline-1"></div>
                    </div>
                </div>
                <div class="w-full lg:w-1/4 md:w-1/2">
                    <div
                        class="flex flex-col h-40 mx-2 my-2 bg-white border rounded-md shadow">
                        <div class="flex-auto px-4 py-3 pb-0">
                            <div class="flex justify-between pb-0">
                                <div class="text-sm text-gray-600">Sales Product</div>
                                <div class="relative inline-block text-sm text-left">
                                    <a
                                        href=""
                                        class="inline-flex items-center text-gray-600 dropdown-toggle"
                                        data-dropdown="salesProductDropdown">
                                        <span>Last 30 days </span>
                                        <i
                                            class="inline-flex items-center ml-1 bx bx-chevron-down"></i>
                                    </a>

                                    <div
                                        class="absolute right-0 z-10 hidden w-48 mt-1 origin-top-right rounded-md shadow-lg"
                                        id="salesProductDropdown">
                                        <div
                                            class="bg-white rounded-md shadow-xs"
                                            role="menu"
                                            aria-orientation="vertical"
                                            aria-labelledby="options-menu">
                                            <div class="py-1">
                                                <a
                                                    href="#"
                                                    class="block px-3 py-1 leading-5 text-gray-600 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Today</a>

                                                <a
                                                    href="#"
                                                    class="block px-3 py-1 leading-5 text-gray-600 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Last
                                                    7 days</a>

                                                <a
                                                    href="#"
                                                    class="block px-3 py-1 leading-5 text-gray-600 bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Last
                                                    30 days</a>

                                                <a
                                                    href="#"
                                                    class="block px-3 py-1 leading-5 text-gray-600 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Last
                                                    60 days</a>

                                                <a
                                                    href="#"
                                                    class="block px-3 py-1 leading-5 text-gray-600 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Last
                                                    1 Year</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="inline text-3xl font-medium text-gray-700">760</div>
                            <span class="text-sm text-green-500">+5.66% <i class="bx bx-up-arrow-alt"></i></span>
                        </div>
                        <div id="chart-sparkline-2" class="my-2 ml-1 mr-2"></div>
                    </div>
                </div>
                <div class="w-full lg:w-1/4 md:w-1/2">
                    <div
                        class="flex flex-col h-40 mx-2 my-2 bg-white border rounded-md shadow">
                        <div class="flex-auto px-4 py-3 pb-0">
                            <div class="flex justify-between flex-auto">
                                <div class="text-sm text-gray-600">User Activity</div>
                                <div class="relative inline-block text-sm text-left">
                                    <a
                                        href=""
                                        class="inline-flex items-center text-gray-600 dropdown-toggle"
                                        data-dropdown="userActifityDropDown">
                                        <span>Last 30 days </span>
                                        <i
                                            class="inline-flex items-center ml-1 bx bx-chevron-down"></i>
                                    </a>

                                    <div
                                        class="absolute right-0 z-10 hidden w-48 mt-1 origin-top-right rounded-md shadow-lg"
                                        id="userActifityDropDown">
                                        <div
                                            class="bg-white rounded-md shadow-xs"
                                            role="menu"
                                            aria-orientation="vertical"
                                            aria-labelledby="options-menu">
                                            <div class="py-1">
                                                <a
                                                    href="#"
                                                    class="block px-3 py-1 leading-5 text-gray-600 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Today</a>

                                                <a
                                                    href="#"
                                                    class="block px-3 py-1 leading-5 text-gray-600 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Last
                                                    7 days</a>

                                                <a
                                                    href="#"
                                                    class="block px-3 py-1 leading-5 text-gray-600 bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Last
                                                    30 days</a>

                                                <a
                                                    href="#"
                                                    class="block px-3 py-1 leading-5 text-gray-600 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Last
                                                    60 days</a>

                                                <a
                                                    href="#"
                                                    class="block px-3 py-1 leading-5 text-gray-600 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Last
                                                    1 Year</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="inline text-3xl font-medium text-gray-700">
                                2,169K
                            </div>
                            <span class="text-sm text-red-500">-23.24% <i class="bx bx-down-arrow-alt"></i></span>
                        </div>
                        <div id="chart-sparkline-3" class="mx-2 my-2"></div>
                    </div>
                </div>
                <div class="w-full lg:w-1/4 md:w-1/2">
                    <div
                        class="flex flex-col h-40 mx-2 my-2 bg-white border rounded-md shadow">
                        <div class="flex-auto px-4 py-3">
                            <div class="flex justify-between pb-0">
                                <div class="text-sm text-gray-600">Feedback</div>
                                <div class="relative inline-block text-sm text-left">
                                    <a
                                        href=""
                                        class="inline-flex items-center text-gray-600 dropdown-toggle"
                                        data-dropdown="FeedbackDropdown">
                                        <span>Last 30 days </span>
                                        <i
                                            class="inline-flex items-center ml-1 bx bx-chevron-down"></i>
                                    </a>

                                    <div
                                        class="absolute right-0 z-10 hidden w-48 mt-1 origin-top-right rounded-md shadow-lg"
                                        id="FeedbackDropdown">
                                        <div
                                            class="bg-white rounded-md shadow-xs"
                                            role="menu"
                                            aria-orientation="vertical"
                                            aria-labelledby="options-menu">
                                            <div class="py-1">
                                                <a
                                                    href="#"
                                                    class="block px-3 py-1 leading-5 text-gray-600 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Today</a>

                                                <a
                                                    href="#"
                                                    class="block px-3 py-1 leading-5 text-gray-600 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Last
                                                    7 days</a>

                                                <a
                                                    href="#"
                                                    class="block px-3 py-1 leading-5 text-gray-600 bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Last
                                                    30 days</a>

                                                <a
                                                    href="#"
                                                    class="block px-3 py-1 leading-5 text-gray-600 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Last
                                                    60 days</a>

                                                <a
                                                    href="#"
                                                    class="block px-3 py-1 leading-5 text-gray-600 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Last
                                                    1 Year</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="inline text-3xl font-medium text-gray-700">456</div>
                        </div>
                        <div class="px-4 pb-6">
                            <div class="flex justify-between mb-2">
                                <div class="text-sm text-gray-700">
                                    <b>83%</b> Good Feedback
                                </div>
                                <div>
                                    <span class="text-sm text-green-500">2.75% <i class="bx bx-up-arrow-alt"></i></span>
                                </div>
                            </div>
                            <div class="bg-gray-200 px-auto">
                                <div class="py-1 bg-green-500" style="width: 83%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Content chart 1 -->

            <!-- Content chart 2 -->
            <div class="flex flex-wrap mb-2">
                <div class="w-full md:w-2/3">
                    <div class="px-2 py-4 mx-2 my-2 bg-white border rounded-md shadow">
                        <div class="flex justify-between px-2">
                            <div>
                                <h1 class="inline text-2xl font-medium">1875</h1>
                                <span class="text-sm text-green-500">2.75% <i class="bx bx-up-arrow-alt"></i></span>
                                <div class="text-gray-700">Sales Product Categories</div>
                            </div>
                            <!--  -->
                            <div class="relative inline-block text-base text-left">
                                <a
                                    href=""
                                    class="inline-flex items-center text-gray-600 dropdown-toggle"
                                    data-dropdown="SalesCategoryDropdown">
                                    <span>Last 60 days </span>
                                    <i
                                        class="inline-flex items-center ml-1 bx bx-chevron-down"></i>
                                </a>

                                <div
                                    class="absolute right-0 z-10 hidden w-48 mt-1 origin-top-right rounded-md shadow-lg"
                                    id="SalesCategoryDropdown">
                                    <div
                                        class="bg-white rounded-md shadow-xs"
                                        role="menu"
                                        aria-orientation="vertical"
                                        aria-labelledby="options-menu">
                                        <div class="py-1">
                                            <a
                                                href="#"
                                                class="block px-3 py-1 leading-5 text-gray-600 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Today</a>

                                            <a
                                                href="#"
                                                class="block px-3 py-1 leading-5 text-gray-600 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Last
                                                7 days</a>

                                            <a
                                                href="#"
                                                class="block px-3 py-1 leading-5 text-gray-600 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Last
                                                30 days</a>

                                            <a
                                                href="#"
                                                class="block px-3 py-1 leading-5 text-gray-600 bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Last
                                                60 days</a>

                                            <a
                                                href="#"
                                                class="block px-3 py-1 leading-5 text-gray-600 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700">Last
                                                1 Year</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="chart-bar" class="flex-auto"></div>
                    </div>
                </div>
                <div class="w-full md:w-1/3">
                    <div class="mx-2 my-2 bg-white border rounded-md shadow">
                        <div class="px-2 py-3">
                            <div class="px-2 text-xl text-gray-700">
                                Top Sales by Country
                            </div>
                            <div id="chart-pie-1" class="flex-auto"></div>
                        </div>
                        <table class="w-full bg-white rounded text-md">
                            <tbody>
                                <tr>
                                    <td
                                        class="px-4 py-1.5 text-gray-700 border-t w-8 border-gray-200">
                                        1
                                    </td>
                                    <td
                                        class="px-4 py-1.5 text-gray-700 border-t font-medium border-gray-200">
                                        USA
                                    </td>
                                    <td
                                        class="px-4 py-1.5 border-t border-gray-200 text-green-500 text-right">
                                        + 10% <i class="ml-1 bx bx-up-arrow-alt"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="px-4 py-1.5 text-gray-700 border-t w-8 border-gray-200">
                                        2
                                    </td>
                                    <td
                                        class="px-4 py-1.5 text-gray-700 border-t font-medium border-gray-200">
                                        India
                                    </td>
                                    <td
                                        class="px-4 py-1.5 border-t border-gray-200 text-red-500 text-right">
                                        - 12% <i class="ml-1 bx bx-down-arrow-alt"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="px-4 py-1.5 text-gray-700 border-t w-8 border-gray-200">
                                        3
                                    </td>
                                    <td
                                        class="px-4 py-1.5 text-gray-700 border-t font-medium border-gray-200">
                                        Japan
                                    </td>
                                    <td
                                        class="px-4 py-1.5 border-t border-gray-200 text-green-500 text-right">
                                        + 17% <i class="ml-1 bx bx-up-arrow-alt"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="px-4 py-1.5 text-gray-700 border-t w-8 border-gray-200">
                                        4
                                    </td>
                                    <td
                                        class="px-4 py-1.5 text-gray-700 border-t font-medium border-gray-200">
                                        Indonesia
                                    </td>
                                    <td
                                        class="px-4 py-1.5 border-t border-gray-200 text-green-500 text-right">
                                        + 11% <i class="ml-1 bx bx-up-arrow-alt"></i>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="flex flex-col mx-2 mb-5">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                        <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                            Name
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                            Title
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                            Status
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                            Role
                                        </th>
                                        <th scope="col" class="relative px-6 py-3">
                                            <span class="sr-only">Edit</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 w-10 h-10">
                                                    <img class="w-10 h-10 rounded-full"
                                                        src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60"
                                                        alt="">
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        Jane Cooper
                                                    </div>
                                                    <div class="text-sm text-gray-500">
                                                        jane.cooper@example.com
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">Regional Paradigm Technician</div>
                                            <div class="text-sm text-gray-500">Optimization</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                                                Active
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            Admin
                                        </td>
                                        <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                        </td>
                                    </tr>

                                    <!-- More people... -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col mx-2 mb-5">
                <!-- This example requires Tailwind CSS v2.0+ -->
                <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                    <div class="px-4 py-5 sm:px-6">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">
                            Applicant Information
                        </h3>
                        <p class="max-w-2xl mt-1 text-sm text-gray-500">
                            Personal details and application.
                        </p>
                    </div>
                    <div class="border-t border-gray-200">
                        <dl>
                            <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Full name
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    Margot Foster
                                </dd>
                            </div>
                            <div class="px-4 py-5 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Application for
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    Backend Developer
                                </dd>
                            </div>
                            <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Email address
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    margotfoster@example.com
                                </dd>
                            </div>
                            <div class="px-4 py-5 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Salary expectation
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    $120,000
                                </dd>
                            </div>
                            <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    About
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    Fugiat ipsum ipsum deserunt culpa aute sint do nostrud anim incididunt cillum culpa
                                    consequat. Excepteur qui ipsum aliquip consequat sint. Sit id mollit nulla mollit
                                    nostrud in ea officia proident. Irure nostrud pariatur mollit ad adipisicing
                                    reprehenderit deserunt qui eu.
                                </dd>
                            </div>
                            <div class="px-4 py-5 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Attachments
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    <ul class="border border-gray-200 divide-y divide-gray-200 rounded-md">
                                        <li class="flex items-center justify-between py-3 pl-3 pr-4 text-sm">
                                            <div class="flex items-center flex-1 w-0">
                                                <!-- Heroicon name: solid/paper-clip -->
                                                <svg class="flex-shrink-0 w-5 h-5 text-gray-400"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                <span class="flex-1 w-0 ml-2 truncate">
                                                    resume_back_end_developer.pdf
                                                </span>
                                            </div>
                                            <div class="flex-shrink-0 ml-4">
                                                <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                                                    Download
                                                </a>
                                            </div>
                                        </li>
                                        <li class="flex items-center justify-between py-3 pl-3 pr-4 text-sm">
                                            <div class="flex items-center flex-1 w-0">
                                                <!-- Heroicon name: solid/paper-clip -->
                                                <svg class="flex-shrink-0 w-5 h-5 text-gray-400"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                <span class="flex-1 w-0 ml-2 truncate">
                                                    coverletter_back_end_developer.pdf
                                                </span>
                                            </div>
                                            <div class="flex-shrink-0 ml-4">
                                                <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                                                    Download
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>

            </div>
            <div class="flex flex-col mx-2 mb-5">
                <!--
  This example requires Tailwind CSS v2.0+

  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ]
  }
  ```
-->
                <div>
                    <div class="md:grid md:grid-cols-3 md:gap-6">
                        <div class="md:col-span-1">
                            <div class="px-4 sm:px-0">
                                <h3 class="text-lg font-medium leading-6 text-gray-900">Profile</h3>
                                <p class="mt-1 text-sm text-gray-600">
                                    This information will be displayed publicly so be careful what you share.
                                </p>
                            </div>
                        </div>
                        <div class="mt-5 md:mt-0 md:col-span-2">
                            <form action="#" method="POST">
                                <div class="shadow sm:rounded-md sm:overflow-hidden">
                                    <div class="px-4 py-5 space-y-6 bg-white sm:p-6">
                                        <div class="grid grid-cols-3 gap-6">
                                            <div class="col-span-3 sm:col-span-2">
                                                <label for="company_website"
                                                    class="block text-sm font-medium text-gray-700">
                                                    Website
                                                </label>
                                                <div class="flex mt-1 rounded-md shadow-sm">
                                                    <span
                                                        class="inline-flex items-center px-3 text-sm text-gray-500 border border-r-0 border-gray-300 rounded-l-md bg-gray-50">
                                                        http://
                                                    </span>
                                                    <input type="text" name="company_website" id="company_website"
                                                        class="flex-1 block w-full border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm"
                                                        placeholder="www.example.com">
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <label for="about" class="block text-sm font-medium text-gray-700">
                                                About
                                            </label>
                                            <div class="mt-1">
                                                <textarea id="about" name="about" rows="3"
                                                    class="block w-full mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                                    placeholder="you@example.com"></textarea>
                                            </div>
                                            <p class="mt-2 text-sm text-gray-500">
                                                Brief description for your profile. URLs are hyperlinked.
                                            </p>
                                        </div>

                                        <div>
                                            <label class="block text-sm font-medium text-gray-700">
                                                Photo
                                            </label>
                                            <div class="flex items-center mt-1">
                                                <span
                                                    class="inline-block w-12 h-12 overflow-hidden bg-gray-100 rounded-full">
                                                    <svg class="w-full h-full text-gray-300" fill="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                                    </svg>
                                                </span>
                                                <button type="button"
                                                    class="px-3 py-2 ml-5 text-sm font-medium leading-4 text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                    Change
                                                </button>
                                            </div>
                                        </div>

                                        <div>
                                            <label class="block text-sm font-medium text-gray-700">
                                                Cover photo
                                            </label>
                                            <div
                                                class="flex justify-center px-6 pt-5 pb-6 mt-1 border-2 border-gray-300 border-dashed rounded-md">
                                                <div class="space-y-1 text-center">
                                                    <svg class="w-12 h-12 mx-auto text-gray-400" stroke="currentColor"
                                                        fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                        <path
                                                            d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                    <div class="flex text-sm text-gray-600">
                                                        <label for="file-upload"
                                                            class="relative font-medium text-indigo-600 bg-white rounded-md cursor-pointer hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                            <span>Upload a file</span>
                                                            <input id="file-upload" name="file-upload" type="file"
                                                                class="sr-only">
                                                        </label>
                                                        <p class="pl-1">or drag and drop</p>
                                                    </div>
                                                    <p class="text-xs text-gray-500">
                                                        PNG, JPG, GIF up to 10MB
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-4 py-3 text-right bg-gray-50 sm:px-6">
                                        <button type="submit"
                                            class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="hidden sm:block" aria-hidden="true">
                    <div class="py-5">
                        <div class="border-t border-gray-200"></div>
                    </div>
                </div>

                <div class="mt-10 sm:mt-0">
                    <div class="md:grid md:grid-cols-3 md:gap-6">
                        <div class="md:col-span-1">
                            <div class="px-4 sm:px-0">
                                <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
                                <p class="mt-1 text-sm text-gray-600">
                                    Use a permanent address where you can receive mail.
                                </p>
                            </div>
                        </div>
                        <div class="mt-5 md:mt-0 md:col-span-2">
                            <form action="#" method="POST">
                                <div class="overflow-hidden shadow sm:rounded-md">
                                    <div class="px-4 py-5 bg-white sm:p-6">
                                        <div class="grid grid-cols-6 gap-6">
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="first_name"
                                                    class="block text-sm font-medium text-gray-700">First name</label>
                                                <input type="text" name="first_name" id="first_name"
                                                    autocomplete="given-name"
                                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="last_name"
                                                    class="block text-sm font-medium text-gray-700">Last name</label>
                                                <input type="text" name="last_name" id="last_name"
                                                    autocomplete="family-name"
                                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            </div>

                                            <div class="col-span-6 sm:col-span-4">
                                                <label for="email_address"
                                                    class="block text-sm font-medium text-gray-700">Email
                                                    address</label>
                                                <input type="text" name="email_address" id="email_address"
                                                    autocomplete="email"
                                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="country"
                                                    class="block text-sm font-medium text-gray-700">Country /
                                                    Region</label>
                                                <select id="country" name="country" autocomplete="country"
                                                    class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                    <option>United States</option>
                                                    <option>Canada</option>
                                                    <option>Mexico</option>
                                                </select>
                                            </div>

                                            <div class="col-span-6">
                                                <label for="street_address"
                                                    class="block text-sm font-medium text-gray-700">Street
                                                    address</label>
                                                <input type="text" name="street_address" id="street_address"
                                                    autocomplete="street-address"
                                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            </div>

                                            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                                <label for="city"
                                                    class="block text-sm font-medium text-gray-700">City</label>
                                                <input type="text" name="city" id="city"
                                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            </div>

                                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                                <label for="state" class="block text-sm font-medium text-gray-700">State
                                                    / Province</label>
                                                <input type="text" name="state" id="state"
                                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            </div>

                                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                                <label for="postal_code"
                                                    class="block text-sm font-medium text-gray-700">ZIP / Postal</label>
                                                <input type="text" name="postal_code" id="postal_code"
                                                    autocomplete="postal-code"
                                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-4 py-3 text-right bg-gray-50 sm:px-6">
                                        <button type="submit"
                                            class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="hidden sm:block" aria-hidden="true">
                    <div class="py-5">
                        <div class="border-t border-gray-200"></div>
                    </div>
                </div>

                <div class="mt-10 sm:mt-0">
                    <div class="md:grid md:grid-cols-3 md:gap-6">
                        <div class="md:col-span-1">
                            <div class="px-4 sm:px-0">
                                <h3 class="text-lg font-medium leading-6 text-gray-900">Notifications</h3>
                                <p class="mt-1 text-sm text-gray-600">
                                    Decide which communications you'd like to receive and how.
                                </p>
                            </div>
                        </div>
                        <div class="mt-5 md:mt-0 md:col-span-2">
                            <form action="#" method="POST">
                                <div class="overflow-hidden shadow sm:rounded-md">
                                    <div class="px-4 py-5 space-y-6 bg-white sm:p-6">
                                        <fieldset>
                                            <legend class="text-base font-medium text-gray-900">By Email</legend>
                                            <div class="mt-4 space-y-4">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="comments" name="comments" type="checkbox"
                                                            class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="comments"
                                                            class="font-medium text-gray-700">Comments</label>
                                                        <p class="text-gray-500">Get notified when someones posts a
                                                            comment on a posting.</p>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="candidates" name="candidates" type="checkbox"
                                                            class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="candidates"
                                                            class="font-medium text-gray-700">Candidates</label>
                                                        <p class="text-gray-500">Get notified when a candidate applies
                                                            for a job.</p>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="offers" name="offers" type="checkbox"
                                                            class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="offers"
                                                            class="font-medium text-gray-700">Offers</label>
                                                        <p class="text-gray-500">Get notified when a candidate accepts
                                                            or rejects an offer.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <div>
                                                <legend class="text-base font-medium text-gray-900">Push Notifications
                                                </legend>
                                                <p class="text-sm text-gray-500">These are delivered via SMS to your
                                                    mobile phone.</p>
                                            </div>
                                            <div class="mt-4 space-y-4">
                                                <div class="flex items-center">
                                                    <input id="push_everything" name="push_notifications" type="radio"
                                                        class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                                                    <label for="push_everything"
                                                        class="block ml-3 text-sm font-medium text-gray-700">
                                                        Everything
                                                    </label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input id="push_email" name="push_notifications" type="radio"
                                                        class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                                                    <label for="push_email"
                                                        class="block ml-3 text-sm font-medium text-gray-700">
                                                        Same as email
                                                    </label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input id="push_nothing" name="push_notifications" type="radio"
                                                        class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                                                    <label for="push_nothing"
                                                        class="block ml-3 text-sm font-medium text-gray-700">
                                                        No push notifications
                                                    </label>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="px-4 py-3 text-right bg-gray-50 sm:px-6">
                                        <button type="submit"
                                            class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

            <!-- End Content chart 2 -->
            <!-- This example requires Tailwind CSS v2.0+ -->

        </div>
        <!-- End Content -->
    </div>
    <!-- End wrapper -->
    <!-- Footer -->
    <div class="max-w-screen-xl mx-auto mb-4">
        <div class="flex items-center justify-between mx-2 mt-4">
            <div class="text-gray-600">
                MIT License- Copyright (c) 2021
                <strong class="font-bold">Under-X</strong>
            </div>
        </div>
    </div>
    <!-- End footer -->
    @livewireScripts

    @bukScripts

    <!-- Apex chart plugins js -->
    <script src="{{asset('jakarta/dist/libs/apexcharts/apexcharts.min.js')}}"></script>
    <!-- Core js -->
    <script src="{{ mix('js/app.js') }}" defer></script>



    <script>
        var options = {
            chart: {
                type: "area",
                fontFamily: "inherit",
                height: 50,
                sparkline: {
                    enabled: true,
                },
            },
            dataLabels: {
                enabled: false,
            },

            fill: {
                opacity: 0.16,
                type: "solid",
            },
            stroke: {
                width: 2,
                lineCap: "round",
                curve: "smooth",
            },

            series: [
                {
                    name: "Revenue",
                    data: [
                        31,
                        37,
                        39,
                        62,
                        51,
                        35,
                        41,
                        35,
                        27,
                        27,
                        53,
                        61,
                        27,
                        54,
                        43,
                        19,
                        46,
                        39,
                        62,
                        51,
                        66,
                        70,
                        82,
                    ],
                },
            ],

            grid: {
                strokeDashArray: 4,
            },
            xaxis: {
                labels: {
                    padding: 0,
                },
                tooltip: {
                    enabled: false,
                },
                axisBorder: {
                    show: false,
                },
                type: "datetime",
            },
            yaxis: {
                labels: {
                    padding: 4,
                },
            },
            labels: [
                "2020-06-28",
                "2020-06-29",
                "2020-06-30",
                "2020-07-01",
                "2020-07-02",
                "2020-07-03",
                "2020-07-04",
                "2020-07-05",
                "2020-07-06",
                "2020-07-07",
                "2020-07-08",
                "2020-07-09",
                "2020-07-10",
                "2020-07-11",
                "2020-07-12",
                "2020-07-13",
                "2020-07-14",
                "2020-07-15",
                "2020-07-16",
                "2020-07-17",
                "2020-07-18",
                "2020-07-19",
                "2020-07-20",
            ],
            colors: ["#48bb78"],
            legend: {
                show: false,
            },
        };
        var chart1 = new ApexCharts(
            document.querySelector("#chart-sparkline-1"),
            options
        );
        chart1.render();

        var options2 = {
            chart: {
                type: "bar",
                fontFamily: "inherit",
                height: 50,
                sparkline: {
                    enabled: true,
                },
            },
            dataLabels: {
                enabled: false,
            },
            fill: {
                opacity: 0.7,
                type: "solid",
            },
            stroke: {
                width: 1,
                lineCap: "round",
                curve: "smooth",
            },

            series: [
                {
                    name: "Sales",
                    data: [
                        38,
                        31,
                        89,
                        37,
                        39,
                        62,
                        51,
                        35,
                        41,
                        35,
                        27,
                        27,
                        53,
                        61,
                        27,
                        54,
                        43,
                        120,
                        46,
                        50,
                        62,
                        51,
                        90,
                        70,
                        82,
                    ],
                },
            ],

            grid: {
                strokeDashArray: 4,
            },
            xaxis: {
                labels: {
                    padding: 0,
                },
                tooltip: {
                    enabled: false,
                },
                axisBorder: {
                    show: false,
                },
                type: "datetime",
            },
            yaxis: {
                labels: {
                    padding: 4,
                },
            },
            labels: [
                "2020-06-28",
                "2020-06-29",
                "2020-06-30",
                "2020-07-01",
                "2020-07-02",
                "2020-07-03",
                "2020-07-04",
                "2020-07-05",
                "2020-07-06",
                "2020-07-07",
                "2020-07-08",
                "2020-07-09",
                "2020-07-10",
                "2020-07-11",
                "2020-07-12",
                "2020-07-13",
                "2020-07-14",
                "2020-07-15",
                "2020-07-16",
                "2020-07-17",
                "2020-07-18",
                "2020-07-19",
                "2020-07-20",
            ],
            colors: ["#48bb78"],
            legend: {
                show: false,
            },
        };
        var chart2 = new ApexCharts(
            document.querySelector("#chart-sparkline-2"),
            options2
        );
        chart2.render();

        var options3 = {
            chart: {
                type: "line",
                fontFamily: "inherit",
                height: 50,
                sparkline: {
                    enabled: true,
                },
            },
            dataLabels: {
                enabled: false,
            },

            fill: {
                opacity: 0.7,
                type: "solid",
            },
            stroke: {
                width: [2, 1],
                dashArray: [0, 3],
                lineCap: "round",
                curve: "smooth",
            },

            series: [
                {
                    name: "Last month",
                    data: [
                        31,
                        37,
                        39,
                        62,
                        51,
                        35,
                        14,
                        35,
                        27,
                        27,
                        21,
                        61,
                        27,
                        54,
                        43,
                        120,
                        46,
                        50,
                        62,
                        121,
                        90,
                        70,
                        82,
                    ],
                },

                {
                    name: "This month",
                    data: [
                        91,
                        58,
                        90,
                        79,
                        83,
                        119,
                        78,
                        88,
                        129,
                        71,
                        90,
                        116,
                        94,
                        110,
                        103,
                        111,
                        119,
                        79,
                        94,
                        124,
                        81,
                        85,
                        82,
                    ],
                },
            ],

            grid: {
                strokeDashArray: 4,
            },
            xaxis: {
                labels: {
                    padding: 0,
                },
                tooltip: {
                    enabled: false,
                },
                axisBorder: {
                    show: false,
                },
                type: "datetime",
            },
            yaxis: {
                labels: {
                    padding: 4,
                },
            },
            labels: [
                "2020-06-28",
                "2020-06-29",
                "2020-06-30",
                "2020-07-01",
                "2020-07-02",
                "2020-07-03",
                "2020-07-04",
                "2020-07-05",
                "2020-07-06",
                "2020-07-07",
                "2020-07-08",
                "2020-07-09",
                "2020-07-10",
                "2020-07-11",
                "2020-07-12",
                "2020-07-13",
                "2020-07-14",
                "2020-07-15",
                "2020-07-16",
                "2020-07-17",
                "2020-07-18",
                "2020-07-19",
                "2020-07-20",
            ],
            colors: ["#48bb78"],
            legend: {
                show: false,
            },
        };
        var chart3 = new ApexCharts(
            document.querySelector("#chart-sparkline-3"),
            options3
        );
        chart3.render();

        // chart
        var options_bar = {
            series: [
                {
                    name: "Admin Template",
                    data: [
                        91,
                        58,
                        90,
                        79,
                        83,
                        119,
                        78,
                        88,
                        129,
                        71,
                        90,
                        116,
                        94,
                        110,
                        103,
                        111,
                        119,
                        79,
                        94,
                        124,
                        81,
                        85,
                        82,
                        79,
                        94,
                        124,
                        119,
                        79,
                        94,
                        124,
                        81,
                        90,
                        116,
                    ],
                },
                {
                    name: "Themes Tailwindcss",
                    data: [
                        31,
                        37,
                        39,
                        62,
                        51,
                        35,
                        14,
                        35,
                        27,
                        27,
                        21,
                        61,
                        27,
                        54,
                        43,
                        120,
                        46,
                        50,
                        62,
                        121,
                        90,
                        70,
                        82,
                        61,
                        27,
                        54,
                        39,
                        62,
                        51,
                        35,
                        14,
                        27,
                        21,
                        61,
                    ],
                },
                {
                    name: "Wordpress Themes",
                    data: [
                        31,
                        37,
                        39,
                        62,
                        51,
                        35,
                        41,
                        35,
                        27,
                        27,
                        53,
                        61,
                        27,
                        54,
                        43,
                        120,
                        46,
                        50,
                        62,
                        51,
                        90,
                        70,
                        82,
                        90,
                        70,
                        82,
                        35,
                        27,
                        27,
                        53,
                        61,
                        53,
                        61,
                        27,
                    ],
                },
            ],
            chart: {
                type: "bar",
                height: 350,
                stacked: true,
                toolbar: {
                    show: false,
                },
                zoom: {
                    enabled: false,
                },
            },
            responsive: [
                {
                    breakpoint: 480,
                    options: {
                        legend: {
                            position: "bottom",
                            offsetX: -10,
                            offsetY: 0,
                        },
                    },
                },
            ],
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: "50%",
                },
            },

            dataLabels: {
                enabled: false,
            },
            xaxis: {
                type: "datetime",
                categories: [
                    "2020-06-28",
                    "2020-06-29",
                    "2020-06-30",
                    "2020-07-01",
                    "2020-07-02",
                    "2020-07-03",
                    "2020-07-04",
                    "2020-07-05",
                    "2020-07-06",
                    "2020-07-07",
                    "2020-07-08",
                    "2020-07-09",
                    "2020-07-10",
                    "2020-07-11",
                    "2020-07-12",
                    "2020-07-13",
                    "2020-07-14",
                    "2020-07-15",
                    "2020-07-16",
                    "2020-07-17",
                    "2020-07-18",
                    "2020-07-19",
                    "2020-07-20",
                    "2020-07-21",
                    "2020-07-22",
                    "2020-07-23",
                    "2020-07-24",
                    "2020-07-25",
                    "2020-07-26",
                    "2020-07-27",
                    "2020-07-28",
                    "2020-07-29",
                    "2020-07-30",
                ],
            },
            stroke: {
                show: true,
                width: 2,
                colors: ["transparent"],
            },
            fill: {
                opacity: 1,
            },
            legend: {
                position: "bottom",
            },
            // colors: ["#f6ad55","#4299e1","#48bb78"],
            colors: ["#48bb78", "#4299e1", "#fbd38d"],
        };

        var chart1 = new ApexCharts(
            document.querySelector("#chart-bar"),
            options_bar
        );
        chart1.render();

        var options_chart_2 = {
            series: [332, 185, 151, 87],
            chart: {
                type: "donut",
                width: "100%",
                height: 400,
            },
            plotOptions: {
                pie: {
                    customScale: 0.85,
                    donut: {
                        size: "67%",
                    },
                },
                stroke: {
                    colors: undefined,
                },
            },
            colors: ["#2f855a", "#38a169", "#48bb78", "#68d391"],

            labels: ["USA", "India", "Japan", "Indonesia"],

            responsive: [
                {
                    breakpoint: 480,
                    options: {
                        chart: {
                            width: 200,
                        },
                        legend: {
                            position: "bottom",
                        },
                    },
                },
            ],
        };

        var chart = new ApexCharts(
            document.querySelector("#chart-pie-1"),
            options_chart_2
        );
        chart.render();
    </script>
</body>

</html>
