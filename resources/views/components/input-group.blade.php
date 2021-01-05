@props(['step', 'name'])
<div class="flex">
    <div class="pt-7 pb-2 px-4 bg-white shadow-md relative rounded-md w-full mt-5">
        <h2 class="flex bg-white py-1 px-2 rounded-md absolute left-0 -top-3">
            @if($step)
            <p class="mr-1 h-6 w-6 text-lg font-bold bg-redish text-white text-center rounded-md">{{ $step }}</p>
            @endif
            <x-label :name="$name" />
        </h2>
        <x-input :name="$name" class="block w-full px-2 py-1 border rounded-md text-gray-700 bg-gray-100 appearance-none focus:outline-none focus:bg-gray-200 focus:shadow-inner" {{ $attributes }} />
        <x-error :name="$name" />
    </div>
</div>
