<html>
<head>
    <title>App Name - @yield('title')</title>
    @yield('style')
</head>
<body>
@section('sidebar')
    This is the master sidebzzar.
@show

<div class="container">
    @yield('content')
</div>
</body>
</html>