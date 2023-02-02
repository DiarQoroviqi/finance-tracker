<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <wireui:scripts />
        @livewireStyles
        <!-- Scripts -->
        @vite('resources/js/app.js')
    </head>
    <body class="font-sans antialiased">
        <x-notifications />

        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <main class="flex-1">
                <x-notifications />
                <div class="py-6">
                    @if (isset($header))
                        <div class="mx-auto max-w-7xl">
                            <h1 class="text-2xl font-semibold text-gray-900 border-b-2 mb-5">{{ $header }}</h1>
                        </div>
                    @endif
                    <div class="mx-auto max-w-7xl">
                        {{ $slot }}
                    </div>
                </div>
            </main>

        </div>

        @livewire('livewire-ui-modal')
        @livewireScripts
    </body>
</html>
