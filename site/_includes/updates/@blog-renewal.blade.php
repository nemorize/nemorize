<section class="post__comment">
      <div class="post__comment-item">
        <div class="post__comment-item-header">
          <img src="https://github.com/nemorize.png" alt="nemorize" width="320" height="320">
          <span>nemorize</span>
          <time>2025-08-01 02:32</time>
        </div>
        <div class="post__comment-item-body">
          + 업데이트<br>
          블로그 게시글 목록을 검색하는 기능을 추가했다. 마찬가지로 JS 없이 동작한다. GitHub Pages에서 호스팅되는 블로그다보니, SSR를 사용할 수 없어
          꼼수 하나를 사용했다.<br><br>
          검색폼에서 키워드를 제출하면 URL의 ?q 쿼리스트링으로 해당 키워드가 붙는다. 클라우드플레어에서 호스팅되는 동적 CSS 파일은 요청의 리퍼러를 확인해
          그것에서 검색 키워드를 파싱한다.<br>
          해당 CSS 파일은 파싱된 검색 키워드를 속성으로 포함하고 있는 요소들 이외의 것을 숨김 처리하는 스타일을 출력한다.<br><br>
          이러한 방식으로 유사-야매 검색 기능을 구현했다. Ctrl+F를 사용하는 것과 큰 차이는 없지만, 각 게시글마다 검색에 도움이 되는 키워드를 몇개 추가해
          약간의 이점을 얻을 수 있도록 했다.
        </div>
      </div>

    </section>
