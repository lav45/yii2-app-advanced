<?php

$db_name = config('db_name', 'yii2advanced');
$db_host = config('db_host', 'localhost');

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
            'dsn' => "mysql:host={$db_host};dbname={$db_name}",
            'username' => config('db_username', 'root'),
            'password' => config('db_password', ''),
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
                'from' => ['noreply@mfsa.ru' => 'Web site'],
            ],
        ],
    ],
];
