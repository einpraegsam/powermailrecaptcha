<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'powermailrecaptcha',
    'description' => 'Google recaptcha extension for powermail',
    'category' => 'plugin',
    'version' => '5.0.0',
    'state' => 'stable',
    'author' => 'Powermail Development Team',
    'author_email' => 'alexander.kellner@in2code.de',
    'author_company' => 'in2code.de',
    'constraints' => [
        'depends' => [
            'powermail' => '8.0.0-8.99.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ]
];
