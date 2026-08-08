<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="{{ asset('assets/libs/') }}/tiny-slider/dist/tiny-slider.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/libs/') }}/swiper/swiper-bundle.min.css" />
    @include("user.partials.head")

    <title>WeddingCard - Nền Tảng Thiết Kế & Đặt Thiệp Cưới Online</title>
    <style>
        .text-rose-500 { color: #ff0066 !important; }
        .bg-rose-500 { background-color: #ff0066 !important; }
        .border-rose-500 { border-color: #ff0066 !important; }
        
        .text-rose-600 { color: #ff0066 !important; }
        .bg-rose-600 { background-color: #ff0066 !important; }
        .border-rose-600 { border-color: #ff0066 !important; }
        
        .text-rose-800 { color: #cc0052 !important; }
        .bg-rose-100 { background-color: #ffe6ef !important; }
        
        .hover\:text-rose-500:hover { color: #ff0066 !important; }
        .hover\:bg-rose-500:hover { background-color: #e6005c !important; }
        .hover\:border-rose-500:hover { border-color: #e6005c !important; }
        
        .hover\:text-rose-600:hover { color: #ff0066 !important; }
        .hover\:bg-rose-600:hover { background-color: #e6005c !important; }
        .hover\:border-rose-600:hover { border-color: #e6005c !important; }
        
        .active\:bg-rose-600:active { background-color: #e6005c !important; }
        .active\:border-rose-600:active { border-color: #e6005c !important; }
        
        .focus\:ring-rose-300:focus { box-shadow: 0 0 0 4px rgba(255, 0, 102, 0.3) !important; }
        .focus\:border-rose-500:focus { border-color: #ff0066 !important; }
        
        /* Primary theme variables */
        :root {
            --bs-primary: #ff0066;
            --bs-primary-rgb: 255, 0, 102;
        }
    </style>
    @yield('styles')
</head>

<body>
    @include("user.partials.preloader")
    @include("user.partials.navbar")
    @include("user.partials.toast-notification")
    <main>
        @yield('content')
    </main>
    @include("user.partials.modal-product")
    @include("user.partials.footer")
    <!-- Javascript-->
    <!-- Libs JS -->
    @include("user.partials.scripts")
    <script src="{{ asset('assets/libs/') }}/tiny-slider/dist/min/tiny-slider.js"></script>
    <script src="{{ asset('assets/') }}/js/vendors/tns-slider.js"></script>
    <script src="{{ asset('assets/libs/') }}/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/') }}/js/vendors/swiper.js"></script>
    <script src="{{ asset('assets/') }}/js/vendors/countdown.js"></script>
    <script src="{{ asset('assets/') }}/js/vendors/increment-value.js"></script>
    @include('user.partials.template-scripts')
    <script>
        function adjustHeaderPadding() {
            var header = document.getElementById("main-header");
            if (header && !header.classList.contains("header-scrolled")) {
                document.body.style.paddingTop = header.offsetHeight + "px";
            }
        }
        function handleHeaderScroll() {
            var header = document.getElementById("main-header");
            if (header) {
                if (window.scrollY > 30) {
                    header.classList.add("header-scrolled");
                } else {
                    header.classList.remove("header-scrolled");
                }
            }
        }
        window.addEventListener("scroll", handleHeaderScroll);
        document.addEventListener('show.bs.offcanvas', function () {
            var header = document.getElementById("main-header");
            if (header) {
                header.classList.add("offcanvas-active");
            }
        });
        document.addEventListener('hidden.bs.offcanvas', function () {
            var header = document.getElementById("main-header");
            if (header) {
                header.classList.remove("offcanvas-active");
            }
        });
        document.addEventListener("DOMContentLoaded", function() {
            adjustHeaderPadding();
            handleHeaderScroll();
        });
        window.addEventListener("resize", adjustHeaderPadding);
    </script>
    @yield('scripts')
</body>

</html>
