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
        .text-rose-500 { color: #f43f5e !important; }
        .bg-rose-500 { background-color: #f43f5e !important; }
        .border-rose-500 { border-color: #f43f5e !important; }
        
        .text-rose-600 { color: #e11d48 !important; }
        .bg-rose-600 { background-color: #e11d48 !important; }
        .border-rose-600 { border-color: #e11d48 !important; }
        
        .text-rose-800 { color: #9f1239 !important; }
        .bg-rose-100 { background-color: #ffe4e6 !important; }
        
        .hover\:text-rose-500:hover { color: #f43f5e !important; }
        .hover\:bg-rose-500:hover { background-color: #f43f5e !important; }
        .hover\:border-rose-500:hover { border-color: #f43f5e !important; }
        
        .hover\:text-rose-600:hover { color: #e11d48 !important; }
        .hover\:bg-rose-600:hover { background-color: #e11d48 !important; }
        .hover\:border-rose-600:hover { border-color: #e11d48 !important; }
        
        .active\:bg-rose-600:active { background-color: #e11d48 !important; }
        .active\:border-rose-600:active { border-color: #e11d48 !important; }
        
        .focus\:ring-rose-300:focus { box-shadow: 0 0 0 4px rgba(253, 164, 175, 0.5) !important; }
        .focus\:border-rose-500:focus { border-color: #f43f5e !important; }
        
        /* Any custom theme variable that might be using the old green */
        :root {
            --bs-primary: #f43f5e;
            --bs-primary-rgb: 244, 63, 94;
        }
    </style>
    @yield('styles')
</head>

<body>
    @include("user.partials.navbar")
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
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var header = document.getElementById("main-header");
            if (header) {
                document.body.style.paddingTop = header.offsetHeight + "px";
            }
        });
        window.addEventListener("resize", function() {
            var header = document.getElementById("main-header");
            if (header) {
                document.body.style.paddingTop = header.offsetHeight + "px";
            }
        });
    </script>
    @yield('scripts')
</body>

</html>
