<x-form wire:submit.prevent="submit" method="POST" multipart>
    <x-livewire-alert on="updated" />
    <div class="flex flex-wrap md:-mx-2">
        <div class="md:px-2 w-full md:w-1/2">
            <div class="pt-7 pb-2 px-4 bg-white border shadow-md relative rounded-md w-full mt-5">
                <h2 class="flex bg-white border py-1 px-2 rounded-md absolute left-0 -top-3">
                    <x-label class="text-redish font-bold" name="company_name" />
                </h2>
                <x-input name="company_name" wire:model="company_name" class="block w-full px-2 py-1 border rounded-md text-gray-700 bg-gray-100 appearance-none focus:outline-none focus:bg-gray-200 focus:shadow-inner" />
                <x-error name="company_name" />
            </div>
        </div>
        <div class="md:px-2 w-full md:w-1/2">
            <div class="pt-7 pb-2 px-4 bg-white border shadow-md relative rounded-md w-full mt-5">
                <h2 class="flex bg-white border py-1 px-2 rounded-md absolute left-0 -top-3">
                    <x-label class="text-redish font-bold" name="company_email" />
                </h2>
                <x-input name="company_email" wire:model="company_email" class="block w-full px-2 py-1 border rounded-md text-gray-700 bg-gray-100 appearance-none focus:outline-none focus:bg-gray-200 focus:shadow-inner" />
                <x-error name="company_email" />
            </div>
        </div>
    </div>

    <div class="relative flex flex-col flex-grow mt-5">
        <h2 class="z-10 flex bg-white border py-1 px-2 rounded-md absolute left-0 -top-3">
            <x-label class="text-redish font-bold" name="logo" />
        </h2>
        <x-file-input wire:model="logo" />
    </div>

    <div class="flex">
        <div class="pt-7 pb-2 px-4 bg-white border shadow-md relative rounded-md w-full mt-5">
            <h2 class="flex bg-white border py-1 px-2 rounded-md absolute left-0 -top-3">
                <x-label class="text-redish font-bold" for="tagline" />
            </h2>
            <x-input name="tagline" wire:model="tagline" class="block w-full px-2 py-1 border rounded-md text-gray-700 bg-gray-100 appearance-none focus:outline-none focus:bg-gray-200 focus:shadow-inner" />
            <x-error name="tagline" />
        </div>
    </div>
    <button type="submit" class="w-full rounded-md px-3 py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
        Submit
    </button>
</x-form>
