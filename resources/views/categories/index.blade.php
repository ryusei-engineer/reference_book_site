@extends('layouts.index')
@section('title', 'カテゴリー')
@section('content')
<main>
  <div class="reference_books">
    <h2>カテゴリー一覧</h2>
    <form action="{{ route('categories.index') }}" method="post">
      @csrf
		<label for="category">カテゴリー名</label>
        <input type="text" name="category_name">
        <button type="submit">登録</button>
      </form>

      <ul>
      @foreach ($categories as $category)
		    <li>{{ $category->category_id}}:{{ $category->category_name }}</li>
      @endforeach
    </ul>
  </div>

  <a href="{{ route('index') }}">top</a>
</main>
@endsection