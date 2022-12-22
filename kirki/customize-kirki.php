<?php
// Simple Shop PANEL
new \Kirki\Panel(
    'panel_simpleshop',
    [
        'priority'    => 10,
        'title'       => esc_html__( 'SimpleShop HomePage', 'simpleshop' ),
        'description' => esc_html__( 'SimpleShop Description.', 'simpleshop' ),
    ]
);

// Category Section

new \Kirki\Section(
    'section_category',
    [
        'title'           => esc_html__( 'Category Section', 'simpleshop' ),
        // 'description'     => esc_html__( 'SimpleShop Description.', 'simpleshop' ),
        'panel'           => 'panel_simpleshop',
        'priority'        => 10,
        'active_callback' => function () {
            return is_page_template( 'page-templates/homepage.php' );
        },
    ]
);

new \Kirki\Field\Checkbox_Switch(
    [
        'settings' => 'switch_setting_category',
        'label'    => esc_html__( 'Category Section', 'simpleshop' ),
        // 'description' => esc_html__( 'Enable OR Disable', 'simpleshop' ),
        'section'  => 'section_category',
        'default'  => 'on',
        'choices'  => [
            'on'  => esc_html__( 'Show Category', 'simpleshop' ),
            'off' => esc_html__( 'Hide Category', 'simpleshop' ),
        ],
    ]
);

new \Kirki\Field\Text(
    [
        'settings'        => 'text_setting_category',
        'label'           => esc_html__( 'Category Title', 'simpleshop' ),
        'section'         => 'section_category',
        'default'         => esc_html__( 'Shop By Category', 'simpleshop' ),
        'active_callback' => [
            [
                'setting'  => 'switch_setting_category',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ]
);

new \Kirki\Field\Text(
    [
        'settings'        => 'text_setting_categories_columns',
        'label'           => esc_html__( 'Categories Columns', 'simpleshop' ),
        'section'         => 'section_category',
        'default'         => 3,
        'active_callback' => [
            [
                'setting'  => 'switch_setting_category',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ]
);

new \Kirki\Field\Checkbox_Switch(
    [
        'settings'        => 'switch_setting_category_count',
        'label'           => esc_html__( 'Categories Count', 'simpleshop' ),
        'section'         => 'section_category',
        'default'         => 'on',
        'choices'         => [
            'on'  => esc_html__( 'Show Categories Count', 'simpleshop' ),
            'off' => esc_html__( 'Hide Categories Count', 'simpleshop' ),
        ],
        'active_callback' => [
            [
                'setting'  => 'switch_setting_category',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ]
);

// Product Section

new \Kirki\Section(
    'section_product',
    [
        'title'           => esc_html__( 'Product Section', 'simpleshop' ),
        // 'description'     => esc_html__( 'SimpleShop Description.', 'simpleshop' ),
        'panel'           => 'panel_simpleshop',
        'priority'        => 10,
        'active_callback' => function () {
            return is_page_template( 'page-templates/homepage.php' );
        },
    ]
);
new \Kirki\Field\Checkbox_Switch(
    [
        'settings' => 'switch_setting_product',
        'label'    => esc_html__( 'Product Section', 'simpleshop' ),
        // 'description' => esc_html__( 'Enable OR Disable', 'simpleshop' ),
        'section'  => 'section_product',
        'default'  => 'on',
        'choices'  => [
            'on'  => esc_html__( 'Show Product', 'simpleshop' ),
            'off' => esc_html__( 'Hide Product', 'simpleshop' ),
        ],
    ]
);
new \Kirki\Field\Text(
    [
        'settings'        => 'text_setting_product',
        'label'           => esc_html__( 'Product Title', 'simpleshop' ),
        'section'         => 'section_product',
        'default'         => esc_html__( 'New Arrival', 'simpleshop' ),
        'active_callback' => [
            [
                'setting'  => 'switch_setting_product',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ]
);
new \Kirki\Field\Textarea(
    [
        'settings'        => 'textarea_setting_product',
        'label'           => esc_html__( 'Product Description', 'simpleshop' ),
        'section'         => 'section_product',
        'default'         => esc_html__( '37 New fashion products arrived recently in our showroom for this winter ', 'simpleshop' ),
        'active_callback' => [
            [
                'setting'  => 'switch_setting_product',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ]
);