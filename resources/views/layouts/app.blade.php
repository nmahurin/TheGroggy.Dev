<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'TheGroggy.Dev') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        @livewireStyles

        <!-- Scripts -->
        {{--@vite(['resources/css/app.css', 'resources/js/app.js'])--}}
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script src="{{ mix('js/app.js') }}" defer></script>
        <link rel="stylesheet" href="{{ asset('css/tailwindoutput.css') }}">
        <script defer src="https://unpkg.com/alpinejs@3.10.2/dist/cdn.min.js"></script>
    </head>
    <body class="font-sans antialiased" x-data="mainPage">
        <main :class="[
        (themes.dark ? 'dark' : ''),
        (themes.necron ? 'necron' : ''),
        @if(\Auth::check() && \Auth::user()->id == 1) (dev ? 'dev' : '') @endif
                ]">

            <x-jet-banner />

            <div class="min-h-screen bg-slate-100 dark:bg-slate-600">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-slate-700 text-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
                <main class="">
                    {{ $slot }}
                </main>
            </div>

            <div class="hidden fixed bottom-0 right-2 lg:block flex flex-col">
                @include('stubs.dark-mode-toggle')
            </div>

            @stack('modals')

        </main>


        @livewireScripts
        @include('js.dashboard_js')
    </body>
</html>
