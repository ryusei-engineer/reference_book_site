@extends('layouts.index')
@section('title', '口コミサイト')
@section('content')
<main>
  <div class="reference_books">
    <h2>参考書一覧</h2>
    <spanp>検索:</spanp>
    <form action="{{ route('textbooks.index') }}" method="GET">
      @csrf
        <label for="keyword">キーワード:</label>
        <input type="text" name="keyword">

        <label for="category_id">カテゴリー:</label>
        <select name="category_id">
          <option value="">選択してください</option>
          @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
          @endforeach
        </select>
        <button type="submit">検索</button>
    </form>

      <ui>
        @foreach ($textbooks as $textbook)
          <a href="{{ route('textbooks.show', $textbook->id)}}">
            <li>{{ $textbook->booktitle }}</li>
          </a>
        @endforeach
    </ui>
    {{--<div class="mb-4">
      {{ $textbooks->links() }}
    </div>--}}
  </div>

  <a href="{{ route('textbooks.create') }}">新規登録</a>
</main>
@endsection

{{-- 使用しない --}}