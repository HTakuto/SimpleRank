<header class="header">
    <div class="navbar">
        <div class="navbar-left">
            <div class="app-logo">
                <a href="{{ url('/') }}">SimpleRank</a>
            </div>
        </div>
        <div class="navbar-right">
            <div class="dropdown">
                <span class="navbar-item navbar-item-drop">言語設定</span>
                <ul class="dropdown-content">
                    <li><a href="#">Engligsh</a></li>
                    <li><a href="#">日本語</a></li>
                </ul>
            </div>
            <a href="{{ url('/about') }}"class="navbar-item">本サイトの説明</a>
            <a href="#" class="navbar-item">お問い合わせ</a>
            <div class="dropdown">
                <span class="navbar-item navbar-item-drop">商品ジャンル</span>
                <ul class="dropdown-content">
                    <li><a href="#">Category 1</a></li>
                    <li><a href="#">Category 2</a></li>
                    <li><a href="#">Category 3</a></li>
                    <li><a href="#">Category 4</a></li>
                    <li><a href="#">Category 5</a></li>
                </ul>
            </div>
        </div>
        <div class="hamburger-icon">&#9776;</div>
    </div>
</header>
