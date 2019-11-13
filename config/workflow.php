<?php

return [
    'blog_post'   => [
        'type' => 'state_machine',
        'marking_store' => [
            'type' => 'single_state',
        ],
        'supports' => [\App\BlogPost::class],
        'places' => [
            'draft',
            'review',
            'rejected',
            'published'
        ],
        'transitions'   => [
            'to_review' => [
                'from' => 'draft',
                'to' => 'review'
            ],
            'publish' => [
                'from' => 'review',
                'to' => 'published'
            ],
            'reject' => [
                'from' => 'review',
                'to' => 'rejected'
            ]
        ],
    ]
];
