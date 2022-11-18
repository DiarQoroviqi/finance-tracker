<x-form-section submit="createIncome">
    <x-slot name="title">
        {{ __('Income Details') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Create new income.') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-label for="type" value="{{ __('Category') }}"/>

            <x-select id="category_id" name="category_id"
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

        <div x-data="{ repeating: false }" class="col-span-6 sm:col-span-4 rounded-md bg-yellow-50 p-4">
            <div class="relative flex items-start">
                <div class="flex h-5 items-center">
                    <x-input type="checkbox" x-model="repeating" wire:model="repeating" name="repeating" />
                    <x-input-error for="repeating" class="mt-2"/>
                </div>
                <div class="ml-3 text-sm">
                    <span id="comments-description" class="text-gray-500">{{ __('Repeating Transaction on a regular basis.') }}</span>
                </div>
            </div>

            <div x-show="repeating" class="flex space-x-4 mt-2">
                <div class="w-full">
                    <x-label for="period_type" value="{{ __('Every') }}"/>

                    <x-select id="period" name="period"
                              class="mt-1"
                              :default="__('Select period')"
                              :options="$periods"
                              wire:model="repeatingState.period"/>

                    <x-input-error for="period" class="mt-2"/>
                </div>

                <div class="w-full">
                    <x-label for="period_type" value="{{ __('Period Type') }}"/>

                    <x-select  id="period_type" name="period_type"
                               class="mt-1"
                               :default="__('Select period type')"
                               :options="$transactionRepeatingTypes"
                               wire:model="repeatingState.period_type"/>

                    <x-input-error for="period_type" class="mt-2"/>
                </div>
            </div>

            <div x-show="repeating" class="mt-2">
                <x-label for="ends_at" value="{{ __('Ends At') }}"/>

                <x-input class="mt-1 block w-full" type="date"
                         id="ends_at" name="ends_at"
                         wire:model.defer="repeatingState.ends_at"/>

                <x-input-error for="ends_at" class="mt-2"/>
            </div>

            <div x-show="repeating" class="mt-2">
                <x-label for="confirmation_type" value="{{ 'Confirmation Type' }}" />

                <x-select  id="confirmation_type" name="confirmation_type"
                           class="mt-1"
                           :default="__('Select confirmation type')"
                           :options="$transactionConfirmTypes"
                           wire:model="repeatingState.confirmation_type"/>

                <x-input-error for="confirmation_type" class="mt-2"/>
            </div>
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="note" value="{{ __('Note') }}"/>

            <x-text-area class="mt-1 block w-full"
                         id="note" name="note"
                         wire:model.defer="state.note">
            </x-text-area>

            <x-input-error for="note" class="mt-2"/>
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-button>
            {{ __('Create') }}
        </x-button>
    </x-slot>
</x-form-section>
