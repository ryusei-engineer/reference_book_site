@extends('layouts.index')
@section('title', 'top画面')
@section('content')
<main>
  <div class="reference_books">
    <h2>参考書一覧</h2>
    <ul>
      <a href="{{ route('reference_book1') }}"><li>参考書１</li></a>
      <a href="{{ route('reference_book1') }}"><li>参考書２</li></a>
      <a href="{{ route('reference_book1') }}"><li>参考書３</li></a>
      <a href="{{ route('reference_book1') }}"><li>参考書４</li></a>
      <a href="{{ route('reference_book1') }}"><li>参考書５</li></a>
      <a href="{{ route('reference_book1') }}"><li>参考書６</li></a>
    </ul>
  </div>
</main>
@endsection