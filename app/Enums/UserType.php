<?php

namespace App\Enums;

enum UserType: string
{
    case user = 'user';
    case admin = 'admin';

    public static function getOptions(): array
    {
        return [
            self::admin->value => 'Admin',
            self::user->value => 'User',
        ];
    }
}
