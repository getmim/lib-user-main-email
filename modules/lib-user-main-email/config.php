<?php

return [
    '__name' => 'lib-user-main-email',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/lib-user-main-email.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/lib-user-main-email' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'lib-user-main' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [],
        'files' => []
    ],
    'libFormatter' => [
        'formats' => [
            'user' => [
                'email' => [
                    'type' => 'text'
                ]
            ]
        ]
    ],
    'libForm' => [
        'forms' => [
            'admin.me.setting.profile' => [
                'email' => [
                    'type' => 'email',
                    'label' => 'Email',
                    'xpos' => 'right',
                    'xindex' => 0,
                    'rules' => [
                        'email' => true,
                        'unique' => [
                            'model' => 'LibUser\\Library\\Fetcher',
                            'field' => 'email',
                            'self' => [
                                'service' => 'user.id',
                                'field' => 'id'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];