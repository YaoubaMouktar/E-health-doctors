<nav x-data="{ open: false }" class="fixed w-full top-0 bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
               <!--  <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div> -->
                <!-- Logo et Nom de la plateforme -->
                    <a href="{{ route('dashboard')}}" class="flex items-center">
                        <div class="flex-shrink-0">
                            <i class="fas fa-heartbeat text-blue-600 text-3xl"></i>
                        </div>
                        <div class="ml-3">
                            <h1 class="text-2xl font-bold text-gray-900">E-Health<span class="text-blue-600">Pro</span></h1>
                            <p class="text-sm text-gray-500">Plateforme Médicale</p>
                        </div>
                    </a>

                <!-- Navigation Links -->
                <!-- <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div> -->
            </div>
            <!-- Menu utilisateur -->
<!--                    <div class="flex items-center space-x-4">

                        <div class="relative">
                            <button id="notificationBtn" class="p-2 text-gray-600 hover:text-blue-600">
                                <i class="fas fa-bell text-xl"></i>
                                <span class="absolute top-0 right-0 block h-2 w-2 rounded-full bg-red-500"></span>
                            </button>
                        </div>
                        
                        <div class="relative" x-data="{ open: false }">
                            
                                <button @click="open = !open" class="flex items-center space-x-3 p-2 rounded-lg hover:bg-gray-100">
                                    <div class="flex-shrink-0">
                                        <div class="h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center">
                                            <span class="text-blue-600 font-semibold">DR</span>
                                        </div>
                                    </div>
                                    <div class="hidden md:block text-left">
                                        <p class="text-sm font-medium text-gray-900">dr.</p>
                                         <x-slot name="trigger">
                                            <p class="text-xs text-gray-500">{{ Auth::user()->name }}</p>
                                        </x-slot>
                                    </div>
                                    <i class="fas fa-chevron-down text-gray-500"></i>
                                </button>
                          
                            
                            <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-10">
                                <a href="{{ route('profile.edit')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    <i class="fas fa-user mr-2"></i>Mon Profil
                                </a>
                                <a href="{{ route('profile.edit')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    <i class="fas fa-cog mr-2"></i>Paramètres
                                </a>
                                <hr class="my-1">
                                <a :href="route('logout')" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100" onclick="event.preventDefault(); this.closest('form').submit();">
                                    <i class="fas fa-sign-out-alt mr-2"></i>Déconnexion
                                </a>
                            </div>
                        </div>
                    </div>
 -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                   

                    <x-slot name="trigger">
                        <button id="notificationBtn" class="p-2 text-gray-600 hover:text-blue-600">
                                <i class="fas fa-bell text-xl"></i>
                                <span class="absolute top-0 right-15 block h-2 w-2 rounded-full bg-red-500"></span>
                            </button>

                        
                            <button class="inline-flex items-center px-5 py-4 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 hover:bg-gray-100 hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>
                                Dr.
                             {{ Auth::user()->name }}

                            </div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>

                            </div>

                        </button>
                        
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                          <i class="fas fa-user mr-2"></i>  {{ __('Profile') }}
                        </x-dropdown-link>
                        <hr class="my-1">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();" class="text-red-400">
                                <i class="fas fa-sign-out-alt mr-2 text-red-400"></i> {{ __('Deconnexion') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">