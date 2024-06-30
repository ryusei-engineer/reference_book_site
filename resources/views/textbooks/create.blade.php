@extends('layouts.index')
@section('title', '書籍登録')
@section('content')
<main>
    <div class="registration">
    <h3>参考書を登録</h3>
    <form action="{{ route('textbooks.confirm') }}" method="POST">
        @csrf
        <label for="title">書籍名:</label>
        <input type="text" id="title" name="title" required><br>
        <label for="author">著者:</label>
        <input type="text" id="author" name="author" required><br>
        <label for="publisher">出版社:</label>
        <input type="text" id="publisher" name="publisher" required><br>
        <button type="submit">登録する</button>
    </form>
    </div>
</main>
@endsection