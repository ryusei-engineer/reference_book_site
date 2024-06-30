@extends('layouts.index')
@section('title', '口コミサイト')
@section('content')
<main>
  <div class="reference_books">
    <div class="main_header">
    <h2>参考書一覧</h2>
    <a class="btn" href="{{ route('textbooks.create') }}">新規登録</a>
    </div>
    <form class="
search" action="{{ route('index') }}" method="GET">
      @csrf
        <input class="keyword_input" type="text" name="keyword" placeholder="キーワード">

        <select class="category_select" name="category_id">
          <option value="">選択してください</option>
          @foreach ($categories as $category)
            <option value="{{ $category->category_id }}">{{ $category->category_name }}</option>
          @endforeach
        </select>
        <button class="btn" type="submit">検索</button>
    </form>

    {{--<form action="{{ route('textbooks.search')}}" method="GET">
      <label for="categories">カテゴリー</label>
      @foreach ($categories as $category)
        <input type="checkbox" name="categories[]" value="{{ $category->category_id}}">{{ $category->category_name}}
      @endforeach
      <input type="submit" value="カテゴリー検索">
    </form>--}}

      <ui>
        @foreach ($textbooks as $textbook)
          <a href="{{ route('textbooks.show', $textbook->id)}}">
            <li>{{ $textbook->booktitle }}</li>
          </a>
        @endforeach
    </ui>
  </div>
</main>
@endsection