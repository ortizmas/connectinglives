<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Conecte Vida') }}</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('web/img/core-img/favicon.ico') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('vendor/fontawesome/css/fontawesome-all.min.css') }}"> --}}

    <!-- Core Stylesheet -->
    <link href="{{ asset('web/style.css') }}" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="{{ asset('web/css/responsive.css') }}" rel="stylesheet">

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <!-- Preloader Start -->
        <div id="preloader">
            <div class="colorlib-load"></div>
        </div>
        
        <!--Incluendo Menu -->
        @include('layouts.web.partials.menu', ['some' => 'data'])

        <main class="py-0">
            @yield('content')
        </main>

        <!-- Footer -->
        @include('layouts.web.partials.footer', ['some' => 'data'])

    </div>

    <!-- Scripts -->
    <!-- Jquery-2.2.4 JS -->
    <script src="{{ asset('web/js/jquery-2.2.4.min.js') }}"></script>
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <!-- Popper js -->
    <script src="{{ asset('web/js/popper.min.js') }}"></script>
    <!-- Bootstrap-4 Beta JS -->
    <script src="{{ asset('web/js/bootstrap.min.js') }}"></script>
    <!-- All Plugins JS -->
    <script src="{{ asset('web/js/plugins.js') }}"></script>
    <!-- Slick Slider Js-->
    <script src="{{ asset('web/js/slick.min.js') }}"></script>
    <!-- Footer Reveal JS -->
    <script src="{{ asset('web/js/footer-reveal.min.js') }}"></script>
    <!-- Active JS -->
    <script src="{{ asset('web/js/active.js') }}"></script>

    @yield('scripts')
</body>
</html>
