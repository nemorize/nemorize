@php
    \Hanji::meta([
        'tags' => ['pages'],
        'title' => '나',
        'activeNavigation' => 'home',
        'styles' => ['/assets/css/index.css?20251117'],
    ]);
@endphp

<main class="index">
  <div class="container">
    <div class="index__jumbotron">
      <img src="assets/images/index-jumbotron.png" width="720" height="360" alt="" fetchpriority="high">
      <h1>&#64;nemorize <span>Ji Yong, Kim</span></h1>
      <div class="index__jumbotron-contact">
        <div class="index__jumbotron-contact-item">
          Email:
          <a href="mailto:jiyong.kim@headercat.com">
            jiyong.kim@headercat.com
          </a>
        </div>
        <div class="index__jumbotron-contact-item">
          Tel:
          <a href="tel:821059542048">
            +82 10-5954-2048
          </a>
        </div>
      </div>
      <p>
        소프트웨어, 하드웨어, 디자인, 마케팅 등 분야를 가리지 않고 <b>문제를 해결하는 것에 집중</b>합니다.
        <b>각자가 경험하는 문제점을 파악하고, 이를 자연스럽게 해결할 솔루션을 만드는 사람.</b>
        그것이 나를 제일 잘 설명하는 표현입니다.
      </p>
    </div>

    <div class="index__section">
      <h2>새로운 내용</h2>

      <h3>게시글</h3>
      @include('partials.recent-posts')

      <h3>짧은글</h3>
      @include('partials.recent-notes')

      <h3>구독과 좋아요</h3>
      <p>
        새로운 게시글이 올라오면 본 블로그의 깃허브 레포의 Release 기능을 통해 알려드립니다. 아래 버튼을 통해 레포를 확인하고, Star 버튼을 눌러주시면
        깃허브 홈 화면의 피드에서 새 게시글을 바로 확인할 수 있습니다.
      </p>
      <div class="index__follow">
        <a href="https://github.com/nemorize/nemorize" target="_blank">
          <svg role="img" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577
                     0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7
                     3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305
                     3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38
                     1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006
                     2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23
                     3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0
                     .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" fill="currentColor"></path>
          </svg>
          <span>GitHub</span>
        </a>
        <a href="https://github.com/nemorize/nemorize/releases.atom" target="_blank">
          <svg role="img" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round">
            <path d="M4 11a9 9 0 0 1 9 9" fill="none"></path>
            <path d="M4 4a16 16 0 0 1 16 16" fill="none"></path>
            <circle cx="5" cy="19" r="1" fill="none"></circle>
          </svg>
          <span>RSS</span>
        </a>
      </div>
    </div>

    <div class="index__section">
      <h2>내 정보</h2>

      <h3>취미</h3>
      <ul>
        <li>맛있는 음식을 먹고, 요리하는 것을 좋아합니다. (그러나 건강상의 문제로 잘 먹지 못합니다.)</li>
        <li>웹소설을 좋아합니다. 장르를 가리지 않지만, 비지시즌에는 가벼운 작품 위주로 찾아봅니다.</li>
        <li>귀여운 고양이 구리와 함께하고 있습니다.</li>
      </ul>

      <h3>음악</h3>
      <ul>
        <li>시끄럽지 않은 노래를 좋아합니다. 잔잔하거나, 신나더라도 절제된 노래를 주로 듣습니다.</li>
        <li>JPOP, KPOP, POP 순서로 자주 듣습니다. 한번 꽂힌 곡은 몇주씩 반복해 듣습니다. 최근 아래 곡들을 특히 자주 듣습니다.</li>
        <li>
          <a href="https://www.youtube.com/watch?v=IvDTkTKi5pA" target="_blank">
            全力少年 - SUKIMASWITCH <time>(전력소년 - 스키마스위치)</time>
          </a>
        </li>
        <li>
          <a href="https://www.youtube.com/watch?v=_cbDDe-_NmQ" target="_blank">
            恋におちて-Fall in love- - 小林明子 <time>(코이니오치테 - 아키코 코바야시)</time>
          </a>
        </li>
        <li>
          <a href="https://www.youtube.com/watch?v=PuR3AtWe_rE" target="_blank">
            創聖のアクエリオン - AKINO <time>(창성의 아쿠에리온 - 아키노)</time>
          </a>
        </li>
      </ul>

      <h3>건강</h3>
      <ul>
        <li>2형 당뇨가 있습니다. 맛있는 음식을 정말 좋아하지만, 건강한 식단을 유지하고 음주를 최소화하고 있습니다.</li>
      </ul>

      <h3>지역</h3>
      <ul>
        <li>울산광역시에서 태어나 울산에서 학창시절을 보냈고, 울산에서 상근예비역으로 군 복무했습니다.</li>
        <li>이후 2025년 현재 여자친구와 함께하기 위해 약 5년째 광주광역시에 거주하고 있습니다.</li>
      </ul>

      <h3>언어</h3>
      <ul>
        <li>한국어가 모국어입니다. 영어와 일본어를 듣고, 읽고, 쓸 수 있습니다.</li>
        <li>PHP와 Typescript를 자주 사용합니다. 필요에 따라 Go, Kotlin, Swift를 함께 사용합니다.</li>
        <li>들여쓰기로 블럭을 구분하는 Python과 그 유사 문법의 언어들을 좋아하지 않습니다. 꼭 필요한 상황이 아닌 이상 사용하지 않습니다.</li>
        <li>더 이상 Ruby를 사용하지 않지만, 알만툴(RPG Maker XP)에서 처음 접한 Ruby에 꽤 좋은 기억을 가지고 있습니다.</li>
      </ul>
    </div>
  </div>
</main>
