<?php

return [

    'label' => ':label エクスポート',

    'modal' => [

        'heading' => ':label　エクスポート',

        'form' => [

            'file' => [
                'label' => 'ファイル',
                'placeholder' => 'CSVファイルを選択',
            ],

            'columns' => [
                'label' => '列',
                'placeholder' => '列を選択',
            ],

        ],

        'actions' => [

            'download_example' => [
                'label' => '例をダウンロード',
            ],

            'export' => [
                'label' => 'エクスポート',
            ],

        ],

    ],

    'notifications' => [

        'completed' => [

            'title' => 'エクスポート完了',

            'actions' => [

                'download_csv' => [
                    'label' => '成功行をダウンロード',
                ],

                'download_failed_rows_csv' => [
                    'label' => '失敗した行をダウンロード',
                ],

            ],

        ],

        'max_rows' => [
            'title' => 'エクスポートできる行数を超えています',
            'body' => 'エクスポートできる行数は :count 行までです。',
        ],

        'started' => [
            'title' => 'エクスポートが開始されました',
            'body' => 'エクスポートが開始されました。完了するまでお待ちください。',
        ],

    ],

    'example_csv' => [
        'file_name' => ':export-example',
    ],

    'failure_csv' => [
        'file_name' => 'エクスポート-:export_id-:csv_name-failed-rows',
        'error_header' => 'エラー',
        'system_error' => 'システムエラーが発生しました。　管理者にお問い合わせください。',
    ],

];
