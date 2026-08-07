<aside class="fixed inset-y-0 left-0 z-50 w-64 bg-white border-r border-[#E6EFF5] flex flex-col justify-between transition-transform duration-300 transform -translate-x-full lg:translate-x-0" id="sidebar">
    <div class="flex flex-col h-full overflow-y-auto">
        <!-- Logo Header -->
        <div class="sticky top-0 bg-white z-10 px-8 py-6 flex items-center gap-3">
            <a href="{{ route('admin.index') }}" class="flex items-center gap-3 group">
                <div class="w-10 h-10 rounded-2xl bg-gradient-to-tr from-rose-500 via-pink-500 to-indigo-600 flex items-center justify-center text-white shadow-lg shadow-rose-500/30 group-hover:scale-105 transition-transform duration-300">
                    <i class="ti ti-heart-handshake text-2xl"></i>
                </div>
                <span class="text-2xl font-black tracking-tight bg-gradient-to-r from-rose-600 via-pink-600 to-indigo-600 bg-clip-text text-transparent">ForYou</span>
            </a>
        </div>

        <!-- Navigation Links -->
        <nav class="flex-1 px-0 py-2 space-y-1">
            <a href="{{ route('admin.index') }}" class="flex items-center gap-4 px-8 py-3.5 font-semibold text-sm transition-colors border-l-4 {{ request()->is('admin') ? 'border-[#1814F3] text-[#1814F3] bg-[#F5F7FA]/50' : 'border-transparent text-[#B1B1B1] hover:text-[#343C6A] hover:bg-slate-50' }}">
                <i class="ti ti-smart-home text-2xl"></i>
                <span>Trang chủ</span>
            </a>

            <a href="#transactions" class="flex items-center gap-4 px-8 py-3.5 font-semibold text-sm border-l-4 border-transparent text-[#B1B1B1] hover:text-[#343C6A] hover:bg-slate-50 transition-colors">
                <i class="ti ti-arrows-left-right text-2xl"></i>
                <span>Giao dịch</span>
            </a>

            <a href="#accounts" class="flex items-center gap-4 px-8 py-3.5 font-semibold text-sm border-l-4 border-transparent text-[#B1B1B1] hover:text-[#343C6A] hover:bg-slate-50 transition-colors">
                <i class="ti ti-user-circle text-2xl"></i>
                <span>Tài khoản</span>
            </a>

            <a href="#investments" class="flex items-center gap-4 px-8 py-3.5 font-semibold text-sm border-l-4 border-transparent text-[#B1B1B1] hover:text-[#343C6A] hover:bg-slate-50 transition-colors">
                <i class="ti ti-chart-line text-2xl"></i>
                <span>Đầu tư</span>
            </a>

            <a href="#credit-cards" class="flex items-center gap-4 px-8 py-3.5 font-semibold text-sm border-l-4 border-transparent text-[#B1B1B1] hover:text-[#343C6A] hover:bg-slate-50 transition-colors">
                <i class="ti ti-credit-card text-2xl"></i>
                <span>Thẻ tín dụng</span>
            </a>

            <a href="#loans" class="flex items-center gap-4 px-8 py-3.5 font-semibold text-sm border-l-4 border-transparent text-[#B1B1B1] hover:text-[#343C6A] hover:bg-slate-50 transition-colors">
                <i class="ti ti-cash-banknote text-2xl"></i>
                <span>Khoản vay</span>
            </a>

            <a href="#services" class="flex items-center gap-4 px-8 py-3.5 font-semibold text-sm border-l-4 border-transparent text-[#B1B1B1] hover:text-[#343C6A] hover:bg-slate-50 transition-colors">
                <i class="ti ti-tools text-2xl"></i>
                <span>Dịch vụ</span>
            </a>

            <a href="#privileges" class="flex items-center gap-4 px-8 py-3.5 font-semibold text-sm border-l-4 border-transparent text-[#B1B1B1] hover:text-[#343C6A] hover:bg-slate-50 transition-colors">
                <i class="ti ti-bulb text-2xl"></i>
                <span>Đặc quyền của tôi</span>
            </a>

            <a href="#settings" class="flex items-center gap-4 px-8 py-3.5 font-semibold text-sm border-l-4 border-transparent text-[#B1B1B1] hover:text-[#343C6A] hover:bg-slate-50 transition-colors">
                <i class="ti ti-settings text-2xl"></i>
                <span>Cài đặt</span>
            </a>

            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit" class="w-full text-left flex items-center gap-4 px-8 py-3.5 font-semibold text-sm border-l-4 border-transparent text-rose-500 hover:bg-rose-50 transition-colors">
                    <i class="ti ti-logout text-2xl"></i>
                    <span>Đăng xuất</span>
                </button>
            </form>
        </nav>
    </div>
</aside>
