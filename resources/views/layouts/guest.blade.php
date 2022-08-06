<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'TheGroggy.Dev') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        {{--<link rel="stylesheet" href="{{ mix('css/app.css') }}">--}}
        {{--<script src="{{ mix('js/app.js') }}" defer></script>--}}


        <!-- Styles -->
        {{--<link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}
        <link rel="stylesheet" href="{{ asset('css/tailwindoutput.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script defer src="https://unpkg.com/alpinejs@3.10.2/dist/cdn.min.js"></script>
    </head>
    <body class="" x-data="mainPage">
        <div class="font-sans text-gray-900 antialiased" :class="[
        (themes.dark ? 'dark' : ''),
        (themes.necron ? 'necron' : ''),
                ]">
            {{ $slot }}
        </div>

        <x-theme-toggles />


        @include('js.guest_js')
    </body>
</html>
