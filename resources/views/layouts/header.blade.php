Header.blade.php
{{-- header --}}
<header class="header">
    <div class="navbar">
        <div class="navbar-left">
            <div class="navbar-title">
                <a href="#">SimpleRank</a>
            </div>
        </div>
        <div class="navbar-right">
            <div class="dropdown">
                <span class="navbar-item navbar-item-drop">言語設定</span>
                <div class="dropdown-content">
                    <a href="#">Engligsh</a>
                    <a href="#">日本語</a>
                </div>
            </div>
            <span class="navbar-item">本サイトの説明</span>
            <a href="#" class="navbar-item">お問い合わせ</a>
            <div class="dropdown">
                <span class="navbar-item navbar-item-drop">商品ジャンル</span>
                <div class="dropdown-content">
                    <a href="#">test</a>
                    <a href="#">test</a>
                    <a href="#">test</a>
                    <a href="#">test</a>
                    <a href="#">test</a>
                </div>
            </div>
        </div>
        <div class="hamburger-icon">&#9776;</div> {{-- ハンバーガーアイコン --}}
        {{-- <div class="close-icon">&times;</div>  ☓アイコン --}}
    </div>
</header>
<ul class="mobile-menu">
    <li class="navbar-item navbar-item-drop">言語設定 </li>
    <div class="dropdown-content">
        <a href="#">Engligsh</a>
        <a href="#">日本語</a>
    </div>
    <li class="navbar-item">本サイトの説明</li>
    <li class="navbar-item">お問い合わせ</li>
    <li class="dropdown">
        <span class="navbar-item navbar-item-drop">商品ジャンル </span>
        <div class="dropdown-content">
            <a href="#">test</a>
            <a href="#">test</a>
            <a href="#">test</a>
            <a href="#">test</a>
            <a href="#">test</a>
        </div>
    </li>
</ul>

