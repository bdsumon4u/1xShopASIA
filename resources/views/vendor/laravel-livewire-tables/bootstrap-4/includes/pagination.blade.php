@if ($paginationEnabled)
    <div class="bg-gray-200 p-2">
        {{ $models->links() }}
        @if ($models->total() <= $models->perPage())
            @lang('laravel-livewire-tables::strings.results', [
                'first' => $models->count() ? $models->firstItem() : 0,
                'last' => $models->count() ? $models->lastItem() : 0,
                'total' => $models->total()
            ])
        @endif
    </div>
@endif
