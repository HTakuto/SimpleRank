@extends('layouts.app')

@section('title', 'MinimalRank | contact')

@section('main')
<main>
    <!-- Hero Section -->
    <div class="hero_wrapper">
        <div class="hero_content">
            <h1 class="hero_title">{{ __('messages.contact_title') }}</h1>
            <p class="hero_subtitle">
                {{ __('messages.contact_subtitle_1') }}<br>
                {{ __('messages.contact_subtitle_2') }}<br>
                <div class="hero_bold">{{ __('messages.contact_bold') }}</div>
            </p>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="container">
        <div class="contact-form">
            <form method="POST" action="{{ route('contact.store') }}">
                @csrf
                <label for="contact">{{ __('messages.contact') }}</label>
                <textarea name="contact" id="contact" placeholder="{{ __('messages.contact_placeholder') }}" class="no-resize" maxlength="1000">{{ old('contact') }}</textarea>
                <br>
                <button type="submit">{{ __('messages.submit') }}</button>
            </form>
        </div>
    </div>
</main>
@endsection
