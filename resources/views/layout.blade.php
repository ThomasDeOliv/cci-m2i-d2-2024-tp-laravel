<html>
<head>
    @yield('title')
</head> 
<body>
    @include('partials.navbar')
    @yield('content')
    @include('partials.footer')
</body>
</html>