@if ($loadingIndicator)
    <tbody wire:loading.class.remove="hidden" class="hidden">
        <tr>
            <td class="px-3 py-2 font-bold" colspan="{{ collect($columns)->count() }}">
                @lang('laravel-livewire-tables::strings.loading')
            </td>
        </tr>
    </tbody>

    <tbody class="bg-white divide-y divide-gray-200" @if($collapseDataOnLoading) wire:loading.remove @endif>
@else
    <tbody class="bg-white divide-y divide-gray-200">
@endif
