<!-- Mobile Menu -->
<div class="mobile-menu">
    <!-- Mobile Language Dropdown -->
    <div class="dropdown">
        <div class="navbar-item navbar-item-drop">{{ __('messages.language_settings') }}</div>
        <div class="dropdown-content">
            <a href="{{ route('setlocale', 'en') }}" class="drop-item">English</a>
            <a href="{{ route('setlocale', 'ja') }}" class="drop-item">日本語</a>
        </div>
    </div>
    <!-- Mobile About Us Link -->
    <a href="{{ url('/about') }}" class="navbar-item">{{ __('messages.about') }}</a>
    <!-- Mobile Contact Us Link -->
    <a href="{{ url('/contact') }}" class="navbar-item">{{ __('messages.contact') }}</a>
    <!-- Mobile Product Genre Dropdown -->
    <div class="dropdown">
        <div class="navbar-item navbar-item-drop">{{ __('messages.product_genre') }}</div>
        <ul class="dropdown-content">
            @foreach ($product_categories as $key => $product_category)
            <li><a href="#" class="drop-item">{{ $product_category->name }}</a></li>
            @endforeach
        </ul>
    </div>
</div>

