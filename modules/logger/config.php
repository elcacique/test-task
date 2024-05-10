<?php
return [
    'loggers'       => [
        'email' => [
            'class'  => 'EmailTarget',
            'emails' => [
                'test@mail.com',
            ],
        ],
        'db'    => [
            'class'      => 'DbTarget',
            'connection' => '',
        ],
        'file'  => [
            'class' => 'FileTarget',
            'path'  => '/var/logs/logger.log',
        ],
    ],
    'defaultType' => 'file',
];
