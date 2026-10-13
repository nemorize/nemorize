@php
    \Hanji::meta([
        'tags' => ['pages'],
        'title' => '도구함',
        'styles' => ['/assets/css/tools.css'],
    ]);
@endphp

<main class="tools">
  <div class="container">
    <h2>도구함</h2>

    <a class="tools__item tools__item--last" href="/tools/random-lotto-645-generator">
      <span class="tools__item-title">로또6/45 번호 생성기</span>
      <p class="tools__item-description">
        랜덤 로또6/45 번호 5개를 생성합니다.
      </p>
    </a>
  </div>
</main>
