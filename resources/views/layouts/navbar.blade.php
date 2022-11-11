<!-- navbar -->
<div class="flex flex-1 flex-col md:pl-64">
    <div class="sticky top-0 z-10 flex h-16 flex-shrink-0 bg-white shadow">
        <button @click="open = true" type="button" class="border-r border-gray-200 px-4 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 md:hidden">
            <span class="sr-only">Open sidebar</span>
            <x-icons.bars-3-bottom-left class="h-6 w-6"></x-icons.bars-3-bottom-left>
        </button>
        <div class="flex flex-1 justify-end px-4">
            <div class="ml-4 flex items-center md:ml-6">
                <button type="button" class="rounded-full bg-white p-1 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    <span class="sr-only">View notifications</span>
                    <x-icons.bell class="h-6 w-6" ></x-icons.bell>
                </button>

                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <div class="relative-ml-3">
                            <div>
                                <button class="flex max-w-xs items-center rounder-full bg-white text-small focus:outline-none" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                    <span class="sr-only">Open user menu</span>
                                    <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                </button>
                            </div>
                        </div>
                    </x-slot>

                    <x-slot name="content">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                             onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
        </div>
    </div>
</div>
