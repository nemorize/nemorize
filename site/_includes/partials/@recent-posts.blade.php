@php
    $posts = array_values(array_filter($collections['posts'] ?? [], static fn ($post) => !($post->data['draft'] ?? false)));
@endphp
<ul>
  @foreach (array_slice($posts, 0, 5) as $post)
    <li>
      <a href="{{ rtrim($post->url, '/') }}">
        {{ $post->data['title'] }} <time>— {{ $post->date->setTimezone(new \DateTimeZone($site['timezone']))->format('Y년 m월 d일 H시 i분') }}</time>
      </a>
    </li>
  @endforeach
</ul>
