<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        {{-- <link rel="stylesheet" href="http://localhost:5173/resources/css/app.css"> --}}
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ route('notes.index') }}" class="text-sm text-gray-700 underline">Notes</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <h4 class="text-lg">Lite Notes</h4>
        </div>
    </body>
</html>
