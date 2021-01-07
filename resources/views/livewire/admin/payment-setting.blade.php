<x-form wire:submit.prevent="submit" method="POST" multipart>
    <x-livewire-alert on="updated" />
    <div class="flex">
        <div class="pt-7 pb-2 px-4 bg-white border shadow-md relative rounded-md w-full mt-5">
            <h2 class="flex bg-white border py-1 px-2 rounded-md absolute left-0 -top-3">
                <x-label class="text-redish font-bold" for="currencies" />
            </h2>
            <x-input name="currencies" wire:model="currencies" class="block w-full px-2 py-1 border rounded-md text-gray-700 bg-gray-100 appearance-none focus:outline-none focus:bg-gray-200 focus:shadow-inner" />
            <x-error name="currencies" />
        </div>
    </div>

    <div class="flex flex-wrap md:-mx-2">
        @foreach($names as $name)
        @continue($name == 'currencies')
        <div class="md:px-2 w-full md:w-1/2">
            <div class="pt-7 pb-2 px-4 bg-white border shadow-md relative rounded-md w-full mt-5">
                <h2 class="flex bg-white border py-1 px-2 rounded-md absolute left-0 -top-3">
                    <x-label class="text-redish font-bold" :name="$name" />
                </h2>
                <x-input :name="$name.'_number'" :wire:model="$name.'_number'" placeholder="Account Number" class="block w-full px-2 py-1 border rounded-md text-gray-700 bg-gray-100 appearance-none focus:outline-none focus:bg-gray-200 focus:shadow-inner" />
                <x-error :name="$name.'_number'" />
            </div>
        </div>
        @endforeach
    </div>

    <x-jet-button wire:loading.attr="disabled" class="w-full justify-center mt-6 py-3">
        Submit
    </x-jet-button>
</x-form>
