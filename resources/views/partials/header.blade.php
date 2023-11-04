<header class="header">
    <div class="navbar">
        <div class="navbar-left">
            <div class="app-logo">
                <a href="{{ url('/') }}">SimpleRank</a>
            </div>
        </div>
        <div class="navbar-right">
            <div class="dropdown">
                <span class="navbar-item navbar-item-drop">{{ trans('messages.language_settings') }}</span>
                <div class="dropdown-content">
                    <a href="{{ route('setlocale', 'en') }}" class="drop-item">English</a>
                    <a href="{{ route('setlocale', 'ja') }}" class="drop-item">日本語</a>
                </div>
            </div>
            <a href="{{ url('/about') }}" class="navbar-item">{{ trans('messages.about') }}</a>
            <a href="{{ url('/contact') }}" class="navbar-item">{{ trans('messages.contact') }}</a>
            <div class="dropdown">
                <span class="navbar-item navbar-item-drop">{{ trans('messages.product_genre') }}</span>
                <ul class="dropdown-content">
                    @foreach ($product_categories as $key => $product_category)
                    <li><a href="#">{{ $product_category->name }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="hamburger-icon">&#9776;</div>
    </div>
</header>
