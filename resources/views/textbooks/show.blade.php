@extends('layouts.index')
@section('title', '書籍詳細')
@section('content')
<main>
  <div class="reviews">
    <div class="reference_books">
    <h2>{{ $textbook->booktitle }}の口コミ一覧</h2>
	<p> 書籍名: {{ $textbook->booktitle }} </p>
	<p> 著者  : {{ $textbook->author }} </p>
	<p> 出版社: {{ $textbook->publisher }} </p>
  </div>
    <div class="review">
      <ul>
        <li>
          <p class="user_name">田中太郎</p>
          <p>分かりやすい参考書です。おすすめです！口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容</p>
        </li>

        <li>
          <p class="user_name">田中太郎</p>
          <p>口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容</p>
        </li>

        <li>
          <p class="user_name">田中太郎</p>
          <p>口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容</p>
        </li>

        <li>
          <p class="user_name">田中太郎</p>
          <p>口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容口コミ内容</p>
        </li>
      </ul>
    </div>
  </div>
  <a class="btn" href="{{ route('index') }}">参考書一覧へ</a>
</main>
@endsection