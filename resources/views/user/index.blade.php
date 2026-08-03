@extends('layouts.user')

@section('content')

@verbatim
<style>
    .custom-banner-slide { height: 350px; }
    @media (min-width: 768px) { .custom-banner-slide { height: 500px; } }
    @media (min-width: 1024px) { .custom-banner-slide { height: 650px; } }
</style>
@endverbatim


        <section class="mt-8">
            <div class="container">
                <div class="swiper-container swiper" id="swiper-1" data-pagination-type="" data-speed="400"
                    data-space-between="100" data-pagination="true" data-navigation="false" data-autoplay="true"
                    data-autoplay-delay="3000" data-effect="fade"
                    data-breakpoints='{"480": {"slidesPerView": 1}, "768": {"slidesPerView": 1}, "1024": {"slidesPerView": 1}}'>
                    <div class="swiper-wrapper pb-8">
                        <div class="swiper-slide custom-banner-slide"
                            style="background: url({{asset('assets/images/banner/banner_1.png')}}) no-repeat; background-size: cover; border-radius: 0.5rem; background-position: center">
                            <div class="lg:py-32 p-12 lg:pl-12 xl:w-2/5 md:w-3/5">
                                <span
                                    class="inline-block p-2 text-sm align-baseline leading-none rounded-lg bg-yellow-500 text-gray-900 font-semibold">Ưu Đãi Mùa Cưới Giảm 50%</span>
                                <div class="my-7 flex flex-col gap-2">
                                    <h1 class="text-gray-900 text-xl lg:text-5xl font-bold leading-tight">Thiết Kế Thiệp Cưới Hiện Đại & Tinh Tế
                                    </h1>
                                    <p class="text-md font-light">Mang đến những bộ sưu tập thiệp cưới đa dạng phong cách, giúp ngày trọng đại của bạn thêm phần hoàn hảo.</p>
                                </div>
                                <a href="#!"
                                    class="btn inline-flex items-center gap-x-2 bg-gray-800 text-white border-gray-800 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-900 hover:border-gray-900 active:bg-gray-900 active:border-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300">
                                    Shop Now
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-arrow-right inline-block" width="14"
                                        height="14" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M5 12l14 0" />
                                        <path d="M13 18l6 -6" />
                                        <path d="M13 6l6 6" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide custom-banner-slide"
                            style="background: url({{asset('assets/images/banner/banner_2.png')}}) no-repeat; background-size: cover; border-radius: 0.5rem; background-position: center">
                            <div class="lg:py-32 lg:pl-12 lg:pr-6 px-12 py-12 xl:w-2/5 md:w-3/5">
                                <span
                                    class="inline-block p-2 text-sm align-baseline leading-none rounded-lg bg-yellow-500 text-gray-900 font-semibold">Miễn Phí In Ấn & Giao Hàng Toàn Quốc</span>
                                <div class="my-7 flex flex-col gap-2">
                                    <h2 class="text-gray-900 text-xl lg:text-5xl font-bold leading-tight">
                                        Miễn Phí In Ấn<br />đơn từ<span class="text-rose-500">500 thiệp</span>
                                    </h2>
                                    <p class="text-md font-light">Áp dụng cho đơn hàng từ 500 thiệp trở lên trong mùa cưới này.</p>
                                </div>
                                <a href="#!"
                                    class="btn inline-flex items-center gap-x-2 bg-gray-800 text-white border-gray-800 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-900 hover:border-gray-900 active:bg-gray-900 active:border-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300">
                                    Shop Now
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-arrow-right inline-block" width="14"
                                        height="14" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M5 12l14 0" />
                                        <path d="M13 18l6 -6" />
                                        <path d="M13 6l6 6" />
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <!-- Add more slides as needed -->
                        <div class="swiper-slide custom-banner-slide"
                            style="background: url({{asset('assets/images/banner/banner_3.png')}}) no-repeat; background-size: cover; border-radius: 0.5rem; background-position: center">
                            <div class="lg:py-32 lg:pl-12 lg:pr-6 px-12 py-12 xl:w-2/5 md:w-3/5">
                                <span
                                    class="inline-block p-2 text-sm align-baseline leading-none rounded-lg bg-yellow-500 text-gray-900 font-semibold">Phong Cách Mới Nhất</span>
                                <div class="my-7 flex flex-col gap-2">
                                    <h2 class="text-gray-900 text-xl lg:text-5xl font-bold leading-tight">
                                        Bộ Sưu Tập<br />Thiệp Cưới <span class="text-rose-500">Cao Cấp</span>
                                    </h2>
                                    <p class="text-md font-light">Tạo ấn tượng khó quên với những mẫu thiệp thiết kế độc quyền.</p>
                                </div>
                                <a href="#!"
                                    class="btn inline-flex items-center gap-x-2 bg-gray-800 text-white border-gray-800 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-900 hover:border-gray-900 active:bg-gray-900 active:border-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300">
                                    Khám Phá
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-arrow-right inline-block" width="14"
                                        height="14" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M5 12l14 0" />
                                        <path d="M13 18l6 -6" />
                                        <path d="M13 6l6 6" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination !bottom-14"></div>
                    <!-- Add Navigation -->
                    <div class="swiper-navigation">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mt-8">
            <div class="container">
                <div class="flex flex-wrap">
                    <div class="w-full">
                        <h2 class="text-lg absolute z-10">Danh Mục Nổi Bật</h2>
                    </div>
                </div>
                <div class="swiper-container swiper" id="swiper-1" data-pagination-type="" data-speed="400"
                    data-space-between="20" data-pagination="false" data-navigation="true" data-autoplay="true"
                    data-autoplay-delay="3000" data-effect="slide"
                    data-breakpoints='{"480": {"slidesPerView": 2}, "768": {"slidesPerView": 3}, "1024": {"slidesPerView": 6}}'>
                    <div class="swiper-wrapper py-12">
                        <div class="swiper-slide">
                            <a href="#!">
                                <div
                                    class="relative rounded-lg break-words border bg-white border-gray-300 transition duration-75 hover:transition hover:duration-500 ease-in-out hover:border-rose-500 hover:shadow-md">
                                    <div class="py-8 text-center">
                                        <i class="ti ti-book text-rose-500 mb-4 inline-block" style="font-size: 64px;"></i>
                                        <div class="text-base">Thiệp Truyền Thống</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#!">
                                <div
                                    class="relative rounded-lg break-words border bg-white border-gray-300 transition duration-75 hover:transition hover:duration-500 ease-in-out hover:border-rose-500 hover:shadow-md">
                                    <div class="py-8 text-center">
                                        <i class="ti ti-layout-board text-rose-500 mb-4 inline-block" style="font-size: 64px;"></i>
                                        <div class="text-base">Thiệp Tối Giản</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#!">
                                <div
                                    class="relative rounded-lg break-words border bg-white border-gray-300 transition duration-75 hover:transition hover:duration-500 ease-in-out hover:border-rose-500 hover:shadow-md">
                                    <div class="py-8 text-center">
                                        <i class="ti ti-flower text-rose-500 mb-4 inline-block" style="font-size: 64px;"></i>
                                        <div class="text-base">Thiệp Hoa Lá</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#!">
                                <div
                                    class="relative rounded-lg break-words border bg-white border-gray-300 transition duration-75 hover:transition hover:duration-500 ease-in-out hover:border-rose-500 hover:shadow-md">
                                    <div class="py-8 text-center">
                                        <i class="ti ti-diamond text-rose-500 mb-4 inline-block" style="font-size: 64px;"></i>
                                        <div class="text-base">Thiệp Sang Trọng</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#!">
                                <div
                                    class="relative rounded-lg break-words border bg-white border-gray-300 transition duration-75 hover:transition hover:duration-500 ease-in-out hover:border-rose-500 hover:shadow-md">
                                    <div class="py-8 text-center">
                                        <i class="ti ti-camera text-rose-500 mb-4 inline-block" style="font-size: 64px;"></i>
                                        <div class="text-base">Thiệp Vintage</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#!">
                                <div
                                    class="relative rounded-lg break-words border bg-white border-gray-300 transition duration-75 hover:transition hover:duration-500 ease-in-out hover:border-rose-500 hover:shadow-md">
                                    <div class="py-8 text-center">
                                        <i class="ti ti-box-transparent text-rose-500 mb-4 inline-block" style="font-size: 64px;"></i>
                                        <div class="text-base">Thiệp Acrylic</div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="#!">
                                <div
                                    class="relative rounded-lg break-words border bg-white border-gray-300 transition duration-75 hover:transition hover:duration-500 ease-in-out hover:border-rose-500 hover:shadow-md">
                                    <div class="py-8 text-center">
                                        <i class="ti ti-package text-rose-500 mb-4 inline-block" style="font-size: 64px;"></i>
                                        <div class="text-base">Thiệp Kraft</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#!">
                                <div
                                    class="relative rounded-lg break-words border bg-white border-gray-300 transition duration-75 hover:transition hover:duration-500 ease-in-out hover:border-rose-500 hover:shadow-md">
                                    <div class="py-8 text-center">
                                        <i class="ti ti-stars text-rose-500 mb-4 inline-block" style="font-size: 64px;"></i>
                                        <div class="text-base">Thiệp Ép Kim</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#!">
                                <div
                                    class="relative rounded-lg break-words border bg-white border-gray-300 transition duration-75 hover:transition hover:duration-500 ease-in-out hover:border-rose-500 hover:shadow-md">
                                    <div class="py-8 text-center">
                                        <i class="ti ti-cut text-rose-500 mb-4 inline-block" style="font-size: 64px;"></i>
                                        <div class="text-base">Thiệp Cắt Laser</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#!">
                                <div
                                    class="relative rounded-lg break-words border bg-white border-gray-300 transition duration-75 hover:transition hover:duration-500 ease-in-out hover:border-rose-500 hover:shadow-md">
                                    <div class="py-8 text-center">
                                        <i class="ti ti-gift text-rose-500 mb-4 inline-block" style="font-size: 64px;"></i>
                                        <div class="text-base">Phụ Kiện Thiệp</div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Add more slides as needed -->
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- Add Navigation -->
                    <div class="swiper-navigation">
                        <div class="swiper-button-next top-[28px]"></div>
                        <div class="swiper-button-prev top-[28px] !right-0 !left-auto mx-10"></div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="flex md:space-x-2 lg:space-x-6 flex-wrap md:flex-nowrap">
                    <div class="w-full md:w-1/2 mb-3 lg:">
                        <div class="py-10 px-8 rounded-lg"
                            style="background: url({{asset('assets/images/banner/banner_2.png')}}) no-repeat; background-size: cover; background-position: center">
                            <div class="flex flex-col gap-5">
                                <div class="flex flex-col gap-1">
                                    <h2 class="font-bold text-xl">Bộ Sưu Tập Sang Trọng</h2>
                                    <p>
                                        Nhận ngay ưu đãi
                                        <span class="font-bold text-gray-800">30%</span> mùa cưới
                                        
                                    </p>
                                </div>

                                <div class="flex flex-wrap">
                                    <a href="#!"
                                        class="btn inline-flex items-center gap-x-2 bg-gray-800 text-white border-gray-800 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-900 hover:border-gray-900 active:bg-gray-900 active:border-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300">
                                        Shop Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2">
                        <div class="py-10 px-8 rounded-lg"
                            style="background: url({{asset('assets/images/banner/banner_3.png')}}) no-repeat; background-size: cover; background-position: center">
                            <div class="flex flex-col gap-5">
                                <div class="flex flex-col gap-1">
                                    <h2 class="font-bold text-xl">Thiết Kế Độc Quyền</h2>
                                    <p>
                                        Nhận ngay ưu đãi
                                        <span class="font-bold text-gray-800">25%</span> trọn gói
                                        
                                    </p>
                                </div>

                                <div class="flex flex-wrap">
                                    <a href="#!"
                                        class="btn inline-flex items-center gap-x-2 bg-gray-800 text-white border-gray-800 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-900 hover:border-gray-900 active:bg-gray-900 active:border-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300">
                                        Shop Now
                                    </a>
                                </div>
                            </div>
                        </div>
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
                        <h2 class="text-lg">Ưu Đãi Đặc Biệt</h2>
                    </div>
                </div>
                <div class="block w-full overflow-x-auto scrolling-touch pb-6">
                    <div class="xl:grid gap-4 grid-cols-1 md:grid-cols-2 xl:grid-cols-4 flex-nowrap flex">
                        <div class="flex-0 block w-full md:w-auto">
                            <div class="pt-8 px-6 rounded-lg"
                                style="background: url({{asset('assets/images/banner/banner_1.png')}}) no-repeat; background-size: cover; height: 470px">
                                <div class="flex flex-col gap-5">
                                    <div class="flex flex-col gap-2">
                                        <h3 class="text-lg text-white">Giảm 50% Cho Đơn Hàng Đầu Tiên.</h3>
                                        <p class="text-white text-base">Đặt in ngay để nhận trọn bộ quà tặng cưới cao cấp.</p>
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
                                        <a href="#!"><img src="{{ asset('assets/images/') }}/products/product-img-11.jpg"
                                                alt="Grocery Ecommerce Template"
                                                class="mb-3 m-auto max-w-full h-auto" /></a>

                                        <div
                                            class="absolute w-full bottom-[15%] opacity-0 invisible card-product-action">
                                            <a href="#!"
                                                class="h-[34px] w-[34px] leading-[34px] bg-white shadow inline-flex items-center justify-center rounded-lg hover:bg-rose-500 hover:text-white"
                                                data-bs-toggle="tooltip" data-bs-html="true" title="Quick View">
                                                <span data-bs-toggle="modal" data-bs-target="#quickViewModal">
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
                                        <a href="#!"><img src="{{ asset('assets/images/') }}/products/product-img-12.jpg"
                                                alt="Grocery Ecommerce Template"
                                                class="mb-3 m-auto max-w-full h-auto" /></a>
                                        <div
                                            class="absolute w-full bottom-[15%] opacity-0 invisible card-product-action">
                                            <a href="#!"
                                                class="h-[34px] w-[34px] leading-[34px] bg-white shadow inline-flex items-center justify-center rounded-lg hover:bg-rose-500 hover:text-white"
                                                data-bs-toggle="tooltip" data-bs-html="true" title="Quick View">
                                                <span data-bs-toggle="modal" data-bs-target="#quickViewModal">
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
                                        <a href="#!"><img src="{{ asset('assets/images/') }}/products/product-img-13.jpg"
                                                alt="Grocery Ecommerce Template"
                                                class="mb-3 m-auto max-w-full h-auto" /></a>
                                        <div
                                            class="absolute w-full bottom-[15%] opacity-0 invisible card-product-action">
                                            <a href="#!"
                                                class="h-[34px] w-[34px] leading-[34px] bg-white shadow inline-flex items-center justify-center rounded-lg hover:bg-rose-500 hover:text-white"
                                                data-bs-toggle="tooltip" data-bs-html="true" title="Quick View">
                                                <span data-bs-toggle="modal" data-bs-target="#quickViewModal">
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
                            <div class="inline-block"><img src="{{ asset('assets/images/') }}/icons/clock.svg" alt="" /></div>
                            <div class="flex flex-col gap-2">
                                <h3 class="text-md">10 minute grocery now</h3>
                                <p>Get your order delivered to your doorstep at the earliest from FreshCart pickup
                                    stores near you.</p>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 lg:w-1/4 px-3">
                        <div class="flex flex-col gap-4">
                            <div class="inline-block"><img src="{{ asset('assets/images/') }}/icons/gift.svg" alt="" /></div>
                            <div class="flex flex-col gap-2">
                                <h3 class="text-md">Best Prices & ers</h3>
                                <p>Cheaper prices than your local supermarket, great cashback offers to top it off. Get
                                    best pricess &
                                    offers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 lg:w-1/4 px-3">
                        <div class="flex flex-col gap-4">
                            <div class="inline-block"><img src="{{ asset('assets/images/') }}/icons/package.svg" alt="" /></div>
                            <div class="flex flex-col gap-2">
                                <h3 class="text-md">Wide Assortment</h3>
                                <p>Choose from 5000+ products across food, personal care, household, bakery, veg and
                                    non-veg & other
                                    categories.</p>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 lg:w-1/4 px-3">
                        <div class="flex flex-col gap-4">
                            <div class="inline-block"><img src="{{ asset('assets/images/') }}/icons/refresh-cw.svg" alt="" /></div>
                            <div class="flex flex-col gap-2">
                                <h3 class="text-md">Easy Returns</h3>
                                <p>
                                    Not satisfied with a product? Return it at the doorstep & get a refund within hours.
                                    No questions
                                    asked
                                    <a href="#!" class="text-rose-500">policy</a>
                                    .
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
@include('user.partials.template-scripts')
@endsection
