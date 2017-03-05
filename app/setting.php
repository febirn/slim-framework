<?php

return [
    'settings' => [
        'displayErrorDetails' => true,
        'db' => [
            'host' => 'localhost',
            'user' => 'root',
            'pass' => 'root',
            'port' => '',
            'name' => 'slim',
        ],

        'view' => [
            'path' => $_SERVER['SERVER_NAME'] . "/slim-framework/public",
            'path_view' => __DIR__ . "/../view",
            'path_asset' => __DIR__ . "/../public",
            'templates' => "/templates",
            'partial' => "/partial",
        ],
    ]
]

?>
