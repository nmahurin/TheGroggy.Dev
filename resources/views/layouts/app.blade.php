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

    <script src="{{ mix('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('css/tailwindoutput.css') }}">
</head>

<body class="font-sans antialiased scrollbar" x-data="mainPage">
    <main
        :class="[
            (themes.dark ? 'dark' : ''),
            (themes.necron ? 'necron' : ''),
            @if(\Auth::check() && \Auth::user()->id == 1) (dev ? 'dev' : '') @endif
        ]"
        class=""
    >

        <x-jet-banner />

        <div class="min-h-screen bg-slate-100 dark:bg-slate-800 z-0">

            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-slate-700 dark:bg-slate-800 text-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main class="min-h-[80vh]">
                {{ $slot }}
            </main>




            <x-theme-toggles />

            <x-dashboard.footer />

        </div>

        @stack('modals')

    </main>

    @livewireScripts
    @include('js.dashboard_js')
</body>
</html>
