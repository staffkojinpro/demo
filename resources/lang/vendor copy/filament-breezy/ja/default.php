<?php

return [
    'password_confirm' => [
        'heading' => 'パスワードの確認',
        'description' => 'この操作を完了するには、パスワードを確認してください。',
        'current_password' => '現在のパスワード',
    ],
    'two_factor' => [
        'heading' => '二要素認証',
        'description' => '認証アプリケーションから提供される認証コードを入力し、アカウントへのアクセスを確認してください。',
        'code_placeholder' => 'XXX-XXX',
        'recovery' => [
            'heading' => '二要素認証',
            'description' => 'リカバリーコードのいずれかを入力し、アカウントへのアクセスを確認してください。',
        ],
        'recovery_code_placeholder' => 'abcdef-98765',
        'recovery_code_text' => 'デバイスを紛失しましたか？',
        'recovery_code_link' => 'リカバリーコードを使用する',
        'back_to_login_link' => 'ログインに戻る',
    ],
    'profile' => [
        'account' => 'アカウント',
        'profile' => 'プロフィール',
        'my_profile' => 'マイプロフィール',
        'subheading' => 'ここでユーザープロフィールを管理します。',
        'personal_info' => [
            'heading' => '個人情報',
            'subheading' => '個人情報を管理する。',
            'submit' => [
                'label' => '更新',
            ],
            'notify' => 'プロフィールが更新されました！',
        ],
        'password' => [
            'heading' => 'パスワード',
            'subheading' => '8文字以上にしてください。',
            'submit' => [
                'label' => '更新',
            ],
            'notify' => 'パスワードを更新しました！',
        ],
        '2fa' => [
            'title' => '二要素認証',
            'description' => 'アカウントの二要素認証を管理する（推奨）。',
            'actions' => [
                'enable' => '有効にする',
                'regenerate_codes' => 'コードを再生成',
                'disable' => '無効にする',
                'confirm_finish' => '確認と完了',
                'cancel_setup' => 'セットアップをキャンセル',
            ],
            'setup_key' => 'セットアップキー',
            'must_enable' => 'このアプリケーションを使用するには、二要素認証を有効にする必要があります。',
            'not_enabled' => [
                'title' => '二要素認証が有効になっていません。',
                'description' => '二要素認証が有効な場合、認証時に安全でランダムなトークンの入力を要求されます。このトークンは、お使いのスマートフォンのGoogle Authenticatorアプリケーションから取得することができます。',
            ],
            'finish_enabling' => [
                'title' => '二要素認証の有効化を完了します。',
                'description' => 'スマートフォンの認証アプリで以下のQRコードを読み取るか、セットアップキーを入力し、生成されたOTPコードを入力すると、二要素認証が完了します。',
            ],
            'enabled' => [
                'notify' => '二要素認証は有効です。',
                'title' => '二要素認証が有効になりました！',
                'description' => '二要素認証が可能になりました。これにより、アカウントをより安全に保つことができます。',
                'store_codes' => 'これらのリカバリーコードは、安全なパスワードマネージャに保存してください。二要素認証デバイスを紛失した場合に、アカウントへのアクセスを回復するために使用することができます。',
            ],
            'disabling' => [
                'notify' => '二要素認証が無効になりました。',
            ],
            'regenerate_codes' => [
                'notify' => '新しいリカバリーコードが生成されました。',
            ],
            'confirmation' => [
                'success_notification' => 'コードが確認されました。二要素認証が有効です。',
                'invalid_code' => '入力されたコードは無効です。',
            ],
        ],
        'sanctum' => [
            'title' => 'APIトークン',
            'description' => 'サードパーティーのサービスがあなたに代わってこのアプリケーションにアクセスすることを許可するためのAPIトークンを管理します。注意：トークンは作成時に一度だけ表示されます。トークンを紛失した場合は、トークンを削除して新しいトークンを作成する必要があります。',
            'create' => [
                'notify' => 'トークンの作成に成功しました！',
                'message' => 'トークンは作成時に一度だけ表示されます。トークンを紛失した場合は、トークンを削除して新しいトークンを作成する必要があります。',
                'submit' => [
                    'label' => '作成',
                ],
            ],
            'update' => [
                'notify' => 'トークンの更新に成功しました！',
            ],
            'copied' => [
                'label' => 'もうトークンを保存しました',
            ],
        ],
    ],
    'clipboard' => [
        'link' => 'クリップボードにコピー',
        'tooltip' => 'クリップボードにコピーされました!',
    ],
    'fields' => [
        'avatar' => 'アバター',
        'email' => 'メールアドレス',
        'login' => 'ログイン',
        'name' => '名前',
        'password' => 'パスワード',
        'password_confirm' => 'パスワードの確認',
        'new_password' => '新しいパスワード',
        'new_password_confirmation' => 'パスワードの確認',
        'token_name' => 'トークン名',
        'token_expiry' => 'トークンの有効期限',
        'abilities' => 'アビリティ',
        '2fa_code' => 'コード',
        '2fa_recovery_code' => 'リカバリーコード',
    ],
    'or' => 'または',
    'cancel' => 'キャンセル',
];
