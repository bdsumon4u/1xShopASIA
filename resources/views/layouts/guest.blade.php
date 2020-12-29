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
                    <div style="min-height: calc(100vh - 8rem);">
                        {{ $slot }}
                    </div>
                </main>
                <footer class="bg-gray-50 text-gray-600 body-font">
                    <div class="container px-5 md:px-15 lg:px-20 py-14 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
                        <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
                            <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                                <img src="https://cdn1.codashop.com/S/content/mobile/images/codashop-logo.png"
                                     class="block h-7 w-auto"/>
                            </a>
                            <p class="mt-2 text-sm text-gray-500">
                                The Best Way To Top Up Player ID in Batting Site 1xBetASIA.
                            </p>
                        </div>
                        <div class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">
                            <div class="md:w-3/4 w-full px-4">

                            </div>
                            <div class="md:w-1/4 w-full px-4">
                                <h2 class="title-font font-medium text-gray-900 tracking-widest font-bold mb-3">Need Help?</h2>
                                <nav class="list-none mb-10">
                                    <li>
                                        <a class="text-gray-600 hover:text-gray-800">First Link</a>
                                    </li>
                                    <li>
                                        <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                                    </li>
                                    <li>
                                        <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                                    </li>
                                    <li>
                                        <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                                    </li>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-100">
                        <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
                            <p class="text-gray-500 text-sm text-center sm:text-left">© {{ date('Y') }} — {{ config('app.name') }}</p>
                            <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
                                <a class="text-gray-500">
                                  <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                  </svg>
                                </a>
                                <a class="ml-3 text-gray-500">
                                  <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                    <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                                  </svg>
                                </a>
                                <a class="ml-3 text-gray-500">
                                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                    <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                    <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                                  </svg>
                                </a>
                                <a class="ml-3 text-gray-500">
                                  <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                                    <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                                    <circle cx="4" cy="4" r="2" stroke="none"></circle>
                                  </svg>
                                </a>
                              </span>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script type="text/javascript">
            document.addEventListener("DOMContentLoaded", function(){
                tail.select(".tail-select", {
                    // descriptions: true
                });
            });
        </script>
        @livewireScripts
    </body>
</html>
