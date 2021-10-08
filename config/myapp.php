<?php

return [

    'mail_drivers'=> [
        'mail'    => 'Mail',
        'mailgun' => 'Mail Gun',
        'smtp'    => 'SMTP',
    ],

    'admin_prefix'=>'admin',

    'public_prefix'=>'account',

    'linkable_to_page' => [],

    'middleware' => [
        'backend' => [
            'auth.admin',
            'permissions',
        ],
        'account' => [
            'auth.account',
            /*'web'*/
        ],
        'api' => [
        ],
    ]
];
