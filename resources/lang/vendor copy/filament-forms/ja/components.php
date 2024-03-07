<?php

return [

    'builder' => [

        'actions' => [

            'clone' => [
                'label' => '複製',
            ],

            'add' => [
                'label' => ':labelを追加',
            ],

            'add_between' => [
                'label' => 'ブロック間に挿入',
            ],

            'delete' => [
                'label' => '削除',
            ],

            'reorder' => [
                'label' => '移動',
            ],

            'move_down' => [
                'label' => '下に移動',
            ],

            'move_up' => [
                'label' => '上に移動',
            ],

            'collapse' => [
                'label' => '折り畳む',
            ],

            'expand' => [
                'label' => '展開',
            ],

            'collapse_all' => [
                'label' => '全て折り畳む',
            ],

            'expand_all' => [
                'label' => '全て展開',
            ],

        ],

    ],

    'checkbox_list' => [

        'actions' => [

            'deselect_all' => [
                'label' => '全ての選択解除',
            ],

            'select_all' => [
                'label' => '全てを選択',
            ],

        ],

    ],

    'file_upload' => [

        'editor' => [

            'actions' => [

                'cancel' => [
                    'label' => 'キャンセル',
                ],

                'drag_crop' => [
                    'label' => 'ドラッグモード "切り抜き"',
                ],

                'drag_move' => [
                    'label' => 'ドラッグモード "移動"',
                ],

                'flip_horizontal' => [
                    'label' => '水平反転',
                ],

                'flip_vertical' => [
                    'label' => '垂直反転',
                ],

                'move_down' => [
                    'label' => '画像を下に移動',
                ],

                'move_left' => [
                    'label' => '画像を左に移動',
                ],

                'move_right' => [
                    'label' => '画像を右に移動',
                ],

                'move_up' => [
                    'label' => '画像を上に移動',
                ],

                'reset' => [
                    'label' => 'リセット',
                ],

                'rotate_left' => [
                    'label' => '画像を左に回転',
                ],

                'rotate_right' => [
                    'label' => '画像を右に回転',
                ],

                'set_aspect_ratio' => [
                    'label' => 'アスペクト比を:ratioに設定',
                ],

                'save' => [
                    'label' => '保存',
                ],

                'zoom_100' => [
                    'label' => '画像を100%に拡大',
                ],

                'zoom_in' => [
                    'label' => '拡大',
                ],

                'zoom_out' => [
                    'label' => '縮小',
                ],

            ],

            'fields' => [

                'height' => [
                    'label' => '高さ',
                    'unit' => 'px',
                ],

                'rotation' => [
                    'label' => '回転',
                    'unit' => 'deg',
                ],

                'width' => [
                    'label' => '幅',
                    'unit' => 'px',
                ],

                'x_position' => [
                    'label' => 'X',
                    'unit' => 'px',
                ],

                'y_position' => [
                    'label' => 'Y',
                    'unit' => 'px',
                ],

            ],

            'aspect_ratios' => [

                'label' => 'アスペクト比',

                'no_fixed' => [
                    'label' => '自由',
                ],

            ],

        ],

    ],

    'key_value' => [

        'actions' => [

            'add' => [
                'label' => '行を追加',
            ],

            'delete' => [
                'label' => '行を削除',
            ],

            'reorder' => [
                'label' => '行を移動',
            ],

        ],

        'fields' => [

            'key' => [
                'label' => 'キー',
            ],

            'value' => [
                'label' => '値',
            ],

        ],

    ],

    'markdown_editor' => [

        'toolbar_buttons' => [
            'attach_files' => 'ファイルを追加',
            'blockquote' => '引用',
            'bold' => '太文字',
            'bullet_list' => '箇条書き',
            'code_block' => 'コードブロック',
            'heading' => '見出し',
            'italic' => 'イタリック体',
            'link' => 'リンク',
            'ordered_list' => '番号付きリスト',
            'redo' => 'やり直し',
            'strike' => '打ち消し線',
            'table' => '表',
            'undo' => '元に戻す',
        ],

    ],

    'repeater' => [

        'actions' => [

            'add' => [
                'label' => ':labelを追加',
            ],

            'delete' => [
                'label' => '削除',
            ],

            'clone' => [
                'label' => '複製',
            ],

            'reorder' => [
                'label' => '移動',
            ],

            'move_down' => [
                'label' => '下に移動',
            ],

            'move_up' => [
                'label' => '上に移動',
            ],

            'collapse' => [
                'label' => '折り畳む',
            ],

            'expand' => [
                'label' => '展開',
            ],

            'collapse_all' => [
                'label' => '全て折り畳む',
            ],

            'expand_all' => [
                'label' => '全て展開',
            ],

        ],

    ],

    'rich_editor' => [

        'dialogs' => [

            'link' => [

                'actions' => [
                    'link' => 'リンク追加',
                    'unlink' => 'リンク解除',
                ],

                'label' => 'URL',

                'placeholder' => 'URLを入力',

            ],

        ],

        'toolbar_buttons' => [
            'attach_files' => 'ファイルを添付',
            'blockquote' => 'ブロック引用要素',
            'bold' => '太文字',
            'bullet_list' => '箇条書き',
            'code_block' => 'コードブロック',
            'h1' => '見出し1(h1)',
            'h2' => '見出し2(h2)',
            'h3' => '見出し3(h3)',
            'italic' => 'イタリック体',
            'link' => 'リンク',
            'ordered_list' => '番号付きリスト',
            'redo' => 'やり直し',
            'strike' => '打ち消し戦',
            'underline' => '下線',
            'undo' => '元に戻す',
        ],

    ],

    'select' => [

        'actions' => [

            'create_option' => [

                'modal' => [

                    'heading' => '作成',

                    'actions' => [

                        'create' => [
                            'label' => '作成',
                        ],

                        'create_another' => [
                            'label' => '作成してもう一つ作成',
                        ],

                    ],

                ],

            ],

            'edit_option' => [

                'modal' => [

                    'heading' => '編集',

                    'actions' => [

                        'save' => [
                            'label' => '保存',
                        ],

                    ],

                ],

            ],

        ],

        'boolean' => [
            'true' => 'はい',
            'false' => 'いいえ',
        ],

        'loading_message' => '読み込み中...',

        'max_items_message' => ':count個のみ選択されてます',

        'no_search_results_message' => '検索結果はありませんでした',

        'placeholder' => 'オプションを選択',

        'searching_message' => '検索中...',

        'search_prompt' => '検索キーワードを入力...',

    ],

    'tags_input' => [
        'placeholder' => '新規タグ',
    ],

    'wizard' => [

        'actions' => [

            'previous_step' => [
                'label' => '前へ',
            ],

            'next_step' => [
                'label' => '次へ',
            ],

        ],

    ],

    'validation.unique' => 'ユニーク',

];
