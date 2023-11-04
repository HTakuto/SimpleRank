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
                    <form action="{{ route('setlocale', 'en') }}" method="post">
                        @csrf
                            <button type="submit" class="drop-item">
                                English
                            </button>
                    </form>
                    <form action="{{ route('setlocale', 'ja') }}" method="post">
                        @csrf
                        <button type="submit" class="drop-item">
                            日本語
                        </button>
                    </form>
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
