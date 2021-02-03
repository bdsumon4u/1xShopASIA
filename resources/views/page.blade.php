<x-guest-layout>
    @push('styles')
        <style>
            #tinymce-content h1, h2, h3, h4, h5, h6, p {
                font-size: revert;
                margin-bottom: 0.5rem;
            }
            #tinymce-content ol, ul {
                padding: revert;
            }
            #tinymce-content > ol,
            #tinymce-content > ul {
                margin-bottom: 0.5rem;
            }
            #tinymce-content ol {
                counter-reset: item;
            }
            #tinymce-content ol li:before {
                content: counters(item, ".") ". ";
                counter-increment: item;
            }
            #tinymce-content ul {
                list-style-type: disc;
            }
            #tinymce-content ul ul {
                list-style-type: circle;
            }
            #tinymce-content ul ul ul {
                list-style-type: square;
            }
        </style>
    @endpush
    <div class="overflow-hidden shadow-md">
        <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
            <div id="tinymce-content" class="bg-white md:p-5 md:max-w-4xl mx-auto rounded-sm shadow-md">
                {!! $page->content !!}
            </div>
        </div>
    </div>
</x-guest-layout>
