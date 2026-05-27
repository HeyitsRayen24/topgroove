<?php

namespace App\Helpers;

use App\Models\User;

class RedirectHelper
{
    public static function redirectByRole(User $user)
    {
        return match($user->role->name)
        {
            'Admin' => redirect()->route('dashboard.admin'),
            'Member' => redirect()->route('dashboard.member'),

            default => redirect('/'),
        };
    }
}