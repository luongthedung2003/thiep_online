@extends('layouts.user')

@section('content')

@verbatim
<style>
    .custom-banner-slide { height: 350px; }
    @media (min-width: 768px) { .custom-banner-slide { height: 500px; } }
    @media (min-width: 1024px) { .custom-banner-slide { height: 650px; } }
</style>
@endverbatim


        <section class="mt-0 w-full overflow-hidden">
            <div class="w-full">
                <div class="swiper-container swiper" id="swiper-1" data-pagination-type="" data-speed="400"
                    data-space-between="100" data-pagination="true" data-navigation="false" data-autoplay="true"
                    data-autoplay-delay="3000" data-effect="fade"
                    data-breakpoints='{"480": {"slidesPerView": 1}, "768": {"slidesPerView": 1}, "1024": {"slidesPerView": 1}}'>
                    <div class="swiper-wrapper pb-8">
                        <div class="swiper-slide custom-banner-slide"
                            style="background: url({{asset('assets/images/banner/banner_1.webp')}}) no-repeat; background-size: cover; border-radius: 0; background-position: center">
                            <div class="w-full h-full flex flex-col items-center justify-center py-12 lg:py-16 px-6 sm:px-12 lg:px-20 text-center max-w-4xl mx-auto">
                                <span style="display:inline-flex; align-items:center; gap:8px; padding:6px 16px; border-radius:9999px; background:rgba(255, 255, 255, 0.85); backdrop-filter:blur(12px); -webkit-backdrop-filter:blur(12px); border:1px solid rgba(229, 231, 235, 0.8); font-size:13px; font-weight:500; color:#374151; box-shadow:0 2px 6px rgba(0,0,0,0.04);">
                                    <span style="width:7px; height:7px; border-radius:50%; background:#10b981; display:inline-block;"></span>
                                    Ưu Đãi Mùa Cưới Giảm 50%
                                </span>
                                <div class="my-5 flex flex-col gap-2 items-center">
                                    <h1 style="font-size: clamp(2.2rem, 4.5vw, 3.5rem); font-weight: 900; letter-spacing: -0.035em; color: #0f172a; line-height: 1.15; font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif; text-align: center;">
                                        Thiết Kế Thiệp Cưới<br /><span style="background: linear-gradient(135deg, #0f172a 0%, #475569 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Hiện Đại & Tinh Tế</span>
                                    </h1>
                                    <p style="font-size: 1.1rem; font-weight: 500; color: #4b5563; letter-spacing: -0.01em; line-height: 1.6; max-width: 520px; margin-left: auto; margin-right: auto; text-align: center;">
                                        Mang đến những bộ sưu tập thiệp cưới đa dạng, giúp ngày trọng đại của bạn thêm phần hoàn hảo.
                                    </p>
                                </div>
                                <a href="{{ url('/mau-thiep') }}" style="display:inline-flex; align-items:center; justify-content:space-between; padding:8px 8px 8px 24px; border-radius:9999px; background:rgba(255, 255, 255, 0.9); backdrop-filter:blur(16px); -webkit-backdrop-filter:blur(16px); border:1px solid rgba(255, 255, 255, 0.8); box-shadow:0 12px 30px -6px rgba(0, 0, 0, 0.1), 0 4px 12px -2px rgba(0, 0, 0, 0.05); font-weight:600; color:#0f172a; font-size:15px; text-decoration:none; transition:all 0.3s cubic-bezier(0.4, 0, 0.2, 1);" onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 18px 36px -6px rgba(0,0,0,0.15), 0 8px 16px -4px rgba(0,0,0,0.08)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 12px 30px -6px rgba(0, 0, 0, 0.1), 0 4px 12px -2px rgba(0, 0, 0, 0.05)'">
                                    <span>Khám phá ngay</span>
                                    <div style="width:38px; height:38px; border-radius:50%; background:#0f172a; color:white; display:flex; align-items:center; justify-content:center; margin-left:20px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide custom-banner-slide"
                            style="background: url({{asset('assets/images/banner/banner_2.webp')}}) no-repeat; background-size: cover; border-radius: 0; background-position: center">
                            <div class="w-full h-full flex flex-col items-center justify-center py-12 lg:py-16 px-6 sm:px-12 lg:px-20 text-center max-w-4xl mx-auto">
                                <span style="display:inline-flex; align-items:center; gap:8px; padding:6px 16px; border-radius:9999px; background:rgba(255, 255, 255, 0.85); backdrop-filter:blur(12px); -webkit-backdrop-filter:blur(12px); border:1px solid rgba(229, 231, 235, 0.8); font-size:13px; font-weight:500; color:#374151; box-shadow:0 2px 6px rgba(0,0,0,0.04);">
                                    <span style="width:7px; height:7px; border-radius:50%; background:#10b981; display:inline-block;"></span>
                                    Miễn Phí In Ấn & Giao Hàng Toàn Quốc
                                </span>
                                <div class="my-5 flex flex-col gap-2 items-center">
                                    <h2 style="font-size: clamp(2.2rem, 4.5vw, 3.5rem); font-weight: 900; letter-spacing: -0.035em; color: #0f172a; line-height: 1.15; font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif; text-align: center;">
                                        Miễn Phí In Ấn<br /><span style="color:#ff0066;">Cho Đơn Từ 500 Thiệp</span>
                                    </h2>
                                    <p style="font-size: 1.1rem; font-weight: 500; color: #4b5563; letter-spacing: -0.01em; line-height: 1.6; max-width: 520px; margin-left: auto; margin-right: auto; text-align: center;">
                                        Áp dụng cho tất cả đơn hàng từ 500 thiệp trở lên trong mùa cưới năm nay.
                                    </p>
                                </div>
                                <a href="{{ url('/mau-thiep') }}" style="display:inline-flex; align-items:center; justify-content:space-between; padding:8px 8px 8px 24px; border-radius:9999px; background:rgba(255, 255, 255, 0.9); backdrop-filter:blur(16px); -webkit-backdrop-filter:blur(16px); border:1px solid rgba(255, 255, 255, 0.8); box-shadow:0 12px 30px -6px rgba(0, 0, 0, 0.1), 0 4px 12px -2px rgba(0, 0, 0, 0.05); font-weight:600; color:#0f172a; font-size:15px; text-decoration:none; transition:all 0.3s cubic-bezier(0.4, 0, 0.2, 1);" onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 18px 36px -6px rgba(0,0,0,0.15), 0 8px 16px -4px rgba(0,0,0,0.08)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 12px 30px -6px rgba(0, 0, 0, 0.1), 0 4px 12px -2px rgba(0, 0, 0, 0.05)'">
                                    <span>Tạo thiệp ngay</span>
                                    <div style="width:38px; height:38px; border-radius:50%; background:#0f172a; color:white; display:flex; align-items:center; justify-content:center; margin-left:20px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- Add more slides as needed -->
                        <div class="swiper-slide custom-banner-slide"
                            style="background: url({{asset('assets/images/banner/banner_3.webp')}}) no-repeat; background-size: cover; border-radius: 0; background-position: center">
                            <div class="w-full h-full flex flex-col items-center justify-center py-12 lg:pt-56 lg:pb-12 px-6 sm:px-12 lg:px-20 text-center max-w-4xl mx-auto">
                                <span style="display:inline-flex; align-items:center; gap:8px; padding:6px 16px; border-radius:9999px; background:rgba(255, 255, 255, 0.85); backdrop-filter:blur(12px); -webkit-backdrop-filter:blur(12px); border:1px solid rgba(229, 231, 235, 0.8); font-size:13px; font-weight:500; color:#374151; box-shadow:0 2px 6px rgba(0,0,0,0.04);">
                                    <span style="width:7px; height:7px; border-radius:50%; background:#10b981; display:inline-block;"></span>
                                    Phong Cách Mới Nhất 2026
                                </span>
                                <div class="my-5 flex flex-col gap-2 items-center">
                                    <h2 style="font-size: clamp(2.2rem, 4.5vw, 3.5rem); font-weight: 900; letter-spacing: -0.035em; color: #0f172a; line-height: 1.15; font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif; text-align: center;">
                                        Bộ Sưu Tập<br /><span style="color:#ff0066;">Thiệp Cưới Cao Cấp</span>
                                    </h2>
                                    <p style="font-size: 1.1rem; font-weight: 500; color: #4b5563; letter-spacing: -0.01em; line-height: 1.6; max-width: 520px; margin-left: auto; margin-right: auto; text-align: center;">
                                        Tạo ấn tượng khó quên với những mẫu thiệp thiết kế độc quyền hiện đại.
                                    </p>
                                </div>
                                <a href="{{ url('/mau-thiep') }}" style="display:inline-flex; align-items:center; justify-content:space-between; padding:8px 8px 8px 24px; border-radius:9999px; background:rgba(255, 255, 255, 0.9); backdrop-filter:blur(16px); -webkit-backdrop-filter:blur(16px); border:1px solid rgba(255, 255, 255, 0.8); box-shadow:0 12px 30px -6px rgba(0, 0, 0, 0.1), 0 4px 12px -2px rgba(0, 0, 0, 0.05); font-weight:600; color:#0f172a; font-size:15px; text-decoration:none; transition:all 0.3s cubic-bezier(0.4, 0, 0.2, 1);" onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 18px 36px -6px rgba(0,0,0,0.15), 0 8px 16px -4px rgba(0,0,0,0.08)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 12px 30px -6px rgba(0, 0, 0, 0.1), 0 4px 12px -2px rgba(0, 0, 0, 0.05)'">
                                    <span>Xem tất cả mẫu</span>
                                    <div style="width:38px; height:38px; border-radius:50%; background:#0f172a; color:white; display:flex; align-items:center; justify-content:center; margin-left:20px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                                    </div>
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
                <style>
                    .cat-card-item {
                        position: relative;
                        width: 100%;
                        height: 185px;
                        filter: drop-shadow(0 6px 16px rgba(0, 0, 0, 0.06));
                        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
                        text-decoration: none !important;
                        display: block;
                    }
                    .cat-card-item:hover {
                        transform: translateY(-6px);
                        filter: drop-shadow(0 14px 28px rgba(0, 0, 0, 0.14));
                    }
                    .cat-card-svg {
                        position: absolute;
                        inset: 0;
                        width: 100%;
                        height: 100%;
                        z-index: 1;
                    }
                    .cat-card-content {
                        position: relative;
                        z-index: 10;
                        height: 100%;
                        padding: 22px 22px 20px 22px;
                        display: flex;
                        flex-direction: column;
                        justify-content: space-between;
                    }
                    .cat-card-title {
                        font-size: 22px;
                        font-weight: 900;
                        color: #111827;
                        line-height: 1.15;
                        letter-spacing: -0.5px;
                        margin: 0;
                    }
                    .cat-card-subtitle {
                        font-size: 12px;
                        font-weight: 700;
                        color: rgba(17, 24, 39, 0.65);
                        margin-top: 4px;
                        margin-bottom: 0;
                    }
                    .cat-card-btn {
                        display: inline-flex;
                        align-items: center;
                        gap: 6px;
                        padding: 7px 20px;
                        background-color: #ffffff;
                        color: #111827;
                        font-size: 13px;
                        font-weight: 900;
                        border-radius: 9999px;
                        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
                        transition: all 0.25s ease;
                        width: fit-content;
                    }
                    .cat-card-item:hover .cat-card-btn {
                        background-color: #111827;
                        color: #ffffff;
                        transform: scale(1.05);
                    }
                    /* 3D Crate Box & Orbit Graphics */
                    .cat-3d-graphic {
                        position: absolute;
                        right: 8px;
                        top: 12px;
                        bottom: 12px;
                        width: 125px;
                        z-index: 15;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        pointer-events: none;
                    }
                    .cat-crate {
                        position: relative;
                        width: 74px;
                        height: 68px;
                        background: linear-gradient(145deg, #1e293b, #0f172a);
                        border-radius: 16px;
                        transform: rotate(-10deg);
                        box-shadow: 0 10px 22px rgba(0,0,0,0.3);
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        border: 2px solid rgba(255, 255, 255, 0.2);
                        transition: transform 0.3s ease;
                    }
                    .cat-card-item:hover .cat-crate {
                        transform: rotate(-4deg) scale(1.08);
                    }
                    .cat-crate-badge {
                        position: absolute;
                        right: -8px;
                        bottom: 4px;
                        width: 30px;
                        height: 30px;
                        border-radius: 50%;
                        border: 2px solid #ffffff;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        font-size: 14px;
                        box-shadow: 0 4px 8px rgba(0,0,0,0.2);
                    }
                </style>

                <!-- SVG Definitions for Reusable Patterns & ClipPaths -->
                <svg style="display: none;">
                    <defs>
                        <!-- Checkerboard Pattern -->
                        <pattern id="cat-grid-pattern" width="32" height="32" patternUnits="userSpaceOnUse">
                            <rect width="16" height="16" fill="rgba(255,255,255,0.35)"/>
                            <rect x="16" width="16" height="16" fill="transparent"/>
                            <rect y="16" width="16" height="16" fill="transparent"/>
                            <rect x="16" y="16" width="16" height="16" fill="rgba(255,255,255,0.35)"/>
                        </pattern>

                        <!-- Card Speech Bubble Clip Path (viewBox 0 0 320 185) -->
                        <clipPath id="cat-card-clip" clipPathUnits="userSpaceOnUse">
                            <path d="M 24,18 L 180,18 C 190,18 198,4 212,3 C 222,3 230,12 238,18 L 296,18 A 24,24 0 0,1 320,42 L 320,161 A 24,24 0 0,1 296,185 L 24,185 A 24,24 0 0,1 0,161 L 0,42 A 24,24 0 0,1 24,18 Z"/>
                        </clipPath>
                    </defs>
                </svg>

                <div class="swiper-container swiper" id="swiper-1" data-pagination-type="" data-speed="400"
                    data-space-between="20" data-pagination="false" data-navigation="true" data-autoplay="true"
                    data-autoplay-delay="3000" data-effect="slide"
                    data-breakpoints='{"480": {"slidesPerView": 1.2}, "640": {"slidesPerView": 2}, "1024": {"slidesPerView": 3.8}}'>
                    <div class="swiper-wrapper py-10">
                        <!-- Slide 1: Thiệp Truyền Thống -->
                        <div class="swiper-slide">
                            <a href="#!" class="cat-card-item">
                                <!-- Card Speech Bubble Background -->
                                <svg class="cat-card-svg" viewBox="0 0 320 185" preserveAspectRatio="none">
                                    <defs>
                                        <linearGradient id="grad-1" x1="0%" y1="0%" x2="100%" y2="100%">
                                            <stop offset="0%" stop-color="#d2f872"/>
                                            <stop offset="50%" stop-color="#bbf156"/>
                                            <stop offset="100%" stop-color="#9ee538"/>
                                        </linearGradient>
                                    </defs>
                                    <!-- Base Card Fill -->
                                    <path d="M 24,18 L 180,18 C 190,18 198,4 212,3 C 222,3 230,12 238,18 L 296,18 A 24,24 0 0,1 320,42 L 320,161 A 24,24 0 0,1 296,185 L 24,185 A 24,24 0 0,1 0,161 L 0,42 A 24,24 0 0,1 24,18 Z" fill="url(#grad-1)"/>
                                    <!-- Bottom Checkerboard Grid overlay -->
                                    <g clip-path="url(#cat-card-clip)">
                                        <rect x="0" y="115" width="320" height="70" fill="url(#cat-grid-pattern)" opacity="0.6"/>
                                    </g>
                                </svg>

                                <!-- Left Content -->
                                <div class="cat-card-content">
                                    <div style="max-width: 60%;">
                                        <h3 class="cat-card-title">Thiệp Truyền Thống</h3>
                                        <p class="cat-card-subtitle">Nét Đẹp Đậm Chất Việt</p>
                                    </div>
                                    <div>
                                        <span class="cat-card-btn">GO <span style="font-size: 11px;">❯</span></span>
                                    </div>
                                </div>

                                <!-- Right 3D Crate & Orbit Graphics -->
                                <div class="cat-3d-graphic">
                                    <svg style="position: absolute; width: 120px; height: 120px; overflow: visible;" viewBox="0 0 120 120">
                                        <!-- Sparkles -->
                                        <line x1="35" y1="20" x2="30" y2="10" stroke="#ffffff" stroke-width="3" stroke-linecap="round"/>
                                        <line x1="48" y1="16" x2="48" y2="5" stroke="#ffffff" stroke-width="3" stroke-linecap="round"/>
                                        <line x1="60" y1="20" x2="65" y2="10" stroke="#ffffff" stroke-width="3" stroke-linecap="round"/>
                                        <!-- Orbit Arrow -->
                                        <path d="M 15 65 C 10 25, 110 15, 115 60 C 120 95, 30 105, 20 78" fill="none" stroke="#4d7c0f" stroke-width="3.5" stroke-linecap="round"/>
                                        <path d="M 30 88 L 18 78 L 28 68" fill="none" stroke="#4d7c0f" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <div class="cat-crate">
                                        <i class="ti ti-book" style="color: #facc15; font-size: 32px;"></i>
                                        <div class="cat-crate-badge" style="background: #facc15;">😊</div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Slide 2: Thiệp Tối Giản -->
                        <div class="swiper-slide">
                            <a href="#!" class="cat-card-item">
                                <svg class="cat-card-svg" viewBox="0 0 320 185" preserveAspectRatio="none">
                                    <defs>
                                        <linearGradient id="grad-2" x1="0%" y1="0%" x2="100%" y2="100%">
                                            <stop offset="0%" stop-color="#fbb6e6"/>
                                            <stop offset="50%" stop-color="#f79ee0"/>
                                            <stop offset="100%" stop-color="#f47ad4"/>
                                        </linearGradient>
                                    </defs>
                                    <path d="M 24,18 L 180,18 C 190,18 198,4 212,3 C 222,3 230,12 238,18 L 296,18 A 24,24 0 0,1 320,42 L 320,161 A 24,24 0 0,1 296,185 L 24,185 A 24,24 0 0,1 0,161 L 0,42 A 24,24 0 0,1 24,18 Z" fill="url(#grad-2)"/>
                                    <g clip-path="url(#cat-card-clip)">
                                        <rect x="0" y="115" width="320" height="70" fill="url(#cat-grid-pattern)" opacity="0.6"/>
                                    </g>
                                </svg>

                                <div class="cat-card-content">
                                    <div style="max-width: 60%;">
                                        <h3 class="cat-card-title">Thiệp Tối Giản</h3>
                                        <p class="cat-card-subtitle">Tinh Tế & Nhẹ Nhàng</p>
                                    </div>
                                    <div>
                                        <span class="cat-card-btn">GO <span style="font-size: 11px;">❯</span></span>
                                    </div>
                                </div>

                                <div class="cat-3d-graphic">
                                    <svg style="position: absolute; width: 120px; height: 120px; overflow: visible;" viewBox="0 0 120 120">
                                        <line x1="35" y1="20" x2="30" y2="10" stroke="#ffffff" stroke-width="3" stroke-linecap="round"/>
                                        <line x1="48" y1="16" x2="48" y2="5" stroke="#ffffff" stroke-width="3" stroke-linecap="round"/>
                                        <line x1="60" y1="20" x2="65" y2="10" stroke="#ffffff" stroke-width="3" stroke-linecap="round"/>
                                        <path d="M 15 65 C 10 25, 110 15, 115 60 C 120 95, 30 105, 20 78" fill="none" stroke="#be185d" stroke-width="3.5" stroke-linecap="round"/>
                                        <path d="M 30 88 L 18 78 L 28 68" fill="none" stroke="#be185d" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <div class="cat-crate">
                                        <span style="font-size: 26px; font-weight: 900; color: #ffffff;">Aa</span>
                                        <div class="cat-crate-badge" style="background: #10b981;">🟢</div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Slide 3: Thiệp Hoa Lá -->
                        <div class="swiper-slide">
                            <a href="#!" class="cat-card-item">
                                <svg class="cat-card-svg" viewBox="0 0 320 185" preserveAspectRatio="none">
                                    <defs>
                                        <linearGradient id="grad-3" x1="0%" y1="0%" x2="100%" y2="100%">
                                            <stop offset="0%" stop-color="#9cf4ed"/>
                                            <stop offset="50%" stop-color="#6beae0"/>
                                            <stop offset="100%" stop-color="#43ded2"/>
                                        </linearGradient>
                                    </defs>
                                    <path d="M 24,18 L 180,18 C 190,18 198,4 212,3 C 222,3 230,12 238,18 L 296,18 A 24,24 0 0,1 320,42 L 320,161 A 24,24 0 0,1 296,185 L 24,185 A 24,24 0 0,1 0,161 L 0,42 A 24,24 0 0,1 24,18 Z" fill="url(#grad-3)"/>
                                    <g clip-path="url(#cat-card-clip)">
                                        <rect x="0" y="115" width="320" height="70" fill="url(#cat-grid-pattern)" opacity="0.6"/>
                                    </g>
                                </svg>

                                <div class="cat-card-content">
                                    <div style="max-width: 60%;">
                                        <h3 class="cat-card-title">Thiệp Hoa Lá</h3>
                                        <p class="cat-card-subtitle">Tự Nhiên & Lãng Mạn</p>
                                    </div>
                                    <div>
                                        <span class="cat-card-btn">GO <span style="font-size: 11px;">❯</span></span>
                                    </div>
                                </div>

                                <div class="cat-3d-graphic">
                                    <svg style="position: absolute; width: 120px; height: 120px; overflow: visible;" viewBox="0 0 120 120">
                                        <line x1="35" y1="20" x2="30" y2="10" stroke="#ffffff" stroke-width="3" stroke-linecap="round"/>
                                        <line x1="48" y1="16" x2="48" y2="5" stroke="#ffffff" stroke-width="3" stroke-linecap="round"/>
                                        <line x1="60" y1="20" x2="65" y2="10" stroke="#ffffff" stroke-width="3" stroke-linecap="round"/>
                                        <path d="M 15 65 C 10 25, 110 15, 115 60 C 120 95, 30 105, 20 78" fill="none" stroke="#0f766e" stroke-width="3.5" stroke-linecap="round"/>
                                        <path d="M 30 88 L 18 78 L 28 68" fill="none" stroke="#0f766e" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <div class="cat-crate">
                                        <i class="ti ti-flower" style="color: #fb7185; font-size: 32px;"></i>
                                        <div class="cat-crate-badge" style="background: #fb7185;">🌸</div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Slide 4: Thiệp Sang Trọng -->
                        <div class="swiper-slide">
                            <a href="#!" class="cat-card-item">
                                <svg class="cat-card-svg" viewBox="0 0 320 185" preserveAspectRatio="none">
                                    <defs>
                                        <linearGradient id="grad-4" x1="0%" y1="0%" x2="100%" y2="100%">
                                            <stop offset="0%" stop-color="#ffe082"/>
                                            <stop offset="50%" stop-color="#ffd54f"/>
                                            <stop offset="100%" stop-color="#ffca28"/>
                                        </linearGradient>
                                    </defs>
                                    <path d="M 24,18 L 180,18 C 190,18 198,4 212,3 C 222,3 230,12 238,18 L 296,18 A 24,24 0 0,1 320,42 L 320,161 A 24,24 0 0,1 296,185 L 24,185 A 24,24 0 0,1 0,161 L 0,42 A 24,24 0 0,1 24,18 Z" fill="url(#grad-4)"/>
                                    <g clip-path="url(#cat-card-clip)">
                                        <rect x="0" y="115" width="320" height="70" fill="url(#cat-grid-pattern)" opacity="0.6"/>
                                    </g>
                                </svg>

                                <div class="cat-card-content">
                                    <div style="max-width: 60%;">
                                        <h3 class="cat-card-title">Thiệp Sang Trọng</h3>
                                        <p class="cat-card-subtitle">Đẳng Cấp & Kiêu Sa</p>
                                    </div>
                                    <div>
                                        <span class="cat-card-btn">GO <span style="font-size: 11px;">❯</span></span>
                                    </div>
                                </div>

                                <div class="cat-3d-graphic">
                                    <svg style="position: absolute; width: 120px; height: 120px; overflow: visible;" viewBox="0 0 120 120">
                                        <line x1="35" y1="20" x2="30" y2="10" stroke="#ffffff" stroke-width="3" stroke-linecap="round"/>
                                        <line x1="48" y1="16" x2="48" y2="5" stroke="#ffffff" stroke-width="3" stroke-linecap="round"/>
                                        <line x1="60" y1="20" x2="65" y2="10" stroke="#ffffff" stroke-width="3" stroke-linecap="round"/>
                                        <path d="M 15 65 C 10 25, 110 15, 115 60 C 120 95, 30 105, 20 78" fill="none" stroke="#b45309" stroke-width="3.5" stroke-linecap="round"/>
                                        <path d="M 30 88 L 18 78 L 28 68" fill="none" stroke="#b45309" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <div class="cat-crate">
                                        <i class="ti ti-diamond" style="color: #fcd34d; font-size: 32px;"></i>
                                        <div class="cat-crate-badge" style="background: #fbbf24;">💎</div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Slide 5: Thiệp Vintage -->
                        <div class="swiper-slide">
                            <a href="#!" class="cat-card-item">
                                <svg class="cat-card-svg" viewBox="0 0 320 185" preserveAspectRatio="none">
                                    <defs>
                                        <linearGradient id="grad-5" x1="0%" y1="0%" x2="100%" y2="100%">
                                            <stop offset="0%" stop-color="#ffab91"/>
                                            <stop offset="50%" stop-color="#ff8a65"/>
                                            <stop offset="100%" stop-color="#ff7043"/>
                                        </linearGradient>
                                    </defs>
                                    <path d="M 24,18 L 180,18 C 190,18 198,4 212,3 C 222,3 230,12 238,18 L 296,18 A 24,24 0 0,1 320,42 L 320,161 A 24,24 0 0,1 296,185 L 24,185 A 24,24 0 0,1 0,161 L 0,42 A 24,24 0 0,1 24,18 Z" fill="url(#grad-5)"/>
                                    <g clip-path="url(#cat-card-clip)">
                                        <rect x="0" y="115" width="320" height="70" fill="url(#cat-grid-pattern)" opacity="0.6"/>
                                    </g>
                                </svg>

                                <div class="cat-card-content">
                                    <div style="max-width: 60%;">
                                        <h3 class="cat-card-title">Thiệp Vintage</h3>
                                        <p class="cat-card-subtitle">Hoài Niệm & Ấm Cúng</p>
                                    </div>
                                    <div>
                                        <span class="cat-card-btn">GO <span style="font-size: 11px;">❯</span></span>
                                    </div>
                                </div>

                                <div class="cat-3d-graphic">
                                    <svg style="position: absolute; width: 120px; height: 120px; overflow: visible;" viewBox="0 0 120 120">
                                        <line x1="35" y1="20" x2="30" y2="10" stroke="#ffffff" stroke-width="3" stroke-linecap="round"/>
                                        <line x1="48" y1="16" x2="48" y2="5" stroke="#ffffff" stroke-width="3" stroke-linecap="round"/>
                                        <line x1="60" y1="20" x2="65" y2="10" stroke="#ffffff" stroke-width="3" stroke-linecap="round"/>
                                        <path d="M 15 65 C 10 25, 110 15, 115 60 C 120 95, 30 105, 20 78" fill="none" stroke="#c2410c" stroke-width="3.5" stroke-linecap="round"/>
                                        <path d="M 30 88 L 18 78 L 28 68" fill="none" stroke="#c2410c" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <div class="cat-crate">
                                        <i class="ti ti-camera" style="color: #fdba74; font-size: 32px;"></i>
                                        <div class="cat-crate-badge" style="background: #fb923c;">📷</div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Slide 6: Thiệp Acrylic -->
                        <div class="swiper-slide">
                            <a href="#!" class="cat-card-item">
                                <svg class="cat-card-svg" viewBox="0 0 320 185" preserveAspectRatio="none">
                                    <defs>
                                        <linearGradient id="grad-6" x1="0%" y1="0%" x2="100%" y2="100%">
                                            <stop offset="0%" stop-color="#d1c4e9"/>
                                            <stop offset="50%" stop-color="#b39ddb"/>
                                            <stop offset="100%" stop-color="#9575cd"/>
                                        </linearGradient>
                                    </defs>
                                    <path d="M 24,18 L 180,18 C 190,18 198,4 212,3 C 222,3 230,12 238,18 L 296,18 A 24,24 0 0,1 320,42 L 320,161 A 24,24 0 0,1 296,185 L 24,185 A 24,24 0 0,1 0,161 L 0,42 A 24,24 0 0,1 24,18 Z" fill="url(#grad-6)"/>
                                    <g clip-path="url(#cat-card-clip)">
                                        <rect x="0" y="115" width="320" height="70" fill="url(#cat-grid-pattern)" opacity="0.6"/>
                                    </g>
                                </svg>

                                <div class="cat-card-content">
                                    <div style="max-width: 60%;">
                                        <h3 class="cat-card-title">Thiệp Acrylic</h3>
                                        <p class="cat-card-subtitle">Trong Suốt & Hiện Đại</p>
                                    </div>
                                    <div>
                                        <span class="cat-card-btn">GO <span style="font-size: 11px;">❯</span></span>
                                    </div>
                                </div>

                                <div class="cat-3d-graphic">
                                    <svg style="position: absolute; width: 120px; height: 120px; overflow: visible;" viewBox="0 0 120 120">
                                        <line x1="35" y1="20" x2="30" y2="10" stroke="#ffffff" stroke-width="3" stroke-linecap="round"/>
                                        <line x1="48" y1="16" x2="48" y2="5" stroke="#ffffff" stroke-width="3" stroke-linecap="round"/>
                                        <line x1="60" y1="20" x2="65" y2="10" stroke="#ffffff" stroke-width="3" stroke-linecap="round"/>
                                        <path d="M 15 65 C 10 25, 110 15, 115 60 C 120 95, 30 105, 20 78" fill="none" stroke="#6b21a8" stroke-width="3.5" stroke-linecap="round"/>
                                        <path d="M 30 88 L 18 78 L 28 68" fill="none" stroke="#6b21a8" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <div class="cat-crate">
                                        <i class="ti ti-box-transparent" style="color: #d8b4fe; font-size: 32px;"></i>
                                        <div class="cat-crate-badge" style="background: #c084fc;">✨</div>
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

        <section>
            <div class="container">
                <div class="flex md:space-x-2 lg:space-x-6 flex-wrap md:flex-nowrap">
                    <div class="w-full md:w-1/2 mb-3 lg:">
                        <div class="py-10 px-8 rounded-lg"
                            style="background: url({{asset('assets/images/banner/banner_2.webp')}}) no-repeat; background-size: cover; background-position: center">
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
                            style="background: url({{asset('assets/images/banner/banner_3.webp')}}) no-repeat; background-size: cover; background-position: center">
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

        <!-- Mẫu Thiệp Cưới Online Đẹp Nhất 3D Showcase Start -->
        <section class="showcase-3d-section overflow-hidden">
            <div class="w-full mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-4 md:mb-6 px-4">
                    <h2 class="text-2xl md:text-4xl font-extrabold text-gray-900 tracking-tight">
                        Mẫu thiệp cưới online <span class="text-rose-500 font-serif italic text-3xl md:text-5xl font-bold">đẹp nhất</span>
                    </h2>
                    <p class="text-gray-500 text-sm md:text-base mt-2 max-w-xl mx-auto font-medium">
                        Khám phá những mẫu thiệp cưới được thiết kế tinh tế và hiện đại
                    </p>
                </div>

                <!-- 3D Coverflow Slider Container -->
                <div class="relative w-full">
                    <div class="swiper showcase-3d-swiper">
                        <div class="swiper-wrapper">
                            @foreach($templates as $tpl)
                            <div class="swiper-slide showcase-3d-slide">
                                <div class="showcase-card-frame">
                                    <div class="showcase-badge">Mới</div>
                                    <div class="showcase-iframe-wrap">
                                        <iframe src="{{ url('/mau-thiep/'.$tpl->id.'/preview') }}" scrolling="no" loading="lazy" class="showcase-iframe"></iframe>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Custom 3D Slider Navigation Buttons -->
                    <button type="button" class="showcase-prev-btn" aria-label="Previous slide">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#1f2937" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </button>
                    <button type="button" class="showcase-next-btn" aria-label="Next slide">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#1f2937" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </button>
                </div>

                <!-- Custom Pagination Dots -->
                <div class="swiper-pagination showcase-pagination"></div>

                <!-- Showcase CTA Button -->
                <div class="text-center mt-6 mb-2 px-4">
                    <a href="{{ url('/mau-thiep') }}" class="showcase-cta-btn">
                        <span>Xem tất cả mẫu thiệp</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </a>
                    <p class="text-gray-500 text-xs md:text-sm font-medium mt-3">Những mẫu thiệp độc đáo đang chờ bạn</p>
                </div>
            </div>
        </section>
        <!-- Mẫu Thiệp Cưới Online Đẹp Nhất 3D Showcase End -->

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

                            <div class="preview-scale-wrap" style="position:absolute; top:0; left:0; width:480px; height:2000px; transform-origin:0 0; transform:scale(0.5);">
                                <iframe src="{{ url('/mau-thiep/'.$item->id.'/preview') }}" style="width:100%; height:100%; border:none; pointer-events:none; overflow:hidden;" scrolling="no" loading="lazy" tabindex="-1"></iframe>
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
                                        <a href="{{ url('/mau-thiep/'.$item->id.'/edit') }}" class="overlay-btn" style="background:#ff0066; color:white; padding:4px 10px; border-radius:6px; font-size:12px; font-weight:600; text-decoration:none; white-space:nowrap; z-index:30; position:relative; pointer-events:auto; box-shadow:0 2px 4px rgba(0,0,0,0.3); transition:background 0.3s; display:flex; justify-content:center; align-items:center;" onmouseover="this.style.background='#e6005c'" onmouseout="this.style.background='#ff0066'">+ Chọn</a>
                                    </div>
                                </div>
                            </div>
                            <button type="button"
                                style="position:absolute; inset:0; z-index:15; background:transparent; border:none; cursor:pointer;"
                                data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                data-name="{{ $item->name }}"
                                data-category="{{ $item->category->name ?? 'Thiep Mau' }}"
                                data-image="{{ asset($item->thumbnail) }}"
                                data-id="{{ $item->id }}"
                                data-code="MT-{{ str_pad($item->id, 5, '0', STR_PAD_LEFT) }}"
                            ></button>
                        </div>
                    </div>
@empty
                    <div class="col-span-full py-10 text-center text-gray-500">Không có mẫu nào.</div>
                    @endforelse
                </div>
            </div>
        </section>
        <!-- Mẫu Thiệp Bán Chạy End-->

        <!-- Step-by-Step Guide Section Start (Exact 1:1 Match with Reference Image) -->
        <section style="background: #e5e9ee; border-top: 1px solid #cbd5e1; border-bottom: 1px solid #cbd5e1; padding: 60px 0; margin: 40px 0;">
            <div style="max-width: 1280px; margin: 0 auto; padding: 0 24px;">
                <!-- Top-Left Metadata -->
                <div style="font-size: 11px; font-weight: 600; letter-spacing: 0.05em; color: #6b7280; margin-bottom: 30px; text-transform: uppercase;">
                    HƯỚNG DẪN TẠO THIỆP CƯỚI ONLINE DỄ DÀNG
                </div>

                <!-- Section Main Title -->
                <div style="margin-bottom: 45px;">
                    <div style="width: 16px; height: 5px; background: #ff0066; margin-bottom: 10px;"></div>
                    <h2 style="font-size: 26px; font-weight: 800; letter-spacing: -0.01em; color: #111827; margin: 0; text-transform: uppercase;">
                        QUY TRÌNH TẠO THIỆP
                    </h2>
                </div>

                <!-- 5 Columns Step Grid - Guaranteed 1 Single Horizontal Row -->
                <div id="guide-steps-scroll-container" style="overflow-x: auto; width: 100%; padding-bottom: 10px; scroll-behavior: smooth;">
                    <div style="display: flex; flex-direction: row; flex-wrap: nowrap; min-width: 900px; width: 100%; justify-content: space-between; align-items: stretch;">
                        
                        <!-- Step 01 -->
                        <div style="flex: 1; min-width: 0; display: flex; flex-direction: column; justify-content: space-between; padding-right: 24px; border-right: 1px solid rgba(148, 163, 184, 0.4); box-sizing: border-box;">
                            <div>
                                <div style="font-size: 44px; font-weight: 800; color: #ff0066; line-height: 1; font-family: 'Inter', system-ui, sans-serif; margin-bottom: 20px;">
                                    01
                                </div>
                                <div style="font-size: 14px; font-weight: 800; color: #111827; margin-bottom: 4px;">
                                    Chọn Mẫu Thiệp
                                </div>
                                <div style="font-size: 11px; color: #64748b; font-weight: 500; margin-bottom: 8px;">
                                    Bộ sưu tập phong phú
                                </div>
                                <div style="font-size: 12px; color: #475569; font-weight: 400; line-height: 1.5; margin-bottom: 20px;">
                                    Dễ dàng chọn lựa hàng trăm mẫu thiệp cưới hiện đại, sang trọng, tương thích hoàn hảo mọi màn hình.
                                </div>
                                <div style="width: 100%; height: 95px; overflow: hidden; margin-top: 10px;">
                                    <img src="{{ asset('assets/images/banner/banner_1.webp') }}" alt="Chọn mẫu thiệp" style="width: 100%; height: 95px; object-fit: cover; border-radius: 0; display: block;" loading="lazy">
                                </div>
                            </div>
                            <div style="font-size: 11px; color: #9ca3af; font-weight: 400; margin-top: 24px;">
                                Đa dạng phong cách
                            </div>
                        </div>

                        <!-- Step 02 -->
                        <div style="flex: 1; min-width: 0; display: flex; flex-direction: column; justify-content: space-between; padding: 0 24px; border-right: 1px solid rgba(148, 163, 184, 0.4); box-sizing: border-box;">
                            <div>
                                <div style="font-size: 44px; font-weight: 800; color: #ff0066; line-height: 1; font-family: 'Inter', system-ui, sans-serif; margin-bottom: 20px;">
                                    02
                                </div>
                                <div style="font-size: 14px; font-weight: 800; color: #111827; margin-bottom: 4px;">
                                    Nhập Thông Tin
                                </div>
                                <div style="font-size: 11px; color: #64748b; font-weight: 500; margin-bottom: 8px;">
                                    Thông tin lễ cưới
                                </div>
                                <div style="font-size: 12px; color: #475569; font-weight: 400; line-height: 1.5; margin-bottom: 20px;">
                                    Điền tên Chú rể, Cô dâu, ngày giờ tổ chức, địa điểm nhà trai nhà gái & vị trí bản đồ chỉ đường.
                                </div>
                                <div style="width: 100%; height: 95px; overflow: hidden; margin-top: 10px;">
                                    <img src="{{ asset('assets/images/banner/banner_2.webp') }}" alt="Nhập thông tin" style="width: 100%; height: 95px; object-fit: cover; border-radius: 0; display: block;" loading="lazy">
                                </div>
                            </div>
                            <div style="font-size: 11px; color: #9ca3af; font-weight: 400; margin-top: 24px;">
                                Nhập liệu siêu nhanh
                            </div>
                        </div>

                        <!-- Step 03 -->
                        <div style="flex: 1; min-width: 0; display: flex; flex-direction: column; justify-content: space-between; padding: 0 24px; border-right: 1px solid rgba(148, 163, 184, 0.4); box-sizing: border-box;">
                            <div>
                                <div style="font-size: 44px; font-weight: 800; color: #ff0066; line-height: 1; font-family: 'Inter', system-ui, sans-serif; margin-bottom: 20px;">
                                    03
                                </div>
                                <div style="font-size: 14px; font-weight: 800; color: #111827; margin-bottom: 4px;">
                                    Tùy Chỉnh Thiệp
                                </div>
                                <div style="font-size: 11px; color: #64748b; font-weight: 500; margin-bottom: 8px;">
                                    Cá nhân hóa độc đáo
                                </div>
                                <div style="font-size: 12px; color: #475569; font-weight: 400; line-height: 1.5; margin-bottom: 20px;">
                                    Thêm album ảnh cưới lãng mạn, nhạc nền nhẹ nhàng, danh sách mừng cưới & mẫu sổ lời chúc online.
                                </div>
                                <div style="width: 100%; height: 95px; overflow: hidden; margin-top: 10px;">
                                    <img src="{{ asset('assets/images/banner/banner_3.webp') }}" alt="Tùy chỉnh thiệp" style="width: 100%; height: 95px; object-fit: cover; border-radius: 0; display: block;" loading="lazy">
                                </div>
                            </div>
                            <div style="font-size: 11px; color: #9ca3af; font-weight: 400; margin-top: 24px;">
                                Tự do thiết kế
                            </div>
                        </div>

                        <!-- Step 04 -->
                        <div style="flex: 1; min-width: 0; display: flex; flex-direction: column; justify-content: space-between; padding: 0 24px; border-right: 1px solid rgba(148, 163, 184, 0.4); box-sizing: border-box;">
                            <div>
                                <div style="font-size: 44px; font-weight: 800; color: #ff0066; line-height: 1; font-family: 'Inter', system-ui, sans-serif; margin-bottom: 20px;">
                                    04
                                </div>
                                <div style="font-size: 14px; font-weight: 800; color: #111827; margin-bottom: 4px;">
                                    Xem Trước Thiệp
                                </div>
                                <div style="font-size: 11px; color: #64748b; font-weight: 500; margin-bottom: 8px;">
                                    Trực quan thực tế
                                </div>
                                <div style="font-size: 12px; color: #475569; font-weight: 400; line-height: 1.5; margin-bottom: 20px;">
                                    Xem trước giao diện thiệp trực tiếp trên điện thoại & máy tính để kiểm tra chỉnh sửa trước khi gửi.
                                </div>
                                <div style="width: 100%; height: 95px; overflow: hidden; margin-top: 10px;">
                                    <img src="{{ asset('assets/images/banner/grocery-banner-2.jpg') }}" alt="Xem trước thiệp" style="width: 100%; height: 95px; object-fit: cover; border-radius: 0; display: block;" loading="lazy">
                                </div>
                            </div>
                            <div style="font-size: 11px; color: #9ca3af; font-weight: 400; margin-top: 24px;">
                                Hiển thị chuẩn xác
                            </div>
                        </div>

                        <!-- Step 05 -->
                        <div style="flex: 1; min-width: 0; display: flex; flex-direction: column; justify-content: space-between; padding-left: 24px; box-sizing: border-box;">
                            <div>
                                <div style="font-size: 44px; font-weight: 800; color: #ff0066; line-height: 1; font-family: 'Inter', system-ui, sans-serif; margin-bottom: 20px;">
                                    05
                                </div>
                                <div style="font-size: 14px; font-weight: 800; color: #111827; margin-bottom: 4px;">
                                    Tải & Gửi Thiệp
                                </div>
                                <div style="font-size: 11px; color: #64748b; font-weight: 500; margin-bottom: 8px;">
                                    Chia sẻ tức thì
                                </div>
                                <div style="font-size: 12px; color: #475569; font-weight: 400; line-height: 1.5; margin-bottom: 20px;">
                                    Tải liên kết thiệp hoặc mã QR code để gửi nhanh qua Zalo, Messenger, Facebook tới quan khách.
                                </div>
                                <div style="width: 100%; height: 95px; overflow: hidden; margin-top: 10px;">
                                    <img src="{{ asset('assets/images/banner/banner-deal.jpg') }}" alt="Tải và gửi thiệp" style="width: 100%; height: 95px; object-fit: cover; border-radius: 0; display: block;" loading="lazy">
                                </div>
                            </div>
                            <div style="font-size: 11px; color: #9ca3af; font-weight: 400; margin-top: 24px;">
                                Gửi thiệp dễ dàng
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Bottom Metadata -->
                <div style="display: flex; justify-content: space-between; align-items: center; font-size: 11px; font-weight: 500; color: #6b7280; margin-top: 50px; padding-top: 10px;">
                    <span>Hệ Thống Tạo Thiệp Cưới Trực Tuyến</span>
                    <span>Hoàn Toàn Miễn Phí & Dễ Dàng</span>
                </div>
            </div>
        </section>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const scrollContainer = document.getElementById('guide-steps-scroll-container');
                if (!scrollContainer) return;

                let scrollDirection = 1;
                let isPaused = false;

                function startGuideAutoScroll() {
                    return setInterval(function() {
                        if (isPaused) return;
                        const maxScrollLeft = scrollContainer.scrollWidth - scrollContainer.clientWidth;
                        if (maxScrollLeft <= 10) return; // No scroll needed on very wide viewports

                        if (scrollContainer.scrollLeft >= maxScrollLeft - 10) {
                            scrollDirection = -1;
                        } else if (scrollContainer.scrollLeft <= 10) {
                            scrollDirection = 1;
                        }

                        scrollContainer.scrollBy({
                            left: scrollDirection * 220,
                            behavior: 'smooth'
                        });
                    }, 2200);
                }

                let autoScrollTimer = startGuideAutoScroll();

                scrollContainer.addEventListener('mouseenter', function() { isPaused = true; });
                scrollContainer.addEventListener('mouseleave', function() { isPaused = false; });
                scrollContainer.addEventListener('touchstart', function() { isPaused = true; });
                scrollContainer.addEventListener('touchend', function() { isPaused = false; });
            });
        </script>
        <!-- Step-by-Step Guide Section End -->

        <!-- Customer Feedback Section Start (Exact 1:1 Match with Reference Image) -->
        <section style="padding: 70px 0 90px; background: #ffffff; position: relative; overflow: hidden;">
            <div style="max-width: 900px; margin: 0 auto; padding: 0 24px; text-align: center;">
                
                <!-- Section Title -->
                <h2 style="font-size: 26px; font-weight: 900; color: #1e293b; font-family: 'Inter', system-ui, sans-serif; letter-spacing: -0.02em; text-transform: uppercase; margin-bottom: 40px; position: relative; z-index: 2;">
                    ĐÁNH GIÁ TỪ KHÁCH HÀNG
                </h2>

                <!-- Container for Watermark + Card -->
                <div style="position: relative; max-width: 720px; margin: 0 auto;">
                    
                    <!-- Giant Watermark Outline Text -->
                    <div style="font-size: clamp(90px, 16vw, 170px); font-weight: 900; font-family: 'Inter', system-ui, sans-serif; -webkit-text-stroke: 2px #ff0066; color: transparent; line-height: 0.85; opacity: 0.9; user-select: none; pointer-events: none; margin-bottom: -75px; position: relative; z-index: 1; text-align: center; text-transform: lowercase;">
                        feedback
                    </div>

                    <!-- Feedback Card Container -->
                    <div id="feedback-card-container" style="position: relative; z-index: 10; background: #ffffff; border-radius: 24px; box-shadow: 0 25px 60px -15px rgba(15, 23, 42, 0.12), 0 10px 20px -5px rgba(0, 0, 0, 0.04); border: 1px solid rgba(226, 232, 240, 0.8); padding: 40px 45px; text-align: left; transition: all 0.3s ease;">
                        
                        <!-- Floating 3D Heart Speech Bubble Badge -->
                        <div style="position: absolute; top: -35px; right: 30px; width: 76px; height: 76px; background: linear-gradient(135deg, #ff0066 0%, #e6005c 100%); border-radius: 22px 22px 4px 22px; box-shadow: 0 16px 32px rgba(255, 0, 102, 0.35); display: flex; align-items: center; justify-content: center; transform: rotate(6deg); z-index: 20;">
                            <svg width="36" height="36" viewBox="0 0 24 24" fill="#ffffff" stroke="none">
                                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                            </svg>
                        </div>

                        <!-- Feedback Content Item 1 (Active by default) -->
                        <div class="feedback-item active-feedback" id="fb-1">
                            <!-- User Info Header -->
                            <div style="display: flex; align-items: center; gap: 14px; margin-bottom: 24px;">
                                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=150&q=80" alt="Avatar" style="width: 52px; height: 52px; border-radius: 50%; object-fit: cover; border: 2px solid #f1f5f9; box-shadow: 0 2px 6px rgba(0,0,0,0.06);">
                                <div>
                                    <div style="font-size: 17px; font-weight: 800; color: #0f172a; line-height: 1.2;">
                                        Trần Quốc Bảo & Minh Anh
                                    </div>
                                    <div style="color: #fbbf24; font-size: 14px; margin-top: 3px; letter-spacing: 1px;">
                                        ★ ★ ★ ★ ★
                                    </div>
                                </div>
                            </div>

                            <!-- Review Text -->
                            <div style="font-size: 14.5px; color: #334155; line-height: 1.7; font-weight: 400;">
                                Trải nghiệm tuyệt vời tại Thiepcuoivn! Bộ mẫu thiệp cưới online cho lễ thành hôn của chúng mình vô cùng độc đáo, sang trọng và chuẩn định dạng di động. Cảm ơn đội ngũ hỗ trợ đã nhiệt tình hướng dẫn chỉnh sửa chi tiết từng album ảnh cưới, bản đồ chỉ đường và nhạc nền miễn phí. Quan khách hai bên họ hàng ai cũng khen thiệp hiện đại và tiện lợi. <br/><strong style="color: #0f172a; font-weight: 700;">**Rất khuyên dùng cho các cặp đôi!**</strong>
                            </div>
                        </div>

                        <!-- Feedback Content Item 2 -->
                        <div class="feedback-item" id="fb-2" style="display: none;">
                            <div style="display: flex; align-items: center; gap: 14px; margin-bottom: 24px;">
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=150&q=80" alt="Avatar" style="width: 52px; height: 52px; border-radius: 50%; object-fit: cover; border: 2px solid #f1f5f9; box-shadow: 0 2px 6px rgba(0,0,0,0.06);">
                                <div>
                                    <div style="font-size: 17px; font-weight: 800; color: #0f172a; line-height: 1.2;">
                                        Nguyễn Hoàng Nam & Thảo Nguyên
                                    </div>
                                    <div style="color: #fbbf24; font-size: 14px; margin-top: 3px; letter-spacing: 1px;">
                                        ★ ★ ★ ★ ★
                                    </div>
                                </div>
                            </div>
                            <div style="font-size: 14.5px; color: #334155; line-height: 1.7; font-weight: 400;">
                                Thiệp cưới điện tử cực kỳ đẹp mắt và dễ thao tác! Chỉ mất chưa đầy 10 phút là hai đứa mình đã hoàn thành xong thiệp mời để gửi qua Zalo cho bạn bè. Mọi thông tin như mừng cưới QR, đếm ngược ngày cưới và xác nhận tham dự (RSVP) đều hoạt động rất mượt mà. Tiết kiệm rất nhiều thời gian và chi phí in ấn! <br/><strong style="color: #0f172a; font-weight: 700;">**10/10 Dịch vụ hoàn hảo!**</strong>
                            </div>
                        </div>

                        <!-- Feedback Content Item 3 -->
                        <div class="feedback-item" id="fb-3" style="display: none;">
                            <div style="display: flex; align-items: center; gap: 14px; margin-bottom: 24px;">
                                <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?auto=format&fit=crop&w=150&q=80" alt="Avatar" style="width: 52px; height: 52px; border-radius: 50%; object-fit: cover; border: 2px solid #f1f5f9; box-shadow: 0 2px 6px rgba(0,0,0,0.06);">
                                <div>
                                    <div style="font-size: 17px; font-weight: 800; color: #0f172a; line-height: 1.2;">
                                        Lê Văn Tuấn & Ngọc Mai
                                    </div>
                                    <div style="color: #fbbf24; font-size: 14px; margin-top: 3px; letter-spacing: 1px;">
                                        ★ ★ ★ ★ ★
                                    </div>
                                </div>
                            </div>
                            <div style="font-size: 14.5px; color: #334155; line-height: 1.7; font-weight: 400;">
                                Mẫu mã phong phú, giao diện chuẩn retina sắc nét trên cả iPhone và máy tính. Hỗ trợ khách hàng rất ân cần, hướng dẫn chi tiết từ lúc khởi tạo cho đến khi xuất bản liên kết. Bạn bè bạn gái mình nhận thiệp đều hỏi địa chỉ tạo thiệp vì quá ấn tượng. Cảm ơn hệ thống rất nhiều! <br/><strong style="color: #0f172a; font-weight: 700;">**Đáng giá từng trải nghiệm!**</strong>
                            </div>
                        </div>

                        <!-- Navigation Dots -->
                        <div style="display: flex; justify-content: center; gap: 8px; margin-top: 30px;">
                            <button type="button" onclick="switchFeedback(1)" id="fb-dot-1" style="width: 28px; height: 8px; border-radius: 9999px; background: #ff0066; border: none; cursor: pointer; transition: all 0.3s;"></button>
                            <button type="button" onclick="switchFeedback(2)" id="fb-dot-2" style="width: 8px; height: 8px; border-radius: 9999px; background: #cbd5e1; border: none; cursor: pointer; transition: all 0.3s;"></button>
                            <button type="button" onclick="switchFeedback(3)" id="fb-dot-3" style="width: 8px; height: 8px; border-radius: 9999px; background: #cbd5e1; border: none; cursor: pointer; transition: all 0.3s;"></button>
                        </div>

                    </div>
                </div>

            </div>
        </section>

        <script>
            let currentFbIndex = 1;
            let fbAutoSlideTimer = null;

            function renderFeedback(index) {
                currentFbIndex = index;
                for (let i = 1; i <= 3; i++) {
                    const item = document.getElementById('fb-' + i);
                    const dot = document.getElementById('fb-dot-' + i);
                    if (item && dot) {
                        if (i === index) {
                            item.style.display = 'block';
                            dot.style.width = '28px';
                            dot.style.background = '#ff0066';
                        } else {
                            item.style.display = 'none';
                            dot.style.width = '8px';
                            dot.style.background = '#cbd5e1';
                        }
                    }
                }
            }

            function switchFeedback(index) {
                renderFeedback(index);
                restartFbAutoSlide();
            }

            function restartFbAutoSlide() {
                if (fbAutoSlideTimer) clearInterval(fbAutoSlideTimer);
                fbAutoSlideTimer = setInterval(function() {
                    let nextIndex = currentFbIndex >= 3 ? 1 : currentFbIndex + 1;
                    renderFeedback(nextIndex);
                }, 2000);
            }

            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', restartFbAutoSlide);
            } else {
                restartFbAutoSlide();
            }
        </script>
        <!-- Customer Feedback Section End -->



        <section class="lg:my-14 my-8">
            <div class="container">
                <div class="flex flex-wrap gap-y-6">
                    <div class="md:w-1/2 lg:w-1/4 px-3">
                        <div class="flex flex-col gap-4">
                            <div class="inline-block"><img src="{{ asset('assets/images/') }}/icons/clock.svg" alt="" /></div>
                            <div class="flex flex-col gap-2">
                                <h3 class="text-md">Tạo Thiệp Nhanh Chóng</h3>
                                <p>Dễ dàng tạo và tuỳ chỉnh thiệp cưới trực tuyến chỉ trong vài phút với thao tác vô cùng đơn giản.</p>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 lg:w-1/4 px-3">
                        <div class="flex flex-col gap-4">
                            <div class="inline-block"><img src="{{ asset('assets/images/') }}/icons/gift.svg" alt="" /></div>
                            <div class="flex flex-col gap-2">
                                <h3 class="text-md">Chi Phí Tối Ưu</h3>
                                <p>Tiết kiệm chi phí in ấn và vận chuyển. Bạn có thể gửi không giới hạn số lượng thiệp đến khách mời.</p>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 lg:w-1/4 px-3">
                        <div class="flex flex-col gap-4">
                            <div class="inline-block"><img src="{{ asset('assets/images/') }}/icons/package.svg" alt="" /></div>
                            <div class="flex flex-col gap-2">
                                <h3 class="text-md">Mẫu Mã Đa Dạng</h3>
                                <p>Hàng ngàn mẫu thiệp cưới đa dạng phong cách từ truyền thống, hiện đại cho đến tối giản sang trọng.</p>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 lg:w-1/4 px-3">
                        <div class="flex flex-col gap-4">
                            <div class="inline-block"><img src="{{ asset('assets/images/') }}/icons/refresh-cw.svg" alt="" /></div>
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
@endsection
