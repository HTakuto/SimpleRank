@extends('layouts.app')

@section('title', 'SimpleRank | contact')

@section('main')
<main>
    <div class="container">
        <div class="contact-form">
            <form method="POST" action="/contact">
                @csrf
                <label for="contact">お問い合わせ内容</label>
                <textarea name="contact" id="contact" placeholder="お問い合わせ内容を入力してください。1000文字まで入力可能です。" class="no-resize" maxlength="1000"></textarea>
                <br>
                <button type="submit">送信</button>
            </form>
        </div>
    </div>
</main>
@endsection
