<?php
return [
    'id' => 'app-frontend-tests',
    'components' => [
        'assetManager' => [
            'bundles' => [
                'yii\bootstrap\BootstrapAsset' => [
                    'sourcePath' => null,
                    'basePath' => '@webroot',
                    'baseUrl' => '@web',
                    'css' => ['css/bootstrap.css'],
                ],
            ],
            'basePath' => __DIR__ . '/../web/assets',
        ],
    ],
];
