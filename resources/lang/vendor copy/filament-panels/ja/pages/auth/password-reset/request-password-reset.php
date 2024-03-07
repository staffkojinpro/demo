<?php

return [

    'title' => 'パスワードをリセット',

    'heading' => 'パスワードをリセットする',

    'actions' => [

        'login' => [
            'label' => 'ログイン画面に戻る',
        ],

    ],

    'form' => [

        'email' => [
            'label' => 'メールアドレス',
        ],

        'actions' => [

            'request' => [
                'label' => 'メールを送信',
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
