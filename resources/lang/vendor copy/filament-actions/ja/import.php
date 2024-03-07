<?php

return [

    'label' => ':label インポート',

    'modal' => [

        'heading' => ':label　インポート',

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

            'import' => [
                'label' => 'インポート',
            ],

        ],

    ],

    'notifications' => [

        'completed' => [

            'title' => 'インポート完了',

            'actions' => [

                'download_failed_rows_csv' => [
                    'label' => '失敗した行をダウンロード',
                ],

            ],

        ],

        'max_rows' => [
            'title' => 'インポートできる行数を超えています',
            'body' => 'インポートできる行数は :count 行までです。',
        ],

        'started' => [
            'title' => 'インポートが開始されました',
            'body' => 'インポートが開始されました。完了するまでお待ちください。',
        ],

    ],

    'example_csv' => [
        'file_name' => ':importer-example',
    ],

    'failure_csv' => [
        'file_name' => 'インポート-:import_id-:csv_name-failed-rows',
        'error_header' => 'エラー',
        'system_error' => 'システムエラーが発生しました。　管理者にお問い合わせください。',
    ],

];
