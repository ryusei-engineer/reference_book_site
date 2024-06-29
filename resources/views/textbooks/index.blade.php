@extends('layouts.index')
@section('title', '口コミサイト')
@section('content')
<main>
  <div class="reference_books">
    <h2>参考書一覧</h2>
    <ul>
      @foreach ($textbooks as $textbook)
        <a href="{{ route('textbooks.show', $textbook->id)}}">
          <li>{{ $textbook->booktitle }}</li>
        </a>
      @endforeach
    </ul>
  </div>

  <a href="{{ route('textbooks.create') }}">新規登録</a>
</main>
@endsection