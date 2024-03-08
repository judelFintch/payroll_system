<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="{{ config('app.name') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Une partie d'administration pour la gestion d'un {{ config('app.name') }}">
    <link rel="shortcut icon" href="{{ asset('app/images/logo.png') }}">
    <title>{{ config('app.name') }} | @yield('title')</title>
    <link rel="shortcut icon" href="dashboard/images/favicon.ico">

    <link rel="shortcut icon" type="image/x-icon" href="dashboard/img/favicon.png">
    <link rel="stylesheet" href="{{asset('dashboard/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/css/line-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/css/style.css')}}">
    @yield('styles')
</head>

<body class="account-page">
    <div class="main-wrapper">
        <div class="account-content">
            <div class="container">
                <div class="account-logo">
                    <a href="dashboard">
                        <img src="dashboard/img/logo2.png" alt="Dreamguy's Technologies"></a>
                </div>
                @yield('content')
            </div>
        </div>
    </div>


    <script src="dashboard/js/validation.init.js"></script>
    <script src="dashboard/js/app.js"></script>

</body>
</html>
