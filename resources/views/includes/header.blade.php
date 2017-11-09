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
    <link href="{{ asset('/css/half-slider.csss') }}" rel="stylesheet" type="text/css">

    <!-- Datatable -->
    <link href="{{ asset('/css/jquery.DataTables.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/dataTables.bootstrap.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- JQuery -->
    <script src="{{ asset('/js/jquery.js') }}"></script>
    <script src="{{ asset('/js/jquery.dataTables.js') }}"></script>

    <!-- Angular -->
    <script src="{{ asset('/js/angularjs.js') }}"></script>

    <!-- <link href="css/datatableCss.css" rel="stylesheet">-->

</head>

<body id="page-top">
<!--     <nav class="navbar navbar-default">
      <div class="container-fluid">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/"><img alt="Brand" src="{{asset('/images/logo.png')}}" class="img-brand"></a>
        </div>
      </div>
  </nav> -->


<!--     <div class="content-div">

    </div>
    <div class="clearfix"></div>   -->

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('/js/bootstrap.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <!-- REST API JS for datatable -->
    <script src="{{ asset('/js/main.js') }}"></script>




</body>
</html>
