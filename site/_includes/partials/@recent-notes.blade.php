<ul>
  @foreach (array_slice(\Hanji::meta('notes'), 0, 3) as $note)
    <li>
      <a href="{{ $hanji->url($note['url']) }}">
        {{ $note['excerpt'] }} <time>— {{ $note['date']->format('Y년 m월 d일') }}</time>
      </a>
    </li>
  @endforeach
</ul>
