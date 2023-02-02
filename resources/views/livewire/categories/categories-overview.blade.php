<div>
    <div class="sm:flex sm:items-center">
        <div class="mt-4 sm:mt-0 sm:flex-none">
            <x-button
                type="button"
                class="text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 justify-center text-sm"
                wire:click="$emit('openModal', 'categories.create-category')"
            >
                <x-icon name="plus-circle" class="w-6 h-6 mr-2" /> New Category
            </x-button>
        </div>
    </div>
    <div class="mt-8 flex flex-col">
        <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-300">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Name
                            </th>
                            <th scope="col" class="py-3.5 text-left text-sm font-semibold text-gray-900">Chart Color</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Created At</th>
                            <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                <span class="sr-only">Actions</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                            @foreach($categories as $category)
                                <tr>
                                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                        {{ $category->name }}
                                    </td>
                                    <td>
                                        <div class="h-6 w-6" style="background-color: {{ $category->chart_color }}"></div>
                                    </td>
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                        {{ $category->created_at->toDateTimeString() }}
                                    </td>
                                    <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6 flex justify-end">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900 border-2 mr-4 border border-indigo-600 hover:border-black-600 rounded-md">
                                            <x-icon name="pencil" class="w-8 h-8 p-1 hover:text-black-600" />
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
