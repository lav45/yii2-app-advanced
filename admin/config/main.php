<?php

$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-admin',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'admin\controllers',
    'defaultRoute' => 'user',
    'modules' => [],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-admin',
            'csrfCookie' => [
                'name' => '_csrf-admin',
                'httpOnly' => true,
                'sameSite' => yii\web\Cookie::SAME_SITE_LAX,
            ]
        ],
        'user' => [
            'identityClass' => admin\models\User::class,
            'enableAutoLogin' => true,
            'identityCookie' => [
                'name' => '_identity-admin',
                'httpOnly' => true,
                'sameSite' => yii\web\Cookie::SAME_SITE_LAX,
            ],
        ],
        'session' => [
            'name' => '_session-admin',
            'cookieParams' => [
                'httpOnly' => true,
                'sameSite' => yii\web\Cookie::SAME_SITE_LAX,
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
    ],
    'as access' => [
        'class' => yii\filters\AccessControl::class,
        'rules' => [
            [
                'controllers' => ['site'],
                'actions' => ['login', 'error'],
                'allow' => true,
            ],
            [
                'roles' => ['@'],
                'allow' => true,
            ],
        ],
    ],
    'params' => $params,
];
