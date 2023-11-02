@extends('layouts.app')

@section('title', 'SimpleRank | about')

@section('main')
<main>
    <!-- Hero Section -->
    <div class="hero_wrapper">
        <div class="hero_content">
            <h1 class="hero_title">SimpleRankの説明</h1>
            <p class="hero_subtitle">
                SimpleRankの説明に加え、多くよせられる質問を記載しています<br>
                <div class="hero_bold">強調文字</div>
            </p>
        </div>
    </div>

    <!-- About Section -->
    <div class="about_wrapper">
        <div class="about_content_main">
            <div class="question-toggle" data-toggle="siteDescription">
                <div class="content-toggle">
                    <h2 class="question">SimpleRankとは？</h2>
                </div>
                <div class="hidden-content">
                    testtesttesttesttesttesttest
                </div>
            </div>

            <div class="question-toggle" data-toggle="siteLinks">
                <div class="content-toggle">
                    <h2 class="question">このサイト内のリンクは何ですか？</h2>
                </div>
                <div class="hidden-content">
                    testtesttesttesttesttesttest
                </div>
            </div>

            <div class="question-toggle" data-toggle="targetAudience">
                <div class="content-toggle">
                    <h2 class="question">本サイトはどのような人に向いていますか？</h2>
                </div>
                <div class="hidden-content">
                    testtesttesttesttesttesttest
                </div>
            </div>

            <div class="question-toggle" data-toggle="rankingCriteria">
                <div class="content-toggle">
                    <h2 class="question">何を基準にランキングを生成していますか？</h2>
                </div>
                <div class="hidden-content">
                    testtesttesttesttesttesttest
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
