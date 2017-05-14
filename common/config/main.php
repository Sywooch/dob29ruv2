<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
//            'defaultRoles' => ['user', 'moder', 'admin']
        ],
    ],
    'language' => 'ru-RU',
    'sourceLanguage' => 'ru-RU',
];
