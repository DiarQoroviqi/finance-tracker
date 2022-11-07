<div x-data="{ open: false }" @keydown.window.escape="open = false">
    <div x-show="open" class="relative z-40 md:hidden" x-ref="dialog" aria-modal="true">
        <div x-show="open" x-transition:enter="transition-opacity ease-linear duration-300"
             x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
             x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             x-description="Off-canvas menu backdrop, show/hide based on off-canvas menu state."
             class="fixed inset-0 bg-gray-600 bg-opacity-75"></div>

        <div class="fixed inset-0 z-40 flex">
            <div @click.away="open = false" x-show="open"
                 class="relative flex w-full max-w-xs flex-1 flex-col bg-white pt-5 pb-4"
                 x-transition:enter="transition ease-in-out duration-300 transform"
                 x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
                 x-transition:leave="transition ease-in-out duration-300 transform"
                 x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full"
                 x-description="Off-canvas menu, show/hide based on off-canvas menu state.">
                <div x-show="open" x-transition:enter="ease-in-out duration-300" x-transition:enter-start="opacity-0"
                     x-transition:enter-end="opacity-100" x-transition:leave="ease-in-out duration-300"
                     x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                     x-description="Close button, show/hide based on off-canvas menu state."
                     class="absolute top-0 right-0 -mr-12 pt-2">
                    <button @click="open = ! open" type="button"
                            class="ml-1 flex h-10 w-10 items-center justify-center rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                        <span class="sr-only">Close sidebar</span>
                        <x-icons.x-mark class="h-6 w-6 text-white"></x-icons.x-mark>
                    </button>
                </div>

                <div class="flex flex-shrink-0 items-center px-4">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-10 w-auto fill-current text-gray-600"/>
                    </a>
                </div>

                <div class="mt-5 h-0 flex-1 overflow-y-auto">
                    <nav class="space-y-1 px-2">
                        <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                            <x-icons.home :active="request()->routeIs('dashboard')"></x-icons.home>
                            {{ __('Dashboard') }}
                        </x-responsive-nav-link>
                    </nav>
                </div>
            </div>

            <div class="w-14 flex-shrink-0" aria-hidden="true">
                <!-- Dummy element to force sidebar to shrink to fit close icon -->
            </div>
        </div>
    </div>
    <!-- Static sidebar for desktop -->
    <div class="hidden md:fixed md:inset-y-0 md:flex md:w-64 md:flex-col">
        <div class="flex flex-grow flex-col overflow-y-auto border-r border-gray-200 bg-white pt-5">
            <div class="flex flex-shrink-0 items-center px-4">
                <a href="{{ route('dashboard') }}">
                    <x-application-logo class="block h-10 w-auto fill-current text-gray-600"/>
                </a>
            </div>
            <div class="mt-5 flex flex-grow flex-col">
                <nav class="flex-1 space-y-1 px-2 pb-4">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        <x-icons.home :active="request()->routeIs('dashboard')"></x-icons.home>
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </nav>
            </div>
        </div>
    </div>

    @include('layouts.navbar')
</div>
