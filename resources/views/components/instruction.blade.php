<div class="flex">
    <div class="flex flex-col items-center mr-4 -mt-3">
        <div>
            <div class="flex items-center justify-center w-10 h-10 border rounded-md">
                <svg class="w-4 text-white" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                    <line fill="none" stroke-miterlimit="10" x1="12" y1="2" x2="12" y2="22"></line>
                    <polyline fill="none" stroke-miterlimit="10" points="19,15 12,22 5,15"></polyline>
                </svg>
            </div>
        </div>
        <div class="w-px h-full bg-gray-300"></div>
    </div>
    <div class="pt-5 pb-2 px-4 bg-white shadow-md relative rounded-md w-full mb-5">
        <h2 class="rect bg-white p-1 rounded-md absolute left-0 -top-3">
            <p class="h-6 w-6 text-lg font-bold bg-redish text-white text-center rounded-md">{{ $step }}</p>
        </h2>
        <p class="text-gray-700">
            {{ $slot }}
        </p>
    </div>
</div>
