<?php

return [
    'dbConnection'=>'sql',

    'database' => [
        'sql'=>[
                'name' => 'assignment2',
                'username' => 'assignment2',
                'password' => 'assignment2',
                'connection' => 'mysql:host=127.0.0.1',
                'port' => '3306',
                'options' => [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                ],
        ],
        'pgsql'=>[
            'name' => 'd2h1mk1nkbhejg',
            'username' => 'jialcvwpepcxyn',
            'password' => '27117339c7c239f87df5d7d4bd74b44437431de8f1ebe30454dbd7229f89c3b9',
            'connection' => 'pgsql:host=ec2-174-129-227-128.compute-1.amazonaws.com',
            'port' => '5432',
            'options' => [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ],
        ]
    ],

    'error'=>'True'
];
