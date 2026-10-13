@if (\Hanji::meta('contentType') === 'album')
<main class="post">
  <div class="container">
    <div class="post__header">
      <div class="post__header-tags">
        @foreach (\Hanji::meta('labels', []) as $label)
          <span>{{ $label }}</span>
        @endforeach
        <time>{{ \Hanji::meta('date_label', $page->date?->format('Y년 m월')) }}</time>
      </div>
    </div>

    <article class="post__body post__body--images">
      {{ \Hanji::children() }}
    </article>
  </div>
</main>
@else
  {{ \Hanji::children() }}
@endif
