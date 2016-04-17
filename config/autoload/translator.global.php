<?php
return [
    'translator' => [
        'locale' => 'de-DE',
        'translation_file_patterns' => [
            [
                'type' => Zend\I18n\Translator\Loader\PhpArray::class,
                'base_dir' => __DIR__ . '/../../translations',
                'pattern' => '%s.php',
            ],
        ],
    ],
];
