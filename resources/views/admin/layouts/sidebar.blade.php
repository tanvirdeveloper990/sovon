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

        {{-- =========================
🏠 Home Content Section
========================= --}}
        @php
        $homeActive = request()->is('admin/hero*') ||
        request()->is('admin/abouts*') ||
        request()->is('admin/counters*') ||
        request()->is('admin/brands*') ||
        request()->is('admin/certifications*');
        @endphp
        @canany(['view hero','view about','view counter','view brand','view certification'])
        <div class="dropdown">
            <button class="dropdown-btn flex justify-between items-center w-full p-2 rounded hover:bg-gray-700 {{ $homeActive ? 'bg-gray-700 font-semibold' : '' }}">
                <span class="flex items-center gap-2"><i class="fas fa-home w-4"></i> Home Content</span>
                <i class="fas fa-chevron-down transition-transform {{ $homeActive ? 'rotate-180' : '' }}"></i>
            </button>
            <div class="dropdown-menu {{ $homeActive ? 'block' : 'hidden' }} ml-4 mt-1 space-y-1">
                @canany(['create hero','edit hero','view hero','delete hero'])
                <a href="{{ route('admin.hero.index') }}" class="flex items-center gap-2 p-2 rounded hover:bg-gray-700 text-sm {{ request()->is('admin/hero*') ? 'bg-gray-700 font-semibold' : '' }}">
                    <i class="fas fa-cog w-3"></i> Hero
                </a>
                @endcanany
                @canany(['create about','edit about','view about','delete about'])
                <a href="{{ route('admin.abouts.index') }}" class="flex items-center gap-2 p-2 rounded hover:bg-gray-700 text-sm {{ request()->is('admin/abouts*') ? 'bg-gray-700 font-semibold' : '' }}">
                    <i class="fas fa-info-circle w-3"></i> About
                </a>
                @endcanany
                @canany(['create counter','edit counter','view counter','delete counter'])
                <a href="{{ route('admin.counters.index') }}" class="flex items-center gap-2 p-2 rounded hover:bg-gray-700 text-sm {{ request()->is('admin/counters*') ? 'bg-gray-700 font-semibold' : '' }}">
                    <i class="fas fa-hashtag w-3"></i> Counter
                </a>
                @endcanany
                @canany(['create brand','edit brand','view brand','delete brand'])
                <a href="{{ route('admin.brands.index') }}" class="flex items-center gap-2 p-2 rounded hover:bg-gray-700 text-sm {{ request()->is('admin/brands*') ? 'bg-gray-700 font-semibold' : '' }}">
                    <i class="fas fa-tags w-3"></i> Brand
                </a>
                @endcanany
                @canany(['create certification','edit certification','view certification','delete certification'])
                <a href="{{ route('admin.certifications.index') }}" class="flex items-center gap-2 p-2 rounded hover:bg-gray-700 text-sm {{ request()->is('admin/certifications*') ? 'bg-gray-700 font-semibold' : '' }}">
                    <i class="fas fa-certificate w-3"></i> Certification
                </a>
                @endcanany
            </div>
        </div>
        @endcanany


        {{-- =========================
👥 Team & Services Section
========================= --}}
        @php
        $teamActive = request()->is('admin/team-members*') ||
        request()->is('admin/service*') ||
        request()->is('admin/client-review*') ||
        request()->is('admin/offer-service*') ||
        request()->is('admin/faqs*') || request()->is('admin/opportunities*');
        @endphp
        @canany(['view teammember','view offer-service','view service','view clientreview','view faq', 'view opportunities'])
        <div class="dropdown">
            <button class="dropdown-btn flex justify-between items-center w-full p-2 rounded hover:bg-gray-700 {{ $teamActive ? 'bg-gray-700 font-semibold' : '' }}">
                <span class="flex items-center gap-2"><i class="fas fa-users w-4"></i> Team & Services</span>
                <i class="fas fa-chevron-down transition-transform {{ $teamActive ? 'rotate-180' : '' }}"></i>
            </button>
            <div class="dropdown-menu {{ $teamActive ? 'block' : 'hidden' }} ml-4 mt-1 space-y-1">
                @canany(['view teammember'])
                <a href="{{ route('admin.team-members.index') }}" class="flex items-center gap-2 p-2 rounded hover:bg-gray-700 text-sm {{ request()->is('admin/team-members*') ? 'bg-gray-700 font-semibold' : '' }}">
                    <i class="fas fa-user-tie w-3"></i> Team Members
                </a>
                @endcanany
               @canany(['view opportunities'])
                <a href="{{ route('admin.opportunities.index') }}" 
                class="flex items-center gap-2 p-2 rounded hover:bg-gray-700 text-sm {{ request()->is('admin/opportunities*') ? 'bg-gray-700 font-semibold' : '' }}">
                    <i class="fas fa-briefcase w-4"></i> Opportunities
                </a>
                @endcanany

                @canany(['view service'])
                <a href="{{ route('admin.service.index') }}" class="flex items-center gap-2 p-2 rounded hover:bg-gray-700 text-sm {{ request()->is('admin/service*') ? 'bg-gray-700 font-semibold' : '' }}">
                    <i class="fas fa-concierge-bell w-3"></i> Services
                </a>
                @endcanany

                 @canany(['view offer-service'])
                <a href="{{ route('admin.offer-service.index') }}" class="flex items-center gap-2 p-2 rounded hover:bg-gray-700 text-sm {{ request()->is('admin/offer-service*') ? 'bg-gray-700 font-semibold' : '' }}">
                <i class="fas fa-hand-holding-heart w-4"></i> Offer Service
                </a>
                @endcanany
                
                @canany(['view clientreview'])
                <a href="{{ route('admin.client-review.index') }}" class="flex items-center gap-2 p-2 rounded hover:bg-gray-700 text-sm {{ request()->is('admin/client-review*') ? 'bg-gray-700 font-semibold' : '' }}">
                    <i class="fas fa-comment-dots w-3"></i> Client Review
                </a>
                @endcanany
                @canany(['view faq'])
                <a href="{{ route('admin.faqs.index') }}" class="flex items-center gap-2 p-2 rounded hover:bg-gray-700 text-sm {{ request()->is('admin/faqs*') ? 'bg-gray-700 font-semibold' : '' }}">
                    <i class="fas fa-question-circle w-3"></i> FAQ
                </a>
                @endcanany
            </div>
        </div>
        @endcanany


        {{-- =========================
📰 Media & Events Section
========================= --}}
        @php
        $mediaActive = request()->is('admin/blogs*') || request()->is('admin/events*');
        @endphp
        @canany(['view blog','view event'])
        <div class="dropdown">
            <button class="dropdown-btn flex justify-between items-center w-full p-2 rounded hover:bg-gray-700 {{ $mediaActive ? 'bg-gray-700 font-semibold' : '' }}">
                <span class="flex items-center gap-2"><i class="fas fa-newspaper w-4"></i> Media & Events</span>
                <i class="fas fa-chevron-down transition-transform {{ $mediaActive ? 'rotate-180' : '' }}"></i>
            </button>
            <div class="dropdown-menu {{ $mediaActive ? 'block' : 'hidden' }} ml-4 mt-1 space-y-1">
                @canany(['view blog'])
                <a href="{{ route('admin.blogs.index') }}" class="flex items-center gap-2 p-2 rounded hover:bg-gray-700 text-sm {{ request()->is('admin/blogs*') ? 'bg-gray-700 font-semibold' : '' }}">
                    <i class="fas fa-blog w-3"></i> Blogs
                </a>
                @endcanany
                @canany(['view event'])
                <a href="{{ route('admin.events.index') }}" class="flex items-center gap-2 p-2 rounded hover:bg-gray-700 text-sm {{ request()->is('admin/events*') ? 'bg-gray-700 font-semibold' : '' }}">
                    <i class="fas fa-calendar-alt w-3"></i> Events
                </a>
                @endcanany
            </div>
        </div>
        @endcanany


        {{-- =========================
🛍️ Products Section
========================= --}}
        @php
        $categoryActive = request()->is('admin/categories*') || request()->is('admin/subcategories*') || request()->is('admin/products*');
        @endphp
        @canany(['view category','view subcategory','view product'])
        <div class="dropdown">
            <button class="dropdown-btn flex justify-between items-center w-full p-2 rounded hover:bg-gray-700 {{ $categoryActive ? 'bg-gray-700 font-semibold' : '' }}">
                <span class="flex items-center gap-2"><i class="fas fa-box w-4"></i> Products</span>
                <i class="fas fa-chevron-down transition-transform {{ $categoryActive ? 'rotate-180' : '' }}"></i>
            </button>
            <div class="dropdown-menu {{ $categoryActive ? 'block' : 'hidden' }} ml-4 mt-1 space-y-1">
                <a href="{{ route('admin.categories.index') }}" class="flex items-center gap-2 p-2 rounded hover:bg-gray-700 text-sm {{ request()->is('admin/categories*') ? 'bg-gray-700 font-semibold' : '' }}">
                    <i class="fas fa-folder w-3"></i> Categories
                </a>
                <a href="{{ route('admin.subcategories.index') }}" class="flex items-center gap-2 p-2 rounded hover:bg-gray-700 text-sm {{ request()->is('admin/subcategories*') ? 'bg-gray-700 font-semibold' : '' }}">
                    <i class="fas fa-folder-open w-3"></i> Subcategories
                </a>
                <a href="{{ route('admin.products.index') }}" class="flex items-center gap-2 p-2 rounded hover:bg-gray-700 text-sm {{ request()->is('admin/products*') ? 'bg-gray-700 font-semibold' : '' }}">
                    <i class="fas fa-boxes w-3"></i> Products
                </a>
            </div>
        </div>
        @endcanany


        {{-- ========================= 📞 Contact Section ========================= --}}
        @canany(['view contact'])
        <a href="{{ route('admin.contacts.index') }}"
            class="flex items-center gap-2 p-2 rounded hover:bg-gray-700 {{ request()->is('admin/contacts*') ? 'bg-gray-700 font-semibold' : '' }}">
            <i class="fas fa-envelope w-4"></i>
            <span>Contact</span>
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