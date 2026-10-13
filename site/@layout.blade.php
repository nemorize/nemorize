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
@include('partials.header')

{{ \Hanji::children() }}

@include('partials.footer')
</body>
</html>
