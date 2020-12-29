@if ($paginationEnabled || $searchEnabled)
    <div class="bg-gray-200 p-2 flex justify-between items-center border-b">
        <div class="flex">
            @if ($paginationEnabled && count($perPageOptions))
                <div class="flex-1">
                    @lang('laravel-livewire-tables::strings.per_page'): &nbsp;

                    <select wire:model="perPage" class="form-input bg-gray-50 focus:bg-white w-12 rounded-md transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                        @foreach ($perPageOptions as $option)
                            <option>{{ $option }}</option>
                        @endforeach
                    </select>
                </div><!--col-->
            @endif
        </div>
        @include('laravel-livewire-tables::'.config('laravel-livewire-tables.theme').'.includes.export')
        @if ($searchEnabled)
            <div class="flex rounded-lg shadow-sm">
                <div class="relative flex-grow focus-within:z-10">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" stroke="currentColor" fill="none">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <input
                        @if (is_numeric($searchDebounce) && $searchUpdateMethod === 'debounce') wire:model.debounce.{{ $searchDebounce }}ms="search" @endif
                        @if ($searchUpdateMethod === 'lazy') wire:model.lazy="search" @endif
                        @if ($disableSearchOnLoading) wire:loading.attr="disabled" @endif
                        placeholder="{{ __('laravel-livewire-tables::strings.search') }}"
                        class="form-input block bg-gray-50 focus:bg-white w-full rounded-md pl-10 transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                    />
                    @if ($clearSearchButton)
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                        <button wire:click="clearSearch" class="text-gray-300 hover:text-red-600 focus:outline-none">
                            <svg class="h-5 w-5 stroke-current" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </button>
                    </div>
                    @endif
                </div>
            </div>
        @endif
    </div>
@endif
