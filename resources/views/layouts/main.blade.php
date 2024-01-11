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
      :class="showSmMenu? 'overflow-y-hidden' : ''" x-cloak
      @keydown.escape="showMailModal = false">

    <!-- Page Content -->
    <main :class="[
            (themes.dark ? 'dark' : ''),
            (themes.necron ? 'necron' : ''),
            @if(\Auth::check() && \Auth::user()->id == 1) (dev ? 'dev' : '') @endif
            ]"
            {{--@click="showMailModal = false"--}}>

        <header class="sticky top-0 z-50 bg-slate-200 dark:bg-slate-700 lg:bg-transparent
                    {{ Route::current()->getName() == 'index' ? ' hidden ' : '' }}">

            <a href="/" class="">
                <div class="h-16 lg:h-20 bg-slate-100 dark:bg-slate-700 lg:dark:bg-transparent dark:border-lime-400
                    py-4 w-full lg:w-1/5 border-b-4 border-slate-800 necron:border-lime-50 necron:bg-lime-800 absolute
                    top-4 left-[3%] rounded-md group text-3xl text-bold dark:text-white necron:text-white text-slate-500
                    flex flex-row gap-0 justify-center">

                        The<span class="dark:text-lime-400">Groggy</span>.Dev


                </div>
            </a>

            @livewire('navigation-wire')

            @livewire('mini-nav-wire')

        </header>

        <div class="{{ Route::current()->getName() != 'index' ? ' hidden lg:block ' : '' }}">
            <x-content.main-page-theme />
        </div>


        <div class="flex flex-col lg:flex-row">
            <div class="{{--lg:bg-side-image-2--}} bg-slate-100 dark:bg-slate-700 necron:bg-lime-300 lg:py-6 lg:px-6
                    bg-auto bg-center bg-repeat bg-origin-border z-10
                    {{ Route::current()->getName() == 'index' ? 'hidden' : 'basis-1/4' }}">

            </div>

            {{ $slot }}

            <div class="flex-row {{--bg-side-image-2--}} dark:bg-slate-700 necron:bg-lime-300 bg-slate-100 py-6 px-6
                    bg-auto bg-center bg-repeat bg-origin-border z-10
                    {{ Route::current()->getName() == 'index' ? 'hidden' : 'basis-1/4' }}">

            </div>
        </div>


        <x-content.footer />

        @livewire('mail-modal-wire')

    </main>

@livewireScripts
@include('js.content_js')
</body>
</html>


