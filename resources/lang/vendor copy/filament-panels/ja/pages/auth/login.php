<?php

return [

    'title' => 'ログイン',

    'heading' => 'アカウントにログインする',

    'actions' => [

        'register' => [
            'before' => 'アカウントをお持ちでない場合は、',
            'label' => '登録',
        ],

        'request_password_reset' => [
            'label' => 'パスワードを紛失しましたか？',
        ],

    ],

    'form' => [

        'email' => [
            'label' => 'メールアドレス',
        ],

        'password' => [
            'label' => 'パスワード',
        ],

        'remember' => [
            'label' => 'ログイン状態を保持する',
        ],

        'actions' => [

            'authenticate' => [
                'label' => 'ログイン',
            ],

        ],

    ],

    'messages' => [

        'failed' => '認証に失敗しました。',

    ],

    'notifications' => [

        'throttled' => [
            'title' => 'ログイン試行回数が上限に達しました。',
            'body' => ' :seconds秒後にもう一度お試しください。',
        ],

    ],

];
