<?php
return [
    'id'                  => 'test-task',
    'basePath'            => __DIR__,
    'controllerNamespace' => 'app\controllers',
    'aliases'             => [
        '@app' => __DIR__,
    ],
    'components'          => [
        'urlManager' => [
            'enablePrettyUrl'     => true,
            'showScriptName'      => false,
            'enableStrictParsing' => false,
        ],
    ],
    'modules'             => [
        'logger' => [
            'class'         => 'app\modules\logger\Logger',
            'loggers'       => [
                'email' => [
                    'class'  => 'app\modules\logger\models\EmailTarget',
                    'email' => 'test@mail.com',
                ],
                'db'    => [
                    'class'      => 'app\modules\logger\models\DbTarget',
                    'connection' => '',
                ],
                'file'  => [
                    'class' => 'app\modules\logger\models\FileTarget',
                    'path'  => '/var/logs/logger.log',
                ],
            ],
            'defaultType' => 'email',
        ],
    ],
];
