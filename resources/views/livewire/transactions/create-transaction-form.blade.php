<x-form-section submit="createTransaction">
    <x-slot name="title">
        {{ __('Transaction Details') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Create a new transaction.') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-label for="type" value="{{ __('Transaction Type') }}"/>

            <x-select id="type" name="type"
                      :default="__('Select type')"
                      :options="$transactionTypes"
                      wire:model="type"/>

            <x-input-error for="type" class="mt-2"/>
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="type" value="{{ __('Category') }}"/>

            <x-select id="category_od" name="category_id"
                      :default="__('Select category')"
                      :options="$categories"
                      wire:model.defer="state.category_id"/>

            <x-input-error for="category_id" class="mt-2"/>
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="date" value="{{ __('Date') }}"/>

            <x-input class="mt-1 block w-full" type="date"
                     id="date" name="date"
                     wire:model.defer="state.date"/>

            <x-input-error for="date" class="mt-2"/>
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="amount" value="{{ __('Amount') }}"/>

            <x-input class="mt-1 block w-full" type="number"
                     id="amount" name="amount" min="1"
                     wire:model.defer="state.amount"/>

            <x-input-error for="amount" class="mt-2"/>
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="note" value="{{ __('Note') }}"/>

            <x-text-area class="mt-1 block w-full"
                    id="note" name="note"
                    wire:model.defer="state.note">
            </x-text-area>

            <x-input-error for="amount" class="mt-2"/>
        </div>

    </x-slot>

    <x-slot name="actions">
        <x-button>
            {{ __('Create') }}
        </x-button>
    </x-slot>
</x-form-section>
