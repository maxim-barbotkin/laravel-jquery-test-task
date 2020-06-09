<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'DBA') }} @yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet"/>
    @stack('header-pre-scripts')
    <link href="{{ asset('dist-assets/css/themes/lite-blue.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('dist-assets/css/plugins/perfect-scrollbar.min.css') }}" rel="stylesheet"/>
    @stack('header-post-scripts')
</head>

<body class="text-left">
<div class="app-admin-wrap layout-sidebar-large">
    @include('partials.admin.header')
    @include('partials.admin.sidebar')
    <div class="main-content-wrap sidenav-open d-flex flex-column">
        <div class="main-content">
            <div class="breadcrumb">
                <h1>@yield('title', config('app.name', 'DBA'))</h1>
            </div>
            <div class="separator-breadcrumb border-top"></div>
            @if(session()->has('message'))
                <div class="alert alert-card alert-{{ session()->get('class') }}" role="alert">
                    {{ session()->get('message') }}
                    <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
            @endif
            @yield('content')
        </div>
        @include('partials.admin.footer')
    </div>
</div>
@stack('footer-pre-scripts')
<script src="{{ asset('dist-assets/js/plugins/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('dist-assets/js/ajaxSetup.js') }}"></script>
<script src="{{ asset('dist-assets/js/plugins/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('dist-assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('dist-assets/js/scripts/script.min.js') }}"></script>
<script src="{{ asset('dist-assets/js/scripts/sidebar.large.script.min.js') }}"></script>
@stack('footer-post-scripts')
</body>
</html>
