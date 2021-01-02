<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="px-2 md:px-0 py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h2 class="mt-2 mb-3 px-3 text-xl leading-8 font-extrabold tracking-tight text-gray-600 sm:text-2xl" style="font-family: Audiowide">
                    Pending Top Up-s
                </h2>
                <livewire:admin.top-ups-table status="pending" />
            </div>
        </div>
    </div>

    <div class="px-2 md:px-0 py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h2 class="mt-2 mb-3 px-3 text-xl leading-8 font-extrabold tracking-tight text-gray-600 sm:text-2xl" style="font-family: Audiowide">
                    Pending Withdraw-s
                </h2>
                <livewire:admin.withdraws-table status="pending" />
            </div>
        </div>
    </div>
</x-app-layout>
