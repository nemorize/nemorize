@php
    \Hanji::meta([
        'title' => '짧은글 1-50',
        'activeNavigation' => 'notes',
        'styles' => ['/assets/css/notes.css'],
        'tags' => ['pages'],
    ]);
@endphp

<main class="notes">
  <div class="container">
    @foreach (\Hanji::meta('notes') as $note)
      @if ($note['group'] === '1-50')
        <div class="notes__item" id="note_{{ $note['number'] }}">
          <div class="notes__item-header">
            <a href="#note_{{ $note['number'] }}">#{{ $note['number'] }}</a>
            <time>{{ $note['date']->format('Y-m-d') }}</time>
          </div>
          <div class="notes__item-body">
            {{ $note['body'] }}
          </div>
        </div>
      @endif
    @endforeach
  </div>
</main>
