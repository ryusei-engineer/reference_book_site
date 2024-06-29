@extends('layouts.index')
@section('title', '登録完了')
@section('content')
<main>
    <h3>登録完了</h3>
    <p>Your textbook has been registered successfully.</p>
    <a href="{{ route('textbooks.create') }}">書籍登録へもどる</a> <br>
    <a href="{{ route('textbooks.index') }}">書籍一覧へもどる</a>
</main>
@endsection