@extends('layouts.index')
@section('title', '書籍登録')
@section('content')
<main>
    <h3>Textbook Registration</h3>
    <form action="{{ route('textbooks.confirm') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required><br>
        <label for="author">Author:</label>
        <input type="text" id="author" name="author" required><br>
        <label for="publisher">Publisher:</label>
        <input type="text" id="publisher" name="publisher" required><br>
        <button type="submit">Confirm</button>
    </form>
</main>
@endsection