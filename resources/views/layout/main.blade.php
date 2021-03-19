<!DOCTYPE html>
<html class="no-js css-menubar" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layout.head')

    @yield('style')
</head>
<body class="animsition dashboard">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

@include('layout.navbar')
@include('layout.sidebar')

<!-- Page -->
@yield('content')
<!-- End Page -->

<!-- Footer -->
@include('layout.footer')

<!-- Script -->
@include('layout.script')

@yield('script')
</body>
</html>
