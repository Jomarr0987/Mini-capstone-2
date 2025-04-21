<nav x-data="{ open: false }" class="bg-white shadow-lg sticky top-0 z-50 border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo/Brand -->
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex items-center space-x-2">
                    <svg class="h-8 w-8 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                    </svg>
                    <span class="text-xl font-bold text-gray-800 tracking-tight">Resort<span class="text-indigo-600">Booking</span></span>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden sm:ml-6 sm:flex sm:items-center sm:space-x-8">
                <!-- Navigation Links -->
                @auth
                <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')" class="relative group text-gray-700 hover:text-indigo-600 transition-colors duration-300">
                    Home
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-indigo-600 transition-all duration-300 group-hover:w-full"></span>
                </x-nav-link>

                <x-nav-link href="{{ route('resorts.index') }}" :active="request()->routeIs('resorts.index')" class="relative group text-gray-700 hover:text-indigo-600 transition-colors duration-300">
                    Resort List
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-indigo-600 transition-all duration-300 group-hover:w-full"></span>
                </x-nav-link>

                @role('admin')
                <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" class="relative group text-gray-700 hover:text-indigo-600 transition-colors duration-300">
                    Dashboard
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-indigo-600 transition-all duration-300 group-hover:w-full"></span>
                </x-nav-link>
                @endrole
                @endauth

                <!-- User Dropdown -->
                <div class="ml-4 flex items-center">
                    @auth
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="flex items-center space-x-2 focus:outline-none group">
                                    <div class="flex items-center justify-center w-8 h-8 rounded-full bg-indigo-100 text-indigo-700 font-medium">
                                        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                                    </div>
                                    <span class="font-medium text-gray-700 group-hover:text-indigo-600 transition-colors duration-200">
                                        {{ Auth::user()->name }}
                                    </span>
                                    <svg class="w-4 h-4 text-gray-400 group-hover:text-indigo-500 transition-colors duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <div class="py-1 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <x-dropdown-link href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); this.closest('form').submit();"
                                            class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition-colors duration-200">
                                            <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                            </svg>
                                            Log Out
                                        </x-dropdown-link>
                                    </form>
                                </div>
                            </x-slot>
                        </x-dropdown>
                    @else
                        <div class="flex items-center space-x-4">
                            <a href="{{ route('login') }}" class="px-4 py-2 rounded-md text-sm font-medium text-gray-700 hover:text-indigo-600 hover:bg-gray-50 transition-colors duration-200 border border-gray-200 hover:border-indigo-300">
                                Log in
                            </a>
                            <a href="{{ route('register') }}" class="px-4 py-2 rounded-md text-sm font-medium text-white bg-gradient-to-r from-indigo-600 to-indigo-500 hover:from-indigo-700 hover:to-indigo-600 shadow-sm transition-all duration-300 transform hover:-translate-y-0.5">
                                Register
                            </a>
                        </div>
                    @endauth
                </div>
            </div>

            <!-- Mobile menu button -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 transition duration-150 ease-in-out">
                    <span class="sr-only">Open main menu</span>
                    <svg x-show="!open" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg x-show="open" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div x-show="open" x-transition:enter="transition ease-out duration-100 transform" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-75 transform" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="sm:hidden">
        <div class="pt-2 pb-3 space-y-1 bg-white shadow-lg">
            @auth
            <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-indigo-800 hover:bg-indigo-50 hover:border-indigo-500 transition duration-150 ease-in-out">
                Home
            </x-nav-link>

            <x-nav-link href="{{ route('resorts.index') }}" :active="request()->routeIs('resorts.index')" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-indigo-800 hover:bg-indigo-50 hover:border-indigo-500 transition duration-150 ease-in-out">
                Resort List
            </x-nav-link>

            @role('admin')
            <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-indigo-800 hover:bg-indigo-50 hover:border-indigo-500 transition duration-150 ease-in-out">
                Dashboard
            </x-nav-link>
            @endrole
            @endauth

            @auth
            <div class="pt-4 pb-3 border-t border-gray-200">
                <div class="flex items-center px-4">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center w-10 h-10 rounded-full bg-indigo-100 text-indigo-700 font-medium">
                            {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                        </div>
                    </div>
                    <div class="ml-3">
                        <div class="text-base font-medium text-gray-800">{{ Auth::user()->name }}</div>
                    </div>
                </div>
                <div class="mt-3 space-y-1">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link href="{{ route('logout') }}"
                            onclick="event.preventDefault(); this.closest('form').submit();"
                            class="block px-4 py-2 text-base font-medium text-gray-500 hover:text-indigo-800 hover:bg-indigo-50 transition duration-150 ease-in-out">
                            Log Out
                        </x-dropdown-link>
                    </form>
                </div>
            </div>
            @else
            <div class="pt-4 pb-3 border-t border-gray-200">
                <div class="space-y-1">
                    <a href="{{ route('login') }}" class="block w-full px-4 py-2 text-left text-base font-medium text-gray-500 hover:text-indigo-800 hover:bg-indigo-50 transition duration-150 ease-in-out">
                        Log in
                    </a>
                    <a href="{{ route('register') }}" class="block w-full px-4 py-2 text-left text-base font-medium text-indigo-600 hover:text-indigo-800 hover:bg-indigo-50 transition duration-150 ease-in-out">
                        Register
                    </a>
                </div>
            </div>
            @endauth
        </div>
    </div>
</nav>
