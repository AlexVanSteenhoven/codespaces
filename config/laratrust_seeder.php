<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => true,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'owner' => [
            'comments' => 'c,r,u,d',
            'tasks' => 'c,r,u,d',
            'projects' => 'c,r,u,d',
            'tickets' => 'c,r,u,d'
        ],
        'project' => [
            'comments' => 'c,r,u,d',
            'tasks' => 'c,r,u,',
            'projects' => 'r,u',
            'tickets' => 'c,r,u,d'
        ],
        'developer' => [
            'comments' => 'c,r,u,d',
            'tasks' => 'c,r,u',
            'projects' => 'r,u',
            'tickets' => 'c,r,u'
        ],
        'viewer' => [
            'comments' => 'c,r,u,d',
            'tasks' => 'r',
            'projects' => 'r',
            'tickets' => 'r'
        ],
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete',
    ],
];
