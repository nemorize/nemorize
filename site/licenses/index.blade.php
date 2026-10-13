@php
    \Hanji::meta([
        'tags' => ['pages'],
        'title' => '라이선스 고지',
        'og_title' => '도구함',
        'styles' => ['/assets/css/licenses.css'],
    ]);
@endphp

<main class="licenses">
  <div class="container">
    <h2>스타일시트</h2>
    <a class="licenses__item licenses__item--last" href="https://github.com/nemorize/css-random" target="_blank">
      <div class="licenses__item-header">
        <b class="licenses__item-header-title">
          nemorize/css-random
        </b>
        <span class="licenses__item-header-type">
          WTFPL
        </span>
      </div>
      <p class="licenses__item-copyright">
        DO WHAT THE FUCK YOU WANT TO PUBLIC
      </p>
    </a>

    <h2>폰트</h2>
    <a class="licenses__item" href="https://github.com/orioncactus/pretendard" target="_blank">
      <div class="licenses__item-header">
        <b class="licenses__item-header-title">
          orioncactus/pretendard
        </b>
        <span class="licenses__item-header-type">
          OFL
        </span>
      </div>
      <p class="licenses__item-copyright">
        Copyright (c) 2021, Kil Hyung-jin (https://github.com/orioncactus/pretendard),
        with Reserved Font Name 'Pretendard'.
      </p>
    </a>
    <a class="licenses__item licenses__item--last" href="https://github.com/naver/d2codingfont" target="_blank">
      <div class="licenses__item-header">
        <b class="licenses__item-header-title">
          naver/d2codingfont
        </b>
        <span class="licenses__item-header-type">
          OFL
        </span>
      </div>
      <p class="licenses__item-copyright">
        Copyright (c) 2015, NAVER Corporation (http://www.navercorp.com), with Reserved Font Name D2Coding.
      </p>
    </a>
  </div>
</main>
