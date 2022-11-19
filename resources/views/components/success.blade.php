@if (session()->has('success'))
    <div
        x-data="{ show: true }" x-show="show" x-transition.duration.700ms
        class="rounded-md bg-green-50 p-4"
    >
        <div class="flex">
            <div class="flex-shrink-0">
                <x-icons.check-circle class="h-5 w-5 text-green-400"></x-icons.check-circle>
            </div>
            <div class="ml-3">
                <p class="text-sm font-medium text-green-800">{{ session('success') }}</p>
            </div>
            <div class="ml-auto pl-3">
                <div class="-mx-1.5 -my-1.5">
                    <button @click="show = false"
                        type="button" class="inline-flex rounded-md bg-green-50 p-1.5 text-green-500 hover:bg-green-100 focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-offset-2 focus:ring-offset-green-50">
                        <span class="sr-only">Dismiss</span>
                        <x-icons.x-mark class="h-5 w-5"></x-icons.x-mark>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endif
