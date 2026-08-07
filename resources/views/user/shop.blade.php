@extends('layouts.user')

@section('content')

        <section class="mt-8">
            <div class="container">
            <div class="container">
                <div class="flex flex-wrap">
                    <div class="w-full">
                        <h2 class="text-lg absolute z-10">Danh Mục Nổi Bật</h2>
                    </div>
                </div>
                <style>
                    .cat-pop-card {
                        position: relative;
                        height: 175px;
                        border-radius: 26px;
                        padding: 20px;
                        display: flex;
                        flex-direction: column;
                        justify-content: space-between;
                        overflow: hidden;
                        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.06);
                        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
                        text-decoration: none !important;
                    }
                    .cat-pop-card:hover {
                        transform: translateY(-6px);
                        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
                    }
                    .cat-pop-card-grid {
                        position: absolute;
                        bottom: 0;
                        left: 0;
                        right: 0;
                        height: 45%;
                        pointer-events: none;
                        opacity: 0.22;
                        background-image: linear-gradient(45deg, rgba(255,255,255,0.9) 25%, transparent 25%), 
                                          linear-gradient(-45deg, rgba(255,255,255,0.9) 25%, transparent 25%), 
                                          linear-gradient(45deg, transparent 75%, rgba(255,255,255,0.9) 75%), 
                                          linear-gradient(-45deg, transparent 75%, rgba(255,255,255,0.9) 75%);
                        background-size: 16px 16px;
                        background-position: 0 0, 0 8px, 8px -8px, -8px 0px;
                    }
                    .cat-pop-title {
                        font-size: 20px;
                        font-weight: 900;
                        color: #111827;
                        line-height: 1.2;
                        margin: 0;
                    }
                    .cat-pop-subtitle {
                        font-size: 12px;
                        font-weight: 700;
                        color: rgba(17, 24, 39, 0.75);
                        margin-top: 4px;
                        margin-bottom: 0;
                    }
                    .cat-pop-btn {
                        display: inline-flex;
                        align-items: center;
                        gap: 4px;
                        padding: 6px 16px;
                        background-color: #ffffff;
                        color: #111827;
                        font-size: 12px;
                        font-weight: 900;
                        border-radius: 9999px;
                        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.12);
                        transition: all 0.25s ease;
                    }
                    .cat-pop-card:hover .cat-pop-btn {
                        background-color: #111827;
                        color: #ffffff;
                        transform: scale(1.05);
                    }
                    .cat-pop-box {
                        position: relative;
                        z-index: 10;
                        width: 72px;
                        height: 72px;
                        background-color: #111827;
                        border-radius: 20px;
                        box-shadow: 0 10px 25px rgba(0,0,0,0.25);
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        color: #ffffff;
                        transform: rotate(-6deg);
                        transition: all 0.3s ease;
                        border: 2px solid rgba(255, 255, 255, 0.25);
                    }
                    .cat-pop-card:hover .cat-pop-box {
                        transform: rotate(3deg) scale(1.1);
                    }
                    .cat-pop-badge {
                        position: absolute;
                        top: -10px;
                        right: -10px;
                        width: 30px;
                        height: 30px;
                        border-radius: 50%;
                        border: 2px solid #ffffff;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        font-size: 13px;
                        font-weight: bold;
                        box-shadow: 0 4px 8px rgba(0,0,0,0.15);
                    }
                </style>

                <div class="swiper-container swiper" id="swiper-1" data-pagination-type="" data-speed="400"
                    data-space-between="20" data-pagination="false" data-navigation="true" data-autoplay="true"
                    data-autoplay-delay="3000" data-effect="slide"
                    data-breakpoints='{"480": {"slidesPerView": 1.2}, "640": {"slidesPerView": 2}, "1024": {"slidesPerView": 3.8}}'>
                    <div class="swiper-wrapper py-10">
                        <!-- Slide 1: Thiệp Truyền Thống -->
                        <div class="swiper-slide">
                            <a href="#!" class="cat-pop-card" style="background: linear-gradient(135deg, #d2f872 0%, #bbf156 50%, #9ee538 100%);">
                                <div class="cat-pop-card-grid"></div>

                                <!-- Left Content -->
                                <div style="position: relative; z-index: 10; max-width: 60%;">
                                    <h3 class="cat-pop-title">Thiệp Truyền Thống</h3>
                                    <p class="cat-pop-subtitle">Nét Đẹp Đậm Chất Việt</p>
                                </div>
                                <div style="position: relative; z-index: 10;">
                                    <span class="cat-pop-btn">GO <span style="font-size: 10px;">❯</span></span>
                                </div>

                                <!-- Right 3D Graphics -->
                                <div style="position: absolute; right: 10px; top: 10px; bottom: 10px; width: 110px; display: flex; align-items: center; justify-content: center;">
                                    <svg style="position: absolute; width: 100px; height: 100px; color: rgba(17,24,39,0.25); pointer-events: none;" viewBox="0 0 100 100">
                                        <circle cx="50" cy="50" r="42" fill="none" stroke="currentColor" stroke-width="4" stroke-dasharray="120 40"/>
                                        <polygon points="90,45 96,55 84,55" fill="currentColor"/>
                                    </svg>
                                    <div class="cat-pop-box">
                                        <i class="ti ti-book text-3xl" style="color: #facc15; font-size: 32px;"></i>
                                        <div class="cat-pop-badge" style="background-color: #facc15;">😊</div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Slide 2: Thiệp Tối Giản -->
                        <div class="swiper-slide">
                            <a href="#!" class="cat-pop-card" style="background: linear-gradient(135deg, #fbb6e6 0%, #f79ee0 50%, #f47ad4 100%);">
                                <div class="cat-pop-card-grid"></div>

                                <div style="position: relative; z-index: 10; max-width: 60%;">
                                    <h3 class="cat-pop-title">Thiệp Tối Giản</h3>
                                    <p class="cat-pop-subtitle">Tinh Tế & Nhẹ Nhàng</p>
                                </div>
                                <div style="position: relative; z-index: 10;">
                                    <span class="cat-pop-btn">GO <span style="font-size: 10px;">❯</span></span>
                                </div>

                                <div style="position: absolute; right: 10px; top: 10px; bottom: 10px; width: 110px; display: flex; align-items: center; justify-content: center;">
                                    <svg style="position: absolute; width: 100px; height: 100px; color: rgba(17,24,39,0.25); pointer-events: none;" viewBox="0 0 100 100">
                                        <circle cx="50" cy="50" r="42" fill="none" stroke="currentColor" stroke-width="4" stroke-dasharray="100 50"/>
                                    </svg>
                                    <div class="cat-pop-box">
                                        <span style="font-size: 24px; font-weight: 900; color: #ffffff;">Aa</span>
                                        <div class="cat-pop-badge" style="background-color: #10b981; color: #ffffff;">🟢</div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Slide 3: Thiệp Hoa Lá -->
                        <div class="swiper-slide">
                            <a href="#!" class="cat-pop-card" style="background: linear-gradient(135deg, #9cf4ed 0%, #6beae0 50%, #43ded2 100%);">
                                <div class="cat-pop-card-grid"></div>

                                <div style="position: relative; z-index: 10; max-width: 60%;">
                                    <h3 class="cat-pop-title">Thiệp Hoa Lá</h3>
                                    <p class="cat-pop-subtitle">Tự Nhiên & Lãng Mạn</p>
                                </div>
                                <div style="position: relative; z-index: 10;">
                                    <span class="cat-pop-btn">GO <span style="font-size: 10px;">❯</span></span>
                                </div>

                                <div style="position: absolute; right: 10px; top: 10px; bottom: 10px; width: 110px; display: flex; align-items: center; justify-content: center;">
                                    <svg style="position: absolute; width: 100px; height: 100px; color: rgba(17,24,39,0.25); pointer-events: none;" viewBox="0 0 100 100">
                                        <circle cx="50" cy="50" r="42" fill="none" stroke="currentColor" stroke-width="4" stroke-dasharray="140 20"/>
                                    </svg>
                                    <div class="cat-pop-box">
                                        <i class="ti ti-flower text-3xl" style="color: #fb7185; font-size: 32px;"></i>
                                        <div class="cat-pop-badge" style="background-color: #fb7185;">🌸</div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Slide 4: Thiệp Sang Trọng -->
                        <div class="swiper-slide">
                            <a href="#!" class="cat-pop-card" style="background: linear-gradient(135deg, #ffe082 0%, #ffd54f 50%, #ffca28 100%);">
                                <div class="cat-pop-card-grid"></div>

                                <div style="position: relative; z-index: 10; max-width: 60%;">
                                    <h3 class="cat-pop-title">Thiệp Sang Trọng</h3>
                                    <p class="cat-pop-subtitle">Đẳng Cấp & Kiêu Sa</p>
                                </div>
                                <div style="position: relative; z-index: 10;">
                                    <span class="cat-pop-btn">GO <span style="font-size: 10px;">❯</span></span>
                                </div>

                                <div style="position: absolute; right: 10px; top: 10px; bottom: 10px; width: 110px; display: flex; align-items: center; justify-content: center;">
                                    <svg style="position: absolute; width: 100px; height: 100px; color: rgba(17,24,39,0.25); pointer-events: none;" viewBox="0 0 100 100">
                                        <circle cx="50" cy="50" r="42" fill="none" stroke="currentColor" stroke-width="4" stroke-dasharray="110 30"/>
                                    </svg>
                                    <div class="cat-pop-box">
                                        <i class="ti ti-diamond text-3xl" style="color: #fcd34d; font-size: 32px;"></i>
                                        <div class="cat-pop-badge" style="background-color: #fbbf24;">💎</div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Slide 5: Thiệp Vintage -->
                        <div class="swiper-slide">
                            <a href="#!" class="cat-pop-card" style="background: linear-gradient(135deg, #ffab91 0%, #ff8a65 50%, #ff7043 100%);">
                                <div class="cat-pop-card-grid"></div>

                                <div style="position: relative; z-index: 10; max-width: 60%;">
                                    <h3 class="cat-pop-title">Thiệp Vintage</h3>
                                    <p class="cat-pop-subtitle">Hoài Niệm & Ấm Cúng</p>
                                </div>
                                <div style="position: relative; z-index: 10;">
                                    <span class="cat-pop-btn">GO <span style="font-size: 10px;">❯</span></span>
                                </div>

                                <div style="position: absolute; right: 10px; top: 10px; bottom: 10px; width: 110px; display: flex; align-items: center; justify-content: center;">
                                    <svg style="position: absolute; width: 100px; height: 100px; color: rgba(17,24,39,0.25); pointer-events: none;" viewBox="0 0 100 100">
                                        <circle cx="50" cy="50" r="42" fill="none" stroke="currentColor" stroke-width="4" stroke-dasharray="130 30"/>
                                    </svg>
                                    <div class="cat-pop-box">
                                        <i class="ti ti-camera text-3xl" style="color: #fdba74; font-size: 32px;"></i>
                                        <div class="cat-pop-badge" style="background-color: #fb923c;">📷</div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Slide 6: Thiệp Acrylic -->
                        <div class="swiper-slide">
                            <a href="#!" class="cat-pop-card" style="background: linear-gradient(135deg, #d1c4e9 0%, #b39ddb 50%, #9575cd 100%);">
                                <div class="cat-pop-card-grid"></div>

                                <div style="position: relative; z-index: 10; max-width: 60%;">
                                    <h3 class="cat-pop-title">Thiệp Acrylic</h3>
                                    <p class="cat-pop-subtitle">Trong Suốt & Hiện Đại</p>
                                </div>
                                <div style="position: relative; z-index: 10;">
                                    <span class="cat-pop-btn">GO <span style="font-size: 10px;">❯</span></span>
                                </div>

                                <div style="position: absolute; right: 10px; top: 10px; bottom: 10px; width: 110px; display: flex; align-items: center; justify-content: center;">
                                    <svg style="position: absolute; width: 100px; height: 100px; color: rgba(17,24,39,0.25); pointer-events: none;" viewBox="0 0 100 100">
                                        <circle cx="50" cy="50" r="42" fill="none" stroke="currentColor" stroke-width="4" stroke-dasharray="80 60"/>
                                    </svg>
                                    <div class="cat-pop-box">
                                        <i class="ti ti-box-transparent text-3xl" style="color: #d8b4fe; font-size: 32px;"></i>
                                        <div class="cat-pop-badge" style="background-color: #c084fc;">✨</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- Add Navigation -->
                    <div class="swiper-navigation">
                        <div class="swiper-button-next top-[28px]"></div>
                        <div class="swiper-button-prev top-[28px] !right-0 !left-auto mx-10"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Mẫu Thiệp Bán Chạy Start-->
        <section class="lg:my-14 my-8">
            <div class="container">
                <div class="flex flex-wrap">
                    <div class="w-full mb-6">
                        <h2 class="text-lg">Mẫu Thiệp Bán Chạy</h2>
                    </div>
                </div>

                <div class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:gap-4 xl:grid-cols-5 mobile-grid-2">
                    @forelse($templates as $item)
                    <div class="relative rounded-lg break-words border border-gray-200 overflow-hidden" style="background:transparent;">
                        <!-- Full card iframe preview with glassmorphism info overlay -->
                        <div class="preview-container" style="position:relative; overflow:hidden; aspect-ratio:1/2; background:#f9f5ef; border-radius:8px;">
                            <div style="position:absolute; top:8px; left:8px; z-index:30;">
                                <span style="display:inline-block; padding:2px 6px; font-weight:600; font-size:12px; border-radius:4px; background:#dc2626; color:white;">Sale</span>
                            </div>
                            <div class="preview-scale-wrap" style="position:absolute; top:0; left:0; width:480px; height:2000px; transform-origin:0 0; transform:scale(0.5);">
                                <iframe src="{{ url('/mau-thiep/'.$item->id.'/preview') }}" style="width:100%; height:100%; border:none; pointer-events:none; overflow:hidden;" scrolling="no" loading="lazy" tabindex="-1"></iframe>
                            </div>
                            <div class="card-product-action" style="position:absolute; top:40%; left:50%; transform:translate(-50%,-50%); z-index:25; opacity:0; visibility:hidden; display:flex; gap:8px; transition: all 0.3s ease;">
                                <button type="button" class="action-btn hover-bg-green" style="height:36px;width:36px;background:white;border-radius:8px;border:none;display:flex;align-items:center;justify-content:center;box-shadow:0 2px 8px rgba(0,0,0,.2);cursor:pointer;" data-bs-toggle="modal" data-bs-target="#quickViewModal" data-name="{{ $item->name }}" data-category="{{ $item->category->name ?? 'Thiep Mau' }}" data-image="{{ asset($item->thumbnail) }}" data-id="{{ $item->id }}" data-code="MT-{{ str_pad($item->id, 5, '0', STR_PAD_LEFT) }}" title="Quick View">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"/><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6"/></svg>
                                </button>
                                <a href="#!" class="action-btn hover-bg-green" style="height:36px;width:36px;background:white;border-radius:8px;display:flex;align-items:center;justify-content:center;box-shadow:0 2px 8px rgba(0,0,0,.2);color:inherit;text-decoration:none;" title="Wishlist">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"/></svg>
                                </a>
                                <a href="#!" class="action-btn hover-bg-green" style="height:36px;width:36px;background:white;border-radius:8px;display:flex;align-items:center;justify-content:center;box-shadow:0 2px 8px rgba(0,0,0,.2);color:inherit;text-decoration:none;" title="Compare">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 10h14l-4 -4"/><path d="M17 14h-14l4 4"/></svg>
                                </a>
                            </div>
                            <div class="card-gradient-overlay" style="position:absolute; bottom:0; left:0; right:0; z-index:20; padding:30px 12px 12px; background:linear-gradient(to top, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0.4) 60%, transparent 100%); pointer-events:none; transition: all 0.3s ease;">
                                <div class="overlay-category" style="font-size:11px; color:#e5e7eb; margin-bottom:2px; text-shadow:0 1px 2px rgba(0,0,0,0.5);">{{ $item->category->name ?? 'Mau Thiep' }}</div>
                                <div class="overlay-title" style="font-size:14px; font-weight:600; color:#ffffff; white-space:nowrap; overflow:hidden; text-overflow:ellipsis; margin-bottom:6px; text-shadow:0 1px 3px rgba(0,0,0,0.8);">{{ $item->name }}</div>
                                <div style="display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:6px;">
                                    <div style="display:flex; align-items:center; gap:3px;">
                                        <span class="overlay-stars" style="color:#fbbf24; font-size:13px; text-shadow:0 1px 2px rgba(0,0,0,0.5);">&#9733;&#9733;&#9733;&#9733;<span style="opacity:.5">&#9733;</span></span>
                                        <span class="overlay-reviews" style="color:#d1d5db; font-size:11px; text-shadow:0 1px 2px rgba(0,0,0,0.5);">(149)</span>
                                    </div>
                                    <div class="action-buttons-wrap" style="display:flex; gap:6px;">
                                        <a href="javascript:void(0)" onclick="openDemo('{{ url('/mau-thiep/'.$item->id.'/preview') }}')" class="overlay-btn" style="background:#4b5563; color:white; padding:4px 10px; border-radius:6px; font-size:12px; font-weight:600; text-decoration:none; white-space:nowrap; z-index:30; position:relative; pointer-events:auto; box-shadow:0 2px 4px rgba(0,0,0,0.3); transition:background 0.3s; display:flex; justify-content:center; align-items:center;" onmouseover="this.style.background='#374151'" onmouseout="this.style.background='#4b5563'">Xem demo</a>
                                        <a href="{{ url('/mau-thiep/'.$item->id.'/edit') }}" class="overlay-btn" style="background:#f43f5e; color:white; padding:4px 10px; border-radius:6px; font-size:12px; font-weight:600; text-decoration:none; white-space:nowrap; z-index:30; position:relative; pointer-events:auto; box-shadow:0 2px 4px rgba(0,0,0,0.3); transition:background 0.3s; display:flex; justify-content:center; align-items:center;" onmouseover="this.style.background='#e11d48'" onmouseout="this.style.background='#f43f5e'">+ Chọn</a>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ url('/mau-thiep/'.$item->id.'/edit') }}" style="position:absolute; inset:0; z-index:15;"></a>
                        </div>
                    </div>
@empty
                    <div class="col-span-full py-10 text-center text-gray-500">Không có mẫu nào.</div>
                    @endforelse
                </div>
            </div>
        </section>

        <!-- Mẫu Thiệp Bán Chạy End-->

        <section>
            <div class="container">
                <div class="flex flex-wrap">
                    <div class="md:w-full mb-6">
                        <h2 class="text-lg">Daily Best Sells</h2>
                    </div>
                </div>
                <div class="block w-full overflow-x-auto scrolling-touch pb-6">
                    <div class="xl:grid gap-4 grid-cols-1 md:grid-cols-2 xl:grid-cols-4 flex-nowrap flex">
                        <div class="flex-0 block w-full md:w-auto">
                            <div class="pt-8 px-6 rounded-lg"
                                style="background: url({{asset('assets/')}}/images/banner/banner-deal.jpg) no-repeat; background-size: cover; height: 470px">
                                <div class="flex flex-col gap-5">
                                    <div class="flex flex-col gap-2">
                                        <h3 class="text-lg text-white">100% Organic Coffee Beans.</h3>
                                        <p class="text-white text-base">Get the best deal before close.</p>
                                    </div>
                                    <div>
                                        <a href="#!"
                                            class="btn inline-flex items-center gap-x-2 bg-rose-500 text-white border-rose-500 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-rose-600 hover:border-rose-600 active:bg-rose-600 active:border-rose-600 focus:outline-none focus:ring-4 focus:ring-rose-300">
                                            <span>Shop Now</span>
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-arrow-right" width="14"
                                                    height="14" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M5 12l14 0"></path>
                                                    <path d="M13 18l6 -6"></path>
                                                    <path d="M13 6l6 6"></path>
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex-0 block w-full md:w-auto">
                            <div
                                class="relative flex flex-col min-w-0 rounded-lg break-words border bg-white border-gray-300 card-product">
                                <div class="flex-auto p-4">
                                    <div class="text-center relative flex justify-center">
                                        <a href="#!"><img src="{{asset('assets/images/')}}/products/product-img-11.jpg"
                                                alt="Grocery Ecommerce Template"
                                                class="mb-3 m-auto max-w-full h-auto" /></a>

                                        <div
                                            class="absolute w-full bottom-[15%] opacity-0 invisible card-product-action">
                                            <a href="#!"
                                                class="h-[34px] w-[34px] leading-[34px] bg-white shadow inline-flex items-center justify-center rounded-lg hover:bg-rose-500 hover:text-white"
                                                data-bs-toggle="tooltip" data-bs-html="true" title="Quick View">
                                                <span data-bs-toggle="modal" data-bs-target="#quickViewModal" 
      data-name="Mẫu Tĩnh" 
      data-category="Thiệp Mẫu" 
      data-image="" 
      data-id="1" 
      data-code="MT-00000">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-eye" width="16" height="16"
                                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                                        <path
                                                            d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                                    </svg>
                                                </span>
                                            </a>
                                            <a href="#!"
                                                class="h-[34px] w-[34px] leading-[34px] bg-white shadow inline-flex items-center justify-center rounded-lg hover:bg-rose-500 hover:text-white"
                                                data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-heart" width="16" height="16"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                </svg>
                                            </a>
                                            <a href="#!"
                                                class="h-[34px] w-[34px] leading-[34px] bg-white shadow inline-flex items-center justify-center rounded-lg hover:bg-rose-500 hover:text-white"
                                                data-bs-toggle="tooltip" data-bs-html="true" title="Compare">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-arrows-exchange" width="16"
                                                    height="16" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M7 10h14l-4 -4" />
                                                    <path d="M17 14h-14l4 4" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="flex flex-col gap-3">
                                        <a href="#!" class="text-decoration-none text-gray-500"><small>Tea, Coffee &
                                                Drinks</small></a>
                                        <div class="flex flex-col gap-2">
                                            <h3 class="text-base truncate"><a href="#!">Roast Ground Coffee</a></h3>

                                            <div class="flex justify-between items-center">
                                                <div>
                                                    <span class="text-gray-900 font-semibold">$13</span>
                                                    <span class="line-through text-gray-500">$18</span>
                                                </div>
                                                <div>
                                                    <div class="flex items-center">
                                                        <small class="text-yellow-500 flex items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="icon icon-tabler icon-tabler-star-filled"
                                                                width="14" height="14" viewBox="0 0 24 24"
                                                                stroke-width="2" stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                <path
                                                                    d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                                                                    stroke-width="0" fill="currentColor" />
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="icon icon-tabler icon-tabler-star-filled"
                                                                width="14" height="14" viewBox="0 0 24 24"
                                                                stroke-width="2" stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                <path
                                                                    d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                                                                    stroke-width="0" fill="currentColor" />
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="icon icon-tabler icon-tabler-star-filled"
                                                                width="14" height="14" viewBox="0 0 24 24"
                                                                stroke-width="2" stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                <path
                                                                    d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                                                                    stroke-width="0" fill="currentColor" />
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="icon icon-tabler icon-tabler-star-filled"
                                                                width="14" height="14" viewBox="0 0 24 24"
                                                                stroke-width="2" stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                <path
                                                                    d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                                                                    stroke-width="0" fill="currentColor" />
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="icon icon-tabler icon-tabler-star-half-filled"
                                                                width="14" height="14" viewBox="0 0 24 24"
                                                                stroke-width="2" stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                <path
                                                                    d="M12 1a.993 .993 0 0 1 .823 .443l.067 .116l2.852 5.781l6.38 .925c.741 .108 1.08 .94 .703 1.526l-.07 .095l-.078 .086l-4.624 4.499l1.09 6.355a1.001 1.001 0 0 1 -1.249 1.135l-.101 -.035l-.101 -.046l-5.693 -3l-5.706 3c-.105 .055 -.212 .09 -.32 .106l-.106 .01a1.003 1.003 0 0 1 -1.038 -1.06l.013 -.11l1.09 -6.355l-4.623 -4.5a1.001 1.001 0 0 1 .328 -1.647l.113 -.036l.114 -.023l6.379 -.925l2.853 -5.78a.968 .968 0 0 1 .904 -.56zm0 3.274v12.476a1 1 0 0 1 .239 .029l.115 .036l.112 .05l4.363 2.299l-.836 -4.873a1 1 0 0 1 .136 -.696l.07 -.099l.082 -.09l3.546 -3.453l-4.891 -.708a1 1 0 0 1 -.62 -.344l-.073 -.097l-.06 -.106l-2.183 -4.424z"
                                                                    stroke-width="0" fill="currentColor" />
                                                            </svg>
                                                        </small>
                                                        <span class="text-gray-700 text-sm ml-2">4.5</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid">
                                            <button type="button"
                                                class="btn bg-rose-500 text-white border-rose-500 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-rose-600 hover:border-rose-600 active:bg-rose-600 active:border-rose-600 focus:outline-none focus:ring-4 focus:ring-rose-300">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-plus" width="14" height="14"
                                                    viewBox="0 0 24 24" stroke-width="3" stroke="currentColor"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M12 5l0 14"></path>
                                                    <path d="M5 12l14 0"></path>
                                                </svg>
                                                <span class="ml-1">Add to Cart</span>
                                            </button>
                                        </div>
                                        <div class="flex justify-start text-center">
                                            <div class="deals-countdown w-full" data-countdown="2028/10/10 00:00:00">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex-0 block w-full md:w-auto">
                            <div
                                class="relative flex flex-col min-w-0 rounded-lg break-words border bg-white border-gray-300 card-product">
                                <div class="flex-auto p-4">
                                    <div class="text-center relative flex justify-center">
                                        <a href="#!"><img src="{{asset('assets/images/')}}/products/product-img-12.jpg"
                                                alt="Grocery Ecommerce Template"
                                                class="mb-3 m-auto max-w-full h-auto" /></a>
                                        <div
                                            class="absolute w-full bottom-[15%] opacity-0 invisible card-product-action">
                                            <a href="#!"
                                                class="h-[34px] w-[34px] leading-[34px] bg-white shadow inline-flex items-center justify-center rounded-lg hover:bg-rose-500 hover:text-white"
                                                data-bs-toggle="tooltip" data-bs-html="true" title="Quick View">
                                                <span data-bs-toggle="modal" data-bs-target="#quickViewModal" 
      data-name="Mẫu Tĩnh" 
      data-category="Thiệp Mẫu" 
      data-image="" 
      data-id="1" 
      data-code="MT-00000">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-eye" width="16" height="16"
                                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                                        <path
                                                            d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                                    </svg>
                                                </span>
                                            </a>
                                            <a href="#!"
                                                class="h-[34px] w-[34px] leading-[34px] bg-white shadow inline-flex items-center justify-center rounded-lg hover:bg-rose-500 hover:text-white"
                                                data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-heart" width="16" height="16"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                </svg>
                                            </a>
                                            <a href="#!"
                                                class="h-[34px] w-[34px] leading-[34px] bg-white shadow inline-flex items-center justify-center rounded-lg hover:bg-rose-500 hover:text-white"
                                                data-bs-toggle="tooltip" data-bs-html="true" title="Compare">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-arrows-exchange" width="16"
                                                    height="16" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M7 10h14l-4 -4" />
                                                    <path d="M17 14h-14l4 4" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="flex flex-col gap-3">
                                        <a href="#!" class="text-decoration-none text-gray-500"><small>Fruits &
                                                Vegetables</small></a>

                                        <div class="flex flex-col gap-2">
                                            <h3 class="text-base truncate"><a href="#!">Crushed Tomatoes</a></h3>
                                            <div class="flex justify-between items-center">
                                                <div>
                                                    <span class="text-gray-900 font-semibold">$13</span>
                                                    <span class="line-through text-gray-500">$18</span>
                                                </div>
                                                <div>
                                                    <div class="flex items-center">
                                                        <small class="text-yellow-500 flex items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="icon icon-tabler icon-tabler-star-filled"
                                                                width="14" height="14" viewBox="0 0 24 24"
                                                                stroke-width="2" stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                <path
                                                                    d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                                                                    stroke-width="0" fill="currentColor" />
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="icon icon-tabler icon-tabler-star-filled"
                                                                width="14" height="14" viewBox="0 0 24 24"
                                                                stroke-width="2" stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                <path
                                                                    d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                                                                    stroke-width="0" fill="currentColor" />
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="icon icon-tabler icon-tabler-star-filled"
                                                                width="14" height="14" viewBox="0 0 24 24"
                                                                stroke-width="2" stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                <path
                                                                    d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                                                                    stroke-width="0" fill="currentColor" />
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="icon icon-tabler icon-tabler-star-filled"
                                                                width="14" height="14" viewBox="0 0 24 24"
                                                                stroke-width="2" stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                <path
                                                                    d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                                                                    stroke-width="0" fill="currentColor" />
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="icon icon-tabler icon-tabler-star-half-filled"
                                                                width="14" height="14" viewBox="0 0 24 24"
                                                                stroke-width="2" stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                <path
                                                                    d="M12 1a.993 .993 0 0 1 .823 .443l.067 .116l2.852 5.781l6.38 .925c.741 .108 1.08 .94 .703 1.526l-.07 .095l-.078 .086l-4.624 4.499l1.09 6.355a1.001 1.001 0 0 1 -1.249 1.135l-.101 -.035l-.101 -.046l-5.693 -3l-5.706 3c-.105 .055 -.212 .09 -.32 .106l-.106 .01a1.003 1.003 0 0 1 -1.038 -1.06l.013 -.11l1.09 -6.355l-4.623 -4.5a1.001 1.001 0 0 1 .328 -1.647l.113 -.036l.114 -.023l6.379 -.925l2.853 -5.78a.968 .968 0 0 1 .904 -.56zm0 3.274v12.476a1 1 0 0 1 .239 .029l.115 .036l.112 .05l4.363 2.299l-.836 -4.873a1 1 0 0 1 .136 -.696l.07 -.099l.082 -.09l3.546 -3.453l-4.891 -.708a1 1 0 0 1 -.62 -.344l-.073 -.097l-.06 -.106l-2.183 -4.424z"
                                                                    stroke-width="0" fill="currentColor" />
                                                            </svg>
                                                        </small>
                                                        <span class="text-gray-700 text-sm ml-2">4.5</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid">
                                            <button type="button"
                                                class="btn bg-rose-500 text-white border-rose-500 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-rose-600 hover:border-rose-600 active:bg-rose-600 active:border-rose-600 focus:outline-none focus:ring-4 focus:ring-rose-300">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-plus" width="14" height="14"
                                                    viewBox="0 0 24 24" stroke-width="3" stroke="currentColor"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M12 5l0 14"></path>
                                                    <path d="M5 12l14 0"></path>
                                                </svg>
                                                <span class="ml-1">Add to Cart</span>
                                            </button>
                                        </div>
                                        <div class="flex justify-start text-center w-full">
                                            <div class="deals-countdown w-full" data-countdown="2028/12/9 00:00:00">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex-0 block w-full md:w-auto">
                            <div
                                class="relative flex flex-col min-w-0 rounded-lg break-words border bg-white border-gray-300 card-product">
                                <div class="flex-auto p-4">
                                    <div class="text-center relative flex justify-center">
                                        <a href="#!"><img src="{{asset('assets/images/')}}/products/product-img-13.jpg"
                                                alt="Grocery Ecommerce Template"
                                                class="mb-3 m-auto max-w-full h-auto" /></a>
                                        <div
                                            class="absolute w-full bottom-[15%] opacity-0 invisible card-product-action">
                                            <a href="#!"
                                                class="h-[34px] w-[34px] leading-[34px] bg-white shadow inline-flex items-center justify-center rounded-lg hover:bg-rose-500 hover:text-white"
                                                data-bs-toggle="tooltip" data-bs-html="true" title="Quick View">
                                                <span data-bs-toggle="modal" data-bs-target="#quickViewModal" 
      data-name="Mẫu Tĩnh" 
      data-category="Thiệp Mẫu" 
      data-image="" 
      data-id="1" 
      data-code="MT-00000">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-eye" width="16" height="16"
                                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                                        <path
                                                            d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                                    </svg>
                                                </span>
                                            </a>
                                            <a href="#!"
                                                class="h-[34px] w-[34px] leading-[34px] bg-white shadow inline-flex items-center justify-center rounded-lg hover:bg-rose-500 hover:text-white"
                                                data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-heart" width="16" height="16"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                </svg>
                                            </a>
                                            <a href="#!"
                                                class="h-[34px] w-[34px] leading-[34px] bg-white shadow inline-flex items-center justify-center rounded-lg hover:bg-rose-500 hover:text-white"
                                                data-bs-toggle="tooltip" data-bs-html="true" title="Compare">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-arrows-exchange" width="16"
                                                    height="16" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M7 10h14l-4 -4" />
                                                    <path d="M17 14h-14l4 4" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex flex-col gap-3">
                                            <a href="#!" class="text-decoration-none text-gray-500"><small>Fruits &
                                                    Vegetables</small></a>

                                            <div class="flex flex-col gap-2">
                                                <h3 class="text-base truncate"><a href="#!">Golden Pineapple</a></h3>
                                                <div class="flex justify-between items-center">
                                                    <div>
                                                        <span class="text-gray-900 font-semibold">$13</span>
                                                        <span class="line-through text-gray-500">$18</span>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <small class="text-yellow-500 flex items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="icon icon-tabler icon-tabler-star-filled"
                                                                width="14" height="14" viewBox="0 0 24 24"
                                                                stroke-width="2" stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                <path
                                                                    d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                                                                    stroke-width="0" fill="currentColor" />
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="icon icon-tabler icon-tabler-star-filled"
                                                                width="14" height="14" viewBox="0 0 24 24"
                                                                stroke-width="2" stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                <path
                                                                    d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                                                                    stroke-width="0" fill="currentColor" />
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="icon icon-tabler icon-tabler-star-filled"
                                                                width="14" height="14" viewBox="0 0 24 24"
                                                                stroke-width="2" stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                <path
                                                                    d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                                                                    stroke-width="0" fill="currentColor" />
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="icon icon-tabler icon-tabler-star-filled"
                                                                width="14" height="14" viewBox="0 0 24 24"
                                                                stroke-width="2" stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                <path
                                                                    d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                                                                    stroke-width="0" fill="currentColor" />
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="icon icon-tabler icon-tabler-star-half-filled"
                                                                width="14" height="14" viewBox="0 0 24 24"
                                                                stroke-width="2" stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                <path
                                                                    d="M12 1a.993 .993 0 0 1 .823 .443l.067 .116l2.852 5.781l6.38 .925c.741 .108 1.08 .94 .703 1.526l-.07 .095l-.078 .086l-4.624 4.499l1.09 6.355a1.001 1.001 0 0 1 -1.249 1.135l-.101 -.035l-.101 -.046l-5.693 -3l-5.706 3c-.105 .055 -.212 .09 -.32 .106l-.106 .01a1.003 1.003 0 0 1 -1.038 -1.06l.013 -.11l1.09 -6.355l-4.623 -4.5a1.001 1.001 0 0 1 .328 -1.647l.113 -.036l.114 -.023l6.379 -.925l2.853 -5.78a.968 .968 0 0 1 .904 -.56zm0 3.274v12.476a1 1 0 0 1 .239 .029l.115 .036l.112 .05l4.363 2.299l-.836 -4.873a1 1 0 0 1 .136 -.696l.07 -.099l.082 -.09l3.546 -3.453l-4.891 -.708a1 1 0 0 1 -.62 -.344l-.073 -.097l-.06 -.106l-2.183 -4.424z"
                                                                    stroke-width="0" fill="currentColor" />
                                                            </svg>
                                                        </small>
                                                        <span class="text-gray-700 text-sm ml-2">4.5</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid">
                                                <button type="button"
                                                    class="btn bg-rose-500 text-white border-rose-500 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-rose-600 hover:border-rose-600 active:bg-rose-600 active:border-rose-600 focus:outline-none focus:ring-4 focus:ring-rose-300">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-plus" width="14" height="14"
                                                        viewBox="0 0 24 24" stroke-width="3" stroke="currentColor"
                                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M12 5l0 14"></path>
                                                        <path d="M5 12l14 0"></path>
                                                    </svg>
                                                    <span class="ml-1">Add to Cart</span>
                                                </button>
                                            </div>
                                            <div class="flex justify-start text-center">
                                                <div class="deals-countdown w-full"
                                                    data-countdown="2028/11/11 00:00:00"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="lg:my-14 my-8">
            <div class="container">
                <div class="flex flex-wrap gap-y-6">
                    <div class="md:w-1/2 lg:w-1/4 px-3">
                        <div class="flex flex-col gap-4">
                            <div class="inline-block"><img src="{{asset('assets/images/')}}/icons/clock.svg" alt="" /></div>
                            <div class="flex flex-col gap-2">
                                <h3 class="text-md">Tạo Thiệp Nhanh Chóng</h3>
                                <p>Dễ dàng tạo và tuỳ chỉnh thiệp cưới trực tuyến chỉ trong vài phút với thao tác vô cùng đơn giản.</p>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 lg:w-1/4 px-3">
                        <div class="flex flex-col gap-4">
                            <div class="inline-block"><img src="{{asset('assets/images/')}}/icons/gift.svg" alt="" /></div>
                            <div class="flex flex-col gap-2">
                                <h3 class="text-md">Chi Phí Tối Ưu</h3>
                                <p>Tiết kiệm chi phí in ấn và vận chuyển. Bạn có thể gửi không giới hạn số lượng thiệp đến khách mời.</p>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 lg:w-1/4 px-3">
                        <div class="flex flex-col gap-4">
                            <div class="inline-block"><img src="{{asset('assets/images/')}}/icons/package.svg" alt="" /></div>
                            <div class="flex flex-col gap-2">
                                <h3 class="text-md">Mẫu Mã Đa Dạng</h3>
                                <p>Hàng ngàn mẫu thiệp cưới đa dạng phong cách từ truyền thống, hiện đại cho đến tối giản sang trọng.</p>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 lg:w-1/4 px-3">
                        <div class="flex flex-col gap-4">
                            <div class="inline-block"><img src="{{asset('assets/images/')}}/icons/refresh-cw.svg" alt="" /></div>
                            <div class="flex flex-col gap-2">
                                <h3 class="text-md">Tiện Ích Vượt Trội</h3>
                                <p>
                                    Tích hợp bản đồ trực tuyến, xác nhận tham dự (RSVP) và nhận tiền mừng trực tiếp một cách an toàn. Tìm hiểu
                                    <a href="#!" class="text-rose-500">thêm</a>.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
<!-- Full Screen Demo Modal -->
<div id="demoModal" style="display:none; position:fixed; inset:0; z-index:99999; background:#fff;">
    <button onclick="closeDemo()" style="position:absolute; top:20px; right:20px; z-index:100000; background:rgba(255,255,255,0.9); color:#333; border:1px solid rgba(0,0,0,0.1); padding:8px 16px; border-radius:30px; cursor:pointer; font-weight:600; font-size:14px; display:flex; align-items:center; gap:6px; box-shadow:0 4px 12px rgba(0,0,0,0.15); backdrop-filter:blur(10px); transition:all 0.3s ease;" onmouseover="this.style.background='#fff'; this.style.transform='scale(1.05)';" onmouseout="this.style.background='rgba(255,255,255,0.9)'; this.style.transform='scale(1)';">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/></svg>
        Đóng
    </button>
    <div id="demoIframeContainer" style="width:100%; height:100%;"></div>
</div>

<script>
function actualCloseModal() {
    document.getElementById('demoModal').style.display = 'none';
    document.getElementById('demoIframeContainer').innerHTML = '';
    document.body.style.overflow = '';
}

function openDemo(url) {
    if (window.location.hash !== '#demo') {
        history.pushState({demoOpen: true}, null, window.location.pathname + window.location.search + "#demo");
    }
    
    document.getElementById('demoIframeContainer').innerHTML = '<iframe src="' + url + '" style="width:100%; height:100%; border:none;"></iframe>';
    
    document.getElementById('demoModal').style.display = 'block';
    document.body.style.overflow = 'hidden';
}

function closeDemo() {
    if (window.location.hash === '#demo') {
        history.back();
    } else {
        actualCloseModal();
    }
}

window.addEventListener('popstate', function(event) {
    if (window.location.hash !== '#demo') {
        actualCloseModal();
    }
});
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var quickViewModal = document.getElementById('quickViewModal');
    if(quickViewModal) {
        quickViewModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget;
            
            var name = button.getAttribute('data-name');
            var category = button.getAttribute('data-category');
            var image = button.getAttribute('data-image');
            var id = button.getAttribute('data-id');
            var code = button.getAttribute('data-code');
            
            // Update title & category
            var modalTitle = quickViewModal.querySelector('h1');
            var modalCategory = quickViewModal.querySelector('a.block.text-rose-500');
            if(modalTitle) modalTitle.textContent = name;
            if(modalCategory) modalCategory.textContent = category;
            
            // Update price
            var priceSpan = quickViewModal.querySelector('.text-gray-900.font-semibold');
            if(priceSpan) {
                priceSpan.textContent = 'Miễn phí';
                priceSpan.classList.add('text-rose-500');
            }
            var oldPriceSpan = quickViewModal.querySelector('.line-through');
            if(oldPriceSpan) oldPriceSpan.style.display = 'none';
            var offSpan = quickViewModal.querySelector('.text-red-600');
            if(offSpan) offSpan.parentNode.style.display = 'none';
            
            // Update features (250g, etc.)
            var sizeBtns = quickViewModal.querySelectorAll('button.btn.border-gray-300');
            if(sizeBtns.length >= 3) {
                sizeBtns[0].textContent = 'Mẫu gốc đẹp';
                sizeBtns[1].textContent = 'Dễ tùy chỉnh';
                sizeBtns[2].textContent = 'Độ nét cao';
            }
            
            // Update Product Code
            var tdElements = quickViewModal.querySelectorAll('td');
            tdElements.forEach(function(td) {
                if(td.textContent.trim() === 'FBB00255') td.textContent = code;
                if(td.textContent.trim() === 'In Stock') td.textContent = 'Sẵn sàng sử dụng';
                if(td.textContent.trim() === 'Fruits') td.textContent = category;
            });
            var shippingSmall = quickViewModal.querySelector('small');
            if (shippingSmall && shippingSmall.textContent.includes('01 day shipping')) {
                shippingSmall.innerHTML = '2,410 lượt xem';
            }
            
            // Update Add to cart button to link
            var addToCartBtn = quickViewModal.querySelector('button.btn.bg-rose-500');
            if(addToCartBtn) {
                var editLink = document.createElement('a');
                editLink.href = '/mau-thiep/' + id + '/edit';
                editLink.className = 'btn bg-rose-500 text-white border-rose-500 hover:bg-rose-600 hover:border-rose-600 justify-center w-full';
                editLink.innerHTML = 'Chỉnh sửa ngay';
                addToCartBtn.parentNode.replaceChild(editLink, addToCartBtn);
            } else {
                var existingLink = quickViewModal.querySelector('a.btn.bg-rose-500');
                if(existingLink) {
                    existingLink.href = '/mau-thiep/' + id + '/edit';
                }
            }
            
            // Update images
            
            var iframe = document.getElementById('quickViewIframe');
            var loader = document.getElementById('quickViewLoader');
            if(iframe) {
                if (loader) loader.style.display = 'flex';
                iframe.src = '/mau-thiep/' + id + '/preview';
            }

            // Update Vietnamese info table
            var qvCode = document.getElementById('qv-code');
            var qvCategory = document.getElementById('qv-category');
            if(qvCode) qvCode.textContent = code;
            if(qvCategory) qvCategory.textContent = category;

        });
    }
});

// Scale preview wrappers dynamically to fill their containers
function resizeIframes() {
    document.querySelectorAll('.preview-container').forEach(container => {
        const wrap = container.querySelector('.preview-scale-wrap');
        if (wrap && container.clientWidth > 0) {
            const scale = container.clientWidth / 480;
            wrap.style.transform = `scale(${scale})`;
        }
    });
}
window.addEventListener('resize', resizeIframes);
document.addEventListener('DOMContentLoaded', resizeIframes);
setTimeout(resizeIframes, 100);
setTimeout(resizeIframes, 600);
</script>

@verbatim
<style>
.preview-container:hover .card-gradient-overlay {
    padding-top: 80px !important;
    background: linear-gradient(to top, rgba(0,0,0,0.95) 0%, rgba(0,0,0,0.5) 75%, transparent 100%) !important;
}
.preview-container:hover .card-product-action {
    opacity: 1 !important;
    visibility: visible !important;
}
.hover-bg-green:hover {
    background: #f43f5e !important;
    color: white !important;
}

@media (min-width: 768px) {
    .action-buttons-wrap {
        width: 100% !important;
        margin-top: 4px !important;
    }
    .action-buttons-wrap .overlay-btn {
        flex: 1 !important;
    }
}

@media (max-width: 767px) {
    .mobile-grid-2 {
        display: grid !important;
        grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
        gap: 0.5rem !important;
    }
    .card-gradient-overlay {
        padding: 20px 8px 8px !important;
    }
    .overlay-category { font-size: 9px !important; margin-bottom: 1px !important; }
    .overlay-title { font-size: 11px !important; margin-bottom: 2px !important; }
    .overlay-stars { font-size: 9px !important; }
    .overlay-reviews { font-size: 9px !important; }
    .overlay-btn { 
        padding: 2px 6px !important; 
        font-size: 9px !important; 
        border-radius: 4px !important; 
        white-space: nowrap !important;
    }

}
</style>
@endverbatim

<script>
// Hover-to-scroll preview animation
const IFRAME_H = 2000; // must match iframe height in HTML

function initHoverScroll() {
    document.querySelectorAll('.preview-container').forEach(container => {
        const wrap = container.querySelector('.preview-scale-wrap');
        if (!wrap || container.dataset.hoverInit) return;
        container.dataset.hoverInit = '1';

        container.addEventListener('mouseenter', () => {
            const scale = container.clientWidth / 480;
            const visibleTemplateH = container.clientHeight / scale;
            const maxScroll = Math.max(0, IFRAME_H - visibleTemplateH);
            wrap.style.transition = 'transform 7s linear';
            wrap.style.transform = `scale(${scale}) translateY(-${maxScroll}px)`;
        });

        container.addEventListener('mouseleave', () => {
            const scale = container.clientWidth / 480;
            wrap.style.transition = 'transform 0.6s ease-out';
            wrap.style.transform = `scale(${scale}) translateY(0px)`;
        });
    });
}

document.addEventListener('DOMContentLoaded', initHoverScroll);
setTimeout(initHoverScroll, 700);
</script>
@endsection
