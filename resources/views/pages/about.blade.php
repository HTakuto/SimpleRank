@extends('layouts.app')

@section('title', 'SimpleRank | about')

@section('main')
<main>
    <!-- Hero Section -->
    <div class="hero_wrapper">
        <div class="hero_content">
            <h1 class="hero_title">SimpleRankの説明</h1>
            <p class="hero_subtitle">SimpleRankの説明に加え、多くよせられる質問を記載しています<br>
                <div class="hero_bold">強調文字</div>
            </p>
        </div>
    </div>

    <!-- About Section -->
    <div class="about_wrapper">
        <div class="about_content_main">
            <div id="siteDescription" class="content-toggle">
                <p>SimpleRankとは？</p>
                <p class="hidden-content">testtesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttest</p>
            </div>
            <h2>このサイト内のリンクは何ですか？</h2>
            <div id="siteLinks" class="content-toggle">
                <p>testtesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttest</p>
            </div>

            <h2>本サイトはどのような人に向いていますか？</h2>
            <div id="targetAudience" class="content-toggle">
                <p>testtesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttest</p>
            </div>

            <h2>何を基準にランキングを生成していますか？</h2>
            <div id="rankingCriteria" class="content-toggle">
                <p>testtesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttest</p>
            </div>
        </div>
    </div>
</main>
@endsection
