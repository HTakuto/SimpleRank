<!-- Mobile Menu -->
<div class="mobile-menu">
    <div class="dropdown">
        <div class="navbar-item navbar-item-drop">言語設定</div>
        <ul class="dropdown-content">
            <li><a href="#">Engligsh</a></li>
            <li><a href="#">日本語</a></li>
        </ul>
    </div>
    <a href="{{ url('/about') }}" class="navbar-item about_link">本サイトの説明</a>
    <a href="{{ url('/contact') }}" class="navbar-item">お問い合わせ</a>
    <div class="dropdown">
        <div class="navbar-item navbar-item-drop">商品ジャンル</div>
        <ul class="dropdown-content">
            @foreach ($product_categories as $key => $product_category)
            <li><a href="#">{{ $product_category->name }}</a></li>
            @endforeach
        </ul>
    </div>
</div>
