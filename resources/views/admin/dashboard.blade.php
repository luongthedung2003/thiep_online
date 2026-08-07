@extends('admin.layouts.app')
@section('title', 'ForYou - Admin Overview')
@section('content')
<div class="space-y-6">

{{-- Row 1: My Cards + Recent Transactions --}}
<div class="grid grid-cols-1 xl:grid-cols-3 gap-6">
  {{-- My Cards (2/3) --}}
  <div class="xl:col-span-2 space-y-4">
    <div class="flex items-center justify-between">
      <h2 class="text-xl font-bold text-[#343C6A]">My Cards</h2>
      <a href="#!" class="text-sm font-semibold text-[#343C6A] hover:text-[#1814F3] pr-1">See All</a>
    </div>
    <div class="overflow-x-auto pb-2 scrollbar-hide">
      <div class="flex gap-6 min-w-[760px] sm:min-w-[800px]">
        {{-- Primary Blue Credit Card --}}
        <div class="flex-1 rounded-3xl overflow-hidden shadow-lg flex flex-col justify-between h-[235px]" style="background: linear-gradient(107.38deg, #4C49ED 2.61%, #0A06F4 101.2%); font-family: 'Inter', sans-serif;">
          <div class="flex flex-col gap-6 px-6 pt-6 pb-2">
            <div class="flex justify-between items-start">
              <div>
                <p class="text-xs font-normal text-white/70 capitalize">Balance</p>
                <p class="text-2xl font-bold text-white mt-0.5">$5,756</p>
              </div>
              <img src="{{ asset('assets/images/bankdash/chip_white.png') }}" class="w-9 h-7 object-contain" alt="chip">
            </div>
            <div class="grid grid-cols-2 gap-4">
              <div>
                <p class="text-[10px] font-normal text-white/70 uppercase">CARD HOLDER</p>
                <p class="text-sm font-semibold text-white mt-0.5">Eddy Cusuma</p>
              </div>
              <div>
                <p class="text-[10px] font-normal text-white/70 uppercase">VALID THRU</p>
                <p class="text-sm font-semibold text-white mt-0.5">12/22</p>
              </div>
            </div>
          </div>
          <div class="flex justify-between items-center px-6 py-4" style="background: linear-gradient(180deg, rgba(255, 255, 255, 0.15) 0%, rgba(255, 255, 255, 0) 100%);">
            <p class="text-xl text-white font-mono tracking-wider font-semibold">3778 **** **** 1234</p>
            <img src="{{ asset('assets/images/bankdash/bank-logo.svg') }}" class="w-[44px] h-[30px] object-contain" alt="bank logo">
          </div>
        </div>

        {{-- White Credit Card --}}
        <div class="flex-1 rounded-3xl overflow-hidden bg-white border border-[#DFEAF2] flex flex-col justify-between h-[235px]" style="font-family: 'Inter', sans-serif;">
          <div class="flex flex-col gap-6 px-6 pt-6 pb-2">
            <div class="flex justify-between items-start">
              <div>
                <p class="text-xs font-normal text-[#718EBF] capitalize">Balance</p>
                <p class="text-2xl font-bold text-[#343C6A] mt-0.5">$3,200</p>
              </div>
              <img src="{{ asset('assets/images/bankdash/chip_black.png') }}" class="w-9 h-7 object-contain" alt="chip">
            </div>
            <div class="grid grid-cols-2 gap-4">
              <div>
                <p class="text-[10px] font-normal text-[#718EBF] uppercase">CARD HOLDER</p>
                <p class="text-sm font-semibold text-[#343C6A] mt-0.5">Jane Doe</p>
              </div>
              <div>
                <p class="text-[10px] font-normal text-[#718EBF] uppercase">VALID THRU</p>
                <p class="text-sm font-semibold text-[#343C6A] mt-0.5">01/24</p>
              </div>
            </div>
          </div>
          <div class="flex justify-between items-center px-6 py-4 border-t border-[#DFEAF2]" style="background: linear-gradient(180deg, rgba(255, 255, 255, 0.6) 0%, rgba(255, 255, 255, 0) 100%);">
            <p class="text-xl text-[#343C6A] font-mono tracking-wider font-semibold">1234 **** **** 5678</p>
            <img src="{{ asset('assets/images/bankdash/bank-logo-alt.svg') }}" class="w-[44px] h-[30px] object-contain" alt="bank logo">
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Recent Transactions (1/3) --}}
  <div class="space-y-4">
    <div class="flex items-center justify-between">
      <h2 class="text-xl font-bold text-[#343C6A]">Recent Transactions</h2>
    </div>
    <div class="bg-white rounded-3xl p-5 border border-[#E6EFF5] shadow-sm flex flex-col justify-around h-[235px]">
      {{-- Item 1 --}}
      <div class="flex items-center gap-4">
        <div class="w-14 h-14 rounded-full bg-[#FEEFE1] flex items-center justify-center shrink-0">
          <svg class="w-6 h-6" viewBox="0 0 28 28" fill="none">
            <path d="M18.6452 24.6094H5.67984C4.9859 24.6087 4.32059 24.3327 3.8299 23.842C3.33921 23.3513 3.06322 22.686 3.0625 21.992V14.2543C3.06322 13.5604 3.33921 12.8951 3.8299 12.4044C4.32059 11.9137 4.9859 11.6377 5.67984 11.637H18.6452C19.3391 11.6377 20.0044 11.9137 20.4951 12.4044C20.9858 12.8951 21.2618 13.5604 21.2625 14.2543V21.992C21.2618 22.686 20.9858 23.3513 20.4951 23.842C20.0044 24.3327 19.3391 24.6087 18.6452 24.6094Z" fill="#FFBB38"/>
            <path d="M22.3212 20.1917H20.4422C20.2246 20.1917 20.016 20.1053 19.8621 19.9515C19.7083 19.7976 19.6219 19.589 19.6219 19.3714C19.6219 19.1538 19.7083 18.9452 19.8621 18.7914C20.016 18.6375 20.2246 18.5511 20.4422 18.5511H22.3212C22.58 18.5505 22.828 18.4474 23.0109 18.2643C23.1937 18.0812 23.2966 17.8331 23.2969 17.5744V9.83664C23.2967 9.57778 23.1939 9.32954 23.0111 9.14635C22.8282 8.96315 22.5801 8.85995 22.3212 8.85938H9.35593C9.09698 8.85966 8.84871 8.96266 8.66561 9.14577C8.4825 9.32888 8.3795 9.57714 8.37921 9.83609V12.4567C8.37921 12.6743 8.29279 12.8829 8.13895 13.0368C7.98511 13.1906 7.77646 13.277 7.5589 13.277C7.34134 13.277 7.13269 13.1906 6.97885 13.0368C6.82501 12.8829 6.73859 12.6743 6.73859 12.4567V9.83664C6.73917 9.1426 7.01509 8.47715 7.5058 7.98635C7.9965 7.49554 8.6619 7.21947 9.35593 7.21875H22.3212C23.0151 7.21976 23.6802 7.49595 24.1707 7.98673C24.6611 8.47751 24.9369 9.14279 24.9375 9.83664V17.5744C24.9368 18.2681 24.6609 18.9333 24.1705 19.4239C23.68 19.9146 23.015 20.1907 22.3212 20.1917Z" fill="#FFBB38"/>
          </svg>
        </div>
        <div class="flex-1 min-w-0">
          <p class="text-sm font-semibold text-[#343C6A] truncate">Deposit from my Card</p>
          <p class="text-xs text-[#718EBF] mt-0.5">25 January 2021</p>
        </div>
        <span class="text-base font-semibold text-[#FE5C73]">-$500</span>
      </div>

      {{-- Item 2 --}}
      <div class="flex items-center gap-4">
        <div class="w-14 h-14 rounded-full bg-[#E7EDFF] flex items-center justify-center shrink-0">
          <svg class="w-6 h-6" viewBox="0 0 28 28" fill="none">
            <path d="M22.995 8.38245C22.9812 6.85217 22.3642 5.38914 21.278 4.31113C20.1918 3.23312 18.7241 2.62719 17.1938 2.62495H8.75001C8.54028 2.62225 8.33656 2.69498 8.17595 2.82989C8.01535 2.96479 7.90855 3.1529 7.87501 3.35995L4.88251 22.1287C4.86381 22.253 4.87211 22.3798 4.90684 22.5006C4.94156 22.6214 5.00191 22.7333 5.08376 22.8287C5.16508 22.9263 5.2667 23.0051 5.38154 23.0595C5.49638 23.1139 5.62169 23.1426 5.74876 23.1437H9.36251L9.17001 24.3599C9.14956 24.486 9.15696 24.615 9.19168 24.7379C9.2264 24.8608 9.28761 24.9746 9.37099 25.0713C9.45438 25.1681 9.55792 25.2454 9.67436 25.2978C9.7908 25.3503 9.91731 25.3766 10.045 25.375H14.1138C14.3222 25.378 14.5249 25.3065 14.6853 25.1733C14.8457 25.0402 14.9533 24.8541 14.9888 24.6487L15.8638 19.3024H18.62C20.3451 19.2955 21.9974 18.6059 23.2156 17.3844C24.4338 16.1629 25.119 14.5088 25.1213 12.7837V12.5387C25.1204 11.7272 24.9272 10.9275 24.5576 10.205C24.1881 9.4826 23.6525 8.85801 22.995 8.38245Z" fill="#396AFF"/>
          </svg>
        </div>
        <div class="flex-1 min-w-0">
          <p class="text-sm font-semibold text-[#343C6A] truncate">Deposit Paypal</p>
          <p class="text-xs text-[#718EBF] mt-0.5">25 January 2021</p>
        </div>
        <span class="text-base font-semibold text-[#41D4A8]">+$500</span>
      </div>

      {{-- Item 3 --}}
      <div class="flex items-center gap-4">
        <div class="w-14 h-14 rounded-full bg-[#DCFAF8] flex items-center justify-center shrink-0">
          <svg class="w-6 h-6" viewBox="0 0 28 28" fill="none">
            <path d="M14.0001 11.379C14.4962 11.379 14.9014 11.7831 14.9014 12.2792C14.9014 12.7319 15.2693 13.0988 15.722 13.0988C16.1736 13.0988 16.5416 12.7319 16.5416 12.2792C16.5416 11.1671 15.8171 10.2287 14.8197 9.88556V9.42048C14.8197 8.96884 14.4528 8.59987 14.0001 8.59987C13.5464 8.59987 13.1795 8.96884 13.1795 9.42048V9.88556C12.1822 10.2287 11.4598 11.1671 11.4598 12.2792C11.4598 13.6817 12.5987 14.8206 14.0001 14.8206C14.4962 14.8206 14.9014 15.2257 14.9014 15.7218C14.9014 16.2189 14.4962 16.6231 14.0001 16.6231C13.5041 16.6231 13.1 16.2189 13.1 15.7218C13.1 15.2691 12.732 14.9012 12.2793 14.9012C11.8256 14.9012 11.4598 15.2691 11.4598 15.7218C11.4598 16.8339 12.1822 17.7713 13.1795 18.1144V18.5795C13.1795 19.0332 13.5464 19.4011 14.0001 19.4011C14.4528 19.4011 14.8197 19.0332 14.8197 18.5795V18.1144C15.8171 17.7713 16.5416 16.8339 16.5416 15.7218C16.5416 14.3204 15.4016 13.1804 14.0001 13.1804C13.5041 13.1804 13.1 12.7763 13.1 12.2792C13.1 11.7831 13.5041 11.379 14.0001 11.379Z" fill="#16DBCC"/>
          </svg>
        </div>
        <div class="flex-1 min-w-0">
          <p class="text-sm font-semibold text-[#343C6A] truncate">Jemi Wilson</p>
          <p class="text-xs text-[#718EBF] mt-0.5">25 January 2021</p>
        </div>
        <span class="text-base font-semibold text-[#41D4A8]">+$500</span>
      </div>
    </div>
  </div>
</div>

{{-- Row 2: Weekly Activity + Expense Statistics --}}
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
  <div class="lg:col-span-2 space-y-4">
    <div class="flex items-center justify-between">
      <h2 class="text-xl font-bold text-[#343C6A]">Weekly Activity</h2>
    </div>
    <div class="bg-white rounded-3xl p-6 border border-[#E6EFF5] shadow-sm">
      <div id="weeklyActivityChart" class="w-full h-[270px]"></div>
    </div>
  </div>
  <div class="space-y-4">
    <div class="flex items-center justify-between">
      <h2 class="text-xl font-bold text-[#343C6A]">Expense Statistics</h2>
    </div>
    <div class="bg-white rounded-3xl p-6 border border-[#E6EFF5] shadow-sm flex items-center justify-center h-[280px]">
      <div id="expenseChart" class="w-full h-full"></div>
    </div>
  </div>
</div>

{{-- Row 3: Quick Transfer + Balance History --}}
<div class="grid grid-cols-1 xl:grid-cols-3 gap-6">
  {{-- Quick Transfer --}}
  <div class="space-y-4 xl:col-span-1">
    <div class="flex items-center justify-between">
      <h2 class="text-xl font-bold text-[#343C6A]">Quick Transfer</h2>
    </div>
    <div class="bg-white rounded-3xl p-6 border border-[#E6EFF5] shadow-sm flex flex-col justify-between h-[276px]">
      <div class="flex items-center mt-2 relative">
        <div class="flex-1 overflow-hidden">
          <div class="flex items-center gap-6 overflow-x-auto scrollbar-hide py-2" id="transferScroll">
            @foreach([
              ['img'=>'profile/image-3.png','name'=>'Livia Bator','role'=>'CEO'],
              ['img'=>'profile/image-2.png','name'=>'Randy Press','role'=>'Director'],
              ['img'=>'profile/image-1.png','name'=>'Workman','role'=>'Designer'],
              ['img'=>'profile/image-4.png','name'=>'Kevin Reed','role'=>'UX'],
              ['img'=>'profile/image-5.png','name'=>'Sofia Gill','role'=>'Director'],
              ['img'=>'profile/image-6.png','name'=>'Jo Barnes','role'=>'Analyst'],
              ['img'=>'profile/image-7.png','name'=>'Felix Vidal','role'=>'CTO'],
            ] as $i=>$p)
            <div class="text-center shrink-0 cursor-pointer w-[70px]" onclick="selectTransfer(this)" data-index="{{ $i }}">
              <img src="{{ asset('assets/images/bankdash/'.$p['img']) }}" class="w-[70px] h-[70px] rounded-full mx-auto object-cover transition-all duration-200 {{ $i===0?'':'grayscale opacity-60' }}" alt="{{ $p['name'] }}">
              <p class="text-xs mt-3 whitespace-nowrap {{ $i===0?'font-bold text-[#232323]':'font-normal text-[#718EBF]' }}">{{ $p['name'] }}</p>
              <p class="text-[11px] {{ $i===0?'font-bold text-[#718EBF]':'font-normal text-[#718EBF]' }}">{{ $p['role'] }}</p>
            </div>
            @endforeach
          </div>
        </div>
        <button onclick="scrollTransferRight()" class="w-12 h-12 bg-white rounded-full shadow-[0_4px_12px_rgba(0,0,0,0.08)] flex items-center justify-center text-[#718EBF] shrink-0 ml-3 hover:text-[#1814F3] transition-colors">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        </button>
      </div>
      <div class="flex items-center gap-4 mt-4">
        <span class="text-sm font-normal text-[#718EBF] whitespace-nowrap">Write Amount</span>
        <div class="relative flex-1">
          <input type="number" value="525.50" class="w-full bg-[#EDF1F7] text-sm font-bold text-[#343C6A] rounded-full pl-5 pr-[120px] py-3.5 outline-none placeholder-[#718EBF]">
          <button class="absolute right-0 top-0 bottom-0 px-6 bg-[#1814F3] text-white text-sm font-semibold rounded-full flex items-center gap-2 hover:bg-blue-700 transition-colors">
            Send 
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
              <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/>
            </svg>
          </button>
        </div>
      </div>
    </div>
  </div>

  {{-- Balance History --}}
  <div class="space-y-4 xl:col-span-2">
    <div class="flex items-center justify-between">
      <h2 class="text-xl font-bold text-[#343C6A]">Balance History</h2>
    </div>
    <div class="bg-white rounded-3xl p-6 border border-[#E6EFF5] shadow-sm h-[276px]">
      <div id="balanceHistoryChart" class="w-full h-full"></div>
    </div>
  </div>
</div>

{{-- Row 4: Recent Invoice (DataGrid with tabs) --}}
<div class="space-y-4">
  <div class="flex items-center justify-between">
    <h2 class="text-xl font-bold text-[#343C6A]">Recent Invoice</h2>
  </div>
  
  {{-- Tabs --}}
  <div class="border-b border-[#E6EFF5]">
    <div class="flex gap-8">
      <button onclick="filterInvoice(0)" id="inv-tab-0" class="pb-3 text-base font-semibold border-b-2 border-[#1814F3] text-[#1814F3] transition-all">All Transactions</button>
      <button onclick="filterInvoice(1)" id="inv-tab-1" class="pb-3 text-base font-semibold border-b-2 border-transparent text-[#718EBF] hover:text-[#343C6A] transition-all">Income</button>
      <button onclick="filterInvoice(2)" id="inv-tab-2" class="pb-3 text-base font-semibold border-b-2 border-transparent text-[#718EBF] hover:text-[#343C6A] transition-all">Expense</button>
    </div>
  </div>

  {{-- Table --}}
  <div class="bg-white rounded-3xl border border-[#E6EFF5] shadow-sm overflow-hidden p-2">
    <div class="overflow-x-auto">
      <table class="w-full text-sm min-w-[750px]" id="invoiceTable">
        <thead>
          <tr class="border-b border-[#E6EFF5]">
            <th class="text-left px-6 py-4 text-xs font-semibold text-[#718EBF] uppercase tracking-wider">Description</th>
            <th class="text-left px-6 py-4 text-xs font-semibold text-[#718EBF] uppercase tracking-wider">Transaction ID</th>
            <th class="text-left px-6 py-4 text-xs font-semibold text-[#718EBF] uppercase tracking-wider">Type</th>
            <th class="text-left px-6 py-4 text-xs font-semibold text-[#718EBF] uppercase tracking-wider">Card</th>
            <th class="text-left px-6 py-4 text-xs font-semibold text-[#718EBF] uppercase tracking-wider">Date</th>
            <th class="text-left px-6 py-4 text-xs font-semibold text-[#718EBF] uppercase tracking-wider">Amount</th>
            <th class="text-left px-6 py-4 text-xs font-semibold text-[#718EBF] uppercase tracking-wider">Download</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-[#F5F7FA]" id="invoiceBody">
        </tbody>
      </table>
    </div>
    {{-- Custom Pagination --}}
    <div class="flex justify-end items-center gap-2 px-6 py-4 border-t border-[#E6EFF5]">
      <button onclick="prevPage()" class="px-3 py-1.5 rounded-lg border border-[#E6EFF5] text-xs font-semibold text-[#718EBF] hover:bg-[#F5F7FA] transition-colors">Previous</button>
      <div id="pageButtons" class="flex gap-1"></div>
      <button onclick="nextPage()" class="px-3 py-1.5 rounded-lg border border-[#E6EFF5] text-xs font-semibold text-[#718EBF] hover:bg-[#F5F7FA] transition-colors">Next</button>
    </div>
  </div>
</div>

</div>
@endsection

@section('scripts')
<style>
.scrollbar-hide::-webkit-scrollbar { display: none; }
.scrollbar-hide { -ms-overflow-style: none; scrollbar-width: none; }
</style>
<script>
document.addEventListener('DOMContentLoaded', function() {
  // 1. Weekly Activity Chart (ECharts)
  var actChart = echarts.init(document.getElementById('weeklyActivityChart'));
  actChart.setOption({
    grid: { left: '2%', top: '15%', right: '2%', bottom: '5%', containLabel: true },
    tooltip: { trigger: 'item', backgroundColor: '#232323', textStyle: { color: '#ffffff' }, borderWidth: 0, padding: 10, formatter: '{b}: ${c}' },
    legend: {
      data: [{ name: 'Deposit', icon: 'circle' }, { name: 'Withdraw', icon: 'circle' }],
      right: -2, itemGap: 33, itemHeight: 16, textStyle: { color: '#718EBF', fontSize: 13 }
    },
    xAxis: {
      type: 'category', data: ['Sat', 'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri'],
      axisLine: { show: false }, axisTick: { show: false }, axisLabel: { padding: 10, color: '#718EBF', fontSize: 13 }
    },
    yAxis: {
      type: 'value', axisLine: { show: false }, axisTick: { show: false },
      axisLabel: { color: '#718EBF', fontSize: 13 }, splitLine: { lineStyle: { color: '#EBEEF2' } }
    },
    series: [
      {
        name: 'Deposit', type: 'bar', data: [420, 332, 301, 334, 490, 160, 320],
        barWidth: 15, itemStyle: { borderRadius: 30, color: '#1814F3' }, barGap: 1
      },
      {
        name: 'Withdraw', type: 'bar', data: [220, 132, 251, 334, 390, 230, 320],
        barWidth: 15, itemStyle: { borderRadius: 30, color: '#16DBCC' }
      }
    ]
  });

  // 2. Expense Statistics Chart (ECharts - Nightingale Rose)
  var expChart = echarts.init(document.getElementById('expenseChart'));
  expChart.setOption({
    backgroundColor: '#ffffff',
    tooltip: { trigger: 'item' },
    color: ['#343C6A', '#1814F3', '#FA00FF', '#FC7900'],
    series: [{
      name: 'Expense', type: 'pie', selectedMode: 'series', selectedOffset: 5,
      radius: '80%', center: ['50%', '50%'], roseType: 'radius', avoidLabelOverlap: false,
      data: [
        { value: 30, name: 'Entertainment', selected: true },
        { value: 25, name: 'Investment', selected: true },
        { value: 25, name: 'Bill Expense', selected: true },
        { value: 20, name: 'Others', selected: true },
      ],
      label: {
        show: true, position: 'inside',
        formatter: function(params) {
          return '{percent|' + params.percent + '%}\n{name|' + params.name + '}';
        },
        rich: {
          percent: { fontSize: 14, fontWeight: 'bold', color: '#ffffff' },
          name: { fontSize: 11, fontWeight: 'bold', color: '#ffffff' }
        }
      }
    }]
  });

  // 3. Balance History Chart (ECharts Line Gradient)
  var balChart = echarts.init(document.getElementById('balanceHistoryChart'));
  balChart.setOption({
    grid: { left: '1%', top: '5%', right: '4.2%', bottom: '6%', containLabel: true },
    tooltip: { trigger: 'axis', formatter: '{b}: ${c}' },
    xAxis: {
      type: 'category', data: ['Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
      boundaryGap: false, axisLabel: { padding: 1, color: '#718EBF', fontSize: 13 },
      axisLine: { show: false }, axisTick: { show: true },
      splitLine: { show: true, lineStyle: { color: '#DFE5EE', type: 'dashed' } }
    },
    yAxis: {
      type: 'value', axisLabel: { padding: 5, color: '#718EBF', fontSize: 13 },
      axisLine: { show: false }, axisTick: { show: true },
      splitLine: { show: true, lineStyle: { color: '#DFE5EE', type: 'dashed' } }
    },
    series: [{
      data: [90, 200, 120, 225, 480, 310, 220, 332, 144, 220, 110, 490],
      type: 'line', smooth: true, symbol: 'none', showSymbol: false,
      lineStyle: { width: 3, color: '#1814F3' },
      areaStyle: {
        color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [
          { offset: 0, color: 'rgba(24, 20, 243, 0.25)' },
          { offset: 1, color: '#ffffff' }
        ]),
        opacity: 0.25
      }
    }]
  });

  window.addEventListener('resize', function() {
    actChart.resize(); expChart.resize(); balChart.resize();
  });
});

// ---- Quick Transfer Functions ----
function selectTransfer(el) {
  document.querySelectorAll('[data-index]').forEach(function(e) {
    e.querySelector('img').classList.add('grayscale', 'opacity-60');
    e.querySelectorAll('p')[0].className = 'text-xs mt-3 whitespace-nowrap font-normal text-[#718EBF]';
    e.querySelectorAll('p')[1].className = 'text-[11px] font-normal text-[#718EBF]';
  });
  el.querySelector('img').classList.remove('grayscale', 'opacity-60');
  el.querySelectorAll('p')[0].className = 'text-xs mt-3 whitespace-nowrap font-bold text-[#232323]';
  el.querySelectorAll('p')[1].className = 'text-[11px] font-bold text-[#718EBF]';
}

function scrollTransferRight() {
  const container = document.getElementById('transferScroll');
  container.scrollBy({ left: 150, behavior: 'smooth' });
}

// ---- Invoice Data & Functions ----
const incrementIcon = `<img src="{{ asset('assets/images/bankdash/increment.svg') }}" class="w-[30px] h-[30px] inline-block" alt="inc">`;
const decrementIcon = `<img src="{{ asset('assets/images/bankdash/decrement.svg') }}" class="w-[30px] h-[30px] inline-block" alt="dec">`;

const invoiceRowData = [
  { id: 1, title: 'Spotify Subscription', revenue: 'down', tid: '12548796', type: 'Shopping', card: '1234 ****', date: '3 Jul, 11.21 AM', amount: 100 },
  { id: 2, title: 'Freepik Sales', revenue: 'up', tid: '12548790', type: 'Transfer', card: '1234 ****', date: '4 Jul, 11.21 AM', amount: 200 },
  { id: 3, title: 'Mobile Service', revenue: 'down', tid: '12548799', type: 'Service', card: '1234 ****', date: '5 Jul, 11.21 AM', amount: 300 },
  { id: 4, title: 'Willson', revenue: 'up', tid: '12548798', type: 'Transfer', card: '1234 ****', date: '6 Jul, 11.21 AM', amount: 400 },
  { id: 5, title: 'Emily', revenue: 'down', tid: '12548797', type: 'Transfer', card: '1234 ****', date: '7 Jul, 11.21 AM', amount: 500 },
  { id: 6, title: 'Netflix Subscription', revenue: 'down', tid: '12548794', type: 'Entertainment', card: '5678 ****', date: '8 Jul, 11.21 AM', amount: 150 },
  { id: 7, title: 'Amazon Purchase', revenue: 'down', tid: '12548793', type: 'Shopping', card: '5678 ****', date: '9 Jul, 11.21 AM', amount: 250 },
  { id: 8, title: 'Paypal Transfer', revenue: 'up', tid: '12548792', type: 'Transfer', card: '5678 ****', date: '10 Jul, 11.21 AM', amount: 350 },
  { id: 9, title: 'Electric Bill', revenue: 'down', tid: '12548791', type: 'Utility', card: '5678 ****', date: '11 Jul, 11.21 AM', amount: 450 },
  { id: 10, title: 'Groceries', revenue: 'down', tid: '12548789', type: 'Shopping', card: '5678 ****', date: '12 Jul, 11.21 AM', amount: 550 },
  { id: 11, title: 'Gym Membership', revenue: 'down', tid: '12548788', type: 'Health', card: '5678 ****', date: '13 Jul, 11.21 AM', amount: 650 },
  { id: 12, title: 'Client Payment', revenue: 'up', tid: '12548787', type: 'Income', card: '5678 ****', date: '14 Jul, 11.21 AM', amount: 750 },
  { id: 13, title: 'Insurance Payment', revenue: 'down', tid: '12548786', type: 'Insurance', card: '5678 ****', date: '15 Jul, 11.21 AM', amount: 850 },
  { id: 14, title: 'Consulting Fee', revenue: 'up', tid: '12548785', type: 'Service', card: '5678 ****', date: '16 Jul, 11.21 AM', amount: 950 },
  { id: 15, title: 'Dinner at Restaurant', revenue: 'down', tid: '12548784', type: 'Dining', card: '5678 ****', date: '17 Jul, 11.21 AM', amount: 1050 }
];

let currentFiltered = invoiceRowData;
let currentPage = 0;
const pageSize = 5;

function filterInvoice(tabIndex) {
  currentPage = 0;
  [0, 1, 2].forEach(i => {
    const btn = document.getElementById('inv-tab-' + i);
    if (i === tabIndex) {
      btn.className = "pb-3 text-base font-semibold border-b-2 border-[#1814F3] text-[#1814F3] transition-all";
    } else {
      btn.className = "pb-3 text-base font-semibold border-b-2 border-transparent text-[#718EBF] hover:text-[#343C6A] transition-all";
    }
  });

  if (tabIndex === 1) {
    currentFiltered = invoiceRowData.filter(r => r.revenue === 'up');
  } else if (tabIndex === 2) {
    currentFiltered = invoiceRowData.filter(r => r.revenue === 'down');
  } else {
    currentFiltered = invoiceRowData;
  }

  renderTable();
}

function renderTable() {
  const tbody = document.getElementById('invoiceBody');
  const pageItems = currentFiltered.slice(currentPage * pageSize, (currentPage + 1) * pageSize);

  if (pageItems.length === 0) {
    tbody.innerHTML = `<tr><td colspan="7" class="text-center py-8 text-[#718EBF]">No transactions found</td></tr>`;
  } else {
    tbody.innerHTML = pageItems.map(row => {
      const isDown = row.revenue === 'down';
      const icon = isDown ? incrementIcon : decrementIcon;
      const amountColor = isDown ? 'text-[#FE5C73]' : 'text-[#41D4A8]';
      const symbol = isDown ? '-' : '+';

      return `
        <tr class="hover:bg-[#F5F7FA]/60 transition-colors">
          <td class="px-6 py-4">
            <div class="flex items-center gap-3">
              ${icon}
              <span class="text-base font-normal text-[#343C6A]">${row.title}</span>
            </div>
          </td>
          <td class="px-6 py-4 text-base text-[#343C6A]">#${row.tid}</td>
          <td class="px-6 py-4 text-base text-[#343C6A]">${row.type}</td>
          <td class="px-6 py-4 text-base text-[#343C6A]">${row.card}</td>
          <td class="px-6 py-4 text-base text-[#718EBF]">${row.date}</td>
          <td class="px-6 py-4 text-base font-semibold ${amountColor}">${symbol} $${row.amount}</td>
          <td class="px-6 py-4">
            <button class="px-4 py-1.5 text-sm font-semibold text-[#1814F3] border border-[#1814F3] rounded-full hover:bg-[#1814F3] hover:text-white transition-colors">
              Download
            </button>
          </td>
        </tr>
      `;
    }).join('');
  }

  renderPagination();
}

function renderPagination() {
  const totalPages = Math.ceil(currentFiltered.length / pageSize);
  const container = document.getElementById('pageButtons');
  container.innerHTML = '';

  for (let i = 0; i < totalPages; i++) {
    const btn = document.createElement('button');
    btn.textContent = i + 1;
    btn.className = `w-8 h-8 rounded-full text-xs font-semibold transition-all ${
      i === currentPage ? 'bg-[#1814F3] text-white' : 'text-[#718EBF] hover:bg-[#F5F7FA]'
    }`;
    btn.onclick = () => { currentPage = i; renderTable(); };
    container.appendChild(btn);
  }
}

function prevPage() {
  if (currentPage > 0) {
    currentPage--;
    renderTable();
  }
}

function nextPage() {
  if ((currentPage + 1) * pageSize < currentFiltered.length) {
    currentPage++;
    renderTable();
  }
}

filterInvoice(0);
</script>
@endsection
