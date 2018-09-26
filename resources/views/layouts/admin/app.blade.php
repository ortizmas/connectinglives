<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Conecte Vida') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/fontawesome/css/fontawesome-all.min.css') }}"> --}}
    {{-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script> --}}

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('admin/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('admin/vendor/font-awesome/css/font-awesome.min.css') }}">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="{{ asset('admin/css/fontastic.css') }}">
    <!-- Google fonts - Poppins -->
    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700"> --}}
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('admin/css/style.default.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('admin/css/custom.css') }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('admin/img/favicon.ico') }}">   
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

    @yield('styles')
</head>
<body>
    <div class="page">
        <!-- Main Navbar-->
        @include('layouts.admin.partials.menu-top', ['some' => 'data'])
      <div class="page-content d-flex align-items-stretch"> 
            @include('layouts.admin.partials.menu-lateral', ['some' => 'data'])
            
            @yield('content')

            @include('layouts.admin.partials.footer', ['some' => 'data'])
        </div>
      </div>
    </div>

    <!-- Scripts App Laravel-->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <!-- JavaScript files-->
    <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/popper.js/umd/popper.min.js') }}"> </script>
    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/jquery.cookie/jquery.cookie.js') }}"> </script>
    <script src="{{ asset('admin/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('admin/js/charts-home.js') }}"></script>
    <!-- Main File-->
    <script src="{{ asset('admin/js/front.js') }}"></script>
    
    @yield('scripts')
</body>
</html>
