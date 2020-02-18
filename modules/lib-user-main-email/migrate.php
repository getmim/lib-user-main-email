<?php

return [
    'LibUserMain\\Model\\User' => [
        'fields' => [
            'email' => [
                'type' => 'VARCHAR',
                'length' => 150,
                'attrs' => [
                    'unique' => true
                ],
                'index' => 1100
            ]
        ]
    ]
];