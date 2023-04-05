<?php

return [
    'default' => 'user',
    'documentations' => [
        'admin' => [
            'api' => [
                'title' => 'API Doc User V1',
            ],
            'routes' => [
                'api' => 'api/documentation',
                'docs' => 'docs',
            ],
            'paths' => [
                'use_absolute_path' => env('L5_SWAGGER_USE_ABSOLUTE_PATH', true),
                'docs_json' => 'user.json',
                'format_to_use_for_docs' => env('L5_FORMAT_TO_USE_FOR_DOCS', 'json'),
                // 'annotations' => [
                //     base_path('app'),
                // ],

            ],
        ],
        // 'admin-v1' => [
        //     'api' => [
        //         'title' => 'API Doc Admin V1',
        //     ],
        //     'routes' => [
        //         'api' => 'api/documentation/admin/v1',
        //     ],
        //     'paths' => [
        //         'use_absolute_path' => env('L5_SWAGGER_USE_ABSOLUTE_PATH', true),
        //         'docs_json' => 'admin-v2.json',
        //         'format_to_use_for_docs' => env('L5_FORMAT_TO_USE_FOR_DOCS', 'json'),
        //         'annotations' => [
        //             base_path('app'),
        //         ],

        //     ],
        // ],
    ],
];
