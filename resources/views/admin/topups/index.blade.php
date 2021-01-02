<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Top Ups') }}
        </h2>
    </x-slot>

    <div class="px-2 md:px-0 py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <livewire:admin.top-ups-table />
            </div>
        </div>
    </div>
</x-app-layout>
