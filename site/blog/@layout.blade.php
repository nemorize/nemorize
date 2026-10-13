@if (\Hanji::meta('contentType') === 'post')
<main class="post">
  <div class="container">
    <div class="post__header">
      <div class="post__header-tags">
        @foreach (\Hanji::meta('labels', []) as $label)
          <span>{{ $label }}</span>
        @endforeach
      </div>
      <h1>{{ \Hanji::meta('title') }}</h1>
      <div class="post__header-meta">
        <time>{{ \Hanji::meta('date_label', $page->date?->setTimezone(new \DateTimeZone($site['timezone']))->format('Y년 m월 d일 H시 i분')) }}</time>
        <i>|</i>
        <span>완독까지 약 {{ \Hanji::meta('reading_minutes', 0) }}분</span>
      </div>
    </div>

    <article class="post__body">
      {{ \Hanji::children() }}
    </article>

    @if (\Hanji::meta('updates_view'))
      @include(\Hanji::meta('updates_view'))
    @endif
  </div>
</main>
@else
  {{ \Hanji::children() }}
@endif
