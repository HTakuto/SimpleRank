@extends('layouts.app')

@section('title', 'SimpleRank | contact')

@section('main')
<main>
    <!-- Hero Section -->
    <div class="hero_wrapper">
        <div class="hero_content">
            <h1 class="hero_title">{{ trans('messages.contact_title') }}</h1>
            <p class="hero_subtitle">
                {{ trans('messages.contact_subtitle_1') }}<br>
                {{ trans('messages.contact_subtitle_2') }}<br>
                <div class="hero_bold">{{ trans('messages.contact_bold') }}</div>
            </p>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="container">
        <div class="contact-form">
            <form method="POST" action="{{ route('contact.store') }}">
                @csrf
                <label for="contact">{{ trans('messages.contact') }}</label>
                <textarea name="contact" id="contact" placeholder="{{ trans('messages.contact_placeholder') }}" class="no-resize" maxlength="1000">{{ old('contact') }}</textarea>
                <br>
                <button type="submit">{{ trans('messages.submit') }}</button>
            </form>
        </div>
    </div>
</main>
@endsection
