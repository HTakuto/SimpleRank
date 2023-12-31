<!-- header.blade.php -->
<header class="header">
    <div class="navbar">
        <div class="navbar-left">
            <div class="app-logo">
                <a href="{{ url('/') }}">MinimalRank</a>
            </div>
        </div>
        <div class="navbar-right">
            <!-- Language Dropdown -->
            <div class="dropdown">
                <span class="navbar-item navbar-item-drop">{{ __('messages.language_settings') }}</span>
                <div class="dropdown-content">
                    <a href="{{ route('setlocale', 'en') }}" class="drop-item">English</a>
                    <a href="{{ route('setlocale', 'ja') }}" class="drop-item">日本語</a>
                </div>
            </div>
            <!-- About Us Link -->
            <a href="{{ url('/about') }}" class="navbar-item">{{ __('messages.about') }}</a>
            <!-- Contact Us Link -->
            <a href="{{ url('/contact') }}" class="navbar-item">{{ __('messages.contact') }}</a>
            <!-- Product Genre Dropdown -->
            <div class="dropdown">
                <span class="navbar-item navbar-item-drop">{{ __('messages.product_genre') }}</span>
                <ul class="dropdown-content">
                    @foreach ($product_categories as $key => $product_category)
                    <li><a href="#" class="drop-item">{{ $product_category->name }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="hamburger-icon">&#9776;</div>
    </div>
</header>
