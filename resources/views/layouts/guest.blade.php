<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">

    <style>
        .facebook, .facebook:hover {
            font-size: 13px;
            background-color: #3b5998;
            color: #f4f4f4;
        }
        .google {
            font-size: 13px;
        }
        .instagram, .instagram:hover {
            font-size: 13px;
            background-color: #E33E5C;
            color: #f4f4f4;
            font-weight: bold;
            text-decoration: none;
            transition: all 0.3s;
            box-shadow: 0 2px 3px 0 rgb(0 0 0 / 10%);
        }
        .twitter, .twitter:hover {
            background-color: #1bb2e9;
            color: #f4f4f4;
            font-size: 13px;
        }
    </style>
</head>

<body class="hold-transition @yield('class')">
    @yield('content')

    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('js/adminlte.min.js')}}"></script>
</body>

</html>
