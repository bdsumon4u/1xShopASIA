<x-guest-layout>
    <div class="min-h-screen">
    @include('welcome-header')

    <!-- Page Content -->
        <main>
            <div class="bg-white overflow-hidden shadow-md">
                <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                    <section class="text-gray-600 body-font">
                        <div class="container mx-auto flex px-5 md:flex-row flex-col items-center">
                            <div
                                class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                                <h1 class="title-font font-bold sm:text-4xl text-3xl mb-4 font-medium text-gray-800">The
                                    Best Way
                                    To Top Up Player ID in Batting Site 1xBetASIA.</h1>
                                <p class="mb-8 leading-relaxed text-gray-700" style="font-family: Roboto">You're seconds
                                    away from buying Top Up Currency, Player ID. Topping Up using 1xShopASIA is more
                                    easy, safe. We're trusted by millions of users in South Asia. No Credit Card
                                    needed.</p>
                            </div>
                            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                                <img class="object-cover object-center rounded" alt="hero"
                                     src="https://dummyimage.com/720x380">
                            </div>
                        </div>
                    </section>
                </div>
            </div>


            <div class="overflow-hidden shadow-md">
                <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                    <div class="grid gap-6 row-gap-10 lg:grid-cols-2">
                        <div class="lg:py-6 lg:pr-16">
                            <div class="mb-8">
                                <h2 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-200 sm:text-4xl"
                                    style="font-family: Audiowide">
                                    Top Up
                                </h2>
                            </div>
                            <x-instruction step="1">Go To <a class="text-redish font-bold italic underline" href="">Top
                                    Up</a> Page.
                            </x-instruction>
                            <x-instruction step="2">Enter Your PlayerID.</x-instruction>
                            <x-instruction step="3">Select Currency.</x-instruction>
                            <x-instruction step="4">Enter Amount.</x-instruction>
                            <x-instruction step="5">Select Payment Method.</x-instruction>
                            <x-instruction step="6">Enter Your Transaction ID.</x-instruction>
                            <x-instruction step="7">Email (Optional).</x-instruction>
                            <x-instruction step="8">Click On The "Buy" Button.</x-instruction>
                            <div class="flex">
                                <div class="flex flex-col items-center mr-4">
                                    <div>
                                        <div class="flex items-center justify-center w-10 h-10 border rounded-full">
                                            <svg class="w-6 text-gray-200" stroke="currentColor" viewBox="0 0 24 24">
                                                <polyline fill="none" stroke-width="2" stroke-linecap="round"
                                                          stroke-linejoin="round" stroke-miterlimit="10"
                                                          points="6,12 10,16 18,8"></polyline>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-1">
                                    <p class="mb-2 text-white text-lg font-bold">Success</p>
                                    <p class="text-gray-700"></p>
                                </div>
                            </div>
                        </div>


                        <div class="lg:py-6 lg:pl-16">
                            <div class="mb-8">
                                <h2 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-200 sm:text-4xl"
                                    style="font-family: Audiowide">
                                    Withdraw
                                </h2>
                            </div>
                            <div>
                                <x-instruction step="1">Go To <a class="text-redish font-bold italic underline" href="">Withdraw</a>
                                    Page.
                                </x-instruction>
                                <x-instruction step="2">Enter Your PlayerID.</x-instruction>
                                <x-instruction step="3">Select Currency.</x-instruction>
                                <x-instruction step="4">Enter Amount.</x-instruction>
                                <x-instruction step="5">Select Payment Method.</x-instruction>
                                <x-instruction step="6">Enter Your Withdrawal Code.</x-instruction>
                                <x-instruction step="7">Email (Optional).</x-instruction>
                                <x-instruction step="8">Click On The "Sell" Button.</x-instruction>
                                <div class="flex">
                                    <div class="flex flex-col items-center mr-4">
                                        <div>
                                            <div class="flex items-center justify-center w-10 h-10 border rounded-full">
                                                <svg class="w-6 text-gray-200" stroke="currentColor"
                                                     viewBox="0 0 24 24">
                                                    <polyline fill="none" stroke-width="2" stroke-linecap="round"
                                                              stroke-linejoin="round" stroke-miterlimit="10"
                                                              points="6,12 10,16 18,8"></polyline>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pt-1">
                                        <p class="mb-2 text-white text-lg font-bold">Success</p>
                                        <p class="text-gray-700"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="bg-white overflow-hidden shadow-md">
                <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                    <div class="grid gap-6 row-gap-10 lg:grid-cols-2">
                        <div>
                            <div class="mb-6">
                                <h2 class="mt-2 text-xl leading-8 font-extrabold tracking-tight text-gray-800 sm:text-2xl" style="font-family: Audiowide">
                                    Recent Top Up-s
                                </h2>
                            </div>
                            <!-- This example requires Tailwind CSS v2.0+ -->
                            <div class="flex flex-col">
                                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-md">
                                            <table class="border-t min-w-full divide-y divide-gray-200">
                                                <thead class="bg-gray-50">
                                                <tr>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        TrxID
                                                    </th>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Type
                                                    </th>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Method
                                                    </th>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Status
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody class="bg-white divide-y divide-gray-200">
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        1587
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        Free Fire
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        bKash
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                <span
                                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                  Active
                                                </span>
                                                    </td>
                                                </tr>

                                                <!-- More rows... -->
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="mb-6">
                                <h2 class="mt-2 text-xl leading-8 font-extrabold tracking-tight text-gray-800 sm:text-2xl" style="font-family: Audiowide">
                                    Recent Withdraw-s
                                </h2>
                            </div>
                            <!-- This example requires Tailwind CSS v2.0+ -->
                            <div class="flex flex-col">
                                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-md">
                                            <table class="border-t min-w-full divide-y divide-gray-200">
                                                <thead class="bg-gray-50">
                                                <tr>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        TrxID
                                                    </th>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Type
                                                    </th>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Method
                                                    </th>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Status
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody class="bg-white divide-y divide-gray-200">
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        1587
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        Free Fire
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        bKash
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                <span
                                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                  Active
                                                </span>
                                                    </td>
                                                </tr>

                                                <!-- More rows... -->
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="bg-white text-gray-600 body-font border-t mt-1">
                <div class="container px-5 py-4 mx-auto flex items-center sm:flex-row flex-col">
                    <a href="{{ url('/') }}"
                       class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                        <img src="https://cdn1.codashop.com/S/content/mobile/images/codashop-logo.png"
                             class="block h-7 w-auto"/>
                    </a>
                    <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">
                        © {{ date('Y') }} Copyright Reserved.
                    </p>
                    <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
                      <a class="text-gray-500">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             class="w-5 h-5"
                             viewBox="0 0 24 24">
                          <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                        </svg>
                      </a>
                      <a class="ml-3 text-gray-500">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             class="w-5 h-5"
                             viewBox="0 0 24 24">
                          <path
                              d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                        </svg>
                      </a>
                      <a class="ml-3 text-gray-500">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                             stroke-width="2"
                             class="w-5 h-5" viewBox="0 0 24 24">
                          <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                          <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                        </svg>
                      </a>
                      <a class="ml-3 text-gray-500">
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                             stroke-width="0"
                             class="w-5 h-5" viewBox="0 0 24 24">
                          <path stroke="none"
                                d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                          <circle cx="4" cy="4" r="2" stroke="none"></circle>
                        </svg>
                      </a>
                    </span>
                </div>
            </footer>
        </main>
    </div>
</x-guest-layout>
