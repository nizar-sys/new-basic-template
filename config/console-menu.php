<?php

$menuItems = [
    [
        'items' => [
            [
                'title' => 'Dashboard',
                'icon' => 'ri-home-smile-line',
                'route' => 'dashboard',
                'active' => 'dashboard',
                'submenu' => []
            ]
        ]
    ],
    [
        'header' => 'User Managements',
        'items' => [
            [
                'title' => 'Roles & Permissions',
                'icon' => 'ri-lock-2-line',
                'route' => '',
                'active' => ['permissions.*', 'roles.*'],
                'submenu' => [
                    [
                        'title' => 'Permission',
                        'route' => 'permissions.index',
                        'active' => 'permissions.*'
                    ],
                    [
                        'title' => 'Roles',
                        'route' => 'roles.index',
                        'active' => 'roles.*'
                    ]
                ]
            ],
            [
                'title' => 'Users',
                'icon' => 'ri-user-line',
                'route' => 'users.index',
                'active' => 'users.*',
                'submenu' => []
            ]
        ]
    ],
    [
        'header' => 'Settings',
        'items' => [
            [
                'title' => 'Profile',
                'icon' => 'ri-settings-4-line',
                'route' => 'profile.edit',
                'active' => 'profile.*',
                'submenu' => []
            ]
        ]
    ]
];

return $menuItems;
