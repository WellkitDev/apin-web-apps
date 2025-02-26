<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
	<meta name="author" content="">
	<meta name="keywords" content="">

  <title>Panel Admin - Nawalaedu.com</title>

  <!-- Fonts -->

  <!-- End fonts -->
  
  <!-- CSRF Token -->
  <meta name="_token" content="{{ csrf_token() }}">
  
  <link rel="shortcut icon" href="{{ asset('assets/images/logo-nawala-vsm.png') }}">

  <!-- plugin css -->
  
  <!-- end plugin css -->

  @stack('plugin-styles')

  <!-- common css -->
    <!-- Vendor css -->
    <link href="{{ asset('backend/assets/css/vendor.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{ asset('backend/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/css/custom.css') }}" rel="stylesheet" type="text/css" />

    <!-- Theme Config Js -->
    <script src="{{ asset('backend/assets/js/config.js') }}"></script>
  <!-- end common css -->

  @stack('style')
</head>
<body data-base-url="{{url('/')}}">

  <div class="wrapper" id="app">
    @include('backend.layouts.side-nav-menu')
    @include('backend.layouts.app-topbar')
    <div class="page-content">
      @include('backend.layouts.message')
        @yield('content')
        @include('backend.layouts.footer')
    </div>
    <!-- END page-content -->
  </div>
  <!-- END wrapper -->
  @include('backend.layouts.themes')

    <!-- base js -->
    <script src="{{ asset('backend/assets/js/vendor.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/app.js') }}"></script>

    <!-- end base js -->

    <!-- plugin js -->
    @stack('plugin-scripts')
    <!-- end plugin js -->

    <!-- common js -->

    <!-- end common js -->

    @stack('custom-scripts')
</body>
</html>