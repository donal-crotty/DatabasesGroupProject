<!DOCTYPE html>
<html lang="en" ng-app="myApp">

    <head>

        <title></title>

        <!--links for datatable-->
        <script src="/js/jquery.js"></script>
        <script src="/js/main.js"></script>
        <script src="/js/jquery.dataTables.js"></script>
        <script src="/js/bootstrap.js"></script>

        <link rel="stylesheet" href="/css/jquery.DataTables.css"/>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="shortcut icon" href="/images/favicon.ico"/>
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/half-slider.css" rel="stylesheet">

        <script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.7/angular-route.min.js"></script>
    </head>

    <body>
        @include('includes.navbar')
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>