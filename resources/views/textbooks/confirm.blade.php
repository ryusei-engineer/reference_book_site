@extends('layouts.index')
@section('title', '登録確認')
@section('content')
<main>
    <div>
    <h3>登録確認</h3>
    <form action="{{ route('textbooks.store') }}" method="POST">
        @csrf
        <input type="hidden" name="title" value="{{ $textbook['title'] }}">
        <input type="hidden" name="author" value="{{ $textbook['author'] }}">
        <input type="hidden" name="publisher" value="{{ $textbook['publisher'] }}">
        <p>書籍名: {{ $textbook['title'] }}</p>
        <p>著者: {{ $textbook['author'] }}</p>
        <p>出版社: {{ $textbook['publisher'] }}</p>
        <button type="submit">登録する</button>
    </form>
    <form action="{{ route('textbooks.create') }}" method="GET">
        <button type="submit">戻る</button>
    </form>
    </div>
    
</main>
@endsection