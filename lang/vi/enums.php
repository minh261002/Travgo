<?php

use App\Enums\ActiveStatus;
use App\Enums\Module\ModuleStatus;
use App\Enums\User\UserLoginType;

return [
    ActiveStatus::class => [
        ActiveStatus::Active->value => 'Đang hoạt động',
        ActiveStatus::InActive->value => 'Không hoạt động',
    ],
    ModuleStatus::class => [
        ModuleStatus::Completed->value => 'Hoàn thành',
        ModuleStatus::InProgress->value => 'Đang tiến hành',
    ],
    UserLoginType::class => [
        UserLoginType::Email->value => 'Email',
        UserLoginType::Google->value => 'Google',
        UserLoginType::Facebook->value => 'Facebook',
    ],
];
