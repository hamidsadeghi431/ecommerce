{{--<!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--    <head>--}}
{{--        <meta charset="utf-8">--}}
{{--        <meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--        <meta name="csrf-token" content="{{ csrf_token() }}">--}}

{{--        <title>{{ config('app.name', 'Laravel') }}</title>--}}

{{--        <!-- Fonts -->--}}
{{--        <link rel="preconnect" href="https://fonts.bunny.net">--}}
{{--        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />--}}

{{--        <!-- Scripts -->--}}
{{--        @vite(['resources/css/app.css', 'resources/js/app.js'])--}}
{{--    </head>--}}
{{--    <body>--}}
{{--        <div class="font-sans text-gray-900 antialiased">--}}
{{--            {{ $slot }}--}}
{{--        </div>--}}
{{--    </body>--}}
{{--</html>--}}
    <!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="bigmarketvip">
    <meta name="keywords" content="bigmarketvip">
    <meta name="author" content="Akbar Sadeghi">
    <link rel="manifest" href="{{asset('asset/manifest.json')}}">
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon" />
    <title>بیگ مارکت</title>
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{asset('assets/images/favicon.png')}}">
    <meta name="theme-color" content="#ff4c3b" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="bigmarketvip">
    <meta name="msapplication-TileImage" content="{{asset('assets/images/favicon.png')}}">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />



    <!-- bootstrap css -->
    <link rel="stylesheet" id="rtl-link" type="text/css" href="{{asset('assets/css/vendors/bootstrap.rtl.css')}}">

    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/slick-theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/slick.css')}}">

    <!-- iconly css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/iconly.css')}}">

    <!-- Theme css -->
    <link rel="stylesheet" id="change-link" type="text/css" href="{{asset('assets/css/style.css')}}">

</head>

<body>

<!-- loader strat -->
<div class="loader">
    <span></span>
    <span></span>
</div>
<!-- loader end -->


<!-- top design start -->
<img src="{{asset('assets/images/design.svg')}}" class="img-fluid design-top" alt="">
<!-- top design end -->


<!-- top bar start -->
<div class="topbar-section">
    <a href="{{route('homePage')}}"><img src="{{asset('assets/images/logo.png')}}" class="img-fluid" alt=""></a>
    <a class="skip-cls" href="{{route('homePage')}}">پرش</a>
</div>
<!-- top bar end -->
{{$slot}}
<!-- panel space start -->
<section class="panel-space"></section>
<!-- panel space end -->



<!-- latest jquery-->
<script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>

<!-- Bootstrap js-->
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

<!-- Slick js-->
<script src="{{asset('assets/js/slick.js')}}"></script>

<!-- Filter js -->
<script src="{{asset('assets/js/filter.js')}}"></script>

<!-- script js -->
<script src="{{asset('assets/js/ew/script.js')}}"></script>

</body>

</html>
