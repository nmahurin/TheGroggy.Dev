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
    <link rel="stylesheet" href="{{ asset('css/tailwindoutput.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script defer src="https://unpkg.com/alpinejs@3.10.2/dist/cdn.min.js"></script>
    @livewireStyles
</head>
<body class="font-sans antialiased scrollbar text-slate-900" x-data="mainPage"
      :class="showSmMenu? 'overflow-y-hidden' : ''" x-cloak>

    <!-- Page Content -->
    <main :class="[
            (themes.dark ? 'dark' : ''),
            (themes.necron ? 'necron' : ''),
            @if(\Auth::check() && \Auth::user()->id == 1) (dev ? 'dev' : '') @endif
            ]"
            {{--@click="showMailModal = false"--}}>

        <header class="sticky top-0 z-50 bg-transparent
                    {{ Route::current()->getName() == 'index' ? ' hidden ' : '' }}">

            <div class="h-16 lg:h-20 bg-slate-50 dark:bg-transparent dark:border-lime-400 pl-4 md:pl-12 py-4 lg:w-1/6
                border-b-4 border-slate-800 necron:border-lime-50 necron:bg-lime-800 absolute top-0 left-0
                 hover:shadow-the-groggy-glow rounded-md">

                <a href="/" class="text-3xl text-bold dark:text-white necron:text-white text-slate-500">

                    The<span class="dark:text-lime-400">Groggy</span>.Dev

                </a>

            </div>

            @livewire('navigation-wire')

            @livewire('mini-nav-wire')

            @livewire('mail-modal-wire')

            <x-theme-toggles />

        </header>

        <x-content.main-page-theme />


        <div class="flex flex-col lg:flex-row">
            <div class="{{--lg:bg-side-image-2--}} bg-slate-100 dark:bg-slate-700 necron:bg-lime-300 lg:py-6 lg:px-6
                    bg-auto bg-center bg-repeat bg-origin-border z-10
                    {{ Route::current()->getName() == 'index' ? 'hidden' : 'basis-1/6' }}">

            </div>

            {{ $slot }}

            <div class="flex-row {{--bg-side-image-2--}} dark:bg-slate-700 necron:bg-lime-300 bg-slate-100 py-6 px-6
                    bg-auto bg-center bg-repeat bg-origin-border z-10
                    {{ Route::current()->getName() == 'index' ? 'hidden' : 'basis-1/6' }}">

            </div>
        </div>


        <x-content.footer />

    </main>

@livewireScripts
@include('js.content_js')
</body>
</html>


