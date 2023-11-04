<!-- Mobile Menu -->
<div class="mobile-menu">
    <div class="dropdown">
        <div class="navbar-item navbar-item-drop">{{ trans('messages.language_settings') }}</div>
        <div class="dropdown-content">
            <a href="{{ route('setlocale', 'en') }}" class="drop-item">English</a>
            <a href="{{ route('setlocale', 'ja') }}" class="drop-item">日本語</a>
        </div>
    </div>
    <a href="{{ url('/about') }}" class="navbar-item about_link">{{ trans('messages.about') }}</a>
    <a href="{{ url('/contact') }}" class="navbar-item">{{ trans('messages.contact') }}</a>
    <div class="dropdown">
        <div class="navbar-item navbar-item-drop">{{ trans('messages.product_genre') }}</div>
        <ul class="dropdown-content">
            @foreach ($product_categories as $key => $product_category)
            <li><a href="#">{{ $product_category->name }}</a></li>
            @endforeach
        </ul>
    </div>
</div>
