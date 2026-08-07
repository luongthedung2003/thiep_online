<header id="main-header" style="position: fixed; top: 0; width: 100%; z-index: 1020; background-color: #ffffff; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);">
    <!-- navbar -->
    <div class="border-b">
        <div class="bg-gray-100 py-1">
            <div class="container">
                <div class="flex flex-wrap">
                    <div class="md:w-1/2 w-full text-center md:text-left"><span>Chuyên cung cấp thiệp Online</span>
                    </div>
                    <div class="w-1/2 text-right hidden lg:block">
                        <div class="dropdown flex justify-end">
                            <a class="dropdown-toggle text-inherit flex items-center" href="#!"
                                data-bs-toggle="dropdown" id="dropdownMenuLink">
                                <span class="mr-2">
                                    <svg width="16" height="13" viewBox="0 0 16 13" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" id="languageIcon">
                                        <!-- Default SVG content for English -->
                                        <g clip-path="">
                                            <path d="M0 0.5H16V12.5H0V0.5Z" fill="#012169" />
                                            <path
                                                d="M1.875 0.5L7.975 5.025L14.05 0.5H16V2.05L10 6.525L16 10.975V12.5H14L8 8.025L2.025 12.5H0V11L5.975 6.55L0 2.1V0.5H1.875Z"
                                                fill="white" />
                                            <path
                                                d="M10.6 7.525L16 11.5V12.5L9.225 7.525H10.6ZM6 8.025L6.15 8.9L1.35 12.5H0L6 8.025ZM16 0.5V0.575L9.775 5.275L9.825 4.175L14.75 0.5H16ZM0 0.5L5.975 4.9H4.475L0 1.55V0.5Z"
                                                fill="#C8102E" />
                                            <path d="M6.025 0.5V12.5H10.025V0.5H6.025ZM0 4.5V8.5H16V4.5H0Z"
                                                fill="white" />
                                            <path d="M0 5.325V7.725H16V5.325H0ZM6.825 0.5V12.5H9.225V0.5H6.825Z"
                                                fill="#C8102E" />
                                        </g>
                                    </svg>
                                </span>
                                <span id="selectedLanguage">Việt Nam</span>
                            </a>

                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="#!" onclick="changeLanguage('English')">
                                        <span>
                                            <svg width="16" height="13" viewBox="0 0 16 13" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="">
                                                    <path d="M0 0.5H16V12.5H0V0.5Z" fill="#012169" />
                                                    <path
                                                        d="M1.875 0.5L7.975 5.025L14.05 0.5H16V2.05L10 6.525L16 10.975V12.5H14L8 8.025L2.025 12.5H0V11L5.975 6.55L0 2.1V0.5H1.875Z"
                                                        fill="white" />
                                                    <path
                                                        d="M10.6 7.525L16 11.5V12.5L9.225 7.525H10.6ZM6 8.025L6.15 8.9L1.35 12.5H0L6 8.025ZM16 0.5V0.575L9.775 5.275L9.825 4.175L14.75 0.5H16ZM0 0.5L5.975 4.9H4.475L0 1.55V0.5Z"
                                                        fill="#C8102E" />
                                                    <path d="M6.025 0.5V12.5H10.025V0.5H6.025ZM0 4.5V8.5H16V4.5H0Z"
                                                        fill="white" />
                                                    <path d="M0 5.325V7.725H16V5.325H0ZM6.825 0.5V12.5H9.225V0.5H6.825Z"
                                                        fill="#C8102E" />
                                                </g>
                                                <defs>
                                                    <clipPath>
                                                        <rect width="16" height="12" fill="white"
                                                            transform="translate(0 0.5)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </span>
                                        English
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#!" onclick="changeLanguage('Deutsch')">
                                        <span>
                                            <svg width="16" height="13" viewBox="0 0 16 13" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_5543_19751)">
                                                    <path d="M0 8.5H16V12.5H0V8.5Z" fill="#FFCE00" />
                                                    <path d="M0 0.5H16V4.5H0V0.5Z" fill="black" />
                                                    <path d="M0 4.5H16V8.5H0V4.5Z" fill="#DD0000" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_5543_19751">
                                                        <rect width="16" height="12" fill="white"
                                                            transform="translate(0 0.5)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </span>
                                        English
                                    </a>
                                </li>
                                <!-- Add more languages as needed -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-5">
            <div class="container">
                <div class="flex flex-wrap w-full items-center justify-between">
                    <div class="lg:w-1/6 md:w-1/2 w-2/5">
                        <a class="navbar-brand" href="/">
                            <img src="{{ asset('assets/') }}/images/logo/logo.png"
                                alt="Logo Thiệp Cưới" style="height: 45px;" />
                        </a>
                    </div>
                    <div class="lg:w-2/5 hidden lg:block">
                        <form action="#">
                            <div class="relative">
                                <label for="searchProducts" class="invisible hidden">Search</label>
                                <input
                                    class="border border-gray-300 text-gray-900 rounded-lg focus:shadow-[0_0_0_.25rem_rgba(244,63,94,.25)] focus:ring-rose-500 focus:ring-0 focus:border-rose-500 block p-2 px-3 disabled:opacity-50 disabled:pointer-events-none w-full text-base"
                                    type="search" placeholder="Tìm kiếm mẫu thiệp cưới..." id="searchProducts" />
                                <button class="absolute right-0 top-0 p-3" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search"
                                        width="16" height="16" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                                        <path d="M21 21l-6 -6" />
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="lg:w-1/5 hidden lg:block">
                        <!-- Button trigger modal -->
                        <button type="button"
                            class="btn inline-flex items-center gap-x-2 bg-transparent text-gray-600 border-gray-300 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-700 hover:border-gray-700 active:bg-gray-700 active:border-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300"
                            data-bs-toggle="modal" data-bs-target="#locationModal">
                            <span class="flex items-center gap-1">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin"
                                        width="16" height="16" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                        <path
                                            d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                                    </svg>
                                </span>
                                <span>Location</span>
                            </span>
                        </button>
                    </div>
                    <div class="lg:w-1/5 text-end md:w-1/2 w-3/5">
                        <div class="flex gap-7 items-center justify-end">
                            <div>
                                <button type="button" class="text-gray-600 relative" data-bs-toggle="offcanvas" data-bs-target="#offcanvasFavorites" role="button" aria-controls="offcanvasFavorites">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heart"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                    </svg>
                                    <span
                                        class="absolute top-0 -mt-1 left-full rounded-full h-5 w-5 -ml-2 bg-rose-500 text-white text-center font-semibold text-sm">
                                        5
                                        <span class="invisible">unread messages</span>
                                    </span>
                                </button>
                            </div>
                            <div class="relative dropdown">
                                @auth
                                    <a href="#" class="text-gray-600 font-semibold flex items-center gap-1 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-check" width="22" height="22" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                           <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                           <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                           <path d="M6 21v-2a4 4 0 0 1 4 -4h4"></path>
                                           <path d="M15 19l2 2l4 -4"></path>
                                        </svg>
                                        <span class="hidden lg:block" style="max-width: 150px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;" title="{{ Auth::user()->name }}">{{ Auth::user()->name }}</span>
                                    </a>
                                    <ul class="dropdown-menu shadow-lg rounded-xl border-0 mt-2 p-2">
                                        <li>
                                            <a class="dropdown-item py-2 font-medium text-gray-700 hover:text-rose-500 hover:bg-rose-50 rounded-lg transition-colors" href="#">Tài khoản của tôi</a>
                                        </li>
                                        <li><hr class="dropdown-divider my-1"></li>
                                        <li>
                                            <a class="dropdown-item py-2 font-medium text-red-600 hover:text-red-700 hover:bg-red-50 rounded-lg transition-colors flex items-center gap-2" href="{{ route('logout') }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-logout" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                   <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"></path>
                                                   <path d="M9 12h12l-3 -3"></path>
                                                   <path d="M18 15l3 -3"></path>
                                                </svg>
                                                Đăng xuất
                                            </a>
                                        </li>
                                    </ul>
                                @else
                                    <a href="/login" class="text-gray-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user"
                                            width="22" height="22" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                        </svg>
                                    </a>
                                @endauth
                            </div>
                            <div>
                                <button type="button" class="text-gray-600 relative" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasRight" role="button" aria-controls="offcanvasRight">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-shopping-bag" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M6.331 8h11.339a2 2 0 0 1 1.977 2.304l-1.255 8.152a3 3 0 0 1 -2.966 2.544h-6.852a3 3 0 0 1 -2.965 -2.544l-1.255 -8.152a2 2 0 0 1 1.977 -2.304z" />
                                        <path d="M9 11v-5a3 3 0 0 1 6 0v5" />
                                    </svg>
                                    <span id="cartCount"
                                        class="absolute top-0 -mt-1 left-full rounded-full h-5 w-5 -ml-3 bg-rose-500 text-white text-center font-semibold text-sm">
                                        0
                                        <span class="invisible">unread messages</span>
                                    </span>
                                </button>
                            </div>
                            <div class="lg:hidden leading-none">
                                <!-- Button -->
                                <button class="collapsed" type="button" data-bs-toggle="offcanvas"
                                    data-bs-target="#navbar-default" aria-controls="navbar-default"
                                    aria-label="Toggle navigation">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-menu-2 text-gray-800" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M4 6l16 0" />
                                        <path d="M4 12l16 0" />
                                        <path d="M4 18l16 0" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar relative navbar-expand-lg lg:flex lg:flex-wrap items-center content-between text-black navbar-default"
            aria-label="Offcanvas navbar large">
            <div class="container max-w-7xl mx-auto w-full xl:px-4 lg:px-0">
                <div class="offcanvas offcanvas-left lg:visible" tabindex="-1" id="navbar-default">
                    <div class="offcanvas-header pb-1">
                        <a href="/"><img src="{{ asset('assets/') }}/images/logo/logo.png"
                                alt="Logo Thiệp Cưới" style="height: 40px;" /></a>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x text-gray-700"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M18 6l-12 12" />
                                <path d="M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="offcanvas-body lg:flex lg:items-center">
                        <div class="block lg:hidden mb-4">
                            <form action="#">
                                <div class="relative">
                                    <label for="searhNavbar" class="invisible hidden">Search</label>
                                    <input
                                        class="border border-gray-300 text-gray-900 rounded-lg focus:shadow-[0_0_0_.25rem_rgba(244,63,94,.25)] focus:ring-rose-500 focus:ring-0 focus:border-rose-500 block p-2 px-3 disabled:opacity-50 disabled:pointer-events-none w-full text-base"
                                        type="search" placeholder="Tìm kiếm mẫu thiệp cưới..." id="searhNavbar" />
                                    <button class="absolute right-0 top-0 p-3" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-search" width="16" height="16"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                                            <path d="M21 21l-6 -6" />
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="block lg:hidden mb-4">
                            <a class="btn inline-flex items-center gap-x-2 bg-rose-500 text-white border-rose-500 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-rose-600 hover:border-rose-600 active:bg-rose-600 active:border-rose-600 focus:outline-none focus:ring-4 focus:ring-rose-300 justify-center"
                                data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                                aria-controls="collapseExample">
                                <span class="mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-layout-grid" width="16" height="16"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M4 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                                        <path
                                            d="M14 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                                        <path
                                            d="M4 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                                        <path
                                            d="M14 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                                    </svg>
                                </span>
                                All Danh mục
                            </a>
                            <div class="collapse mt-2" id="collapseExample">
                                <div class="card card-body">
                                    <ul class="list-unstyled">
                                        <li><a class="dropdown-item" href="#!">Thiệp Truyền Thống</a></li>
                                        <li><a class="dropdown-item" href="#!">Snacks & Munchies</a></li>
                                        <li><a class="dropdown-item" href="#!">Fruits & Vegetables</a></li>
                                        <li><a class="dropdown-item" href="#!">Cold Drinks & Juices</a></li>
                                        <li><a class="dropdown-item" href="#!">Breakfast & Thiệp Sang Trọng</a></li>
                                        <li><a class="dropdown-item" href="#!">Thiệp Hoa Lá</a></li>
                                        <li><a class="dropdown-item" href="#!">Thiệp Ép Kim</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown hidden lg:block">
                            <button
                                class="mr-4 btn inline-flex items-center gap-x-2 bg-rose-500 text-white border-rose-500 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-rose-600 hover:border-rose-600 active:bg-rose-600 active:border-rose-600 focus:outline-none focus:ring-4 focus:ring-rose-300"
                                type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-layout-grid" width="16" height="16"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M4 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                                        <path
                                            d="M14 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                                        <path
                                            d="M4 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                                        <path
                                            d="M14 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                                    </svg>
                                </span>
                                All Danh mục
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#!">Thiệp Truyền Thống</a></li>
                                <li><a class="dropdown-item" href="#!">Snacks & Munchies</a></li>
                                <li><a class="dropdown-item" href="#!">Fruits & Vegetables</a></li>
                                <li><a class="dropdown-item" href="#!">Cold Drinks & Juices</a></li>
                                <li><a class="dropdown-item" href="#!">Breakfast & Thiệp Sang Trọng</a></li>
                                <li><a class="dropdown-item" href="#!">Thiệp Hoa Lá</a></li>
                                <li><a class="dropdown-item" href="#!">Thiệp Ép Kim</a></li>
                            </ul>
                        </div>
                        <div>
                            <ul class="navbar-nav lg:flex gap-3 lg:items-center">
                                <li class="nav-item dropdown w-full lg:w-auto">
                                    <a class="nav-link {{ request()->is('/') ? 'active text-rose-500 font-bold' : 'text-gray-800' }}" style="{{ request()->is('/') ? 'color: #f43f5e !important;' : '' }}" href="/" role="button">Trang chủ</a>

                                </li>
                                <li class="nav-item w-full lg:w-auto">
                                    <a class="nav-link {{ request()->is('mau-thiep*') || request()->is('thiep*') ? 'active text-rose-500 font-bold' : 'text-gray-800' }}" style="{{ request()->is('mau-thiep*') || request()->is('thiep*') ? 'color: #f43f5e !important;' : '' }}" href="/mau-thiep">Mẫu thiệp</a>
                                </li>

                                <li class="nav-item dropdown w-full lg:w-auto dropdown-fullwidth">
                                    <a class="nav-link {{ request()->is('danh-gia*') ? 'active text-rose-500 font-bold' : 'text-gray-800' }}" style="{{ request()->is('danh-gia*') ? 'color: #f43f5e !important;' : '' }}" href="/danh-gia">
                                        Đánh giá
                                    </a>

                                </li>


                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('bang-dieu-khien*') ? 'active text-rose-500 font-bold' : 'text-gray-800' }}" style="{{ request()->is('bang-dieu-khien*') ? 'color: #f43f5e !important;' : '' }}" href="#!">Bảng điều khiển</a>
                                </li>
                                
                                <li class="nav-item dropdown w-full lg:w-auto flex items-center">
                                    <a class="nav-link {{ request()->is('lien-he') ? 'active text-rose-500 font-bold' : 'text-gray-800 font-bold' }}" style="{{ request()->is('lien-he') ? 'color: #f43f5e !important;' : '' }}" href="{{ route('contact') }}">
                                        Liên hệ cho tôi
                                    </a>
                                    <a href="#" class="dropdown-toggle text-gray-500 hover:text-gray-800 p-2 ml-[-10px] hidden lg:block" data-bs-toggle="dropdown" aria-expanded="false"></a>
                                    <ul class="dropdown-menu shadow-lg rounded-xl border-0 mt-2">
                                        <li><a class="dropdown-item flex items-center gap-3 py-2 font-semibold text-gray-700 hover:text-rose-500 hover:bg-rose-50 transition-colors cursor-pointer" onclick="openSocialModal('facebook')"><img src="https://upload.wikimedia.org/wikipedia/commons/b/b8/2021_Facebook_icon.svg" class="w-5 h-5"> Facebook</a></li>
                                        <li><a class="dropdown-item flex items-center gap-3 py-2 font-semibold text-gray-700 hover:text-rose-500 hover:bg-rose-50 transition-colors cursor-pointer" onclick="openSocialModal('zalo')"><img src="https://upload.wikimedia.org/wikipedia/commons/9/91/Icon_of_Zalo.svg" class="w-5 h-5"> Zalo</a></li>
                                        <li><a class="dropdown-item flex items-center gap-3 py-2 font-semibold text-gray-700 hover:text-rose-500 hover:bg-rose-50 transition-colors cursor-pointer" onclick="openSocialModal('tiktok')"><img src="https://upload.wikimedia.org/wikipedia/en/a/a9/TikTok_logo.svg" class="w-5 h-5"> Tiktok</a></li>
                                        <li><a class="dropdown-item flex items-center gap-3 py-2 font-semibold text-gray-700 hover:text-rose-500 hover:bg-rose-50 transition-colors cursor-pointer" onclick="openSocialModal('instagram')"><img src="https://upload.wikimedia.org/wikipedia/commons/e/e7/Instagram_logo_2016.svg" class="w-5 h-5"> Instagram</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
<!-- Modal -->
<div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-8">
            <div class="flex justify-between items-center mb-4">
                <h3 class="font-bold text-gray-800" id="userModalLabel">Sign Up</h3>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x text-gray-700"
                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M18 6l-12 12" />
                        <path d="M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <form class="needs-validation" novalidate>
                    <div class="mb-3">
                        <label for="fullName" class="mb-2 block text-gray-800">Name</label>
                        <input type="text"
                            class="form-control border border-gray-300 text-gray-900 rounded-lg focus:shadow-[0_0_0_.25rem_rgba(244,63,94,.25)] focus:ring-rose-500 focus:ring-0 focus:border-rose-500 block p-2 px-3 disabled:opacity-50 disabled:pointer-events-none w-full text-base"
                            id="fullName" placeholder="Enter Your Name" required />
                        <div class="invalid-feedback">Please enter name.</div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="mb-2 block text-gray-800">Email address</label>
                        <input type="email"
                            class="form-control border border-gray-300 text-gray-900 rounded-lg focus:shadow-[0_0_0_.25rem_rgba(244,63,94,.25)] focus:ring-rose-500 focus:ring-0 focus:border-rose-500 block p-2 px-3 disabled:opacity-50 disabled:pointer-events-none w-full text-base"
                            id="email" placeholder="Enter Email address" autocomplete="email" required />
                        <div class="invalid-feedback">Please enter email.</div>
                    </div>
                    <div class="mb-5">
                        <label for="password" class="mb-2 block text-gray-800">Password</label>
                        <input type="password"
                            class="form-control border border-gray-300 text-gray-900 rounded-lg focus:shadow-[0_0_0_.25rem_rgba(244,63,94,.25)] focus:ring-rose-500 focus:ring-0 focus:border-rose-500 block p-2 px-3 disabled:opacity-50 disabled:pointer-events-none w-full text-base"
                            id="password" placeholder="Enter Password" required />
                        <div class="invalid-feedback">Please enter password.</div>
                        <span class="block mt-1 text-sm text-gray-500">
                            By Signup, you agree to our
                            <a href="#!" class="text-rose-500">Terms of Service</a>
                            &
                            <a href="#!" class="text-rose-500">Privacy Policy</a>
                        </span>
                    </div>

                    <button type="submit"
                        class="btn inline-flex items-center gap-x-2 bg-rose-500 text-white border-rose-500 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-rose-600 hover:border-rose-600 active:bg-rose-600 active:border-rose-600 focus:outline-none focus:ring-4 focus:ring-rose-300 justify-center">
                        Sign Up
                    </button>
                </form>
            </div>
            <div class="modal-footer flex border-0 justify-center mt-3">
                Already have an account?
                <a href="#" class="text-rose-500 ml-1">Sign in</a>
            </div>
        </div>
    </div>
</div>

<!-- Social Contact Modal -->
<div class="modal fade" id="socialContactModal" tabindex="-1" aria-labelledby="socialContactModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 460px;">
        <div class="modal-content border-0 shadow-2xl" style="border-radius: 20px; overflow: hidden; box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.3);">
            
            <!-- Dynamic Header Background -->
            <div id="socialModalHeader" class="relative transition-colors duration-300" style="padding: 32px 32px 110px 32px; background-color: #1877F2; color: white;">
                <!-- Close Button -->
                <button type="button" class="absolute flex items-center justify-center rounded-full transition-colors" style="width: 32px; height: 32px; top: 15px; right: 15px; background-color: rgba(255,255,255,0.2);" onmouseover="this.style.backgroundColor='rgba(255,255,255,0.4)'" onmouseout="this.style.backgroundColor='rgba(255,255,255,0.2)'" data-bs-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                </button>

                <div style="display: flex; align-items: center; gap: 16px; margin-bottom: 24px;">
                    <div id="socialModalIcon" class="flex items-center justify-center text-white" style="width: 64px; height: 64px; background-color: rgba(255,255,255,0.15); border: 2px solid rgba(255,255,255,0.4); border-radius: 18px; flex-shrink: 0;">
                        <!-- Icon will be injected -->
                    </div>
                    <div>
                        <h4 id="socialModalTitle" class="font-bold m-0 leading-tight" style="font-size: 28px; color: white;">Facebook</h4>
                        <span id="socialModalSubtitle" class="block" style="font-size: 14px; color: rgba(255,255,255,0.9);">facebook.com</span>
                    </div>
                </div>

                <ul id="socialModalBullets" style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 8px;">
                    <li style="position: relative; padding-left: 16px; font-size: 14.5px; font-weight: 500;"><span style="position: absolute; left: 0; top: 8px; width: 6px; height: 6px; background-color: white; border-radius: 50%;"></span>5,000+ Followers</li>
                    <li style="position: relative; padding-left: 16px; font-size: 14.5px; font-weight: 500;"><span style="position: absolute; left: 0; top: 8px; width: 6px; height: 6px; background-color: white; border-radius: 50%;"></span>Cập nhật hàng ngày</li>
                    <li style="position: relative; padding-left: 16px; font-size: 14.5px; font-weight: 500;"><span style="position: absolute; left: 0; top: 8px; width: 6px; height: 6px; background-color: white; border-radius: 50%;"></span>Phân tích thị trường</li>
                </ul>
            </div>

            <div style="background-color: white; padding: 0 32px 32px 32px; position: relative; text-align: left;">
                <!-- Portrait Image overlapping -->
                <div style="display: flex; justify-content: center; margin-top: -96px; margin-bottom: 24px; position: relative; z-index: 10; pointer-events: none;">
                    <!-- Note: Users will need to replace this with their actual transparent portrait image -->
                    <img id="socialModalPortrait" src="https://cdn-icons-png.flaticon.com/512/4140/4140047.png" alt="Portrait" style="height: 180px; object-fit: contain; filter: drop-shadow(0 20px 13px rgba(0,0,0,0.15));">
                </div>
                
                <p id="socialModalDesc" style="color: #4b5563; font-size: 15px; line-height: 1.6; margin-bottom: 24px; text-align: justify;">
                    Theo dõi trang Facebook cá nhân của chúng tôi để cập nhật những dự án bất động sản nghỉ dưỡng mới nhất, phân tích thị trường chuyên sâu và những câu chuyện thực tế từ hành trình làm nghề. Nơi chia sẻ kiến thức và kết nối cộng đồng nhà đầu tư.
                </p>

                <a id="socialModalBtn" href="#" target="_blank" style="display: flex; align-items: center; justify-content: center; gap: 8px; width: 100%; border-radius: 12px; color: white; font-weight: bold; background-color: #1877F2; box-shadow: 0 10px 20px rgba(24,119,242,0.2); padding: 16px 0; text-decoration: none; transition: transform 0.2s;" onmouseover="this.style.transform='translateY(-4px)'" onmouseout="this.style.transform='translateY(0)'">
                    <span id="socialModalBtnText">Truy cập trang Facebook</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                </a>
            </div>
            
        </div>
    </div>
</div>

<script>
const socialData = {
    'facebook': {
        name: 'Facebook',
        subtitle: 'facebook.com',
        icon: '<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="currentColor" stroke="none"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>',
        color: '#1877F2',
        bullets: ['5,000+ Followers', 'Cập nhật hàng ngày', 'Phân tích thị trường'],
        portrait: 'https://cdn-icons-png.flaticon.com/512/4140/4140047.png', // Transparent avatar placeholder
        desc: 'Theo dõi trang Facebook cá nhân của chúng tôi để cập nhật những dự án mới nhất, phân tích thị trường chuyên sâu và những câu chuyện thực tế từ hành trình làm nghề. Nơi chia sẻ kiến thức và kết nối cộng đồng nhà đầu tư.',
        link: '#'
    },
    'zalo': {
        name: 'Zalo',
        subtitle: 'zalo.me',
        icon: '<span class="font-black text-3xl">Z</span>',
        color: '#0068FF',
        bullets: ['Hỗ trợ khách hàng 24/7', 'Gửi mẫu thiết kế nhanh chóng', 'Tư vấn trực tiếp 1-1'],
        portrait: 'https://cdn-icons-png.flaticon.com/512/4140/4140047.png',
        desc: 'Kết nối qua Zalo Official để nhận được sự tư vấn nhanh chóng nhất từ đội ngũ thiết kế. Chúng tôi luôn sẵn sàng lắng nghe mọi yêu cầu và đồng hành cùng bạn tạo nên tấm thiệp cưới hoàn hảo.',
        link: '#'
    },
    'tiktok': {
        name: 'Tiktok',
        subtitle: 'tiktok.com',
        icon: '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12a4 4 0 1 0 4 4V4a5 5 0 0 0 5 5"></path></svg>',
        color: '#000000',
        bullets: ['1M+ Lượt xem', 'Video review chân thực', 'Cập nhật xu hướng cưới'],
        portrait: 'https://cdn-icons-png.flaticon.com/512/4140/4140047.png',
        desc: 'Theo dõi kênh Tiktok của chúng tôi để không bỏ lỡ những video review sinh động, quá trình sản xuất thực tế và hàng loạt xu hướng thiệp cưới mới nhất đang thịnh hành trên thị trường.',
        link: '#'
    },
    'instagram': {
        name: 'Instagram',
        subtitle: 'instagram.com',
        icon: '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>',
        color: '#E1306C',
        bullets: ['Bộ sưu tập cao cấp', 'Hình ảnh thực tế', 'Phong cách hiện đại'],
        portrait: 'https://cdn-icons-png.flaticon.com/512/4140/4140047.png',
        desc: 'Khám phá không gian nghệ thuật qua các bộ sưu tập thiệp cưới siêu đẹp trên Instagram. Nguồn cảm hứng bất tận để bạn chọn lựa thiết kế hoàn mỹ cho ngày vui của mình.',
        link: '#'
    }
};

function openSocialModal(key) {
    const data = socialData[key.toLowerCase()];
    if(!data) return;

    document.getElementById('socialModalHeader').style.backgroundColor = data.color;
    document.getElementById('socialModalBtn').style.backgroundColor = data.color;
    document.getElementById('socialModalBtn').style.boxShadow = `0 10px 20px ${data.color}40`;
    
    document.getElementById('socialModalIcon').innerHTML = data.icon;
    document.getElementById('socialModalTitle').innerText = data.name;
    document.getElementById('socialModalSubtitle').innerText = data.subtitle;
    
    const bulletsHtml = data.bullets.map(b => `<li style="position: relative; padding-left: 16px; font-size: 14.5px; font-weight: 500;"><span style="position: absolute; left: 0; top: 8px; width: 6px; height: 6px; background-color: white; border-radius: 50%;"></span>${b}</li>`).join('');
    document.getElementById('socialModalBullets').innerHTML = bulletsHtml;
    
    document.getElementById('socialModalPortrait').src = data.portrait;
    document.getElementById('socialModalDesc').innerText = data.desc;
    
    document.getElementById('socialModalBtnText').innerText = `Truy cập trang ${data.name}`;
    document.getElementById('socialModalBtn').href = data.link;

    var myModal = new bootstrap.Modal(document.getElementById('socialContactModal'));
    myModal.show();
}
</script>

<!-- Mẫu Thiệp Cart -->

<div class="offcanvas offcanvas-right" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header border-b">
        <div>
            <h5 id="offcanvasRightLabel">Mẫu Thiệp Cart</h5>
            <span>Location in 382480</span>
        </div>
        <button type="button" class="btn-close text-inherit" data-bs-dismiss="offcanvas" aria-label="Close">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x text-gray-700" width="24"
                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M18 6l-12 12" />
                <path d="M6 6l12 12" />
            </svg>
        </button>
    </div>
    <div class="offcanvas-body p-4">
        <div>
            <!-- alert -->
            <div class="bg-red-500 bg-opacity-25 text-red-800 mb-3 rounded-lg p-4" role="alert">
                You’ve got FREE delivery. Start
                <a href="#!" class="alert-link">checkout now!</a>
            </div>
            <ul class="list-none">
                <!-- list group -->
                <li class="py-3 border-t">
                    <div class="flex items-center">
                        <div class="w-1/2 md:w-1/2 lg:w-3/5">
                            <div class="flex">
                                <img src="{{ asset('assets/') }}/images/products/product-img-1.jpg" alt="Ecommerce"
                                    class="w-16 h-16" />
                                <div class="ml-3">
                                    <!-- title -->
                                    <a href="#!" class="text-inherit">
                                        <h6>Haldiram's Sev Bhujia</h6>
                                    </a>
                                    <span><small class="text-gray-500">.98 / lb</small></span>
                                    <!-- text -->
                                    <div class="mt-2 small leading-none">
                                        <a href="#!" class="text-rose-500 flex items-center">
                                            <span class="mr-1 align-text-bottom">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-trash" width="14" height="14"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M4 7l16 0" />
                                                    <path d="M10 11l0 6" />
                                                    <path d="M14 11l0 6" />
                                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                                </svg>
                                            </span>
                                            <span class="text-gray-500 text-sm">Remove</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- input group -->
                        <div class="w-1/3 md:w-1/4 lg:w-1/5">
                            <!-- input -->
                            <div class="input-group input-spinner rounded-lg flex justify-between items-center">
                                <input type="button" value="-"
                                    class="button-minus w-8 py-1 border-r cursor-pointer border-gray-300"
                                    data-field="quantity" />
                                <input type="number" step="1" max="10" value="1" name="quantity"
                                    class="quantity-field w-9 px-2 text-center h-7 border-0 bg-transparent" />
                                <input type="button" value="+"
                                    class="button-plus w-8 py-1 border-l cursor-pointer border-gray-300"
                                    data-field="quantity" />
                            </div>
                        </div>
                        <!-- price -->
                        <div class="w-1/5 text-center md:w-1/5">
                            <span class="font-bold text-gray-800">$5.00</span>
                        </div>
                    </div>
                </li>
                <!-- list group -->
                <li class="py-3 border-t">
                    <div class="flex items-center">
                        <div class="w-1/2 md:w-1/2 lg:w-3/5">
                            <div class="flex">
                                <img src="{{ asset('assets/') }}/images/products/product-img-2.jpg" alt="Ecommerce"
                                    class="w-16 h-16" />
                                <div class="ml-3">
                                    <a href="#!" class="text-inherit">
                                        <h6>NutriChoice Digestive</h6>
                                    </a>
                                    <span><small class="text-gray-500">250g</small></span>
                                    <!-- text -->
                                    <div class="mt-2 small leading-none">
                                        <a href="#!" class="text-rose-500 flex items-center">
                                            <span class="mr-1 align-text-bottom">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-trash" width="14" height="14"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M4 7l16 0" />
                                                    <path d="M10 11l0 6" />
                                                    <path d="M14 11l0 6" />
                                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                                </svg>
                                            </span>
                                            <span class="text-gray-500 text-sm">Remove</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- input group -->
                        <div class="w-1/3 md:w-1/4 lg:w-1/5">
                            <!-- input -->
                            <div class="input-group input-spinner rounded-lg flex justify-between items-center">
                                <input type="button" value="-"
                                    class="button-minus w-8 py-1 border-r cursor-pointer border-gray-300"
                                    data-field="quantity" />
                                <input type="number" step="1" max="10" value="1" name="quantity"
                                    class="quantity-field w-9 px-2 text-center h-7 border-0 bg-transparent" />
                                <input type="button" value="+"
                                    class="button-plus w-8 py-1 border-l cursor-pointer border-gray-300"
                                    data-field="quantity" />
                            </div>
                        </div>
                        <!-- price -->
                        <div class="w-1/5 text-center md:w-1/5">
                            <span class="font-bold text-red-600">$20.00</span>
                            <div class="line-through text-gray-500 small">$26.00</div>
                        </div>
                    </div>
                </li>
                <!-- list group -->
                <li class="py-3 border-t">
                    <div class="flex items-center">
                        <div class="w-1/2 md:w-1/2 lg:w-3/5">
                            <div class="flex">
                                <img src="{{ asset('assets/') }}/images/products/product-img-3.jpg" alt="Ecommerce"
                                    class="w-16 h-16" />
                                <div class="ml-3">
                                    <!-- title -->
                                    <a href="#!" class="text-inherit">
                                        <h6>Cadbury 5 Star Chocolate</h6>
                                    </a>
                                    <span><small class="text-gray-500">1 kg</small></span>
                                    <!-- text -->
                                    <div class="mt-2 small leading-none">
                                        <a href="#!" class="text-rose-500 flex items-center">
                                            <span class="mr-1 align-text-bottom">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-trash" width="14" height="14"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M4 7l16 0" />
                                                    <path d="M10 11l0 6" />
                                                    <path d="M14 11l0 6" />
                                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                                </svg>
                                            </span>
                                            <span class="text-gray-500 text-sm">Remove</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- input group -->
                        <div class="w-1/3 md:w-1/4 lg:w-1/5">
                            <!-- input -->
                            <div class="input-group input-spinner rounded-lg flex justify-between items-center">
                                <input type="button" value="-"
                                    class="button-minus w-8 py-1 border-r cursor-pointer border-gray-300"
                                    data-field="quantity" />
                                <input type="number" step="1" max="10" value="1" name="quantity"
                                    class="quantity-field w-9 px-2 text-center h-7 border-0 bg-transparent" />
                                <input type="button" value="+"
                                    class="button-plus w-8 py-1 border-l cursor-pointer border-gray-300"
                                    data-field="quantity" />
                            </div>
                        </div>
                        <!-- price -->
                        <div class="w-1/5 text-center md:w-1/5">
                            <span class="font-bold text-gray-800">$15.00</span>
                            <div class="line-through text-gray-500 small">$20.00</div>
                        </div>
                    </div>
                </li>
                <!-- list group -->
                <li class="py-3 border-t">
                    <div class="flex items-center">
                        <div class="w-1/2 md:w-1/2 lg:w-3/5">
                            <div class="flex">
                                <img src="{{ asset('assets/') }}/images/products/product-img-4.jpg" alt="Ecommerce"
                                    class="w-16 h-16" />
                                <div class="ml-3">
                                    <!-- title -->
                                    <!-- title -->
                                    <a href="#!" class="text-inherit">
                                        <h6>Onion Flavour Potato</h6>
                                    </a>
                                    <span><small class="text-gray-500">250g</small></span>
                                    <!-- text -->
                                    <div class="mt-2 small leading-none">
                                        <a href="#!" class="text-rose-500 flex items-center">
                                            <span class="mr-1 align-text-bottom">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-trash" width="14" height="14"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M4 7l16 0" />
                                                    <path d="M10 11l0 6" />
                                                    <path d="M14 11l0 6" />
                                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                                </svg>
                                            </span>
                                            <span class="text-gray-500 text-sm">Remove</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- input group -->
                        <div class="w-1/3 md:w-1/4 lg:w-1/5">
                            <!-- input -->
                            <div class="input-group input-spinner rounded-lg flex justify-between items-center">
                                <input type="button" value="-"
                                    class="button-minus w-8 py-1 border-r cursor-pointer border-gray-300"
                                    data-field="quantity" />
                                <input type="number" step="1" max="10" value="1" name="quantity"
                                    class="quantity-field w-9 px-2 text-center h-7 border-0 bg-transparent" />
                                <input type="button" value="+"
                                    class="button-plus w-8 py-1 border-l cursor-pointer border-gray-300"
                                    data-field="quantity" />
                            </div>
                        </div>
                        <!-- price -->
                        <div class="w-1/5 text-center md:w-1/5">
                            <span class="font-bold text-gray-800">$15.00</span>
                            <div class="line-through text-gray-500 small">$20.00</div>
                        </div>
                    </div>
                </li>
                <!-- list group -->
                <li class="py-3 border-t border-b">
                    <div class="flex items-center">
                        <div class="w-1/2 md:w-1/2 lg:w-3/5">
                            <div class="flex">
                                <img src="{{ asset('assets/') }}/images/products/product-img-5.jpg" alt="Ecommerce"
                                    class="w-16 h-16" />
                                <div class="ml-3">
                                    <!-- title -->
                                    <a href="#!" class="text-inherit">
                                        <h6>Salted Instant Popcorn</h6>
                                    </a>
                                    <span><small class="text-gray-500">100g</small></span>
                                    <!-- text -->
                                    <div class="mt-2 small leading-none">
                                        <a href="#!" class="text-rose-500 flex items-center">
                                            <span class="mr-1 align-text-bottom">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-trash" width="14" height="14"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M4 7l16 0" />
                                                    <path d="M10 11l0 6" />
                                                    <path d="M14 11l0 6" />
                                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                                </svg>
                                            </span>
                                            <span class="text-gray-500 text-sm">Remove</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- input group -->
                        <div class="w-1/3 md:w-1/4 lg:w-1/5">
                            <!-- input -->
                            <div class="input-group input-spinner rounded-lg flex justify-between items-center">
                                <input type="button" value="-"
                                    class="button-minus w-8 py-1 border-r cursor-pointer border-gray-300"
                                    data-field="quantity" />
                                <input type="number" step="1" max="10" value="1" name="quantity"
                                    class="quantity-field w-9 px-2 text-center h-7 border-0 bg-transparent" />
                                <input type="button" value="+"
                                    class="button-plus w-8 py-1 border-l cursor-pointer border-gray-300"
                                    data-field="quantity" />
                            </div>
                        </div>
                        <!-- price -->
                        <div class="w-1/5 text-center md:w-1/5">
                            <span class="font-bold text-gray-800">$15.00</span>
                            <div class="line-through text-gray-500 small">$25.00</div>
                        </div>
                    </div>
                </li>
            </ul>
            <!-- btn -->
            <div class="flex justify-between mt-4">
                <a href="#!"
                    class="btn inline-flex items-center gap-x-2 bg-rose-500 text-white border-rose-500 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-rose-600 hover:border-rose-600 active:bg-rose-600 active:border-rose-600 focus:outline-none focus:ring-4 focus:ring-rose-300">
                    Quay lại
                </a>
                <a href="#!"
                    class="btn inline-flex items-center gap-x-2 bg-gray-800 text-white border-gray-800 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-900 hover:border-gray-900 active:bg-gray-900 active:border-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300">
                    Thanh toán
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Mẫu Thiệp Yêu Thích -->

<div class="offcanvas offcanvas-right" tabindex="-1" id="offcanvasFavorites" aria-labelledby="offcanvasFavoritesLabel">
    <div class="offcanvas-header border-b">
        <div>
            <h5 id="offcanvasFavoritesLabel">Danh Sách Yêu Thích</h5>
            <span>Lưu trữ các mẫu bạn thích</span>
        </div>
        <button type="button" class="btn-close text-inherit" data-bs-dismiss="offcanvas" aria-label="Close">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x text-gray-700" width="24"
                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M18 6l-12 12" />
                <path d="M6 6l12 12" />
            </svg>
        </button>
    </div>
    <div class="offcanvas-body p-4">
        <div>
            <!-- alert -->
            <div class="bg-red-500 bg-opacity-25 text-red-800 mb-3 rounded-lg p-4" role="alert">
                Bạn đã lưu 5 mẫu thiệp. <a href="#!" class="alert-link">Xem lại ngay!</a>
            </div>
            <ul class="list-none">
                <!-- list group -->
                <li class="py-3 border-t">
                    <div class="flex items-center">
                        <div class="w-1/2 md:w-1/2 lg:w-3/5">
                            <div class="flex">
                                <img src="{{ asset('assets/') }}/images/products/product-img-1.jpg" alt="Ecommerce"
                                    class="w-16 h-16" />
                                <div class="ml-3">
                                    <!-- title -->
                                    <a href="#!" class="text-inherit">
                                        <h6>Haldiram's Sev Bhujia</h6>
                                    </a>
                                    <span><small class="text-gray-500">.98 / lb</small></span>
                                    <!-- text -->
                                    <div class="mt-2 small leading-none">
                                        <a href="#!" class="text-rose-500 flex items-center">
                                            <span class="mr-1 align-text-bottom">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-trash" width="14" height="14"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M4 7l16 0" />
                                                    <path d="M10 11l0 6" />
                                                    <path d="M14 11l0 6" />
                                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                                </svg>
                                            </span>
                                            <span class="text-gray-500 text-sm">Remove</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- input group -->
                        <div class="w-1/3 md:w-1/4 lg:w-1/5">
                            <!-- input -->
                            <div class="input-group input-spinner rounded-lg flex justify-between items-center">
                                <input type="button" value="-"
                                    class="button-minus w-8 py-1 border-r cursor-pointer border-gray-300"
                                    data-field="quantity" />
                                <input type="number" step="1" max="10" value="1" name="quantity"
                                    class="quantity-field w-9 px-2 text-center h-7 border-0 bg-transparent" />
                                <input type="button" value="+"
                                    class="button-plus w-8 py-1 border-l cursor-pointer border-gray-300"
                                    data-field="quantity" />
                            </div>
                        </div>
                        <!-- price -->
                        <div class="w-1/5 text-center md:w-1/5">
                            <span class="font-bold text-gray-800">$5.00</span>
                        </div>
                    </div>
                </li>
                <!-- list group -->
                <li class="py-3 border-t">
                    <div class="flex items-center">
                        <div class="w-1/2 md:w-1/2 lg:w-3/5">
                            <div class="flex">
                                <img src="{{ asset('assets/') }}/images/products/product-img-2.jpg" alt="Ecommerce"
                                    class="w-16 h-16" />
                                <div class="ml-3">
                                    <a href="#!" class="text-inherit">
                                        <h6>NutriChoice Digestive</h6>
                                    </a>
                                    <span><small class="text-gray-500">250g</small></span>
                                    <!-- text -->
                                    <div class="mt-2 small leading-none">
                                        <a href="#!" class="text-rose-500 flex items-center">
                                            <span class="mr-1 align-text-bottom">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-trash" width="14" height="14"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M4 7l16 0" />
                                                    <path d="M10 11l0 6" />
                                                    <path d="M14 11l0 6" />
                                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                                </svg>
                                            </span>
                                            <span class="text-gray-500 text-sm">Remove</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- input group -->
                        <div class="w-1/3 md:w-1/4 lg:w-1/5">
                            <!-- input -->
                            <div class="input-group input-spinner rounded-lg flex justify-between items-center">
                                <input type="button" value="-"
                                    class="button-minus w-8 py-1 border-r cursor-pointer border-gray-300"
                                    data-field="quantity" />
                                <input type="number" step="1" max="10" value="1" name="quantity"
                                    class="quantity-field w-9 px-2 text-center h-7 border-0 bg-transparent" />
                                <input type="button" value="+"
                                    class="button-plus w-8 py-1 border-l cursor-pointer border-gray-300"
                                    data-field="quantity" />
                            </div>
                        </div>
                        <!-- price -->
                        <div class="w-1/5 text-center md:w-1/5">
                            <span class="font-bold text-red-600">$20.00</span>
                            <div class="line-through text-gray-500 small">$26.00</div>
                        </div>
                    </div>
                </li>
                <!-- list group -->
                <li class="py-3 border-t">
                    <div class="flex items-center">
                        <div class="w-1/2 md:w-1/2 lg:w-3/5">
                            <div class="flex">
                                <img src="{{ asset('assets/') }}/images/products/product-img-3.jpg" alt="Ecommerce"
                                    class="w-16 h-16" />
                                <div class="ml-3">
                                    <!-- title -->
                                    <a href="#!" class="text-inherit">
                                        <h6>Cadbury 5 Star Chocolate</h6>
                                    </a>
                                    <span><small class="text-gray-500">1 kg</small></span>
                                    <!-- text -->
                                    <div class="mt-2 small leading-none">
                                        <a href="#!" class="text-rose-500 flex items-center">
                                            <span class="mr-1 align-text-bottom">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-trash" width="14" height="14"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M4 7l16 0" />
                                                    <path d="M10 11l0 6" />
                                                    <path d="M14 11l0 6" />
                                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                                </svg>
                                            </span>
                                            <span class="text-gray-500 text-sm">Remove</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- input group -->
                        <div class="w-1/3 md:w-1/4 lg:w-1/5">
                            <!-- input -->
                            <div class="input-group input-spinner rounded-lg flex justify-between items-center">
                                <input type="button" value="-"
                                    class="button-minus w-8 py-1 border-r cursor-pointer border-gray-300"
                                    data-field="quantity" />
                                <input type="number" step="1" max="10" value="1" name="quantity"
                                    class="quantity-field w-9 px-2 text-center h-7 border-0 bg-transparent" />
                                <input type="button" value="+"
                                    class="button-plus w-8 py-1 border-l cursor-pointer border-gray-300"
                                    data-field="quantity" />
                            </div>
                        </div>
                        <!-- price -->
                        <div class="w-1/5 text-center md:w-1/5">
                            <span class="font-bold text-gray-800">$15.00</span>
                            <div class="line-through text-gray-500 small">$20.00</div>
                        </div>
                    </div>
                </li>
                <!-- list group -->
                <li class="py-3 border-t">
                    <div class="flex items-center">
                        <div class="w-1/2 md:w-1/2 lg:w-3/5">
                            <div class="flex">
                                <img src="{{ asset('assets/') }}/images/products/product-img-4.jpg" alt="Ecommerce"
                                    class="w-16 h-16" />
                                <div class="ml-3">
                                    <!-- title -->
                                    <!-- title -->
                                    <a href="#!" class="text-inherit">
                                        <h6>Onion Flavour Potato</h6>
                                    </a>
                                    <span><small class="text-gray-500">250g</small></span>
                                    <!-- text -->
                                    <div class="mt-2 small leading-none">
                                        <a href="#!" class="text-rose-500 flex items-center">
                                            <span class="mr-1 align-text-bottom">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-trash" width="14" height="14"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M4 7l16 0" />
                                                    <path d="M10 11l0 6" />
                                                    <path d="M14 11l0 6" />
                                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                                </svg>
                                            </span>
                                            <span class="text-gray-500 text-sm">Remove</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- input group -->
                        <div class="w-1/3 md:w-1/4 lg:w-1/5">
                            <!-- input -->
                            <div class="input-group input-spinner rounded-lg flex justify-between items-center">
                                <input type="button" value="-"
                                    class="button-minus w-8 py-1 border-r cursor-pointer border-gray-300"
                                    data-field="quantity" />
                                <input type="number" step="1" max="10" value="1" name="quantity"
                                    class="quantity-field w-9 px-2 text-center h-7 border-0 bg-transparent" />
                                <input type="button" value="+"
                                    class="button-plus w-8 py-1 border-l cursor-pointer border-gray-300"
                                    data-field="quantity" />
                            </div>
                        </div>
                        <!-- price -->
                        <div class="w-1/5 text-center md:w-1/5">
                            <span class="font-bold text-gray-800">$15.00</span>
                            <div class="line-through text-gray-500 small">$20.00</div>
                        </div>
                    </div>
                </li>
                <!-- list group -->
                <li class="py-3 border-t border-b">
                    <div class="flex items-center">
                        <div class="w-1/2 md:w-1/2 lg:w-3/5">
                            <div class="flex">
                                <img src="{{ asset('assets/') }}/images/products/product-img-5.jpg" alt="Ecommerce"
                                    class="w-16 h-16" />
                                <div class="ml-3">
                                    <!-- title -->
                                    <a href="#!" class="text-inherit">
                                        <h6>Salted Instant Popcorn</h6>
                                    </a>
                                    <span><small class="text-gray-500">100g</small></span>
                                    <!-- text -->
                                    <div class="mt-2 small leading-none">
                                        <a href="#!" class="text-rose-500 flex items-center">
                                            <span class="mr-1 align-text-bottom">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-trash" width="14" height="14"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M4 7l16 0" />
                                                    <path d="M10 11l0 6" />
                                                    <path d="M14 11l0 6" />
                                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                                </svg>
                                            </span>
                                            <span class="text-gray-500 text-sm">Remove</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- input group -->
                        <div class="w-1/3 md:w-1/4 lg:w-1/5">
                            <!-- input -->
                            <div class="input-group input-spinner rounded-lg flex justify-between items-center">
                                <input type="button" value="-"
                                    class="button-minus w-8 py-1 border-r cursor-pointer border-gray-300"
                                    data-field="quantity" />
                                <input type="number" step="1" max="10" value="1" name="quantity"
                                    class="quantity-field w-9 px-2 text-center h-7 border-0 bg-transparent" />
                                <input type="button" value="+"
                                    class="button-plus w-8 py-1 border-l cursor-pointer border-gray-300"
                                    data-field="quantity" />
                            </div>
                        </div>
                        <!-- price -->
                        <div class="w-1/5 text-center md:w-1/5">
                            <span class="font-bold text-gray-800">$15.00</span>
                            <div class="line-through text-gray-500 small">$25.00</div>
                        </div>
                    </div>
                </li>
            </ul>
            <!-- btn -->
            <div class="flex justify-between mt-4">
                <a href="#!"
                    class="btn inline-flex items-center gap-x-2 bg-rose-500 text-white border-rose-500 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-rose-600 hover:border-rose-600 active:bg-rose-600 active:border-rose-600 focus:outline-none focus:ring-4 focus:ring-rose-300">
                    Đóng
                </a>
                <a href="#!"
                    class="btn inline-flex items-center gap-x-2 bg-gray-800 text-white border-gray-800 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-900 hover:border-gray-900 active:bg-gray-900 active:border-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300">
                    Xem tất cả
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="locationModal" tabindex="-1" aria-labelledby="locationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-6">
                <div class="flex justify-between items-start">
                    <div>
                        <h5 class="mb-1" id="locationModalLabel">Choose your Delivery Location</h5>
                        <p class="text-sm">Enter your address and we will specify the offer you area.</p>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x text-gray-700"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M18 6l-12 12" />
                            <path d="M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="my-5">
                    <label for="searhNavbarSecond" class="invisible hidden">Search</label>
                    <input
                        class="border border-gray-300 text-gray-900 rounded-lg focus:shadow-[0_0_0_.25rem_rgba(244,63,94,.25)] focus:ring-rose-500 focus:ring-0 focus:border-rose-500 block p-2 px-3 disabled:opacity-50 disabled:pointer-events-none w-full text-base"
                        type="search" placeholder="Tìm kiếm mẫu thiệp cưới..." id="searhNavbarSecond" />
                </div>
                <div class="flex justify-between items-center mb-2">
                    <h6>Select Location</h6>
                    <a href="#" class="btn btn-outline-gray-400 text-gray-500 btn-sm">Clear All</a>
                </div>
                <div>
                    <div data-simplebar style="height: 300px">
                        <div class="list-none">
                            <a href="#"
                                class="border-b hover:bg-gray-100 flex justify-between items-center px-2 py-3 active active:bg-gray-100 bg-gray-100">
                                <span>Alabama</span>
                                <span>Min:$20</span>
                            </a>
                            <a href="#" class="border-b hover:bg-gray-100 flex justify-between items-center px-2 py-3">
                                <span>Alaska</span>
                                <span>Min:$30</span>
                            </a>
                            <a href="#" class="border-b hover:bg-gray-100 flex justify-between items-center px-2 py-3">
                                <span>Arizona</span>
                                <span>Min:$50</span>
                            </a>
                            <a href="#" class="border-b hover:bg-gray-100 flex justify-between items-center px-2 py-3">
                                <span>California</span>
                                <span>Min:$29</span>
                            </a>
                            <a href="#" class="border-b hover:bg-gray-100 flex justify-between items-center px-2 py-3">
                                <span>Colorado</span>
                                <span>Min:$80</span>
                            </a>
                            <a href="#" class="border-b hover:bg-gray-100 flex justify-between items-center px-2 py-3">
                                <span>Florida</span>
                                <span>Min:$90</span>
                            </a>
                            <a href="#" class="border-b hover:bg-gray-100 flex justify-between items-center px-2 py-3">
                                <span>Arizona</span>
                                <span>Min:$50</span>
                            </a>
                            <a href="#" class="border-b hover:bg-gray-100 flex justify-between items-center px-2 py-3">
                                <span>California</span>
                                <span>Min:$29</span>
                            </a>
                            <a href="#" class="border-b hover:bg-gray-100 flex justify-between items-center px-2 py-3">
                                <span>Colorado</span>
                                <span>Min:$80</span>
                            </a>
                            <a href="#" class="border-b hover:bg-gray-100 flex justify-between items-center px-2 py-3">
                                <span>Florida</span>
                                <span>Min:$90</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>