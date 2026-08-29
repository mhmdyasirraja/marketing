<div class="sm:pl-64">
    <aside class="fixed inset-y-0 left-0 z-50 w-64 bg-white border-r border-gray-100 flex flex-col">
        <div class="h-16 flex items-center px-6 border-b border-gray-100">
            <a href="{{ route('dashboard') }}" wire:navigate>
                <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
            </a>
        </div>

        <nav class="flex-1 overflow-y-auto py-4 px-3 space-y-1">
            <a href="{{ route('dashboard') }}" wire:navigate
                class="block px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('dashboard') ? 'bg-indigo-50 text-indigo-700' : 'text-gray-600 hover:bg-gray-50' }}">
                {{ __('Dashboard') }}
            </a>
        </nav>

        <div class="border-t border-gray-100 p-3">
            <x-dropdown align="left" width="48">
                <x-slot name="trigger">
                    <button class="w-full flex items-center justify-between px-3 py-2 text-sm font-medium text-gray-600 hover:bg-gray-50 rounded-md">
                        <span class="truncate">{{ auth()->user()->name }}</span>
                    </button>
                </x-slot>
                <x-slot name="content">
                    <x-dropdown-link :href="route('profile')" wire:navigate>
                        {{ __('Profile') }}
                    </x-dropdown-link>
                    <button wire:click="logout" class="w-full text-start">
                        <x-dropdown-link>{{ __('Log Out') }}</x-dropdown-link>
                    </button>
                </x-slot>
            </x-dropdown>
        </div>
    </aside>
</div>