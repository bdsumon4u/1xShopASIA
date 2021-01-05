<div class="flex flex-wrap py-3 lg:px-5 lg:py-7">
    <div class="px-3 mb-5 md:mb-0 w-full md:w-64 lg:w-80">
        <ul class="px-0 border">
            @foreach($tabs as $item)
            <li data-tab="$item" class="border list-none rounded-sm @if ($item == $tab) bg-gray-800 text-gray-200 border-blue-800 @endif">
                <a class="block px-3 py-2" href="{{ route('admin.settings', $item) }}">{{ ucwords($item) }}</a>
            </li>
            @endforeach
        </ul>
    </div>
    <div class="px-3 flex-1">
        <div class="p-4 border">
            <h3 class="text-xl mb-3">
                <span class="border-b-2 border-dashed">{{ ucwords($tab) }}</span>
            </h3>
            @if(view()->exists('livewire.admin.'.$tab.'-setting'))
                @livewire('admin.'.$tab.'-setting')
            @endif
        </div>
    </div>
</div>
