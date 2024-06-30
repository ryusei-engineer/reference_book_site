@extends('layouts.index')
@section('title', '書籍検索')
@section('content')
<main>
  <div class="reference_books">
    <h2>参考書一覧</h2>

	<form action="{{ route('textbooks.search') }}" method="post">
	@csrf
	  <input type="text" name="search">
	  <button type="submit">検索</button>
	</form>

	{{ $test }}
	@if ((isset($textbooks)))
		<ul>
		@foreach ($textbooks as $textbook)
			<a href="{{ route('textbooks.show', $textbook->id)}}">
			<li>{{ $textbook->booktitle }}</li>
			</a>
		@endforeach
		</ul>
	@endif


  </div>

</main>
@endsection