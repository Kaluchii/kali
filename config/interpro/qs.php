<?php

return [

    'scripts' => [
        'text' => ['before_body_close', 'after_body_open', 'before_head_close'],
    ],

    'all_site' => [
        'string' => ['inst', 'vk', 'contact_us_phone', 'bottom_work_time',
                    'bottom_phones', 'bottom_fax', 'bottom_email',
                    'bottom_mob_phones', 'mob_phones', 'address', 'longitude', 'latitude', 'copyright'],
        'groups' => [
            'top_phones' => [
                'string' => ['number'],
            ],
            'times_for_call' => [
                'string' => ['text'],
            ],
            'partners' => [
                'string' => ['link'],
                'image' => ['img']
            ]
        ]
    ],

    'slider' => [// Использовать 'title' для заголовка
        'text' => ['seotext'],
        'string' => ['last_modified'],
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
        'text' => ['text'],
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
                'float' => ['price'],
                'string' => ['text']
            ],
        ]
    ],

    'advantages' => [// Использовать 'title' для заголовка
        'string' => ['sub_title'],
        'groups' => [
            'advantages_list' => [
                'image' => ['img'],
                'string' => ['advantage_title', 'text']
            ],
        ]
    ],

    'main_dop_text' => [
        'text' => ['text'],
    ],

    'main_windows_price' => [// Использовать 'title' для заголовка
        'groups' => [
            'main_windows_types' => [
                'string' => ['type_name']
            ],
            'main_windows_price_list' => [
                'image' => ['img'],
                'float' => ['price', 'full_price'],
                'main_windows_types' => ['superior']
            ],
        ]
    ],

    'main_balcony_price' => [// Использовать 'title' для заголовка
        'groups' => [
            'main_balcony_categories' => [
                'string' => ['category_name']
            ],
            'main_balcony_types' => [
                'string' => ['type_name'],
                'main_balcony_categories' => ['superior']
            ],
            'main_balcony_list' => [
                'image' => ['img'],
                'float' => ['price', 'full_price'],
                'main_balcony_types' => ['superior']
            ],
        ]
    ],

    'contacts' => [// Использовать 'title' для заголовка
        'string' => ['sub_title', 'last_modified'],
        'text' => ['seotext'],
        'groups' => [
            'contacts_list' => [
                'string' => ['longitude', 'latitude', 'address', 'phones', 'fax', 'mob',
                            'email', 'work_time', 'place_name']
            ],
        ]
    ],

    'about' => [// Использовать 'title' для заголовка
        'string' => ['last_modified'],
        'text' => ['text', 'seotext']
    ],

    'pay' => [// Использовать 'title' для заголовка
        'string' => ['last_modified'],
        'text' => ['text', 'seotext']
    ],

    'services' => [// Использовать 'title' для заголовка
        'string' => ['sub_title', 'last_modified'],
        'text' => ['seotext'],
        'groups' => [
            'services_list' => [
                'image' => ['img'],
                'string' => ['text']
            ],
        ]
    ],

    'sale' => [// Использовать 'title' для заголовка
        'string' => ['sub_title', 'last_modified'],
        'text' => ['text', 'seotext'],
        'groups' => [
            'sale_list' => [
                'image' => ['img'],
            ],
        ]
    ],

    'guarantee' => [// Использовать 'title' для заголовка
        'string' => ['banner_text', 'last_modified'],
        'text' => ['text', 'text2', 'reviews_title', 'seotext'],
        'file' => ['instruction', 'guarantee'],
        'groups' => [
            'guarantee_facts_list' => [
                'image' => ['img'],
                'string' => ['text']
            ],
            'reviews_list' => [
                'text' => ['text'],
                'string' => ['reviewer_name', 'city']
            ],
        ]
    ],

    'components' => [// Использовать 'title' для заголовка
        'string' => ['sub_title', 'last_modified'],
        'text' => ['seotext'],
        'groups' => [
            'components_categories' => [
                'string' => ['category_name', 'last_modified'],
                'text' => ['seotext'],
            ],
            'components_list' => [
                'string' => ['component_name', 'article', 'last_modified'],
                'float' => ['price'],
                'text' => ['text', 'seotext'],
                'image' => ['img'],
                'components_categories' => ['superior']
            ],
        ]
    ],

    'windows_price' => [// Использовать 'title' для заголовка
        'string' => ['sub_title', 'last_modified'],
        'text' => ['seotext'],
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
        'string' => ['sub_title', 'last_modified'],
        'text' => ['seotext'],
        'groups' => [
            'balcony_price_categories' => [
                'string' => ['category_name'],
            ],
            'balcony_price_list' => [
                'text' => ['text'],
                'image' => ['img'],
                'balcony_price_categories' => ['superior']
            ],
        ]
    ],

    'products' => [
        'string' => ['banner_1_title', 'banner_2_title', 'last_modified'],
        'text' => ['seotext'],
        'groups' => [
            'products_list_1' => [
                'string' => ['product_name', 'last_modified'],
                'text' => ['text', 'preview_text', 'seotext'],
                'image' => ['img'],
            ],
            'products_list_2' => [
                'string' => ['product_name', 'last_modified'],
                'text' => ['text', 'preview_text', 'seotext'],
                'image' => ['img'],
            ],
            'firms_list_1' => [
                'image' => ['img'],
            ],
            'firms_list_2' => [
                'image' => ['img'],
            ],
            'other_products_list' => [
                'string' => ['product_name', 'last_modified'],
                'text' => ['text', 'seotext'],
                'image' => ['img'],
            ],
        ]
    ],

    'calculator' => [// Использовать 'title' для заголовка
        'string' => ['sub_title', 'last_modified'],
        'text' => ['under_price', 'seotext'],
        'groups' => [
            'product_categories' => [
                'string' => ['category_name'],
                'image' => ['img'],
            ],
            'product_types' => [
                'string' => ['type_name'],
                'image' => ['img'],
                'int' => ['imposts_count', 'flaps_count'],
                'float' => ['furniture_price', 'furniture_price_color'],
                'product_categories' => ['superior']
            ],
        ]
    ],

    'for_calculator' => [
        'float' => ['net_price', 'net_price_color'],
        'groups' => [
            'colors' => [
                'string' => ['color_name'],
            ],
            'profiles' => [
                'string' => ['component_name'],
                'float' => ['price', 'price_color']
            ],
            'double_glazed_windows' => [
                'string' => ['component_name'],
                'float' => ['price']
            ],
            'outflow' => [
                'string' => ['component_name'],
                'float' => ['price']
            ],
            'window_sill' => [
                'string' => ['component_name'],
                'float' => ['price', 'price_color']
            ],
            'slope' => [
                'string' => ['component_name'],
                'float' => ['price', 'price_color']
            ],
        ]
    ],

    'blog' => [// Использовать 'title' для заголовка
        'string' => ['last_modified'],
        'text' => ['seotext'],
        'groups' => [
            'posts' => [
                'string' => ['post_name', 'last_modified'],
                'image' => ['img'],
                'text' => ['text', 'seotext']
            ],
        ]
    ],

];
