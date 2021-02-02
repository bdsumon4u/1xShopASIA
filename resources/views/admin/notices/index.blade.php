<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notices') }}
        </h2>
    </x-slot>

    <div class="px-2 md:px-0 py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg"><!-- component -->
                <div class="text-gray-900 bg-gray-200">
                    <h2 class="p-3 text-xl leading-8 font-extrabold tracking-tight text-gray-700 sm:text-2xl flex justify-between" style="font-family: Audiowide">
                        <sapn>Notices</sapn>
                        <x-a class="py-1 px-2 md:px-3 rounded bg-teal-400 text-white font-bold hover:bg-teal-300" :href="route('admin.notices.create')">Create New</x-a>
                    </h2>
                    <div class="overflow-x-auto bg-white shadow overflow-y-auto relative">
                        <table class="border-collapse table-auto w-full whitespace-no-wrap bg-white table-striped relative min-w-full divide-y divide-gray-200">
                            <thead class="py-2 px-3 sticky top-0 border-b border-gray-200 bg-gray-100">
                            <tr>
                                <th class="p-3 bg-gray-200 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Type
                                </th>
                                <th class="p-3 bg-gray-200 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Title
                                </th>
                                <th class="text-right p-3 bg-gray-200 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Actions
                                </th>
                            </tr>
                            </thead>

                            <tbody class="bg-white divide-y divide-gray-200">
                            @forelse($notices as $notice)
                                <tr class="p-3 whitespace-nowrap @if($loop->even) bg-gray-200 @endif hover:bg-gray-100">
                                    <td class="p-3 border-b border-gray-200 text-sm">
                                        {{ ucwords(str_replace('-', ' ', $notice->type)) }}
                                    </td>
                                    <td class="p-3 border-b border-gray-200 text-sm">
                                        {{ $notice->title }}
                                    </td>
                                    <td class="flex p-3 border-b border-gray-200 text-sm">
                                        <x-form method="DELETE" :action="route('admin.notices.destroy', $notice)" class="flex ml-auto">
                                            <x-a :href="route('admin.notices.edit', $notice)" class="py-2 px-3 md:px-4 rounded bg-teal-400 text-white font-bold hover:bg-teal-300">Edit</x-a>
                                            <x-submit class="py-2 px-3 md:px-4 rounded bg-red-400 text-white font-bold hover:bg-red-300">Delete</x-submit>
                                        </x-form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="p-3 text-redish font-bold border-b border-gray-200 text-sm" colspan="3">No Notice Found.</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
