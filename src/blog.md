---
title: 게시글
---

# 게시글

{% assign ym = "" %}
{% for post in collections.post reversed %}
{% assign postYearMonth = post.date | yearMonth %}
{% if ym != postYearMonth %}
{% assign ym = postYearMonth %}
## {{ post.date | yearMonth }}
{% endif %}
* <a href="{{ post.url }}"> {{ post.data.title }} <time>— {{ post.date | date }}</time></a>
{% endfor %}
