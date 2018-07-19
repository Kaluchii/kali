<?php

return [

    'scripts' => [
        'text' => ['before_body_close', 'after_body_open', 'before_head_close'],
    ],

    'all_site' => [
        'string' => ['copyright','inst','fb'],

        'groups' => [
            'phones' => [
                'string' => [
                    'city_ru', 'number',
                ],
            ]
        ]
    ],

    'slider' => [
        'groups' => [
            'slide' => [
                'image' => ['slide', 'mob_slide'],
                'string' => [
                    'slide_title_ru', 'btn_text_ru', 'btn_link',
                    'slide_title_kk', 'btn_text_kk',
                    'slide_title_en', 'btn_text_en',
                ],
                'text' => [
                    'slide_text_ru',
                    'slide_text_kk',
                    'slide_text_en',
                ],
            ]
        ]
    ],

    'gallery' => [
        'string' => ['block_title'],
        'imageset' => ['slider' => 'slide'],
    ],

    'stages' => [
        'string' => ['block_title'],
        'text' => ['text'],
        'int' => ['percent'],
        'groups' => [
            'dom_stages' => [
                'string' => ['dom_stages_name'],
                'text' => ['text']
            ],
            'stage_images' => [
                'image' => ['stage_photo'],
                'dom_stages' => ['superior']
            ]
        ]
    ],

    'contacts' => [
        'string' => ['block_title', 'phone', 'mail', 'address'],
        'text' => ['text']
    ],
];
