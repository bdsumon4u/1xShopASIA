@props(['notices'])
<div class="md:max-w-xl mx-auto">
    @foreach($notices as $notice)
        <div class="flex items-center justify-between shadow-md border-2 border-gray-300 mb-2">
            <div class="flex self-stretch bg-gray-40000 mr-2">
                <svg class="fill-current self-start mt-4 text-white w-4 md:w-6 lg:w-4 h-4 md:h-6 lg:h-4 mx-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path></svg>
            </div>
            <div class="flex flex-col flex-grow self-center py-3">
                <h4 class="font-bold text-gray-200">{{ $notice->title }}</h4>
                <hr class="my-2 border-gray-200">
                <div class="text-gray-200">
                    {!! $notice->content !!}
                </div>
            </div>
        </div>
    @endforeach
</div>
