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
        <title>@yield('title', config('app.name', 'STSIMS'))</title>
        <script>window.User = {!! json_encode(optional(auth()->user())->only('role')) !!}</script>
        <meta content="STSIMS | Scholarship System" name="description" />
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset($css_file) }}" rel="stylesheet" id="layout-css">

    </head>

    <body>
        <noscript>
            <strong>
                Please enabled Javascript. Thanks
            </strong>
        </noscript>
        <div id="app">
            @yield('content')
        </div>
        @stack('scripts')
    </body>

</html>
