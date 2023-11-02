@extends('layouts.app')

@section('title', 'SimpleRank | contact')

@section('main')
<main>
    <!-- Hero Section -->
    <div class="hero_wrapper">
        <div class="hero_content">
            <h1 class="hero_title">お問い合わせ</h1>
            <p class="hero_subtitle">
                お問い合わせいただきありがとうございます。<br>
                お客様のご要望に答えられるよう尽力して参ります。<br>
                <div class="hero_bold">個人情報を記載しないようご注意ください。</div>
            </p>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="container">
        <div class="contact-form">
            <form method="POST" action="{{ route('contact.store') }}">
                @csrf
                <label for="contact">お問い合わせ内容</label>
                <textarea name="contact" id="contact" placeholder="お問い合わせ内容を入力してください。1000文字まで入力可能です." class="no-resize" maxlength="1000">{{ old('contact') }}</textarea>
                <br>
                <button type="submit">送信</button>
            </form>
        </div>
    </div>
</main>
@endsection
