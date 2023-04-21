@extends('layout')

@push('styles')
@endpush

@push('body_style')
    class="bg-gray-100"
@endpush

@section('content')
    <div x-data="setup()" x-init="$refs.loading.classList.add('hidden');" @resize.window="watchScreen()">
        <div class="flex min-h-screen inset-y-0 antialiased text-gray-900 dark:bg-dark dark:text-light">
            <!-- Loading screen -->
            <div x-ref="loading"
                class="fixed inset-0 z-50 flex items-center justify-center text-2xl font-semibold text-white bg-indigo-800">
                Loading.....
            </div>
            <!-- Sidebar -->
            <div class="flex flex-shrink-0 transition-all">
                <div x-show="isSidebarOpen" @click="isSidebarOpen = false"
                    class="fixed inset-0 z-10 bg-black bg-opacity-50 lg:hidden"></div>
                <div x-show="isSidebarOpen" class="fixed inset-y-0 z-10 w-16 bg-white"></div>
                <!-- Mobile bottom bar -->
                <nav aria-label="Options"
                    class="fixed inset-x-0 bottom-0 flex flex-row-reverse items-center justify-between px-4 py-2 bg-white border-t border-indigo-100 sm:hidden shadow-t rounded-t-3xl">
                    <!-- Menu button -->
                    <button
                        @click="(isSidebarOpen && currentSidebarTab == 'linksTab') ? isSidebarOpen = false : isSidebarOpen = true; currentSidebarTab = 'linksTab'"
                        class="p-2 transition-colors rounded-lg shadow-md hover:bg-indigo-800 hover:text-white focus:outline-none focus:ring focus:ring-indigo-600 focus:ring-offset-white focus:ring-offset-2"
                        :class="(isSidebarOpen && currentSidebarTab == 'linksTab') ? 'text-white bg-indigo-600' :
                        'text-gray-500 bg-white'">
                        <span class="sr-only">Toggle sidebar</span>
                        <svg aria-hidden="true" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h7" />
                        </svg>
                    </button>
                    <!-- Logo -->
                    <a href="{{ route('Dashboard.Menu.Index') }}">
                        <img class="w-10 h-auto"
                            src="https://raw.githubusercontent.com/kamona-ui/dashboard-alpine/main/public/assets/images/logo.png"
                            alt="K-UI" />
                    </a>
                    <!-- User avatar button -->
                    {{-- <div class="relative flex items-center flex-shrink-0 p-2" x-data="{ isOpen: false }">
                        <button @click="isOpen = !isOpen; $nextTick(() => {isOpen ? $refs.userMenu.focus() : null})"
                            class="transition-opacity rounded-lg opacity-80 hover:opacity-100 focus:outline-none focus:ring focus:ring-indigo-600 focus:ring-offset-white focus:ring-offset-2">
                            <img class="w-8 h-8 rounded-lg shadow-md"
                                src="https://avatars.githubusercontent.com/u/57622665?s=460&u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&v=4"
                                alt="Ahmed Kamel" />
                            <span class="sr-only">User menu</span>
                        </button>
                        <div x-show="isOpen" @click.away="isOpen = false" @keydown.escape="isOpen = false" x-ref="userMenu"
                            tabindex="-1"
                            class="absolute w-48 py-1 mt-2 origin-bottom-left bg-white rounded-md shadow-lg left-10 bottom-14 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-label="user menu">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                role="menuitem">Your Profile</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                role="menuitem">Settings</a>
                            <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Sign out</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div> --}}
                </nav>
                <!-- Left mini bar -->
                <nav aria-label="Options"
                    class="z-20 flex-col items-center flex-shrink-0 hidden w-16 py-4 bg-white border-r-2 border-indigo-100 shadow-md sm:flex rounded-tr-3xl rounded-br-3xl">
                    <!-- Logo -->
                    <div class="flex-shrink-0 py-4">
                        <a href="{{ route('Dashboard.Menu.Index') }}">
                            <img class="w-10 h-auto"
                                src="https://raw.githubusercontent.com/kamona-ui/dashboard-alpine/main/public/assets/images/logo.png"
                                alt="K-UI" />
                        </a>
                    </div>
                    <div class="flex flex-col items-center flex-1 p-2 space-y-4">
                        <!-- Menu button -->
                        <button
                            @click="(isSidebarOpen && currentSidebarTab == 'linksTab') ? isSidebarOpen = false : isSidebarOpen = true; currentSidebarTab = 'linksTab'"
                            class="p-2 transition-colors rounded-lg shadow-md hover:bg-indigo-800 hover:text-white focus:outline-none focus:ring focus:ring-indigo-600 focus:ring-offset-white focus:ring-offset-2"
                            :class="(isSidebarOpen && currentSidebarTab == 'linksTab') ? 'text-white bg-indigo-600' :
                            '{{ request()->is('Dashboard/Admin*') ? 'text-white bg-indigo-600' : 'text-gray-500 bg-white' }}'">
                            {{-- 'text-gray-500 bg-white'"> --}}
                            <span class="sr-only">Toggle sidebar</span>
                            <svg aria-hidden="true" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h7" />
                            </svg>
                        </button>
                        <!-- Panel button -->
                        <button
                            @click="(isSidebarOpen && currentSidebarTab == 'panelTab') ? isSidebarOpen = false : isSidebarOpen = true; currentSidebarTab = 'panelTab'"
                            class="p-2 transition-colors rounded-lg shadow-md hover:bg-indigo-800 hover:text-white focus:outline-none focus:ring focus:ring-indigo-600 focus:ring-offset-white focus:ring-offset-2"
                            :class="(isSidebarOpen && currentSidebarTab == 'panelTab') ? 'text-white bg-indigo-600' :
                            '{{ request()->is('Dashboard/Panel/*') ? 'text-white bg-indigo-600' : 'text-gray-500 bg-white' }}'">
                            <span class="sr-only">Toggle panel</span>
                            <svg aria-hidden="true" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 01-1.125-1.125M3.375 19.5h7.5c.621 0 1.125-.504 1.125-1.125m-9.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-7.5A1.125 1.125 0 0112 18.375m9.75-12.75c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125m19.5 0v1.5c0 .621-.504 1.125-1.125 1.125M2.25 5.625v1.5c0 .621.504 1.125 1.125 1.125m0 0h17.25m-17.25 0h7.5c.621 0 1.125.504 1.125 1.125M3.375 8.25c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m17.25-3.75h-7.5c-.621 0-1.125.504-1.125 1.125m8.625-1.125c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M12 10.875v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125M13.125 12h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125M20.625 12c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5M12 14.625v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 14.625c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m0 1.5v-1.5m0 0c0-.621.504-1.125 1.125-1.125m0 0h7.5" />
                            </svg>
                        </button>
                        <!-- Messages button -->
                        <button
                            @click="(isSidebarOpen && currentSidebarTab == 'messagesTab') ? isSidebarOpen = false : isSidebarOpen = true; currentSidebarTab = 'messagesTab'"
                            class="p-2 transition-colors rounded-lg shadow-md hover:bg-indigo-800 hover:text-white focus:outline-none focus:ring focus:ring-indigo-600 focus:ring-offset-white focus:ring-offset-2"
                            :class="(isSidebarOpen && currentSidebarTab == 'messagesTab') ? 'text-white bg-indigo-600' :
                            'text-gray-500 bg-white'">
                            <span class="sr-only">Toggle message panel</span>
                            <svg aria-hidden="true" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                            </svg>
                        </button>
                        <!-- Notifications button -->
                        <button
                            @click="(isSidebarOpen && currentSidebarTab == 'notificationsTab') ? isSidebarOpen = false : isSidebarOpen = true; currentSidebarTab = 'notificationsTab'"
                            class="p-2 transition-colors rounded-lg shadow-md hover:bg-indigo-800 hover:text-white focus:outline-none focus:ring focus:ring-indigo-600 focus:ring-offset-white focus:ring-offset-2"
                            :class="(isSidebarOpen && currentSidebarTab == 'notificationsTab') ?
                            'text-white bg-indigo-600' :
                            'text-gray-500 bg-white'">
                            <span class="sr-only">Toggle notifications panel</span>
                            <svg aria-hidden="true" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </button>
                    </div>
                    <!-- User avatar -->
                    {{-- <div class="relative flex items-center flex-shrink-0 p-2" x-data="{ isOpen: false }">
                        <button @click="isOpen = !isOpen; $nextTick(() => {isOpen ? $refs.userMenu.focus() : null})"
                            class="transition-opacity rounded-lg opacity-80 hover:opacity-100 focus:outline-none focus:ring focus:ring-indigo-600 focus:ring-offset-white focus:ring-offset-2">
                            <img class="w-10 h-10 rounded-lg shadow-md"
                                src="https://avatars.githubusercontent.com/u/57622665?s=460&u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&v=4"
                                alt="Ahmed Kamel" />
                            <span class="sr-only">User menu</span>
                        </button>
                        <div x-show="isOpen" @click.away="isOpen = false" @keydown.escape="isOpen = false"
                            x-ref="userMenu" tabindex="-1"
                            class="absolute w-48 py-1 mt-2 origin-bottom-left bg-white rounded-md shadow-lg left-10 bottom-14 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-label="user menu">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                role="menuitem">Your Profile</a>

                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                role="menuitem">Settings</a>

                            <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Sign
                                out</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div> --}}
                </nav>
                <div x-transition:enter="transform transition-transform duration-300"
                    x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
                    x-transition:leave="transform transition-transform duration-300"
                    x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full"
                    x-show="isSidebarOpen"
                    class="fixed inset-y-0 left-0 z-10 flex-shrink-0 w-64 bg-white border-r-2 border-indigo-100 shadow-lg sm:left-14 rounded-tr-3xl rounded-br-3xl sm:w-72 lg:w-64">
                    <nav x-show="currentSidebarTab == 'linksTab'" aria-label="Main" class="flex flex-col h-full">
                        <!-- Logo -->
                        <div class="flex items-center justify-center flex-shrink-0 py-10">
                            <a href="{{ route('Dashboard.Menu.Index') }}">
                                <img class="w-24 h-auto"
                                    src="https://raw.githubusercontent.com/kamona-ui/dashboard-alpine/main/public/assets/images/logo.png"
                                    alt="K-UI" />
                            </a>
                        </div>
                        <!-- Title -->
                        <section class="px-4 py-6">
                            <h2 class="text-xl">Admin</h2>
                        </section>
                        <!-- Links -->
                        <div class="flex-1 px-4 space-y-2 overflow-hidden hover:overflow-auto">
                            <x-Sidebar.ItemNavigation href="Dashboard.Menu.Index"
                                svg="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                                name="Home" />
                            @can('View Permissions')
                                <x-Sidebar.ItemNavigation href="Dashboard.Admin.Permissions.Index"
                                    svg="M3.783 2.826L12 1l8.217 1.826a1 1 0 0 1 .783.976v9.987a6 6 0 0 1-2.672 4.992L12 23l-6.328-4.219A6 6 0 0 1 3 13.79V3.802a1 1 0 0 1 .783-.976zM5 4.604v9.185a4 4 0 0 0 1.781 3.328L12 20.597l5.219-3.48A4 4 0 0 0 19 13.79V4.604L12 3.05 5 4.604zM12 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm-4.473 5a4.5 4.5 0 0 1 8.946 0H7.527z"
                                    name="Permissions" />
                            @endcan
                            @can('View Roles')
                                <x-Sidebar.ItemNavigation href="Dashboard.Admin.Roles.Index"
                                    svg="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"
                                    name="Roles" />
                            @endcan
                            @can('View Users')
                                <x-Sidebar.ItemNavigation href="Dashboard.Admin.Users.Index"
                                    svg="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"
                                    name="Users" />
                            @endcan
                            <x-Sidebar.ItemNavigation href="Dashboard.Admin.Persons.Index"
                                svg="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"
                                name="Persons" />
                            <x-Sidebar.ItemNavigation href="Dashboard.Admin.Equipments.Index"
                                svg="M7 15m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0l0 .01zM19 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0zM10.5 17l6.5 0zM20 15.2v-4.2a1 1 0 0 0 -1 -1h-6l-2 -5h-6v6.5zM18 5h-1a1 1 0 0 0 -1 1v4z"
                                name="Equipments" />
                            <x-Sidebar.ItemNavigation href="Dashboard.Admin.Rents.Index"
                                svg="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z"
                                name="Rents" />
                        </div>
                    </nav>
                    <nav x-show="currentSidebarTab == 'panelTab'" aria-label="Main" class="flex flex-col h-full">
                        <!-- Title -->
                        <section class="px-4 py-6">
                            <h2 class="text-xl">Panel</h2>
                        </section>
                        <!-- Links -->
                        <div class="flex-1 px-4 space-y-2 overflow-hidden hover:overflow-auto">
                            <x-Sidebar.ItemNavigation href="Dashboard.Admin.Persons.Panel"
                                svg="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"
                                name="Persons" />
                            {{-- <x-Sidebar.ItemNavigation href="Dashboard.Admin.Equipments.Panel"
                                svg="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12"
                                name="Equipments" /> --}}
                            <x-Sidebar.ItemNavigation href="Dashboard.Admin.Equipments.Panel"
                                svg="M7 15m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0l0 .01zM19 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0zM10.5 17l6.5 0zM20 15.2v-4.2a1 1 0 0 0 -1 -1h-6l-2 -5h-6v6.5zM18 5h-1a1 1 0 0 0 -1 1v4z"
                                name="Equipments" />
                            <x-Sidebar.ItemNavigation href="Dashboard.Admin.Rents.Panel"
                                svg="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z"
                                name="Rents" />
                            <x-Sidebar.ItemNavigation href="Dashboard.Admin.FixedExpenses.Panel"
                                svg="M20.98,6.3c0.23,0.37,0.05,0.83-0.4,1.02c-0.45,0.19-1.01,0.04-1.24-0.33c-0.01-0.01-0.01-0.02-0.01-0.03C18.77,6.03,18,5.2,17.04,4.52c-0.96-0.44-2.18-0.16-2.72,0.64c-0.17,0.25-0.25,0.52-0.25,0.81l0,0.84c0,0.36-0.35,0.65-0.79,0.65l-4.12,0c-0.44,0-0.79-0.29-0.79-0.65l0,0.1c0-0.32-0.11-0.63-0.33-0.9C8,5.95,7.95,5.9,7.91,5.84c-0.71-0.7-1.97-0.79-2.81-0.2c-0.16,0.11-0.3,0.24-0.41,0.39C4.47,6.41,3.93,6.59,3.46,6.42c-0.33-0.12-0.55-0.4-0.55-0.7l0-3.13c0-0.42,0.41-0.76,0.92-0.76c0.38,0,0.72,0.19,0.86,0.48c0.6,0.76,1.83,0.98,2.76,0.49C7.6,2.71,7.74,2.61,7.86,2.5C7.93,2.42,8,2.33,8.08,2.25L8.1,2.23l0,0c0.68-0.68,1.7-1.08,2.77-1.08l0.05,0c0.03,0,0.06,0,0.1,0C15.26,1.15,19.13,3.15,20.98,6.3L20.98,6.3zM13.28,9.21c0-0.36-0.35-0.65-0.79-0.65l-2.85,0c-0.44,0-0.79,0.29-0.79,0.65l0.01,12.98c0,0.36,0.35,0.65,0.79,0.65l2.85,0c0.44,0,0.79-0.29,0.79-0.65L13.28,9.21z"
                                name="FixedExpenses" />
                        </div>
                    </nav>
                    <section x-show="currentSidebarTab == 'messagesTab'" class="px-4 py-6">
                        <h2 class="text-xl">Messages</h2>
                    </section>
                    <section x-show="currentSidebarTab == 'notificationsTab'" class="px-4 py-6">
                        <h2 class="text-xl">Notifications</h2>
                    </section>
                </div>
            </div>
            <div class="flex-col flex-1">
                @include('Dashboard.Components.Navbar')
                <div class="flex flex-1">
                    <!-- Main -->
                    <main class="justify-center flex-1 px-4">
                        <!-- Content -->
                        @include('Dashboard.Components.Notification')
                        @include('Dashboard.Routes.Menu')

                        @can('View Permissions')
                            @include('Dashboard.Routes.Permissions')
                        @endcan
                        @can('View Roles')
                            @include('Dashboard.Routes.Roles')
                        @endcan
                        @can('View Users')
                            @include('Dashboard.Routes.Users')
                        @endcan
                        @include('Dashboard.Routes.Persons')
                        @include('Dashboard.Routes.Equipments')
                        @include('Dashboard.Routes.Rents')
                        @include('Dashboard.Routes.Panels')
                    </main>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        const setup = () => {
            return {
                isSidebarOpen: false,
                currentSidebarTab: null,
                isSubHeaderOpen: false,
                watchScreen() {
                    if (window.innerWidth <= 1024) {
                        this.isSidebarOpen = false
                    }
                },
            }
        }
        $(window).scroll(function() {
            var sidebar = $(".left-mini-bar");
            var offset = sidebar.offset();
            var topPadding = 15;
        });
        if (typeof objeto !== 'undefined') {
            // leer la propiedad 'top' del objeto
        }
    </script>
@endpush
