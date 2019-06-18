<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/skye-prod/user/config/site.yaml',
    'modified' => 1560855684,
    'data' => [
        'title' => 'Skye prod',
        'default_lang' => 'fr',
        'author' => [
            'name' => 'OMG Design',
            'email' => 'contact@omg-design.com'
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
        ]
    ]
];
