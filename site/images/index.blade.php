@php
    \Hanji::meta([
        'title' => '사진첩',
        'contentType' => 'index',
        'styles' => ['/assets/css/images.css'],
        'tags' => ['pages'],
    ]);
@endphp

@php
    $months = [];
    foreach ($collections['albums'] ?? [] as $album) {
        if (isset($album->data['cover'])) {
            $months[$album->date->format('Y년 m월')][$album->data['gallery_column']][] = $album;
        }
    }
@endphp
<main class="images">
  <div class="container">
    @foreach ($months as $month => $columns)
      <div class="images__section">
        <h3>{{ $month }}</h3>
        <div class="images__section-list">
          @for ($column = 0; $column < 2; $column++)
            @php
                $albums = $columns[$column] ?? [];
                usort($albums, static fn ($a, $b) => $a->data['gallery_order'] <=> $b->data['gallery_order']);
            @endphp
            <div class="images__section-list-column">
              @foreach ($albums as $album)
                <a href="{{ rtrim($album->url, '/') }}">
                  <img src="{{ $hanji->url($album->data['cover']['src']) }}" alt="{{ $album->data['cover']['alt'] }}" width="{{ $album->data['cover']['width'] }}" height="{{ $album->data['cover']['height'] }}" loading="lazy" />
                  @if ($album->data['show_count'])
                    <span>{{ $album->data['image_count'] }}</span>
                  @endif
                </a>
              @endforeach
            </div>
          @endfor
        </div>
      </div>
    @endforeach
  </div>
</main>
