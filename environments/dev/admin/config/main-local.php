<?php

return [
    'bootstrap' => [
        'debug',
        'gii',
    ],
    'modules' => [
        'debug' => [
            'class' => yii\debug\Module::class,
            'allowedIPs' => ['*'],
        ],
        'gii' => [
            'class' => yii\gii\Module::class,
            'allowedIPs' => ['*'],
            'viewPath' => '@admin/components/gii/views',
            'generators' => [
                'crud' => [
                    'class' => yii\gii\generators\crud\Generator::class,
                    'templates' => [
                        'default' => '@admin/components/gii/generators/crud/default',
                        'without-view' => '@admin/components/gii/generators/crud/without-view'
                    ]
                ],
            ]
        ],
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '',
        ],
        'assetManager' => [
            'linkAssets' => true,
        ],
    ],
];
