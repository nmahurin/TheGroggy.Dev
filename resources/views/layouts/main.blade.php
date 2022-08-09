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
    {{--<link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('css/tailwindoutput.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script defer src="https://unpkg.com/alpinejs@3.10.2/dist/cdn.min.js"></script>
    {{--<script defer src="./node_modules/tw-elements/dist/js/index.min.js"></script>--}}
    @livewireStyles
</head>
<body class="font-sans antialiased scrollbar" x-data="mainPage" :class="showSmMenu? 'overflow-y-hidden' : ''">

    <!-- Page Content -->
    <main :class="[
            (themes.dark ? 'dark' : ''),
            (themes.necron ? 'necron' : ''),
            @if(\Auth::check() && \Auth::user()->id == 1) (dev ? 'dev' : '') @endif
            ]"
            {{--@click="showMailModal = false"--}}>

        <header class="flex flex-row w-full h-16 lg:h-24 bg-slate-50 dark:bg-slate-800 dark:border-lime-400
                    sticky top-0 z-50 border-b-4 border-slate-800 necron:border-lime-50 necron:bg-lime-800
                    ">
            <a href="/" class="text-3xl lg:text-5xl text-bold pl-4 md:pl-12 dark:text-white necron:text-white pt-4">
                The<span class="dark:text-lime-400">Groggy</span>.Dev
            </a>

            @livewire('navigation-wire')

            @livewire('mini-nav-wire')

            @livewire('mail-modal-wire')
        </header>


        <div class="flex flex-col lg:flex-row">
            <div class="lg:bg-side-image-2 bg-slate-100 basis-1/6 dark:bg-gray-800 necron:bg-lime-300 lg:py-6 lg:px-6
                    bg-auto bg-center bg-repeat bg-origin-border z-10">

            </div>

            {{ $slot }}

            <div class="flex-row bg-side-image-2 basis-1/6 dark:bg-gray-800 necron:bg-lime-300 bg-slate-100 py-6 px-6
                    bg-auto bg-center bg-repeat bg-origin-border z-10">

            </div>
        </div>


        <x-content.footer />


        <x-theme-toggles />


    </main>

@livewireScripts
@include('js.content_js')
</body>
</html>


