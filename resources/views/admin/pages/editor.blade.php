<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __($page->exists ? 'Edit Page' : 'Create Page') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-form :method="$page->exists ? 'PATCH' : 'POST'" class="md:max-w-3xl mx-auto" :action="$page->exists ? route('admin.pages.update', $page) : route('admin.pages.store')">
                <div class="flex">
                    <div class="pt-7 pb-2 px-4 bg-white shadow-md relative rounded-md w-full mt-5">
                        <h2 class="flex bg-white py-1 px-2 rounded-md absolute left-0 -top-3">
                            <x-label name="title" class="text-redish font-bold" />
                        </h2>
                        <x-input name="title" class="block w-full px-2 py-1 border rounded-md text-gray-700 bg-gray-100 appearance-none focus:outline-none focus:bg-gray-200 focus:shadow-inner" :value="$page->title" />
                        <x-error name="title" />
                    </div>
                </div>
                <div class="flex">
                    <div class="pt-7 pb-2 px-4 bg-white shadow-md relative rounded-md w-full mt-5">
                        <h2 class="flex bg-white py-1 px-2 rounded-md absolute left-0 -top-3">
                            <x-label name="slug" class="text-redish font-bold" />
                        </h2>
                        <x-input name="slug" class="block w-full px-2 py-1 border rounded-md text-gray-700 bg-gray-100 appearance-none focus:outline-none focus:bg-gray-200 focus:shadow-inner" :value="$page->slug" />
                        <x-error name="slug" />
                    </div>
                </div>

                <div class="flex flex-wrap md:-mx-2">
                    <div class="md:px-2 w-full md:w-1/2">
                        <div class="pt-7 pb-2 px-4 flex flex-col bg-white shadow-md relative rounded-md mt-5">
                            <h2 class="flex bg-white py-1 px-2 rounded-md absolute left-0 -top-3">
                                <x-label name="order" class="text-redish font-bold" />
                            </h2>
                            <x-number name="order" class="block w-full px-2 py-1 border rounded-md text-gray-700 bg-gray-100 appearance-none focus:outline-none focus:bg-gray-200 focus:shadow-inner" :value="$page->order ?? 1" />
                            <x-error name="order" />
                        </div>
                    </div>
                </div>
                <div class="flex">
                    <div class="pt-7 pb-2 px-4 bg-white shadow-md relative rounded-md w-full mt-5">
                        <h2 class="flex bg-white py-1 px-2 rounded-md absolute left-0 -top-3">
                            <x-label name="content" class="text-redish font-bold" />
                        </h2>
                        <x-textarea tinymce name="content" :value="$page->content"/>
                        <x-error name="content" />
                    </div>
                </div>

                <x-jet-button class="w-full justify-center mt-6 py-3">
                    {{ $page->exists ? 'Update' : 'Publish' }}
                </x-jet-button>
            </x-form>
        </div>
    </div>
    @push('scripts')
        <script src="https://cdn.tiny.cloud/1/ykrvwmdno3ukmq6xvcdhwkf41l3o5y5ofw38s2k0dp2ema9i/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script>
            var useDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;

            tinymce.init({
                selector:'[tinymce]',
                plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
                imagetools_cors_hosts: ['picsum.photos'],
                menubar: 'file edit view insert format tools table help',
                toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | numlist bullist | forecolor backcolor removeformat | charmap emoticons | fullscreen  preview save print',
                toolbar_sticky: true,
                autosave_ask_before_unload: true,
                autosave_interval: '30s',
                autosave_prefix: '{path}{query}-{id}-',
                autosave_restore_when_empty: false,
                autosave_retention: '2m',
                importcss_append: true,
                height: 600,
                image_caption: true,
                quickbars_insert_toolbar: 'link table',
                quickbars_selection_toolbar: 'bold italic underline | quicklink h2 h3 blockquote quicktable',
                noneditable_noneditable_class: 'mceNonEditable',
                toolbar_mode: 'sliding',
                contextmenu: 'link lists table',
                skin: useDarkMode ? 'oxide-dark' : 'oxide',
                content_css: useDarkMode ? 'dark' : 'default',
                content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
            });
        </script>
    @endpush
</x-app-layout>
