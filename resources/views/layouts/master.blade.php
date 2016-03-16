<!doctype html>
<html lang="en-US" ng-app="memberRecords">
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/app.css') }}">
</head>
<body>
<div class="container">

    <header id="header">
        <h1>@yield('title')</h1>
        <hr>
    </header>
    <!--#header-->

    <div id="content">
        <div ng-controller="MembersController">
            @yield('content')
        </div>
    </div>
    <!--#content-->

    <footer id="footer">
        <p class="text-center">Copyright &copy;2016 hiepnm</p>
    </footer>
    <!--#footer-->

</div>
<script src="{{ asset('assets/js/all.js') }}"></script>
</body>
</html>