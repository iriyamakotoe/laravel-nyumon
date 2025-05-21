@foreach($diaries as $diary)
<div>
  <div>{{ $diary->date }}</div>
  <div><a href="{{ route('diary.detail', $diary) }}">{{ $diary->title }}</a></div>
</div>
@endforeach