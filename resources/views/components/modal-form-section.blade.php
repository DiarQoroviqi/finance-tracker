@props(['submit'])

<div class="shadow overflow-hidden sm:rounded-md h-full">
    <div class="bg-white px-4 py-5 border-b border-gray-200 sm:px-6">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            {{ $title }}
        </h3>
    </div>
    <form wire:submit.prevent="{{ $submit }}">
        <div class="px-4 py-5 bg-white sm:p-6">
            {{ $form }}
        </div>

        @if (isset($actions))
            <div class="px-4 py-3 bg-gray-50 flex sm:px-6">
                {{ $actions }}
            </div>
        @endif
    </form>
</div>


