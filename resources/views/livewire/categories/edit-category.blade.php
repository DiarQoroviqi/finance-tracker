<div>
    <x-modal-form-section submit="updateCategory">
        <x-slot name="title">
            {{ __('Create Category') }}
        </x-slot>

        <x-slot name="form">
            <div>
                <x-label for="name" value="{{ __('Name') }}"/>

                <x-input label="Name"
                         class="mt-1 block w-full"
                         wire:model.defer="state.name"/>
            </div>
            <div>
                <x-color-picker label="Select a Color"
                                placeholder="Select category color for charts"
                                class="mt-1 block w-full"
                                wire:model.defer="state.chart_color"/>
            </div>
        </x-slot>

        <x-slot name="actions">
            <x-button red type="button" class="mr-2" wire:click="closeModal"
                      wire:click="$emit('openModal', 'categories.delete-category', {{ json_encode(['category' => $category->id])  }})">
                {{ __('Delete') }}
            </x-button>

            <x-button white type="button" class="ml-auto mr-2" wire:click="closeModal">
                {{ __('Close') }}
            </x-button>

            <x-button primary type="submit">
                {{ __('Update') }}
            </x-button>
        </x-slot>
    </x-modal-form-section>
</div>
