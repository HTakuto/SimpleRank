<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>
<body>
    @include('partials.header')
    @include('partials.hamburger')
    @yield('main')
    @include('partials.js')
</body>
</html>
