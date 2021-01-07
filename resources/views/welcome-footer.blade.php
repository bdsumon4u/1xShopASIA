<footer class="bg-gray-50 text-gray-600 body-font">
    <div
        class="container px-5 md:px-15 lg:px-20 py-14 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
        <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
            <a href="={{ url('/') }}"
               class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                <img src="{{ app_logo() }}"
                     class="block h-7 w-auto"/>
            </a>
            <p class="mt-2 text-sm text-gray-500">{{ $tagline }}</p>
        </div>
        <div class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">
            <div class="md:w-3/4 w-full px-4">

            </div>
            <div class="md:w-1/4 w-full px-4">
                <h2 class="title-font font-medium text-gray-900 tracking-widest font-bold mb-3">Need Help?</h2>
                <nav class="list-none mb-10">
                    <li>
                        <a class="text-gray-600 hover:text-gray-800">First Link</a>
                    </li>
                    <li>
                        <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                    </li>
                    <li>
                        <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                    </li>
                    <li>
                        <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                    </li>
                </nav>
            </div>
        </div>
    </div>
    <div class="bg-gray-100">
        <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
            <p class="text-gray-500 text-sm text-center sm:text-left">© {{ date('Y') }} — {{ setting('company_name', config('app.name')) }}</p>
            <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
                @inject('social', App\Http\Livewire\Admin\SocialSetting')
                @foreach($social->names as $name)
                    @if($url = $social->{$name.'_url'})
                        <x-a :href="$url" class="text-gray-500 {{ $loop->first ? '' : 'ml-3' }}">
                          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round"
                               stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            {!! $social->svg[$name] !!}
                          </svg>
                        </x-a>
                    @endif
                @endforeach
                @unset($social, $name, $url)
            </span>
        </div>
    </div>
</footer>
