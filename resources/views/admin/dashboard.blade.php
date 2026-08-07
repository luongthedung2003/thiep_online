@extends('admin.layouts.app')

@section('title', 'BankDash - Admin Overview')

@section('content')
<div class="space-y-6">

    <!-- Row 1: Cards & Recent Transactions -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- My Cards (2 columns) -->
        <div class="lg:col-span-2 space-y-4">
            <div class="flex items-center justify-between">
                <h2 class="text-xl font-bold text-[#343C6A]">My Cards</h2>
                <a href="#see-all" class="text-sm font-semibold text-[#343C6A] hover:text-[#1814F3]">See All</a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <!-- Primary Dark Credit Card -->
                <div class="bg-gradient-to-r from-[#2C3E50] to-[#000000] text-white rounded-3xl p-6 shadow-xl flex flex-col justify-between h-56 relative overflow-hidden">
                    <div class="flex justify-between items-start">
                        <div>
                            <span class="text-xs font-normal text-slate-300">Balance</span>
                            <div class="text-2xl font-bold mt-1">$5,756</div>
                        </div>
                        <img src="{{ asset('assets/images/bankdash/chip_white.png') }}" class="w-9 h-7 object-contain" alt="Chip">
                    </div>

                    <div class="flex gap-12 text-xs uppercase tracking-wider text-slate-300">
                        <div>
                            <div class="text-[10px] text-slate-400">CARD HOLDER</div>
                            <div class="font-semibold text-white mt-1">Eddy Cusuma</div>
                        </div>
                        <div>
                            <div class="text-[10px] text-slate-400">VALID THRU</div>
                            <div class="font-semibold text-white mt-1">12/22</div>
                        </div>
                    </div>

                    <div class="pt-4 border-t border-slate-700/60 flex items-center justify-between text-lg tracking-widest font-mono">
                        <span>3778 **** **** 1234</span>
                        <div class="flex -space-x-2">
                            <div class="w-6 h-6 rounded-full bg-white/40 backdrop-blur-sm"></div>
                            <div class="w-6 h-6 rounded-full bg-white/20 backdrop-blur-sm"></div>
                        </div>
                    </div>
                </div>

                <!-- Secondary Light Credit Card -->
                <div class="bg-white border border-[#E6EFF5] text-[#343C6A] rounded-3xl p-6 shadow-sm flex flex-col justify-between h-56">
                    <div class="flex justify-between items-start">
                        <div>
                            <span class="text-xs font-normal text-[#718EBF]">Balance</span>
                            <div class="text-2xl font-bold mt-1 text-[#343C6A]">$5,756</div>
                        </div>
                        <img src="{{ asset('assets/images/bankdash/chip_black.png') }}" class="w-9 h-7 object-contain" alt="Chip">
                    </div>

                    <div class="flex gap-12 text-xs uppercase tracking-wider text-[#718EBF]">
                        <div>
                            <div class="text-[10px] text-[#718EBF]/70">CARD HOLDER</div>
                            <div class="font-semibold text-[#343C6A] mt-1">Eddy Cusuma</div>
                        </div>
                        <div>
                            <div class="text-[10px] text-[#718EBF]/70">VALID THRU</div>
                            <div class="font-semibold text-[#343C6A] mt-1">12/22</div>
                        </div>
                    </div>

                    <div class="pt-4 border-t border-[#E6EFF5] flex items-center justify-between text-lg tracking-widest font-mono text-[#343C6A]">
                        <span>3778 **** **** 1234</span>
                        <div class="flex -space-x-2">
                            <div class="w-6 h-6 rounded-full bg-[#718EBF]/30"></div>
                            <div class="w-6 h-6 rounded-full bg-[#718EBF]/15"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Transactions (1 column) -->
        <div class="space-y-4">
            <h2 class="text-xl font-bold text-[#343C6A]">Recent Transaction</h2>
            <div class="bg-white rounded-3xl p-6 border border-[#E6EFF5] shadow-sm space-y-4 h-56 overflow-y-auto">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 rounded-full bg-[#FFF5D9] text-[#FFBB38] flex items-center justify-center text-xl">
                            <i class="ti ti-credit-card"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-sm text-[#232323]">Deposit from my Card</h4>
                            <p class="text-xs text-[#718EBF]">28 January 2021</p>
                        </div>
                    </div>
                    <span class="font-bold text-sm text-[#FF4B4A]">-$850</span>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 rounded-full bg-[#E7EDFF] text-[#396AFF] flex items-center justify-center text-xl">
                            <i class="ti ti-brand-paypal"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-sm text-[#232323]">Deposit Paypal</h4>
                            <p class="text-xs text-[#718EBF]">25 January 2021</p>
                        </div>
                    </div>
                    <span class="font-bold text-sm text-[#41D4A8]">+$2,500</span>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 rounded-full bg-[#DCFAF8] text-[#16DBCC] flex items-center justify-center text-xl">
                            <i class="ti ti-user-check"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-sm text-[#232323]">Jesta Wilson</h4>
                            <p class="text-xs text-[#718EBF]">21 January 2021</p>
                        </div>
                    </div>
                    <span class="font-bold text-sm text-[#41D4A8]">+$5,400</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Row 2: Charts (Weekly Activity & Expense Statistics) -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Weekly Activity Bar Chart (2 columns) -->
        <div class="lg:col-span-2 space-y-4">
            <h2 class="text-xl font-bold text-[#343C6A]">Weekly Activity</h2>
            <div class="bg-white rounded-3xl p-6 border border-[#E6EFF5] shadow-sm">
                <div id="weeklyActivityChart" class="w-full h-64"></div>
            </div>
        </div>

        <!-- Expense Statistics Pie Chart (1 column) -->
        <div class="space-y-4">
            <h2 class="text-xl font-bold text-[#343C6A]">Expense Statistics</h2>
            <div class="bg-white rounded-3xl p-6 border border-[#E6EFF5] shadow-sm flex items-center justify-center">
                <div id="expenseChart" class="w-full h-64"></div>
            </div>
        </div>
    </div>

    <!-- Row 3: Quick Transfer & Balance History -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Quick Transfer (1 column) -->
        <div class="space-y-4">
            <h2 class="text-xl font-bold text-[#343C6A]">Quick Transfer</h2>
            <div class="bg-white rounded-3xl p-6 border border-[#E6EFF5] shadow-sm space-y-6">
                <div class="flex items-center justify-around">
                    <div class="text-center">
                        <img src="{{ asset('assets/images/bankdash/profile/image-1.png') }}" class="w-14 h-14 rounded-full mx-auto object-cover ring-2 ring-[#1814F3]" alt="Livia Bator">
                        <div class="font-bold text-xs text-[#232323] mt-2">Livia Bator</div>
                        <div class="text-[11px] text-[#718EBF]">CEO</div>
                    </div>
                    <div class="text-center">
                        <img src="{{ asset('assets/images/bankdash/profile/image-2.png') }}" class="w-14 h-14 rounded-full mx-auto object-cover" alt="Randy Press">
                        <div class="font-medium text-xs text-[#232323] mt-2">Randy Press</div>
                        <div class="text-[11px] text-[#718EBF]">Director</div>
                    </div>
                    <div class="text-center">
                        <img src="{{ asset('assets/images/bankdash/profile/image-3.png') }}" class="w-14 h-14 rounded-full mx-auto object-cover" alt="Workman">
                        <div class="font-medium text-xs text-[#232323] mt-2">Workman</div>
                        <div class="text-[11px] text-[#718EBF]">Designer</div>
                    </div>
                </div>

                <div class="flex items-center gap-3">
                    <span class="text-xs font-semibold text-[#718EBF] whitespace-nowrap">Write Amount</span>
                    <div class="relative flex-1">
                        <input type="text" value="525.50" class="w-full bg-[#EDF1F7] text-sm font-bold text-[#343C6A] rounded-full px-4 py-3 outline-none">
                        <button class="absolute right-0 top-0 bottom-0 px-6 bg-[#1814F3] text-white text-xs font-bold rounded-full flex items-center gap-2 hover:bg-blue-700 transition-colors">
                            <span>Send</span>
                            <i class="ti ti-[#718EBF] ti-send text-sm"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Balance History Area Chart (2 columns) -->
        <div class="lg:col-span-2 space-y-4">
            <h2 class="text-xl font-bold text-[#343C6A]">Balance History</h2>
            <div class="bg-white rounded-3xl p-6 border border-[#E6EFF5] shadow-sm">
                <div id="balanceHistoryChart" class="w-full h-44"></div>
            </div>
        </div>
    </div>

</div>
@endsection

@section('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Weekly Activity Bar Chart
        var weeklyOptions = {
            series: [
                { name: 'Deposit', data: [450, 350, 320, 480, 240, 390, 400] },
                { name: 'Withdraw', data: [220, 130, 270, 380, 150, 230, 210] }
            ],
            chart: { type: 'bar', height: 240, toolbar: { show: false } },
            plotOptions: { bar: { horizontal: false, columnWidth: '40%', borderRadius: 6 } },
            colors: ['#1814F3', '#16DBCC'],
            dataLabels: { enabled: false },
            stroke: { show: true, width: 2, colors: ['transparent'] },
            xaxis: { categories: ['Sat', 'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri'] },
            grid: { strokeDashArray: 4 }
        };
        new ApexCharts(document.querySelector("#weeklyActivityChart"), weeklyOptions).render();

        // Expense Pie Chart
        var expenseOptions = {
            series: [30, 15, 20, 35],
            chart: { type: 'pie', height: 240 },
            labels: ['Entertainment', 'Bill Expense', 'Investment', 'Others'],
            colors: ['#343C6A', '#FC7900', '#1814F3', '#FA00FF'],
            legend: { position: 'bottom' }
        };
        new ApexCharts(document.querySelector("#expenseChart"), expenseOptions).render();

        // Balance History Area Chart
        var balanceOptions = {
            series: [{ name: 'Balance', data: [180, 300, 240, 480, 220, 600, 750] }],
            chart: { type: 'area', height: 170, toolbar: { show: false } },
            colors: ['#1814F3'],
            fill: { type: 'gradient', gradient: { shadeIntensity: 1, opacityFrom: 0.4, opacityTo: 0.0, stops: [0, 100] } },
            stroke: { curve: 'smooth', width: 3 },
            xaxis: { categories: ['Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec', 'Jan'] },
            grid: { strokeDashArray: 4 }
        };
        new ApexCharts(document.querySelector("#balanceHistoryChart"), balanceOptions).render();
    });
</script>
@endsection
