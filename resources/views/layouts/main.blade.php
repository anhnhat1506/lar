<html>
<head>
    <title>App Name - @yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ url("css/page.css") }}">
    @yield('style')
</head>
<body>
@include('Includes.nav')
<div class="container app_container">
    @yield('content')
</div>
@include('Includes.footer')
</body>
</html>