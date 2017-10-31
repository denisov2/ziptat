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
            'classMap' => [
                'User' => common\models\User::class,
            ],


            'administrators' => [
                'denisov.dmitriy@gmail.com',
            ],
            'enableEmailConfirmation' => false
        ],

        'pages' => [
            'class' => 'bupy7\pages\Module',

            'controllerMap' => [
                'manager' => [
                    'class' => 'bupy7\pages\controllers\ManagerController',
                    'as access' => [
                        'class' => \yii\filters\AccessControl::className(),
                        'rules' => [
                            [
                                'allow' => true,
                                'roles' => ['@'],
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ]
];
