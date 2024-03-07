<?php

return [

    'single' => [

        'label' => '強制削除',

        'modal' => [

            'heading' => ':labelを強制削除しますか？',

            'actions' => [

                'delete' => [
                    'label' => '削除',
                ],

            ],

        ],

        'notifications' => [

            'deleted' => [
                'title' => '削除済み',
            ],

        ],

    ],

    'multiple' => [

        'label' => '選択のデータの強制削除',

        'modal' => [

            'heading' => ':labelの選択のデータの強制削除',

            'actions' => [

                'delete' => [
                    'label' => '強制削除',
                ],

            ],

        ],

        'notifications' => [

            'deleted' => [
                'title' => '削除済み',
            ],

        ],

    ],

];
