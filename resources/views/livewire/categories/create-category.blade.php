<div>
    <x-modal-form-section submit="create">
        <x-slot name="title">
            {{ __('Create Category') }}
        </x-slot>

        <x-slot name="form">
            <div>
                <x-label for="name" value="{{ __('Name') }}"/>

                <x-input label="Name"
                         class="mt-1 block w-full"
                         id="name" name="name"
                         wire:model.defer="name"/>
            </div>
            <div>
                <x-color-picker label="Select a Color"
                                placeholder="Select category color for charts"
                                class="mt-1 block w-full"
                                id="chart_color"
                                name="chart_color"
                                wire:model.defer="chart_color"/>
            </div>
        </x-slot>

        <x-slot name="actions">
            <x-button type="button" class="ml-auto mr-2" wire:click="closeModal">
                {{ __('Close') }}
            </x-button>

            <x-button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white rounded-md">
                {{ __('Create') }}
            </x-button>
        </x-slot>
    </x-modal-form-section>
</div>
