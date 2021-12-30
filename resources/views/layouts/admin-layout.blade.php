<!DOCTYPE html>
<html lang="{{ App::getLocale() }}" class="antialiased bg-gray-100 js-focus-visible">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet" />


    <link rel="stylesheet" href="{{ asset('admin/core/assets/app.css') }}" />
</head>

<body>
<div class="flex min-h-screen w-full bg-gray-50 text-gray-900">
    <div
        x-data="{}"
        x-cloak
        x-show="$store.sidebar.isOpen"
        x-transition.opacity.500ms
        x-on:click="$store.sidebar.close()"
        class="fixed inset-0 z-20 w-full h-full bg-gray-900/50 lg:hidden"
    ></div>

    <x-sidebar />

    <div class="w-screen space-y-6 flex-1 flex flex-col lg:pl-80 rtl:lg:pl-0 rtl:lg:pr-80">
        <header class="h-[4rem] shrink-0 w-full border-b flex items-center">
            <div class="flex items-center w-full px-2 mx-auto sm:px-4 md:px-6 lg:px-8 max-w-7xl">
                <button x-data="{}" x-on:click="$store.sidebar.open()" class="shrink-0 flex items-center justify-center w-10 h-10 text-primary-500 rounded-full hover:bg-gray-500/5 focus:bg-primary-500/10 focus:outline-none lg:hidden">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>

                <div class="flex-1 flex items-center justify-between">
                    <div>
                        <ul class="hidden gap-4 items-center font-medium text-sm lg:flex">
                            @if (! isset($breadcrumbs) && isset($title))
                                <li>
                                    <a href="#">
                                        {{ $title }}
                                    </a>
                                </li>
                            @else
                                {{ $breadcrumbs }}
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <div class="flex-1 w-full px-4 mx-auto md:px-6 lg:px-8 max-w-7xl">
            <div class="space-y-6">
                <header class="space-y-2 items-start justify-between sm:flex sm:space-y-0 sm:space-x-4 sm:py-4">
                    <h1 class="text-2xl font-bold tracking-tight md:text-3xl">
                        {{ $title ?? '' }}
                    </h1>

                </header>

                {{ $slot }}

            </div>
            @include('layouts._footer')

        </div>
    </div>
</div>


<script src="{{ asset('admin/core/assets/app.js') }}"></script>
</body>
</html>
