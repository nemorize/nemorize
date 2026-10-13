@php
    \Hanji::meta([
        'tags' => ['pages'],
        'title' => '짧은글',
        'activeNavigation' => 'notes',
        'styles' => ['/assets/css/redirect.css'],
        'redirect' => '/notes/1-50',
    ]);
@endphp

<main class="redirect">
  <div class="container">
    <div class="redirect__loader"></div>
    <span>최신 짧은글 목록으로 이동하는 중</span>
  </div>
</main>
