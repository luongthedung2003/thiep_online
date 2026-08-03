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
</body>

</html>
