<!DOCTYPE html>
<html class="no-js css-menubar" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layout.head')

    @yield('style')

    <style>
        @font-face {
            font-family : 'Kanit';
            font-style: normal;
            font-weight: normal;
            src: url("{{ asset('font/kanit/Kanit-Regular.ttf') }}") format('truetype');
        }
        @font-face {
            font-family : 'Kanit';
            font-style: normal;
            font-weight: bold;
            src: url("{{ asset('font/kanit/Kanit-Bold.ttf') }}") format('truetype');
        }

        body {
            font-family: 'Kanit', sans-serif;
        }
        h1, h2, h3, h4, h5, h6{
            font-family: 'Kanit', sans-serif;
        }
        li {
            font-family: 'Kanit', sans-serif;
        }
    </style>
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
