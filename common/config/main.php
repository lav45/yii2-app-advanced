<?php

$db_name = config('db.name', 'site');
$db_host = config('db.host', 'postgres_site');

return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(__DIR__, 2) . '/vendor',
    'components' => [
        'cache' => [
            'class' => yii\caching\MemCache::class,
        ],
        'db' => [
            'class' => yii\db\Connection::class,
            'dsn' => "pgsql:host={$db_host};dbname={$db_name}",
            'username' => config('db.username', 'postgres'),
            'password' => config('db.password', 'postgres'),
            'charset' => 'utf8',
            'enableSchemaCache' => true,
            'attributes' => [
                PDO::ATTR_PERSISTENT => true,
            ],
        ],
        'mailer' => [
            'class' => yii\swiftmailer\Mailer::class,
            'viewPath' => '@common/mail',
            'messageConfig' => [
                'charset' => 'UTF-8',
                'from' => [
                    config('mailer.sender.email', 'no-reply@site.com') => config('mailer.sender.name', 'site.com')
                ],
            ],
        ],
    ],
];
