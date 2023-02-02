<div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
    <div
        class="relative transform overflow-hidden rounded-lg bg-white px-4 pt-5 pb-4 text-left transition-all sm:my-8 sm:w-full sm:max-w-lg sm:p-6">
        <div class="sm:flex sm:items-start">
            <div
                class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                <x-icon name="exclamation-circle" class="h-6 w-6 text-red-600"></x-icon>
            </div>
            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                <h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-title">Delete category</h3>
                <div class="mt-2">
                    <p class="text-sm text-gray-500">Are you sure you want to delete your category?</p>
                </div>
            </div>
        </div>
        <div class="mt-5 sm:mt-4 sm:flex justify-end">
            <x-button white type="button" wire:click="$emit('closeModal')" class="sm:ml-auto">
                Cancel
            </x-button>
            <x-button red type="button" wire:click="delete" class="sm:ml-3">
                Delete
            </x-button>
        </div>
    </div>
</div>
