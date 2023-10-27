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

    <script>
        // JavaScript for handling the hamburger menu
        const hamburgerIcon = document.querySelector('.hamburger-icon');
        const mobileMenu = document.querySelector('.mobile-menu');

        hamburgerIcon.addEventListener('click', (event) => {
            event.stopPropagation();
            mobileMenu.classList.toggle('active');
        });

        mobileMenu.addEventListener('click', (event) => {
            event.stopPropagation();
        });

        // Close the mobile menu when clicking elsewhere
        window.addEventListener('click', (event) => {
            if (mobileMenu.classList.contains('active') && event.target !== hamburgerIcon) {
                mobileMenu.classList.remove('active');
                document.body.style.overflow = 'auto';
            }
        });

        // Toggle dropdown menus
        const dropdownItems = document.querySelectorAll('.navbar-item-drop');
        dropdownItems.forEach(item => {
            item.addEventListener('click', (event) => {
                event.stopPropagation();
                item.classList.toggle('active');
                const dropdownContent = item.nextElementSibling;
                dropdownContent.classList.toggle('active');
            });
        });
    </script>
</body>
</html>
