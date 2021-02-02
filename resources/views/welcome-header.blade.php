<nav x-data="{ open: false }" class="bg-white shadow-md border-b border-gray-100 mb-1">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-14">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ url('/') }}">
                        <img src="{{ app_logo() }}" class="block h-7 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link class="roboto italic font-bold text-redish" :href="route('topup')" :active="request()->routeIs('topup')">
                        {{ __('Top Up') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link class="roboto italic font-bold text-redish" :href="route('withdraw')" :active="request()->routeIs('withdraw')">
                        {{ __('Withdraw') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link class="roboto italic font-bold text-redish" :href="route('contact-us')" :active="request()->routeIs('contact-us')">
                        {{ __('Contact Us') }}
                    </x-jet-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                @php $status = setting('site_status', 'online') @endphp
                <p class="status uppercase text-2xl {{ $status == 'online' ? 'text-green-500' : 'text-red-500' }}">{{ $status }}</p>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-jet-responsive-nav-link class="font-bold text-redish" :href="route('topup')" :active="request()->routeIs('topup')">
                {{ __('Top Up') }}
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link class="font-bold text-redish" :href="route('withdraw')" :active="request()->routeIs('withdraw')">
                {{ __('Withdraw') }}
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link class="roboto italic font-bold text-redish" :href="route('contact-us')" :active="request()->routeIs('contact-us')">
                {{ __('Contact Us') }}
            </x-jet-responsive-nav-link>
        </div>
    </div>
</nav>
