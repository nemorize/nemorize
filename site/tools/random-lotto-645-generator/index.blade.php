@php
    \Hanji::meta([
        'tags' => ['pages'],
        'title' => '로또6/45 번호 생성기',
        'og_title' => '도구함',
        'styles' => ['/assets/css/tools.css', '/tools/random-lotto-645-generator/style.css', 'https://css-random.nemorize.me/r1,r2,r3,r4,r5,r6,r7,r8,r9,r10'],
    ]);
@endphp

<main class="tools">
  <div class="container">
    <h2>로또6/45 번호 생성기</h2>
@foreach (['첫번째', '두번째', '세번째', '네번째', '다섯번째'] as $label)
    <div class="lotto">
      <h3>
        {{ $label }} 번호
        <span>#<i></i></span>
      </h3>
      <div class="lotto__list">
        @for ($number = 1; $number <= 45; $number++)
          <span>{{ sprintf('%02d', $number) }}</span>
        @endfor
      </div>
    </div>
@endforeach
  </div>
</main>
