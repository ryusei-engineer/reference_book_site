@extends('layouts.index')
@section('title', 'top画面')
@section('content')
<main>
  <div class="reviews">
    <h2>参考書1の口コミ一覧</h2>
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
  <a href="{{ route('index') }}">参考書一覧へ</a>
</main>
@endsection