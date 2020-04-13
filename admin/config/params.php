<?php
return [
    'menu' => [
        [
            'label' => 'Public',
            'url' => config('frontend.baseUrl', 'http://www.site.com'),
            'linkOptions' => [
                'target' => '_blank',
                'rel' => 'noopener',
            ]
        ],
        ['label' => 'User', 'url' => ['/user/index']],
    ]
];
