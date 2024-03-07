<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */
    //TODO: ここから下を翻訳する

    'accepted' => ':attributeは必須項目です。',
    'accepted_if' => ':otherが:valueの場合、:attributeフィールドは受け入れる必要があります。',
    'active_url' => ':attributeフィールドは有効なURLである必要があります。',
    'after' => ':attributeフィールドは:date以降の日付である必要があります。',
    'after_or_equal' => ':attributeフィールドは:date以降の日付か同日である必要があります。',
    'alpha' => ':attributeフィールドはアルファベットのみ含んでいる必要があります。',
    'alpha_dash' => ':attributeフィールドはアルファベット、数字、ダッシュ、アンダースコアのみ含んでいる必要があります。',
    'alpha_num' => ':attributeフィールドはアルファベットと数字のみ含んでいる必要があります。',
    'array' => ':attributeフィールドは配列である必要があります。',
    'ascii' => ':attributeは[romanji,123]文字のみで入力してください。',
    'before' => ':attributeフィールドは:date以前の日付である必要があります。',
    'before_or_equal' => ':attributeフィールドは:date以前の日付か同日である必要があります。',
    'between' => [
        'array' => ':attributeフィールドは:minから:maxのアイテムを持つ必要があります。',
        'file' => ':attributeフィールドは:minから:maxキロバイトである必要があります。',
        'numeric' => ':attributeフィールドは:minから:maxまでの数値である必要があります。',
        'string' => ':attributeフィールドは:minから:max文字である必要があります。',
    ],
    'boolean' => 'この :attribute は true か false で入力してください。',
    'can' => ':attributeフィールドには未承認の値が含まれています。',
    'confirmed' => ':attributeは確認用と一致しません。',
    'current_password' => '現在のパスワードが正しくありません。',
    'date' => ':attributeフィールドは有効な日付である必要があります。',
    'date_equals' => ':attributeフィールドは:dateと等しい日付である必要があります。',
    'date_format' => ':attributeフィールドはフォーマット :format と一致する必要があります。',
    'decimal' => ':attributeフィールドは :decimal 桁以下である必要があります。',
    'declined' => ':attributeフィールドは拒否される必要があります。',
    'declined_if' => ':otherが:valueの場合、:attributeフィールドは拒否される必要があります。',
    'different' => ':attributeフィールドと:otherは異なる必要があります。',
    'digits' => ':attributeフィールドは:digits桁である必要があります。',
    'digits_between' => ':attributeフィールドは:minから:max桁の間である必要があります。',
    'dimensions' => ':attributeフィールドの画像サイズが無効です。',
    'distinct' => ':attributeフィールドには重複した値が含まれています。',
    'doesnt_end_with' => ':attributeフィールドは以下のいずれかで終わっていてはいけません: :values。',
    'doesnt_start_with' => ':attributeフィールドは以下のいずれかで始まっていてはいけません: :values。',
    'email' => ':attributeフィールドは有効なメールアドレスである必要があります。',
    'ends_with' => ':attributeフィールドは以下のいずれかで終わっている必要があります: :values。',
    'enum' => '選択された:attributeは無効です。',
    'exists' => '選択された:attributeは無効です。',
    'extensions' => ':attributeフィールドは次の拡張子を持っている必要があります: :values。',
    'file' => ':attributeフィールドはファイルである必要があります。',
    'filled' => ':attributeフィールドは値を持っている必要があります。',
    'gt' => [
        'array' => ':attributeフィールドは:value以上のアイテムを持っている必要があります。',
        'file' => ':attributeフィールドは:valueキロバイトより大きい必要があります。',
        'numeric' => ':attributeフィールドは:valueより大きい必要があります。',
        'string' => ':attributeフィールドは:value文字より大きい必要があります。',
    ],
    'gte' => [
        'array' => ':attributeフィールドは:value以上のアイテムを持っている必要があります。',
        'file' => ':attributeフィールドは:valueキロバイト以上である必要があります。',
        'numeric' => ':attributeフィールドは:value以上である必要があります。',
        'string' => ':attributeフィールドは:value文字以上である必要があります。',
    ],

    'hex_color' => ':attributeフィールドは有効な16進数カラーコードである必要があります。',
    'image' => ':attributeフィールドは画像である必要があります。',
    'in' => '選択された:attributeは無効です。',
    'in_array' => ':attributeフィールドは:otherに存在する必要があります。',
    'integer' => ':attribute は数値で入力してください。',
    'ip' => ':attribute のフォーマットで入力してください。',
    'ipv4' => ':attribute のフォーマットで入力してください。',
    'ipv6' => ':attributeフィールドは有効なIPv6アドレスである必要があります。',
    'json' => ':attributeフィールドは有効なJSON文字列である必要があります。',
    'lowercase' => ':attributeフィールドは小文字である必要があります。',
    'lt' => [
        'array' => ':attributeフィールドは:valueより少ないアイテムを持っている必要があります。',
        'file' => ':attributeフィールドは:valueキロバイトより小さい必要があります。',
        'numeric' => ':attributeフィールドは:valueより小さい必要があります。',
        'string' => ':attributeフィールドは:value文字より小さい必要があります。',
    ],
    'lte' => [
        'array' => ':attributeフィールドは:value以下のアイテムを持っている必要があります。',
        'file' => ':attributeフィールドは:valueキロバイト以下である必要があります。',
        'numeric' => ':attributeフィールドは:value以下である必要があります。',
        'string' => ':attributeフィールドは:value文字以下である必要があります。',
    ],
    'mac_address' => ':attributeが有効なMACアドレスではありません。',
    'max' => [
        'array' => ':attributeフィールドは:maxアイテムを超えてはいけません。',
        'file' => ':attributeフィールドは:maxキロバイトを超えてはいけません。',
        'numeric' => ':attributeフィールドは:maxを超えてはいけません。',
        'string' => ':attributeフィールドは:max文字を超えてはいけません。',
    ],
    'max_digits' => ':attribute は :max 桁以下で入力してください。',
    'mimes' => ':attributeフィールドは次のタイプのファイルである必要があります: :values。',
    'mimetypes' => ':attributeフィールドは次のタイプのファイルである必要があります: :values。',
    'min' => [
        'array' => ':attributeフィールドは:minアイテムを持っている必要があります。',
        'file' => ':attributeフィールドは:minキロバイト以上である必要があります。',
        'numeric' => ':attributeフィールドは:min以上である必要があります。',
        'string' => ':attributeフィールドは:min文字以上である必要があります。',
    ],
    'min_digits' => ':attribute は :min 桁以上で入力してください。',
    'missing' => ':attributeフィールドは存在していなければなりません。',
    'missing_if' => ':otherが:valueの場合、:attributeフィールドは存在していなければなりません。',
    'missing_unless' => ':otherが:valueでない限り、:attributeフィールドは存在していなければなりません。',
    'missing_with' => ':valuesが存在する場合、:attributeフィールドは存在していなければなりません。',
    'missing_with_all' => ':valuesが存在する場合、:attributeフィールドは存在していなければなりません。',
    'multiple_of' => ':attributeフィールドは:valueの倍数である必要があります。',
    'not_in' => '選択された:attributeは無効です。',
    'not_regex' => ':attributeフィールドのフォーマットが無効です。',

    'numeric' => ':attributeフィールドは数値である必要があります。',
    'password' => [
        'letters' => ':attributeフィールドには少なくとも1つの文字が含まれている必要があります。',
        'mixed' => ':attributeフィールドには少なくとも1つの大文字と1つの小文字の文字が含まれている必要があります。',
        'numbers' => ':attributeフィールドには少なくとも1つの数字が含まれている必要があります。',
        'symbols' => ':attributeフィールドには少なくとも1つの記号が含まれている必要があります。',
        'uncompromised' => '指定された:attributeはデータ漏洩に登場しています。別の:attributeを選択してください。',
    ],
    'present' => ':attributeフィールドは存在している必要があります。',
    'present_if' => ':otherが:valueの場合、:attributeフィールドは存在している必要があります。',
    'present_unless' => ':otherが:valueでない限り、:attributeフィールドは存在している必要があります。',
    'present_with' => ':valuesが存在する場合、:attributeフィールドは存在している必要があります。',
    'present_with_all' => ':valuesが存在する場合、:attributeフィールドは存在している必要があります。',
    'prohibited' => ':attributeフィールドは禁止されています。',
    'prohibited_if' => ':otherが:valueの場合、:attributeフィールドは禁止されています。',
    'prohibited_unless' => ':otherが:valuesに存在しない限り、:attributeフィールドは禁止されています。',
    'prohibits' => ':attributeフィールドは:otherが存在する場合には禁止されています。',
    'regex' => ':attributeフィールドのフォーマットが無効です。',
    'required' => ':attributeフィールドは必須項目です。',
    'required_array_keys' => ':attributeフィールドは次のエントリを含んでいる必要があります: :values。',
    'required_if' => ':otherが:valueの場合、:attributeフィールドは必須です。',
    'required_if_accepted' => ':otherが受け入れられた場合、:attributeフィールドは必須です。',
    'required_unless' => ':otherが:valuesに存在する場合を除き、:attributeフィールドは必須です。',
    'required_with' => ':valuesが存在する場合、:attributeフィールドは必須です。',
    'required_with_all' => ':valuesが存在する場合、:attributeフィールドは必須です。',
    'required_without' => ':valuesが存在しない場合、:attributeフィールドは必須です。',
    'required_without_all' => ':valuesが存在しない場合、:attributeフィールドは必須です。',
    'same' => ':attributeフィールドは:otherと一致する必要があります。',
    'size' => [
        'array' => ':attributeフィールドは:sizeアイテムを含んでいる必要があります。',
        'file' => ':attributeフィールドは:sizeキロバイトである必要があります。',
        'numeric' => ':attributeフィールドは:sizeである必要があります。',
        'string' => ':attributeフィールドは:size文字である必要があります。',
    ],
    'starts_with' => ':attributeフィールドは以下のいずれかで始まっている必要があります: :values。',
    'string' => 'この:attributeは文字列で入力してください。',
    'timezone' => ':attributeフィールドは有効なタイムゾーンである必要があります。',
    'unique' => '既に存在する:attributeです。',
    'uploaded' => ':attributeのアップロードに失敗しました。',
    'uppercase' => ':attributeフィールドは大文字である必要があります。',

    'url' => ':attributeフィールドは有効なURLである必要があります。',
    'ulid' => ':attributeフィールドは有効なULIDである必要があります。',
    'uuid' => ':attributeフィールドは有効なUUIDである必要があります。',

    // カスタムバリデーション言語行
    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    // カスタムバリデーション属性
    'attributes' => [],

];
