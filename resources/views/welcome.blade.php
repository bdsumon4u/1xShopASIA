<x-guest-layout>
    <div class="bg-white overflow-hidden shadow-md">
        <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
            <section class="text-gray-600 body-font">
                <div class="container mx-auto flex px-5 md:flex-row flex-col items-center">
                    <div
                        class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                        <h1 class="title-font font-bold sm:text-4xl text-3xl mb-4 font-medium text-gray-800">{{ $tagline }}</h1>
                        <p class="mb-8 leading-relaxed text-gray-700" style="font-family: Roboto">You're seconds
                            away from buying Top Up Currency, Player ID. Topping Up using 1xShopASIA is more
                            easy, safe. We're trusted by millions of users in South Asia. No Credit Card
                            needed.</p>
                    </div>
                    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                        <img class="object-cover object-center rounded" alt="hero" src="{{ asset('images/cryptocurrency.jpg') }}">
                    </div>
                </div>
            </section>
        </div>
    </div>


    <div class="overflow-hidden shadow-md">
        <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
            <div class="grid gap-6 row-gap-10 lg:grid-cols-3">
                <div class="lg:col-span-2 lg:py-6 lg:pr-16">
                    <x-instruction step="1">
                        Go To <x-a target="_blank" class="text-redish font-bold italic underline" :href="route('topup')">Top Up</x-a> Page.
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

                <div>
                    <h2 class="mt-2 mb-4 text-3xl leading-8 font-extrabold tracking-tight text-gray-200 sm:text-4xl"
                        style="font-family: Audiowide">
                        Top Up
                    </h2>
                    <p class="leading-relaxed text-gray-100 font-bold">
                        Top Up using 1xShopASIA is now very faster, reliable & easier. Just follow a few steps and top up your amount. Even if you don't have any kind of Card, you can pay using mobile banking also.
                    </p>
                </div>
            </div>
        </div>
    </div>


    <div class="dotted-bg overflow-hidden shadow-md">
        <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
            <div class="grid gap-6 row-gap-10 lg:grid-cols-3">
                <div>
                    <h2 class="mt-2 mb-4 text-3xl leading-8 font-extrabold tracking-tight text-gray-200 sm:text-4xl"
                        style="font-family: Audiowide">
                        Withdraw
                    </h2>
                    <p class="leading-relaxed text-gray-100 font-bold">
                        Money withdraw using 1xShopASIA is now very faster, reliable & easier. Just follow a few steps and get your amount to your account. Even if you don't have any kind of Card, you can receive payment to your mobile banking also.
                    </p>
                </div>

                <div class="lg:col-span-2 lg:py-6 lg:pl-16">
                    <x-instruction step="1">Go To <x-a target="_blank" class="text-redish font-bold italic underline" :href="route('withdraw')">Withdraw</x-a>
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

    <div class="overflow-hidden shadow-md">
        <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
            <div class="grid gap-6 row-gap-10 lg:grid-cols-3">
                <div class="lg:col-span-2 lg:py-6 lg:pr-16">
                    <x-instruction step="1">
                        Go To <a target="_blank" class="text-redish font-bold italic underline" href="https://1xbet.com">1xBetASIA</a> Website.
                    </x-instruction>
                    <x-instruction step="2">Go To Registration Page.</x-instruction>
                    <x-instruction step="3">Select Country.</x-instruction>
                    <x-instruction step="4">Select Currency.</x-instruction>
                    <x-instruction step="5">Use Promo Code 1x24645.</x-instruction>
                    <x-instruction step="6">Register.</x-instruction>
                    <x-instruction step="7">Fill Up All Documents.</x-instruction>
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

                <div>
                    <h2 class="mt-2 mb-4 text-3xl leading-8 font-extrabold tracking-tight text-gray-200 sm:text-4xl"
                        style="font-family: Audiowide">
                        1xBet Account
                    </h2>
                    <p class="leading-relaxed text-gray-100 font-bold">
                        To create 1xBetASIA account, just follow some simple steps.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white dotted-bg overflow-hidden shadow-md mb-1">
        <div class="px-2 md:px-0 pt-8 pb-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:pt-10 lg:pb-20">
            <h2 class="mt-2 mb-3 text-xl leading-8 font-extrabold tracking-tight text-gray-300 sm:text-2xl" style="font-family: Audiowide">
                Recent Top Up-s
            </h2>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <livewire:top-ups-table />
            </div>
        </div>
    </div>


    <div class="bg-redish overflow-hidden shadow-md mt-1">
        <div class="px-2 md:px-0 pt-8 pb-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:pt-10 lg:pb-20">
            <h2 class="mt-2 mb-3 text-xl leading-8 font-extrabold tracking-tight text-gray-700 sm:text-2xl" style="font-family: Audiowide">
                Recent Withdraw-s
            </h2>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <livewire:withdraws-table />
            </div>
        </div>
    </div>
</x-guest-layout>
