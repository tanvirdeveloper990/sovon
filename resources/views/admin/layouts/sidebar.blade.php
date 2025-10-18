<aside id="sidebar"
    class="bg-gray-900 text-white flex flex-col fixed h-full w-64 sidebar-transition z-40 
           -translate-x-full md:translate-x-0">

    <!-- Logo / Title -->
    <div class="p-4 flex items-center justify-between border-b border-gray-700">
        <span class="text-xl font-bold">{{ Auth::guard('admin')->user()->name ?? 'Admin' }}</span>
        <button id="closeSidebar" class="md:hidden text-gray-300">
            <i class="fas fa-times"></i>
        </button>
    </div>

    <!-- Navigation -->
    <nav class="flex-1 p-2 space-y-2 overflow-y-auto">

        {{-- Dashboard --}}
        @canany(['create dashboard','edit dashboard','view dashboard','delete dashboard'])
        <a href="{{ route('admin.dashboard') }}"
            class="flex items-center gap-2 p-2 rounded hover:bg-gray-700 {{ request()->is('admin') ? 'bg-gray-700 font-semibold' : '' }}">
            <i class="fas fa-home w-4"></i>
            <span>Dashboard</span>
        </a>
        @endcanany


        @canany(['create setting','edit setting','view setting','delete setting'])

                <a href="{{ route('admin.settings.index') }}"
                    class="flex items-center gap-2 p-2 rounded hover:bg-gray-700 {{ request()->is('admin/settings*') ? 'bg-gray-700 font-semibold' : '' }}">
                    <i class="fas fa-cog w-4"></i>
                    <span>Settings</span>
                </a>
            @endcanany

            @canany(['create hero','edit hero','view hero','delete hero'])

                <a href="{{ route('admin.hero.index') }}"
                    class="flex items-center gap-2 p-2 rounded hover:bg-gray-700 {{ request()->is('admin/hero*') ? 'bg-gray-700 font-semibold' : '' }}">
                    <i class="fas fa-cog w-4"></i>
                    <span>hero</span>
                </a>
            @endcanany


            @canany(['create about','edit about','view about','delete about'])

                <a href="{{ route('admin.abouts.index') }}"
                    class="flex items-center gap-2 p-2 rounded hover:bg-gray-700 {{ request()->is('admin/abouts*') ? 'bg-gray-700 font-semibold' : '' }}">
                    <i class="fas fa-cog w-4"></i>
                    <span>abouts</span>
                </a>
            @endcanany


             @canany(['create counter','edit counter','view counter','delete counter'])

                <a href="{{ route('admin.counters.index') }}"
                    class="flex items-center gap-2 p-2 rounded hover:bg-gray-700 {{ request()->is('admin/counters*') ? 'bg-gray-700 font-semibold' : '' }}">
                    <i class="fas fa-cog w-4"></i>
                    <span>counters</span>
                </a>
            @endcanany

             @canany(['create brand','edit brand','view brand','delete brand'])

                <a href="{{ route('admin.brands.index') }}"
                    class="flex items-center gap-2 p-2 rounded hover:bg-gray-700 {{ request()->is('admin/brands*') ? 'bg-gray-700 font-semibold' : '' }}">
                    <i class="fas fa-cog w-4"></i>
                    <span>brands</span>
                </a>
            @endcanany

        {{-- User Management --}}

        @php
        $userActive = request()->is('admin/users*') || request()->is('admin/roles*');
        @endphp
        @canany(['create role','edit role','view role','delete role','create user','edit user','view user','delete user'])
        <div class="dropdown">
            <button
                class="dropdown-btn flex justify-between items-center w-full p-2 rounded hover:bg-gray-700 focus:outline-none {{ $userActive ? 'bg-gray-700 font-semibold' : '' }}">
                <span class="flex items-center gap-2"><i class="fas fa-users w-4"></i> User Management</span>
                <i class="fas fa-chevron-down transition-transform {{ $userActive ? 'rotate-180' : '' }}"></i>
            </button>
            <div class="dropdown-menu {{ $userActive ? 'block' : 'hidden' }} ml-4 mt-1 space-y-1">
                @canany(['create user','edit user','view user','delete user'])
                <a href="{{ route('admin.users.index') }}"
                    class="flex items-center gap-2 p-2 rounded hover:bg-gray-700 text-sm {{ request()->is('admin/users*') ? 'bg-gray-700 font-semibold' : '' }}">
                    <i class="fas fa-user w-3"></i> Users
                </a>
                @endcanany
                @canany(['create user','edit user','view user','delete user'])
                <a href="{{ route('admin.roles.index') }}"
                    class="flex items-center gap-2 p-2 rounded hover:bg-gray-700 text-sm {{ request()->is('admin/roles*') ? 'bg-gray-700 font-semibold' : '' }}">
                    <i class="fas fa-user-shield w-3"></i> Roles
                </a>
                @endcanany
            </div>
        </div>
        @endcanany



    </nav>
</aside>