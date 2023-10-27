Test.blade.php
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css"/>
    <title>SimpleRank</title>
</head>
<body>
    @include('layouts.header')


    <script>
        // JavaScriptを使用してハンバーガーメニューのアイコンをクリックでメニューを表示/非表示にする
        const hamburgerIcon = document.querySelector('.hamburger-icon');
        const mobileMenu = document.querySelector('.mobile-menu');

        hamburgerIcon.addEventListener('click', () => {
            mobileMenu.classList.toggle('active');
        });

        // JavaScriptを使用してクリックでドロップダウンメニューを開閉する
        const dropdownItems = document.querySelectorAll('.navbar-item-drop');
        dropdownItems.forEach(item => {
            item.addEventListener('click', () => {
                item.classList.toggle('active');
                const dropdownContent = item.nextElementSibling;
                dropdownContent.classList.toggle('active');
            });
        });
    </script>
</body>
</html>

