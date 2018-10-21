<?php
return [
    'menu' => [
        [
            'label' => 'Public',
            'url' => config('www_url', $_SERVER['REQUEST_SCHEME'] . '://' . substr(strstr($_SERVER['HTTP_HOST'], '.'), 1)),
            'linkOptions' => [
                'target' => '_blank',
                'rel' => 'noopener',
            ]
        ],
        ['label' => 'User', 'url' => ['/user/index']],
    ]
];
