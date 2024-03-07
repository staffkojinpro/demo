<?php

return [

    'title' => 'パスワードをリセット',

    'heading' => 'パスワードをリセット',

    'form' => [

        'email' => [
            'label' => 'メールアドレス',
        ],

        'password' => [
            'label' => 'パスワード',
            'validation_attribute' => 'password',
        ],

        'password_confirmation' => [
            'label' => 'パスワードの確認',
        ],

        'actions' => [

            'reset' => [
                'label' => 'パスワードをリセット',
            ],

        ],

    ],

    'notifications' => [

        'throttled' => [
            'title' => 'パスワードのリセット試行回数が上限に達しました。',
            'body' => ' :seconds秒後にもう一度お試しください。',
        ],

    ],

];
