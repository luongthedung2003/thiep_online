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
        <!-- Mẫu Thiệp Bán Chạy Start-->
        <section class="lg:my-14 my-8">
            <div class="container">
                <div class="flex flex-wrap">
                    <div class="w-full mb-6">
                        <h2 class="text-lg">Tất Cả Mẫu Thiệp</h2>
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
                                <button type="button" onclick="addToWishlist('{{ $item->id }}', '{{ addslashes($item->name) }}', 0, '{{ asset($item->thumbnail) }}')" class="action-btn hover-bg-green" style="height:36px;width:36px;background:white;border-radius:8px;border:none;display:flex;align-items:center;justify-content:center;box-shadow:0 2px 8px rgba(0,0,0,.2);cursor:pointer;color:inherit;" title="Wishlist">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"/></svg>
                                </button>
                                <button type="button" onclick="addToCart('{{ $item->id }}', '{{ addslashes($item->name) }}', 0, '{{ asset($item->thumbnail) }}', 1)" class="action-btn hover-bg-green" style="height:36px;width:36px;background:white;border-radius:8px;border:none;display:flex;align-items:center;justify-content:center;box-shadow:0 2px 8px rgba(0,0,0,.2);cursor:pointer;color:inherit;" title="Thêm giỏ hàng">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6.331 8h11.339a2 2 0 0 1 1.977 2.304l-1.255 8.152a3 3 0 0 1 -2.966 2.544h-6.852a3 3 0 0 1 -2.965 -2.544l-1.255 -8.152a2 2 0 0 1 1.977 -2.304z"/><path d="M9 11v-5a3 3 0 0 1 6 0v5"/></svg>
                                </button>
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
                            <a href="{{ url('/mau-thiep/'.$item->id.'/edit') }}" style="position:absolute; inset:0; z-index:15;"></a>
                        </div>
                    </div>
@empty
                    <div class="col-span-full py-10 text-center text-gray-500">Không có mẫu nào.</div>
                    @endforelse
                </div>
            </div>
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
                                style="background: url({{asset('assets/images/banner/banner_2.webp')}}) no-repeat; background-size: cover; height: 470px">
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
@foreach($templates->take(3) as $template)
                        <div class="flex-0 block w-full md:w-auto">
                            <div class="relative flex flex-col min-w-0 rounded-lg break-words border bg-white border-gray-300 card-product">
                                {{-- Preview iframe full width, no padding --}}
                                <div class="preview-wrap" style="position:relative; overflow:hidden; width:100%; height:200px; background:#f9f5ef; border-radius:8px 8px 0 0;"
                                     onmouseenter="var iw=this.querySelector('iframe').contentWindow; this._scrollInt = setInterval(function(){ try{ iw.scrollBy(0, 1); }catch(e){} }, 15);"
                                     onmouseleave="clearInterval(this._scrollInt); var iw=this.querySelector('iframe').contentWindow; try{ iw.scrollTo(0,0); }catch(e){}">
                                    <iframe src="{{ url('/mau-thiep/'.$template->id.'/preview') }}"
                                            style="width:100%; height:100%; border:none; pointer-events:none; overflow:hidden;"
                                            scrolling="no" loading="lazy"></iframe>
                                    {{-- 3 nút overlay hiện khi hover --}}
                                    <div class="absolute w-full bottom-[15%] opacity-0 invisible card-product-action flex justify-center gap-2" style="pointer-events:auto; z-index:10;">
                                        <a href="#!"
                                            class="h-[34px] w-[34px] leading-[34px] bg-white shadow inline-flex items-center justify-center rounded-lg hover:bg-rose-500 hover:text-white"
                                            data-bs-toggle="tooltip" data-bs-html="true" title="Quick View">
                                            <span data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                                data-name="{{ $template->name }}"
                                                data-category="{{ $template->category->name ?? 'Thiệp Cưới' }}"
                                                data-image="{{ asset($template->thumbnail) }}"
                                                data-id="{{ $template->id }}"
                                                data-code="MT-{{ str_pad($template->id, 5, '0', STR_PAD_LEFT) }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"/><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6"/></svg>
                                            </span>
                                        </a>
                                        <button type="button" onclick="addToWishlist('{{ $template->id }}', '{{ addslashes($template->name) }}', 0, '{{ asset($template->thumbnail) }}')"
                                            class="h-[34px] w-[34px] leading-[34px] bg-white shadow inline-flex items-center justify-center rounded-lg hover:bg-rose-500 hover:text-white border-0 cursor-pointer text-gray-700"
                                            data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heart" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"/></svg>
                                        </button>
                                        <button type="button" onclick="addToCart('{{ $template->id }}', '{{ addslashes($template->name) }}', 0, '{{ asset($template->thumbnail) }}', 1)"
                                            class="h-[34px] w-[34px] leading-[34px] bg-white shadow inline-flex items-center justify-center rounded-lg hover:bg-rose-500 hover:text-white border-0 cursor-pointer text-gray-700"
                                            data-bs-toggle="tooltip" data-bs-html="true" title="Thêm vào giỏ hàng">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-bag" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6.331 8h11.339a2 2 0 0 1 1.977 2.304l-1.255 8.152a3 3 0 0 1 -2.966 2.544h-6.852a3 3 0 0 1 -2.965 -2.544l-1.255 -8.152a2 2 0 0 1 1.977 -2.304z"/><path d="M9 11v-5a3 3 0 0 1 6 0v5"/></svg>
                                        </button>
                                    </div>
                                </div>
                                {{-- Card info --}}
                                <div class="flex-auto p-4" style="background: rgba(255, 255, 255, 0.7); backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px); border-radius: 0 0 8px 8px;">
                                    <div class="flex flex-col gap-3">
                                        <a href="#!" class="text-decoration-none text-gray-500"><small>{{ $template->category->name ?? 'Thiệp Cưới' }}</small></a>
                                        <div class="flex flex-col gap-2">
                                            <h3 class="text-base truncate"><a href="#!">{{ $template->name }}</a></h3>
                                            <div class="flex justify-between items-center">
                                                <div>
                                                    <span class="text-gray-900 font-semibold">Liên hệ</span>
                                                </div>
                                                <div class="flex items-center">
                                                    <small class="text-yellow-500 flex items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star-filled" width="14" height="14" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" stroke-width="0" fill="currentColor"/></svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star-filled" width="14" height="14" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" stroke-width="0" fill="currentColor"/></svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star-filled" width="14" height="14" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" stroke-width="0" fill="currentColor"/></svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star-filled" width="14" height="14" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" stroke-width="0" fill="currentColor"/></svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star-half-filled" width="14" height="14" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 1a.993 .993 0 0 1 .823 .443l.067 .116l2.852 5.781l6.38 .925c.741 .108 1.08 .94 .703 1.526l-.07 .095l-.078 .086l-4.624 4.499l1.09 6.355a1.001 1.001 0 0 1 -1.249 1.135l-.101 -.035l-.101 -.046l-5.693 -3l-5.706 3c-.105 .055 -.212 .09 -.32 .106l-.106 .01a1.003 1.003 0 0 1 -1.038 -1.06l.013 -.11l1.09 -6.355l-4.623 -4.5a1.001 1.001 0 0 1 .328 -1.647l.113 -.036l.114 -.023l6.379 -.925l2.853 -5.78a.968 .968 0 0 1 .904 -.56zm0 3.274v12.476a1 1 0 0 1 .239 .029l.115 .036l.112 .05l4.363 2.299l-.836 -4.873a1 1 0 0 1 .136 -.696l.07 -.099l.082 -.09l3.546 -3.453l-4.891 -.708a1 1 0 0 1 -.62 -.344l-.073 -.097l-.06 -.106l-2.183 -4.424z" stroke-width="0" fill="currentColor"/></svg>
                                                    </small>
                                                    <span class="text-gray-700 text-sm ml-2">4.5</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid">
                                            <a href="{{ url('/mau-thiep/'.$template->id.'/edit') }}"
                                                class="btn bg-rose-500 text-white border-rose-500 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-rose-600 hover:border-rose-600 active:bg-rose-600 active:border-rose-600 focus:outline-none focus:ring-4 focus:ring-rose-300">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="14" height="14" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 5l0 14"></path><path d="M5 12l14 0"></path></svg>
                                                <span class="ml-1">Chọn Mẫu</span>
                                            </a>
                                        </div>
                                        <div class="flex justify-start text-center">
                                            <div class="deals-countdown w-full" data-countdown="2028/12/31 00:00:00"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
@endforeach
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
    background: #ff0066 !important;
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
