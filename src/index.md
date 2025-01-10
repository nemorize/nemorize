---
eleventyExcludeFromCollections: true

title: 나
pagination:
    data: collections.all
    size: 5
    alias: posts
    reverse: true
---

<h1 style="margin: 0">Ji Yong, Kim (김지용)</h1>
<x-tokens>
    <span>Email: <a href="mailto:jiyong.kim@headercat.com">jiyong.kim@headercat.com</a></span>
    <i>|</i>
    <span>Tel: <a href="tel:+821059542048">+82 10-5954-2048</a></span>
</x-tokens>

소프트웨어, 하드웨어, 디자인, 마케팅 등 분야를 가리지 않고 **문제를 해결하는 것에 집중**합니다.
**각자가 경험하는 문제점을 파악하고, 이를 자연스럽게 해결할 솔루션을 만드는 사람.** 그것이 나를 제일 잘 설명하는 표현입니다.

## 새로운 글
{% for post in posts %}
* <a href="{{ post.url }}"> {{ post.data.title }} <time>— {{ post.date | date }}</time></a>
{% endfor %}

## 집중하고 있는 프로젝트
* 당신의 주머니에서 돈을 꺼내가는 프로젝트에 집중하고 있습니다. 🔫

## 내 정보

#### 취미
> 맛있는 음식을 먹고, 요리하는 것을 좋아합니다. (그러나 건강상의 문제로 잘 먹지 못합니다.)<br />
> 웹소설을 좋아합니다. 장르를 가리지 않지만, 비지시즌에는 가벼운 작품 위주로 찾아봅니다.<br />
> 귀여운 고양이 **구리**와 함께하고 있습니다. 사진첩과 <a href="https://instagram.com/headercatcat" target="_blank">인스타그램</a>에서 
> 구리를 만나볼 수 있습니다.

<x-image-slide>
  <img src="/assets/images/cats/IMG_1598.jpg" alt="" />
  <img src="/assets/images/cats/IMG_1800.jpg" alt="" />
  <img src="/assets/images/cats/IMG_1806.jpg" alt="" />
  <img src="/assets/images/cats/IMG_1894.jpg" alt="" />
  <img src="/assets/images/cats/IMG_1925.jpg" alt="" />
</x-image-slide>

#### 음악
> 시끄럽지 않은 노래를 좋아합니다. 잔잔하거나, 신나더라도 절제된 노래를 주로 듣습니다.<br />
> JPOP, KPOP, POP 순서로 자주 듣습니다. 한번 꽂힌 곡은 몇주씩 반복해 듣습니다. 최근 아래 곡들을 특히 자주 들었습니다.<br />
> <a href="https://www.youtube.com/watch?v=ejY-UN7Qhp4" target="_blank">그럼에도 불구하고 - 알레프|밍기뉴</a>,
> <a href="https://www.youtube.com/watch?v=HHLL9qiE2L4" target="_blank">우린 그렇게 사랑해서 - 강민경|최정훈</a>,
> <a href="https://www.youtube.com/watch?v=_cbDDe-_NmQ" target="_blank">恋におちて - 小林明子</a>,
> <a href="https://www.youtube.com/watch?v=IvDTkTKi5pA" target="_blank">全力少年 - SUKIMASWITCH</a>

#### 건강
> 2형당뇨가 있습니다. 맛있는 음식을 정말 좋아하지만, 건강한 식단을 유지하고 음주를 최소화하려 노력합니다.

#### 언어
> 한국어가 모국어입니다. 영어와 일본어를 듣고, 읽고, 쓸 수 있습니다.

#### 지역
> 울산에서 태어나 울산에서 학창생활을 보냈고, 울산에서 상근예비역으로 군복무했습니다.<br />
> 이후 2025년 현재 여자친구와 함께하기 위해 약 5년째 광주에 거주하고 있습니다.

#### 프로그래밍
> PHP와 TypeScript를 제일 많이 사용합니다.
> <a href="/blog/2025-01-01/why-i-use-php-almost-everywhere">내가 (거의) 모든 곳에 PHP를 사용하는 이유</a>를 읽어보세요.<br />
> 공백만으로 블럭을 구분하는 Python을 좋아하지 않습니다.<br />
> Jetbrains 제품들을 10년 넘게 사용하고 있습니다. 특히 PHPStorm은 이제 인생의 반려자와 같은 존재가 되었습니다.
