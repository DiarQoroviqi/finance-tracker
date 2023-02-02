<div>
    <div class="flex border-b-2 border-grey-400 justify-items-center w-1/2">
        <div class="w-full">
            <x-select wire:model="month"
                      class="justify-between w-1/2 mb-2"
                      id="month" name="month"
                      :default="__('Select month')"
                      :options="$months"
            />
        </div>
    </div>
    <div class="flex mt-4 w-1/2">
        <ul role="list" class="divide-y divide-gray-200 w-full">
            <li class="flex py-4">
                <x-icons.plus-circle class="h-10 w-10 stroke-green-700"></x-icons.plus-circle>
                <div class="ml-3 flex-1">
                    <p class="text-sm font-medium text-gray-900">Calvin Hawkins</p>
                    <p class="text-sm text-gray-500">calvin.hawkins@example.com</p>
                </div>
                <div class='ml-auto flex items-center justify-center'>
                    <button>Add</button>
                    <button class="ml-3">Add</button>
                </div>
            </li>

            <li class="flex py-4">
                <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                <div class="ml-3">
                    <p class="text-sm font-medium text-gray-900">Kristen Ramos</p>
                    <p class="text-sm text-gray-500">kristen.ramos@example.com</p>
                </div>
            </li>

            <li class="flex py-4">
                <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                <div class="ml-3">
                    <p class="text-sm font-medium text-gray-900">Ted Fox</p>
                    <p class="text-sm text-gray-500">ted.fox@example.com</p>
                </div>
            </li>
        </ul>
    </div>

    <x-confirmation-modal wire:model="confirmDeleteIncome">
        <x-slot name="title">
            {{ __('Leave Team') }}
        </x-slot>

        <x-slot name="content">
            {{ __('Are you sure you would like to leave this team?') }}
        </x-slot>

        <x-slot name="footer">
            footer buttons
{{--            <x-jet-secondary-button wire:click="$toggle('confirmDeleteIncome')" wire:loading.attr="disabled">--}}
{{--                {{ __('Cancel') }}--}}
{{--            </x-jet-secondary-button>--}}

{{--            <x-jet-danger-button class="ml-3" wire:click="leaveTeam" wire:loading.attr="disabled">--}}
{{--                {{ __('Leave') }}--}}
{{--            </x-jet-danger-button>--}}
        </x-slot>
    </x-confirmation-modal>
</div>
