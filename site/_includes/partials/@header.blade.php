<header class="header">
  <div class="container">
    <a class="header__brand" href="{{ $hanji->url('/') }}" title="{{ $site['title'] }}">
      네모라이즈
    </a>
    <nav class="header__nav">
      @foreach (\Hanji::meta('navigation') as $item)
        @if (empty($item['photosOnly']) || \Hanji::meta('photosNavigation', false))
          <a class="header__nav-item{{ \Hanji::meta('activeNavigation') === $item['key'] ? ' header__nav-item--active' : '' }}" href="{{ $hanji->url($item['url']) }}">
            {{ $item['label'] }}
          </a>
        @endif
      @endforeach
    </nav>
  </div>
</header>
