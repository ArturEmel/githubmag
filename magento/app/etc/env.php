<?php
return [
    'backend' => [
        'frontName' => 'admin_8434cr'
    ],
    'cache' => [
        'graphql' => [
            'id_salt' => 'lTHySbA44jgX5ZVXZLlO1gaB2DADZijq'
        ],
        'frontend' => [
            'default' => [
                'id_prefix' => '17a_'
            ],
            'page_cache' => [
                'id_prefix' => '17a_'
            ]
        ],
        'allow_parallel_generation' => false
    ],
    'remote_storage' => [
        'driver' => 'file'
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1
    ],
    'crypt' => [
        'key' => 'b97b7c7ae3d407e8585f7b70f2b778e9'
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'localhost',
                'dbname' => 'githubmag',
                'username' => 'rpal',
                'password' => '1234',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'default',
    'session' => [
        'save' => 'files'
    ],
    'lock' => [
        'provider' => 'db'
    ],
    'directories' => [
        'document_root_is_pub' => true
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'full_page' => 1,
        'config_webservice' => 1,
        'translate' => 1
    ],
    'downloadable_domains' => [
        'githubmag.test'
    ],
    'install' => [
        'date' => 'Tue, 08 Aug 2023 10:13:02 +0000'
    ]
];
