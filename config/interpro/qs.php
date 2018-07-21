<?php

return [

    'scripts' => [
        'text' => ['before_body_close', 'after_body_open', 'before_head_close'],
    ],

    'all_site' => [
        'string' => ['inst', 'vk', 'contact_us_phone', 'bottom_work_time',
                    'bottom_phones', 'bottom_fax', 'bottom_email', 'bottom_mob_phones'],
        'groups' => [
            'top_phones' => [
                'string' => ['number'],
            ],
            'times_for_call' => [
                'string' => ['text'],
            ],
            'partners' => [
                'image' => ['img']
            ]
        ]
    ],

    'slider' => [// Использовать 'title' для заголовка
        'groups' => [
            'slides' => [
                'image' => ['img'],
            ],
            'slider_facts' => [
                'string' => ['text']
            ]
        ]
    ],

    'facts' => [
        'groups' => [
            'facts_list' => [
                'image' => ['img'],
                'string' => ['text']
            ],
        ]
    ],

    'examples' => [
        'groups' => [
            'examples_list' => [
                'image' => ['img'],
                'string' => ['text']
            ],
        ]
    ],

    'advantages' => [// Использовать 'title' для заголовка
        'string' => ['sub_title'],
        'groups' => [
            'advantages_list' => [// Использовать 'title' для заголовка
                'image' => ['img'],
                'string' => ['text']
            ],
        ]
    ],

    'contacts' => [// Использовать 'title' для заголовка
        'string' => ['sub_title'],
        'groups' => [
            'contacts_list' => [// Использовать 'title' для заголовка
                'image' => ['address_icon', 'phones_icon', 'fax_icon', 'mob_icon',
                    'email_icon', 'work_time_icon'],
                'string' => ['longitude', 'latitude', 'address', 'phones', 'fax', 'mob',
                            'email', 'work_time']
            ],
        ]
    ],

    'services' => [// Использовать 'title' для заголовка
        'string' => ['sub_title'],
        'groups' => [
            'services_list' => [
                'image' => ['img'],
                'string' => ['text']
            ],
        ]
    ],

    'sale' => [// Использовать 'title' для заголовка
        'string' => ['sub_title'],
        'text' => ['text'],
        'groups' => [
            'sale_list' => [
                'image' => ['img'],
            ],
        ]
    ],

    'guarantee' => [// Использовать 'title' для заголовка
        'file' => ['instruction', 'guarantee']
    ],

    'guarantee_facts' => [
        'groups' => [
            'guarantee_facts_list' => [
                'image' => ['img'],
                'string' => ['text']
            ],
        ]
    ],

    'reviews' => [
        'string' => ['text'],
        'groups' => [
            'reviews_list' => [
                'text' => ['text'],
                'string' => ['reviewer_name', 'city']
            ],
        ]
    ],

    'components' => [// Использовать 'title' для заголовка
        'string' => ['sub_title'],
        'groups' => [
            'components_categories' => [
                'string' => ['category_name']
            ],
            'components_list' => [// Использовать 'title' для заголовка
                'string' => ['article'],
                'int' => ['price'],
                'text' => ['text'],
                'image' => ['img'],
                'components_categories' => ['superior']
            ],
        ]
    ],

    'windows_price' => [// Использовать 'title' для заголовка
        'string' => ['sub_title'],
        'groups' => [
            'windows_price_categories' => [
                'string' => ['category_name']
            ],
            'windows_price_list' => [
                'text' => ['text'],
                'image' => ['img'],
                'windows_price_categories' => ['superior']
            ],
        ]
    ],

    'balcony_price' => [// Использовать 'title' для заголовка
        'string' => ['sub_title'],
        'groups' => [
            'balcony_price_categories' => [
                'string' => ['category_name']
            ],
            'balcony_price_list' => [
                'text' => ['text'],
                'image' => ['img'],
                'balcony_price_categories' => ['superior']
            ],
        ]
    ],

    'products' => [
        'string' => ['banner_1_title', 'banner_2_title'],
        'groups' => [
            'balcony_price_categories' => [
                'string' => ['category_name']
            ],
            'products_list_1' => [
                'text' => ['text', 'preview_text'],
                'image' => ['img'],
            ],
            'products_list_2' => [
                'text' => ['text', 'preview_text'],
                'image' => ['img'],
            ],
            'firms_list_1' => [
                'image' => ['img'],
            ],
            'firms_list_2' => [
                'image' => ['img'],
            ],
        ]
    ],

    'other_products' => [// Использовать 'title' для заголовка
        'groups' => [
            'other_products_list' => [
                'string' => ['product_name'],
                'text' => ['text'],
                'image' => ['img'],
            ],
        ]
    ],

];
