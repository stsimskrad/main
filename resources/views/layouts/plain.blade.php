<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@php
$css_file = "css/app.css";
@endphp

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ url('sei.ico') }}">
    <title>
        @yield('title', config('app.name', 'Skote'))
    </title>
    <meta content="Skote is a fully featured premium Vuejs admin dashboard template built on top of awesome Bootstrap 5"
        name="description" />
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset($css_file) }}" rel="stylesheet" id="layout-css">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}" />

</head>

<body data-topbar="dark" data-layout="horizontal" style="overflow: hidden;">
    <div id="app">
        <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">

            @yield('content')
            <div class="text-center">
                <div>
                    <p>© DOST-STSIMS <i class='bx bxs-heart text-danger'></i> 2021</p>
                </div>
            </div>

        </div>
    </div>
</body>

</html>

