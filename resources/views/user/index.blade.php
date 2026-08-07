@extends('layouts.user')

@section('content')

@verbatim
<style>
    .custom-banner-slide { height: 350px; }
    @media (min-width: 768px) { .custom-banner-slide { height: 500px; } }
    @media (min-width: 1024px) { .custom-banner-slide { height: 650px; } }
</style>
@endverbatim


        <!-- High-End 3D & Line-Art Graphic Hero Banner Section -->
        <section class="mt-6 mb-10">
            <div class="container">
                <div class="relative bg-[#f8f9fa] rounded-3xl py-12 px-6 md:py-20 md:px-12 overflow-hidden flex flex-col items-center justify-center min-h-[480px] md:min-h-[560px] border border-gray-100/80 shadow-sm" style="font-family: 'Cormorant Garamond', 'Playfair Display', serif;">
                    
                    <!-- Corner 3D Avatar Badges (Absolute Floating) -->
                    <!-- Top-Left Avatar Badge -->
                    <div class="absolute top-4 left-4 md:top-8 md:left-12 z-20 transition-transform duration-300 hover:scale-105 hover:-rotate-3">
                        <img src="{{ asset('assets/images/banner/avatar_top_left.png') }}" class="w-24 md:w-40 lg:w-48 h-auto drop-shadow-lg" alt="3D Avatar Top Left">
                    </div>
                    <!-- Top-Right Avatar Badge -->
                    <div class="absolute top-4 right-4 md:top-8 md:right-12 z-20 transition-transform duration-300 hover:scale-105 hover:rotate-3">
                        <img src="{{ asset('assets/images/banner/avatar_top_right.png') }}" class="w-24 md:w-40 lg:w-48 h-auto drop-shadow-lg" alt="3D Avatar Top Right">
                    </div>
                    <!-- Bottom-Left Avatar Badge -->
                    <div class="absolute bottom-4 left-4 md:bottom-8 md:left-12 z-20 transition-transform duration-300 hover:scale-105 hover:rotate-3">
                        <img src="{{ asset('assets/images/banner/avatar_bot_left.png') }}" class="w-24 md:w-40 lg:w-48 h-auto drop-shadow-lg" alt="3D Avatar Bottom Left">
                    </div>
                    <!-- Bottom-Right Avatar Badge -->
                    <div class="absolute bottom-4 right-4 md:bottom-8 md:right-12 z-20 transition-transform duration-300 hover:scale-105 hover:-rotate-3">
                        <img src="{{ asset('assets/images/banner/avatar_bot_right.png') }}" class="w-24 md:w-40 lg:w-48 h-auto drop-shadow-lg" alt="3D Avatar Bottom Right">
                    </div>

                    <!-- Floating Decorative Dots -->
                    <div class="absolute top-3 left-[51%] -translate-x-1/2 w-3 h-3 rounded-full bg-blue-400 opacity-80"></div>
                    <div class="absolute bottom-8 left-[78%] w-3.5 h-3.5 rounded-full bg-purple-500 opacity-80"></div>
                    <div class="absolute bottom-[35%] left-[26%] w-2.5 h-2.5 rounded-full bg-rose-500 opacity-80"></div>
                    <div class="absolute top-[48%] left-[7%] w-2.5 h-2.5 rounded-full bg-purple-400 opacity-70"></div>
                    <div class="absolute top-[32%] right-[8%] w-2.5 h-2.5 rounded-full bg-rose-500 opacity-80"></div>

                    <!-- Main Typographic Composition -->
                    <div class="relative z-10 flex flex-col items-center justify-center text-center max-w-4xl mx-auto select-none leading-none">
                        
                        <!-- Line 1: Orange + | Take it | Book Doodle | Paper Airplane Dashed Arrow | Let's start Button -->
                        <div class="flex items-center justify-center flex-wrap gap-2 md:gap-4 mb-1 md:mb-3">
                            <!-- Orange Plus (+) Doodle -->
                            <svg class="w-7 h-7 md:w-10 md:h-10 text-amber-500 stroke-current inline-block transform -rotate-12 mr-1" viewBox="0 0 24 24" fill="none" stroke-width="4.5">
                                <path d="M12 4v16M4 12h16" stroke-linecap="round"/>
                            </svg>
                            
                            <!-- Main Text: Take it -->
                            <span class="text-6xl md:text-8xl lg:text-[110px] font-normal text-gray-900 tracking-tight" style="font-family: 'Cormorant Garamond', serif;">
                                Take it
                            </span>

                            <!-- Book Doodle & Dashed Arrow to Let's start -->
                            <div class="relative hidden sm:inline-flex items-center ml-2 md:ml-4">
                                <!-- Book Line Art -->
                                <svg class="w-12 h-10 md:w-16 md:h-12 text-gray-800 opacity-80" viewBox="0 0 48 40" fill="none" stroke="currentColor" stroke-width="1.6">
                                    <path d="M6 10c9 0 14-3.5 18 0 4-3.5 9 0 18 0v24c-9 0-14 3.5-18 0-4 3.5-9 0-18 0V10zM24 10v24" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M10 16h10M10 20h8M10 24h10M28 16h10M28 20h8M28 24h10" stroke-linecap="round"/>
                                </svg>

                                <!-- Dashed Curved Arrow -->
                                <svg class="w-12 h-10 text-gray-600 ml-1 opacity-70" viewBox="0 0 50 40" fill="none" stroke="currentColor" stroke-width="1.5">
                                    <path d="M 5 12 C 15 30, 35 32, 45 20" stroke-dasharray="3 3" stroke-linecap="round"/>
                                    <path d="M 40 18 L 46 20 L 44 26" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>

                                <!-- Pill Button: Let's start -->
                                <a href="{{ url('/mau-thiep') }}" class="inline-flex items-center px-6 py-2.5 rounded-full border border-gray-900 bg-white/80 text-gray-900 text-sm font-sans font-semibold hover:bg-gray-900 hover:text-white transition-all shadow-sm hover:shadow-md transform hover:-translate-y-0.5">
                                    Let's start
                                </a>
                            </div>
                        </div>

                        <!-- Line 2: [the] badge | to next -->
                        <div class="flex items-center justify-center flex-wrap gap-3 md:gap-5 mb-1 md:mb-3">
                            <!-- Rounded Dark Badge: the -->
                            <div class="inline-flex items-center justify-center px-6 py-1.5 md:px-9 md:py-2.5 rounded-2xl bg-[#1e2736] text-white text-4xl md:text-6xl lg:text-7xl font-normal tracking-wide shadow-md transform -rotate-1 border border-gray-800" style="font-family: 'Cormorant Garamond', serif;">
                                the
                            </div>

                            <!-- Text: to next -->
                            <span class="text-6xl md:text-8xl lg:text-[110px] font-normal text-gray-900 tracking-tight" style="font-family: 'Cormorant Garamond', serif;">
                                to next
                            </span>
                        </div>

                        <!-- Line 3: Globe Wireframe Doodle | levels with Orange Circle Accent -->
                        <div class="flex items-center justify-center gap-3 md:gap-6 relative">
                            <!-- Globe Wireframe Doodle (Absolute Left / Relative) -->
                            <div class="absolute -left-16 md:-left-24 bottom-0 hidden sm:block opacity-75">
                                <svg class="w-16 h-16 md:w-24 md:h-24 text-gray-800" viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="1.3">
                                    <circle cx="32" cy="32" r="28"/>
                                    <ellipse cx="32" cy="32" rx="28" ry="11"/>
                                    <ellipse cx="32" cy="32" rx="11" ry="28"/>
                                    <line x1="4" y1="32" x2="60" y2="32"/>
                                    <line x1="32" y1="4" x2="32" y2="60"/>
                                </svg>
                            </div>

                            <!-- Text: levels with ring circle outline overlapping s -->
                            <div class="relative inline-flex items-center">
                                <span class="text-6xl md:text-8xl lg:text-[110px] font-normal text-gray-900 tracking-tight" style="font-family: 'Cormorant Garamond', serif;">
                                    level<span class="relative z-10">s</span>
                                </span>

                                <!-- Orange Ring Circle Accent -->
                                <svg class="absolute right-[-14px] md:right-[-24px] top-1/2 -translate-y-1/2 w-14 h-14 md:w-24 md:h-24 text-amber-500 pointer-events-none" viewBox="0 0 80 80" fill="none" stroke="currentColor" stroke-width="4.5">
                                    <circle cx="40" cy="40" r="34"/>
                                </svg>
                            </div>
                        </div>

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
                                        <a href="#!"
                                            class="h-[34px] w-[34px] leading-[34px] bg-white shadow inline-flex items-center justify-center rounded-lg hover:bg-rose-500 hover:text-white"
                                            data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heart" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"/></svg>
                                        </a>
                                        <a href="#!"
                                            class="h-[34px] w-[34px] leading-[34px] bg-white shadow inline-flex items-center justify-center rounded-lg hover:bg-rose-500 hover:text-white"
                                            data-bs-toggle="tooltip" data-bs-html="true" title="Compare">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrows-exchange" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 10h14l-4 -4"/><path d="M17 14h-14l4 4"/></svg>
                                        </a>
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
    
@include('user.partials.template-scripts')
@endsection
