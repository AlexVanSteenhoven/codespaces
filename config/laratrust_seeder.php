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
        'superuser' => [
            'users' => 'c,r,u,d',
            'roles' => 'c,r,u,d',
            'profile' => 'c,r,u,d',
            'projects' => 'c,r,u,d',
            'tasks' => 'c,r,u,d',
            'comments' => 'c,r,u,d',
            'clients' => 'c,r,u,d',
        ],
        'administrator' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u',
            'projects' => 'c,r,u,d',
            'tasks' => 'c,r,u,d',
            'comments' => 'r,d',
            'clients' => 'c,r,u,d',
        ],
        'manager' => [
            'projects' => 'c,r,u,d',
            'tasks' => 'c,r,u,d',
            'comments' => 'r,d',
            'clients' => 'c,r,u,d',
        ],
        'developer' => [
            'tasks' => 'c,r,u,d',
            'comments' => 'r,d',
        ],
        'client' => [
            'comments' => 'r,d',
        ],
        'owner' => [
            'projects' => 'c,r,u,d',
            'tasks' => 'c,r,u,d',
            'comments' => 'r,d',
            'clients' => 'c,r,u,d',
            'users' => 'c,r,u,d',
        ],
        'user' => [
            'profile' => 'r,u',
        ],
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete',
    ],
];
