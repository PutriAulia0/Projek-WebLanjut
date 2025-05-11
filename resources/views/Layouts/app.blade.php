<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
</head>
<body>
    @include('partials.header1')

    <div class="container mt-4">
        @yield('content')
    </div>

    @include('partials.footer')
</body>
</html>
