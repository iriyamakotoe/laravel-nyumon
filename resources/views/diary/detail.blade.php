<div>
    <!-- An unexamined life is not worth living. - Socrates -->
    <!-- タイトルを H1 タグで表示する -->
    <h1>{{ $diary->title }}</h1>
<div>
  <a href="{{ route('diary.edit', $diary->id) }}">
    <button>編集</button>
  </a>
</div>
    <!-- 内容と日付を表示する -->
    <div>
    <div>{{ $diary->body }}</div>
    <div>{{ $diary->date }}</div>
    </div>
</div>


<form method="post" action="{{ route('diary.destroy', $diary) }}">
  @csrf
  @method('delete')
  <button>削除</button>
</form>
