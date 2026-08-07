<aside class="fixed inset-y-0 left-0 z-50 w-64 bg-white border-r border-[#E6EFF5] flex flex-col justify-between transition-transform duration-300 transform -translate-x-full lg:translate-x-0" id="sidebar">
    <div class="flex flex-col h-full overflow-y-auto">
        <!-- Logo Header -->
        <div class="sticky top-0 bg-white z-10 px-8 py-6 flex items-center gap-3">
            <a href="{{ route('admin.index') }}" class="flex items-center gap-3">
                <div class="w-9 h-9 rounded-xl bg-[#1814F3] flex items-center justify-center text-white shadow-md shadow-[#1814F3]/20">
                    <i class="ti ti-credit-card text-xl"></i>
                </div>
                <span class="text-2xl font-extrabold tracking-tight text-[#343C6A]">BankDash</span>
            </a>
        </div>

        <!-- Navigation Links -->
        <nav class="flex-1 px-0 py-2 space-y-1">
            <a href="{{ route('admin.index') }}" class="flex items-center gap-4 px-8 py-3.5 font-semibold text-sm transition-colors border-l-4 {{ request()->is('admin') ? 'border-[#1814F3] text-[#1814F3] bg-[#F5F7FA]/50' : 'border-transparent text-[#B1B1B1] hover:text-[#343C6A] hover:bg-slate-50' }}">
                <i class="ti ti-smart-home text-2xl"></i>
                <span>Dashboard</span>
            </a>

            <a href="#transactions" class="flex items-center gap-4 px-8 py-3.5 font-semibold text-sm border-l-4 border-transparent text-[#B1B1B1] hover:text-[#343C6A] hover:bg-slate-50 transition-colors">
                <i class="ti ti-[#718EBF] ti-arrows-left-right text-2xl"></i>
                <span>Transactions</span>
            </a>

            <a href="#accounts" class="flex items-center gap-4 px-8 py-3.5 font-semibold text-sm border-l-4 border-transparent text-[#B1B1B1] hover:text-[#343C6A] hover:bg-slate-50 transition-colors">
                <i class="ti ti-user-circle text-2xl"></i>
                <span>Accounts</span>
            </a>

            <a href="#investments" class="flex items-center gap-4 px-8 py-3.5 font-semibold text-sm border-l-4 border-transparent text-[#B1B1B1] hover:text-[#343C6A] hover:bg-slate-50 transition-colors">
                <i class="ti ti-chart-line text-2xl"></i>
                <span>Investments</span>
            </a>

            <a href="#credit-cards" class="flex items-center gap-4 px-8 py-3.5 font-semibold text-sm border-l-4 border-transparent text-[#B1B1B1] hover:text-[#343C6A] hover:bg-slate-50 transition-colors">
                <i class="ti ti-credit-card text-2xl"></i>
                <span>Credit Cards</span>
            </a>

            <a href="#loans" class="flex items-center gap-4 px-8 py-3.5 font-semibold text-sm border-l-4 border-transparent text-[#B1B1B1] hover:text-[#343C6A] hover:bg-slate-50 transition-colors">
                <i class="ti ti-[#718EBF] ti-cash-banknote text-2xl"></i>
                <span>Loans</span>
            </a>

            <a href="#services" class="flex items-center gap-4 px-8 py-3.5 font-semibold text-sm border-l-4 border-transparent text-[#B1B1B1] hover:text-[#343C6A] hover:bg-slate-50 transition-colors">
                <i class="ti ti-tools text-2xl"></i>
                <span>Services</span>
            </a>

            <a href="#privileges" class="flex items-center gap-4 px-8 py-3.5 font-semibold text-sm border-l-4 border-transparent text-[#B1B1B1] hover:text-[#343C6A] hover:bg-slate-50 transition-colors">
                <i class="ti ti-bulb text-2xl"></i>
                <span>My Privileges</span>
            </a>

            <a href="#settings" class="flex items-center gap-4 px-8 py-3.5 font-semibold text-sm border-l-4 border-transparent text-[#B1B1B1] hover:text-[#343C6A] hover:bg-slate-50 transition-colors">
                <i class="ti ti-settings text-2xl"></i>
                <span>Setting</span>
            </a>

            <a href="{{ route('admin.login') }}" class="flex items-center gap-4 px-8 py-3.5 font-semibold text-sm border-l-4 border-transparent text-[#B1B1B1] hover:text-[#343C6A] hover:bg-slate-50 transition-colors">
                <i class="ti ti-lock text-2xl"></i>
                <span>Authentication</span>
            </a>
        </nav>
    </div>
</aside>
