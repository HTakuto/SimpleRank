<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hamburger.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css"/>
    <title>SimpleRank</title>
</head>
<body>
    @include('layouts.header')
    @include('layouts.hamburger')
    @include('layouts.main')

    <script src="{{ asset('js/hamburger.js') }}"></script>
</body>
</html>