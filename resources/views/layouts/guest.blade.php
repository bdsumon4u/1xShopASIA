<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="https://unpkg.com/tail.select@0.5.15/css/default/tail.select-light.min.css">
        @stack('styles')
        @livewireStyles

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>
        <script src="https://unpkg.com/tail.select@0.5.15/js/tail.select.min.js" defer></script>
    </head>
    <body class="bg-redish">
        <div class="font-sans text-gray-900 antialiased">
            <div class="min-h-screen">
            @include('welcome-header')
            <!-- Page Content -->
                <main>
                    <x-alerts />
                    <div>
                        {{ $slot }}
                    </div>
                </main>
            @include('welcome-footer')
            </div>
        </div>
        <script type="text/javascript">
            document.addEventListener("DOMContentLoaded", function(){
                tail.select(".tail-select", {
                    descriptions: true
                });
            });
        </script>
        @livewireScripts
        @stack('scripts')
    </body>
</html>
