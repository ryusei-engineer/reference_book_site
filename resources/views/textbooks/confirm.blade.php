@extends('layouts.index')
@section('title', '登録確認')
@section('content')
<main>
    <h3>登録確認</h3>
    <form action="{{ route('textbooks.store') }}" method="POST">
        @csrf
        <input type="hidden" name="title" value="{{ $textbook['title'] }}">
        <input type="hidden" name="author" value="{{ $textbook['author'] }}">
        <input type="hidden" name="publisher" value="{{ $textbook['publisher'] }}">
        <p>Title: {{ $textbook['title'] }}</p>
        <p>Author: {{ $textbook['author'] }}</p>
        <p>Publisher: {{ $textbook['publisher'] }}</p>
        <button class="btn" type="submit">Register</button>
    </form>
    <form action="{{ route('textbooks.create') }}" method="GET">
        <button class="btn" type="submit">Back</button>
    </form>
  </main>
  @endsection