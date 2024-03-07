<?php

return [

    'title' => 'メールアドレスを確認してください。',

    'heading' => 'メールアドレスを確認してください。',

    'actions' => [

        'resend_notification' => [
            'label' => '再送信',
        ],

    ],

    'messages' => [
        'notification_not_received' => 'メールが届いていない場合は、再送信してください。',
        'notification_sent' => ':email　のメールアドレスの認証方法については、メールをご確認ください。',
    ],

    'notifications' => [

        'notification_resent' => [
            'title' => 'メールを再送信しました。',
        ],

        'notification_resend_throttled' => [
            'title' => '再送信の試行回数が上限に達しました。',
            'body' => ':seconds秒後にもう一度お試しください。',
        ],

    ],

];
