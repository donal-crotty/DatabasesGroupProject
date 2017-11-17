<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Cooper's Stash</title>
    <link rel="shortcut icon" href="/images/favicon.ico"/>

    <!-- Bootstrap Core CSS -->
    <link href="{{ url('/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('/css/half-slider.css') }}" rel="stylesheet" type="text/css" />

    <!-- Custom CSS -->
    <link href="{{ asset('/css/half-slider.css') }}" rel="stylesheet" type="text/css">

    <!-- Datatable -->
    <link href="{{ asset('/css/jquery.DataTables.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/dataTables.bootstrap.css') }}" rel="stylesheet">

    <script src="{{ asset('/js/jquery.js') }}"></script>
    <script src="{{ asset('/js/jquery.dataTables.js') }}"></script>

</head>

<body id="page-top">

    <script src="{{ asset('/js/bootstrap.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <!-- REST API JS for datatable -->
    <script src="{{ asset('/js/main.js') }}"></script>




</body>
</html>
