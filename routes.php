<?php

return [
    'GET' => [
        '/' => 'BM\Controllers\PagesController@home',
        '/xml-to-json' => 'BM\Controllers\PagesController@xmlToJson',
    ],
    'POST' => [
        '/api/validation' => 'BM\Controllers\PagesController@validation',
    ]
];