<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>The Cooper's Stash</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/half-slider.css') }}" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="/images/favicon.ico"/>
    <!-- Bootstrap Core CSS -->
    <link href="{{ url('/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Datatable -->
    <link href="{{ asset('/css/jquery.DataTables.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/dataTables.bootstrap.css') }}" rel="stylesheet">

    <script src="{{ asset('/js/jquery.js') }}"></script>
    <script src="{{ asset('/js/jquery.dataTables.js') }}"></script>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/drilldown.js"></script>
</head>
<body>
    @include('includes.navbar')
    <div class="container">
        @include('includes.messages')
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @include('includes.footer')
</body>
</html>
