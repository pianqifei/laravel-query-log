<?php

return [
    'log_enable' => env('QUERY_LOG',true),
    'log_channel'=>[
        'driver' => 'daily',
        'path' => storage_path('logs/query.log'),
        'level' => 'debug',
        'days' => 14,
    ]
];
