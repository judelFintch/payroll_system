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
        <link rel="stylesheet" href="{{asset('dashboard/plugins/alertify/alertify.min.css')}}">
        <link rel="stylesheet" href="{{asset('dashboard/plugins/lightbox/glightbox.min.css')}}">
        <link rel="stylesheet" href="{{asset('dashboard/plugins/c3-chart/c3.min.css')}}">
        <link rel="stylesheet" href="{{asset('dashboard/plugins//toastr/toatr.css')}}">
        <link rel="stylesheet" href="{{asset('dashboard/css/select2.min.css')}}">
        <link rel="stylesheet" href="{{asset('dashboard/css/bootstrap-datetimepicker.min.css')}}">
        <link rel="stylesheet" href="{{asset('dashboard/css/fullcalendar.min.css')}}">
        <link rel="stylesheet" href="{{asset('dashboard/plugins/summernote/dist/summernote-bs4.css')}}">
        <link rel="stylesheet" href="{{asset('dashboard/css/dataTables.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('dashboard/css/style.css')}}">
        @livewireStyles
        @yield('styles')
    </head>
        <body class="nk-body bg-lighter npc-general has-sidebar">
            <div class="nk-app-root">
                <div class="nk-main">
                    <div class="nk-wrap">
                        <div class="nk-content">
                            <div class="container-fluid">
                            <body>
                                <div class="main-wrapper">
                                    @include('partials.topbar')
                                    @include('partials.sidebar')
                                @yield('content')
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </body>
    <script src="{{asset('dashboard/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('dashboard/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('dashboard/js/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('dashboard/js/select2.min.js')}}"></script>
    <script src="{{asset('dashboard/js/moment.min.js')}}"></script>
    <script src="{{asset('dashboard/js/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{asset('dashboard/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js')}}"></script>
    <script src="{{asset('dashboard/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('dashboard/js/fullcalendar.min.js')}}"></script>
    <script src="{{asset('dashboard/js/jquery.fullcalendar.js')}}"></script>
    <script src="{{asset('dashboard/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('dashboard/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('dashboard/js/validation.init.js')}}"></script>
    <script src="{{asset('dashboard/js/app.js')}}"></script>
    @livewireScripts
</html>
