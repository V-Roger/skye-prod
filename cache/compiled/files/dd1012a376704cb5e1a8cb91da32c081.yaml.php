<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/skye-prod/user/config/site.yaml',
    'modified' => 1559194330,
    'data' => [
        'title' => 'Skye prod',
        'default_lang' => 'fr',
        'author' => [
            'name' => 'Virgil Roger',
            'email' => 'roger.virgil@gmail.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag',
            2 => 'pagetype'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ],
        'menu' => [
            0 => [
                'url' => '#',
                'text' => 'Sign Up',
                'classes' => 'button primary'
            ]
        ]
    ]
];
