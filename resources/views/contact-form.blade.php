<x-guest-layout>
    <div class="overflow-hidden shadow-md">
        <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
            <x-form class="md:max-w-3xl mx-auto" :action="route('contact-us')" method="POST">
                <x-input-group step="1" name="name" />
                <div class="flex flex-wrap -mx-2">
                    <div class="md:px-2 w-full md:w-1/2">
                        <x-input-group step="2" name="email" />
                    </div>
                    <div class="md:px-2 w-full md:w-1/2">
                        <x-input-group step="3" name="phone" />
                    </div>
                </div>
                <x-input-group step="4" name="subject" />

                <div class="flex">
                    <div class="pt-7 pb-2 px-4 bg-white shadow-md relative rounded-md w-full mt-5">
                        <h2 class="flex bg-white py-1 px-2 rounded-md absolute left-0 -top-3">
                            <p class="mr-1 h-6 w-6 text-lg font-bold bg-redish text-white text-center rounded-md">5</p>
                            <x-label name="message" />
                        </h2>
                        <x-textarea tinymce name="message" class="block w-full px-2 py-1 border rounded-md text-gray-700 bg-gray-100 appearance-none focus:outline-none focus:bg-gray-200 focus:shadow-inner" />
                        <x-error name="message" />
                    </div>
                </div>

                <x-jet-button class="w-full justify-center mt-6 py-3">
                    Submit
                </x-jet-button>
            </x-form>
        </div>
    </div>
    @push('scripts')
        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script>
            var useDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;

            tinymce.init({
                selector:'[tinymce]',
                plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap emoticons',
                imagetools_cors_hosts: ['picsum.photos'],
                menubar: false,
                toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | forecolor backcolor removeformat | charmap emoticons | fullscreen  preview save print',
                toolbar_sticky: true,
                autosave_ask_before_unload: true,
                autosave_interval: '30s',
                autosave_prefix: '{path}{query}-{id}-',
                autosave_restore_when_empty: false,
                autosave_retention: '2m',
                importcss_append: true,
                height: 400,
                image_caption: true,
                noneditable_noneditable_class: 'mceNonEditable',
                toolbar_mode: 'sliding',
                skin: useDarkMode ? 'oxide-dark' : 'oxide',
                content_css: useDarkMode ? 'dark' : 'default',
                content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
            });
        </script>
    @endpush
</x-guest-layout>
