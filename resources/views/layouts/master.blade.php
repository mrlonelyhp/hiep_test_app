<!doctype html>
<html lang="en-US" ng-app="memberRecords">
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/app.css') }}">
    <script src="{{ asset('assets/js/angular.js') }}"></script>
    <script src="{{ asset('assets/js/all.js') }}"></script>
</head>
<body>
<div class="container">

    <header id="header">
        <h1>@yield('title')</h1>
        <hr>
    </header>
    <!--#header-->

    <div id="content">
        @yield('content')
    </div>
    <!--#content-->

    <footer id="footer">
        <p class="text-center">Copyright &copy;2016 hiepnm</p>
    </footer>
    <!--#footer-->

</div>

</body>
</html>