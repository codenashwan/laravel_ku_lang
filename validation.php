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

    'accepted' => 'پێویستە :attribute قبوڵ بکرێت',
    'accepted_if' => 'پێویستە :attribute قبوڵ بکرێت کاتێک :other :value بێت.',
    'active_url' => ':attribute بەستەرێکی ڕاست نیە',
    'after' => 'پێویستە :attribute دوای بەرواری :date بێت',
    'after_or_equal' => 'پێویستە :attribute ڕۆژی :date یان ڕۆژی دوای ئەو بێت',
    'alpha' => 'پێویستە :attribute تەنها لە پیت پێکهاتبێت',
    'alpha_dash' => 'پێویستە :attribute تەنها پیت و ژمارە و ئەندەرسکۆر و داش بێت',
    'alpha_num' => 'پێویستە :attribute تەنها پیت و ژمارە بێت',
    'array' => 'پێویستە :attribute کۆمەڵێک لە ژمارە بێت',
    'before' => 'پێویستە :attribute پێش بەرواری :date بێت',
    'before_or_equal' => 'پێویستە :attribute ڕۆژی :date بێت یان ڕۆژێکی پێش ئەوە',
    'between' =>
        array (
            'numeric' => 'پێویستە :attribute لەنێوان :min and :max بێت',
            'file' => 'پێویستە قەبارەی :attribute لەنێوان :min and :max کیلۆبایت بێت.',
            'string' => 'پێویستە :attribute لەنێوان پیتەکانی :min and :max بێت.',
            'array' => 'پێویستە :attribute لەنێوان :min and :max ئایتمدا بێت.',
        ),
    'boolean' => 'پێویستە :attribute تەنها ڕاست یان هەڵە بێت',
    'confirmed' => ':attribute دووپات کردنەوەکە وەکو یەک نیە',
    'current_password' => 'وشەی تێپەڕت هەڵەیە.',
    'date' => ':attribute بەروارێکی دروست نیە',
    'date_equals' => 'پێویستە :attribute یەکسان بێت بە هەمان ڕۆژی :date.',
    'date_format' => ':attribute وەکو ئەم شێوازە نیە :format.',
    'declined' => 'پێویستە :attribute ڕەتبکرێتەوە.',
    'declined_if' => ':attribute دەبێت ڕەتبکرێتەوە کاتێک :other :value بێت.',
    'different' => 'پێویستە :attribute و :other جیاوازبن',
    'digits' => 'پێویستە :attribute ژمارەکەی :digits ژمارە بێت.',
    'digits_between' => 'پێویستە :attribute لەنێوان :min and :max ژمارەدا بێت.',
    'dimensions' => ':attribute قەبارەی وێنەکە هەڵەیە',
    'distinct' => 'لە :attribute نرخێکی دووبارە هەیە',
    'email' => 'پێویستە :attribute ئیمەیڵێکی دروست بێت',
    'ends_with' => 'پێویستە :attribute کۆتایی بێت بە یەکێک لە :values ی خوارەوە',
    'exists' => ':attribute دروست نیە',
    'file' => 'پێویستە :attribute فایل بێت',
    'filled' => 'پێویستە :attribute نرخێکی تێدابێت',
    'gt' => [
        'numeric' => ':attribute دەبێت گەورەتر بێت لە :value.',
        'file' => ':attribute پێویستە لە :value کیلۆبایت گەورەتر بێت.',
        'string' => ':attribute دەبێت لە :value پیت گەورەتر بێت.',
        'array' => ':attribute دەبێت زیاتر لە :value بڕگەی هەبێت.',
    ],
    'gte' => [
        'numeric' => ':attribute دەبێت گەورەتر بێت یان یەکسان بێت بە :value.',
        'file' => ':attribute دەبێت گەورەتر یان یەکسان بێت بە :value کیلۆبایت.',
        'string' => ':attribute دەبێت گەورەتر یان یەکسان بێت بە :value پیت.',
        'array' => ':attribute پێویستە :value بڕگە یان زیاتر بێت.',
    ],
    'image' => 'پێویستە وێنەکان وێنەیەک بێت',
    'in' => ':attribute نادروستە',
    'in_array' => 'جۆری :attribute بوونی نیە لە :other.',
    'integer' => 'پێویستە :attribute ژمارە بێت',
    'ip' => 'پێویستە :attribute ئایپی ئەدرێسێکی دروست بێت',
    'ipv4' => 'پێویستە :attribute ئایپی ئەدرێسێکی دروستی ڤێرژنی 4 بێت',
    'ipv6' => 'پێویستە :attribute ئایبی ئەدرێسێکی دروستی ڤێرژنی 6 بێت',
    'json' => 'پێویستە :attribute کۆدێکی دروستی (جەیسن) بێت',
    'lt' => [
        'numeric' => ':attribute دەبێت کەمتر بێت لە :value.',
        'file' => ':attribute پێویستە کەمتر لە :value کیلۆبایت بێت.',
        'string' => ':attribute پێویستە کەمتر لە :value پیت بێت.',
        'array' => ':attribute پێویستە کەمتر لە :value بڕگەی هەبێت.'
    ],
    'lte' => [
        'numeric' => ':attribute دەبێت کەمتر یان یەکسان بێت بە :value.',
        'file' => ':attribute پێویستە کەمتر یان یەکسان بێت بە :value کیلۆبایت.',
        'string' => ':attribute پێویستە کەمتر یان یەکسان بێت بە :value پیت.',
        'array' => 'نابێت :attribute زیاتر لە :value بڕگەی هەبێت.',
    ],
    'max' =>
        array (
            'numeric' => 'پێویستە :attribute گەورەتر نەبێت لە :max.',
            'file' => 'پێویستە :attribute گەورەتر نەبێت لە :max کیلۆبایت.',
            'string' => 'پێویستە :attribute نابێت گەورەتر نەبێت  :max پیت.',
            'array' => 'پێویستە :attribute گەورەتە نەبێت لە :max کاڵا.',
        ),
    'mimes' => 'پێویستە :attribute جۆرێک بێت لە فایلی: :values.',
    'mimetypes' => 'پێویستە :attribute جۆرێک بێت لە فایلی: :values.',
    'min' =>
        array (
            'numeric' => 'پێویستە :attribute بەلایەنی کەمەوە :min بێت',
            'file' => 'پێویستە :attribute هیچ نەبێت :min کیلۆبایت بێت',
            'string' => 'پێویستە :attribute بەلایەنی کەمەوە :min پیت بێت.',
            'array' => 'پێویستە :attribute بەلایەنی کەمەوە :min جار پێت.',
        ),
    'multiple_of' => ':attribute دەبێت فرەیی بێت لە :value.',
    'not_in' => ':attribute دروست نیە',
    'not_regex' => 'جۆری :attribute دروست نیە',
    'numeric' => 'پێویستە :attribute ژمارە بێت',
    'password' => 'وشەی تێپەڕ دروست نییە.',
    'present' => 'پێویستە :attribute بوونی هەبێت',
    'prohibited' => 'خانەی :attribute قەدەغەیە',
    'prohibited_if' => 'خانەی :attribute قەدەغەیە کاتێک :other :values بێت.',
    'prohibited_unless' => 'خانەی :attribute قەدەغەیە مەگەر :other لە :values بێت.',
    'prohibits' => 'خانەی :attribute :other قەدەغە دەکات لە ئامادەبوون.',
    'regex' => 'جۆری :attribute هەڵەیە',
    'required' => ':attribute داواکراوە',
    'required_if' => ':attribute داواکراوە کاتێک :other بریتی بێت لە :value.',
    'required_unless' => ':attribute داواکراوە مەگەر :other هەبێت لەناو :values.',
    'required_with' => ':attribute داواکراوە کاتێک :values بوونی هەبێت',
    'required_with_all' => ':attribute داواکراوە کاتێک :values بوونی هەبێت.',
    'required_without' => ':attribute داواکراوە کاتێک :values بوونی نەبێت',
    'required_without_all' => ':attribute داواکراوە کاتێک هیچ کام لە :values بوونیان نەبێت',
    'same' => 'پێویستە :attribute و :other هاوتا بن',
    'size' =>
        array (
            'numeric' => 'پێویستە :attribute قەبارەی :size بێت',
            'file' => 'پێویستە :attribute قەبارەی :size کیلۆبایت بێت.',
            'string' => 'پێویستە :attribute قەبارەی :size پیت بێت',
            'array' => 'پێویستە :attribute لەناویدا :size هەبێت',
        ),
    'starts_with' => 'پێویستە :attribute دەست پێبکات بە یەکێک لەمانە :values',
    'string' => 'پێویستە :attribute حەرف بێت',
    'timezone' => 'پێویستە :attribute شوێنێکی دروست بێت',
    'unique' => ':attribute پێشتر گیراوە',
    'uploaded' => 'بەرزبوونەوەی :attribute سەرکەوتوو نەبوو',
    'url' => 'جۆری :attribute دروست نیە',
    'uuid' => 'The :attribute must be a valid UUID.',
    'recaptcha' => 'زانیاری :attribute ڕاست نیە',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
        'database_connection' => [
            'required' => 'ناتوانرێت پەیوەندی بکرێت بە سێرڤەری مای ئێس کیو ئێڵ', 
        ],
        'database_not_empty' => [
            'required' => 'داتابەیسەکە بەتاڵە',
        ]  
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */
    'attributes' => [
            'name' => 'ناو',
            'phone' => ':attribute ژمارەیەکی هەڵەی تێدایە',
            'product.barcode' => 'باڕکۆد',
    ],

];
