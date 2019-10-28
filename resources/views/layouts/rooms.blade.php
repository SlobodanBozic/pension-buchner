<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Pension-Buchner') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fancybox.min.css') }}">

    <link rel="stylesheet" href="{{ asset('fonts/ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>


@include('includes/navigation')
@include('includes/hero')
@include('includes/checkIn')
@yield('rooms')
@yield('great-offer')
@include('includes/reservation-room')
@include('includes/footer')

 <div id='app'></div> {{-- Vue demands it but for now I don`t use it --}}

    <!-- Scripts -->
     <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
     <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
     <script src="{{ asset('js/popper.min.js') }}"></script>
     <script src="{{ asset('js/bootstrap.min.js') }}"></script>
     <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
     <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
     <script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
     <script src="{{ asset('js/aos.js') }}"></script>
     <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
     <script src="{{ asset('js/jquery.timepicker.min.js') }}"></script>

     <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
