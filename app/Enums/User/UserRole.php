<?php

namespace App\Enums\User;

use App\Supports\Enum;

enum UserRole: string
{
    use Enum;

    case User = 'user';
    case Host = 'host';

    public function badge(): string
    {
        return match ($this) {
            UserRole::User => 'bg-blue text-blue-fg',
            UserRole::Host => 'bg-green text-green-fg',
        };
    }
}