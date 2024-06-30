@extends('layouts.index')
@section('title', '口コミ全部')
@section('content')
<main>
  <div class="reference_books">
    <h2>口コミすべて</h2>
	@foreach ($reviews as $review)
	<div class="review">
		<p>書籍名: {{ $review->textbook->booktitle }}</p>
		<p>時間: {{ $review->created_at }} </p>
		<p>評価: {{ $review->rating }}</p>
		<p>title: {{ $review->reviewtitle }}</p>
		<p>コメント: {{ $review->review }}</p>
	</div>
      @endforeach
  </div>

</main>
@endsection