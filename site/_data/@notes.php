<?php

declare(strict_types=1);

use Hanji\Template\Markdown;
use Illuminate\Support\HtmlString;

$notes = [];
foreach (glob(dirname(__DIR__) . '/notes/*/@*.md') as $path) {
    [$body, $meta] = Markdown::extract((string) file_get_contents($path), $path);
    $rendered = Markdown::render($body, true);
    $notes[] = [
        ...$meta,
        'body' => new HtmlString($rendered),
        'url' => '/notes/' . $meta['group'] . '/#note_' . $meta['number'],
        'date' => new DateTimeImmutable($meta['date'], new DateTimeZone('Asia/Seoul')),
        'excerpt' => $meta['excerpt'] ?? mb_strimwidth(trim(strip_tags($rendered)), 0, 90, '...'),
    ];
}
usort($notes, static fn (array $a, array $b): int => $b['number'] <=> $a['number']);

return $notes;
