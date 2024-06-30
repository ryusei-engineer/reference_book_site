@extends('layouts.index')
@section('title', '書籍詳細')
@section('content')
<main>
	
	<a href="{{ route('index') }}">一覧に戻る</a>
  <div class="reference_books">
    <h2>{{ $textbook->booktitle }}</h2>

	<p> 書籍名: {{ $textbook->booktitle }} </p>
	<p> 著者  : {{ $textbook->author }} </p>
	<p> 出版社: {{ $textbook->publisher }} </p>
  </div>

  <div class="reviews">
	<h2>この書籍の口コミ</h2>
	<form action="{{ route('reviews.store', $textbook->id) }}" method="post">
		@csrf
		<input type="hidden" name="textbook_id" value="{{ $textbook->id }}">
		<label for="reviewtitle">タイトル</label>
		<input type="text" name="reviewtitle" id="reviewtitle">
		<label for="rating">評価</label>
		<select name="rating" id="rating">
			@for ($i = 1; $i <= 5; $i++)
				<option value="{{ $i }}">{{ $i }}</option>
			@endfor
		</select>
		<label for="review">コメント</label>
		<textarea name="review" id="review"></textarea>
		<button type="submit">口コミを投稿</button>
	</form>


	<form action="{{ route('textbooks.show', $textbook->id) }}" method="get">
		@csrf
		<label for="rating">評価</label>
		<select name="rating" id="rating">
			<option value="0">-</option>
			@for ($i = 1; $i <= 5; $i++)
				<option value="{{ $i }}">{{ $i }}</option>
			@endfor
		</select>
		<label for="sorted">評価</label>
		<select name="sorted" id="sorted">
			<option value="desc">投稿日時の新しい順</option>
			<option value="asc">投稿日時の古い順</option>
		</select>
		<button type="submit">口コミを全て表示</button>
	</form>

	@if ($reviews->isEmpty())
		<p>口コミがありません。</p>
	@else
		@foreach ($reviews as $review)
		<div class="review">
			<h3>{{ $review->reviewtitle }}</h3>
			<!-- <span>{{ $review->created_at }}</span> -->
			<p>評価: {{ $review->rating }}</p>
			<p>コメント: {{ $review->review }}</p>
		</div>
		@endforeach
	@endif
</main>
@endsection