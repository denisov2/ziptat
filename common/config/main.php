<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
    'modules' => [
        'user' => [
            'class' => Da\User\Module::class,

            'administrators' => [
                'denisov.dmitriy@gmail.com',
            ],
            'enableEmailConfirmation' => false
        ]
    ]
];
