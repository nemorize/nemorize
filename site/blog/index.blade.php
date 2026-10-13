@php
    \Hanji::meta([
        'title' => '게시글',
        'contentType' => 'index',
        'styles' => ['/assets/css/blog.css'],
        'tags' => ['pages'],
    ]);
@endphp

@php
    $months = [];
    foreach ($collections['posts'] ?? [] as $post) {
        if ($post->data['draft'] ?? false) {
            continue;
        }
        $month = $post->date->setTimezone(new \DateTimeZone($site['timezone']))->format('Y년 m월');
        $months[$month][] = $post;
    }
@endphp
<main class="blog">
  <div class="container">
    @foreach ($months as $month => $posts)
      <div class="blog__section">
        <h3>{{ $month }}</h3>
        <ul>
          @foreach ($posts as $post)
            <li data-search-keywords="{{ $post->data['search_keywords'] ?? implode(' ', $post->data['labels'] ?? []) . ' ' . $post->data['title'] }}">
              <a href="{{ rtrim($post->url, '/') }}">
                {{ $post->data['title'] }} <time>— {{ $post->date->setTimezone(new \DateTimeZone($site['timezone']))->format('Y년 m월 d일 H시 i분') }}</time>
              </a>
            </li>
          @endforeach
        </ul>
      </div>
    @endforeach
  </div>
</main>
