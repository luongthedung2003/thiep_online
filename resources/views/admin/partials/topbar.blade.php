<header class="bg-white border-b border-[#E6EFF5] px-6 py-5 flex items-center justify-between relative">
    <div class="flex items-center gap-4">
        <!-- Mobile Sidebar Toggle Button -->
        <button type="button" onclick="toggleSidebar()" class="lg:hidden p-2 rounded-xl text-[#718EBF] hover:bg-[#F5F7FA]">
            <i class="ti ti-menu-2 text-2xl"></i>
        </button>

        <h1 class="text-2xl font-bold text-[#343C6A]">Tổng quan</h1>
    </div>

    <!-- Right Header Actions -->
    <div class="flex items-center gap-4 sm:gap-6">
        <!-- Search Input -->
        <div class="relative hidden sm:block w-64">
            <i class="ti ti-search absolute left-4 top-1/2 -translate-y-1/2 text-[#718EBF] text-lg"></i>
            <input type="text" placeholder="Tìm kiếm..." class="w-full pl-11 pr-4 py-2.5 text-sm bg-[#F5F7FA] border-0 rounded-full text-[#343C6A] placeholder-[#8BA3CB] focus:ring-2 focus:ring-[#1814F3] transition-all outline-none">
        </div>

        <!-- Settings Icon Button -->
        <button type="button" class="w-10 h-10 rounded-full bg-[#F5F7FA] text-[#718EBF] hover:text-[#1814F3] flex items-center justify-center transition-colors">
            <i class="ti ti-settings text-xl"></i>
        </button>

        <!-- Notification Bell Button + Dropdown -->
        <div class="relative" id="notifWrapper">
            <button type="button" onclick="toggleNotif()" class="w-10 h-10 rounded-full bg-[#F5F7FA] text-[#FE5C73] hover:text-[#1814F3] flex items-center justify-center transition-colors relative">
                <i class="ti ti-bell-ringing text-xl"></i>
                <span class="absolute top-2 right-2 w-2 h-2 rounded-full bg-[#FE5C73]" id="notifDot"></span>
            </button>

            <!-- Dropdown Panel -->
            <div id="notifDropdown" class="hidden absolute right-0 top-14 w-80 bg-white rounded-2xl shadow-2xl border border-[#E6EFF5] z-50 overflow-hidden">
                <!-- Header -->
                <div class="flex items-center justify-between px-5 py-4 border-b border-[#E6EFF5]">
                    <h3 class="font-bold text-sm text-[#343C6A]">Thông báo</h3>
                    <span class="text-[11px] font-semibold bg-[#E7EDFF] text-[#1814F3] px-2 py-0.5 rounded-full">3 mới</span>
                </div>

                <!-- Notification Items -->
                <ul class="divide-y divide-[#F5F7FA] max-h-72 overflow-y-auto">
                    <li class="flex items-start gap-3 px-5 py-3.5 hover:bg-[#F5F7FA] transition-colors cursor-pointer">
                        <div class="w-9 h-9 rounded-full bg-[#DCFAF8] text-[#16DBCC] flex items-center justify-center shrink-0 mt-0.5">
                            <i class="ti ti-shopping-cart text-base"></i>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-xs font-semibold text-[#232323]">Đơn hàng mới #1024</p>
                            <p class="text-[11px] text-[#718EBF] mt-0.5">Khách hàng vừa đặt thiệp cưới cao cấp</p>
                            <p class="text-[10px] text-[#B1B1B1] mt-1">2 phút trước</p>
                        </div>
                        <span class="w-2 h-2 rounded-full bg-[#1814F3] mt-2 shrink-0"></span>
                    </li>
                    <li class="flex items-start gap-3 px-5 py-3.5 hover:bg-[#F5F7FA] transition-colors cursor-pointer">
                        <div class="w-9 h-9 rounded-full bg-[#FFF5D9] text-[#FFBB38] flex items-center justify-center shrink-0 mt-0.5">
                            <i class="ti ti-heart text-base"></i>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-xs font-semibold text-[#232323]">Yêu thích mới</p>
                            <p class="text-[11px] text-[#718EBF] mt-0.5">5 sản phẩm được thêm vào danh sách yêu thích</p>
                            <p class="text-[10px] text-[#B1B1B1] mt-1">15 phút trước</p>
                        </div>
                        <span class="w-2 h-2 rounded-full bg-[#1814F3] mt-2 shrink-0"></span>
                    </li>
                    <li class="flex items-start gap-3 px-5 py-3.5 hover:bg-[#F5F7FA] transition-colors cursor-pointer">
                        <div class="w-9 h-9 rounded-full bg-[#E7EDFF] text-[#396AFF] flex items-center justify-center shrink-0 mt-0.5">
                            <i class="ti ti-user-plus text-base"></i>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-xs font-semibold text-[#232323]">Người dùng mới đăng ký</p>
                            <p class="text-[11px] text-[#718EBF] mt-0.5">Nguyễn Thị Lan vừa tạo tài khoản</p>
                            <p class="text-[10px] text-[#B1B1B1] mt-1">1 giờ trước</p>
                        </div>
                        <span class="w-2 h-2 rounded-full bg-[#1814F3] mt-2 shrink-0"></span>
                    </li>
                    <li class="flex items-start gap-3 px-5 py-3.5 hover:bg-[#F5F7FA] transition-colors cursor-pointer">
                        <div class="w-9 h-9 rounded-full bg-[#FFE0EB] text-[#FE5C73] flex items-center justify-center shrink-0 mt-0.5">
                            <i class="ti ti-alert-circle text-base"></i>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-xs font-semibold text-[#232323]">Hệ thống cập nhật</p>
                            <p class="text-[11px] text-[#718EBF] mt-0.5">Phiên bản mới đã sẵn sàng để triển khai</p>
                            <p class="text-[10px] text-[#B1B1B1] mt-1">3 giờ trước</p>
                        </div>
                    </li>
                </ul>

                <!-- Footer -->
                <div class="px-5 py-3 border-t border-[#E6EFF5] text-center">
                    <a href="#" class="text-xs font-semibold text-[#1814F3] hover:underline">Xem tất cả thông báo</a>
                </div>
            </div>
        </div>

        <!-- User Avatar -->
        <img src="{{ asset('assets/images/bankdash/avatar.jpg') }}" alt="User Profile" class="w-11 h-11 rounded-full object-cover ring-2 ring-[#E6EFF5]">
    </div>
</header>

<script>
function toggleNotif() {
    const dropdown = document.getElementById('notifDropdown');
    const dot = document.getElementById('notifDot');
    dropdown.classList.toggle('hidden');
    // Ẩn chấm đỏ khi mở thông báo
    if (!dropdown.classList.contains('hidden')) {
        dot.classList.add('hidden');
    }
}

// Đóng dropdown khi click ra ngoài
document.addEventListener('click', function(e) {
    const wrapper = document.getElementById('notifWrapper');
    if (wrapper && !wrapper.contains(e.target)) {
        document.getElementById('notifDropdown').classList.add('hidden');
    }
});
</script>

