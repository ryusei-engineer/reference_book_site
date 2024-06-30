@extends('layouts.index')
@section('title', '口コミサイト')
@section('content')
<main>
  <div class="reference_books">
    <h2>参考書一覧</h2>
    <spanp>検索:</spanp>
    <form action="{{ route('index') }}" method="GET">
      @csrf
        <label for="keyword">キーワード:</label>
        <input type="text" name="keyword">

        <label for="category_id">カテゴリー:</label>
        <select name="category_id">
          <option value="">選択してください</option>
          @foreach ($categories as $category)
            <option value="{{ $category->category_id }}">{{ $category->category_name }}</option>
          @endforeach
        </select>
        <button type="submit">検索</button>
    </form>

    <form action="{{ route('textbooks.search')}}" method="GET">
      <label for="categories">カテゴリー</label>
      @foreach ($categories as $category)
        <input type="checkbox" name="categories[]" value="{{ $category->category_id}}">{{ $category->category_name}}
      @endforeach
      <input type="submit" value="カテゴリー検索">
    </form>

      <ui>
        @foreach ($textbooks as $textbook)
          <a href="{{ route('textbooks.show', $textbook->id)}}">
            <li>{{ $textbook->booktitle }}</li>
          </a>
        @endforeach
    </ui>
  </div>

  <div class="reviews">
    @if (empty($reviews))
      <h2>最新の口コミはありません</h2>
    @else
      <h2>新着の口コミ</h2>
    @endif

    <table>
      @foreach($reviews as $review)
      <tr>
        {{--<th>{{ $review->textbook()->booktitle }}</th>--}}
        <th>{{ $review->reviewtitle }}</th>
        <td>{{ $review->review }}</td>
      </tr>
      @endforeach
    </table>
  </div>

  <a href="{{ route('textbooks.create') }}">新規登録</a>
</main>
@endsection