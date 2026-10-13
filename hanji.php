<?php

declare(strict_types=1);

use Hanji\Config;
use Hanji\Plugin\Build\ScssBuildPlugin;

return (new Config())
    ->input('site')
    ->output('_site')
    ->title('nemorize.me')
    ->baseUrl('https://nemorize.me')
    ->timezone('Asia/Seoul')
    ->markdownHtml(true)
    ->plugin(new ScssBuildPlugin(compressed: false));
