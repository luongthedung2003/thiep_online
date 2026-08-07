<header class="bg-white border-b border-[#E6EFF5] px-6 py-5 flex items-center justify-between">
    <div class="flex items-center gap-4">
        <!-- Mobile Sidebar Toggle Button -->
        <button type="button" onclick="document.getElementById('sidebar').classList.toggle('-translate-x-full')" class="lg:hidden p-2 rounded-xl text-[#718EBF] hover:bg-[#F5F7FA]">
            <i class="ti ti-menu-2 text-2xl"></i>
        </button>

        <h1 class="text-2xl font-bold text-[#343C6A]">Overview</h1>
    </div>

    <!-- Right Header Actions -->
    <div class="flex items-center gap-4 sm:gap-6">
        <!-- Search Input -->
        <div class="relative hidden sm:block w-64">
            <i class="ti ti-search absolute left-4 top-1/2 -translate-y-1/2 text-[#718EBF] text-lg"></i>
            <input type="text" placeholder="Search for something" class="w-full pl-11 pr-4 py-2.5 text-sm bg-[#F5F7FA] border-0 rounded-full text-[#343C6A] placeholder-[#8BA3CB] focus:ring-2 focus:ring-[#1814F3] transition-all outline-none">
        </div>

        <!-- Settings Icon Button -->
        <button type="button" class="w-10 h-10 rounded-full bg-[#F5F7FA] text-[#718EBF] hover:text-[#1814F3] flex items-center justify-center transition-colors">
            <i class="ti ti-settings text-xl"></i>
        </button>

        <!-- Notification Bell Button -->
        <button type="button" class="w-10 h-10 rounded-full bg-[#F5F7FA] text-[#FE5C73] hover:text-[#1814F3] flex items-center justify-center transition-colors relative">
            <i class="ti ti-bell-ringing text-xl"></i>
            <span class="absolute top-2.5 right-2.5 w-2 h-2 rounded-full bg-[#FE5C73]"></span>
        </button>

        <!-- User Avatar -->
        <a href="#profile" class="flex items-center gap-3">
            <img src="{{ asset('assets/images/bankdash/avatar.jpg') }}" alt="User Profile" class="w-11 h-11 rounded-full object-cover ring-2 ring-[#E6EFF5]">
        </a>
    </div>
</header>
