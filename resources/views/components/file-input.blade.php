@props(['id' => 'file-input'])
<div x-data="{ files: null }" id="{{ $id }}" class="block w-full pt-5 pb-2 px-3 relative bg-white appearance-none border-2 border-gray-300 border-solid rounded-md hover:shadow-outline-gray">
    <input type="file" {{ $attributes }}
           class="absolute inset-0 z-50 m-0 p-0 w-full h-full outline-none opacity-0"
           x-on:change="files = $event.target.files; console.log($event.target.files);"
           x-on:dragover="$el.classList.add('active')" x-on:dragleave="$el.classList.remove('active')" x-on:drop="$el.classList.remove('active')"
    >
    <template x-if="files !== null">
        <div class="flex flex-col space-y-1">
            <template x-for="(_,index) in Array.from({ length: files.length })">
                <div class="flex flex-row items-center space-x-2">
                    <template x-if="files[index].type.includes('audio/')"><i class="far fa-file-audio fa-fw"></i></template>
                    <template x-if="files[index].type.includes('application/')"><i class="far fa-file-alt fa-fw"></i></template>
                    <template x-if="files[index].type.includes('image/')"><i class="far fa-file-image fa-fw"></i></template>
                    <template x-if="files[index].type.includes('video/')"><i class="far fa-file-video fa-fw"></i></template>
                    <span class="font-medium text-gray-900" x-text="files[index].name">Uploading</span>
                    <span class="text-xs self-end text-gray-500" x-text="filesize(files[index].size)">...</span>
                </div>
            </template>
        </div>
    </template>
    <template x-if="files === null">
        <div class="flex flex-col space-y-2 items-center justify-center">
            <img class="h-7 w-auto mb-2" src="{{ app_logo() }}" alt="Logo">
{{--            <i class="fas fa-cloud-upload-alt fa-3x text-currentColor"></i>--}}
{{--            <p class="text-gray-700">Drag your logo here or click in this area.</p>--}}
{{--            <a href="javascript:void(0)" class="flex items-center mx-auto py-2 px-4 text-white text-center font-medium border border-transparent rounded-md outline-none bg-red-700">Upload logo</a>--}}
        <small>Recommended Size (160px x 30px)</small>
        </div>
    </template>
</div>
@once
@push('scripts')
    <script src="https://cdn.filesizejs.com/filesize.min.js"></script>
@endpush
@endonce
