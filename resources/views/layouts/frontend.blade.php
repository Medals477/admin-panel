<!doctype html>
<html lang="en">

<!-- Mirrored from transvelo.github.io/skola-html/5.1/home-v6.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Jun 2024 05:33:41 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/front/favicon.png') }}">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&amp;family=Lora:wght@400;700&amp;family=Montserrat:wght@400;500;600;700&amp;family=Nunito:wght@400;700&amp;display=swap" rel="stylesheet">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{ asset('assets/front/fonts/fontawesome/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/libs/%40fancyapps/fancybox/dist/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/libs/aos/dist/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/libs/choices.js/public/assets/styles/choices.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/libs/flickity-fade/flickity-fade.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/libs/flickity/dist/flickity.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/libs/highlightjs/styles/vs2015.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/libs/jarallax/dist/jarallax.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/libs/quill/dist/quill.core.css') }}" />

    <!-- Map -->
    {{-- <link href='../../../api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css' rel='stylesheet' /> --}}

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/front/css/theme.min.css') }}">

    <title>Skola Home v6</title>

</head>
<body>
    <div id="app">
        <main class="py-4">
            <div class="wrapper">
				@include('front.include.header')
                <div>
                    @yield('content')
                </div>
				@include('front.include.footer')
            </div>
        </main>
    </div>

    <!-- JAVASCRIPT
    ================================================== -->
    <!-- Libs JS -->
    <script src="{{ asset('assets/front/libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/front/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/front/libs/%40fancyapps/fancybox/dist/jquery.fancybox.min.js')}}"></script>
    <script src="{{ asset('assets/front/libs/aos/dist/aos.js')}}"></script>
    <script src="{{ asset('assets/front/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>
    <script src="{{ asset('assets/front/libs/countup.js/dist/countUp.min.js')}}"></script>
    <script src="{{ asset('assets/front/libs/dropzone/dist/min/dropzone.min.js')}}"></script>
    <script src="{{ asset('assets/front/libs/flickity/dist/flickity.pkgd.min.js')}}"></script>
    <script src="{{ asset('assets/front/libs/flickity-fade/flickity-fade.js')}}"></script>
    <script src="{{ asset('assets/front/libs/highlightjs/highlight.pack.min.js')}}"></script>
    <script src="{{ asset('assets/front/libs/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{ asset('assets/front/libs/isotope-layout/dist/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('assets/front/libs/jarallax/dist/jarallax.min.js')}}"></script>
    <script src="{{ asset('assets/front/libs/jarallax/dist/jarallax-video.min.js')}}"></script>
    <script src="{{ asset('assets/front/libs/jarallax/dist/jarallax-element.min.js')}}"></script>
    <script src="{{ asset('assets/front/libs/parallax-js/dist/parallax.min.js')}}"></script>
    <script src="{{ asset('assets/front/libs/quill/dist/quill.min.js')}}"></script>
    <script src="{{ asset('assets/front/libs/smooth-scroll/dist/smooth-scroll.min.js')}}"></script>
    <script src="{{ asset('assets/front/libs/typed.js/lib/typed.min.js')}}"></script>

    <!-- Map -->
    {{-- <script src='../../../api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script> --}}

    <!-- Theme JS -->
    <script src="{{ asset('assets/front/js/theme.min.js')}}"></script>


</body>

<!-- Mirrored from transvelo.github.io/skola-html/5.1/home-v6.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Jun 2024 05:33:43 GMT -->
</html>
