<?php

return [
    'LibUserMain\\Model\\User' => [
        'fields' => [
            'email' => [
                'type' => 'VARCHAR',
                'length' => 150,
                'attrs' => [
                    'unique' => true,
                    'null' => false
                ],
                'index' => 1100
            ]
        ]
    ]
];