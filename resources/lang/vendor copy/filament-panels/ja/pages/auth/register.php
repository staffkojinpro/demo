<?php

return [

    'title' => '新規登録',

    'heading' => '新規登録',

    'actions' => [

        'login' => [
            'before' => 'もしくは',
            'label' => 'ログイン画面に戻る',
        ],

    ],

    'form' => [

        'email' => [
            'label' => 'メールアドレス',
        ],

        'name' => [
            'label' => '名前',
        ],

        'password' => [
            'label' => 'パスワード',
            'validation_attribute' => 'password',
        ],

        'password_confirmation' => [
            'label' => 'パスワードの確認',
        ],

        'actions' => [

            'register' => [
                'label' => '登録',
            ],

        ],

    ],

    'notifications' => [

        'throttled' => [
            'title' => '新規登録試行回数が上限に達しました。',
            'body' => ' :seconds秒後にもう一度お試しください。',
        ],

    ],

];
