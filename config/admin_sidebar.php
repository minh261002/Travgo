<?php

return [


    // [
    //     'active' => ['admin.user.*'],
    //     'show' => ['admin.user.*'],
    //     'title' => 'Khách hàng',
    //     'icon' => 'ti ti-user fs-2',
    //     'permission' => ['viewCustomer', 'createCustomer', 'editCustomer', 'deleteCustomer'],
    //     'children' => [
    //         [
    //             'title' => 'Thêm mới',
    //             'route' => 'admin.user.create',
    //             'icon' => 'ti ti-plus fs-3 me-2',
    //             'permission' => 'createCustomer'
    //         ],
    //         [
    //             'title' => 'Danh sách',
    //             'route' => 'admin.user.index',
    //             'icon' => 'ti ti-list fs-3 me-2',
    //             'permission' => 'viewCustomer'
    //         ]
    //     ]
    // ],
    // [
    //     'active' => ['admin.admin.*'],
    //     'show' => ['admin.admin.*'],
    //     'title' => 'Quản trị viên',
    //     'icon' => 'ti ti-user-shield fs-2',
    //     'permission' => ['viewAdmin', 'createAdmin', 'editAdmin', 'deleteAdmin'],
    //     'children' => [
    //         [
    //             'title' => 'Thêm mới',
    //             'route' => 'admin.admin.create',
    //             'icon' => 'ti ti-plus fs-3 me-2',
    //             'permission' => 'createAdmin'
    //         ],
    //         [
    //             'title' => 'Danh sách',
    //             'route' => 'admin.admin.index',
    //             'icon' => 'ti ti-list fs-3 me-2',
    //             'permission' => 'viewAdmin'
    //         ]
    //     ]
    // ],
    // [
    //     'active' => ['admin.setting.*'],
    //     'show' => ['admin.setting.*'],
    //     'title' => 'Cài đặt',
    //     'icon' => 'ti ti-settings fs-2',
    //     'permission' => ['viewAdmin', 'createAdmin', 'editAdmin', 'deleteAdmin'],
    //     'children' => [
    //         [
    //             'title' => 'Thêm mới',
    //             'route' => 'admin.admin.create',
    //             'icon' => 'ti ti-plus fs-3 me-2',
    //             'permission' => 'createAdmin'
    //         ],
    //         [
    //             'title' => 'Danh sách',
    //             'route' => 'admin.admin.index',
    //             'icon' => 'ti ti-list fs-3 me-2',
    //             'permission' => 'viewAdmin'
    //         ]
    //     ]
    // ],
    // [
    //     'active' => ['admin.role.*'],
    //     'show' => ['admin.role.*'],
    //     'title' => 'Vai trò',
    //     'icon' => 'ti ti-code fs-2',
    //     'permission' => ['viewRole', 'createRole', 'editRole', 'deleteRole'],
    //     'children' => [
    //         [
    //             'title' => 'Thêm mới',
    //             'route' => 'admin.role.create',
    //             'icon' => 'ti ti-plus fs-3 me-2',
    //             'permission' => 'createRole'
    //         ],
    //         [
    //             'title' => 'Danh sách',
    //             'route' => 'admin.role.index',
    //             'icon' => 'ti ti-list fs-3 me-2',
    //             'permission' => 'viewRole'
    //         ]
    //     ]
    // ],
    // [
    //     'active' => ['admin.permission.*'],
    //     'show' => ['admin.permission.*'],
    //     'title' => 'Quyền',
    //     'icon' => 'ti ti-code fs-2',
    //     'permission' => ['viewPermission', 'createPermission', 'editPermission', 'deletePermission'],
    //     'children' => [
    //         [
    //             'title' => 'Thêm mới',
    //             'route' => 'admin.permission.create',
    //             'icon' => 'ti ti-plus fs-3 me-2',
    //             'permission' => 'createPermission'
    //         ],
    //         [
    //             'title' => 'Danh sách',
    //             'route' => 'admin.permission.index',
    //             'icon' => 'ti ti-list fs-3 me-2',
    //             'permission' => 'viewPermission'
    //         ]
    //     ],
    // ],
    [
        'active' => ['admin.module.*'],
        'show' => ['admin.module.*'],
        'title' => 'Module',
        'icon' => 'ti ti-code fs-2',
        'permission' => ['viewModule', 'createModule', 'editModule', 'deleteModule'],
        'children' => [
            [
                'title' => 'Thêm mới',
                'route' => 'admin.module.create',
                'icon' => 'ti ti-plus fs-3 me-2',
                'permission' => 'createModule'
            ],
            [
                'title' => 'Danh sách',
                'route' => 'admin.module.index',
                'icon' => 'ti ti-list fs-3 me-2',
                'permission' => 'viewModule'
            ]
        ]
    ]
];
