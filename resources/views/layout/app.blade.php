<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Everex</title>
    <link rel="icon" href="{{ asset('assets/images/logo/Logo_white.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/hero.css') }}" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- ========================= FONT =============================== --}}
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Khmer:wght@100..900&display=swap" rel="stylesheet">
    {{-- ========================= ANIMATION =========================== --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    {{-- ========================= FONT AWSOME ========================= --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- sweet alert --}}
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.1/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('blade_css')
    @yield('blade_js')

    <style>
        @font-face {
            font-family: Kantumruy;
            src: url("{{ url('assets/fonts/Kantumruy-Regular.ttf') }}");
        }

        @font-face {
            font-family: Roboto;
            src: url("{{ url('assets/fonts/Roboto-Regular.ttf') }}");
        }

        @font-face {
            font-family: Gotham;
            src: url("{{ url('assets/fonts/GOTHAM-BLACK_0.OTF') }}");
        }

        body {
            margin: 0;
            font-family: Kantumruy, "Roboto", sans-serif !important;
            overflow-x: hidden;
        }
    </style>

</head>

<body onload="load()">
    @include('components.Navigaion')
    @yield('content')
    @include('components.footer')
    @include('components.scroll_top')
    @include('components.chat')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="{{ url('assets/js/changeLang.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            watchSlidesProgress: true,
            loop:true,
            grabCursor: true,
            breakpoints: {
                // When the window is >= 320px (mobile)
                320: {
                    slidesPerView: 1, // Show 1 slide
                },
                // When the window is >= 768px (tablet)
                768: {
                    slidesPerView: 2, // Show 2 slides
                },
                // When the window is >= 1024px (desktop)
                1024: {
                    slidesPerView: 3, // Show 3 slides
                },
            },
        });

        var swiper_banner = new Swiper(".mySwiper_banner", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false
            },
            pagination: {
                el: ".swiper-pagination",
                dynamicBullets: false,
            }
        });
    </script>
</body>

</html>
