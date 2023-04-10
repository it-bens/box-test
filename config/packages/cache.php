<?php

use Symfony\Config\FrameworkConfig;

return static function (FrameworkConfig $framework) {
    $framework->cache()
        ->app('cache.adapter.apcu')
        ->system('cache.adapter.apcu');
    $framework->cache()->pool('doctrine.result_cache_pool')->adapters(['cache.app']);
    $framework->cache()->pool('doctrine.system_cache_pool')->adapters(['cache.system']);
};
