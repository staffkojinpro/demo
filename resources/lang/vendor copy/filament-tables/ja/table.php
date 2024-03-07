<?php

return [

    'column_toggle' => [

        'heading' => 'カラム',

    ],

    'columns' => [

        'text' => [
            'more_list_items' => 'あと:count個あります',
        ],

    ],

    'fields' => [

        'bulk_select_page' => [
            'label' => 'bulk actions用に全ての項目を選択/選択解除',
        ],

        'bulk_select_record' => [
            'label' => 'bulk actions用に選択/選択解除 :key の項目',
        ],

        'search' => [
            'label' => '検索',
            'placeholder' => '検索',
            'indicator' => '検索',
        ],

    ],

    'summary' => [

        'heading' => '概要',

        'subheadings' => [
            'all' => '全て :label　',
            'group' => ':group の概要',
            'page' => 'このページ',
        ],

        'summarizers' => [

            'average' => [
                'label' => '平均',
            ],

            'count' => [
                'label' => '件数',
            ],

            'sum' => [
                'label' => '合計',
            ],

        ],

    ],

    'actions' => [

        'disable_reordering' => [
            'label' => 'レコードの並び替えを終了',
        ],

        'enable_reordering' => [
            'label' => 'レコードの並び替え',
        ],

        'filter' => [
            'label' => '絞り込み',
        ],

        'group' => [
            'label' => 'グループ',
        ],

        'open_bulk_actions' => [
            'label' => '操作を開く',
        ],

        'toggle_columns' => [
            'label' => '列を切り替える',
        ],

    ],

    'empty' => [

        'heading' => 'レコードが見つかりません',

        'description' => 'ここに表示されるには、:modelにレコードを追加してください。',

    ],

    'filters' => [

        'actions' => [

            'remove' => [
                'label' => '絞り込みを解除',
            ],

            'remove_all' => [
                'label' => '全ての絞り込みを解除',
                'tooltip' => '全ての絞り込みを解除',
            ],

            'reset' => [
                'label' => 'リセット',
            ],

        ],

        'heading' => 'フィルター',

        'indicator' => '有効な絞り込み',

        'multi_select' => [
            'placeholder' => '全件',
        ],

        'select' => [
            'placeholder' => '全件',
        ],

        'trashed' => [

            'label' => '削除済みレコード',

            'only_trashed' => '削除済みレコードのみ',

            'with_trashed' => '削除済みレコード含む',

            'without_trashed' => '削除済みレコードを除く',

        ],

    ],

    'grouping' => [

        'fields' => [

            'group' => [
                'label' => 'グループ化',
                'placeholder' => 'グループ化',
            ],

            'direction' => [

                'label' => 'グループ並び順',

                'options' => [
                    'asc' => '昇順',
                    'desc' => '降順',
                ],

            ],

        ],

    ],

    'reorder_indicator' => 'ドラッグ＆ドロップでレコードを並び替え',

    'selection_indicator' => [

        'selected_count' => '1件選択済み|:count件選択済み',

        'actions' => [

            'select_all' => [
                'label' => ':count件全て選択',
            ],

            'deselect_all' => [
                'label' => '全選択解除',
            ],

        ],

    ],

    'sorting' => [

        'fields' => [

            'column' => [
                'label' => '並び順',
            ],

            'direction' => [

                'label' => '並び変え方向',

                'options' => [
                    'asc' => '昇順',
                    'desc' => '降順',
                ],

            ],

        ],

    ],

];
