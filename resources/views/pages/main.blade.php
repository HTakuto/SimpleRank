<!-- Main -->
@extends('layouts.app')

@section('title', 'SimpleRank')

@section('main')
<main>
    <!-- Hero Section -->
    <div class="hero_wrapper">
        <div class="hero_content">
            <h1 class="hero_title">ダミータイトル</h1>
            <p class="hero_subtitle">ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト<br>
            ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト<br>
                <div class="hero_bold">強調文字</div>
            </p>
        </div>
    </div>

    <!-- Ranking Cards -->
    @foreach ($product_categories as $key => $product_category)
    <div class="ranking_card_row_container">
        <div class="ranking_title">
            <h2>{{ $key + 1 }}．{{ $product_category->name }}</h2>
        </div>

        <div class="ranking_card_wrapper">
            <div class="slide_left_arrow big_arrow">&lt;</div>
            @foreach($product_cards as $key => $product_card)
            <div class="ranking_card">
                <div class="ranking">{{ $key + 1 }}</div>
                <div class="card">
                    <h3 class="card_title">{{ $product_card->title }}</h3>
                    <img class="thumbnail" src="{{ $product_card->image_url }}" alt="商品画像">
                    <p class="description">{{ $product_card->description }}</p>
                    <ul class="details">
                        <li class="detail"><i class="fas fa-money-bill"></i> {{ number_format(floor($product_card->price), 0) }}円</li>
                        <li class="detail"><i class="fas fa-comment"></i> {{ $product_card->review }}</li>
                        <li class="detail"><i class="fas fa-star"></i> {{ $product_card->star }}</li>
                    </ul>
                </div>
            </div>
            @endforeach
            <div class="slide_right_arrow big_arrow">&gt;</div>
        </div>
    </div>
    @endforeach
</main>
@endsection
