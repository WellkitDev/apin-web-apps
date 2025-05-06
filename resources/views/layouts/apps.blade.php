<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
        content="APIN, wadah kolaboratif untuk pengelolaan jurnal, publikasi ilmiah berkualitas, dan pengembangan kapasitas akademik di Indonesia, mendukung riset nasional dan internasional.">
    <meta name="author" content="Asosiasi Peneliti dan Inovasi Nusantara (APIN)">
    <meta name="keywords"
        content="APIN, pengelolaan jurnal, publikasi ilmiah, penelitian Indonesia, kapasitas akademik, riset nasional, riset internasional, jurnal ilmiah, kolaborasi peneliti, inovasi akademik, asosiasi peneliti, pengembangan riset, editorial jurnal, indeksasi jurnal, akademisi Indonesia">

    <title>APIN - Penelitinusantara.com</title>

    <!-- CSRF Token -->
    <meta name="_token" content="{{ csrf_token() }}">

    {{-- <link rel="shortcut icon" href="{{ asset('assets/images/logo-sm.png') }}"> --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}" sizes="16x16 32x32">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/favicon.png') }}" sizes="180x180">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}" sizes="192x192">

    <!-- plugin css -->

    <!-- end plugin css -->

    @stack('plugin-styles')

    <!-- common css -->
    <link href="{{ asset('assets/css/themify-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/flaticon.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/owl.carousel.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/owl.theme.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/slick.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/slick-theme.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/swiper.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/owl.transitions.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/jquery.fancybox.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/odometer-theme-default.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/component.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/custom-style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" />
    <!-- end common css -->

    @stack('style')
</head>

<body data-base-url="{{ url('/') }}">

    <div class="page-wrapper">
        <!-- start preloader -->
        <div class="preloader">
            <div class="angular-shape">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
        <!-- end preloader -->

        <!-- Start header -->
        @include('layouts.header')
        <!-- end of header -->

        <!-- start of section -->
        @yield('content')
        <!-- end of section -->

        <!-- start of footer-section -->
        @include('layouts.footer')
        <!-- end of footer-section -->
    </div>

    <!-- base js -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- end base js -->

    <!-- plugin js -->
    <script src="{{ asset('assets/js/modernizr.custom.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.dlmenu.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-plugin-collection.js') }}"></script>
    @stack('plugin-scripts')
    <!-- end plugin js -->

    <!-- common js -->

    <!-- end common js -->
    <script src="{{ asset('assets/js/script.js') }}"></script>

    @stack('custom-scripts')
</body>

</html>
