@extends('layouts.index')
@section('title', '書籍詳細')
@section('content')
<main>
  <div class="reference_books">
    <h2>{{ $textbook->booktitle }}</h2>

	<p> 書籍名: {{ $textbook->booktitle }} </p>
	<p> 著者  : {{ $textbook->author }} </p>
	<p> 出版社: {{ $textbook->publisher }} </p>
  </div>
</main>
@endsection