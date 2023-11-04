@extends('layouts.app')

@section('title', 'SimpleRank | about')

@section('main')
<main>
    <!-- Hero Section -->
    <div class="hero_wrapper">
        <div class="hero_content">
            <h1 class="hero_title">{{ __('messages.about_title') }}</h1>
            <p class="hero_subtitle">
                {{ __('messages.about_subtitle') }}<br>
                <div class="hero_bold">{{ __('messages.about_bold') }}</div>
            </p>
        </div>
    </div>

    <!-- About Section -->
    <div class="about_wrapper">
        <div class="about_content_main">
            <div class="question-toggle" data-toggle="siteDescription">
                <div class="content-toggle">
                    <h2 class="question">{{ __('messages.question_1') }}</h2>
                </div>
                <div class="hidden-content">
                    {{ __('messages.answer_1') }}
                </div>
            </div>

            <div class="question-toggle" data-toggle="siteLinks">
                <div class="content-toggle">
                    <h2 class="question">{{ __('messages.question_2') }}</h2>
                </div>
                <div class="hidden-content">
                    {{ __('messages.answer_2') }}
                </div>
            </div>

            <div class="question-toggle" data-toggle="targetAudience">
                <div class="content-toggle">
                    <h2 class="question">{{ __('messages.question_3') }}</h2>
                </div>
                <div class="hidden-content">
                    {{ __('messages.answer_3') }}
                </div>
            </div>

            <div class="question-toggle" data-toggle="rankingCriteria">
                <div class="content-toggle">
                    <h2 class="question">{{ __('messages.question_4') }}</h2>
                </div>
                <div class="hidden-content">
                    {{ __('messages.answer_4') }}
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
