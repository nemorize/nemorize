<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>{{ \Hanji::meta('title') }} | {{ $site['title'] }}</title>
  <link rel="shortcut icon" href="https://github.com/nemorize.png" />
  <meta name="description" content="&#64;nemorize (Ji Yong, Kim)" />

  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="{{ $site['title'] }}" />
  <meta property="og:locale" content="ko_KR" />
  <meta property="og:title" content="{{ \Hanji::meta('og_title', \Hanji::meta('title')) }} | {{ $site['title'] }}" />
  <meta property="og:description" content="&#64;nemorize (Ji Yong, Kim)" />

  <link rel="stylesheet" href="{{ $hanji->url('/assets/css/style.css') }}" />
  @foreach (\Hanji::meta('styles', []) as $stylesheet)
    <link rel="stylesheet" href="{{ $hanji->url($stylesheet) }}" />
  @endforeach
  @if (\Hanji::meta('redirect'))
    <meta http-equiv="refresh" content="0.5;url={{ $hanji->url(\Hanji::meta('redirect')) }}" />
  @endif
</head>
<body>
<header class="header">
  <div class="container">
    <a class="header__brand" href="{{ $hanji->url('/') }}" title="{{ $site['title'] }}">
      네모라이즈
    </a>
    <nav class="header__nav">
      @foreach (\Hanji::meta('navigation') as $item)
        <a class="header__nav-item{{ \Hanji::meta('activeNavigation') === $item['key'] ? ' header__nav-item--active' : '' }}" href="{{ $hanji->url($item['url']) }}">
          {{ $item['label'] }}
        </a>
      @endforeach
    </nav>
  </div>
</header>

{{ \Hanji::children() }}

<footer class="footer">
  <div class="container">
    <p class="footer__copyright">
      &copy; 2025 Ji Yong, Kim. All rights reserved.
    </p>
    <nav class="footer__nav">
      <a class="footer__nav-item" href="{{ $hanji->url('/tools') }}">
        도구함
      </a>
      <a class="footer__nav-item" href="{{ $hanji->url('/licenses') }}">
        라이선스
      </a>
      <a class="footer__nav-item" href="https://github.com/nemorize" target="_blank">
        GitHub
      </a>
    </nav>
  </div>
</footer>
</body>
</html>
