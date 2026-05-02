<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased" style="
        background-color: #1a0f07;
        background-image:
            radial-gradient(ellipse at 20% 30%, rgba(139,94,60,0.45) 0%, transparent 55%),
            radial-gradient(ellipse at 80% 70%, rgba(44,26,14,0.6) 0%, transparent 55%);
        min-height: 100vh;
    ">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">

            {{-- Quitamos el logo de Laravel --}}

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>