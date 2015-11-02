<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'charset' => 'utf-8',
    'language' => 'ru-RU',
    'timeZone' => 'Europe/Moscow',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'formatter' => [
            'class' => 'yii\i18n\Formatter',
            'locale' => 'ru-RU'
        ],
        'assetManager' => [
            'linkAssets' => true
        ],
        'i18n' => [
            'translations' => [
                'app' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@common/messages',
                ],
            ],
        ],
    ],
];
