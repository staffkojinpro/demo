<?php

return [

    'resource' => [
        'single' => 'スケジュール',
        'plural' => 'スケジュール一覧',
        'navigation' => '設定',
        'history' => '履歴',
    ],
    'fields' => [
        'command' => 'コマンド',
        'arguments' => '引数',
        'options' => 'オプション',
        'options_with_value' => 'オプション（値あり）',
        'expression' => 'Cronの式',
        'log_filename' => 'ログファイル名',
        'output' => '出力',
        'even_in_maintenance_mode' => 'メンテナンスモードでも実行',
        'without_overlapping' => '重複実行しない',
        'on_one_server' => '同一サーバーでのみ実行',
        'webhook_before' => '実行前のURL',
        'webhook_after' => '実行後のURL',
        'email_output' => 'メールで出力を送信',
        'sendmail_success' => 'コマンドの実行に成功した場合にメールを送信',
        'sendmail_error' => 'コマンドの実行に失敗した場合にメールを送信',
        'log_success' => 'コマンドの実行に成功した場合にコマンドの出力を履歴テーブルに書き込む',
        'log_error' => 'コマンドの実行に失敗した場合にコマンドの出力を履歴テーブルに書き込む',
        'status' => 'ステータス',
        'actions' => 'アクション',
        'data-type' => 'データタイプ',
        'run_in_background' => 'バックグラウンドで実行',
        'created_at' => '作成日時',
        'updated_at' => '更新日時',
        'never' => 'なし',
        'environments' => '環境',
    ],
    'messages' => [
        'no-records-found' => '登録されているスケジュールはありません。',
        'save-success' => 'データを保存しました。',
        'save-error' => 'データの保存に失敗しました。',
        'timezone' => 'タイムゾーン',
        'select' => '選択してください',
        'custom' => 'カスタムコマンド',
        'custom-command-here' => 'ここにカスタムコマンドを入力してください。(e.g. `cat /proc/cpuinfo` もしくは `artisan db:migrate`)',
        'help-cron-expression' => '必要に応じて、ここをクリックし、cron 式の作成を容易にするツールを使用してください。',
        'help-log-filename' => 'ログファイルが設定されている場合、この cron からのログ メッセージは storage/logs/<ログ ファイル名>.log に書き込まれます。',
        'help-type' => ':type の場合、はコンマ区切りで複数指定できます。',
        'attention-type-function' => '注意: タイプ「関数」のパラメータは、スケジューリングの実行前に実行され、その戻り値がパラメータとして渡されます。仕事に支障をきたす可能性があるため、注意して使用してください',
        'delete_cronjob' => 'Cronjobを削除する',
        'delete_cronjob_confirm' => '":cronjob"のCronjobを削除してもよろしいですか？',
    ],
    'status' => [
        'active' => '有効',
        'inactive' => '無効',
        'trashed' => '削除済み',
    ],
    'buttons' => [
        'inactivate' => '無効化',
        'activate' => '有効化',
        'history' => '履歴',

    ],
    'validation' => [
        'cron' => 'Cronの式が正しくありません。',
        'regex' => __('validation.alpha_dash') . ' ' . 'アンダースコア(_)とハイフン(-)のみ使用できます。',
    ],
];
